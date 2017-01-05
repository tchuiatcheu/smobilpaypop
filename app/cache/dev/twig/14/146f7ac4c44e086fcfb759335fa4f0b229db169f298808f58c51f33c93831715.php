<?php

/* @POPAdmin/layout.html.twig */
class __TwigTemplate_4dc9d3b3e8e69aa784b8332b8de8af6c6a1b7ca8aec0f02804b7e0707ce3db0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPCoreBundle::layout.html.twig", "@POPAdmin/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "POPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18dd2a64c8378e82a693a0108372c2550f1b5f333805d78f49c2d134605557e8 = $this->env->getExtension("native_profiler");
        $__internal_18dd2a64c8378e82a693a0108372c2550f1b5f333805d78f49c2d134605557e8->enter($__internal_18dd2a64c8378e82a693a0108372c2550f1b5f333805d78f49c2d134605557e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18dd2a64c8378e82a693a0108372c2550f1b5f333805d78f49c2d134605557e8->leave($__internal_18dd2a64c8378e82a693a0108372c2550f1b5f333805d78f49c2d134605557e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_741fa20641c7035e1a86cfa670f62a4e25cdd9b3c18a34b09556917725d9b4f4 = $this->env->getExtension("native_profiler");
        $__internal_741fa20641c7035e1a86cfa670f62a4e25cdd9b3c18a34b09556917725d9b4f4->enter($__internal_741fa20641c7035e1a86cfa670f62a4e25cdd9b3c18a34b09556917725d9b4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div>
        <ul style=\"display: inline\">
            <li> <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("pop_admin_homepage");
        echo "\">Accueil</a></li>
            <li> <a>Users</a></li>
            <li> <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("pays_index");
        echo "\"> Pays</a></li>
            <li> <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("region_index");
        echo "\"> Regions</a></li>
            <li> <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ville_index");
        echo "\"> Villes</a></li>
            <li> <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("quartier_index");
        echo "\"> Quartiers</a></li>
            <li> <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("agence_index");
        echo "\"> Agences</a></li>
        </ul>
    </div>
    <br>

    ";
        // line 18
        $this->displayBlock('admin_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_741fa20641c7035e1a86cfa670f62a4e25cdd9b3c18a34b09556917725d9b4f4->leave($__internal_741fa20641c7035e1a86cfa670f62a4e25cdd9b3c18a34b09556917725d9b4f4_prof);

    }

    // line 18
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_024e5c3fa7f778193122e08f8664fb49c59d3905a7bded9ccd667dfb11a9917a = $this->env->getExtension("native_profiler");
        $__internal_024e5c3fa7f778193122e08f8664fb49c59d3905a7bded9ccd667dfb11a9917a->enter($__internal_024e5c3fa7f778193122e08f8664fb49c59d3905a7bded9ccd667dfb11a9917a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        
        $__internal_024e5c3fa7f778193122e08f8664fb49c59d3905a7bded9ccd667dfb11a9917a->leave($__internal_024e5c3fa7f778193122e08f8664fb49c59d3905a7bded9ccd667dfb11a9917a_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  77 => 19,  75 => 18,  67 => 13,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  46 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'POPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div>*/
/*         <ul style="display: inline">*/
/*             <li> <a href="{{ path('pop_admin_homepage') }}">Accueil</a></li>*/
/*             <li> <a>Users</a></li>*/
/*             <li> <a href="{{ path('pays_index') }}"> Pays</a></li>*/
/*             <li> <a href="{{ path('region_index') }}"> Regions</a></li>*/
/*             <li> <a href="{{ path('ville_index') }}"> Villes</a></li>*/
/*             <li> <a href="{{ path('quartier_index') }}"> Quartiers</a></li>*/
/*             <li> <a href="{{ path('agence_index') }}"> Agences</a></li>*/
/*         </ul>*/
/*     </div>*/
/*     <br>*/
/* */
/*     {% block admin_body %}{% endblock %}*/
/* */
/* {% endblock %}*/
/* */
