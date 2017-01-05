<?php

/* POPAdminBundle:Region:new.html.twig */
class __TwigTemplate_baa2b6eca66e165936df244d00406af977f9d1e68b67685003f49570b49f5077 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Region:new.html.twig", 1);
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
        $__internal_c9cc55028c2efb926a2668ad316012bd8b7fbcfd78aba14391a005fa6c797198 = $this->env->getExtension("native_profiler");
        $__internal_c9cc55028c2efb926a2668ad316012bd8b7fbcfd78aba14391a005fa6c797198->enter($__internal_c9cc55028c2efb926a2668ad316012bd8b7fbcfd78aba14391a005fa6c797198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Region:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9cc55028c2efb926a2668ad316012bd8b7fbcfd78aba14391a005fa6c797198->leave($__internal_c9cc55028c2efb926a2668ad316012bd8b7fbcfd78aba14391a005fa6c797198_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_86cc68c05d24be1df9fdd9c46f58d6114c2e6cf4301f26713a491c4dfa86a474 = $this->env->getExtension("native_profiler");
        $__internal_86cc68c05d24be1df9fdd9c46f58d6114c2e6cf4301f26713a491c4dfa86a474->enter($__internal_86cc68c05d24be1df9fdd9c46f58d6114c2e6cf4301f26713a491c4dfa86a474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Region creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("region_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_86cc68c05d24be1df9fdd9c46f58d6114c2e6cf4301f26713a491c4dfa86a474->leave($__internal_86cc68c05d24be1df9fdd9c46f58d6114c2e6cf4301f26713a491c4dfa86a474_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Region:new.html.twig";
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
/*     <h1>Region creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('region_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
