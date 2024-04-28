# Control

## Unzip The Plugin Package

Unzip the plugin files into the `/plugins/` directory, the final directory will be `/plugins/{fskey}/`.

```sh
fresns plugin:unzip /www/wwwroot/fresns/storage/plugins/downloads/123e4567-e89b-12d3-a456-426614174000.zip
```

or

```sh
php artisan plugin:unzip /www/wwwroot/fresns/storage/plugins/downloads/123e4567-e89b-12d3-a456-426614174000.zip
```

## Publish Plugin

Publish static resources for the plugin `DemoPlugin`.

```sh
fresns plugin:publish
```

or

```sh
php artisan plugin:publish DemoPlugin
```

- `/plugins/DemoPlugin/Resources/assets/` Distribute to web directories `/public/assets/DemoPlugin/`

## Unpublish

Unpublish static resources for the plugin `DemoPlugin`.

```sh
fresns plugin:unpublish
```

or

```sh
php artisan plugin:unpublish DemoPlugin
```

- `/plugins/DemoPlugin/Resources/assets/` Distribute to web directories `/public/assets/DemoPlugin/`

## Update Plugin Composer Package

Composer all plugins.

```sh
fresns plugin:composer-update
```

or

```sh
php artisan plugin:composer-update
```

## Run Plugin Migrate

Migrate the given plugin, or without a plugin an argument, migrate all plugins.

```sh
fresns plugin:migrate
```

or

```sh
php artisan plugin:migrate DemoPlugin
```

## Rollback Plugin Migrate

Rollback the given plugin, or without an argument, rollback all plugins.

```sh
fresns plugin:migrate-rollback
```

or

```sh
php artisan plugin:migrate-rollback DemoPlugin
```

## Refresh Plugin Migrate

Refresh the migration for the given plugin, or without a specified plugin refresh all plugins migrations.

```sh
fresns plugin:migrate-refresh
```

or

```sh
php artisan plugin:migrate-refresh DemoPlugin
```

## Reset Plugin Migrate

Reset the migration for the given plugin, or without a specified plugin reset all plugins migrations.

```sh
fresns plugin:migrate-reset
```

or

```sh
php artisan plugin:migrate-reset DemoPlugin
```

## Run Plugin Seed

Seed the given plugin, or without an argument, seed all plugins.

```sh
fresns plugin:seed
```

or

```sh
php artisan plugin:seed DemoPlugin
```

## Install Plugin

Execute the `plugin:unzip`、`plugin:composer-update`、`plugin:migrate`、`plugin:publish` commands in that order.

```sh
fresns plugin:install /www/wwwroot/fresns/storage/plugins/123e4567-e89b-12d3-a456-426614174000.zip
```

or

```sh
php artisan plugin:install /www/wwwroot/fresns/storage/plugins/123e4567-e89b-12d3-a456-426614174000.zip
```

## Uninstall Plugin

Uninstall the plugin and select whether you want to clean the data of the plugin.

```sh
fresns plugin:uninstall --cleardata=true
fresns plugin:uninstall --cleardata=false
```

or

```sh
php artisan plugin:uninstall DemoPlugin --cleardata=true
php artisan plugin:uninstall DemoPlugin --cleardata=false
```

- `/plugins/DemoPlugin/` Physically deletion the folder.
- `/public/assets/DemoPlugin/` Physically deletion the folder.
- Remove the plugin composer dependency package (skip if the main application or another plugin is in use)
- Logically deletion the value of the record where the `fskey` column of the `plugins` table is `DemoPlugin`.
