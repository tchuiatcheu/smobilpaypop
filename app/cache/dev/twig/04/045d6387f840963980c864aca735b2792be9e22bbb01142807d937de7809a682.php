<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_0357f89ca728454b28f4af18b0d4a486ac128c99a7ec5df95ebe83f81a8c130d extends Twig_Template
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
        $__internal_85a7eda7fe8f618629a8a763c11c7ddd89d625fa50f46d2b00c09b6b0f510de2 = $this->env->getExtension("native_profiler");
        $__internal_85a7eda7fe8f618629a8a763c11c7ddd89d625fa50f46d2b00c09b6b0f510de2->enter($__internal_85a7eda7fe8f618629a8a763c11c7ddd89d625fa50f46d2b00c09b6b0f510de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_85a7eda7fe8f618629a8a763c11c7ddd89d625fa50f46d2b00c09b6b0f510de2->leave($__internal_85a7eda7fe8f618629a8a763c11c7ddd89d625fa50f46d2b00c09b6b0f510de2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
