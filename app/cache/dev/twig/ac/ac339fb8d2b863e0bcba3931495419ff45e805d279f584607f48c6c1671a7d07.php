<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d65aea6fe0c7fa31520f20f67d110a15620b9c32f63ac5a3c13eccca8c863228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_583a85b462cf36650b0fc8bace914191d314c6bd31f60293a6c9697e310c8169 = $this->env->getExtension("native_profiler");
        $__internal_583a85b462cf36650b0fc8bace914191d314c6bd31f60293a6c9697e310c8169->enter($__internal_583a85b462cf36650b0fc8bace914191d314c6bd31f60293a6c9697e310c8169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_583a85b462cf36650b0fc8bace914191d314c6bd31f60293a6c9697e310c8169->leave($__internal_583a85b462cf36650b0fc8bace914191d314c6bd31f60293a6c9697e310c8169_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc2590fb4e1e4c3b6bb30c0c60969c52b2401c5e3a2dcdd97edba8cbb47904d7 = $this->env->getExtension("native_profiler");
        $__internal_dc2590fb4e1e4c3b6bb30c0c60969c52b2401c5e3a2dcdd97edba8cbb47904d7->enter($__internal_dc2590fb4e1e4c3b6bb30c0c60969c52b2401c5e3a2dcdd97edba8cbb47904d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dc2590fb4e1e4c3b6bb30c0c60969c52b2401c5e3a2dcdd97edba8cbb47904d7->leave($__internal_dc2590fb4e1e4c3b6bb30c0c60969c52b2401c5e3a2dcdd97edba8cbb47904d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_20492c326679e7d887a41199207f1161c8db46f012e73b39484826788c72a0de = $this->env->getExtension("native_profiler");
        $__internal_20492c326679e7d887a41199207f1161c8db46f012e73b39484826788c72a0de->enter($__internal_20492c326679e7d887a41199207f1161c8db46f012e73b39484826788c72a0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_20492c326679e7d887a41199207f1161c8db46f012e73b39484826788c72a0de->leave($__internal_20492c326679e7d887a41199207f1161c8db46f012e73b39484826788c72a0de_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_999693a5c855e83befa3e4ba87648b5f6aa76780c758ff7fb38de7314280f766 = $this->env->getExtension("native_profiler");
        $__internal_999693a5c855e83befa3e4ba87648b5f6aa76780c758ff7fb38de7314280f766->enter($__internal_999693a5c855e83befa3e4ba87648b5f6aa76780c758ff7fb38de7314280f766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_999693a5c855e83befa3e4ba87648b5f6aa76780c758ff7fb38de7314280f766->leave($__internal_999693a5c855e83befa3e4ba87648b5f6aa76780c758ff7fb38de7314280f766_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
