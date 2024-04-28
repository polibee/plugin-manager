# Management

## Activate Plugin

```sh
fresns plugin:activate
```

or

```sh
php artisan plugin:activate DemoPlugin
```

::: details Route Cache Description
- Fresns main program has route caching enabled. During the development phase of the plugin, the route cache must be cleared to prevent the plugin's routing from being ineffective.

```sh
php artisan route:clear
```
:::

## Deactivate Plugin

```sh
fresns plugin:deactivate
```

or

```sh
php artisan plugin:deactivate DemoPlugin
```
