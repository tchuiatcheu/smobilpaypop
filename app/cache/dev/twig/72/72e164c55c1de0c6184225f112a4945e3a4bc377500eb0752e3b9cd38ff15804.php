<?php

/* POPAdminBundle:Default:index.html.twig */
class __TwigTemplate_1321317319f843412b76fcca1bca94668c806b9b9fd7d6678c775096dade04fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Default:index.html.twig", 1);
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
        $__internal_fc0be52d0f2518de25506feb053395fca9c356d09f6e08395374cc502974750e = $this->env->getExtension("native_profiler");
        $__internal_fc0be52d0f2518de25506feb053395fca9c356d09f6e08395374cc502974750e->enter($__internal_fc0be52d0f2518de25506feb053395fca9c356d09f6e08395374cc502974750e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc0be52d0f2518de25506feb053395fca9c356d09f6e08395374cc502974750e->leave($__internal_fc0be52d0f2518de25506feb053395fca9c356d09f6e08395374cc502974750e_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_26229b367155343dd716477008190b6d445d68f532593e997626797511e7c2cc = $this->env->getExtension("native_profiler");
        $__internal_26229b367155343dd716477008190b6d445d68f532593e997626797511e7c2cc->enter($__internal_26229b367155343dd716477008190b6d445d68f532593e997626797511e7c2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "  hhello
";
        
        $__internal_26229b367155343dd716477008190b6d445d68f532593e997626797511e7c2cc->leave($__internal_26229b367155343dd716477008190b6d445d68f532593e997626797511e7c2cc_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*   hhello*/
/* {% endblock %}*/
