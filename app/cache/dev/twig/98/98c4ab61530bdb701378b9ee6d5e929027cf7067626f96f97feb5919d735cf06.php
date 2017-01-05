<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_d427c7ea61abf36d5da876e176afb8da034267f30867b9f61f9cee6fb1f9cbea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_ef06c793879e2266ff7f9223e367223a00c3655edbeec4fb2eb1d9d1469dae97 = $this->env->getExtension("native_profiler");
        $__internal_ef06c793879e2266ff7f9223e367223a00c3655edbeec4fb2eb1d9d1469dae97->enter($__internal_ef06c793879e2266ff7f9223e367223a00c3655edbeec4fb2eb1d9d1469dae97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef06c793879e2266ff7f9223e367223a00c3655edbeec4fb2eb1d9d1469dae97->leave($__internal_ef06c793879e2266ff7f9223e367223a00c3655edbeec4fb2eb1d9d1469dae97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfd13318c46eb61d4cd5f8141f0669f74c34c5582da0e261f6be3d0432c54fee = $this->env->getExtension("native_profiler");
        $__internal_dfd13318c46eb61d4cd5f8141f0669f74c34c5582da0e261f6be3d0432c54fee->enter($__internal_dfd13318c46eb61d4cd5f8141f0669f74c34c5582da0e261f6be3d0432c54fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dfd13318c46eb61d4cd5f8141f0669f74c34c5582da0e261f6be3d0432c54fee->leave($__internal_dfd13318c46eb61d4cd5f8141f0669f74c34c5582da0e261f6be3d0432c54fee_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe726411d31868671f50ef71cac496bd6e85c196d713a8031fdf89f593e140eb = $this->env->getExtension("native_profiler");
        $__internal_fe726411d31868671f50ef71cac496bd6e85c196d713a8031fdf89f593e140eb->enter($__internal_fe726411d31868671f50ef71cac496bd6e85c196d713a8031fdf89f593e140eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fe726411d31868671f50ef71cac496bd6e85c196d713a8031fdf89f593e140eb->leave($__internal_fe726411d31868671f50ef71cac496bd6e85c196d713a8031fdf89f593e140eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
