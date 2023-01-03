<?php

use PhpCsFixer\Config;

require __DIR__ . '/vendor/autoload.php';

return (new Config())
    ->setRules([
        '@PhpCsFixer' => true, // <-- removing this line will fix the issue
        'no_alternative_syntax' => [
            'fix_non_monolithic_code' => false
        ],
    ])
    ->setIndent('    ')
;
