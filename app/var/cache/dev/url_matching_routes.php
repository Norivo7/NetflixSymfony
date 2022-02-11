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
        '/movieList' => [[['_route' => 'movieList', '_controller' => 'App\\Controller\\MoviesController::index'], null, null, null, false, false, null]],
        '/serials' => [[['_route' => 'serials', '_controller' => 'App\\Controller\\MoviesController::serials'], null, null, null, false, false, null]],
        '/movies' => [[['_route' => 'movies', '_controller' => 'App\\Controller\\MoviesController::movies'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\MoviesController::new'], null, null, null, false, false, null]],
        '/like' => [[['_route' => 'like', '_controller' => 'App\\Controller\\MoviesController::like'], null, ['POST' => 0], null, false, false, null]],
        '/dislike' => [[['_route' => 'dislike', '_controller' => 'App\\Controller\\MoviesController::dislike'], null, ['POST' => 0], null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\MoviesController::search'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\QuoteController::home'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\QuoteController::user'], null, null, null, false, false, null]],
        '/chooseUser' => [[['_route' => 'chooseUser', '_controller' => 'App\\Controller\\QuoteController::chooseUser'], null, null, null, false, false, null]],
        '/ManageProfiles' => [[['_route' => 'manageProfiles', '_controller' => 'App\\Controller\\QuoteController::manageProfiles'], null, null, null, false, false, null]],
        '/quotes' => [[['_route' => 'quotes', '_controller' => 'App\\Controller\\QuoteController::quote'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/show/([^/]++)(*:182)'
                .'|/custom(?:/([^/]++))?(*:211)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        182 => [[['_route' => 'show-one', '_controller' => 'App\\Controller\\MoviesController::show'], ['id'], null, null, false, true, null]],
        211 => [
            [['_route' => 'custom', 'name' => null, '_controller' => 'App\\Controller\\QuoteController::custom'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
