<?php

/* @POPAdmin/Default/index.html.twig */
class __TwigTemplate_e9f9cfe6c62388645e7b0cbb94d0ffe0cf22d991adc5ecb668791b7e8e459b70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Default/index.html.twig", 1);
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
        $__internal_edebb78c6d026b93868cb1bf863ab378d995e2d817eebf5ccba690a3a3895935 = $this->env->getExtension("native_profiler");
        $__internal_edebb78c6d026b93868cb1bf863ab378d995e2d817eebf5ccba690a3a3895935->enter($__internal_edebb78c6d026b93868cb1bf863ab378d995e2d817eebf5ccba690a3a3895935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edebb78c6d026b93868cb1bf863ab378d995e2d817eebf5ccba690a3a3895935->leave($__internal_edebb78c6d026b93868cb1bf863ab378d995e2d817eebf5ccba690a3a3895935_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_b5bfe6df3c40120d74a58024104bf674a5f8eef5203681a84629dda45c5c363d = $this->env->getExtension("native_profiler");
        $__internal_b5bfe6df3c40120d74a58024104bf674a5f8eef5203681a84629dda45c5c363d->enter($__internal_b5bfe6df3c40120d74a58024104bf674a5f8eef5203681a84629dda45c5c363d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "  hhello
";
        
        $__internal_b5bfe6df3c40120d74a58024104bf674a5f8eef5203681a84629dda45c5c363d->leave($__internal_b5bfe6df3c40120d74a58024104bf674a5f8eef5203681a84629dda45c5c363d_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Default/index.html.twig";
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
