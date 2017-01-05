<?php

/* @POPAdmin/Quartier/new.html.twig */
class __TwigTemplate_7c9cc09334662d26d2939115773a71eb85e3bf70701f6ed6d902f04a8293a59a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Quartier/new.html.twig", 1);
        $this->blocks = array(
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "POPAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12d95a2fdc0ff8fd984419cc0b42d27b77430fd216f1f781762d496cbbb39b46 = $this->env->getExtension("native_profiler");
        $__internal_12d95a2fdc0ff8fd984419cc0b42d27b77430fd216f1f781762d496cbbb39b46->enter($__internal_12d95a2fdc0ff8fd984419cc0b42d27b77430fd216f1f781762d496cbbb39b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Quartier/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12d95a2fdc0ff8fd984419cc0b42d27b77430fd216f1f781762d496cbbb39b46->leave($__internal_12d95a2fdc0ff8fd984419cc0b42d27b77430fd216f1f781762d496cbbb39b46_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_5f2ba1d3c725972c340b88b89aeaea33c53a928170bbc28fac2ff53378629865 = $this->env->getExtension("native_profiler");
        $__internal_5f2ba1d3c725972c340b88b89aeaea33c53a928170bbc28fac2ff53378629865->enter($__internal_5f2ba1d3c725972c340b88b89aeaea33c53a928170bbc28fac2ff53378629865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Quartier creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("quartier_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5f2ba1d3c725972c340b88b89aeaea33c53a928170bbc28fac2ff53378629865->leave($__internal_5f2ba1d3c725972c340b88b89aeaea33c53a928170bbc28fac2ff53378629865_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Quartier/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*     <h1>Quartier creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('quartier_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
