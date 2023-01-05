# Hello World Symfony Bundle

Prepare the composer.json to install the bundle as composer package
```php
    "minimum-stability": "dev",
    "prefer-stable": true,
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/bmehler/hello-world-bundle.git"
        }
    ],
     "require": {
      ....  
```
To install the composer package do
```php
composer require bmehler/hello-world-bundle
```

Then just add this to config/routes.yaml

```php
app_bundle:
    resource: '@BmehlerHelloWorldBundle/Resources/config/routes.xml'
```