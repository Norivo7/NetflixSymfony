<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_panel', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/movies' => [[['_route' => 'app_movie_crud_index', '_controller' => 'App\\Controller\\Admin\\MovieCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/movies/new' => [[['_route' => 'app_movie_crud_new', '_controller' => 'App\\Controller\\Admin\\MovieCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/subusers' => [[['_route' => 'subuser_crud_index', '_controller' => 'App\\Controller\\Admin\\SubuserCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/subusers/new' => [[['_route' => 'subuser_crud_new', '_controller' => 'App\\Controller\\Admin\\SubuserCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_user_crud_index', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/users/new' => [[['_route' => 'app_user_crud_new', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/error' => [[['_route' => 'error', '_controller' => 'App\\Controller\\ExceptionController::handleError'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'app_mailer_sendemail', '_controller' => 'App\\Controller\\MailerController::sendEmail'], null, null, null, false, false, null]],
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
        '/chooseUser' => [[['_route' => 'chooseUser', '_controller' => 'App\\Controller\\SubuserController::chooseUser'], null, null, null, false, false, null]],
        '/manageUser/add' => [[['_route' => 'add_subuser', '_controller' => 'App\\Controller\\SubuserController::addSubuser'], null, null, null, false, false, null]],
        '/manageUser/edit' => [[['_route' => 'edit', '_controller' => 'App\\Controller\\SubuserController::edit'], null, null, null, false, false, null]],
        '/manageUser' => [[['_route' => 'manageUser', '_controller' => 'App\\Controller\\SubuserController::manageUser'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'success', '_controller' => 'App\\Controller\\SubuserController::success'], null, null, null, false, false, null]],
        '/changeProfile' => [[['_route' => 'changeProfile', '_controller' => 'App\\Controller\\SubuserController::changeProfileAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|movies/([^/]++)(?'
                        .'|(*:197)'
                        .'|/edit(*:210)'
                        .'|(*:218)'
                    .')'
                    .'|subusers/([^/]++)(?'
                        .'|(*:247)'
                        .'|/edit(*:260)'
                        .'|(*:268)'
                    .')'
                    .'|users/([^/]++)(?'
                        .'|(*:294)'
                        .'|/edit(*:307)'
                        .'|(*:315)'
                    .')'
                .')'
                .'|/browse/hide/([^/]++)(*:346)'
                .'|/show/([^/]++)(*:368)'
                .'|/manageUser/(?'
                    .'|delete/([^/]++)(*:406)'
                    .'|update/([^/]++)(*:429)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'app_movie_crud_show', '_controller' => 'App\\Controller\\Admin\\MovieCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        210 => [[['_route' => 'app_movie_crud_edit', '_controller' => 'App\\Controller\\Admin\\MovieCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        218 => [[['_route' => 'app_movie_crud_delete', '_controller' => 'App\\Controller\\Admin\\MovieCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        247 => [[['_route' => 'subuser_crud_show', '_controller' => 'App\\Controller\\Admin\\SubuserCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        260 => [[['_route' => 'subuser_crud_edit', '_controller' => 'App\\Controller\\Admin\\SubuserCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        268 => [[['_route' => 'subuser_crud_delete', '_controller' => 'App\\Controller\\Admin\\SubuserCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        294 => [[['_route' => 'app_user_crud_show', '_controller' => 'App\\Controller\\Admin\\UserCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        307 => [[['_route' => 'app_user_crud_edit', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        315 => [[['_route' => 'app_user_crud_delete', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        346 => [[['_route' => 'hide', '_controller' => 'App\\Controller\\MoviesController::hide'], ['id'], null, null, false, true, null]],
        368 => [[['_route' => 'show-one', '_controller' => 'App\\Controller\\MoviesController::show'], ['id'], null, null, false, true, null]],
        406 => [[['_route' => 'deleteSubuser', '_controller' => 'App\\Controller\\SubuserController::delete'], ['id'], null, null, false, true, null]],
        429 => [
            [['_route' => 'update', '_controller' => 'App\\Controller\\SubuserController::update'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
