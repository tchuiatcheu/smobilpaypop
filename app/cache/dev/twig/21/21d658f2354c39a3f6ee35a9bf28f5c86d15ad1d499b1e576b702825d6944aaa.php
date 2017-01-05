<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6eba8899f1bf288439565eeb0f395dd5a92e970f56fab518301496d059d434de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b4da4dc151ab9a026bbd21884dee6bde89dfa9862182f57ce1f1dd916213683 = $this->env->getExtension("native_profiler");
        $__internal_6b4da4dc151ab9a026bbd21884dee6bde89dfa9862182f57ce1f1dd916213683->enter($__internal_6b4da4dc151ab9a026bbd21884dee6bde89dfa9862182f57ce1f1dd916213683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6b4da4dc151ab9a026bbd21884dee6bde89dfa9862182f57ce1f1dd916213683->leave($__internal_6b4da4dc151ab9a026bbd21884dee6bde89dfa9862182f57ce1f1dd916213683_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
