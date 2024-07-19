# 總覽

## 使用指令

```sh
php artisan fresns                  # 進入外掛開發模式

fresns plugin                       # 查看所有可用指令
fresns plugin:list                  # 查看所有已安裝外掛
fresns new                          # 建立新外掛
fresns enter                        # 進入指定外掛目錄
fresns back                         # 回到專案根目錄
```

## 開發指令

```sh
fresns make:command                 # 產生外掛 Command
fresns make:migration               # 產生外掛 Migration
fresns make:seed                    # 產生外掛 Seed
fresns make:factory                 # 產生外掛 Factory
fresns make:provider                # 產生外掛 Provider
fresns make:controller              # 產生外掛 Controller
fresns make:model                   # 產生外掛 Model
fresns make:middleware              # 產生外掛 Middleware
fresns make:dto                     # 產生外掛 DTO (fresns/dto)
fresns make:mail                    # 產生外掛 Mail
fresns make:notification            # 產生外掛 Notification
fresns make:listener                # 產生外掛 Listener
fresns make:request                 # 產生外掛 Request
fresns make:event                   # 產生外掛 Event
fresns make:job                     # 產生外掛 Job
fresns make:policy                  # 產生外掛 Policy
fresns make:rule                    # 產生外掛 Rule
fresns make:resource                # 產生外掛 Resource
fresns make:test                    # 產生外掛 Test
fresns make:schedule-provider       # 產生外掛任務調度提供者
fresns make:event-provider          # 產生外掛事件服務提供者
fresns make:sql-provider            # 產生外掛 SQL 服務提供者
fresns make:exception-provider      # 產生外掛 Exception 服務提供者
fresns make:cmdword-provider        # 產生外掛指令字提供者 (fresns/cmd-word-manager)
```

## 控制指令

### fresns 模式

```sh
fresns plugin:unzip                 # 解壓縮外掛包到外掛目錄 /plugins/{fskey}/
fresns plugin:publish               # 發布外掛（分發靜態資源） /public/assets/{fskey}/
fresns plugin:unpublish             # 撤銷發布（刪除靜態資源）
fresns plugin:composer-update       # 更新外掛 Composer 依賴套件
fresns plugin:migrate               # 執行外掛 Migrate
fresns plugin:migrate-rollback      # 復原外掛 Migrate
fresns plugin:migrate-refresh       # 刷新外掛 Migrate
fresns plugin:migrate-reset         # 重置外掛 Migrate
fresns plugin:seed                  # 執行外掛 Seed
fresns plugin:install               # 安裝外掛（逐一執行 unzip/publish/composer-update/migrate 指令）
fresns plugin:uninstall             # 解除安裝外掛
```

### artisan 模式

```sh
php artisan plugin:unzip            # 解壓縮外掛包到外掛目錄 /plugins/{fskey}/
php artisan plugin:publish          # 發布外掛（分發靜態資源） /public/assets/{fskey}/
php artisan plugin:unpublish        # 撤銷發布（刪除靜態資源）
php artisan plugin:composer-update  # 更新外掛 Composer 依賴套件
php artisan plugin:migrate          # 執行外掛 Migrate
php artisan plugin:migrate-rollback # 復原外掛 Migrate
php artisan plugin:migrate-refresh  # 刷新外掛 Migrate
php artisan plugin:migrate-reset    # 重置外掛 Migrate
php artisan plugin:seed             # 執行外掛 Seed
php artisan plugin:install          # 安裝外掛（逐一執行 unzip/publish/composer-update/migrate 指令）
php artisan plugin:uninstall        # 解除安裝外掛
```

## 管理指令

### fresns 模式

```sh
fresns plugin:activate              # 啟用外掛程式
fresns plugin:deactivate            # 停用外掛程式
```

### artisan 模式

```sh
php artisan plugin:activate         # 啟用外掛程式
php artisan plugin:deactivate       # 停用外掛程式
```
