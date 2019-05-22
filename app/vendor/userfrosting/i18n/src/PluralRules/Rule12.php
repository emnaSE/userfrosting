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
 * Families: Semitic (Arabic).
 *
 * 1 - 1
 * 2 - 2
 * 3 - ends in 03-10: 3, 4, ... 10, 103, 104, ... 110, 203, 204, ...
 * 4 - ends in 11-99: 11, ... 99, 111, 112, ...
 * 5 - everything else: 100, 101, 102, 200, 201, 202, ...
 * 6 - 0
 *
 * @see https://developer.mozilla.org/en-US/docs/Mozilla/Localization/Localization_and_Plurals#Plural_rule_12_(6_forms)
 */
class Rule12 implements RuleInterface
{
    public static function getRule($number)
    {
        if ($number == 1) {
            return 1;
        }

        if ($number == 2) {
            return 2;
        }

        if (($number % 100 >= 3) && ($number % 100 <= 10)) {
            return 3;
        }

        if (($number % 100 >= 11) && ($number % 100 <= 99)) {
            return 4;
        }

        if ($number != 0) {
            return 5;
        }

        return 6;
    }
}
