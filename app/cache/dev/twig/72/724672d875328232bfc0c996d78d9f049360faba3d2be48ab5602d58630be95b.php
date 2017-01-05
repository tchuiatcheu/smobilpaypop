<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4a33ca364c95e2bdcddbe3af4f1858e4ab7704f36d19e0815ac8974a74d18876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_666c3aeabd7cffc17821736680e2f8d791ff1de7664291c5076d3c7ff1d1f669 = $this->env->getExtension("native_profiler");
        $__internal_666c3aeabd7cffc17821736680e2f8d791ff1de7664291c5076d3c7ff1d1f669->enter($__internal_666c3aeabd7cffc17821736680e2f8d791ff1de7664291c5076d3c7ff1d1f669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_666c3aeabd7cffc17821736680e2f8d791ff1de7664291c5076d3c7ff1d1f669->leave($__internal_666c3aeabd7cffc17821736680e2f8d791ff1de7664291c5076d3c7ff1d1f669_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
