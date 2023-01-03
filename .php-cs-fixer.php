<?php

use PhpCsFixer\Config;

require __DIR__ . '/vendor/autoload.php';

return (new Config())
    ->setRules([
        '@PhpCsFixer' => true,
        'no_alternative_syntax' => [
            'fix_non_monolithic_code' => true
        ],
    ])
    ->setIndent('    ')
;
