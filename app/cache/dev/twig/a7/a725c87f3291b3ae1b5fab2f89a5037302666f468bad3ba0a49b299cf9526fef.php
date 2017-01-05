<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e9e7e7535b0c0b914371849aba8c56a546275301aec6e683945104f3fc0c8613 extends Twig_Template
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
        $__internal_dd91ffa7933e475911147d2131407315602809aae2812a31217dd861441ea39a = $this->env->getExtension("native_profiler");
        $__internal_dd91ffa7933e475911147d2131407315602809aae2812a31217dd861441ea39a->enter($__internal_dd91ffa7933e475911147d2131407315602809aae2812a31217dd861441ea39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dd91ffa7933e475911147d2131407315602809aae2812a31217dd861441ea39a->leave($__internal_dd91ffa7933e475911147d2131407315602809aae2812a31217dd861441ea39a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
