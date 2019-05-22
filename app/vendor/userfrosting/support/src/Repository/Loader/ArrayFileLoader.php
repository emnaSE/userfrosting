<?php

/*
 * UserFrosting Support (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/support
 * @copyright Copyright (c) 2013-2019 Alexander Weissman
 * @license   https://github.com/userfrosting/support/blob/master/LICENSE.md (MIT License)
 */

namespace UserFrosting\Support\Repository\Loader;

/**
 * Load files from a PHP array.
 *
 * @author Alexander Weissman (https://alexanderweissman.com)
 */
class ArrayFileLoader extends FileRepositoryLoader
{
    /**
     * @return array
     */
    protected function parseFile($path)
    {
        return require $path;
    }
}
