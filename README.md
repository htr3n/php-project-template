# htr3n/php-project-template

[![Build Status](https://img.shields.io/travis/htr3n/php-project-template/master.svg?style=flat-square)](https://travis-ci.org/htr3n/php-project-template)
[![Latest Version](https://img.shields.io/packagist/v/htr3n/php-project-template.svg?style=flat-square)](https://packagist.org/packages/htr3n/php-project-template)
[![Total Downloads](https://img.shields.io/packagist/dt/htr3n/php-project-template.svg?style=flat-square)](https://packagist.org/packages/htr3n/project-template)
[![Software License](https://img.shields.io/badge/License-MIT-blue.svg?style=flat-square)](LICENSE)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](LICENSE)
[![Github All Releases](https://img.shields.io/github/downloads/htr3n/php-project-template/total.svg)]()

**htr3n/project-template** defines a simple PSR-4 project skeleton for PHP development.


## Installation

This project can be installed via [Composer]:

```sh
$ composer require htr3n/php-project-template
```

or just check out the git project

```sh
git clone https://github.com/htr3n/php-project-template.git
```

Then, start with `composer install` to retrieve necessary packages for development and testing.

The PHP sources will be in `src` and the test files will be in `tests`. These are configured with PSR-4 autoloading using Composer. More namespaces / sources can be easily added with appropriate changes to `composer.json`.

```json
{
  ...
  "autoload": {
    "psr-4": {
      "App\\": "src/App/"
    }
  },
  "autoload-dev": {
    "psr-4": {
      "App\\": "tests/App/"
    }
  }
 }
```
