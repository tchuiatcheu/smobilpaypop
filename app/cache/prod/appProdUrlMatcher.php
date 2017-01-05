<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
