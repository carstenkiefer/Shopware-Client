Shopware Client
========================

The Shopware-Client package defines an object-oriented layer for connections with Shopware-API.

Resources
---------

* [Documentation](https://github.com/ThemePoint/Shopware-Client/blob/master/DOCUMENTATION.md)
* [Issue reporting](https://github.com/ThemePoint/Shopware-Client/issues)

Examples
--------

```php
$connection = new \Shopbase\ShopwareClient\Connection(
    'myUsername',
    'myKey',
    'http://example.com',
    'api'
);

$client = new \Shopbase\ShopwareClient\Client($connection);

$result = $client->get(\Shopbase\ShopwareClient\Resources\Customer::class, 1)->toObject();
```
 
 

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=WPDZYBK6E4ZAG&source=url)
