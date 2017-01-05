<?php

/* @POPAdmin/Ville/edit.html.twig */
class __TwigTemplate_b8a11388a84f5a094e86bf23bd5da058ea4b7e59b689412998235e2c440f9943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Ville/edit.html.twig", 1);
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
        $__internal_6b891b2ea8a1ce4460d74b7f0c08d2508d0ab364e80f16e0cc9e58e747e12d4c = $this->env->getExtension("native_profiler");
        $__internal_6b891b2ea8a1ce4460d74b7f0c08d2508d0ab364e80f16e0cc9e58e747e12d4c->enter($__internal_6b891b2ea8a1ce4460d74b7f0c08d2508d0ab364e80f16e0cc9e58e747e12d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Ville/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b891b2ea8a1ce4460d74b7f0c08d2508d0ab364e80f16e0cc9e58e747e12d4c->leave($__internal_6b891b2ea8a1ce4460d74b7f0c08d2508d0ab364e80f16e0cc9e58e747e12d4c_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_6aee3978b8159d652794b1001465985236c954ecef78c7d94d8060e4e9e1f4e6 = $this->env->getExtension("native_profiler");
        $__internal_6aee3978b8159d652794b1001465985236c954ecef78c7d94d8060e4e9e1f4e6->enter($__internal_6aee3978b8159d652794b1001465985236c954ecef78c7d94d8060e4e9e1f4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Ville edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("ville_index");
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
        
        $__internal_6aee3978b8159d652794b1001465985236c954ecef78c7d94d8060e4e9e1f4e6->leave($__internal_6aee3978b8159d652794b1001465985236c954ecef78c7d94d8060e4e9e1f4e6_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Ville/edit.html.twig";
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
/*     <h1>Ville edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ville_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
