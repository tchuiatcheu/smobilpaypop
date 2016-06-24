<?php

/* POPAdminBundle:Region:new.html.twig */
class __TwigTemplate_e4dc52fca5d4cd10d585308aa37692c7e34109337e30604eb11a1abbd58573c9 extends Twig_Template
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
        $__internal_4646c2a3e8cca2b89ad6333b7923bab29a2383ec9bba710679504c4576a1e8ff = $this->env->getExtension("native_profiler");
        $__internal_4646c2a3e8cca2b89ad6333b7923bab29a2383ec9bba710679504c4576a1e8ff->enter($__internal_4646c2a3e8cca2b89ad6333b7923bab29a2383ec9bba710679504c4576a1e8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Region:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4646c2a3e8cca2b89ad6333b7923bab29a2383ec9bba710679504c4576a1e8ff->leave($__internal_4646c2a3e8cca2b89ad6333b7923bab29a2383ec9bba710679504c4576a1e8ff_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_05c7b14d251169b20b971fe82cbfeba7e6d09f97fddeb09c9720bf693a8c0ab6 = $this->env->getExtension("native_profiler");
        $__internal_05c7b14d251169b20b971fe82cbfeba7e6d09f97fddeb09c9720bf693a8c0ab6->enter($__internal_05c7b14d251169b20b971fe82cbfeba7e6d09f97fddeb09c9720bf693a8c0ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_05c7b14d251169b20b971fe82cbfeba7e6d09f97fddeb09c9720bf693a8c0ab6->leave($__internal_05c7b14d251169b20b971fe82cbfeba7e6d09f97fddeb09c9720bf693a8c0ab6_prof);

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
