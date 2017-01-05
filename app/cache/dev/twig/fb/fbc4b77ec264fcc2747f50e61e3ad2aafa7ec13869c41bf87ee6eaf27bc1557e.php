<?php

/* POPAdminBundle:Agence:show.html.twig */
class __TwigTemplate_1a8a964bc83775226bbfe458c3bcd061659e38f36e83fef203cf3363529b7206 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("POPAdminBundle::layout.html.twig", "POPAdminBundle:Agence:show.html.twig", 1);
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
        $__internal_bb6f6fde8b91b0000e4d5140424a04619408e6ae7a7c7aaad8738a1434e2190b = $this->env->getExtension("native_profiler");
        $__internal_bb6f6fde8b91b0000e4d5140424a04619408e6ae7a7c7aaad8738a1434e2190b->enter($__internal_bb6f6fde8b91b0000e4d5140424a04619408e6ae7a7c7aaad8738a1434e2190b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "POPAdminBundle:Agence:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb6f6fde8b91b0000e4d5140424a04619408e6ae7a7c7aaad8738a1434e2190b->leave($__internal_bb6f6fde8b91b0000e4d5140424a04619408e6ae7a7c7aaad8738a1434e2190b_prof);

    }

    // line 3
    public function block_admin_body($context, array $blocks = array())
    {
        $__internal_ed35da39644d557ff0194a169b405ba9b7e7f7151cb43c6242741822dda01279 = $this->env->getExtension("native_profiler");
        $__internal_ed35da39644d557ff0194a169b405ba9b7e7f7151cb43c6242741822dda01279->enter($__internal_ed35da39644d557ff0194a169b405ba9b7e7f7151cb43c6242741822dda01279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_body"));

        // line 4
        echo "    <h1>Agence</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Logo</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "logo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "tel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Longitude</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "longitude", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Latitude</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "latitude", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("agence_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agence_edit", array("id" => $this->getAttribute((isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ed35da39644d557ff0194a169b405ba9b7e7f7151cb43c6242741822dda01279->leave($__internal_ed35da39644d557ff0194a169b405ba9b7e7f7151cb43c6242741822dda01279_prof);

    }

    public function getTemplateName()
    {
        return "POPAdminBundle:Agence:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  112 => 47,  106 => 44,  100 => 41,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'POPAdminBundle::layout.html.twig' %}*/
/* */
/* {% block admin_body %}*/
/*     <h1>Agence</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ agence.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ agence.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Logo</th>*/
/*                 <td>{{ agence.logo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tel</th>*/
/*                 <td>{{ agence.tel }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ agence.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Longitude</th>*/
/*                 <td>{{ agence.longitude }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Latitude</th>*/
/*                 <td>{{ agence.latitude }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('agence_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('agence_edit', { 'id': agence.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
