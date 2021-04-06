<?php

return [
    '@PhpCsFixer' => true,
    '@PSR12' => true,
    '@PHP74Migration' => true,
    'psr_autoloading' => true,
    'increment_style' => ['style' => 'post'],
    'blank_line_before_statement' => [
        'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try'],
    ],
    'multiline_whitespace_before_semicolons' => [
        'strategy' => 'no_multi_line'
    ],
    'not_operator_with_successor_space' => false,
    'ordered_imports' => [
        'sortAlgorithm' => 'length',
    ],
    'simplified_null_return' => true,
    'no_superfluous_phpdoc_tags' => false,
];
