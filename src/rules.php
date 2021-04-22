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
    'simplified_null_return' => true,
    'ordered_imports' => true,
    'yoda_style' => false,
    'global_namespace_import' => true,
    'no_superfluous_phpdoc_tags' => false,
    'concat_space' => [
        'spacing' => 'one',
    ],
    'single_line_comment_style' => false,
];
