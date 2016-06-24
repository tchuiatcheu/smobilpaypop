<?php

/* POPCoreBundle:Default:index.html.twig */
class __TwigTemplate_4c95bf77c841a520a7a78bcf53ba72939f2a648d7002ad95d8f8340199550739 extends Twig_Template
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
        $__internal_bb6dfbb9063114a9a91c11e9a850cb992a23f5920ad106f083964dfc14be498a = $this->env->getExtension("native_profiler");
        $__internal_bb6dfbb9063114a9a91c11e9a850cb992a23f5920ad106f083964dfc14be498a->enter($__internal_bb6dfbb9063114a9a91c11e9a850cb992a23f5920ad106f083964dfc14be498a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb6dfbb9063114a9a91c11e9a850cb992a23f5920ad106f083964dfc14be498a->leave($__internal_bb6dfbb9063114a9a91c11e9a850cb992a23f5920ad106f083964dfc14be498a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0174d062249a4cc1dfb388bb6b35c18fe6cdaf9aef822a17501dba8e13b1975 = $this->env->getExtension("native_profiler");
        $__internal_f0174d062249a4cc1dfb388bb6b35c18fe6cdaf9aef822a17501dba8e13b1975->enter($__internal_f0174d062249a4cc1dfb388bb6b35c18fe6cdaf9aef822a17501dba8e13b1975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    HELLO WORD
";
        
        $__internal_f0174d062249a4cc1dfb388bb6b35c18fe6cdaf9aef822a17501dba8e13b1975->leave($__internal_f0174d062249a4cc1dfb388bb6b35c18fe6cdaf9aef822a17501dba8e13b1975_prof);

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
