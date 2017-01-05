<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_bd787284def01a810ac855e80d22a7c5aa2bffc2c01edb7635d4ab73410e5f00 extends Twig_Template
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
        $__internal_6f623e1ce7a6a796fa3a5918f3b9f8de5faf6fabf826cd75a7905f528b1df757 = $this->env->getExtension("native_profiler");
        $__internal_6f623e1ce7a6a796fa3a5918f3b9f8de5faf6fabf826cd75a7905f528b1df757->enter($__internal_6f623e1ce7a6a796fa3a5918f3b9f8de5faf6fabf826cd75a7905f528b1df757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_6f623e1ce7a6a796fa3a5918f3b9f8de5faf6fabf826cd75a7905f528b1df757->leave($__internal_6f623e1ce7a6a796fa3a5918f3b9f8de5faf6fabf826cd75a7905f528b1df757_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
