<?php

/*
 * UserFrosting i18n (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/i18n
 * @copyright Copyright (c) 2013-2019 Alexander Weissman, Louis Charette
 * @license   https://github.com/userfrosting/i18n/blob/master/LICENSE.md (MIT License)
 */

namespace UserFrosting\I18n\PluralRules;

/**
 * Families: Slavic (Slovenian, Sorbian)
 * 1 - ends in 01: 1, 101, 201, ...
 * 2 - ends in 02: 2, 102, 202, ...
 * 3 - ends in 03-04: 3, 4, 103, 104, 203, 204, ...
 * 4 - everything else: 0, 5, 6, 7, 8, 9, 10, 11, ...
 *
 * @see https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#Plural_rule_10_(4_forms)
 */
class Rule10 implements RuleInterface
{
    public static function getRule($number)
    {
        if ($number % 100 == 1) {
            return 1;
        }

        if ($number % 100 == 2) {
            return 2;
        }

        if (($number % 100 == 3) || ($number % 100 == 4)) {
            return 3;
        }

        return 4;
    }
}
