<?php

/* POPAdminBundle:Pays:new.html.twig */
class __TwigTemplate_605f75acd4410648b29760d621c16edae34240ebdc3060c7a19610c46add04c9 extends Twig_Template
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
        $__internal_925b836943221a7093a976dfc36b956af6e9833422e8e48c90f3a7e60aaff793 = $this->env->getExtension("native_profiler");
        $__internal_925b836943221a7093a976dfc36b956af6e9833422e8e48c90f3a7e60aaff793->enter($__internal_925b836943221a7093a976dfc36b956af6e9833422e8e48c90f3a7e60aaff793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Pays:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925b836943221a7093a976dfc36b956af6e9833422e8e48c90f3a7e60aaff793->leave($__internal_925b836943221a7093a976dfc36b956af6e9833422e8e48c90f3a7e60aaff793_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_2028239c0b53780b0e4a973ed0acc9ad40801117f0e6dcd7128c30168656cee6 = $this->env->getExtension("native_profiler");
        $__internal_2028239c0b53780b0e4a973ed0acc9ad40801117f0e6dcd7128c30168656cee6->enter($__internal_2028239c0b53780b0e4a973ed0acc9ad40801117f0e6dcd7128c30168656cee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_2028239c0b53780b0e4a973ed0acc9ad40801117f0e6dcd7128c30168656cee6->leave($__internal_2028239c0b53780b0e4a973ed0acc9ad40801117f0e6dcd7128c30168656cee6_prof);

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
