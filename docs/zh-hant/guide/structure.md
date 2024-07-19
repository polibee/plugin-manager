# 外掛結構

## 目錄結構

```php
laravel/            // 主機程式
└── plugins/            // 外掛目錄
    └── DemoPlugin/         // 範例外掛
        ├── app/
        ├── config/
        ├── database/
        ├── resources/
        │   ├── assets/
        │   │   ├── images/
        │   │   ├── js/
        │   │   └── css/
        │   ├── lang/
        │   └── views/
        ├── routes/
        ├── tests/
        ├── plugin.json
        └── composer.json
```

## plugin.json

```json
{
    "fskey": "DemoPlugin", // 唯一標識，大駝峰
    "name": "範例外掛", // 名字
    "description": "這是範例外掛", // 描述
    "author": "Jevan Tang", // 開發者
    "website": "https://github.com/jevantang", // 開發者首頁
    "version": "1.0.0", // 語意化版本號
    "providers": [
        "Plugins\\DemoPlugin\\Providers\\DemoPluginServiceProvider",
        "Plugins\\DemoPlugin\\Providers\\CmdWordServiceProvider",
        "Plugins\\DemoPlugin\\Providers\\EventServiceProvider"
    ],
    "autoloadFiles": [
        // autoload files
        "app/Http/Function.php"
    ],
    "aliases": {}
}
```

## composer.json

```json
{
    "name": "fresns/demo-plugin",
    "license": "Apache-2.0",
    "require": {
        "laravel/email": "^2.0"
    },
    "autoload": {
        "psr-4": {
            "Plugins\\DemoPlugin\\": "./"
        }
    }
}
```

# 外掛監聽事件

```php
protected $listen = [
    // 安裝中
    'plugin:installing' => [
        //
    ],

    // 外掛程式安裝完成
    'plugin:installed' => [
        // 
    ],

    // 外掛程式啟動中
    'plugin:activating' => [
        //
    ],

    // 外掛程式啟用完成
    'plugin:activated' => [
        //
    ],

    // 外掛程式停用中
    'plugin:deactivating' => [
        //
    ],

    // 外掛程式停用完成
    'plugin:deactivated' => [
        //
    ],

    // 外掛程式卸載中
    'plugin:uninstalling' => [
        //
    ],

    // 外掛程式卸載完成
    'plugin:uninstalled' => [
        //
    ],
];
```

## 資源檔案分發

外掛安裝發佈時，將靜態資源分發到 public 目錄。

| 外掛資料夾 | 分發到站台資源目錄 |
| --- | --- |
| /plugins/`{fskey}`/Resources/assets/ | /public/assets/`{fskey}`/ |
