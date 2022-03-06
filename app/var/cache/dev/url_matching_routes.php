<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_panel', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\ExceptionController::handleError'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'app_mailer_sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
        '/admin/movies' => [[['_route' => 'app_movie_crud_index', '_controller' => 'App\\Controller\\MovieCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/movies/new' => [[['_route' => 'app_movie_crud_new', '_controller' => 'App\\Controller\\MovieCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MoviesController::home'], null, null, null, false, false, null]],
        '/browse' => [[['_route' => 'browse', '_controller' => 'App\\Controller\\MoviesController::index'], null, null, null, false, false, null]],
        '/shows' => [[['_route' => 'shows', '_controller' => 'App\\Controller\\MoviesController::shows'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\MoviesController::profile'], null, null, null, false, false, null]],
        '/myList' => [[['_route' => 'myList', '_controller' => 'App\\Controller\\MoviesController::myList'], null, null, null, false, false, null]],
        '/movies' => [[['_route' => 'movies', '_controller' => 'App\\Controller\\MoviesController::movies'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\MoviesController::new'], null, null, null, false, false, null]],
        '/like' => [[['_route' => 'like', '_controller' => 'App\\Controller\\MoviesController::like'], null, ['POST' => 0], null, false, false, null]],
        '/dislike' => [[['_route' => 'dislike', '_controller' => 'App\\Controller\\MoviesController::dislike'], null, ['POST' => 0], null, false, false, null]],
        '/notif' => [[['_route' => 'notif', '_controller' => 'App\\Controller\\MoviesController::notif'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\MoviesController::search'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/manageUser/add' => [[['_route' => 'app_subuser_addsubuser', '_controller' => 'App\\Controller\\SubuserController::addSubuser'], null, null, null, false, false, null]],
        '/manageUser/edit' => [[['_route' => 'edit', '_controller' => 'App\\Controller\\SubuserController::edit'], null, null, null, false, false, null]],
        '/manageUser' => [[['_route' => 'manageUser', '_controller' => 'App\\Controller\\SubuserController::manageUser'], null, null, null, false, false, null]],
        '/chooseUser' => [[['_route' => 'chooseUser', '_controller' => 'App\\Controller\\SubuserController::chooseUser'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'success', '_controller' => 'App\\Controller\\SubuserController::success'], null, null, null, false, false, null]],
        '/newSubuser' => [[['_route' => 'newSubuser', '_controller' => 'App\\Controller\\SubuserController::newSubuser'], null, null, null, false, false, null]],
        '/admin/subusers' => [[['_route' => 'subuser_crud_index', '_controller' => 'App\\Controller\\SubuserCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/subusers/new' => [[['_route' => 'subuser_crud_new', '_controller' => 'App\\Controller\\SubuserCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_user_crud_index', '_controller' => 'App\\Controller\\UserCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/users/new' => [[['_route' => 'app_user_crud_new', '_controller' => 'App\\Controller\\UserCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|movies/([^/]++)(?'
                        .'|(*:35)'
                        .'|/edit(*:47)'
                        .'|(*:54)'
                    .')'
                    .'|subusers/([^/]++)(?'
                        .'|(*:82)'
                        .'|/edit(*:94)'
                        .'|(*:101)'
                    .')'
                    .'|users/([^/]++)(?'
                        .'|(*:127)'
                        .'|/edit(*:140)'
                        .'|(*:148)'
                    .')'
                .')'
                .'|/show/([^/]++)(*:172)'
                .'|/manageUser/(?'
                    .'|delete/([^/]++)(*:210)'
                    .'|update/([^/]++)(*:233)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:273)'
                    .'|wdt/([^/]++)(*:293)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:339)'
                            .'|router(*:353)'
                            .'|exception(?'
                                .'|(*:373)'
                                .'|\\.css(*:386)'
                            .')'
                        .')'
                        .'|(*:396)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_movie_crud_show', '_controller' => 'App\\Controller\\MovieCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'app_movie_crud_edit', '_controller' => 'App\\Controller\\MovieCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        54 => [[['_route' => 'app_movie_crud_delete', '_controller' => 'App\\Controller\\MovieCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        82 => [[['_route' => 'subuser_crud_show', '_controller' => 'App\\Controller\\SubuserCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        94 => [[['_route' => 'subuser_crud_edit', '_controller' => 'App\\Controller\\SubuserCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        101 => [[['_route' => 'subuser_crud_delete', '_controller' => 'App\\Controller\\SubuserCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        127 => [[['_route' => 'app_user_crud_show', '_controller' => 'App\\Controller\\UserCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        140 => [[['_route' => 'app_user_crud_edit', '_controller' => 'App\\Controller\\UserCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        148 => [[['_route' => 'app_user_crud_delete', '_controller' => 'App\\Controller\\UserCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        172 => [[['_route' => 'show-one', '_controller' => 'App\\Controller\\MoviesController::show'], ['id'], null, null, false, true, null]],
        210 => [[['_route' => 'deleteSubuser', '_controller' => 'App\\Controller\\SubuserController::delete'], ['id'], null, null, false, true, null]],
        233 => [[['_route' => 'update', '_controller' => 'App\\Controller\\SubuserController::update'], ['id'], null, null, false, true, null]],
        273 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        293 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        339 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        353 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        373 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        386 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        396 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
