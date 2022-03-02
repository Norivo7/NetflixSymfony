<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'admin_panel' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'error' => [[], ['_controller' => 'App\\Controller\\ExceptionController::handleError'], [], [['text', '/error']], [], []],
    'app_mailer_sendemail' => [[], ['_controller' => 'App\\Controller\\MailerController::sendEmail'], [], [['text', '/email']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MoviesController::home'], [], [['text', '/']], [], []],
    'browse' => [[], ['_controller' => 'App\\Controller\\MoviesController::index'], [], [['text', '/browse']], [], []],
    'shows' => [[], ['_controller' => 'App\\Controller\\MoviesController::shows'], [], [['text', '/shows']], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\MoviesController::profile'], [], [['text', '/profile']], [], []],
    'show-one' => [['id'], ['_controller' => 'App\\Controller\\MoviesController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/show']], [], []],
    'myList' => [[], ['_controller' => 'App\\Controller\\MoviesController::myList'], [], [['text', '/myList']], [], []],
    'movies' => [[], ['_controller' => 'App\\Controller\\MoviesController::movies'], [], [['text', '/movies']], [], []],
    'new' => [[], ['_controller' => 'App\\Controller\\MoviesController::new'], [], [['text', '/new']], [], []],
    'like' => [[], ['_controller' => 'App\\Controller\\MoviesController::like'], [], [['text', '/like']], [], []],
    'dislike' => [[], ['_controller' => 'App\\Controller\\MoviesController::dislike'], [], [['text', '/dislike']], [], []],
    'notif' => [[], ['_controller' => 'App\\Controller\\MoviesController::notif'], [], [['text', '/notif']], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\MoviesController::search'], [], [['text', '/search']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'app_subuser_update' => [['id'], ['_controller' => 'App\\Controller\\SubuserController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/manageUser/edit']], [], []],
    'manageUser' => [[], ['_controller' => 'App\\Controller\\SubuserController::manageUser'], [], [['text', '/manageUser']], [], []],
    'chooseUser' => [[], ['_controller' => 'App\\Controller\\SubuserController::chooseUser'], [], [['text', '/chooseUser']], [], []],
    'success' => [[], ['_controller' => 'App\\Controller\\SubuserController::success'], [], [['text', '/success']], [], []],
    'newSubuser' => [[], ['_controller' => 'App\\Controller\\SubuserController::newSubuser'], [], [['text', '/newSubuser']], [], []],
    'createSubuser' => [[], ['_controller' => 'App\\Controller\\SubuserController::createSubuser'], [], [['text', '/newuser']], [], []],
    'subuser_crud_index' => [[], ['_controller' => 'App\\Controller\\SubuserCrudController::index'], [], [['text', '/admin/subuser/']], [], []],
    'subuser_crud_new' => [[], ['_controller' => 'App\\Controller\\SubuserCrudController::new'], [], [['text', '/admin/subuser/new']], [], []],
    'subuser_crud_show' => [['id'], ['_controller' => 'App\\Controller\\SubuserCrudController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/subuser']], [], []],
    'subuser_crud_edit' => [['id'], ['_controller' => 'App\\Controller\\SubuserCrudController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/subuser']], [], []],
    'subuser_crud_delete' => [['id'], ['_controller' => 'App\\Controller\\SubuserCrudController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/subuser']], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
];
