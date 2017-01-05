<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_33db3ade145c444a9d52f86e73759f14233b957f5b3cf0bd31e3437ddf4230dd extends Twig_Template
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
        $__internal_dd424e5cb00d98fd1b43166d92d6c858e4e0718a17f80911e24a3d673f25beb2 = $this->env->getExtension("native_profiler");
        $__internal_dd424e5cb00d98fd1b43166d92d6c858e4e0718a17f80911e24a3d673f25beb2->enter($__internal_dd424e5cb00d98fd1b43166d92d6c858e4e0718a17f80911e24a3d673f25beb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_dd424e5cb00d98fd1b43166d92d6c858e4e0718a17f80911e24a3d673f25beb2->leave($__internal_dd424e5cb00d98fd1b43166d92d6c858e4e0718a17f80911e24a3d673f25beb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
