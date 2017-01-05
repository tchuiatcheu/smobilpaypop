<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f4c99be58a9167230b3e574b79c94933180d06724215857f1b9ce58dc9d4c285 extends Twig_Template
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
        $__internal_08e41f1c27c4ac79c2d1c09d08f5c5ed07d714ef0fe3821a2e9e47b3d00c9d0c = $this->env->getExtension("native_profiler");
        $__internal_08e41f1c27c4ac79c2d1c09d08f5c5ed07d714ef0fe3821a2e9e47b3d00c9d0c->enter($__internal_08e41f1c27c4ac79c2d1c09d08f5c5ed07d714ef0fe3821a2e9e47b3d00c9d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08e41f1c27c4ac79c2d1c09d08f5c5ed07d714ef0fe3821a2e9e47b3d00c9d0c->leave($__internal_08e41f1c27c4ac79c2d1c09d08f5c5ed07d714ef0fe3821a2e9e47b3d00c9d0c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df829020a7a0db72f6466a4a64022653916c17d3d2bf20321fd9975f003e516b = $this->env->getExtension("native_profiler");
        $__internal_df829020a7a0db72f6466a4a64022653916c17d3d2bf20321fd9975f003e516b->enter($__internal_df829020a7a0db72f6466a4a64022653916c17d3d2bf20321fd9975f003e516b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_df829020a7a0db72f6466a4a64022653916c17d3d2bf20321fd9975f003e516b->leave($__internal_df829020a7a0db72f6466a4a64022653916c17d3d2bf20321fd9975f003e516b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d484093517abb28af646d234340f84271d1e5ab4ca3cd7a6444dcd96300b6d4b = $this->env->getExtension("native_profiler");
        $__internal_d484093517abb28af646d234340f84271d1e5ab4ca3cd7a6444dcd96300b6d4b->enter($__internal_d484093517abb28af646d234340f84271d1e5ab4ca3cd7a6444dcd96300b6d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d484093517abb28af646d234340f84271d1e5ab4ca3cd7a6444dcd96300b6d4b->leave($__internal_d484093517abb28af646d234340f84271d1e5ab4ca3cd7a6444dcd96300b6d4b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc6a2a08813b97e4f6dbc595ea1069b112765ef0e3ac2f3b73584132d64bcdd9 = $this->env->getExtension("native_profiler");
        $__internal_cc6a2a08813b97e4f6dbc595ea1069b112765ef0e3ac2f3b73584132d64bcdd9->enter($__internal_cc6a2a08813b97e4f6dbc595ea1069b112765ef0e3ac2f3b73584132d64bcdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cc6a2a08813b97e4f6dbc595ea1069b112765ef0e3ac2f3b73584132d64bcdd9->leave($__internal_cc6a2a08813b97e4f6dbc595ea1069b112765ef0e3ac2f3b73584132d64bcdd9_prof);

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
