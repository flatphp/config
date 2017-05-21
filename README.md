# Config
light config component

# Install
```php
composer require "flatphp/config"
```

# Usage
```php
use Flatphp\Config\BaseArray as Config
Config::set(array(
    'db' => array(
	'host' => 'localhost',
	'port' => '3306',
	'username' => 'test',
	'password' => '123456',
	'dbname' => 'test'
    ),

    'redis' => array(
	'host' => 'localhost',
	'port' => '6379'
    )
));

$db_config = Config::get('db');

```

## OR
```php
use Flatphp\Config\BaseArray as Config
Config::set('key', 'value');
```