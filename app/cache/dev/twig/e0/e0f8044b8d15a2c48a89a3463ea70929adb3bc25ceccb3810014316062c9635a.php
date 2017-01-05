<?php

/* POPAdminBundle:Quartier:new.html.twig */
class __TwigTemplate_367589828e2a253b9ecb0c3de9c132d9ba3c213695787c9e85973c79145e0fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Quartier:new.html.twig", 1);
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
        $__internal_1ddbde24833e0916272820bfbe956cc8dd7ac53ec6c96c2e855da3eb1ad6d1a4 = $this->env->getExtension("native_profiler");
        $__internal_1ddbde24833e0916272820bfbe956cc8dd7ac53ec6c96c2e855da3eb1ad6d1a4->enter($__internal_1ddbde24833e0916272820bfbe956cc8dd7ac53ec6c96c2e855da3eb1ad6d1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Quartier:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ddbde24833e0916272820bfbe956cc8dd7ac53ec6c96c2e855da3eb1ad6d1a4->leave($__internal_1ddbde24833e0916272820bfbe956cc8dd7ac53ec6c96c2e855da3eb1ad6d1a4_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_5f5df234b76c32ec68c33247d5774c3e7345904cfbb8ef6b328b2eaf05be925f = $this->env->getExtension("native_profiler");
        $__internal_5f5df234b76c32ec68c33247d5774c3e7345904cfbb8ef6b328b2eaf05be925f->enter($__internal_5f5df234b76c32ec68c33247d5774c3e7345904cfbb8ef6b328b2eaf05be925f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Quartier creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("quartier_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5f5df234b76c32ec68c33247d5774c3e7345904cfbb8ef6b328b2eaf05be925f->leave($__internal_5f5df234b76c32ec68c33247d5774c3e7345904cfbb8ef6b328b2eaf05be925f_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Quartier:new.html.twig";
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
/*     <h1>Quartier creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('quartier_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
