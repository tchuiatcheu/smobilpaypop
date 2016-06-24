<?php

/* POPAdminBundle:Pays:index.html.twig */
class __TwigTemplate_3eed8eef45a1ecbf09295e1a04a26553ec1ee780b6209b591e32200c0ca20d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Pays:index.html.twig", 1);
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
        $__internal_b304fe405ccfadea796691fd53bae094f1e14c0675689100ea39bfabe18d19b3 = $this->env->getExtension("native_profiler");
        $__internal_b304fe405ccfadea796691fd53bae094f1e14c0675689100ea39bfabe18d19b3->enter($__internal_b304fe405ccfadea796691fd53bae094f1e14c0675689100ea39bfabe18d19b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Pays:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b304fe405ccfadea796691fd53bae094f1e14c0675689100ea39bfabe18d19b3->leave($__internal_b304fe405ccfadea796691fd53bae094f1e14c0675689100ea39bfabe18d19b3_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_e6b5aff0c9c6ae855d1321fb7cb1dbe97553840bf17eba518a65f2dbd159a3f9 = $this->env->getExtension("native_profiler");
        $__internal_e6b5aff0c9c6ae855d1321fb7cb1dbe97553840bf17eba518a65f2dbd159a3f9->enter($__internal_e6b5aff0c9c6ae855d1321fb7cb1dbe97553840bf17eba518a65f2dbd159a3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Pays list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actif</th>
                <th>Datecreation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pays"]) ? $context["pays"] : $this->getContext($context, "pays")));
        foreach ($context['_seq'] as $context["_key"] => $context["pay"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pays_show", array("id" => $this->getAttribute($context["pay"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pay"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["pay"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["pay"], "actif", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pay"], "dateCreation", array())), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pays_show", array("id" => $this->getAttribute($context["pay"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pays_edit", array("id" => $this->getAttribute($context["pay"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("pays_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_e6b5aff0c9c6ae855d1321fb7cb1dbe97553840bf17eba518a65f2dbd159a3f9->leave($__internal_e6b5aff0c9c6ae855d1321fb7cb1dbe97553840bf17eba518a65f2dbd159a3f9_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Pays:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  105 => 35,  93 => 29,  87 => 26,  80 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*     <h1>Pays list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Actif</th>*/
/*                 <th>Datecreation</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for pay in pays %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('pays_show', { 'id': pay.id }) }}">{{ pay.id }}</a></td>*/
/*                 <td>{{ pay.nom }}</td>*/
/*                 <td>{% if pay.actif %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ pay.dateCreation|date }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('pays_show', { 'id': pay.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('pays_edit', { 'id': pay.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('pays_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
