<?php
/**
 * UserFrosting Cache (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/cache
 * @copyright Copyright (c) 2013-2019 Alexander Weissman
 * @license   https://github.com/userfrosting/cache/blob/master/LICENSE.md (MIT License)
 */

namespace UserFrosting\Cache;

use Illuminate\Cache\MemcachedConnector;
use Illuminate\Container\Container;

/**
 * MemcachedStore Class
 *
 * Setup a cache instance in a defined namespace using the `memcached` driver
 *
 * @author    Louis Charette
 */
class MemcachedStore extends ArrayStore
{
    /**
     * Extend the `ArrayStore` contructor to accept the memcached server and
     * port configuraton
     *
     * @param array          $memcachedConfig (default: [])
     * @param string         $storeName       (default: "default")
     * @param Container|null $app
     */
    public function __construct($memcachedConfig = [], $storeName = 'default', Container $app = null)
    {

        // Run the parent function to build base $app and $config
        parent::__construct($storeName, $app);

        // Merge argument config with default one
        $memcachedConfig = array_merge([
            'host'   => '127.0.0.1',
            'port'   => 11211,
            'weight' => 100,
            'prefix' => ''
        ], $memcachedConfig);

        // Memcached store requires a MemcachedConnector
        $this->app->singleton('memcached.connector', function () {
            return new MemcachedConnector();
        });

        // Setup the config for this file store
        // Nb.: Yes. The `servers` part is in a double array.
        $this->config['cache'] = [
            'prefix' => $memcachedConfig['prefix'],
            'stores' => [
                $this->storeName => [
                    'driver'  => 'memcached',
                    'servers' => [
                        $memcachedConfig
                    ]
                ]
            ]
        ];
    }
}
