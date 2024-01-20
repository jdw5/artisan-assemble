<?php

namespace Jdw5\ArtisanEndpoints\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class EnumMakeCommand extends GeneratorCommand
{
    protected $name = 'make:enum';
    protected $description = 'Create a new PHP Enum';
    protected $type = 'Enum';

    protected function getStub()
    {
        return $this->resolveStubPath('/stubs/enum.stub');
    }

    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__.'/../..'.$stub;
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Enums';
    }

    protected function qualifyClass($name)
    {
        return parent::qualifyClass($name);
    }
}
