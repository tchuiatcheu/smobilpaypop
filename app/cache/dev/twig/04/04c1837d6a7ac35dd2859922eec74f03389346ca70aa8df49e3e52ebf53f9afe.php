<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_71ee30963d1154238148f3c4b8ffcf59d9e76d91fc772fa1b8fa7cae0dfef69c extends Twig_Template
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
        $__internal_57a0b6499f1255337ac6c3d3248cdc0313710019a677a38e367fd89c06e3a8d7 = $this->env->getExtension("native_profiler");
        $__internal_57a0b6499f1255337ac6c3d3248cdc0313710019a677a38e367fd89c06e3a8d7->enter($__internal_57a0b6499f1255337ac6c3d3248cdc0313710019a677a38e367fd89c06e3a8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_57a0b6499f1255337ac6c3d3248cdc0313710019a677a38e367fd89c06e3a8d7->leave($__internal_57a0b6499f1255337ac6c3d3248cdc0313710019a677a38e367fd89c06e3a8d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
