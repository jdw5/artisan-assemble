# Artisan Assemble

Custom stubs and make commands for Laravel's artisan CLI.

## Installation
```console
composer require --dev jdw5/artisan-assemble
```

Once installed, you should publish the configuration file to customise your stubs by publishing them. This is also required to change the default page/modal stubs to use your own components - and change from Vue to react.
```console
php artisan vendor:publish --tag=artisan-assemble
```

In the published `config/artisan-assemble.php` file, you can select the file extension that should be used for your page/modal routes. By default, this is set to `.vue` but you can change this to whatever you require - just be sure to update the stubs accordingly.

## Available Commands

### `make:endpoint {name}`
This creates a new single action controller and request pair with opinionated namespacing. 

Example usage:
```console
php artisan make:controller User/Item/ItemStore
```

This will create two files: `App/Http/Controllers/User/Item/ItemStoreController.php` and `App/Http/Requests/User/Item/ItemStoreRequest.php`.

You can pass additional options to endpoint command.
- `-p` or `--page` will additionally create a page at the given namespace.
- `-m` or `--modal` will additionally create a modal at the given namespace.
- `-f` or `--form` will use the form variant of the page/modal component if they are specified

### `make:page {name}`
This will create a new page using your specified or the default stub at the given namespace.

### `make:modal {name}`
This will create a new modal using your specified or the default stub at the given namespace.

### `make:hash {name}`
This is a shorthand command to create hash casts for your models to obfuscate IDs (usually).

### `make:enum {name}`
This will create a new enum class at the given namespace within the `App\Enums` directory.

### `make:filter {name}`
This will create a new filter class at the given namespace within the `App\Filters` directory. Filters are used for pipelining operations, particularly for handling query parameters.

### `make:lib {name}`
Creates a Javascript/Typescript