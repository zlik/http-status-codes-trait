#HTTP Status Codes Trait

A PHP trait which defines all standard HTTP status codes.

#Installing with Composer

```` json
"require": {
    "zlik/http-status-codes-trait": "dev-master"
}
````

#Usage

Mix the `\Zlik\HttpStatusCodes` trait into your class and utilize it's public properties to get HTTP status codes.
For example:
```php
class Foo {
    use \Zlik\HttpStatusCodes;
}

$foo = new Foo;
echo $foo->HTTP_NOT_FOUND; //outputs '404'
```

#Requirements

PHP 5.4+
