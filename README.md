HTTP Status Codes Trait
=======================

A PHP trait which provides HTTP status code properties.

Installing with Composer
========================

```` json
"require": {
    "zlik/http-status-codes-trait": "dev-master"
}
````

Usage
=====


Mix the `\Zlik\HttpStatusCodes` trait into your class and utilize the existing HTTP status codes as class properties. 
Consider the following example of usage with Silex framework.

```` php
use Silex\Application;

class MyApplication extends Application {
    use \Zlik\HttpStatusCodes;
}

$app = new MyApplication;
$app->error(function (\Exception $e, $code) use ($app) {
    $responseMsg = $code == $app->HTTP_NOT_FOUND ? 'The requested page could not be found.' : $e->getMessage(), $code;
    return new Response($responseMsg);
});
````

Requirements
============

PHP 5.4+
