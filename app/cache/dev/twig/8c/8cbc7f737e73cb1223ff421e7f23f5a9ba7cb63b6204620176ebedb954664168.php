<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_bbb858298dd547d3ab3be3b1a87172d3b00ec383431a0339d3be9038fc58aee3 extends Twig_Template
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
        $__internal_316b5bde800d1f10ddfc685d0fe338f96922b4ddf57d097e9cd49deffce55078 = $this->env->getExtension("native_profiler");
        $__internal_316b5bde800d1f10ddfc685d0fe338f96922b4ddf57d097e9cd49deffce55078->enter($__internal_316b5bde800d1f10ddfc685d0fe338f96922b4ddf57d097e9cd49deffce55078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_316b5bde800d1f10ddfc685d0fe338f96922b4ddf57d097e9cd49deffce55078->leave($__internal_316b5bde800d1f10ddfc685d0fe338f96922b4ddf57d097e9cd49deffce55078_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
