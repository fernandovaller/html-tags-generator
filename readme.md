# Video Thumbnail URL

Simple HTML Tag Generator

## Installation

Install the latest version with

```bash
$ composer require fernandovaller/html-tags-generator
```

## Basic Usage

```php
<?php

use FVCode\Html\Html;

require __DIR__ . '/vendor/autoload.php';

echo Html::a('link', [
    'href' => 'https://www.google.com'
]);

//<a href="https://www.google.com">link</a>
```
