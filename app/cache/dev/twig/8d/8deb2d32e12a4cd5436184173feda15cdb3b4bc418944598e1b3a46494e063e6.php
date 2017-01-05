<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_cddac695a3595a4cf59cdb59781ad6b339410622b393eec9d80017e912e65519 extends Twig_Template
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
        $__internal_5e380ba07b8fad209e70657234fe39e5ba73caac26a007b99a962337256815e3 = $this->env->getExtension("native_profiler");
        $__internal_5e380ba07b8fad209e70657234fe39e5ba73caac26a007b99a962337256815e3->enter($__internal_5e380ba07b8fad209e70657234fe39e5ba73caac26a007b99a962337256815e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5e380ba07b8fad209e70657234fe39e5ba73caac26a007b99a962337256815e3->leave($__internal_5e380ba07b8fad209e70657234fe39e5ba73caac26a007b99a962337256815e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
