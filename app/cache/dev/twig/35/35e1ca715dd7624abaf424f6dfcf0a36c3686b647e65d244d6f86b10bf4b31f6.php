<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_101e5a5cc5dbd38a6a4be84047b4d0f4c8ae8197bc96ca2afea6b6e4d84872b9 extends Twig_Template
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
        $__internal_b40ce133f75795bae6b84b5d4cdae1e0fed23bbdaf4ad34499308a4fb2a83f44 = $this->env->getExtension("native_profiler");
        $__internal_b40ce133f75795bae6b84b5d4cdae1e0fed23bbdaf4ad34499308a4fb2a83f44->enter($__internal_b40ce133f75795bae6b84b5d4cdae1e0fed23bbdaf4ad34499308a4fb2a83f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b40ce133f75795bae6b84b5d4cdae1e0fed23bbdaf4ad34499308a4fb2a83f44->leave($__internal_b40ce133f75795bae6b84b5d4cdae1e0fed23bbdaf4ad34499308a4fb2a83f44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
