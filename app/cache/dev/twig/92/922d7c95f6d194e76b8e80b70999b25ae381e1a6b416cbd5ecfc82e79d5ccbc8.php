<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c91ced3f75e336386b54af26e01cde92288b45a236ae4bad0afb5552f1d56512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2203a47fdee3b4b310cd0ded51f4729147a9c5aba7a910f68986be8e00ee5c9 = $this->env->getExtension("native_profiler");
        $__internal_d2203a47fdee3b4b310cd0ded51f4729147a9c5aba7a910f68986be8e00ee5c9->enter($__internal_d2203a47fdee3b4b310cd0ded51f4729147a9c5aba7a910f68986be8e00ee5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2203a47fdee3b4b310cd0ded51f4729147a9c5aba7a910f68986be8e00ee5c9->leave($__internal_d2203a47fdee3b4b310cd0ded51f4729147a9c5aba7a910f68986be8e00ee5c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa6254139c428a982468030d2a18863434411f90722bf3e8dbcbe0650c3f3223 = $this->env->getExtension("native_profiler");
        $__internal_fa6254139c428a982468030d2a18863434411f90722bf3e8dbcbe0650c3f3223->enter($__internal_fa6254139c428a982468030d2a18863434411f90722bf3e8dbcbe0650c3f3223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fa6254139c428a982468030d2a18863434411f90722bf3e8dbcbe0650c3f3223->leave($__internal_fa6254139c428a982468030d2a18863434411f90722bf3e8dbcbe0650c3f3223_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bf972c936a66d5f6d6cb53b5852ec31f021d2a3d070e50ba4e25d0a4b998529 = $this->env->getExtension("native_profiler");
        $__internal_6bf972c936a66d5f6d6cb53b5852ec31f021d2a3d070e50ba4e25d0a4b998529->enter($__internal_6bf972c936a66d5f6d6cb53b5852ec31f021d2a3d070e50ba4e25d0a4b998529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6bf972c936a66d5f6d6cb53b5852ec31f021d2a3d070e50ba4e25d0a4b998529->leave($__internal_6bf972c936a66d5f6d6cb53b5852ec31f021d2a3d070e50ba4e25d0a4b998529_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
