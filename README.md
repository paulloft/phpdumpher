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
![Garden](https://raw.githubusercontent.com/paulloft/phpdumpher/master/example.png)
