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
        '/users' => [
            [['_route' => 'api_users_getUser_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'getUser'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_users_postUser_collection', '_controller' => 'App\\Controller\\PostUser', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'postUser'], null, ['POST' => 0], null, false, false, null],
        ],
        '/login' => [[['_route' => 'api_users_loginUser_collection', '_controller' => 'App\\Controller\\LoginUser', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'loginUser'], null, ['POST' => 0], null, false, false, null]],
        '/paniers' => [
            [['_route' => 'api_paniers_getPanier_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Panier', '_api_collection_operation_name' => 'getPanier'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_paniers_postPanier_collection', '_controller' => 'App\\Controller\\PostPanier', '_format' => null, '_api_resource_class' => 'App\\Entity\\Panier', '_api_collection_operation_name' => 'postPanier'], null, ['POST' => 0], null, false, false, null],
        ],
        '/paniers/user/bill' => [[['_route' => 'api_paniers_postBill_collection', '_controller' => 'App\\Controller\\PanierUserBill', '_format' => null, '_api_resource_class' => 'App\\Entity\\Panier', '_api_collection_operation_name' => 'postBill'], null, ['POST' => 0], null, false, false, null]],
        '/categories' => [
            [['_route' => 'api_categories_getCategorie_collection', '_controller' => 'App\\Controller\\GetAllCategory', '_format' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_collection_operation_name' => 'getCategorie'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_categories_postCategorie_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_collection_operation_name' => 'postCategorie'], null, ['POST' => 0], null, false, false, null],
        ],
        '/user_infos' => [
            [['_route' => 'api_user_infos_getUserInfos_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserInfo', '_api_collection_operation_name' => 'getUserInfos'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_user_infos_postUserInfos_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserInfo', '_api_collection_operation_name' => 'postUserInfos'], null, ['POST' => 0], null, false, false, null],
        ],
        '/products' => [
            [['_route' => 'api_products_getProduct_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_collection_operation_name' => 'getProduct'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_products_postProduct_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_collection_operation_name' => 'postProduct'], null, ['POST' => 0], null, false, false, null],
        ],
        '/admin/stats' => [[['_route' => 'api_products_postBill_collection', '_controller' => 'App\\Controller\\AdminStats', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_collection_operation_name' => 'postBill'], null, ['GET' => 0], null, false, false, null]],
        '/products/trends' => [[['_route' => 'api_products_trendProduct_collection', '_controller' => 'App\\Controller\\GetTrends', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_collection_operation_name' => 'trendProduct'], null, ['GET' => 0], null, false, false, null]],
        '/promos' => [
            [['_route' => 'api_promos_getPromo_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'getPromo'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_promos_postPromo_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'postPromo'], null, ['POST' => 0], null, false, false, null],
        ],
        '/checkpromos' => [[['_route' => 'api_promos_checkPromo_collection', '_controller' => 'App\\Controller\\CheckPromo', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_collection_operation_name' => 'checkPromo'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/(index)?(?:\\.([^/]++))?(*:193)'
                .'|/docs(?:\\.([^/]++))?(*:221)'
                .'|/c(?'
                    .'|o(?'
                        .'|ntexts/(.+)(?:\\.([^/]++))?(*:264)'
                        .'|mments(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:299)'
                            .')'
                            .'|/(\\d+)(?'
                                .'|(*:317)'
                            .')'
                        .')'
                    .')'
                    .'|ategories/(\\d+)(?'
                        .'|(*:346)'
                    .')'
                .')'
                .'|/user(?'
                    .'|s/(\\d+)(?'
                        .'|(*:374)'
                    .')'
                    .'|_infos/(\\d+)(?'
                        .'|(*:398)'
                    .')'
                .')'
                .'|/p(?'
                    .'|aniers/(?'
                        .'|user/([^/]++)(*:436)'
                        .'|(\\d+)(?'
                            .'|(*:452)'
                        .')'
                        .'|user/validate(*:474)'
                    .')'
                    .'|ro(?'
                        .'|ducts/(?'
                            .'|(\\d+)(*:502)'
                            .'|fill/(\\d+)(*:520)'
                            .'|(\\d+)(?'
                                .'|(*:536)'
                            .')'
                        .')'
                        .'|mos/([^/\\.]++)(?:\\.([^/]++))?(?'
                            .'|(*:578)'
                        .')'
                    .')'
                .')'
                .'|/orders/user/([^/]++)(*:610)'
                .'|/sub_categories(?'
                    .'|(?:\\.([^/]++))?(?'
                        .'|(*:654)'
                    .')'
                    .'|/(\\d+)(?'
                        .'|(*:672)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        221 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        264 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        299 => [
            [['_route' => 'api_comments_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comments_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        317 => [
            [['_route' => 'api_comments_getId_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_item_operation_name' => 'getId'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comments_deleteId_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_item_operation_name' => 'deleteId'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_comments_putId_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_item_operation_name' => 'putId'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        346 => [
            [['_route' => 'api_categories_getId_item', '_controller' => 'App\\Controller\\GetProductCategory', '_format' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_item_operation_name' => 'getId'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_categories_deleteId_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_item_operation_name' => 'deleteId'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_categories_putId_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_item_operation_name' => 'putId'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        374 => [
            [['_route' => 'api_users_getId_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'getId'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_deleteId_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'deleteId'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_users_putId_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'putId'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        398 => [
            [['_route' => 'api_user_infos_getId_item', '_controller' => 'App\\Controller\\GetUserInfoId', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserInfo', '_api_item_operation_name' => 'getId'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_user_infos_deleteId_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserInfo', '_api_item_operation_name' => 'deleteId'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_user_infos_putId_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserInfo', '_api_item_operation_name' => 'putId'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        436 => [[['_route' => 'api_paniers_getId_item', '_controller' => 'App\\Controller\\GetUserPanier', '_format' => null, '_api_resource_class' => 'App\\Entity\\Panier', '_api_item_operation_name' => 'getId'], ['id'], ['GET' => 0], null, false, true, null]],
        452 => [
            [['_route' => 'api_paniers_deleteId_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Panier', '_api_item_operation_name' => 'deleteId'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_paniers_putId_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Panier', '_api_item_operation_name' => 'putId'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        474 => [[['_route' => 'api_user_infos_validateId_collection', '_controller' => 'App\\Controller\\ValidateUserPanier', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserInfo', '_api_collection_operation_name' => 'validateId'], [], ['POST' => 0], null, false, false, null]],
        502 => [[['_route' => 'api_products_getProductId_item', '_controller' => 'App\\Controller\\GetProductId', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_item_operation_name' => 'getProductId'], ['id'], ['GET' => 0], null, false, true, null]],
        520 => [[['_route' => 'api_products_fillProductId_item', '_controller' => 'App\\Controller\\FillProductId', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_item_operation_name' => 'fillProductId'], ['id'], ['POST' => 0], null, false, true, null]],
        536 => [
            [['_route' => 'api_products_deleteId_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_item_operation_name' => 'deleteId'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_products_putId_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_item_operation_name' => 'putId'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        578 => [
            [['_route' => 'api_promos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_promos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Promo', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        610 => [[['_route' => 'api_paniers_getOrder_item', '_controller' => 'App\\Controller\\GetUserOrder', '_format' => null, '_api_resource_class' => 'App\\Entity\\Panier', '_api_item_operation_name' => 'getOrder'], ['id'], ['GET' => 0], null, false, true, null]],
        654 => [
            [['_route' => 'api_sub_categories_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\SubCategory', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_sub_categories_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\SubCategory', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        672 => [
            [['_route' => 'api_sub_categories_getId_item', '_controller' => 'App\\Controller\\GetSubProductCategory', '_format' => null, '_api_resource_class' => 'App\\Entity\\SubCategory', '_api_item_operation_name' => 'getId'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_sub_categories_deleteId_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\SubCategory', '_api_item_operation_name' => 'deleteId'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_sub_categories_putId_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\SubCategory', '_api_item_operation_name' => 'putId'], ['id'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
