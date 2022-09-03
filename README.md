# aminnairi/string-extra

Extra utilities for working with strings in PHP.

## Usage

### Requirements

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)

### Installation

```bash
composer require aminnairi/string-extra
```

### Example

```bash
touch main.php
```

```php
<?php

require_once __DIR__ . "/vendor/autoload.php"

use Aminnairi\StringExtra\StringExtra;

echo StringExtra::toSentenceCase("toString");
```

```bash
php main.php
To String
```

## Development

### Requirements

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

### Docker Compose services build

```bash
docker-compose build
```

### PHP vendor installation

```bash
docker-compose run --rm composer install
```

### Unit tests run

```bash
docker-compose run --rm php vendor/bin/pest
```
