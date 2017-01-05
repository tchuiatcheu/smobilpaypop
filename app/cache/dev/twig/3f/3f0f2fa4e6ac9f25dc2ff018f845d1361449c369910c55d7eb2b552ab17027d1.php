<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_fe4ef5856b6877d796aff07d6f35e4863803f80f5d87ce5a59640f7df26eede2 extends Twig_Template
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
        $__internal_8f86a08a8baddfa2f67c7e58825951b88a0fac44b81fcd2cd60b83394847b581 = $this->env->getExtension("native_profiler");
        $__internal_8f86a08a8baddfa2f67c7e58825951b88a0fac44b81fcd2cd60b83394847b581->enter($__internal_8f86a08a8baddfa2f67c7e58825951b88a0fac44b81fcd2cd60b83394847b581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8f86a08a8baddfa2f67c7e58825951b88a0fac44b81fcd2cd60b83394847b581->leave($__internal_8f86a08a8baddfa2f67c7e58825951b88a0fac44b81fcd2cd60b83394847b581_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
