<?php

/* @POPAdmin/Region/new.html.twig */
class __TwigTemplate_66534e2104768617a85dc090eabce253eeb709ba3a808b378a66c51e3752c27c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Region/new.html.twig", 1);
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
        $__internal_b7381ce1a70ea7bed388addeac039bd28afbd3736ddd96f4baabf7d1cc4ccace = $this->env->getExtension("native_profiler");
        $__internal_b7381ce1a70ea7bed388addeac039bd28afbd3736ddd96f4baabf7d1cc4ccace->enter($__internal_b7381ce1a70ea7bed388addeac039bd28afbd3736ddd96f4baabf7d1cc4ccace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Region/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7381ce1a70ea7bed388addeac039bd28afbd3736ddd96f4baabf7d1cc4ccace->leave($__internal_b7381ce1a70ea7bed388addeac039bd28afbd3736ddd96f4baabf7d1cc4ccace_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_1d30c6387938604559ede7fed7ead211ca4a196daddafc6cc5b777de589ee9ac = $this->env->getExtension("native_profiler");
        $__internal_1d30c6387938604559ede7fed7ead211ca4a196daddafc6cc5b777de589ee9ac->enter($__internal_1d30c6387938604559ede7fed7ead211ca4a196daddafc6cc5b777de589ee9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_1d30c6387938604559ede7fed7ead211ca4a196daddafc6cc5b777de589ee9ac->leave($__internal_1d30c6387938604559ede7fed7ead211ca4a196daddafc6cc5b777de589ee9ac_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Region/new.html.twig";
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
