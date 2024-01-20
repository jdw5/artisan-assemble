<?php

namespace Jdw5\ArtisanAssemble\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class FilterMakeCommand extends GeneratorCommand
{
    protected $name = 'make:filter';
    protected $description = 'Create a new filter class';
    protected $type = 'Filter';

    protected function getStub()
    {
        return $this->resolveStubPath('/stubs/filter.stub');
    }

    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__.'/../..'.$stub;
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Filters';
    }

    protected function qualifyClass($name)
    {
        return parent::qualifyClass($name);
    }
}
