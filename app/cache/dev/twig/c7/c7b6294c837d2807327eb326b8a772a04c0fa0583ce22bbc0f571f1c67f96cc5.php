<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_6d5ea51cab1f7812cc0ede257ea12d1af9057911f773be2e8fe1cf03a4271e91 extends Twig_Template
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
        $__internal_7f3bc615eaad24c172230634bd22dc9ac0b71a0f6d4efb3ec4dc7f3bb12d4302 = $this->env->getExtension("native_profiler");
        $__internal_7f3bc615eaad24c172230634bd22dc9ac0b71a0f6d4efb3ec4dc7f3bb12d4302->enter($__internal_7f3bc615eaad24c172230634bd22dc9ac0b71a0f6d4efb3ec4dc7f3bb12d4302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7f3bc615eaad24c172230634bd22dc9ac0b71a0f6d4efb3ec4dc7f3bb12d4302->leave($__internal_7f3bc615eaad24c172230634bd22dc9ac0b71a0f6d4efb3ec4dc7f3bb12d4302_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
