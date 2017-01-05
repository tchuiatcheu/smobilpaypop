<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_891d44090164d5d46bc50d64e7d0cb81a47d8b02e15c403b78322d11d2738cb8 extends Twig_Template
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
        $__internal_b1478d5939483f28ac42e7875fa0df25ba469dfd3b70c0139c65f64606d20cc8 = $this->env->getExtension("native_profiler");
        $__internal_b1478d5939483f28ac42e7875fa0df25ba469dfd3b70c0139c65f64606d20cc8->enter($__internal_b1478d5939483f28ac42e7875fa0df25ba469dfd3b70c0139c65f64606d20cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b1478d5939483f28ac42e7875fa0df25ba469dfd3b70c0139c65f64606d20cc8->leave($__internal_b1478d5939483f28ac42e7875fa0df25ba469dfd3b70c0139c65f64606d20cc8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
