DialMyCalls.com PHP SDK
=======================
PHP wrapper for the DialMyCalls.com API. More information on our developer site: [http://www.dialmycalls.com/api-docs/](http://www.dialmycalls.com/api-docs/).

Requirements
---------------------
* PHP >= 5.3.2 with [cURL](http://php.net/manual/en/book.curl.php) extension
* [Guzzle](https://github.com/guzzle/guzzle) library

Autoload
---------------------
The first step to use `dialmycalls-php-sdk` is to download [Composer](http://getcomposer.org):

```bash
$ curl -s http://getcomposer.org/installer | php
```

Now we can add the SDK to composer.json:

```yaml
{
    "require": {
        "dialmycalls/php-sdk": "*"
    },
    "minimum-stability": "dev"
}
```

Then we have to install our dependencies using:

```bash
$ php composer.phar install
```

> `dialmycalls-php-sdk` follows the PSR-0 convention names for its classes, which means you can easily integrate `dialmycalls-php-sdk` classes loading in your own autoloader.

License
---------------------
`dialmycalls-php-sdk` is licensed under the MIT License - see the LICENSE file for details
