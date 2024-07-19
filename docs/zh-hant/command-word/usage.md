# 指令字使用

外掛與主程式之間，外掛與外掛之間，均透過[指令字](https://github.com/fresns/cmd-word-manager)通訊，一個完整的通訊流程包括請求輸入 `input` 和結果輸出 `output`。

## 請求輸入 input

| 名稱 | 說明 |
| --- | --- |
| `\FresnsCmdWord` | 指令字立面（Facades） |
| `FresnsEmail` | 請求物件 `fskey`，留空或填 `Fresns` 則表示由主程式處理請求 |
| `sendEmail` | 指令字（可參考 [Fresns 指令字](https://docs.fresns.com/zh-hans/open-source/supports/cmd-words/basic.html)） |
| `$wordBody` | 指令字傳參的參數列表 |

```php
// $參數數組名 = [參數數組];
$wordBody = [
    'email' => '收件者信箱',
    'title' => '郵件標題',
    'content' => '郵件內容',
];

// \指令字立面::plugin('外掛名稱')->指令字($參數陣列名)
\FresnsCmdWord::plugin('FresnsEmail')->sendEmail($wordBody);
```

**另一種寫法**

```php
\FresnsCmdWord::plugin('FresnsEmail')->sendEmail([
    'email' => '收件者信箱',
    'title' => '郵件標題',
    'content' => '郵件內容',
]);
```

## 結果輸出 output

| 參數 | 說明 |
| --- | --- |
| code | 狀態碼 |
| message | 狀態資訊 |
| data | 輸出數據 |

```json
// 成功
{
    "code": 0,
    "message": "ok",
    "data": {
        //指令字輸出數據
    }
}

// 失敗
{
    "code": 21001,
    "message": "外掛不存在",
    "data": {
        //指令字輸出數據
    }
}
```

## 錯誤碼 error code

| Code | Message |
| --- | --- |
| 21000 | 未配置外掛 |
| 21001 | 外掛不存在 |
| 21002 | 指令字不存在 |
| 21003 | 指令字未知錯誤 |
| 21004 | 指令字無響應 |
| 21005 | 指令字請求參數錯誤 |
| 21006 | 指令字執行請求出錯 |
| 21007 | 指令字響應結果不正確 |
| 21008 | 數據異常，查詢不到或者數據重複 |
| 21009 | 執行異常，文件丟失或者記錄錯誤 |
| 21010 | 指令字功能已關閉 |
| 21011 | 指令字配置不正確 |

## 結果處理 fresnsResp

如果你是標準的使用指令字回參結果，可以藉助 Fresns Response 幫助你快速處理請求的返參。

**範例：**
```php
$fresnsResp = \FresnsCmdWord::plugin('FresnsEmail')->sendEmail($wordBody);
```

**處理異常狀況**
```php
if ($fresnsResp->isErrorResponse()) {
    return $fresnsResp->getErrorResponse();
}
```

**處理正常狀況**
```php
$fresnsResp->getOrigin(); //取得原始數據(code+message+data)

$fresnsResp->getCode(); //只取得 code
$fresnsResp->getMessage(); //只取得 message
$fresnsResp->getData(); //只取得 data 全量數據
$fresnsResp->getData('user.nickname'); //只取得 data 中指定參數，例如 data.user.nickname

$fresnsResp->isSuccessResponse(); //判斷請求是否為 true
$fresnsResp->isErrorResponse(); //判斷請求是否為 false

$fresnsResp->getErrorResponse(); //內部使用輸出原始數據，API 呼叫輸出 JSON
```
