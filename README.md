# Statamic Widget: Cache Controller

This widget lets you empty all of Statamic's caches right from the control panel dashboard.

## Requirements

- Statamic v6

## Installation

From your site folder, run `composer require stoffelio/statamic-widget-cache-controller` - or install it via the control panel.

## Usage

To add the widget to your control panel dashboard, edit the config under `config/statamic/cp.php` and add the following entry to the `widgets` array:

```php
[
    'type' => 'cache_controller',
    'width' => 50,
],
```

## Upgrading from v2

v3 moves the addon from the `webographen` vendor to `stoffelio`. The code is unchanged.

Run `composer remove webographen/statamic-widget-cache-controller` and then
`composer require stoffelio/statamic-widget-cache-controller`. Nothing else needs to change, because
the widget is registered by its `cache_controller` handle rather than by class name.

Two things only matter if you customised the addon:

- The PHP namespace is now `Stoffelio\CacheController\` instead of `Webographen\CacheController\`.
- The view namespace is now `stoffelio::` instead of `webographen::`. If you overrode the widget's
  view, move it from `resources/views/vendor/webographen/` to `resources/views/vendor/stoffelio/`.

## About

Built and maintained by [Alexander Stoffel](https://stoffel.io/), freelance Statamic and Laravel developer.
