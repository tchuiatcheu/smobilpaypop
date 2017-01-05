<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_489e0da9def68425a061687e9344961f3aaa64f7913d113164b1fcf9e2f98897 extends Twig_Template
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
        $__internal_3cde13948bf1e0640523d78acfd31efef6f5943506df688ebde27ca42a20c009 = $this->env->getExtension("native_profiler");
        $__internal_3cde13948bf1e0640523d78acfd31efef6f5943506df688ebde27ca42a20c009->enter($__internal_3cde13948bf1e0640523d78acfd31efef6f5943506df688ebde27ca42a20c009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3cde13948bf1e0640523d78acfd31efef6f5943506df688ebde27ca42a20c009->leave($__internal_3cde13948bf1e0640523d78acfd31efef6f5943506df688ebde27ca42a20c009_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
