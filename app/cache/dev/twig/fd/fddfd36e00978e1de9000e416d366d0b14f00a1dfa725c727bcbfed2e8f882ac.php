<?php

/* POPAdminBundle:Ville:show.html.twig */
class __TwigTemplate_b72dc3a100d5cf58bbfad2e895fcfd3e5278fde0e0cdb3abc527c544ea895571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Ville:show.html.twig", 1);
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
        $__internal_0162956d103b7601807bff35ffa9599c2c29357691ae842a96f8390088ebc29c = $this->env->getExtension("native_profiler");
        $__internal_0162956d103b7601807bff35ffa9599c2c29357691ae842a96f8390088ebc29c->enter($__internal_0162956d103b7601807bff35ffa9599c2c29357691ae842a96f8390088ebc29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Ville:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0162956d103b7601807bff35ffa9599c2c29357691ae842a96f8390088ebc29c->leave($__internal_0162956d103b7601807bff35ffa9599c2c29357691ae842a96f8390088ebc29c_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_2252b31fcb3fe6569f60c96b8951206d9e485a3c98d6b84ad273c33ad70830da = $this->env->getExtension("native_profiler");
        $__internal_2252b31fcb3fe6569f60c96b8951206d9e485a3c98d6b84ad273c33ad70830da->enter($__internal_2252b31fcb3fe6569f60c96b8951206d9e485a3c98d6b84ad273c33ad70830da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_2252b31fcb3fe6569f60c96b8951206d9e485a3c98d6b84ad273c33ad70830da->leave($__internal_2252b31fcb3fe6569f60c96b8951206d9e485a3c98d6b84ad273c33ad70830da_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Ville:show.html.twig";
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
