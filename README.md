# htr3n/php-project-template

[![Build Status](https://img.shields.io/travis/htr3n/php-project-template/master.svg?style=flat-square)](https://travis-ci.org/htr3n/php-project-template)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)
[![Github All Releases](https://img.shields.io/github/downloads/htr3n/php-project-template/total.svg)](https://github.com/htr3n/php-project-template/releases)

This project `htr3n/project-template` defines a simple starting point, PSR-4-compliant project skeleton for PHP development.


## Installation

For the starting point, just check out the git project

```sh
git clone https://github.com/htr3n/php-project-template.git
```

Then, issue the command `composer install` to retrieve necessary packages for your development and testing environment.

The sources will be in `src` and the test files will be in `tests`. These folders are configured with PSR-4 autoloading using Composer. More namespaces / sources can be easily added with appropriate changes to `composer.json`.

```json
"autoload": {
    "psr-4": {
      "App\\": "src/App/"
    }
}
```

and 

```json
"autoload-dev": {
    "psr-4": {
      "App\\": "tests/App/"
    }
 }
```
