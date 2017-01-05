<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_a2c343e67d905ad3718ce8f9990ad05ace18cc1e566f93539fccb477772f85bb extends Twig_Template
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
        $__internal_2ce80f1fa1aa195dd382a259f4587c88407d00c41cd8f93830d7a46df14a163c = $this->env->getExtension("native_profiler");
        $__internal_2ce80f1fa1aa195dd382a259f4587c88407d00c41cd8f93830d7a46df14a163c->enter($__internal_2ce80f1fa1aa195dd382a259f4587c88407d00c41cd8f93830d7a46df14a163c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2ce80f1fa1aa195dd382a259f4587c88407d00c41cd8f93830d7a46df14a163c->leave($__internal_2ce80f1fa1aa195dd382a259f4587c88407d00c41cd8f93830d7a46df14a163c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
