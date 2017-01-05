<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_60526e034ce31f9814e7c98dd3dc8e7610ac9154098164eaf4aaae97fceb602f extends Twig_Template
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
        $__internal_09495f8c1037aaa9e007f7d6555c59e44117a92731cc83e3c47c18bc10d4d6d7 = $this->env->getExtension("native_profiler");
        $__internal_09495f8c1037aaa9e007f7d6555c59e44117a92731cc83e3c47c18bc10d4d6d7->enter($__internal_09495f8c1037aaa9e007f7d6555c59e44117a92731cc83e3c47c18bc10d4d6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_09495f8c1037aaa9e007f7d6555c59e44117a92731cc83e3c47c18bc10d4d6d7->leave($__internal_09495f8c1037aaa9e007f7d6555c59e44117a92731cc83e3c47c18bc10d4d6d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
