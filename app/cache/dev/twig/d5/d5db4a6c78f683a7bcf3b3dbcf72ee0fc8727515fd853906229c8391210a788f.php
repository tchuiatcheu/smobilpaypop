<?php

/* @POPAdmin/Agence/new.html.twig */
class __TwigTemplate_be1bf7049ee508b973d0cad4ffd29cf73f5b73b853f4c65d84093c491b7c8dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Agence/new.html.twig", 1);
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
        $__internal_492f6c9ca29f726cd007637f05505ff822e00049d22df25a66e6d6ad9f12cf83 = $this->env->getExtension("native_profiler");
        $__internal_492f6c9ca29f726cd007637f05505ff822e00049d22df25a66e6d6ad9f12cf83->enter($__internal_492f6c9ca29f726cd007637f05505ff822e00049d22df25a66e6d6ad9f12cf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Agence/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_492f6c9ca29f726cd007637f05505ff822e00049d22df25a66e6d6ad9f12cf83->leave($__internal_492f6c9ca29f726cd007637f05505ff822e00049d22df25a66e6d6ad9f12cf83_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_88d85b6dfc545ee52978b61b7ace888ec100af0969e1cb8bd88bce3c7eb4c859 = $this->env->getExtension("native_profiler");
        $__internal_88d85b6dfc545ee52978b61b7ace888ec100af0969e1cb8bd88bce3c7eb4c859->enter($__internal_88d85b6dfc545ee52978b61b7ace888ec100af0969e1cb8bd88bce3c7eb4c859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_88d85b6dfc545ee52978b61b7ace888ec100af0969e1cb8bd88bce3c7eb4c859->leave($__internal_88d85b6dfc545ee52978b61b7ace888ec100af0969e1cb8bd88bce3c7eb4c859_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Agence/new.html.twig";
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
