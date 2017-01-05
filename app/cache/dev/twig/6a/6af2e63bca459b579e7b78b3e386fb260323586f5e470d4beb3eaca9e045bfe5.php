<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c8e6a5d20c297a28795d797fefae059d1b72efaa4616267032c5c37e41a69a27 extends Twig_Template
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
        $__internal_f5e4235bfd8134507658cacfeda49614449f2ee5a8da93a6825cdc8ad723f124 = $this->env->getExtension("native_profiler");
        $__internal_f5e4235bfd8134507658cacfeda49614449f2ee5a8da93a6825cdc8ad723f124->enter($__internal_f5e4235bfd8134507658cacfeda49614449f2ee5a8da93a6825cdc8ad723f124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f5e4235bfd8134507658cacfeda49614449f2ee5a8da93a6825cdc8ad723f124->leave($__internal_f5e4235bfd8134507658cacfeda49614449f2ee5a8da93a6825cdc8ad723f124_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
