# 控制指令

## 解壓縮外掛包到外掛目錄

Unzip the plugin files into the `/plugins/` directory, the final directory will be `/plugins/{fskey}/`.

```sh
fresns plugin:unzip /www/wwwroot/fresns/storage/plugins/downloads/123e4567-e89b-12d3-a456-426614174000.zip
```

或者

```sh
php artisan plugin:unzip /www/wwwroot/fresns/storage/plugins/downloads/123e4567-e89b-12d3-a456-426614174000.zip
```

## 發布外掛（分發靜態資源）

Publish static resources for the plugin `DemoPlugin`.

```sh
fresns plugin:publish
```

或者

```sh
php artisan plugin:publish DemoPlugin
```

- `/plugins/DemoPlugin/Resources/assets/` Distribute to web directories `/public/assets/DemoPlugin/`

## 撤銷發布（刪除靜態資源）

Unpublish static resources for the plugin `DemoPlugin`.

```sh
fresns plugin:unpublish
```

或者

```sh
php artisan plugin:unpublish DemoPlugin
```

- `/plugins/DemoPlugin/Resources/assets/` Distribute to web directories `/public/assets/DemoPlugin/`

## 更新外掛 Composer 依賴套件

Composer all plugins.

```sh
fresns plugin:composer-update
```

或者

```sh
php artisan plugin:composer-update
```

## 執行外掛 Migrate

Migrate the given plugin, or without a plugin an argument, migrate all plugins.

```sh
fresns plugin:migrate
```

或者

```sh
php artisan plugin:migrate DemoPlugin
```

## 復原外掛 Migrate

Rollback the given plugin, or without an argument, rollback all plugins.

```sh
fresns plugin:migrate-rollback
```

或者

```sh
php artisan plugin:migrate-rollback DemoPlugin
```

## 刷新外掛 Migrate

Refresh the migration for the given plugin, or without a specified plugin refresh all plugins migrations.

```sh
fresns plugin:migrate-refresh
```

或者

```sh
php artisan plugin:migrate-refresh DemoPlugin
```

## 重置外掛 Migrate

Reset the migration for the given plugin, or without a specified plugin reset all plugins migrations.

```sh
fresns plugin:migrate-reset
```

或者

```sh
php artisan plugin:migrate-reset DemoPlugin
```

## 執行外掛 Seed

Seed the given plugin, or without an argument, seed all plugins.

```sh
fresns plugin:seed
```

或者

```sh
php artisan plugin:seed DemoPlugin
```

## 安裝外掛

Execute the `plugin:unzip`、`plugin:composer-update`、`plugin:migrate`、`plugin:publish` commands in that order.

```sh
fresns plugin:install /www/wwwroot/fresns/storage/plugins/123e4567-e89b-12d3-a456-426614174000.zip
```

或者

```sh
php artisan plugin:install /www/wwwroot/fresns/storage/plugins/123e4567-e89b-12d3-a456-426614174000.zip
```

`plugin:publish` 文件分發和入庫在最後執行，如果為升級外掛，可在入庫前，取得資料庫舊資訊判斷外掛是否存在以及舊版本號。如果外掛程式有跨版本特殊安裝處理，可憑此判斷新版和舊版之間的差距。

## 解除安裝外掛

Uninstall the plugin and select whether you want to clean the data of the plugin.

```sh
fresns plugin:uninstall --cleandata=true
fresns plugin:uninstall --cleandata=false
```

或者

```sh
php artisan plugin:uninstall DemoPlugin --cleandata=true
php artisan plugin:uninstall DemoPlugin --cleandata=false
```

- `/plugins/DemoPlugin/` Physically deletion the folder.
- `/public/assets/DemoPlugin/` Physically deletion the folder.
- Remove the plugin composer dependency package (skip if the main application or another plugin is in use)
- Logically deletion the value of the record where the `fskey` column of the `plugins` table is `DemoPlugin`.
