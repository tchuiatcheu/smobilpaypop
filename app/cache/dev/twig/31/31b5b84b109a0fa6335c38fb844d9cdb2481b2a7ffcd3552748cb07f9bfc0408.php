<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b808bd11e0d62f10cd1207fa3e4d3958ce80e2ee7486a1e1f182c91d74cdf9a6 extends Twig_Template
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
        $__internal_cdc65ced524531bc735c7df3e350129a4a7eb02003f6c204409143b646ba5c7e = $this->env->getExtension("native_profiler");
        $__internal_cdc65ced524531bc735c7df3e350129a4a7eb02003f6c204409143b646ba5c7e->enter($__internal_cdc65ced524531bc735c7df3e350129a4a7eb02003f6c204409143b646ba5c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cdc65ced524531bc735c7df3e350129a4a7eb02003f6c204409143b646ba5c7e->leave($__internal_cdc65ced524531bc735c7df3e350129a4a7eb02003f6c204409143b646ba5c7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
