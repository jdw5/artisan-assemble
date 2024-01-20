<?php

namespace Jdw5\ArtisanAssemble\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class HashMakeCommand extends GeneratorCommand
{
    protected $name = 'make:hash';
    protected $description = 'Create a new hash class';
    protected $type = 'Hash';

    protected function getStub()
    {
        return $this->resolveStubPath('/stubs/hash.stub');
    }

    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__.'/../..'.$stub;
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Casts\Hash';
    }

    protected function qualifyClass($name)
    {
        return parent::qualifyClass($name);
    }
}
