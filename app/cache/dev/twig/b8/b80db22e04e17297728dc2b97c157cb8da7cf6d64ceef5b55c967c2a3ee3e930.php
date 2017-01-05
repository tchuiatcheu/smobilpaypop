<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c774bdef9a30acc55fd099cbae6274a0ff636dbf93dc12667e0f3e289acd8487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e32feeaac1c83e55e7970cd2e782649dcb5e894f378e0a7997327b58bf3b0cf5 = $this->env->getExtension("native_profiler");
        $__internal_e32feeaac1c83e55e7970cd2e782649dcb5e894f378e0a7997327b58bf3b0cf5->enter($__internal_e32feeaac1c83e55e7970cd2e782649dcb5e894f378e0a7997327b58bf3b0cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e32feeaac1c83e55e7970cd2e782649dcb5e894f378e0a7997327b58bf3b0cf5->leave($__internal_e32feeaac1c83e55e7970cd2e782649dcb5e894f378e0a7997327b58bf3b0cf5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3db56cb770f24188c381bb9a43170af5e5f8625614e4042ac5620737fb9bd16 = $this->env->getExtension("native_profiler");
        $__internal_d3db56cb770f24188c381bb9a43170af5e5f8625614e4042ac5620737fb9bd16->enter($__internal_d3db56cb770f24188c381bb9a43170af5e5f8625614e4042ac5620737fb9bd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d3db56cb770f24188c381bb9a43170af5e5f8625614e4042ac5620737fb9bd16->leave($__internal_d3db56cb770f24188c381bb9a43170af5e5f8625614e4042ac5620737fb9bd16_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9839f825d7717fb8540b725da53af6f353fcb30507e2e1ce62c2c997e7a9e990 = $this->env->getExtension("native_profiler");
        $__internal_9839f825d7717fb8540b725da53af6f353fcb30507e2e1ce62c2c997e7a9e990->enter($__internal_9839f825d7717fb8540b725da53af6f353fcb30507e2e1ce62c2c997e7a9e990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9839f825d7717fb8540b725da53af6f353fcb30507e2e1ce62c2c997e7a9e990->leave($__internal_9839f825d7717fb8540b725da53af6f353fcb30507e2e1ce62c2c997e7a9e990_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bddda386c71382cf46f09be0bee869fb228a5167999d79a34b9c55775048ad3d = $this->env->getExtension("native_profiler");
        $__internal_bddda386c71382cf46f09be0bee869fb228a5167999d79a34b9c55775048ad3d->enter($__internal_bddda386c71382cf46f09be0bee869fb228a5167999d79a34b9c55775048ad3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bddda386c71382cf46f09be0bee869fb228a5167999d79a34b9c55775048ad3d->leave($__internal_bddda386c71382cf46f09be0bee869fb228a5167999d79a34b9c55775048ad3d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
