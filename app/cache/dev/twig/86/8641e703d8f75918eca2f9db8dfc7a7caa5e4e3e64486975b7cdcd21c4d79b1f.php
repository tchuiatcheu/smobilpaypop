<?php

/* POPAdminBundle:Quartier:show.html.twig */
class __TwigTemplate_dc94d3808e03211cd3fbaf0c212f9ebed6d7a04c53ed757640644283bb806d13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Quartier:show.html.twig", 1);
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
        $__internal_5741702088ad858f59dc5e51a47c5299bd2916678e84e3d5b7d0c8e5c06e1a16 = $this->env->getExtension("native_profiler");
        $__internal_5741702088ad858f59dc5e51a47c5299bd2916678e84e3d5b7d0c8e5c06e1a16->enter($__internal_5741702088ad858f59dc5e51a47c5299bd2916678e84e3d5b7d0c8e5c06e1a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Quartier:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5741702088ad858f59dc5e51a47c5299bd2916678e84e3d5b7d0c8e5c06e1a16->leave($__internal_5741702088ad858f59dc5e51a47c5299bd2916678e84e3d5b7d0c8e5c06e1a16_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_8b469d73b7b6233cfd2ca6ad32ba5fc7495326d2d0ce5715dcccd613650b93a7 = $this->env->getExtension("native_profiler");
        $__internal_8b469d73b7b6233cfd2ca6ad32ba5fc7495326d2d0ce5715dcccd613650b93a7->enter($__internal_8b469d73b7b6233cfd2ca6ad32ba5fc7495326d2d0ce5715dcccd613650b93a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Quartier</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quartier"]) ? $context["quartier"] : $this->getContext($context, "quartier")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["quartier"]) ? $context["quartier"] : $this->getContext($context, "quartier")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Actif</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["quartier"]) ? $context["quartier"] : $this->getContext($context, "quartier")), "actif", array())) {
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
        if ($this->getAttribute((isset($context["quartier"]) ? $context["quartier"] : $this->getContext($context, "quartier")), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["quartier"]) ? $context["quartier"] : $this->getContext($context, "quartier")), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("quartier_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quartier_edit", array("id" => $this->getAttribute((isset($context["quartier"]) ? $context["quartier"] : $this->getContext($context, "quartier")), "id", array()))), "html", null, true);
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
        
        $__internal_8b469d73b7b6233cfd2ca6ad32ba5fc7495326d2d0ce5715dcccd613650b93a7->leave($__internal_8b469d73b7b6233cfd2ca6ad32ba5fc7495326d2d0ce5715dcccd613650b93a7_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Quartier:show.html.twig";
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
/*     <h1>Quartier</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ quartier.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ quartier.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Actif</th>*/
/*                 <td>{% if quartier.actif %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datecreation</th>*/
/*                 <td>{% if quartier.dateCreation %}{{ quartier.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('quartier_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('quartier_edit', { 'id': quartier.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
