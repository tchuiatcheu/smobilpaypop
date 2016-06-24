<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/agence')) {
                // agence_index
                if (rtrim($pathinfo, '/') === '/admin/agence') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_agence_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'agence_index');
                    }

                    return array (  '_controller' => 'POP\\AdminBundle\\Controller\\AgenceController::indexAction',  '_route' => 'agence_index',);
                }
                not_agence_index:

                // agence_show
                if (preg_match('#^/admin/agence/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_agence_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agence_show')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\AgenceController::showAction',));
                }
                not_agence_show:

                // agence_new
                if ($pathinfo === '/admin/agence/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_agence_new;
                    }

                    return array (  '_controller' => 'POP\\AdminBundle\\Controller\\AgenceController::newAction',  '_route' => 'agence_new',);
                }
                not_agence_new:

                // agence_edit
                if (preg_match('#^/admin/agence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_agence_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agence_edit')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\AgenceController::editAction',));
                }
                not_agence_edit:

                // agence_delete
                if (preg_match('#^/admin/agence/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_agence_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'agence_delete')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\AgenceController::deleteAction',));
                }
                not_agence_delete:

            }

            if (0 === strpos($pathinfo, '/admin/quartier')) {
                // quartier_index
                if (rtrim($pathinfo, '/') === '/admin/quartier') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_quartier_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'quartier_index');
                    }

                    return array (  '_controller' => 'POP\\AdminBundle\\Controller\\QuartierController::indexAction',  '_route' => 'quartier_index',);
                }
                not_quartier_index:

                // quartier_show
                if (preg_match('#^/admin/quartier/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_quartier_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quartier_show')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\QuartierController::showAction',));
                }
                not_quartier_show:

                // quartier_new
                if ($pathinfo === '/admin/quartier/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_quartier_new;
                    }

                    return array (  '_controller' => 'POP\\AdminBundle\\Controller\\QuartierController::newAction',  '_route' => 'quartier_new',);
                }
                not_quartier_new:

                // quartier_edit
                if (preg_match('#^/admin/quartier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_quartier_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quartier_edit')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\QuartierController::editAction',));
                }
                not_quartier_edit:

                // quartier_delete
                if (preg_match('#^/admin/quartier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_quartier_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quartier_delete')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\QuartierController::deleteAction',));
                }
                not_quartier_delete:

            }

            if (0 === strpos($pathinfo, '/admin/ville')) {
                // ville_index
                if (rtrim($pathinfo, '/') === '/admin/ville') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ville_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ville_index');
                    }

                    return array (  '_controller' => 'POP\\AdminBundle\\Controller\\VilleController::indexAction',  '_route' => 'ville_index',);
                }
                not_ville_index:

                // ville_show
                if (preg_match('#^/admin/ville/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ville_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_show')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\VilleController::showAction',));
                }
                not_ville_show:

                // ville_new
                if ($pathinfo === '/admin/ville/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ville_new;
                    }

                    return array (  '_controller' => 'POP\\AdminBundle\\Controller\\VilleController::newAction',  '_route' => 'ville_new',);
                }
                not_ville_new:

                // ville_edit
                if (preg_match('#^/admin/ville/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ville_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_edit')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\VilleController::editAction',));
                }
                not_ville_edit:

                // ville_delete
                if (preg_match('#^/admin/ville/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_ville_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_delete')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\VilleController::deleteAction',));
                }
                not_ville_delete:

            }

            if (0 === strpos($pathinfo, '/admin/region')) {
                // region_index
                if (rtrim($pathinfo, '/') === '/admin/region') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_region_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'region_index');
                    }

                    return array (  '_controller' => 'POP\\AdminBundle\\Controller\\RegionController::indexAction',  '_route' => 'region_index',);
                }
                not_region_index:

                // region_show
                if (preg_match('#^/admin/region/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_region_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_show')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\RegionController::showAction',));
                }
                not_region_show:

                // region_new
                if ($pathinfo === '/admin/region/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_region_new;
                    }

                    return array (  '_controller' => 'POP\\AdminBundle\\Controller\\RegionController::newAction',  '_route' => 'region_new',);
                }
                not_region_new:

                // region_edit
                if (preg_match('#^/admin/region/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_region_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_edit')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\RegionController::editAction',));
                }
                not_region_edit:

                // region_delete
                if (preg_match('#^/admin/region/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_region_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'region_delete')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\RegionController::deleteAction',));
                }
                not_region_delete:

            }

            if (0 === strpos($pathinfo, '/admin/pays')) {
                // pays_index
                if (rtrim($pathinfo, '/') === '/admin/pays') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pays_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pays_index');
                    }

                    return array (  '_controller' => 'POP\\AdminBundle\\Controller\\PaysController::indexAction',  '_route' => 'pays_index',);
                }
                not_pays_index:

                // pays_show
                if (preg_match('#^/admin/pays/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pays_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_show')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\PaysController::showAction',));
                }
                not_pays_show:

                // pays_new
                if ($pathinfo === '/admin/pays/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pays_new;
                    }

                    return array (  '_controller' => 'POP\\AdminBundle\\Controller\\PaysController::newAction',  '_route' => 'pays_new',);
                }
                not_pays_new:

                // pays_edit
                if (preg_match('#^/admin/pays/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pays_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_edit')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\PaysController::editAction',));
                }
                not_pays_edit:

                // pays_delete
                if (preg_match('#^/admin/pays/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pays_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pays_delete')), array (  '_controller' => 'POP\\AdminBundle\\Controller\\PaysController::deleteAction',));
                }
                not_pays_delete:

            }

            // pop_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pop_admin_homepage');
                }

                return array (  '_controller' => 'POP\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pop_admin_homepage',);
            }

        }

        // pop_core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pop_core_homepage');
            }

            return array (  '_controller' => 'POP\\CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pop_core_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
