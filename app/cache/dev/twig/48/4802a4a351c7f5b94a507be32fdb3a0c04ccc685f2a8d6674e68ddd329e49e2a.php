<?php

/* POPAdminBundle:Agence:new.html.twig */
class __TwigTemplate_34a04781a9958158a5cf099f32c441a17247c9df4cac813f44ad566b68cc701d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Agence:new.html.twig", 1);
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
        $__internal_401d91d0e34fad16ba154aec86ab44f47e3a7da3b0269f2daee5c7ab11407ed2 = $this->env->getExtension("native_profiler");
        $__internal_401d91d0e34fad16ba154aec86ab44f47e3a7da3b0269f2daee5c7ab11407ed2->enter($__internal_401d91d0e34fad16ba154aec86ab44f47e3a7da3b0269f2daee5c7ab11407ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Agence:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_401d91d0e34fad16ba154aec86ab44f47e3a7da3b0269f2daee5c7ab11407ed2->leave($__internal_401d91d0e34fad16ba154aec86ab44f47e3a7da3b0269f2daee5c7ab11407ed2_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_96f69156a097331c2a196089fe0b5c73979013db896bfe77a2559f033aacda8f = $this->env->getExtension("native_profiler");
        $__internal_96f69156a097331c2a196089fe0b5c73979013db896bfe77a2559f033aacda8f->enter($__internal_96f69156a097331c2a196089fe0b5c73979013db896bfe77a2559f033aacda8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Agence creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("agence_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_96f69156a097331c2a196089fe0b5c73979013db896bfe77a2559f033aacda8f->leave($__internal_96f69156a097331c2a196089fe0b5c73979013db896bfe77a2559f033aacda8f_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Agence:new.html.twig";
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
/*     <h1>Agence creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('agence_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
