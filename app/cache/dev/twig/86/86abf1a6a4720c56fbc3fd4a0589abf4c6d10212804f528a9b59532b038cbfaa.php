<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_cea369e11a22274805e8051db4bcfbca1bc19759579090451442fca98347de8f extends Twig_Template
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
        $__internal_9afd07a6b141bea8389ff2b7a8012a380acefed929a0b667c27ee6f01e3a3489 = $this->env->getExtension("native_profiler");
        $__internal_9afd07a6b141bea8389ff2b7a8012a380acefed929a0b667c27ee6f01e3a3489->enter($__internal_9afd07a6b141bea8389ff2b7a8012a380acefed929a0b667c27ee6f01e3a3489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_9afd07a6b141bea8389ff2b7a8012a380acefed929a0b667c27ee6f01e3a3489->leave($__internal_9afd07a6b141bea8389ff2b7a8012a380acefed929a0b667c27ee6f01e3a3489_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
