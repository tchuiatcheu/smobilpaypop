<?php

/* POPAdminBundle:Quartier:edit.html.twig */
class __TwigTemplate_6a1b41234548f1e904ae06126b644d018856894a6f2b15a2c6d627e6929885ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Quartier:edit.html.twig", 1);
        $this->blocks = array(
            'admin_body' => array($this, 'block_admin_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "POPAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdd44fc8e3db9ce6f631274eae3a3f5100aae429d05a3723fb8941565eaffcbd = $this->env->getExtension("native_profiler");
        $__internal_cdd44fc8e3db9ce6f631274eae3a3f5100aae429d05a3723fb8941565eaffcbd->enter($__internal_cdd44fc8e3db9ce6f631274eae3a3f5100aae429d05a3723fb8941565eaffcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Quartier:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdd44fc8e3db9ce6f631274eae3a3f5100aae429d05a3723fb8941565eaffcbd->leave($__internal_cdd44fc8e3db9ce6f631274eae3a3f5100aae429d05a3723fb8941565eaffcbd_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_9867b4b7ab7725b845feadd7d91fd488737e18202be8f68d3b24e563e2597320 = $this->env->getExtension("native_profiler");
        $__internal_9867b4b7ab7725b845feadd7d91fd488737e18202be8f68d3b24e563e2597320->enter($__internal_9867b4b7ab7725b845feadd7d91fd488737e18202be8f68d3b24e563e2597320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Quartier edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("quartier_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9867b4b7ab7725b845feadd7d91fd488737e18202be8f68d3b24e563e2597320->leave($__internal_9867b4b7ab7725b845feadd7d91fd488737e18202be8f68d3b24e563e2597320_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Quartier:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*     <h1>Quartier edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('quartier_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
