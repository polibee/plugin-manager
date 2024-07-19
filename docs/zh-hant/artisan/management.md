# 管理指令

## 啟用外掛程式

```sh
fresns plugin:activate
```

或者

```sh
php artisan plugin:activate DemoPlugin
```

::: details 路由快取說明
- Fresns 主程式開啟了路由緩存，在開發外掛階段，需要清空路由緩存，避免外掛的路由不生效。

```sh
php artisan route:clear
```
:::

## 停用外掛程式

```sh
fresns plugin:deactivate
```

或者

```sh
php artisan plugin:deactivate DemoPlugin
```
