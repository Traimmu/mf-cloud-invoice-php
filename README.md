<!-- <?php -->

# mf_cloud-invoice-php

[MFクラウド請求書API](https://github.com/moneyforward/invoice-api-doc) client library for PHP

This library is inspired by [moneyforward/mf_cloud-invoice-ruby](https://github.com/moneyforward/mf_cloud-invoice-ruby)

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
$office = $client->office(); // => returns Traimmu\MfCloud\Invoice\Models\Office instance
echo $office->name; // => '株式会社Traimmu'

$office->update([
    'name' => 'section9',
    'zip' => '101-1111',
]);
echo $office->name; // => '150-0033'
```

# Loadmap

<!--

### Billings
### Partners
### Items

## Errors

-->

# Development

After checking out the repo, run `composer install` to install dependencies.

There are no tests now.

# Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/Traimmu/mf_cloud-invoice-php

# License

The gem is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).
