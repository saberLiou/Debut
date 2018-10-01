# Laravel Debut Package

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]

A simple Laravel package created by saberLiou to implement debut package creation and composer require it in any Laravel project from here.

## Installation

Via Composer

``` bash
$ composer require saberliou/debut
```

## Usage

```
$ php artisan vendor:publish --provider="saberLiou\Debut\DebutServiceProvider"
```

This will publish DebutController and debut.blade.php, and load a display route from DebutServiceProvider in the package.

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email saberliou@gmail.com instead of using the issue tracker.

## Credits

- [saberLiou][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/saberliou/debut.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/saberliou/debut.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/saberliou/debut/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/saberliou/debut
[link-downloads]: https://packagist.org/packages/saberliou/debut
[link-travis]: https://travis-ci.org/saberliou/debut
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/saberliou
[link-contributors]: ../../contributors]