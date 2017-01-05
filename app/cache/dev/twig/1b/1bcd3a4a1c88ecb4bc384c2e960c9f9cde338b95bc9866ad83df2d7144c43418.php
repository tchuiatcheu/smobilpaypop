<?php

/* POPAdminBundle:Agence:edit.html.twig */
class __TwigTemplate_e73dd0fb0409028b41a7d0027b524c1fe68d5334734e3377553beabf1ce933e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Agence:edit.html.twig", 1);
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
        $__internal_cc994c8bdccbb74563917fed8d0d901aa01c93fb2247b438c53903bb72920d71 = $this->env->getExtension("native_profiler");
        $__internal_cc994c8bdccbb74563917fed8d0d901aa01c93fb2247b438c53903bb72920d71->enter($__internal_cc994c8bdccbb74563917fed8d0d901aa01c93fb2247b438c53903bb72920d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Agence:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc994c8bdccbb74563917fed8d0d901aa01c93fb2247b438c53903bb72920d71->leave($__internal_cc994c8bdccbb74563917fed8d0d901aa01c93fb2247b438c53903bb72920d71_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_60d9e87681b5427a8be68b0471e3a70ebb52947b1cb88c527e10b3e1398f1580 = $this->env->getExtension("native_profiler");
        $__internal_60d9e87681b5427a8be68b0471e3a70ebb52947b1cb88c527e10b3e1398f1580->enter($__internal_60d9e87681b5427a8be68b0471e3a70ebb52947b1cb88c527e10b3e1398f1580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Agence edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("agence_index");
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
        
        $__internal_60d9e87681b5427a8be68b0471e3a70ebb52947b1cb88c527e10b3e1398f1580->leave($__internal_60d9e87681b5427a8be68b0471e3a70ebb52947b1cb88c527e10b3e1398f1580_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Agence:edit.html.twig";
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
/*     <h1>Agence edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('agence_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
