<?php

/* @POPAdmin/Pays/new.html.twig */
class __TwigTemplate_7c50705e063cd6720bb7fbdf26227d2efdca61118511b6ad53f482a2597405df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Pays/new.html.twig", 1);
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
        $__internal_75bfc180a61416861c1f70c7e9216b2fee5487e03ba802fd91febf876c5e639a = $this->env->getExtension("native_profiler");
        $__internal_75bfc180a61416861c1f70c7e9216b2fee5487e03ba802fd91febf876c5e639a->enter($__internal_75bfc180a61416861c1f70c7e9216b2fee5487e03ba802fd91febf876c5e639a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Pays/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75bfc180a61416861c1f70c7e9216b2fee5487e03ba802fd91febf876c5e639a->leave($__internal_75bfc180a61416861c1f70c7e9216b2fee5487e03ba802fd91febf876c5e639a_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_04cc40cf3c8d5c7bea2636e36ef90dddb498231de61b18690a80705d2a7f408a = $this->env->getExtension("native_profiler");
        $__internal_04cc40cf3c8d5c7bea2636e36ef90dddb498231de61b18690a80705d2a7f408a->enter($__internal_04cc40cf3c8d5c7bea2636e36ef90dddb498231de61b18690a80705d2a7f408a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Pays creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 9
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("pays_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_04cc40cf3c8d5c7bea2636e36ef90dddb498231de61b18690a80705d2a7f408a->leave($__internal_04cc40cf3c8d5c7bea2636e36ef90dddb498231de61b18690a80705d2a7f408a_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Pays/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  52 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*     <h1>Pays creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         {#<input type="submit" value="Create" />#}*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('pays_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
