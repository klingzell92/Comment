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

rsync -av vendor/phkl16/comment/config/route2/comment.php config/route2
rsync -av vendor/phkl16/comment/config/route2/userController.php config/route2
You need to include the router file in your router configuration config/route.php. There is a sample you can use in vendor/phkl16/comment/config/route2.php.

View files
------------------
rsync -av vendor/phkl16/comment/view/* view/

DI services
---------------
You need to add the services di configuration config/di.php. There is a sample you can use in vendor/phkl16/comment/config/di.php.

License
------------------

This software carries a MIT license.



```
 .  
..:  Copyright (c) 2017 Philip Klingzell (philip.klingzell@gmail.com)
```
