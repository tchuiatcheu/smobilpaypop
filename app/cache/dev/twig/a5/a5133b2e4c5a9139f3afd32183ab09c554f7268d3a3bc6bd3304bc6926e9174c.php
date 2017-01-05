<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_731b37e027b348a63167b9ed257e964aaa334108b829dec2101a928718efb9ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c82bb55373101b5617ba66d2a1a67c70c2faf9e7ab040ec24bbac277bfc3c4a = $this->env->getExtension("native_profiler");
        $__internal_8c82bb55373101b5617ba66d2a1a67c70c2faf9e7ab040ec24bbac277bfc3c4a->enter($__internal_8c82bb55373101b5617ba66d2a1a67c70c2faf9e7ab040ec24bbac277bfc3c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8c82bb55373101b5617ba66d2a1a67c70c2faf9e7ab040ec24bbac277bfc3c4a->leave($__internal_8c82bb55373101b5617ba66d2a1a67c70c2faf9e7ab040ec24bbac277bfc3c4a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_aefecb8812a7b2d9b16147bc6013d90352e3885521099fc3fe8dba501cd68df9 = $this->env->getExtension("native_profiler");
        $__internal_aefecb8812a7b2d9b16147bc6013d90352e3885521099fc3fe8dba501cd68df9->enter($__internal_aefecb8812a7b2d9b16147bc6013d90352e3885521099fc3fe8dba501cd68df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_aefecb8812a7b2d9b16147bc6013d90352e3885521099fc3fe8dba501cd68df9->leave($__internal_aefecb8812a7b2d9b16147bc6013d90352e3885521099fc3fe8dba501cd68df9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
