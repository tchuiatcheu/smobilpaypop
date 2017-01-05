<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_adb85443a2f69e1147146d598c71f9f34f9a92edbbb0e879dedb3b0d781ca9c5 extends Twig_Template
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
        $__internal_8211331f4ab83b374f3c55824a24f8cb788873adf72747d9f84073163bb2d29b = $this->env->getExtension("native_profiler");
        $__internal_8211331f4ab83b374f3c55824a24f8cb788873adf72747d9f84073163bb2d29b->enter($__internal_8211331f4ab83b374f3c55824a24f8cb788873adf72747d9f84073163bb2d29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8211331f4ab83b374f3c55824a24f8cb788873adf72747d9f84073163bb2d29b->leave($__internal_8211331f4ab83b374f3c55824a24f8cb788873adf72747d9f84073163bb2d29b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
