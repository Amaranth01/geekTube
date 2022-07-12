<?php

require __DIR__ . '/Config.php';
require __DIR__ . '/Model/DB.php';

require __DIR__ . '/Controller/AbstractController.php';
require __DIR__ . '/Controller/ErrorController.php';
require __DIR__ . '/Controller/HomeController.php';
//require __DIR__ . '/auto/Controller/LogoutController.php';
//require __DIR__ . '/auto/Controller/AdminController.php';
//require __DIR__ . '/auto/Controller/CommentController.php';
//require __DIR__ . '/auto/Controller/ArticleController.php';
//require __DIR__ . '/auto/Controller/UserController.php';
//require __DIR__ . '/auto/Controller/SearchController.php';
//
//require __DIR__ . '/auto/Model/Entity/AbstractEntity.php';
//require __DIR__ . '/auto/Model/Entity/Article.php';
//require __DIR__ . '/auto/Model/Entity/Category.php';
//require __DIR__ . '/auto/Model/Entity/Comment.php';
//require __DIR__ . '/auto/Model/Entity/Platform.php';
//require __DIR__ . '/auto/Model/Entity/Role.php';
//require __DIR__ . '/auto/Model/Entity/User.php';
//require __DIR__ . '/auto/Model/Entity/Section.php';
//
//require __DIR__ . '/auto/Model/Manager/RoleManager.php';
//require __DIR__ . '/auto/Model/Manager/UserManager.php';
//require __DIR__ . '/auto/Model/Manager/ArticleManager.php';
//require __DIR__ . '/auto/Model/Manager/CategoryManager.php';
//require __DIR__ . '/auto/Model/Manager/CommentManager.php';
//require __DIR__ . '/auto/Model/Manager/PlatformManager.php';
//require __DIR__ . '/auto/Model/Manager/SectionManager.php';

require __DIR__ . '/Routing.php';

session_start();