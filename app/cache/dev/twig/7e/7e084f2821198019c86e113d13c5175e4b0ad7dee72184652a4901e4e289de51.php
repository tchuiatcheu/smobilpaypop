<?php

/* POPAdminBundle:Default:index.html.twig */
class __TwigTemplate_ac68b315fc056d9b6f93c348a654676e54e90e1b374a7ce6c7e7d9747254810b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "POPAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30e2039827ff333aab716d309ae8b005b7c43591ed4bc4bb8a0c607551cdcc39 = $this->env->getExtension("native_profiler");
        $__internal_30e2039827ff333aab716d309ae8b005b7c43591ed4bc4bb8a0c607551cdcc39->enter($__internal_30e2039827ff333aab716d309ae8b005b7c43591ed4bc4bb8a0c607551cdcc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e2039827ff333aab716d309ae8b005b7c43591ed4bc4bb8a0c607551cdcc39->leave($__internal_30e2039827ff333aab716d309ae8b005b7c43591ed4bc4bb8a0c607551cdcc39_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_b37417806153f565292e93c63c2c0ab8dfd00a5aba1d3bae9e8f970aec82ed9a = $this->env->getExtension("native_profiler");
        $__internal_b37417806153f565292e93c63c2c0ab8dfd00a5aba1d3bae9e8f970aec82ed9a->enter($__internal_b37417806153f565292e93c63c2c0ab8dfd00a5aba1d3bae9e8f970aec82ed9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "  hhello
";
        
        $__internal_b37417806153f565292e93c63c2c0ab8dfd00a5aba1d3bae9e8f970aec82ed9a->leave($__internal_b37417806153f565292e93c63c2c0ab8dfd00a5aba1d3bae9e8f970aec82ed9a_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Default:index.html.twig";
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
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*   hhello*/
/* {% endblock %}*/
