<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // inicio
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'Project\\SedBundle\\Controller\\DefaultController::inicioAction',  '_route' => 'inicio',);
        }

        // docentes
        if ($pathinfo === '/docentes') {
            return array (  '_controller' => 'Project\\SedBundle\\Controller\\DefaultController::docentesAction',  '_route' => 'docentes',);
        }

        // materias
        if ($pathinfo === '/materias') {
            return array (  '_controller' => 'Project\\SedBundle\\Controller\\DefaultController::materiasAction',  '_route' => 'materias',);
        }

        // programas
        if ($pathinfo === '/programas') {
            return array (  '_controller' => 'Project\\SedBundle\\Controller\\DefaultController::programasAction',  '_route' => 'programas',);
        }

        // cursos
        if ($pathinfo === '/cursos') {
            return array (  '_controller' => 'Project\\SedBundle\\Controller\\DefaultController::cursosAction',  '_route' => 'cursos',);
        }

        // preguntas
        if ($pathinfo === '/preguntas') {
            return array (  '_controller' => 'Project\\SedBundle\\Controller\\DefaultController::preguntasAction',  '_route' => 'preguntas',);
        }

        // reportes
        if ($pathinfo === '/reportes') {
            return array (  '_controller' => 'Project\\SedBundle\\Controller\\DefaultController::reportesAction',  '_route' => 'reportes',);
        }

        // acerca
        if ($pathinfo === '/acerca') {
            return array (  '_controller' => 'Project\\SedBundle\\Controller\\DefaultController::acercaAction',  '_route' => 'acerca',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
