<?php

/* @POPCore/Default/index.html.twig */
class __TwigTemplate_96aecc68c7ff4f881aae124eaabfe4760875ecd02084580c7ccd7925a908cf3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPCoreBundle::layout.html.twig", "@POPCore/Default/index.html.twig", 1);
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
        $__internal_6b9568738dbc2d417c381594e3a3c705fab318df1c1428ea4f760d97946f4550 = $this->env->getExtension("native_profiler");
        $__internal_6b9568738dbc2d417c381594e3a3c705fab318df1c1428ea4f760d97946f4550->enter($__internal_6b9568738dbc2d417c381594e3a3c705fab318df1c1428ea4f760d97946f4550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPCore/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b9568738dbc2d417c381594e3a3c705fab318df1c1428ea4f760d97946f4550->leave($__internal_6b9568738dbc2d417c381594e3a3c705fab318df1c1428ea4f760d97946f4550_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b4fb77915944ed09a5b39d8ddec55fc37247a31070aa3d36a1022582216d5b6 = $this->env->getExtension("native_profiler");
        $__internal_5b4fb77915944ed09a5b39d8ddec55fc37247a31070aa3d36a1022582216d5b6->enter($__internal_5b4fb77915944ed09a5b39d8ddec55fc37247a31070aa3d36a1022582216d5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    HELLO WORD
";
        
        $__internal_5b4fb77915944ed09a5b39d8ddec55fc37247a31070aa3d36a1022582216d5b6->leave($__internal_5b4fb77915944ed09a5b39d8ddec55fc37247a31070aa3d36a1022582216d5b6_prof);

    }

    public function getTemplateName()
    {
        return "@POPCore/Default/index.html.twig";
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
