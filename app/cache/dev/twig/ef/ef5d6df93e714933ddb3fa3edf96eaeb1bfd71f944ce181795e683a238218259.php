<?php

/* @POPAdmin/Pays/show.html.twig */
class __TwigTemplate_94d9c2061c7f97549f72c61a05c86483d93ef130321b6d19add85329f8756370 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "@POPAdmin/Pays/show.html.twig", 1);
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
        $__internal_8b337e7b9fd60f0248a1e2a8ba55b65e72e81a9578068a5324b44364d63ae4d4 = $this->env->getExtension("native_profiler");
        $__internal_8b337e7b9fd60f0248a1e2a8ba55b65e72e81a9578068a5324b44364d63ae4d4->enter($__internal_8b337e7b9fd60f0248a1e2a8ba55b65e72e81a9578068a5324b44364d63ae4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPAdmin/Pays/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b337e7b9fd60f0248a1e2a8ba55b65e72e81a9578068a5324b44364d63ae4d4->leave($__internal_8b337e7b9fd60f0248a1e2a8ba55b65e72e81a9578068a5324b44364d63ae4d4_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_4d609f6e7cc69359c787e9f547fbbf202990e26c5b14a1e34349b770b2395a1f = $this->env->getExtension("native_profiler");
        $__internal_4d609f6e7cc69359c787e9f547fbbf202990e26c5b14a1e34349b770b2395a1f->enter($__internal_4d609f6e7cc69359c787e9f547fbbf202990e26c5b14a1e34349b770b2395a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

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
        
        $__internal_4d609f6e7cc69359c787e9f547fbbf202990e26c5b14a1e34349b770b2395a1f->leave($__internal_4d609f6e7cc69359c787e9f547fbbf202990e26c5b14a1e34349b770b2395a1f_prof);

    }

    public function getTemplateName()
    {
        return "@POPAdmin/Pays/show.html.twig";
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
