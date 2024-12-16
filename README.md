# php tools

## install

```sh
composer require larafly/tools
```

## Use

* EnvUtil: get environment

```php

<?php
use Larafly\Tools\EnvUtil;

$is_local = EnvUtil::isLocal();
$is_test = EnvUtil::isTest();
$is_production = EnvUtil::isProduction();

```

