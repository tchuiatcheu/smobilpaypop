<?php

/* @POPAdmin/Pays/edit.html.twig */
class __TwigTemplate_e4fa6d5921a73c241226c8a4d851ec3cbcfb6b3cfc990c1b28eb692361e5faba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Pays/edit.html.twig", 1);
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
        $__internal_1f2e64d1b8c47a50ae4d44c68d52b563ca6e964051c10056149cd9657a99062b = $this->env->getExtension("native_profiler");
        $__internal_1f2e64d1b8c47a50ae4d44c68d52b563ca6e964051c10056149cd9657a99062b->enter($__internal_1f2e64d1b8c47a50ae4d44c68d52b563ca6e964051c10056149cd9657a99062b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Pays/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f2e64d1b8c47a50ae4d44c68d52b563ca6e964051c10056149cd9657a99062b->leave($__internal_1f2e64d1b8c47a50ae4d44c68d52b563ca6e964051c10056149cd9657a99062b_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_89495d019aa6b41fd957313dc42b0166eb228288e6d3743e7fd82b8f5745fa87 = $this->env->getExtension("native_profiler");
        $__internal_89495d019aa6b41fd957313dc42b0166eb228288e6d3743e7fd82b8f5745fa87->enter($__internal_89495d019aa6b41fd957313dc42b0166eb228288e6d3743e7fd82b8f5745fa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Pays edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("pays_index");
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
        
        $__internal_89495d019aa6b41fd957313dc42b0166eb228288e6d3743e7fd82b8f5745fa87->leave($__internal_89495d019aa6b41fd957313dc42b0166eb228288e6d3743e7fd82b8f5745fa87_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Pays/edit.html.twig";
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
/*     <h1>Pays edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('pays_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
