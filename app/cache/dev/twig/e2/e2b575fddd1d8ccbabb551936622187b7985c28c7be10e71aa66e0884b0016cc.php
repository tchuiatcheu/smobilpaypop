<?php

/* POPAdminBundle:Pays:edit.html.twig */
class __TwigTemplate_73b326fdecd67cdddd66d87614bffd750b03509ab6e26e53d399d38e1110386f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Pays:edit.html.twig", 1);
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
        $__internal_fa86bd7a8406c95105d0ce13cfccda589fa4899b87f862873f2b5db0f31cfa73 = $this->env->getExtension("native_profiler");
        $__internal_fa86bd7a8406c95105d0ce13cfccda589fa4899b87f862873f2b5db0f31cfa73->enter($__internal_fa86bd7a8406c95105d0ce13cfccda589fa4899b87f862873f2b5db0f31cfa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Pays:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa86bd7a8406c95105d0ce13cfccda589fa4899b87f862873f2b5db0f31cfa73->leave($__internal_fa86bd7a8406c95105d0ce13cfccda589fa4899b87f862873f2b5db0f31cfa73_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_0f55487c6eba403894fd1b96d6e06a9b1f2d4e2c183e495f254b6c1dfa91af6c = $this->env->getExtension("native_profiler");
        $__internal_0f55487c6eba403894fd1b96d6e06a9b1f2d4e2c183e495f254b6c1dfa91af6c->enter($__internal_0f55487c6eba403894fd1b96d6e06a9b1f2d4e2c183e495f254b6c1dfa91af6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Pays edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("pays_index");
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
        
        $__internal_0f55487c6eba403894fd1b96d6e06a9b1f2d4e2c183e495f254b6c1dfa91af6c->leave($__internal_0f55487c6eba403894fd1b96d6e06a9b1f2d4e2c183e495f254b6c1dfa91af6c_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Pays:edit.html.twig";
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
/*     <h1>Pays edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('pays_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
