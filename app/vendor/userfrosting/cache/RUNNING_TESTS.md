# Running Tests

## Prerequisites

### PHPUnit
Unit tests use PHPUnit framework (see http://www.phpunit.de for more information). PHPUnit can be installed via Composer together with other development dependencies using the following command from the command line.

```
php composer install --dev
```

If you don't have composer, you need to install it:
  1. [Get Composer and Follow Installation instructions here](https://getcomposer.org/download )
  2. Be sure to [install Composer **globally**](https://getcomposer.org/doc/00-intro.md#globally): `mv composer.phar /usr/local/bin/composer`

### Memcached
To test the Memcached driver (not to be confused with *memcache*), you'll need to install Memcached. See [Memcached documentation](http://www.memcached.org)

## Running
Once the prerequisites are installed, run the tests from the project root directory:
```
vendor/bin/phpunit
```

If the tests are successful, you should see something similar to this. Otherwise, the errors will be displayed.
```
PHPUnit 5.4.8-2-g44c37e0 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 41 ms, Memory: 3.75MB

OK (1 test, 18 assertions)
```

To successfully run all tests, you should have Memcached and Redis already installed and working. Those tests use the default server and port for each driver. If your environment uses non-default server and port, you might need to edits the test files. Driver specific tests and also be run :

```
# Basic and FileStore related tests
vendor/bin/phpunit  tests/CacheTest

# Memcached related tests
vendor/bin/phpunit  tests/MemcachedTest

# Redis related tests
vendor/bin/phpunit  tests/RedisTest
```
