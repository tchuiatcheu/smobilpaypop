<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d0042a78e34d648d4f815b212abc107f04ad0f2a5dd26d7a967e7fed6c250cbe extends Twig_Template
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
        $__internal_4564b4ae00c24df624e09e1ea164411e79357464ab4ec8093b573363b685408b = $this->env->getExtension("native_profiler");
        $__internal_4564b4ae00c24df624e09e1ea164411e79357464ab4ec8093b573363b685408b->enter($__internal_4564b4ae00c24df624e09e1ea164411e79357464ab4ec8093b573363b685408b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4564b4ae00c24df624e09e1ea164411e79357464ab4ec8093b573363b685408b->leave($__internal_4564b4ae00c24df624e09e1ea164411e79357464ab4ec8093b573363b685408b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
