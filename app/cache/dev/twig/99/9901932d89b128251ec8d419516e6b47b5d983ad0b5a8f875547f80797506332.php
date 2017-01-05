<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_218e3dc1effca39a038ad2f23886370455cf916852c5b855f6889e0a11359b7a extends Twig_Template
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
        $__internal_1d86a7c8a374102e41cd5dc9c1afaaeac51ce1d63e237fc29476bf025b134a07 = $this->env->getExtension("native_profiler");
        $__internal_1d86a7c8a374102e41cd5dc9c1afaaeac51ce1d63e237fc29476bf025b134a07->enter($__internal_1d86a7c8a374102e41cd5dc9c1afaaeac51ce1d63e237fc29476bf025b134a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1d86a7c8a374102e41cd5dc9c1afaaeac51ce1d63e237fc29476bf025b134a07->leave($__internal_1d86a7c8a374102e41cd5dc9c1afaaeac51ce1d63e237fc29476bf025b134a07_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
