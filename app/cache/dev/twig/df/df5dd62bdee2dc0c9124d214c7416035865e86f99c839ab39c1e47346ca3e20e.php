<?php

/* POPCoreBundle:Default:index.html.twig */
class __TwigTemplate_19e7381bc2667348d02ad79f29cc4cbfe4c63b4820a296877c8706e07b3d0f0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPCoreBundle::layout.html.twig", "POPCoreBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "POPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ae46011a54d1353664b35508b417c3b93660ab20631fc9a3d13c21c7cbc5f40 = $this->env->getExtension("native_profiler");
        $__internal_3ae46011a54d1353664b35508b417c3b93660ab20631fc9a3d13c21c7cbc5f40->enter($__internal_3ae46011a54d1353664b35508b417c3b93660ab20631fc9a3d13c21c7cbc5f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ae46011a54d1353664b35508b417c3b93660ab20631fc9a3d13c21c7cbc5f40->leave($__internal_3ae46011a54d1353664b35508b417c3b93660ab20631fc9a3d13c21c7cbc5f40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9aa04a9d938263803c15fc339c06764a227c3dfa74c98d3bcd78b4baa29a898a = $this->env->getExtension("native_profiler");
        $__internal_9aa04a9d938263803c15fc339c06764a227c3dfa74c98d3bcd78b4baa29a898a->enter($__internal_9aa04a9d938263803c15fc339c06764a227c3dfa74c98d3bcd78b4baa29a898a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    HELLO WORD
";
        
        $__internal_9aa04a9d938263803c15fc339c06764a227c3dfa74c98d3bcd78b4baa29a898a->leave($__internal_9aa04a9d938263803c15fc339c06764a227c3dfa74c98d3bcd78b4baa29a898a_prof);

    }

    public function getTemplateName()
    {
        return "POPCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     HELLO WORD*/
/* {% endblock %}*/
/* */
