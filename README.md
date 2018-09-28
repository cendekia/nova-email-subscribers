# Nova Email Subscribers

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cendekia/nova-email-subscribers.svg?style=flat-square)](https://packagist.org/packages/cendekia/nova-email-subscribers)
![CircleCI branch](https://img.shields.io/circleci/project/github/cendekia/nova-email-subscribers/master.svg?style=flat-square)
[![Build Status](https://img.shields.io/travis/cendekia/nova-email-subscribers/master.svg?style=flat-square)](https://travis-ci.org/cendekia/nova-email-subscribers)
[![Quality Score](https://img.shields.io/scrutinizer/g/cendekia/nova-email-subscribers.svg?style=flat-square)](https://scrutinizer-ci.com/g/cendekia/nova-email-subscribers)
[![Total Downloads](https://img.shields.io/packagist/dt/cendekia/nova-email-subscribers.svg?style=flat-square)](https://packagist.org/packages/cendekia/nova-email-subscribers)


Email Subscribers is a tool that needs for blogger, markerter and website owner to manage a list of their subscribers.

Add a screenshot of the tool here.

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require cendekia/nova-email-subscribers
```

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function tools()
{
    return [
        // ...
        new \Cendekia\EmailSubscribers\EmailSubscribers,
    ];
}
```

## Usage

Click on the "Subscribers" menu item in your Nova app to see the tool provided by this package.

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email me@cendekiapp.com instead of using the issue tracker.

## Credits

- [Cendekia Pramana Putra](https://github.com/cendekia)

## Support us

Buy me a cup of ☕ americano on the rocks. [Patreon](https://www.patreon.com/cendekia)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
