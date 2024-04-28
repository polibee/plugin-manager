# 管理指令

## 启用插件

```sh
fresns plugin:activate
```

或者

```sh
php artisan plugin:activate DemoPlugin
```

::: details 路由缓存说明
- Fresns 主程序开启了路由缓存，在开发插件阶段，需要清空路由缓存，避免插件的路由不生效。

```sh
php artisan route:clear
```
:::

## 停用插件

```sh
fresns plugin:deactivate
```

或者

```sh
php artisan plugin:deactivate DemoPlugin
```
