<?php

/* POPAdminBundle:Ville:new.html.twig */
class __TwigTemplate_84e2938d068e7f063975daa4dc3032bd0057b49f077bd1d7aba9aec47b96bfa5 extends Twig_Template
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
        $__internal_8c4670a093e59ca4a8e1e602ee18a683ba4fcf279eef8726f04f8ccd0409e4aa = $this->env->getExtension("native_profiler");
        $__internal_8c4670a093e59ca4a8e1e602ee18a683ba4fcf279eef8726f04f8ccd0409e4aa->enter($__internal_8c4670a093e59ca4a8e1e602ee18a683ba4fcf279eef8726f04f8ccd0409e4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Ville:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c4670a093e59ca4a8e1e602ee18a683ba4fcf279eef8726f04f8ccd0409e4aa->leave($__internal_8c4670a093e59ca4a8e1e602ee18a683ba4fcf279eef8726f04f8ccd0409e4aa_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_f446e7ec8a41e61ab3c4d5c7b355e042403b3e27f8adf53c38889f50a79c1990 = $this->env->getExtension("native_profiler");
        $__internal_f446e7ec8a41e61ab3c4d5c7b355e042403b3e27f8adf53c38889f50a79c1990->enter($__internal_f446e7ec8a41e61ab3c4d5c7b355e042403b3e27f8adf53c38889f50a79c1990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_f446e7ec8a41e61ab3c4d5c7b355e042403b3e27f8adf53c38889f50a79c1990->leave($__internal_f446e7ec8a41e61ab3c4d5c7b355e042403b3e27f8adf53c38889f50a79c1990_prof);

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
