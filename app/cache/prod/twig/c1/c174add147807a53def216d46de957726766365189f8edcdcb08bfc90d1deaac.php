<?php

/* POPCoreBundle:Default:index.html.twig */
class __TwigTemplate_93d457290ac0beb2597f0ef4af64ecf06b8c864040535438eb6d4a1ababa4232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPCoreBundle::layout.html.twig", "POPCoreBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "POPCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    HELLO WORD
";
    }

    public function getTemplateName()
    {
        return "POPCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'POPCoreBundle::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     HELLO WORD*/
/* {% endblock %}*/
/* */
