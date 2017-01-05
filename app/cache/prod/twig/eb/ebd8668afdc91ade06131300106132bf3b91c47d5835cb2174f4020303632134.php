<?php

/* POPCoreBundle::layout.html.twig */
class __TwigTemplate_496c0deb752054617eadd8c52a7661713ce3e17a7ce9f6ff176289ca27981c9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
    <title>Smobilpay</title>
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"container\">
    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">
                <img alt=\"Brand\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\">
            </a>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\" class=\"btn btn-default\">Sign in</a></li>
            </ul>
        </div>
    </nav>
    <br>
    <br>

    ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "
    <br>
    <br>
    <footer class=\"row\">
        <div class=\"panel panel-body\">
        <span>
          <strong>Copyright Smobilpay 2016</strong>
        </span>

        <span class=\"pull-right\">
          Suivez nous sur Facebook
        </span>
        </div>
    </footer>
</div>
<script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jQuery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"/>
<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"/>
</body>
</html>";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "POPCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  75 => 39,  71 => 38,  54 => 23,  52 => 22,  39 => 12,  29 => 5,  25 => 4,  20 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <title>Smobilpay</title>*/
/*     <link href="{{ asset("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet"/>*/
/*     <link href="{{ asset("bootstrap/css/bootstrap-theme.min.css") }}" rel="stylesheet"/>*/
/* </head>*/
/* <body>*/
/* <div class="container">*/
/*     <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*             <a class="navbar-brand" href="#">*/
/*                 <img alt="Brand" src="{{ asset("img/logo.png") }}">*/
/*             </a>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="#" class="btn btn-default">Sign in</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/*     <br>*/
/*     <br>*/
/* */
/*     {% block body %}{% endblock %}*/
/* */
/*     <br>*/
/*     <br>*/
/*     <footer class="row">*/
/*         <div class="panel panel-body">*/
/*         <span>*/
/*           <strong>Copyright Smobilpay 2016</strong>*/
/*         </span>*/
/* */
/*         <span class="pull-right">*/
/*           Suivez nous sur Facebook*/
/*         </span>*/
/*         </div>*/
/*     </footer>*/
/* </div>*/
/* <script src="{{ asset("bootstrap/js/jQuery.js") }}" type="text/javascript"/>*/
/* <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}" type="text/javascript"/>*/
/* </body>*/
/* </html>*/
