# YaTailsCoords

This library will help you convert coordinates to yandex tail coords

[![Latest Stable Version](http://poser.pugx.org/rubillex/ya-tails-coords/v)](https://packagist.org/packages/rubillex/ya-tails-coords) [![Total Downloads](http://poser.pugx.org/rubillex/ya-tails-coords/downloads)](https://packagist.org/packages/rubillex/ya-tails-coords) [![PHP Version Require](http://poser.pugx.org/rubillex/ya-tails-coords/require/php)](https://packagist.org/packages/rubillex/ya-tails-coords)

## Installation

Run composer require command.

```sh
composer require rubillex/ya-tails-coords
```

# Usage:

```php
use Rubillex\YaTailsCoords\Converter;

$lat = '37.3345208';
$lon = '-122.0913298';

$coords = Converter::CoordsToTailsTranslate($lat, $lon);

$tailX = $coords->getTailX();
$tailY = $coords->getTailY();

/**
 * ['tail_x', 'tail_y']
 */
$tails = $coords->toArray();
```