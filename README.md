# Http Status Codes
Enums of all official http status codes and their descriptions.

## Installation
```
composer require ahmard/http-status-codes
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';


$sc = \HttpStatusCodes\StatusCode::CREATED;

// Get Status Code  =>  "201"
$sc->value;

$desc = $sc->describe();

// Get Status Code  =>  "201"
$desc->code;

// Get Status Code Title  => "Created"
$desc->title;
```

You can also get description of a given status code, the description is copied from Wikipedia.

```php
<?php

$sc = \HttpStatusCodes\StatusCode::CREATED;

// Get Description  =>  "The request has been fulfilled, resulting in the creation of a new resource."
$sc->describe()->desc;
```

* All titles & descriptions bundles in this package are collected from [Wikipedia - List of HTTP status codes](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes).

