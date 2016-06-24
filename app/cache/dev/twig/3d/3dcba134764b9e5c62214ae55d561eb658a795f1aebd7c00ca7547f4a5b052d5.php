<?php

/* POPAdminBundle:Ville:new.html.twig */
class __TwigTemplate_ca97935973166054a195c0588c31f77022daaa1f58e340ef22d1004be3bd2fbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Ville:new.html.twig", 1);
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
        $__internal_df80267a00e1c205832ceb9ffaa3c0ac52baf308c6f53c27db5c9c699adeb2d4 = $this->env->getExtension("native_profiler");
        $__internal_df80267a00e1c205832ceb9ffaa3c0ac52baf308c6f53c27db5c9c699adeb2d4->enter($__internal_df80267a00e1c205832ceb9ffaa3c0ac52baf308c6f53c27db5c9c699adeb2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Ville:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df80267a00e1c205832ceb9ffaa3c0ac52baf308c6f53c27db5c9c699adeb2d4->leave($__internal_df80267a00e1c205832ceb9ffaa3c0ac52baf308c6f53c27db5c9c699adeb2d4_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_5d43b0121adcb1d3bea29da227ab7736657c25cfefed2477b69d35410c55a3a1 = $this->env->getExtension("native_profiler");
        $__internal_5d43b0121adcb1d3bea29da227ab7736657c25cfefed2477b69d35410c55a3a1->enter($__internal_5d43b0121adcb1d3bea29da227ab7736657c25cfefed2477b69d35410c55a3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Ville creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("ville_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5d43b0121adcb1d3bea29da227ab7736657c25cfefed2477b69d35410c55a3a1->leave($__internal_5d43b0121adcb1d3bea29da227ab7736657c25cfefed2477b69d35410c55a3a1_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Ville:new.html.twig";
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
/*     <h1>Ville creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ville_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
