<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_62d26b3c00482cb08c00c42cc1f5dab85c06c35cdf47a5aeedd3173f7af0dd80 extends Twig_Template
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
        $__internal_54e924636006eca0aba624e5c0964a05e2a56a54130f745af2b398234624097e = $this->env->getExtension("native_profiler");
        $__internal_54e924636006eca0aba624e5c0964a05e2a56a54130f745af2b398234624097e->enter($__internal_54e924636006eca0aba624e5c0964a05e2a56a54130f745af2b398234624097e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_54e924636006eca0aba624e5c0964a05e2a56a54130f745af2b398234624097e->leave($__internal_54e924636006eca0aba624e5c0964a05e2a56a54130f745af2b398234624097e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
