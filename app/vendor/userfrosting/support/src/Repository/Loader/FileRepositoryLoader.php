<?php

/*
 * UserFrosting Support (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/support
 * @copyright Copyright (c) 2013-2019 Alexander Weissman
 * @license   https://github.com/userfrosting/support/blob/master/LICENSE.md (MIT License)
 */

namespace UserFrosting\Support\Repository\Loader;

use UserFrosting\Support\Exception\FileNotFoundException;

/**
 * Loads repository data from a list of file paths.
 *
 * @author Alexander Weissman (https://alexanderweissman.com)
 */
abstract class FileRepositoryLoader
{
    /**
     * @var array An array of paths to ultimately load the data from.
     */
    protected $paths = [];

    /**
     * Create the loader.
     *
     * @param string|string[] $paths
     */
    public function __construct($paths)
    {
        $this->setPaths($paths);
    }

    /**
     * Fetch content from a single file path.
     *
     * @param string $path
     *
     * @return array
     */
    abstract protected function parseFile($path);

    /**
     * Fetch and recursively merge in content from all file paths.
     *
     * @param bool $skipMissing
     *
     * @return array
     */
    public function load($skipMissing = true)
    {
        $result = [];

        foreach ($this->paths as $path) {
            $contents = $this->loadFile($path, $skipMissing);
            $result = array_replace_recursive($result, $contents);
        }

        return $result;
    }

    /**
     * Fetch content from a single file path.
     *
     * @param string $path
     * @param bool   $skipMissing True to ignore bad file paths.  If set to false, will throw an exception instead.
     *
     * @throws FileNotFoundException
     *
     * @return array
     */
    public function loadFile($path, $skipMissing = true)
    {
        if (!file_exists($path)) {
            if ($skipMissing) {
                return [];
            } else {
                throw new FileNotFoundException("The repository file '$path' could not be found.");
            }
        }

        // If the file exists but is not readable, we always throw an exception.
        if (!$this->isReadable($path)) {
            throw new FileNotFoundException("The repository file '$path' exists, but it could not be read.");
        }

        return $this->parseFile($path);
    }

    /**
     * Return if path is readable.
     *
     * @param string $path
     *
     * @return bool
     */
    protected function isReadable($path)
    {
        return is_readable($path);
    }

    /**
     * Add a file path to the top of the stack.
     *
     * @param string $path
     */
    public function addPath($path)
    {
        $this->paths[] = rtrim($path, '/\\');

        return $this;
    }

    /**
     * Add a file path to the bottom of the stack.
     *
     * @param string $path
     */
    public function prependPath($path)
    {
        array_unshift($this->paths, rtrim($path, '/\\'));

        return $this;
    }

    /**
     * Set the internal array of file paths.
     *
     * @param string|string[] $paths
     */
    public function setPaths($paths)
    {
        if (!is_array($paths)) {
            $paths = [$paths];
        }

        $this->paths = [];

        foreach ($paths as $path) {
            $this->addPath($path);
        }

        return $this;
    }

    /**
     * Return a list of all file paths.
     *
     * @return array
     */
    public function getPaths()
    {
        return $this->paths;
    }
}
