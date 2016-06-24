<?php

/* POPAdminBundle:Region:show.html.twig */
class __TwigTemplate_6c3a2f2da6abad83383241c3516213bd5babde9b6292855c140809860b4602ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Region:show.html.twig", 1);
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
        $__internal_6191ea48689ab4c8ca7bcab1824cde003b6ae9c6e2dc5694fdad2ef18c40e91c = $this->env->getExtension("native_profiler");
        $__internal_6191ea48689ab4c8ca7bcab1824cde003b6ae9c6e2dc5694fdad2ef18c40e91c->enter($__internal_6191ea48689ab4c8ca7bcab1824cde003b6ae9c6e2dc5694fdad2ef18c40e91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Region:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6191ea48689ab4c8ca7bcab1824cde003b6ae9c6e2dc5694fdad2ef18c40e91c->leave($__internal_6191ea48689ab4c8ca7bcab1824cde003b6ae9c6e2dc5694fdad2ef18c40e91c_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_da07229faf33127e19a38729e711d636da5685d93301db2a2e09412afdc69135 = $this->env->getExtension("native_profiler");
        $__internal_da07229faf33127e19a38729e711d636da5685d93301db2a2e09412afdc69135->enter($__internal_da07229faf33127e19a38729e711d636da5685d93301db2a2e09412afdc69135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Region</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Actif</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "actif", array())) {
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
        if ($this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "dateCreation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("region_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("region_edit", array("id" => $this->getAttribute((isset($context["region"]) ? $context["region"] : $this->getContext($context, "region")), "id", array()))), "html", null, true);
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
        
        $__internal_da07229faf33127e19a38729e711d636da5685d93301db2a2e09412afdc69135->leave($__internal_da07229faf33127e19a38729e711d636da5685d93301db2a2e09412afdc69135_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Region:show.html.twig";
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
/*     <h1>Region</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ region.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ region.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Actif</th>*/
/*                 <td>{% if region.actif %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datecreation</th>*/
/*                 <td>{% if region.dateCreation %}{{ region.dateCreation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('region_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('region_edit', { 'id': region.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
