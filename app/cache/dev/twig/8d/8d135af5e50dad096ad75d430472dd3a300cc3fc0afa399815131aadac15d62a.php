<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3f7a885883e2ee93c5a817a21a92a595b05577dd86e578e232ec3f3ce8b222cb extends Twig_Template
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
        $__internal_9d66e760d1040e9f53e6e110cd3f9d125e6c0bbe89011b3642f9961326498e58 = $this->env->getExtension("native_profiler");
        $__internal_9d66e760d1040e9f53e6e110cd3f9d125e6c0bbe89011b3642f9961326498e58->enter($__internal_9d66e760d1040e9f53e6e110cd3f9d125e6c0bbe89011b3642f9961326498e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_9d66e760d1040e9f53e6e110cd3f9d125e6c0bbe89011b3642f9961326498e58->leave($__internal_9d66e760d1040e9f53e6e110cd3f9d125e6c0bbe89011b3642f9961326498e58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
