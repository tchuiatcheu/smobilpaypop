<?php

/* POPAdminBundle::layout.html.twig */
class __TwigTemplate_46719abfc0586a093de591212efa32cd496a625352927037bcee5ebcb72a7b20 extends Twig_Template
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
        $__internal_e2950f72526025f34310b524d6c831f1619d0cba8a26c4a4da9146b5c0bb7241 = $this->env->getExtension("native_profiler");
        $__internal_e2950f72526025f34310b524d6c831f1619d0cba8a26c4a4da9146b5c0bb7241->enter($__internal_e2950f72526025f34310b524d6c831f1619d0cba8a26c4a4da9146b5c0bb7241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2950f72526025f34310b524d6c831f1619d0cba8a26c4a4da9146b5c0bb7241->leave($__internal_e2950f72526025f34310b524d6c831f1619d0cba8a26c4a4da9146b5c0bb7241_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1be13e8e7e0b1dac2d50c62bd77ee3d8026809b14b01b338a5ee7586dbba9af2 = $this->env->getExtension("native_profiler");
        $__internal_1be13e8e7e0b1dac2d50c62bd77ee3d8026809b14b01b338a5ee7586dbba9af2->enter($__internal_1be13e8e7e0b1dac2d50c62bd77ee3d8026809b14b01b338a5ee7586dbba9af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1be13e8e7e0b1dac2d50c62bd77ee3d8026809b14b01b338a5ee7586dbba9af2->leave($__internal_1be13e8e7e0b1dac2d50c62bd77ee3d8026809b14b01b338a5ee7586dbba9af2_prof);

    }

    // line 18
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_28d3e2ead9502d6418069a0651a1794e670116b39af98078a23964ab80fb6ed9 = $this->env->getExtension("native_profiler");
        $__internal_28d3e2ead9502d6418069a0651a1794e670116b39af98078a23964ab80fb6ed9->enter($__internal_28d3e2ead9502d6418069a0651a1794e670116b39af98078a23964ab80fb6ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        
        $__internal_28d3e2ead9502d6418069a0651a1794e670116b39af98078a23964ab80fb6ed9->leave($__internal_28d3e2ead9502d6418069a0651a1794e670116b39af98078a23964ab80fb6ed9_prof);

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
