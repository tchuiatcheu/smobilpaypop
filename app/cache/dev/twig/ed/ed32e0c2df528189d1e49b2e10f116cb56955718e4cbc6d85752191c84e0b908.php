<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ef6ad1bba1ba6cfd44f28f0bf666ab2f3d7ae990bac3921fc2ce14bbab133ca8 extends Twig_Template
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
        $__internal_192cc47a5cddc8cfc2959878d8a9e5a60371cd1edacf9079b06691a3b9867ce7 = $this->env->getExtension("native_profiler");
        $__internal_192cc47a5cddc8cfc2959878d8a9e5a60371cd1edacf9079b06691a3b9867ce7->enter($__internal_192cc47a5cddc8cfc2959878d8a9e5a60371cd1edacf9079b06691a3b9867ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_192cc47a5cddc8cfc2959878d8a9e5a60371cd1edacf9079b06691a3b9867ce7->leave($__internal_192cc47a5cddc8cfc2959878d8a9e5a60371cd1edacf9079b06691a3b9867ce7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
