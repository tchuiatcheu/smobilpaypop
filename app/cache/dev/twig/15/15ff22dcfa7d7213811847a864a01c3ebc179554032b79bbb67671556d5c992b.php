<?php

/* @POPCore/layout.html.twig */
class __TwigTemplate_aaca00db3778941c3993e1c26b011f63519081de041c6c0e47ef41f761833cac extends Twig_Template
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
        $__internal_e0fbb998e7df01628f34cb24b1d61169757049af746bfeb8c0a7b7c7d99b7352 = $this->env->getExtension("native_profiler");
        $__internal_e0fbb998e7df01628f34cb24b1d61169757049af746bfeb8c0a7b7c7d99b7352->enter($__internal_e0fbb998e7df01628f34cb24b1d61169757049af746bfeb8c0a7b7c7d99b7352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@POPCore/layout.html.twig"));

        // line 1
        echo "<html>
<head>
    <title>SmobilpayPOP</title>
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/metro.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/metro-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/metro-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/metro-schemes.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/docs.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"container page-content\">
    <div class=\"app-bar drop-up\">
\t <ul class=\"m-menu\" >
    <li><a href=\"#\">Home</a></li>
    <li>
        <a href=\"#\" class=\"dropdown-toggle\">Overview</a>
        <div class=\"m-menu-container\" data-role=\"dropdown\" data-no-close=\"true\">
            <div class=\"grid no-margin\">
                <div class=\"row cells5\">
                    <div class=\"cell padding10\">
                        <img src=\"images/me.jpg\">
                    </div>
                    <div class=\"cell colspan2\">
                        <h2 class=\"fg-white text-bold text-shadow\">Metro UI CSS 3.0</h2>
                        <p class=\"padding20 no-padding-top no-padding-left no-padding-bottom fg-white\">
                            Metro UI CSS a set of styles to create a site with an interface similar to Windows 8.
                        </p>
                        <p class=\"fg-white text-bold\">
                            Sergey Pimenov
                        </p>
                    </div>
                    <div class=\"cell colspan2\">
                        <ul class=\"unstyled-list\">
                            <li><h3 class=\"text-shadow\">Begin with Metro UI CSS</h3></li>
                            <li><a class=\"fg-white\" href=\"#\">Requirements</a></li>
                            <li><a class=\"fg-white\" href=\"#\">Doctype</a></li>
                            <li><a class=\"fg-white\" href=\"#\">JavaScript</a></li>
                            <li><a class=\"fg-white\" href=\"#\">Browsers support</a></li>
                            <li><a class=\"fg-white\" href=\"#\">License</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li>
        <a href=\"#\" class=\"dropdown-toggle\">Download</a>
        <div class=\"m-menu-container\" data-role=\"dropdown\" data-no-close=\"true\">
            <ul class=\"inline-list\">
                <li><a href=\"#\">Windows</a></li>
                <li><a href=\"#\">Office</a></li>
                <li><a href=\"#\">Skype</a></li>
                <li><a href=\"#\">Internet Explorer</a></li>
                <li><a href=\"#\">Visio</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a href=\"#\" class=\"dropdown-toggle\">Devices</a>
        <div class=\"m-menu-container\" data-role=\"dropdown\">
            <ul class=\"inline-list\">
                <li><a href=\"#\">Surface</a></li>
                <li><a href=\"#\">Xbox</a></li>
                <li><a href=\"#\">PC & Tables</a></li>
                <li><a href=\"#\">Phones</a></li>
                <li><a href=\"#\">Accessories</a></li>
            </ul>
        </div>
    </li>
    <li><a href=\"#\">Support</a></li>
    <li><a href=\"#\">Store</a></li>
    </ul>
   </div>
    <br>
    <br>

    ";
        // line 77
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "
    <br>
    <br>
    <footer style=\"background-color: #EFEAE3\">
   
        <div class=\"align-center padding20 text-small\">
            Copyright 2016-2017 <a href=\"http://www.smobilpay.cm\">Smobilpay Cameroun</a>
        </div>
    </div>
</footer>
</div>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"/>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/metro.js"), "html", null, true);
        echo "\" type=\"text/javascript\"/>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/docs.js"), "html", null, true);
        echo "\" type=\"text/javascript\"/>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/ga.js"), "html", null, true);
        echo "\" type=\"text/javascript\"/>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/prettify/run_prettify.js"), "html", null, true);
        echo "\" type=\"text/javascript\"/>
</body>
</html>";
        
        $__internal_e0fbb998e7df01628f34cb24b1d61169757049af746bfeb8c0a7b7c7d99b7352->leave($__internal_e0fbb998e7df01628f34cb24b1d61169757049af746bfeb8c0a7b7c7d99b7352_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd75cf25a990c6359575459f09f43e267cebb6e26a71d29bb365bde4749b4ab5 = $this->env->getExtension("native_profiler");
        $__internal_cd75cf25a990c6359575459f09f43e267cebb6e26a71d29bb365bde4749b4ab5->enter($__internal_cd75cf25a990c6359575459f09f43e267cebb6e26a71d29bb365bde4749b4ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd75cf25a990c6359575459f09f43e267cebb6e26a71d29bb365bde4749b4ab5->leave($__internal_cd75cf25a990c6359575459f09f43e267cebb6e26a71d29bb365bde4749b4ab5_prof);

    }

    public function getTemplateName()
    {
        return "@POPCore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 77,  147 => 93,  143 => 92,  139 => 91,  135 => 90,  131 => 89,  118 => 78,  116 => 77,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  28 => 4,  23 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <title>SmobilpayPOP</title>*/
/*     <link href="{{ asset("bootstrap/css/metro.css") }}" rel="stylesheet"/>*/
/*     <link href="{{ asset("bootstrap/css/metro-icons.css") }}" rel="stylesheet"/>*/
/* 	<link href="{{ asset("bootstrap/css/metro-responsive.css") }}" rel="stylesheet"/>*/
/* 	<link href="{{ asset("bootstrap/css/metro-schemes.css") }}" rel="stylesheet"/>*/
/* 	<link href="{{ asset("bootstrap/css/docs.css") }}" rel="stylesheet"/>*/
/* </head>*/
/* <body>*/
/* <div class="container page-content">*/
/*     <div class="app-bar drop-up">*/
/* 	 <ul class="m-menu" >*/
/*     <li><a href="#">Home</a></li>*/
/*     <li>*/
/*         <a href="#" class="dropdown-toggle">Overview</a>*/
/*         <div class="m-menu-container" data-role="dropdown" data-no-close="true">*/
/*             <div class="grid no-margin">*/
/*                 <div class="row cells5">*/
/*                     <div class="cell padding10">*/
/*                         <img src="images/me.jpg">*/
/*                     </div>*/
/*                     <div class="cell colspan2">*/
/*                         <h2 class="fg-white text-bold text-shadow">Metro UI CSS 3.0</h2>*/
/*                         <p class="padding20 no-padding-top no-padding-left no-padding-bottom fg-white">*/
/*                             Metro UI CSS a set of styles to create a site with an interface similar to Windows 8.*/
/*                         </p>*/
/*                         <p class="fg-white text-bold">*/
/*                             Sergey Pimenov*/
/*                         </p>*/
/*                     </div>*/
/*                     <div class="cell colspan2">*/
/*                         <ul class="unstyled-list">*/
/*                             <li><h3 class="text-shadow">Begin with Metro UI CSS</h3></li>*/
/*                             <li><a class="fg-white" href="#">Requirements</a></li>*/
/*                             <li><a class="fg-white" href="#">Doctype</a></li>*/
/*                             <li><a class="fg-white" href="#">JavaScript</a></li>*/
/*                             <li><a class="fg-white" href="#">Browsers support</a></li>*/
/*                             <li><a class="fg-white" href="#">License</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </li>*/
/*     <li>*/
/*         <a href="#" class="dropdown-toggle">Download</a>*/
/*         <div class="m-menu-container" data-role="dropdown" data-no-close="true">*/
/*             <ul class="inline-list">*/
/*                 <li><a href="#">Windows</a></li>*/
/*                 <li><a href="#">Office</a></li>*/
/*                 <li><a href="#">Skype</a></li>*/
/*                 <li><a href="#">Internet Explorer</a></li>*/
/*                 <li><a href="#">Visio</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </li>*/
/*     <li>*/
/*         <a href="#" class="dropdown-toggle">Devices</a>*/
/*         <div class="m-menu-container" data-role="dropdown">*/
/*             <ul class="inline-list">*/
/*                 <li><a href="#">Surface</a></li>*/
/*                 <li><a href="#">Xbox</a></li>*/
/*                 <li><a href="#">PC & Tables</a></li>*/
/*                 <li><a href="#">Phones</a></li>*/
/*                 <li><a href="#">Accessories</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </li>*/
/*     <li><a href="#">Support</a></li>*/
/*     <li><a href="#">Store</a></li>*/
/*     </ul>*/
/*    </div>*/
/*     <br>*/
/*     <br>*/
/* */
/*     {% block body %}{% endblock %}*/
/* */
/*     <br>*/
/*     <br>*/
/*     <footer style="background-color: #EFEAE3">*/
/*    */
/*         <div class="align-center padding20 text-small">*/
/*             Copyright 2016-2017 <a href="http://www.smobilpay.cm">Smobilpay Cameroun</a>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* </div>*/
/* <script src="{{ asset("bootstrap/js/jquery-2.1.3.min.js") }}" type="text/javascript"/>*/
/* <script src="{{ asset("bootstrap/js/metro.js") }}" type="text/javascript"/>*/
/* <script src="{{ asset("bootstrap/js/docs.js") }}" type="text/javascript"/>*/
/* <script src="{{ asset("bootstrap/js/ga.js") }}" type="text/javascript"/>*/
/* <script src="{{ asset("bootstrap/js/prettify/run_prettify.js") }}" type="text/javascript"/>*/
/* </body>*/
/* </html>*/
