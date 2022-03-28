<?php

use Melhorenvio\PhpCsFixer\Style;
use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
  ->in([
    __DIR__.'/src',
  ]);

$style = new Style($finder, new Config);

return $style->rules();
