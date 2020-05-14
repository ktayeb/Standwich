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
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\StandwichController::home'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\StandwichController::contact'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'menu', '_controller' => 'App\\Controller\\StandwichController::menu'], null, null, null, false, false, null]],
        '/connection' => [[['_route' => 'connection', '_controller' => 'App\\Controller\\StandwichController::connection'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'commande', '_controller' => 'App\\Controller\\StandwichController::commande'], null, null, null, false, false, null]],
        '/menu/classique' => [[['_route' => 'classique', '_controller' => 'App\\Controller\\StandwichController::classique'], null, null, null, false, false, null]],
        '/menu/speciaux' => [[['_route' => 'speciaux', '_controller' => 'App\\Controller\\StandwichController::speciaux'], null, null, null, false, false, null]],
        '/menu/burgers' => [[['_route' => 'burgers', '_controller' => 'App\\Controller\\StandwichController::burgers'], null, null, null, false, false, null]],
        '/menu/salades' => [[['_route' => 'salades', '_controller' => 'App\\Controller\\StandwichController::salades'], null, null, null, false, false, null]],
        '/menu/assiettes' => [[['_route' => 'assiettes', '_controller' => 'App\\Controller\\StandwichController::assiettes'], null, null, null, false, false, null]],
        '/menu/panini' => [[['_route' => 'panini', '_controller' => 'App\\Controller\\StandwichController::panini'], null, null, null, false, false, null]],
        '/menu/tacos' => [[['_route' => 'tacos', '_controller' => 'App\\Controller\\StandwichController::tacos'], null, null, null, false, false, null]],
        '/menu/barquettes' => [[['_route' => 'barquettes', '_controller' => 'App\\Controller\\StandwichController::barquettes'], null, null, null, false, false, null]],
        '/menu/desserts' => [[['_route' => 'desserts', '_controller' => 'App\\Controller\\StandwichController::desserts'], null, null, null, false, false, null]],
        '/menu/boissons' => [[['_route' => 'boissons', '_controller' => 'App\\Controller\\StandwichController::boissons'], null, null, null, false, false, null]],
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
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
