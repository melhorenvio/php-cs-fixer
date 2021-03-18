# PHP CS Fixer

This package is intended to centralize all PHP CS Fixer rules.

## Installation

You can install the package via composer:

```bash
composer require melhorenvio/php-cs-fixer
```

## Usage

```php
use Melhorenvio\PhpCsFixer\Style;
use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
  ->in([
    __DIR__.'/app',
    __DIR__.'/config',
    __DIR__.'/database',
    __DIR__.'/routes',
    __DIR__.'/tests',
  ]);
  
$style = new Style($finder, new Config);

return $style->rules([
    'your-rule' => true
]);
```
