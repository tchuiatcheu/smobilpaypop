<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_fa14521e54c8be205de244546df8f6e2341ba7b390cb3abec3b69732cc9e2b22 extends Twig_Template
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
        $__internal_2268e1948716a616a66759c1a658f83056d73eacc2e9a252ccb955e9d3283145 = $this->env->getExtension("native_profiler");
        $__internal_2268e1948716a616a66759c1a658f83056d73eacc2e9a252ccb955e9d3283145->enter($__internal_2268e1948716a616a66759c1a658f83056d73eacc2e9a252ccb955e9d3283145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2268e1948716a616a66759c1a658f83056d73eacc2e9a252ccb955e9d3283145->leave($__internal_2268e1948716a616a66759c1a658f83056d73eacc2e9a252ccb955e9d3283145_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
