<?php

/* POPAdminBundle:Region:edit.html.twig */
class __TwigTemplate_246e901ac070da78d2302af9b4b4f39320088be219001225a6bbeea9f9992cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Region:edit.html.twig", 1);
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
        $__internal_666931d80e07db59f1ff88377e6f5e0e8fc670692808d4efe734a267a24f460f = $this->env->getExtension("native_profiler");
        $__internal_666931d80e07db59f1ff88377e6f5e0e8fc670692808d4efe734a267a24f460f->enter($__internal_666931d80e07db59f1ff88377e6f5e0e8fc670692808d4efe734a267a24f460f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Region:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_666931d80e07db59f1ff88377e6f5e0e8fc670692808d4efe734a267a24f460f->leave($__internal_666931d80e07db59f1ff88377e6f5e0e8fc670692808d4efe734a267a24f460f_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_97d81668f16cf921fa0d120e12b2e59566a01cf29c5f50216c53ebcd46f7d429 = $this->env->getExtension("native_profiler");
        $__internal_97d81668f16cf921fa0d120e12b2e59566a01cf29c5f50216c53ebcd46f7d429->enter($__internal_97d81668f16cf921fa0d120e12b2e59566a01cf29c5f50216c53ebcd46f7d429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_97d81668f16cf921fa0d120e12b2e59566a01cf29c5f50216c53ebcd46f7d429->leave($__internal_97d81668f16cf921fa0d120e12b2e59566a01cf29c5f50216c53ebcd46f7d429_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Region:edit.html.twig";
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
