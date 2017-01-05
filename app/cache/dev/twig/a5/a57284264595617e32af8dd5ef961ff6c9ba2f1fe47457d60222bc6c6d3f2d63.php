<?php

/* POPAdminBundle:Agence:index.html.twig */
class __TwigTemplate_f3e777bcff9a97cc3ba9ac75754d428b39c8cbd04fe5df23a1b5ccc04612c7e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Agence:index.html.twig", 1);
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
        $__internal_15f635828225a881c813c7649c1ec766e78bf52989beb23a8c3448fbd8ccdabe = $this->env->getExtension("native_profiler");
        $__internal_15f635828225a881c813c7649c1ec766e78bf52989beb23a8c3448fbd8ccdabe->enter($__internal_15f635828225a881c813c7649c1ec766e78bf52989beb23a8c3448fbd8ccdabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Agence:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f635828225a881c813c7649c1ec766e78bf52989beb23a8c3448fbd8ccdabe->leave($__internal_15f635828225a881c813c7649c1ec766e78bf52989beb23a8c3448fbd8ccdabe_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_cfe817439dfb4fdd23eb72d732f347feced0d2a32d2234d7022a95681714cae3 = $this->env->getExtension("native_profiler");
        $__internal_cfe817439dfb4fdd23eb72d732f347feced0d2a32d2234d7022a95681714cae3->enter($__internal_cfe817439dfb4fdd23eb72d732f347feced0d2a32d2234d7022a95681714cae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Agence list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Logo</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agences"]) ? $context["agences"] : $this->getContext($context, "agences")));
        foreach ($context['_seq'] as $context["_key"] => $context["agence"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_show", array("id" => $this->getAttribute($context["agence"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "logo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "longitude", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["agence"], "latitude", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_show", array("id" => $this->getAttribute($context["agence"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_edit", array("id" => $this->getAttribute($context["agence"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("agence_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_cfe817439dfb4fdd23eb72d732f347feced0d2a32d2234d7022a95681714cae3->leave($__internal_cfe817439dfb4fdd23eb72d732f347feced0d2a32d2234d7022a95681714cae3_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Agence:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  116 => 41,  104 => 35,  98 => 32,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*     <h1>Agence list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Logo</th>*/
/*                 <th>Tel</th>*/
/*                 <th>Email</th>*/
/*                 <th>Longitude</th>*/
/*                 <th>Latitude</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for agence in agences %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('agence_show', { 'id': agence.id }) }}">{{ agence.id }}</a></td>*/
/*                 <td>{{ agence.nom }}</td>*/
/*                 <td>{{ agence.logo }}</td>*/
/*                 <td>{{ agence.tel }}</td>*/
/*                 <td>{{ agence.email }}</td>*/
/*                 <td>{{ agence.longitude }}</td>*/
/*                 <td>{{ agence.latitude }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('agence_show', { 'id': agence.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('agence_edit', { 'id': agence.id }) }}">edit</a>*/
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
/*             <a href="{{ path('agence_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
