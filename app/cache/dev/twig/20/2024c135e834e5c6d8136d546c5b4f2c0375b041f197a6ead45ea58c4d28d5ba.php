<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d440e3039ea58d27425a5a1c8d3931a7c0243765de22926514fffadffd1193b2 extends Twig_Template
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
        $__internal_1a0699465c982bfc1d7843c14cc8991ae0f4587b6630c8b32b254b0e10e01b3a = $this->env->getExtension("native_profiler");
        $__internal_1a0699465c982bfc1d7843c14cc8991ae0f4587b6630c8b32b254b0e10e01b3a->enter($__internal_1a0699465c982bfc1d7843c14cc8991ae0f4587b6630c8b32b254b0e10e01b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1a0699465c982bfc1d7843c14cc8991ae0f4587b6630c8b32b254b0e10e01b3a->leave($__internal_1a0699465c982bfc1d7843c14cc8991ae0f4587b6630c8b32b254b0e10e01b3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
