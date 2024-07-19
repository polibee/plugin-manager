# 介紹

Laravel 指令字管理器是一個實用的 Laravel 擴充包，旨在幫助外掛（獨立功能模組）之間輕鬆實現通信。通過使用此擴充包，您可以更高效地組織和管理外掛之間的交互，提升整體應用的協同效果。

- [https://github.com/fresns/cmd-word-manager](https://github.com/fresns/cmd-word-manager)

## 安裝

```sh
composer require fresns/cmd-word-manager
```

## 查看

查看所有註冊的外掛，以及外掛註冊的指令字。

```php
\FresnsCmdWord::all();
```
