<?php

/* @POPAdmin/Region/edit.html.twig */
class __TwigTemplate_1d7fd79588a877841b8651bd4579d9147a1dc7f77b5d13319a54f4cef5f79f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Region/edit.html.twig", 1);
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
        $__internal_97a64b16d37ca28922275aafb4c116c4aed857eaddd130d1e2435d48ef591cf6 = $this->env->getExtension("native_profiler");
        $__internal_97a64b16d37ca28922275aafb4c116c4aed857eaddd130d1e2435d48ef591cf6->enter($__internal_97a64b16d37ca28922275aafb4c116c4aed857eaddd130d1e2435d48ef591cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Region/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a64b16d37ca28922275aafb4c116c4aed857eaddd130d1e2435d48ef591cf6->leave($__internal_97a64b16d37ca28922275aafb4c116c4aed857eaddd130d1e2435d48ef591cf6_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_830e353cef7b056347a3149a4737bc7ee5d2e44b335087a61436f7e849096482 = $this->env->getExtension("native_profiler");
        $__internal_830e353cef7b056347a3149a4737bc7ee5d2e44b335087a61436f7e849096482->enter($__internal_830e353cef7b056347a3149a4737bc7ee5d2e44b335087a61436f7e849096482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Region edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("region_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_830e353cef7b056347a3149a4737bc7ee5d2e44b335087a61436f7e849096482->leave($__internal_830e353cef7b056347a3149a4737bc7ee5d2e44b335087a61436f7e849096482_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Region/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*     <h1>Region edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('region_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
