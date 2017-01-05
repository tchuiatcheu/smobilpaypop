<?php

/* POPAdminBundle:Quartier:index.html.twig */
class __TwigTemplate_35ac0e9aac5c4d61eb4cd284a940643c4ce5805db3daa362b15a31221a331733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Quartier:index.html.twig", 1);
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
        $__internal_fbf4fa6b56cf27617193660d46015550f4dc8dc6f47c7692e3ea4dde5485b03f = $this->env->getExtension("native_profiler");
        $__internal_fbf4fa6b56cf27617193660d46015550f4dc8dc6f47c7692e3ea4dde5485b03f->enter($__internal_fbf4fa6b56cf27617193660d46015550f4dc8dc6f47c7692e3ea4dde5485b03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Quartier:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf4fa6b56cf27617193660d46015550f4dc8dc6f47c7692e3ea4dde5485b03f->leave($__internal_fbf4fa6b56cf27617193660d46015550f4dc8dc6f47c7692e3ea4dde5485b03f_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_9d2a9f56ae974672b4c304120990039f04eaf291878f2b40d439fe255788a3b7 = $this->env->getExtension("native_profiler");
        $__internal_9d2a9f56ae974672b4c304120990039f04eaf291878f2b40d439fe255788a3b7->enter($__internal_9d2a9f56ae974672b4c304120990039f04eaf291878f2b40d439fe255788a3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Quartier list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["quartiers"]) ? $context["quartiers"] : $this->getContext($context, "quartiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["quartier"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quartier_show", array("id" => $this->getAttribute($context["quartier"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quartier"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["quartier"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["quartier"], "actif", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["quartier"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quartier"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quartier_show", array("id" => $this->getAttribute($context["quartier"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quartier_edit", array("id" => $this->getAttribute($context["quartier"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quartier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("quartier_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_9d2a9f56ae974672b4c304120990039f04eaf291878f2b40d439fe255788a3b7->leave($__internal_9d2a9f56ae974672b4c304120990039f04eaf291878f2b40d439fe255788a3b7_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Quartier:index.html.twig";
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
/*     <h1>Quartier list</h1>*/
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
/*         {% for quartier in quartiers %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('quartier_show', { 'id': quartier.id }) }}">{{ quartier.id }}</a></td>*/
/*                 <td>{{ quartier.nom }}</td>*/
/*                 <td>{% if quartier.actif %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if quartier.dateCreation %}{{ quartier.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('quartier_show', { 'id': quartier.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('quartier_edit', { 'id': quartier.id }) }}">edit</a>*/
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
/*             <a href="{{ path('quartier_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
