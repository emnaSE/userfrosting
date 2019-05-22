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
 * Families: Baltic (Lithuanian)
 * 1 - ends in 1, not 11: 1, 21, 31, ... 101, 121, ...
 * 2 - ends in 0 or ends in 10-20: 0, 10, 11, 12, ... 19, 20, 30, 40, ...
 * 3 - everything else: 2, 3, ... 8, 9, 22, 23, ... 29, 32, 33, ...
 *
 * @see https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#Plural_rule_6_(3_forms)
 */
class Rule6 implements RuleInterface
{
    public static function getRule($number)
    {
        if (($number % 10 == 1) && ($number % 100 != 11)) {
            return 1;
        }

        if (($number % 10 < 2) || (($number % 100 >= 10) && ($number % 100 < 20))) {
            return 2;
        }

        return 3;
    }
}
