## Singapore IC Validator

A fast and easy to use Singapore IC validator.

## Requirements
PHP >= 5.3.0

## Installation

```
composer require pzinwai/singapore-ic-validator
```

## Usage

```php
use pzinwai\SingaporeICValidator\SingaporeICValidator;

$result = SingaporeICValidator::validateNRIC("SXXXXXXXZ");
```

If the returned value is `true`, then validation succeeds. 

If the returned value is `false`, then validation fails.