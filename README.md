[![Build Status](https://travis-ci.org/klingzell92/Comment.svg?branch=master)](https://travis-ci.org/klingzell92/Comment)
[![CircleCI](https://circleci.com/gh/klingzell92/Comment.svg?style=svg)](https://circleci.com/gh/klingzell92/Comment)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/klingzell92/Comment/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/klingzell92/Comment/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/klingzell92/Comment/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/klingzell92/Comment/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/klingzell92/Comment/badges/build.png?b=master)](https://scrutinizer-ci.com/g/klingzell92/Comment/build-status/master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/8ea2a429-b530-428f-8250-fe21f7131c65/mini.png)](https://insight.sensiolabs.com/projects/8ea2a429-b530-428f-8250-fe21f7131c65)


phkl16 Comment module
==================================
Install
--------------

Install using composer and then integrate the module with your Anax installation.

Install with composer
--------------------------

composer require phkl16/comment

Router files
--------------

```shell
rsync -av vendor/phkl16/comment/config/route2/comment.php config/route2
rsync -av vendor/phkl16/comment/config/route2/userController.php config/route2
```

You need to include the router file in your router configuration config/route.php. There is a sample you can use in vendor/phkl16/comment/config/route2.php.

View files
------------------
```shell
rsync -av vendor/phkl16/comment/view/* view/
```
DI services
---------------
You need to add the services di configuration config/di.php. There is a sample you can use in vendor/phkl16/comment/config/di.php.

Database
------------
You need to have a database config file. There is a sample you can use under vendor/phkl16/config/database.php
You will also need to build upp your database, you can find sample files for the tables under vendor/phkl16/sql

License
------------------

This software carries a MIT license.



```
 .  
..:  Copyright (c) 2017 Philip Klingzell (philip.klingzell@gmail.com)
```
