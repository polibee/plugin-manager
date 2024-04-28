# 使用流程

使用插件指令时，需先启用开发模式，然后进插件目录，在插件目录直接使用指令。

## 1、启用开发模式

```sh
php artisan fresns
```

## 2、引入项目路径（自动识别，回车即可）

```sh
export /path/to/project/vendor/bin
```

## 3、进入插件目录

- 创建名为 DemoPlugin 的插件

```sh
fresns new DemoPlugin
```

- 进入插件 DemoPlugin 目录

```sh
fresns enter DemoPlugin
```

- 退出插件目录，回到项目根目录

```sh
fresns back
```

## 4、在插件目录执行开发、管理、控制指令
