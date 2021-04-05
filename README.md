# Helper function #

Helper function package

## Installation ##

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
 composer require teamprodev/helper
```

or add below line to the require section of composer.json file and then run `php composer.phar update -vv --prefer-dist --profile`

```
"teamprodev/helper": "*"
```

## How To Use ##

 You should use in class
```
use teamprodev\helper\Main;

$main = new Main();
$main->helloWorld();
```

## Changelog ##

### 1.0 ###
* First version
