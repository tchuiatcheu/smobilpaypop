<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a4003db963dbf6850e898f4b3a61907f813c70ef9d9122203ead5d77931ef216 extends Twig_Template
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
        $__internal_894e4480a950971003d5d64db6ffd4479a289ab852839cb9a8da4cac6dd8bd4f = $this->env->getExtension("native_profiler");
        $__internal_894e4480a950971003d5d64db6ffd4479a289ab852839cb9a8da4cac6dd8bd4f->enter($__internal_894e4480a950971003d5d64db6ffd4479a289ab852839cb9a8da4cac6dd8bd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_894e4480a950971003d5d64db6ffd4479a289ab852839cb9a8da4cac6dd8bd4f->leave($__internal_894e4480a950971003d5d64db6ffd4479a289ab852839cb9a8da4cac6dd8bd4f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
