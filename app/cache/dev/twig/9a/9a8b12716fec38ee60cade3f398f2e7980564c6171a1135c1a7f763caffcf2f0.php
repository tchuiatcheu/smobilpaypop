<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_401cb4b91152b75f41ab756ac8f7205db430fb1ba7be7c86767dc706ecf2c86d extends Twig_Template
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
        $__internal_b7a26f1d6993332396565d8ef7ea6d77a2901ddc662bf22162b0b2a65307dca3 = $this->env->getExtension("native_profiler");
        $__internal_b7a26f1d6993332396565d8ef7ea6d77a2901ddc662bf22162b0b2a65307dca3->enter($__internal_b7a26f1d6993332396565d8ef7ea6d77a2901ddc662bf22162b0b2a65307dca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b7a26f1d6993332396565d8ef7ea6d77a2901ddc662bf22162b0b2a65307dca3->leave($__internal_b7a26f1d6993332396565d8ef7ea6d77a2901ddc662bf22162b0b2a65307dca3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
