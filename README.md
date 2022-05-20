# UUID
[![Build Status](https://github.com/GollumSF/uuid/actions/workflows/php_7.1.yml/badge.svg?branch=master)](https://github.com/GollumSF/uuid/actions)
[![Build Status](https://github.com/GollumSF/uuid/actions/workflows/php_7.2.yml/badge.svg?branch=master)](https://github.com/GollumSF/uuid/actions)
[![Build Status](https://github.com/GollumSF/uuid/actions/workflows/php_7.3.yml/badge.svg?branch=master)](https://github.com/GollumSF/uuid/actions)
[![Build Status](https://github.com/GollumSF/uuid/actions/workflows/php_7.4.yml/badge.svg?branch=master)](https://github.com/GollumSF/uuid/actions)
[![Build Status](https://github.com/GollumSF/uuid/actions/workflows/php_8.0.yml/badge.svg?branch=master)](https://github.com/GollumSF/uuid/actions)
[![Build Status](https://github.com/GollumSF/uuid/actions/workflows/php_8.1.yml/badge.svg?branch=master)](https://github.com/GollumSF/uuid/actions)

[![Coverage](https://coveralls.io/repos/github/GollumSF/uuid/badge.svg?branch=master)](https://coveralls.io/github/GollumSF/uuid)
[![License](https://poser.pugx.org/gollumsf/uuid/license)](https://packagist.org/packages/gollumsf/uuid)
[![Latest Stable Version](https://poser.pugx.org/gollumsf/uuid/v/stable)](https://packagist.org/packages/gollumsf/uuid)
[![Latest Unstable Version](https://poser.pugx.org/gollumsf/uuid/v/unstable)](https://packagist.org/packages/gollumsf/uuid)
[![Discord](https://img.shields.io/discord/671741944149573687?color=purple&label=discord)](https://discord.gg/xMBc5SQ)

An minimal implementation of uuid for PHP

## Installation:

```shell
composer require gollumsf/uuid
```

## Usages:

### Basic:

```php
<?php

use GollumSF\UUID\UUID;

$uuid = new UUID();

echo 'UUID='.$uuid; // UUID=12c634e0-0a86-cec3-03e6-7086f84d98

```
