<?php
/**
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

use UserFrosting\Sprinkle\Core\Util\NoCache;

/**
 * Routes for administrative role management.
 */
$app->group('/order', function () {
    $this->get('', 'UserFrosting\Sprinkle\Admin\Controller\OrderController:pageList')
        ->setName('uri_order');
})->add('authGuard')->add(new NoCache());

$app->group('/api/order', function () {
    $this->get('', 'UserFrosting\Sprinkle\Admin\Controller\OrderController:getList');
})->add('authGuard')->add(new NoCache());


