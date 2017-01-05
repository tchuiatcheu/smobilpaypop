<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9c6d268a7f32a40858a559265f8b53a83d90a335c9740ad33e2a5face42ab7c2 extends Twig_Template
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
        $__internal_454df31c539acc22d537070c14ea970afe775ec8c0c0d0ab85f3192804df542c = $this->env->getExtension("native_profiler");
        $__internal_454df31c539acc22d537070c14ea970afe775ec8c0c0d0ab85f3192804df542c->enter($__internal_454df31c539acc22d537070c14ea970afe775ec8c0c0d0ab85f3192804df542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_454df31c539acc22d537070c14ea970afe775ec8c0c0d0ab85f3192804df542c->leave($__internal_454df31c539acc22d537070c14ea970afe775ec8c0c0d0ab85f3192804df542c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
