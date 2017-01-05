<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_edf163604bf2839352583bd8910787f96410a47a9e5f32798cfa83353e3930ac extends Twig_Template
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
        $__internal_7e7d11122c522b3108be3b5f062f0c06708d439377ca4db7861a7d30223454a8 = $this->env->getExtension("native_profiler");
        $__internal_7e7d11122c522b3108be3b5f062f0c06708d439377ca4db7861a7d30223454a8->enter($__internal_7e7d11122c522b3108be3b5f062f0c06708d439377ca4db7861a7d30223454a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7e7d11122c522b3108be3b5f062f0c06708d439377ca4db7861a7d30223454a8->leave($__internal_7e7d11122c522b3108be3b5f062f0c06708d439377ca4db7861a7d30223454a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
