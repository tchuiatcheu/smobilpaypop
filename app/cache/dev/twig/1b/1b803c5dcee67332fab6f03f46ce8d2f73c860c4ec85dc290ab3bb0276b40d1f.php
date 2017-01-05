<?php

/* @POPAdmin/Agence/index.html.twig */
class __TwigTemplate_b06ed4802f3baca2cbaaca32ce3be57858f4aeb518cdd01c38b9e8c099605cca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Agence/index.html.twig", 1);
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
        $__internal_5b3036a784b8aaf9656fbcb9a69f50625f01beead106f08f3711aac2773d10a9 = $this->env->getExtension("native_profiler");
        $__internal_5b3036a784b8aaf9656fbcb9a69f50625f01beead106f08f3711aac2773d10a9->enter($__internal_5b3036a784b8aaf9656fbcb9a69f50625f01beead106f08f3711aac2773d10a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Agence/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b3036a784b8aaf9656fbcb9a69f50625f01beead106f08f3711aac2773d10a9->leave($__internal_5b3036a784b8aaf9656fbcb9a69f50625f01beead106f08f3711aac2773d10a9_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_519eef92365ba5284fdde3b53d9e3ff678580edaa9764de66368f4fc964d33ad = $this->env->getExtension("native_profiler");
        $__internal_519eef92365ba5284fdde3b53d9e3ff678580edaa9764de66368f4fc964d33ad->enter($__internal_519eef92365ba5284fdde3b53d9e3ff678580edaa9764de66368f4fc964d33ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_519eef92365ba5284fdde3b53d9e3ff678580edaa9764de66368f4fc964d33ad->leave($__internal_519eef92365ba5284fdde3b53d9e3ff678580edaa9764de66368f4fc964d33ad_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Agence/index.html.twig";
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
