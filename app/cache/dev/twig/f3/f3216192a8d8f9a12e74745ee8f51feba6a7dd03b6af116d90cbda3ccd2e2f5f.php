<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e8a8d36755f9a1589aba02e96834fd44be599779250ab88aa99953a7a3457c50 extends Twig_Template
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
        $__internal_4aa01f8151632d1dce1b847ce22d975c745b312b2204c2eb5414f8cb35679488 = $this->env->getExtension("native_profiler");
        $__internal_4aa01f8151632d1dce1b847ce22d975c745b312b2204c2eb5414f8cb35679488->enter($__internal_4aa01f8151632d1dce1b847ce22d975c745b312b2204c2eb5414f8cb35679488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_4aa01f8151632d1dce1b847ce22d975c745b312b2204c2eb5414f8cb35679488->leave($__internal_4aa01f8151632d1dce1b847ce22d975c745b312b2204c2eb5414f8cb35679488_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
