<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_deb395d4daf1e78c0e9fd09fad6cf23bdc4e4275f0c22430aee4925dca826a23 extends Twig_Template
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
        $__internal_31013da4775ed5807da552f8d5668566511fa1d712493ce7d696bb59d655d16c = $this->env->getExtension("native_profiler");
        $__internal_31013da4775ed5807da552f8d5668566511fa1d712493ce7d696bb59d655d16c->enter($__internal_31013da4775ed5807da552f8d5668566511fa1d712493ce7d696bb59d655d16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_31013da4775ed5807da552f8d5668566511fa1d712493ce7d696bb59d655d16c->leave($__internal_31013da4775ed5807da552f8d5668566511fa1d712493ce7d696bb59d655d16c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
