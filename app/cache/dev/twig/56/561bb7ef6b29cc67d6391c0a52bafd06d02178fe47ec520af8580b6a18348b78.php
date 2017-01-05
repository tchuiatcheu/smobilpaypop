<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0f8428b2507c82c52baadc3577077b4e4b794ffa6bad9a71d8bc1dde9eab9e78 extends Twig_Template
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
        $__internal_d1484974ef233fc81bcae15a0e7800c8c18e7afb2b9d89e7184d8a749d8ec259 = $this->env->getExtension("native_profiler");
        $__internal_d1484974ef233fc81bcae15a0e7800c8c18e7afb2b9d89e7184d8a749d8ec259->enter($__internal_d1484974ef233fc81bcae15a0e7800c8c18e7afb2b9d89e7184d8a749d8ec259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d1484974ef233fc81bcae15a0e7800c8c18e7afb2b9d89e7184d8a749d8ec259->leave($__internal_d1484974ef233fc81bcae15a0e7800c8c18e7afb2b9d89e7184d8a749d8ec259_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
