<?php

/* POPAdminBundle::layout.html.twig */
class __TwigTemplate_eb8a32920b5142779a8646f9573baeb1791d0a1b8488799bd7a3889beda3e8cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPCoreBundle::layout.html.twig", "POPAdminBundle::layout.html.twig", 1);
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
        $__internal_5210b475512aa99d02c54fa0fc6678d9be643eb6d140b191d5b59f37b4261962 = $this->env->getExtension("native_profiler");
        $__internal_5210b475512aa99d02c54fa0fc6678d9be643eb6d140b191d5b59f37b4261962->enter($__internal_5210b475512aa99d02c54fa0fc6678d9be643eb6d140b191d5b59f37b4261962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5210b475512aa99d02c54fa0fc6678d9be643eb6d140b191d5b59f37b4261962->leave($__internal_5210b475512aa99d02c54fa0fc6678d9be643eb6d140b191d5b59f37b4261962_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95ff75e6bd33b75944b72754502b237b997af392ef97c92819154630db4b4d1b = $this->env->getExtension("native_profiler");
        $__internal_95ff75e6bd33b75944b72754502b237b997af392ef97c92819154630db4b4d1b->enter($__internal_95ff75e6bd33b75944b72754502b237b997af392ef97c92819154630db4b4d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_95ff75e6bd33b75944b72754502b237b997af392ef97c92819154630db4b4d1b->leave($__internal_95ff75e6bd33b75944b72754502b237b997af392ef97c92819154630db4b4d1b_prof);

    }

    // line 18
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_eadc64289a9d100544eac105b6c47d4d5cd40a1e6ed0c6f084975386e3d5979a = $this->env->getExtension("native_profiler");
        $__internal_eadc64289a9d100544eac105b6c47d4d5cd40a1e6ed0c6f084975386e3d5979a->enter($__internal_eadc64289a9d100544eac105b6c47d4d5cd40a1e6ed0c6f084975386e3d5979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        
        $__internal_eadc64289a9d100544eac105b6c47d4d5cd40a1e6ed0c6f084975386e3d5979a->leave($__internal_eadc64289a9d100544eac105b6c47d4d5cd40a1e6ed0c6f084975386e3d5979a_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle::layout.html.twig";
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
