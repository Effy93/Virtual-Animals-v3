<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/admin' => [[['_route' => 'home_admin', '_controller' => 'App\\Controller\\AdminController::displayHome'], null, null, null, true, false, null]],
            '/admin/edit' => [[['_route' => 'edit_monster', '_controller' => 'App\\Controller\\AdminController::editNewMonstre'], null, null, null, false, false, null]],
            '/admin/add' => [[['_route' => 'add_news', '_controller' => 'App\\Controller\\AdminController::addNews'], null, null, null, false, false, null]],
            '/games' => [[['_route' => 'games', '_controller' => 'App\\Controller\\GamesController::homeGames'], null, null, null, false, false, null]],
            '/games/home/ttt' => [[['_route' => 'home_ttt', '_controller' => 'App\\Controller\\GamesController::displayHomeTTT'], null, null, null, false, false, null]],
            '/games/ttt' => [[['_route' => 'ttt', '_controller' => 'App\\Controller\\GamesController::displayTTT'], null, null, null, false, false, null]],
            '/games/ttt/win' => [[['_route' => 'win-ttt', '_controller' => 'App\\Controller\\GamesController::ajaxActionTTT'], null, null, null, false, false, null]],
            '/games/home/bb' => [[['_route' => 'home_bb', '_controller' => 'App\\Controller\\GamesController::displayHomeBB'], null, null, null, false, false, null]],
            '/games/bb' => [[['_route' => 'bb', '_controller' => 'App\\Controller\\GamesController::displayBB'], null, null, null, false, false, null]],
            '/games/bb/win' => [[['_route' => 'win-bb', '_controller' => 'App\\Controller\\GamesController::ajaxActionBB'], null, null, null, false, false, null]],
            '/games/home/ppc' => [[['_route' => 'home_ppc', '_controller' => 'App\\Controller\\GamesController::displayHomePPC'], null, null, null, false, false, null]],
            '/games/ppc' => [[['_route' => 'ppc', '_controller' => 'App\\Controller\\GamesController::createPPC'], null, null, null, false, false, null]],
            '/games/ppc/infos' => [[['_route' => 'msg-infos', '_controller' => 'App\\Controller\\GamesController::msgInfosPPC'], null, null, null, false, false, null]],
            '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::displayHome'], null, null, null, true, false, null]],
            '/home/conditions' => [[['_route' => 'ml', '_controller' => 'App\\Controller\\HomeController::displayTermsConditions'], null, null, null, false, false, null]],
            '/private/home' => [[['_route' => 'home-private', '_controller' => 'App\\Controller\\PrivateSpaceController::displayHome'], null, null, null, false, false, null]],
            '/private/bestiary' => [[['_route' => 'bestiary', '_controller' => 'App\\Controller\\PrivateSpaceController::displayBestiary'], null, null, null, false, false, null]],
            '/private/inventory' => [[['_route' => 'inventory', '_controller' => 'App\\Controller\\PrivateSpaceController::displayInventory'], null, null, null, false, false, null]],
            '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
            '/shop' => [[['_route' => 'shop', '_controller' => 'App\\Controller\\ShopController::displayShop'], null, null, null, true, false, null]],
        ];
        $this->regexpList = [
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
                    .'|/shop/buy/(?'
                        .'|(\\d+)(*:187)'
                        .'|game(\\d+)(*:204)'
                    .')'
                    .'|/js/routing(?:\\.(js|json))?(*:240)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            187 => [[['_route' => 'buy_monster', '_controller' => 'App\\Controller\\ShopController::buyMonster'], ['id'], null, null, false, true, null]],
            204 => [[['_route' => 'buy_game', '_controller' => 'App\\Controller\\ShopController::buyGame'], ['id'], null, null, false, true, null]],
            240 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        ];
    }
}
