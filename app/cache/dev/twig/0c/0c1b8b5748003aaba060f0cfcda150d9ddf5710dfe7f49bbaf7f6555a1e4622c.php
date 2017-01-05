<?php

/* @POPAdmin/Quartier/show.html.twig */
class __TwigTemplate_a0a4ec7e3a9a228dc9b770d3cd52fe0ebdc3acab9f35d7f072661410e657084c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Quartier/show.html.twig", 1);
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
        $__internal_9793dab7270532420c8f40b3634658d06c19c4eb7addb4a0e5d9b2ac99c71639 = $this->env->getExtension("native_profiler");
        $__internal_9793dab7270532420c8f40b3634658d06c19c4eb7addb4a0e5d9b2ac99c71639->enter($__internal_9793dab7270532420c8f40b3634658d06c19c4eb7addb4a0e5d9b2ac99c71639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Quartier/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9793dab7270532420c8f40b3634658d06c19c4eb7addb4a0e5d9b2ac99c71639->leave($__internal_9793dab7270532420c8f40b3634658d06c19c4eb7addb4a0e5d9b2ac99c71639_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_47a01a8b7bf71518b7a6e767f40914522f8d5956e6f33138d25cd627ec8b03d8 = $this->env->getExtension("native_profiler");
        $__internal_47a01a8b7bf71518b7a6e767f40914522f8d5956e6f33138d25cd627ec8b03d8->enter($__internal_47a01a8b7bf71518b7a6e767f40914522f8d5956e6f33138d25cd627ec8b03d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_47a01a8b7bf71518b7a6e767f40914522f8d5956e6f33138d25cd627ec8b03d8->leave($__internal_47a01a8b7bf71518b7a6e767f40914522f8d5956e6f33138d25cd627ec8b03d8_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Quartier/show.html.twig";
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
