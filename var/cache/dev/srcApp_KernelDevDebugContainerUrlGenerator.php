<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'home_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::displayHome'], [], [['text', '/admin/']], [], []],
        'edit_monster' => [[], ['_controller' => 'App\\Controller\\AdminController::editNewMonstre'], [], [['text', '/admin/edit']], [], []],
        'add_news' => [[], ['_controller' => 'App\\Controller\\AdminController::addNews'], [], [['text', '/admin/add']], [], []],
        'games' => [[], ['_controller' => 'App\\Controller\\GamesController::homeGames'], [], [['text', '/games']], [], []],
        'home_ttt' => [[], ['_controller' => 'App\\Controller\\GamesController::displayHomeTTT'], [], [['text', '/games/home/ttt']], [], []],
        'ttt' => [[], ['_controller' => 'App\\Controller\\GamesController::displayTTT'], [], [['text', '/games/ttt']], [], []],
        'win-ttt' => [[], ['_controller' => 'App\\Controller\\GamesController::ajaxActionTTT'], [], [['text', '/games/ttt/win']], [], []],
        'home_bb' => [[], ['_controller' => 'App\\Controller\\GamesController::displayHomeBB'], [], [['text', '/games/home/bb']], [], []],
        'bb' => [[], ['_controller' => 'App\\Controller\\GamesController::displayBB'], [], [['text', '/games/bb']], [], []],
        'win-bb' => [[], ['_controller' => 'App\\Controller\\GamesController::ajaxActionBB'], [], [['text', '/games/bb/win']], [], []],
        'home_ppc' => [[], ['_controller' => 'App\\Controller\\GamesController::displayHomePPC'], [], [['text', '/games/home/ppc']], [], []],
        'ppc' => [[], ['_controller' => 'App\\Controller\\GamesController::createPPC'], [], [['text', '/games/ppc']], [], []],
        'msg-infos' => [[], ['_controller' => 'App\\Controller\\GamesController::msgInfosPPC'], [], [['text', '/games/ppc/infos']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\HomeController::displayHome'], [], [['text', '/home/']], [], []],
        'ml' => [[], ['_controller' => 'App\\Controller\\HomeController::displayTermsConditions'], [], [['text', '/home/conditions']], [], []],
        'home-private' => [[], ['_controller' => 'App\\Controller\\PrivateSpaceController::displayHome'], [], [['text', '/private/home']], [], []],
        'bestiary' => [[], ['_controller' => 'App\\Controller\\PrivateSpaceController::displayBestiary'], [], [['text', '/private/bestiary']], [], []],
        'inventory' => [[], ['_controller' => 'App\\Controller\\PrivateSpaceController::displayInventory'], [], [['text', '/private/inventory']], [], []],
        'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
        'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
        'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
        'shop' => [[], ['_controller' => 'App\\Controller\\ShopController::displayShop'], [], [['text', '/shop/']], [], []],
        'buy_monster' => [['id'], ['_controller' => 'App\\Controller\\ShopController::buyMonster'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/shop/buy']], [], []],
        'buy_game' => [['id'], ['_controller' => 'App\\Controller\\ShopController::buyGame'], ['id' => '\\d+'], [['variable', '', '\\d+', 'id', true], ['text', '/shop/buy/game']], [], []],
        'fos_js_routing_js' => [['_format'], ['_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format' => 'js|json'], [['variable', '.', 'js|json', '_format', true], ['text', '/js/routing']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
