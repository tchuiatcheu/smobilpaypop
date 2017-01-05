<?php

/* @POPAdmin/Ville/show.html.twig */
class __TwigTemplate_906e114afe6227835de9cedcdd9d699453df7f2694ac424e0ff9a61e9f589015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Ville/show.html.twig", 1);
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
        $__internal_7dd064f73af3f7b38b962be8fca012200ef929d3e58b651ec87ddbee45036fb2 = $this->env->getExtension("native_profiler");
        $__internal_7dd064f73af3f7b38b962be8fca012200ef929d3e58b651ec87ddbee45036fb2->enter($__internal_7dd064f73af3f7b38b962be8fca012200ef929d3e58b651ec87ddbee45036fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Ville/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dd064f73af3f7b38b962be8fca012200ef929d3e58b651ec87ddbee45036fb2->leave($__internal_7dd064f73af3f7b38b962be8fca012200ef929d3e58b651ec87ddbee45036fb2_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_bfe1a2b77ef49531526ed444ac2b95b0ca7dd5c97655595e2f316cab17f62f19 = $this->env->getExtension("native_profiler");
        $__internal_bfe1a2b77ef49531526ed444ac2b95b0ca7dd5c97655595e2f316cab17f62f19->enter($__internal_bfe1a2b77ef49531526ed444ac2b95b0ca7dd5c97655595e2f316cab17f62f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Ville</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Actif</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "actif", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Datecreation</th>
                <td>";
        // line 22
        if ($this->getAttribute((isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ville_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ville_edit", array("id" => $this->getAttribute((isset($context["ville"]) ? $context["ville"] : $this->getContext($context, "ville")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bfe1a2b77ef49531526ed444ac2b95b0ca7dd5c97655595e2f316cab17f62f19->leave($__internal_bfe1a2b77ef49531526ed444ac2b95b0ca7dd5c97655595e2f316cab17f62f19_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Ville/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  97 => 35,  91 => 32,  85 => 29,  73 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*     <h1>Ville</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ ville.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ ville.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Actif</th>*/
/*                 <td>{% if ville.actif %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datecreation</th>*/
/*                 <td>{% if ville.dateCreation %}{{ ville.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ville_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('ville_edit', { 'id': ville.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
