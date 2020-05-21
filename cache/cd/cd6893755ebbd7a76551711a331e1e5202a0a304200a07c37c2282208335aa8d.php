<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* 404.html */
class __TwigTemplate_fc981cbd497a9f068fc0c4351b4b9a3c4ad25f6b02968b00c42d50883bd784ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

\t<title>404 HTML Template by Colorlib</title>

\t<!-- Google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Montserrat:200,400,700\" rel=\"stylesheet\">

\t<!-- Custom stlylesheet -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"css/style.css\" />

\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t\t  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->

</head>

<body>

\t<div id=\"notfound\">
\t\t<div class=\"notfound\">
\t\t\t<div class=\"notfound-404\">
\t\t\t\t<h1>Oops!</h1>
\t\t\t\t<h2>404 - The Page can't be found</h2>
\t\t\t</div>
\t\t\t<a href=\"#\">Go TO Homepage</a>
\t\t</div>
\t</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
";
    }

    public function getTemplateName()
    {
        return "404.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "404.html", "/opt/lampp/htdocs/simon-lib.loc/templates/404.html");
    }
}
