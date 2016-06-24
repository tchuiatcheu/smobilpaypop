<?php

/* POPAdminBundle:Pays:new.html.twig */
class __TwigTemplate_1c8798626ccedfc48909c1650ed755274a2f810b5bff55835d83ba80e0bb1f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Pays:new.html.twig", 1);
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
        $__internal_c100718db1db43a05e17bcaa4ff4f0dc20303b56324d3bcfb740f665942f35cb = $this->env->getExtension("native_profiler");
        $__internal_c100718db1db43a05e17bcaa4ff4f0dc20303b56324d3bcfb740f665942f35cb->enter($__internal_c100718db1db43a05e17bcaa4ff4f0dc20303b56324d3bcfb740f665942f35cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Pays:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c100718db1db43a05e17bcaa4ff4f0dc20303b56324d3bcfb740f665942f35cb->leave($__internal_c100718db1db43a05e17bcaa4ff4f0dc20303b56324d3bcfb740f665942f35cb_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_24b2953570d7f78f76d37858b0a008bd552ac9cf98236e734ceb1b831f9d1294 = $this->env->getExtension("native_profiler");
        $__internal_24b2953570d7f78f76d37858b0a008bd552ac9cf98236e734ceb1b831f9d1294->enter($__internal_24b2953570d7f78f76d37858b0a008bd552ac9cf98236e734ceb1b831f9d1294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Pays creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 9
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("pays_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_24b2953570d7f78f76d37858b0a008bd552ac9cf98236e734ceb1b831f9d1294->leave($__internal_24b2953570d7f78f76d37858b0a008bd552ac9cf98236e734ceb1b831f9d1294_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Pays:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  52 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*     <h1>Pays creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         {#<input type="submit" value="Create" />#}*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('pays_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
