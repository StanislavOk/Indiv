<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/members' => [[['_route' => 'component_index', '_controller' => 'App\\Controller\\ComponentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/members/new' => [[['_route' => 'component_new', '_controller' => 'App\\Controller\\ComponentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/type' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/new' => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/members/(?'
                    .'|([^/]++)(?'
                        .'|(*:65)'
                        .'|/edit(*:77)'
                        .'|(*:84)'
                    .')'
                    .'|find/([^/]++)(*:105)'
                .')'
                .'|/type/(?'
                    .'|find/([^/]++)(*:136)'
                    .'|([^/]++)(?'
                        .'|(*:155)'
                        .'|/edit(*:168)'
                        .'|(*:176)'
                    .')'
                .')'
                .'|/logger/([^/]++)(*:202)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        65 => [[['_route' => 'component_show', '_controller' => 'App\\Controller\\ComponentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        77 => [[['_route' => 'component_edit', '_controller' => 'App\\Controller\\ComponentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        84 => [[['_route' => 'component_delete', '_controller' => 'App\\Controller\\ComponentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        105 => [[['_route' => 'find_component_by_name', '_controller' => 'App\\Controller\\ComponentController::findAllByName'], ['name'], null, null, false, true, null]],
        136 => [[['_route' => 'find_product_by_name', '_controller' => 'App\\Controller\\ProductController::findAllByName'], ['name'], null, null, false, true, null]],
        155 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        168 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        176 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        202 => [
            [['_route' => 'api_logger_log', '_controller' => 'App\\Controller\\LogController::logger'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
