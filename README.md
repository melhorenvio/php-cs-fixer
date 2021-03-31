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

## Rules

- https://mlocati.github.io/php-cs-fixer-configurator/#version:2.18

## Configuration

Area for links that help you configure PHP CS Fixer on the developers' machine

#### PHPStorm
- https://blog.jetbrains.com/phpstorm/2018/11/php-cs-fixer-support/
- https://medium.com/hackernoon/how-to-configure-phpstorm-to-use-php-cs-fixer-1844991e521f
