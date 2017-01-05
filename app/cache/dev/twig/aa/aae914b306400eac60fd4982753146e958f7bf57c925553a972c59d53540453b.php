<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_c166c1077b789f6ebb193d1105dfbfd6b32e62f08476ac2c58feca4da1b1411d extends Twig_Template
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
        $__internal_46e4060b3e1cce8f2525859982127c50f9deb893afe664db1c3950b031044b6a = $this->env->getExtension("native_profiler");
        $__internal_46e4060b3e1cce8f2525859982127c50f9deb893afe664db1c3950b031044b6a->enter($__internal_46e4060b3e1cce8f2525859982127c50f9deb893afe664db1c3950b031044b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_46e4060b3e1cce8f2525859982127c50f9deb893afe664db1c3950b031044b6a->leave($__internal_46e4060b3e1cce8f2525859982127c50f9deb893afe664db1c3950b031044b6a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
