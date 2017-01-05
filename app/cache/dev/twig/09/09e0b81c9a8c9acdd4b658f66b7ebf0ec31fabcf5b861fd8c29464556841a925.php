<?php

/* @POPAdmin/Agence/edit.html.twig */
class __TwigTemplate_6c0e85dddf339bad8f38ba484cd7f17ce303aa115983cd636a1dcf093a567162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Agence/edit.html.twig", 1);
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
        $__internal_5cf77e3dcf4cb00bb31e231ffba6e722524f0f287f21af2da7eb71d10ba0f250 = $this->env->getExtension("native_profiler");
        $__internal_5cf77e3dcf4cb00bb31e231ffba6e722524f0f287f21af2da7eb71d10ba0f250->enter($__internal_5cf77e3dcf4cb00bb31e231ffba6e722524f0f287f21af2da7eb71d10ba0f250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Agence/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cf77e3dcf4cb00bb31e231ffba6e722524f0f287f21af2da7eb71d10ba0f250->leave($__internal_5cf77e3dcf4cb00bb31e231ffba6e722524f0f287f21af2da7eb71d10ba0f250_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_9a8d1c78483c5b2f82398670515d4f01ab0930816e954c865c6ba654162e169f = $this->env->getExtension("native_profiler");
        $__internal_9a8d1c78483c5b2f82398670515d4f01ab0930816e954c865c6ba654162e169f->enter($__internal_9a8d1c78483c5b2f82398670515d4f01ab0930816e954c865c6ba654162e169f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_9a8d1c78483c5b2f82398670515d4f01ab0930816e954c865c6ba654162e169f->leave($__internal_9a8d1c78483c5b2f82398670515d4f01ab0930816e954c865c6ba654162e169f_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Agence/edit.html.twig";
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
