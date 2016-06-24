<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5ffa05bf0445f4cde40622c46e3c8c6f117c1ecf9ddf69a2f2647f5ec42b13fc extends Twig_Template
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
        $__internal_004afb1f35d442a251eb181bae20089b7d2721b7501a70328025fb6a543500f8 = $this->env->getExtension("native_profiler");
        $__internal_004afb1f35d442a251eb181bae20089b7d2721b7501a70328025fb6a543500f8->enter($__internal_004afb1f35d442a251eb181bae20089b7d2721b7501a70328025fb6a543500f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_004afb1f35d442a251eb181bae20089b7d2721b7501a70328025fb6a543500f8->leave($__internal_004afb1f35d442a251eb181bae20089b7d2721b7501a70328025fb6a543500f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e445c06673c40b6eb323eebd60eab0e2c1578a9f6b5e175db4f52b50979519d0 = $this->env->getExtension("native_profiler");
        $__internal_e445c06673c40b6eb323eebd60eab0e2c1578a9f6b5e175db4f52b50979519d0->enter($__internal_e445c06673c40b6eb323eebd60eab0e2c1578a9f6b5e175db4f52b50979519d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e445c06673c40b6eb323eebd60eab0e2c1578a9f6b5e175db4f52b50979519d0->leave($__internal_e445c06673c40b6eb323eebd60eab0e2c1578a9f6b5e175db4f52b50979519d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1394ab8013b55f947bebb8a7c6b3d490be630b27ab2e217207e014f63684863b = $this->env->getExtension("native_profiler");
        $__internal_1394ab8013b55f947bebb8a7c6b3d490be630b27ab2e217207e014f63684863b->enter($__internal_1394ab8013b55f947bebb8a7c6b3d490be630b27ab2e217207e014f63684863b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1394ab8013b55f947bebb8a7c6b3d490be630b27ab2e217207e014f63684863b->leave($__internal_1394ab8013b55f947bebb8a7c6b3d490be630b27ab2e217207e014f63684863b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fbae22e4f85dcab438b0db710f9e0b4e86e26321960565a43ac390f1cf38205 = $this->env->getExtension("native_profiler");
        $__internal_8fbae22e4f85dcab438b0db710f9e0b4e86e26321960565a43ac390f1cf38205->enter($__internal_8fbae22e4f85dcab438b0db710f9e0b4e86e26321960565a43ac390f1cf38205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8fbae22e4f85dcab438b0db710f9e0b4e86e26321960565a43ac390f1cf38205->leave($__internal_8fbae22e4f85dcab438b0db710f9e0b4e86e26321960565a43ac390f1cf38205_prof);

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
