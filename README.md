DialMyCalls.com PHP SDK
=======================
PHP wrapper for the DialMyCalls.com API. More information on our developer site: [http://www.dialmycalls.com/api-docs/](http://www.dialmycalls.com/api-docs/).

Requirements
---------------------
* PHP >= 5.3.2 with [cURL](http://php.net/manual/en/book.curl.php) extension
* [Guzzle](https://github.com/guzzle/guzzle) library

Autoload
---------------------
The new version of `dialmycalls-php-sdk` using [Composer](http://getcomposer.org).
The first step to use `dialmycalls-php-sdk` is to download Composer:

```bash
$ curl -s http://getcomposer.org/installer | php
```

Then we have to install our dependencies using:
```bash
$ php composer.phar install
```
Now we can use autoloader from Composer by:

```yaml
{
    "require": {
        "dialmycalls/php-sdk": "*"
    },
    "minimum-stability": "dev"
}
```

> `dialmycalls-php-sdk` follows the PSR-0 convention names for its classes, which means you can easily integrate `dialmycalls-php-sdk` classes loading in your own autoloader.

License
---------------------
`dialmycalls-php-sdk` is licensed under the MIT License - see the LICENSE file for details
