<?php

/* @POPAdmin/Ville/new.html.twig */
class __TwigTemplate_00376e062d4fb56f93e791d9d40df89a9f93406fc901c4a9a79fd12916268b76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Ville/new.html.twig", 1);
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
        $__internal_a016fad447ef7338f71007fc908af7709690b28d391c5b8f559856d1bba4cd0c = $this->env->getExtension("native_profiler");
        $__internal_a016fad447ef7338f71007fc908af7709690b28d391c5b8f559856d1bba4cd0c->enter($__internal_a016fad447ef7338f71007fc908af7709690b28d391c5b8f559856d1bba4cd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Ville/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a016fad447ef7338f71007fc908af7709690b28d391c5b8f559856d1bba4cd0c->leave($__internal_a016fad447ef7338f71007fc908af7709690b28d391c5b8f559856d1bba4cd0c_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_08f1113f3606eae98c57f98dd243de1b4f716b39c9bb761d6bc678177c71e044 = $this->env->getExtension("native_profiler");
        $__internal_08f1113f3606eae98c57f98dd243de1b4f716b39c9bb761d6bc678177c71e044->enter($__internal_08f1113f3606eae98c57f98dd243de1b4f716b39c9bb761d6bc678177c71e044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Ville creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ville_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_08f1113f3606eae98c57f98dd243de1b4f716b39c9bb761d6bc678177c71e044->leave($__internal_08f1113f3606eae98c57f98dd243de1b4f716b39c9bb761d6bc678177c71e044_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Ville/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*     <h1>Ville creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ville_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
