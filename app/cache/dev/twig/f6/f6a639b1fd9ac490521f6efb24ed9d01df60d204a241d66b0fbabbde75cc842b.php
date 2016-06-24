<?php

/* POPAdminBundle:Region:index.html.twig */
class __TwigTemplate_797f03aa5efcc7cb06e46b94c1278bc6552d489b6286f3c42733ae2c503c575d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Region:index.html.twig", 1);
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
        $__internal_14b07beaa85d20750914153c1ed522da056c8c3cc97e95bc32cb9b89f4c1f3df = $this->env->getExtension("native_profiler");
        $__internal_14b07beaa85d20750914153c1ed522da056c8c3cc97e95bc32cb9b89f4c1f3df->enter($__internal_14b07beaa85d20750914153c1ed522da056c8c3cc97e95bc32cb9b89f4c1f3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Region:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b07beaa85d20750914153c1ed522da056c8c3cc97e95bc32cb9b89f4c1f3df->leave($__internal_14b07beaa85d20750914153c1ed522da056c8c3cc97e95bc32cb9b89f4c1f3df_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_ba99d5fa7755ce5851bc17c795ba65fc9ddf78b9f24ba031b8d3965db3b5ae37 = $this->env->getExtension("native_profiler");
        $__internal_ba99d5fa7755ce5851bc17c795ba65fc9ddf78b9f24ba031b8d3965db3b5ae37->enter($__internal_ba99d5fa7755ce5851bc17c795ba65fc9ddf78b9f24ba031b8d3965db3b5ae37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Region list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_show", array("id" => $this->getAttribute($context["region"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["region"], "actif", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["region"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["region"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_show", array("id" => $this->getAttribute($context["region"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_edit", array("id" => $this->getAttribute($context["region"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("region_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_ba99d5fa7755ce5851bc17c795ba65fc9ddf78b9f24ba031b8d3965db3b5ae37->leave($__internal_ba99d5fa7755ce5851bc17c795ba65fc9ddf78b9f24ba031b8d3965db3b5ae37_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Region:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  107 => 35,  95 => 29,  89 => 26,  80 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*     <h1>Region list</h1>*/
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
/*         {% for region in regions %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('region_show', { 'id': region.id }) }}">{{ region.id }}</a></td>*/
/*                 <td>{{ region.nom }}</td>*/
/*                 <td>{% if region.actif %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if region.dateCreation %}{{ region.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('region_show', { 'id': region.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('region_edit', { 'id': region.id }) }}">edit</a>*/
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
/*             <a href="{{ path('region_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
