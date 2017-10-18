# mf_cloud-invoice-php

[MFクラウド請求書API](https://github.com/moneyforward/invoice-api-doc) client library for PHP

# Installation

```
composer require traimmu/mf_cloud-invoice
```

# Usage

## Build client

```php
use Traimmu\MfCloud\Invoice\Client;

$client = new Client('YOUR_ACCESS_TOKEN');

$client->billings()->all();
// => your billings
```

## Basic usage

```php
// get information
$office = $client->office()->get() // => returns Illuminate\Support\Collection instance;

echo $office->get('name') // => 'Sample office'
```

### Office
### Billings
### Partners
### Items
## Errors
# Development
# Contributing
# License

The gem is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).
