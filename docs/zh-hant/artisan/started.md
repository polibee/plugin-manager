# 使用流程

使用外掛指令時，需先啟用開發模式，再進外掛目錄，在外掛目錄直接使用指令。

## 1、啟用開發模式

```sh
php artisan fresns
```

## 2、引入專案路徑（自動識別，回車即可）

```sh
export /path/to/project/vendor/bin
```

## 3、進入外掛目錄

- 建立名為 DemoPlugin 的外掛

```sh
fresns new DemoPlugin
```

- 進入外掛 DemoPlugin 目錄

```sh
fresns enter DemoPlugin
```

- 退出外掛目錄，回到專案根目錄

```sh
fresns back
```

## 4、在外掛目錄執行開發、管理、控制指令

- [創建新外掛](create.md)
- [開發指令](development.md)
- [控制指令](control.md)
- [管理指令](management.md)
