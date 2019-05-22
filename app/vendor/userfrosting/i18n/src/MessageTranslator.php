<?php

/*
 * UserFrosting i18n (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/i18n
 * @copyright Copyright (c) 2013-2019 Alexander Weissman, Louis Charette
 * @license   https://github.com/userfrosting/i18n/blob/master/LICENSE.md (MIT License)
 */

namespace UserFrosting\I18n;

use UserFrosting\Support\Repository\Repository;

/**
 * MessageTranslator Class.
 *
 * Translate message ids to a message in a specified language.
 *
 * @author    Louis Charette
 * @author    Alexander Weissman (https://alexanderweissman.com)
 */
class MessageTranslator extends Repository
{
    /**
     * @var \Twig_Environment A Twig environment used to replace placeholders.
     */
    protected $twig;

    /**
     * @var string The default key that contains the pluralization code.
     */
    protected $defaultPluralKey = 'plural';

    /**
     * Create the translator.
     *
     * @param array $items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;

        $loader = new \Twig_Loader_Filesystem();
        $this->twig = new \Twig_Environment($loader);
    }

    /**
     * Translate the given message id into the currently configured language, substituting any placeholders that appear in the translated string.
     *
     * Return the $messageKey if not match is found
     *
     * @param string    $messageKey   The id of the message id to translate. can use dot notation for array
     * @param array|int $placeholders An optional hash of placeholder names => placeholder values to substitute (default : [])
     *
     * @return string The translated message.
     */
    public function translate($messageKey, $placeholders = [])
    {
        // Get the correct message from the specified key
        $message = $this->getMessageFromKey($messageKey, $placeholders);

        // Parse Placeholders
       // $message = $this->parsePlaceHolders($message, $placeholders);

        return $message;
    }

    /**
     * Get the message from key.
     * Go throught all registered language keys avaiable and find the correct
     * one to use, using the placeholders to select the correct plural form.
     *
     * @param string    $messageKey   The key to find the message for
     * @param array|int $placeholders Passed by reference, since plural placeholder will be added for later processing
     *
     * @return string The message string
     */
    protected function getMessageFromKey($messageKey, &$placeholders)
    {
        // If we can't find a match, return $messageKey
        if (!$this->has($messageKey)) {
            return $messageKey;
        }

        // Get message from items
        $message = $this->get($messageKey);

        // If message is an array, we'll need to go depper to get the actual string. Otherwise we're good to move on.
        if (!is_array($message)) {
            return $message;
        }

        // First, let's see if we can get the plural rules.
        // A plural form will always have priority over the `@TRANSLATION` instruction
        if (!empty(array_filter(array_keys($message), 'is_int'))) {

            // We start by picking up the plural key, aka which placeholder contains the numeric value defining how many {x} we have
            $pluralKey = $this->getPluralKey($message);

            // Let's get the plural value, aka how many {x} we have
            $pluralValue = $this->getPluralValue($placeholders, $pluralKey);

            // If no plural value was found, we either use the singular form or fallback to `@TRANSLATION` instruction
            if (is_null($pluralValue)) {

                // If we have a `@TRANSLATION` instruction, return this
                if ($this->has($messageKey.'.@TRANSLATION') && !is_null($this->get($messageKey.'.@TRANSLATION'))) {
                    return $this->get($messageKey.'.@TRANSLATION');
                }

                // Otherwise fallback to singular version
                $pluralValue = 1;
            }

            // If $placeholders is a numeric value, we transform back to an array for replacement in the main $message
            if (is_numeric($placeholders) || empty($placeholders)) {
                $placeholders = [$pluralKey => $pluralValue];
            }

            // At this point, we need to go deeper and find the correct plural form to use
            $plural = $this->getPluralMessageKey($message, $pluralValue);

            // Only return if the plural is not null. Will happen if the message array don't follow the rules
            if (!is_null($plural)) {
                return $message[$plural];
            }

            // One last check... If we don't have a rule, but the $pluralValue
            // as a key does exist, we might still be able to return it
            if (isset($message[$pluralValue])) {
                return $message[$pluralValue];
            }
        }

        // If we didn't find a plural form, we try to find the "@TRANSLATION" form.
        if ($this->has($messageKey.'.@TRANSLATION')) {
            return $this->get($messageKey.'.@TRANSLATION');
        }

        // If the message is an array, but we can't find a plural form or a "@TRANSLATION" instruction, we can't go further.
        // We can't return the array, so we'll return the key
        return $messageKey;
    }

    /**
     * Return the plural key from a translation array.
     * If no plural key is defined in the `@PLURAL` instruction of the message array, we fallback to the default one.
     *
     * @param array $messageArray
     *
     * @return string
     */
    protected function getPluralKey(array $messageArray)
    {
        if (isset($messageArray['@PLURAL'])) {
            return $messageArray['@PLURAL'];
        } else {
            return $this->defaultPluralKey;
        }
    }

    /**
     * Return the plural value, aka the nummber to display, from the placeholder values.
     *
     * @param array|int $placeholders Placeholder
     * @param string    $pluralKey    The plural key, for key => value match
     *
     * @return int|null The number, null if not found
     */
    protected function getPluralValue($placeholders, $pluralKey)
    {
        if (isset($placeholders[$pluralKey])) {
            return (int) $placeholders[$pluralKey];
        }

        if (!is_array($placeholders) && is_numeric($placeholders)) {
            return $placeholders;
        }

        // Null will be returned
    }

    /**
     * Return the correct plural message form to use.
     * When multiple plural form are available for a message, this method will return the correct oen to use based on the numeric value.
     *
     * @param array $messageArray The array with all the form inside ($pluralRule => $message)
     * @param int   $pluralValue  The numeric value used to select the correct message
     *
     * @return int Returns which key from $messageArray to use
     */
    protected function getPluralMessageKey(array $messageArray, $pluralValue)
    {
        // Bypass the rules for a value of "0" so that "0 users" may be displayed as "No users".
        if ($pluralValue == 0 && isset($messageArray[0])) {
            return 0;
        }

        // Get the correct plural form to use depending on the language
        $usePluralForm = $this->getPluralForm($pluralValue);

        // If the message array contains a string for this form, return it
        if (isset($messageArray[$usePluralForm])) {
            return $usePluralForm;
        }

        // If the key we need doesn't exist, use the previous available one.
        $numbers = array_keys($messageArray);
        foreach (array_reverse($numbers) as $num) {
            if (is_int($num) && $num > $usePluralForm) {
                break;
            }

            return $num;
        }

        // If no key was found, null will be returned
    }

    /**
     * Parse Placeholder.
     * Replace placeholders in the message with their values from the passed argument.
     *
     * @param string $message      The message to replace placeholders in
     * @param array  $placeholders An optional hash of placeholder (names => placeholder) values to substitute (default : [])
     *
     * @return string The message with replaced placeholders
     */
    protected function parsePlaceHolders($message, array $placeholders)
    {
        // Interpolate translatable placeholders values. This allows to
        // pre-translate placeholder which value starts with the `&` caracter
        foreach ($placeholders as $name => $value) {
            //We don't allow nested placeholders. They will return errors on the next lines
            if (is_array($value)) {
                continue;
            }

            // We test if the placeholder value starts the "&" caracter.
            // That means we need to translate that placeholder value
            if (substr($value, 0, 1) === '&') {
                // Remove the current placeholder from the master $placeholder
                // array, otherwise we end up in an infinite loop
                $data = array_diff($placeholders, [$name => $value]);

                // Translate placeholders value and place it in the main $placeholder array
                $placeholders[$name] = $this->translate(ltrim($value, '&'), $data);
            }
        }

        // We check for {{&...}} strings in the resulting message.
        // While the previous loop pre-translated placeholder value, this one
        // pre-translate the message string vars
        // We use some regex magic to detect them !
        $message = preg_replace_callback('/{{&(([^}]+[^a-z]))}}/', function ($matches) use ($placeholders) {
            return $this->translate($matches[1], $placeholders);
        }, $message);

        // Now it's time to replace the remaining placeholder. We use Twig do to this.
        // It's a bit slower, but allows to use the many Twig filters
        // See: http://twig.sensiolabs.org/doc/2.x/
        $template = $this->twig->createTemplate($message);
        $message = $template->render($placeholders);

        return $message;
    }

    /**
     * Determine which plural form we should use.
     * For some languages this is not as simple as for English.
     *
     * @see https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals
     *
     * @param int|float $number    The number we want to get the plural case for. Float numbers are floored.
     * @param mixed     $forceRule False to use the plural rule of the language package
     *                             or an integer to force a certain plural rule
     *
     * @return int The plural-case we need to use for the number plural-rule combination
     */
    public function getPluralForm($number, $forceRule = false)
    {
        // Default to English rule (1) or the forced one
        $ruleNumber = $this->getPluralRuleNumber($forceRule);

        // Get the rule class
        $class = "\UserFrosting\I18n\PluralRules\Rule$ruleNumber";
        if (!class_exists($class)) {
            throw new \OutOfRangeException("The rule number '$ruleNumber' must be between 0 and 16. ($class)");
        }

        return $class::getRule((int) $number);
    }

    /**
     * Return the correct rule number to use.
     *
     * @param bool|int $forceRule Force to use a particular rule. Otherwise, use the language defined one
     *
     * @return int
     */
    protected function getPluralRuleNumber($forceRule)
    {
        if ($forceRule !== false) {
            return $forceRule;
        }

        if ($this->has('@PLURAL_RULE')) {
            return $this->get('@PLURAL_RULE');
        }

        return 1;
    }
}
