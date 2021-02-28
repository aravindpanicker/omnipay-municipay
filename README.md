# Omnipay: MuniciPAY

### MuniciPAY driver for the Omnipay payment processing library

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment processing library for PHP 5.3+. This package implements MuniciPAY 2.0 support for Omnipay.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply require `league/omnipay` and `apanicker/omnipay-municipay` with Composer:

```
composer require league/omnipay apanicker/omnipay-municipay
```

## Basic Usage

The following gateways are provided by this package:

* Municipay

In order to use this driver, you need to acquire the test  `siteId`, `urlKey` and `prodId` list from [MuniciPAY](https://www.municipay.com). You can set the `testMode` parameter to `true` if you want to run the driver in sandbox mode.

```
use Omnipay\Omnipay;

$gateway = Omnipay::create('Municipay');

$gateway->initialize([
    'siteId' => 'xxxxxxxxxx',
    'urlKey' => 'xxxxxxxxxxxxxxxxxxxxxxxxx'
]);

$response = $gateway->purchase([
    'transactionId' => 1234,
    'redirectUrl' => 'https://example.com/callback/1234',
    'listItems' => [
        [
            "prodId" => "xxxxxxxxxxxxxxxxxxxxxxxxxx",
            "amount" => "100",
            "refNum" => "XXXXXXX"
        ],
        [
            "prodId" => "xxxxxxxxxxxxxxxxxxxxxxxxxx",
            "amount" => "80.00",
            "refNum" => "XXXXXXX"
        ]
    ]
])->send();

if ($response->isRedirect()) {
    $response->redirect();
}
```
For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay) repository.

## Support

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/aravindpanicker/omnipay-municipay/issues),
or better yet, fork the library and submit a pull request.