<?php

/* POPAdminBundle:Pays:show.html.twig */
class __TwigTemplate_052a9a34823e3184e90265a4f42779360e8695cfee2f8a60a6287c642a8a0479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Pays:show.html.twig", 1);
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
        $__internal_4aa5f1e79f176c68dbbec752301d804453d1623bea9120649c2c335164e41469 = $this->env->getExtension("native_profiler");
        $__internal_4aa5f1e79f176c68dbbec752301d804453d1623bea9120649c2c335164e41469->enter($__internal_4aa5f1e79f176c68dbbec752301d804453d1623bea9120649c2c335164e41469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Pays:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aa5f1e79f176c68dbbec752301d804453d1623bea9120649c2c335164e41469->leave($__internal_4aa5f1e79f176c68dbbec752301d804453d1623bea9120649c2c335164e41469_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_7f4fcc6d7211fbdcc005b87570f1bcb4e9c97f58e05d0493e35eae9d3d94c2d3 = $this->env->getExtension("native_profiler");
        $__internal_7f4fcc6d7211fbdcc005b87570f1bcb4e9c97f58e05d0493e35eae9d3d94c2d3->enter($__internal_7f4fcc6d7211fbdcc005b87570f1bcb4e9c97f58e05d0493e35eae9d3d94c2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Pays</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pay"]) ? $context["pay"] : $this->getContext($context, "pay")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pay"]) ? $context["pay"] : $this->getContext($context, "pay")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Actif</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["pay"]) ? $context["pay"] : $this->getContext($context, "pay")), "actif", array())) {
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pay"]) ? $context["pay"] : $this->getContext($context, "pay")), "dateCreation", array())), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("pays_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pays_edit", array("id" => $this->getAttribute((isset($context["pay"]) ? $context["pay"] : $this->getContext($context, "pay")), "id", array()))), "html", null, true);
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
        
        $__internal_7f4fcc6d7211fbdcc005b87570f1bcb4e9c97f58e05d0493e35eae9d3d94c2d3->leave($__internal_7f4fcc6d7211fbdcc005b87570f1bcb4e9c97f58e05d0493e35eae9d3d94c2d3_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Pays:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 37,  95 => 35,  89 => 32,  83 => 29,  73 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*     <h1>Pays</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ pay.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ pay.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Actif</th>*/
/*                 <td>{% if pay.actif %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datecreation</th>*/
/*                 <td>{{ pay.dateCreation|date }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('pays_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('pays_edit', { 'id': pay.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
