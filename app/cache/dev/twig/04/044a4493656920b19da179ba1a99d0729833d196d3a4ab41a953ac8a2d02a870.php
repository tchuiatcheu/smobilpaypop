<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f55cda3d870098eab6e93ef6571386c88d017cbfe1c1bd567c2184606841baba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_b528f45d1599272b5ba7d865a51e47f9f36c8d957ae8fb4d91c069364673761b = $this->env->getExtension("native_profiler");
        $__internal_b528f45d1599272b5ba7d865a51e47f9f36c8d957ae8fb4d91c069364673761b->enter($__internal_b528f45d1599272b5ba7d865a51e47f9f36c8d957ae8fb4d91c069364673761b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b528f45d1599272b5ba7d865a51e47f9f36c8d957ae8fb4d91c069364673761b->leave($__internal_b528f45d1599272b5ba7d865a51e47f9f36c8d957ae8fb4d91c069364673761b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75e82dd9aed5d9ec264fea6bddfff72561c978934ab9d9f229b85857dfaae739 = $this->env->getExtension("native_profiler");
        $__internal_75e82dd9aed5d9ec264fea6bddfff72561c978934ab9d9f229b85857dfaae739->enter($__internal_75e82dd9aed5d9ec264fea6bddfff72561c978934ab9d9f229b85857dfaae739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_75e82dd9aed5d9ec264fea6bddfff72561c978934ab9d9f229b85857dfaae739->leave($__internal_75e82dd9aed5d9ec264fea6bddfff72561c978934ab9d9f229b85857dfaae739_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fce054ef1578953e2503c52f00237a9f526673ee6d700dd538b5a92556ef5ba = $this->env->getExtension("native_profiler");
        $__internal_1fce054ef1578953e2503c52f00237a9f526673ee6d700dd538b5a92556ef5ba->enter($__internal_1fce054ef1578953e2503c52f00237a9f526673ee6d700dd538b5a92556ef5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1fce054ef1578953e2503c52f00237a9f526673ee6d700dd538b5a92556ef5ba->leave($__internal_1fce054ef1578953e2503c52f00237a9f526673ee6d700dd538b5a92556ef5ba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_57b6ef0b69a7d0ed8888cc43b1ca5658747858fbaf0f01f082313874858153c4 = $this->env->getExtension("native_profiler");
        $__internal_57b6ef0b69a7d0ed8888cc43b1ca5658747858fbaf0f01f082313874858153c4->enter($__internal_57b6ef0b69a7d0ed8888cc43b1ca5658747858fbaf0f01f082313874858153c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_57b6ef0b69a7d0ed8888cc43b1ca5658747858fbaf0f01f082313874858153c4->leave($__internal_57b6ef0b69a7d0ed8888cc43b1ca5658747858fbaf0f01f082313874858153c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
