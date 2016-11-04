# phpdumpher
DumPHPer is an advanced PHP variable dumper, that shows detailed info in a simple way.

### Usages
```php
\Dumphper\Dumphper::dump($data);
```
### Extended functionality
```php
function d() {
    $args = func_get_args();
    foreach ($args as $a) {
        \Dumphper\Dumphper::dump($a);
    }
    exit();
}
```

Installation
------------

*Requres PHP 5.3 or higher*

PHPdumphper is [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md) compliant and can be installed using [composer](//getcomposer.org). Just add `paulloft/dumphper` to your composer.json.

```json
"require": {
    "paulloft/dumphper": "*"
}
```

### Example of output
![Garden](https://3.downloader.disk.yandex.ru/disk/e86d0de867971ff4f833aa35504ab9067e770ca8f7e64aa7613aaa7a615dbbb6/581cc960/fKqInKw3d7bLFOeFnMGnhEZvdhHDyqJkmM926RX2lovZClPMJgA-U4LAnFmNVjo3uaj9Jpc3O4bUDRo_ITTff0Zkf9H3j8hsMFv1iltPwhCr8npumZHI4midPdWhecNq?uid=0&filename=3e14969f48f3.png&disposition=inline&hash=&limit=0&content_type=image%2Fpng&fsize=21182&hid=ea16df3cac21f87fe5e0c5fac86f1278&media_type=image&tknv=v2&etag=4d02c8255d527d5e3bdac4cd1cc0a6b4)
