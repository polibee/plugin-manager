# 指令字開發

外掛作為一個獨立功能模組，從系統設計和業務封裝的角度，採用的是「[指令字](https://github.com/fresns/cmd-word-manager)」作為通訊模式，即一個外掛模組包含多個指令字，外部透過指令字方式來呼叫外掛的功能。外掛與主程式之間，外掛與外掛之間，皆透過指令字通訊。

## 產生

```sh
fresns make:cmdword-provider
```

進入外掛目錄，執行產生“指令字提供者”檔案。

## 註冊

將服務提供者加入 `plugin.json` 檔案中的 `providers` 陣列參數中。

```json
{
    // 在 plugin.json 檔案中找到 providers
    "providers": [
        "Plugins\\DemoPlugin\\Providers\\CmdWordServiceProvider"
    ]
}
```

## 對應

在指令字提供者檔案 `/plugins/DemoPlugin/Providers/CmdWordServiceProvider.php` 的屬性裡 `$cmdWordsMap` 中，新增指令字映射配置。

```php
<?php

namespace Plugins\DemoPlugin\Providers;

use Plugins\DemoPlugin\Models\SendCode;
use Plugins\DemoPlugin\Services\CheckCode;
use Plugins\DemoPlugin\Services\SendEmail;

class CmdWordServiceProvider extends ServiceProvider implements \Fresns\CmdWordManager\Contracts\CmdWordProviderContract
{
    <...>
    protected $fsKeyName = 'DemoPlugin';

    protected $cmdWordsMap = [
        ['word' => 'sendCode', 'provider' => [SendCode::class, 'handleSendCode']],
        ['word' => 'checkCode', 'provider' => [CheckCode::class, 'handleCheckCode']],
        ['word' => 'sendEmail', 'provider' => [SendEmail::class, 'handleSendEmail']],
    ];
    <...>
}
```

## 輸出

### 處理成功時輸出

```php
public function sendCode($wordBody)
{
    <...>

    return [
        'code' => 0, // 錯誤碼，成功為 0
        'message' => 'success',
        'data' => [
            // 處理結果數據
        ]
    ];
}
```

### 處理失敗時輸出

```php
public function sendCode($wordBody)
{
    <...>

    return [
        'code' => 21005, // 錯誤碼
        'message' => '指令字請求參數錯誤', // 錯誤描述
        'data' => [
            // 錯誤數據
        ]
    ];
}
```

## 使用

每次修改 `plugin.json` 配置訊息，需要重啟外掛，以便套用最新配置。
