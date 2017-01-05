<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_21208509d41add45350f55b17da3a4d76a5da2a9bd4598d38c723435af976fae extends Twig_Template
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
        $__internal_4f73593f5c255e6b2a8278443eac49416042258bef203d9c70712b7cb8acfb25 = $this->env->getExtension("native_profiler");
        $__internal_4f73593f5c255e6b2a8278443eac49416042258bef203d9c70712b7cb8acfb25->enter($__internal_4f73593f5c255e6b2a8278443eac49416042258bef203d9c70712b7cb8acfb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4f73593f5c255e6b2a8278443eac49416042258bef203d9c70712b7cb8acfb25->leave($__internal_4f73593f5c255e6b2a8278443eac49416042258bef203d9c70712b7cb8acfb25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
