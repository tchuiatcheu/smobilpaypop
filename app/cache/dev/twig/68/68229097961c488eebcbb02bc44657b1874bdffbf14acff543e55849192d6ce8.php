<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_740c56f6c210df5ae7409e3248ebbb2c056804a8af6f772705463421fd858e61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_29e25c4bb8c65b8598fa304aa4964d9c40559cff48a51debf69790a3979cb197 = $this->env->getExtension("native_profiler");
        $__internal_29e25c4bb8c65b8598fa304aa4964d9c40559cff48a51debf69790a3979cb197->enter($__internal_29e25c4bb8c65b8598fa304aa4964d9c40559cff48a51debf69790a3979cb197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e25c4bb8c65b8598fa304aa4964d9c40559cff48a51debf69790a3979cb197->leave($__internal_29e25c4bb8c65b8598fa304aa4964d9c40559cff48a51debf69790a3979cb197_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_26b8ad5f09691b046c0584b058c0ed37cb4cf834017be52ba299627d5a864e24 = $this->env->getExtension("native_profiler");
        $__internal_26b8ad5f09691b046c0584b058c0ed37cb4cf834017be52ba299627d5a864e24->enter($__internal_26b8ad5f09691b046c0584b058c0ed37cb4cf834017be52ba299627d5a864e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_26b8ad5f09691b046c0584b058c0ed37cb4cf834017be52ba299627d5a864e24->leave($__internal_26b8ad5f09691b046c0584b058c0ed37cb4cf834017be52ba299627d5a864e24_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d23b434c976de102e03e9d79ba2fdf99535536d791fd0650d3e5455fd62eaef6 = $this->env->getExtension("native_profiler");
        $__internal_d23b434c976de102e03e9d79ba2fdf99535536d791fd0650d3e5455fd62eaef6->enter($__internal_d23b434c976de102e03e9d79ba2fdf99535536d791fd0650d3e5455fd62eaef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d23b434c976de102e03e9d79ba2fdf99535536d791fd0650d3e5455fd62eaef6->leave($__internal_d23b434c976de102e03e9d79ba2fdf99535536d791fd0650d3e5455fd62eaef6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f9d4fa367c27f51d730db0a2341a99e25f1bae75f57b6f0c73ba27de9d319b3 = $this->env->getExtension("native_profiler");
        $__internal_7f9d4fa367c27f51d730db0a2341a99e25f1bae75f57b6f0c73ba27de9d319b3->enter($__internal_7f9d4fa367c27f51d730db0a2341a99e25f1bae75f57b6f0c73ba27de9d319b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7f9d4fa367c27f51d730db0a2341a99e25f1bae75f57b6f0c73ba27de9d319b3->leave($__internal_7f9d4fa367c27f51d730db0a2341a99e25f1bae75f57b6f0c73ba27de9d319b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
