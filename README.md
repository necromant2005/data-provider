TweeProvider
===========

Version 1.0.1 Created by Rostislav Mykhajliw

Introduction
------------

TweeProvider is a list of traits for base usecases

Features / Goals
----------------

* Simple set/get/constructor/property traits

[![Build Status](https://travis-ci.org/necromant2005/tt-provider.png?branch=master)](https://travis-ci.org/necromant2005/tt-provider)

Installation
------------

### Main Setup

#### With composer

1. Add this to your composer.json:

```json
"require": {
    "necromant2005/": "1.*",
}
```

2. Now tell composer to download TweeProvider by running the command:

```bash
$ php composer.phar update
```

#### Usage

```php
use TweeProvider\Data;
class Book
{
   use Data\PropertyTrait, Data\ConstructTrait, Data\SetterGetterTrait;
}

$book = new Book(array(
    'name' => 'Alice in Wonderland',
));
$book->author = 'Lewis Carroll';

echo $book->name; // Alice in Wonderland
echo $book->author; // Lewis Carroll
```