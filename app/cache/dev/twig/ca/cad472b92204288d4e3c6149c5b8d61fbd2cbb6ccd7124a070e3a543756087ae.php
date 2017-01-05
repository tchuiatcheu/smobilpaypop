<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_821f03599fd8ff637b969b02b1d1e7807b67490fe13d29def2a5d9fff23cb681 extends Twig_Template
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
        $__internal_620c0ade675a74bd906eca3206f429bf101f50d2c466fb2ad4ee8634adceae7a = $this->env->getExtension("native_profiler");
        $__internal_620c0ade675a74bd906eca3206f429bf101f50d2c466fb2ad4ee8634adceae7a->enter($__internal_620c0ade675a74bd906eca3206f429bf101f50d2c466fb2ad4ee8634adceae7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_620c0ade675a74bd906eca3206f429bf101f50d2c466fb2ad4ee8634adceae7a->leave($__internal_620c0ade675a74bd906eca3206f429bf101f50d2c466fb2ad4ee8634adceae7a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
