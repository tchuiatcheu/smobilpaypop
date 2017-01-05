<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ef48a7922111f6fd8ddc057fef3787c685d3ae8eba2e5eb2c0b8e27bdddb39d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_45accc379582f83bfebff9195fd4603d5ccc19b745c4c2bb1005bb4e6c8da5bf = $this->env->getExtension("native_profiler");
        $__internal_45accc379582f83bfebff9195fd4603d5ccc19b745c4c2bb1005bb4e6c8da5bf->enter($__internal_45accc379582f83bfebff9195fd4603d5ccc19b745c4c2bb1005bb4e6c8da5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45accc379582f83bfebff9195fd4603d5ccc19b745c4c2bb1005bb4e6c8da5bf->leave($__internal_45accc379582f83bfebff9195fd4603d5ccc19b745c4c2bb1005bb4e6c8da5bf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cbc6d61e105ba4365f5a87eaa0fdc347bcaf7800dea81d542d6484520bfe8ab4 = $this->env->getExtension("native_profiler");
        $__internal_cbc6d61e105ba4365f5a87eaa0fdc347bcaf7800dea81d542d6484520bfe8ab4->enter($__internal_cbc6d61e105ba4365f5a87eaa0fdc347bcaf7800dea81d542d6484520bfe8ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cbc6d61e105ba4365f5a87eaa0fdc347bcaf7800dea81d542d6484520bfe8ab4->leave($__internal_cbc6d61e105ba4365f5a87eaa0fdc347bcaf7800dea81d542d6484520bfe8ab4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47ba3f413f04c9b9c457cebb0910c3630f53ab80b01215678e5f3e8cadd4436b = $this->env->getExtension("native_profiler");
        $__internal_47ba3f413f04c9b9c457cebb0910c3630f53ab80b01215678e5f3e8cadd4436b->enter($__internal_47ba3f413f04c9b9c457cebb0910c3630f53ab80b01215678e5f3e8cadd4436b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47ba3f413f04c9b9c457cebb0910c3630f53ab80b01215678e5f3e8cadd4436b->leave($__internal_47ba3f413f04c9b9c457cebb0910c3630f53ab80b01215678e5f3e8cadd4436b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d0cd67959d5444cfea0ba2019d52b668ca5da3b4360a73878a43320b7ca9dad = $this->env->getExtension("native_profiler");
        $__internal_9d0cd67959d5444cfea0ba2019d52b668ca5da3b4360a73878a43320b7ca9dad->enter($__internal_9d0cd67959d5444cfea0ba2019d52b668ca5da3b4360a73878a43320b7ca9dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d0cd67959d5444cfea0ba2019d52b668ca5da3b4360a73878a43320b7ca9dad->leave($__internal_9d0cd67959d5444cfea0ba2019d52b668ca5da3b4360a73878a43320b7ca9dad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
