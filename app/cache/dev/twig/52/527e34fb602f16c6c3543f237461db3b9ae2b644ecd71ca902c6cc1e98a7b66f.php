<?php

/* @POPAdmin/Ville/index.html.twig */
class __TwigTemplate_4307ce89f28569b42774ebc23b65bdbe5b686be25bef2aa0c8d2a23fd959ca7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Ville/index.html.twig", 1);
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
        $__internal_971a2d160e52b846a9a932f0eb693039a010d1a7ea9e47261a9669b5f5543b7f = $this->env->getExtension("native_profiler");
        $__internal_971a2d160e52b846a9a932f0eb693039a010d1a7ea9e47261a9669b5f5543b7f->enter($__internal_971a2d160e52b846a9a932f0eb693039a010d1a7ea9e47261a9669b5f5543b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Ville/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_971a2d160e52b846a9a932f0eb693039a010d1a7ea9e47261a9669b5f5543b7f->leave($__internal_971a2d160e52b846a9a932f0eb693039a010d1a7ea9e47261a9669b5f5543b7f_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_b1146e6951940f255064c7ce9e0806615f3ea728509269d8e774c3b6cfd78fe2 = $this->env->getExtension("native_profiler");
        $__internal_b1146e6951940f255064c7ce9e0806615f3ea728509269d8e774c3b6cfd78fe2->enter($__internal_b1146e6951940f255064c7ce9e0806615f3ea728509269d8e774c3b6cfd78fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Ville list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["villes"]) ? $context["villes"] : $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ville_show", array("id" => $this->getAttribute($context["ville"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["ville"], "actif", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["ville"], "dateCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ville"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ville_show", array("id" => $this->getAttribute($context["ville"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ville_edit", array("id" => $this->getAttribute($context["ville"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ville_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_b1146e6951940f255064c7ce9e0806615f3ea728509269d8e774c3b6cfd78fe2->leave($__internal_b1146e6951940f255064c7ce9e0806615f3ea728509269d8e774c3b6cfd78fe2_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Ville/index.html.twig";
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
/*     <h1>Ville list</h1>*/
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
/*         {% for ville in villes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('ville_show', { 'id': ville.id }) }}">{{ ville.id }}</a></td>*/
/*                 <td>{{ ville.nom }}</td>*/
/*                 <td>{% if ville.actif %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if ville.dateCreation %}{{ ville.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('ville_show', { 'id': ville.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('ville_edit', { 'id': ville.id }) }}">edit</a>*/
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
/*             <a href="{{ path('ville_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
