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

/* layouts/base.html */
class __TwigTemplate_9ed3b5d996e0596f9951ef3557b60012139b4136e5260b91445c5f4f4fbbdce4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 23
        echo "</head>
<body>

<nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
    <a class=\"navbar-brand\" href=\"home\">Simon-lib</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"home\">Home <span class=\"sr-only\">(current)</span></a>
            </li>
        </ul>
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"login\">Войти</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"register\">Регистрация</a>
            </li>
        </ul>
    </div>
</nav>

<div style=\"height: 55px;\">
</div>


<div id=\"content\">";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        echo "</div>

<div id=\"footer\">
    ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo "</div>
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <!-- Кодировка веб-страницы -->
    <meta charset=\"utf-8\">
    <!-- Настройка viewport -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <base href=\"http://<?= \$_SERVER['HTTP_HOST'] . \$_SERVER['REQUEST_URI'] ?>\">

    <link rel=\"shortcut icon\" href=\"/images/favicon.ico\" type=\"image/x-icon\">

    <!-- Подключаем Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"public/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
    <!-- Подключаем Bootstrap JS -->
    <script src=\"public/js/bootstrap.min.js\"></script>

    <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 56
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layouts/base.html";
    }

    public function getDebugInfo()
    {
        return array (  138 => 57,  134 => 56,  128 => 53,  116 => 20,  99 => 5,  95 => 4,  88 => 59,  86 => 56,  80 => 53,  48 => 23,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layouts/base.html", "/opt/lampp/htdocs/simon-lib.loc/templates/layouts/base.html");
    }
}
