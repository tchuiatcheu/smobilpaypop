<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_5ec7881c19a4518da583885c26b45d0cd3d12bc3fb3d10a1cdeddde535dc1587 extends Twig_Template
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
        $__internal_651411e814701150ad2ce9754648b2beb3c06ae2bdb26995e8464a613de7c5d0 = $this->env->getExtension("native_profiler");
        $__internal_651411e814701150ad2ce9754648b2beb3c06ae2bdb26995e8464a613de7c5d0->enter($__internal_651411e814701150ad2ce9754648b2beb3c06ae2bdb26995e8464a613de7c5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_651411e814701150ad2ce9754648b2beb3c06ae2bdb26995e8464a613de7c5d0->leave($__internal_651411e814701150ad2ce9754648b2beb3c06ae2bdb26995e8464a613de7c5d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
