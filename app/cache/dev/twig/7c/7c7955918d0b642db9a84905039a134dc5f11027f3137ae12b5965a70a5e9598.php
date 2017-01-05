<?php

/* @POPAdmin/Quartier/edit.html.twig */
class __TwigTemplate_ddbfa4b09efb63378580f47a1341c1e92cc2be351fc6291fdd9695ec0561f1d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Quartier/edit.html.twig", 1);
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
        $__internal_50c5c09dd3874747c569a4d2ab23a8c63444c942857aa3333285f9b4bdf4f22b = $this->env->getExtension("native_profiler");
        $__internal_50c5c09dd3874747c569a4d2ab23a8c63444c942857aa3333285f9b4bdf4f22b->enter($__internal_50c5c09dd3874747c569a4d2ab23a8c63444c942857aa3333285f9b4bdf4f22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Quartier/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50c5c09dd3874747c569a4d2ab23a8c63444c942857aa3333285f9b4bdf4f22b->leave($__internal_50c5c09dd3874747c569a4d2ab23a8c63444c942857aa3333285f9b4bdf4f22b_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_c13ede4ef48212e3504337d576e6e94d57372c3c565ec0df980d55dbd546f0b8 = $this->env->getExtension("native_profiler");
        $__internal_c13ede4ef48212e3504337d576e6e94d57372c3c565ec0df980d55dbd546f0b8->enter($__internal_c13ede4ef48212e3504337d576e6e94d57372c3c565ec0df980d55dbd546f0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_c13ede4ef48212e3504337d576e6e94d57372c3c565ec0df980d55dbd546f0b8->leave($__internal_c13ede4ef48212e3504337d576e6e94d57372c3c565ec0df980d55dbd546f0b8_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Quartier/edit.html.twig";
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
