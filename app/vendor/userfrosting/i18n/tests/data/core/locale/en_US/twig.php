<?php

/*
 * UserFrosting i18n (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/i18n
 * @copyright Copyright (c) 2013-2019 Alexander Weissman, Louis Charette
 * @license   https://github.com/userfrosting/i18n/blob/master/LICENSE.md (MIT License)
 */

return [
    'TWIG' => [
        'ESCAPE'         => 'Placeholder should be escaped : {{foo|e}}',
        'ESCAPE_DEFAULT' => 'Placeholder should be escaped : {{foo}}',
        'ESCAPE_NOT'     => 'Placeholder should NOT be escaped : {{foo|raw}}',

        'DEFAULT'        => "Using default: {{foo|default('bar')}}",
        'DEFAULT_NOT'    => 'Not using default: {{foo}}',

        'ABS'            => '{{number|abs}}',
        'ABS_NOT'        => '{{number}}',

        'DATE'           => "{{when|date('m/d/Y')}}",

        'FIRST'          => '{{numbers|first}}',
        'LAST'           => '{{numbers|last}}',

        'NUMBER_FORMAT'  => "{{ number|number_format(2, '.', ' ') }}",

        'LOWER'          => '{{string|lower}}',
        'UPPER'          => '{{string|upper}}',
        'CAPITALIZE'     => '{{string|capitalize}}',
    ],
];
