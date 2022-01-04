# HTML Tag Generator

Simple HTML Tag Generator

## Installation

Install the latest version with

```bash
$ composer require fernandovaller/html-tags-generator "1.*"
```

## Basic Usage

```php
<?php

use FVCode\Html\Html;

require __DIR__ . '/vendor/autoload.php';

echo Html::a('link', [
    'href' => 'https://www.google.com'
]);

//Out: <a href="https://www.google.com">link</a>
```

## Tables

```php
<?php

use FVCode\Html\Html;

require __DIR__ . '/vendor/autoload.php';

$table['thead'] = ['th 1', 'th 2'];

$table['tbody'][] = ['td 1', 'td 2'];
$table['tbody'][] = ['td 3', 'td 4'];

$table['tfoot'] = ['td 1', 'td 2'];

echo Html::table($table, ['table' => [
    "border" => 1
]]);
```

## Reference methods

```php
comment h1 h2 h3 h4 h5 h6 p b strong i em mark small del ins sub sup blockquote q abbr address cite bdo a img picture figure figcaption ul ol dl li dt dd header footer main nav div article section aside fieldset legend span iframe table thead tbody tfoot tr td th
```
