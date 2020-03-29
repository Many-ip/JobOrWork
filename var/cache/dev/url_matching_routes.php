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
        '/admin/oferta' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdminOfertaController::admin'], null, null, null, false, false, null]],
        '/admin/oferta/add' => [[['_route' => 'newOferta', '_controller' => 'App\\Controller\\Admin\\AdminOfertaController::newOferta'], null, null, null, false, false, null]],
        '/empresas' => [[['_route' => 'empresas', '_controller' => 'App\\Controller\\EmpresaController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'ofertas', '_controller' => 'App\\Controller\\OfertaController::index'], null, null, null, false, false, null]],
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
                .'|/admin/oferta/(?'
                    .'|(\\d+)(*:191)'
                    .'|elim/([^/]++)(*:212)'
                .')'
                .'|/empresas/([^/]++)(*:239)'
                .'|/([^/]++)(*:256)'
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
        191 => [[['_route' => 'admin_oferta_modif', '_controller' => 'App\\Controller\\Admin\\AdminOfertaController::admin_oferta_modif'], ['id'], null, null, false, true, null]],
        212 => [[['_route' => 'admin_oferta_elim', '_controller' => 'App\\Controller\\Admin\\AdminOfertaController::admin_oferta_elim'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'empresa', '_controller' => 'App\\Controller\\EmpresaController::detalleEmpresa'], ['id'], null, null, false, true, null]],
        256 => [
            [['_route' => 'oferta', '_controller' => 'App\\Controller\\OfertaController::detalleOferta'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
