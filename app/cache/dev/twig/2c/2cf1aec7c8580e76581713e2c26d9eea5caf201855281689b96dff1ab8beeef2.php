<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bc3dc120b823e1014e8ec404a4f3758cdeffa12573f49539d7684abbd4eb5290 extends Twig_Template
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
        $__internal_631d6f72a2ea8b042d995fe7e91a8aa87ed1735db9ff8cddb0a73cdfc92180cc = $this->env->getExtension("native_profiler");
        $__internal_631d6f72a2ea8b042d995fe7e91a8aa87ed1735db9ff8cddb0a73cdfc92180cc->enter($__internal_631d6f72a2ea8b042d995fe7e91a8aa87ed1735db9ff8cddb0a73cdfc92180cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_631d6f72a2ea8b042d995fe7e91a8aa87ed1735db9ff8cddb0a73cdfc92180cc->leave($__internal_631d6f72a2ea8b042d995fe7e91a8aa87ed1735db9ff8cddb0a73cdfc92180cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
