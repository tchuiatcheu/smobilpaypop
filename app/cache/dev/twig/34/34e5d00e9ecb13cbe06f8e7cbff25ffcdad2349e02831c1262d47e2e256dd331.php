<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_65a25ceeb86561610fc2bf709a0e077cdeb8888092a0f73bbdc370e317052f6d extends Twig_Template
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
        $__internal_72973e4c70e6eb585a1cee4478650512d91d9de48b8f6b539b94ae6664d00b90 = $this->env->getExtension("native_profiler");
        $__internal_72973e4c70e6eb585a1cee4478650512d91d9de48b8f6b539b94ae6664d00b90->enter($__internal_72973e4c70e6eb585a1cee4478650512d91d9de48b8f6b539b94ae6664d00b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_72973e4c70e6eb585a1cee4478650512d91d9de48b8f6b539b94ae6664d00b90->leave($__internal_72973e4c70e6eb585a1cee4478650512d91d9de48b8f6b539b94ae6664d00b90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
