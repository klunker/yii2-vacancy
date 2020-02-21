Vacancy (job) module for Yii2
=============================
Vacancy is a simple job module for Yii2. This module use a CRUD ActiveRecords system.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist klunker/yii2-vacancy "*"
```

or add

```
"klunker/yii2-vacancy": "*"
```

to the require section of your `composer.json` file.

WARNING! This package not publish on http://packagist.org/  and you need you need to add a GitHub repository to your main `composer.json`

```php
"repositories": [
    ...
    {
        "type": "git",
        "url": "https://github.com/klunker/yii2-vacancy"
    }
    ...
]
```

Configure
---------

You need to enable module in application config `@backend/config/main.php`

```php
'bootstrap' => ['vacancy'],
'modules' => [
    'vacancy' => [
        'class' => 'klunker\vacancy\Module',
    ],
],
```

Usage
-----
Administration panel is available at yourdomain.com/pathtoadmin/vacancy

Once the extension is installed, simply use it in your code by:

```php
<?= \klunker\vacancy\SlideCardVacancy::widget(); ?>
```