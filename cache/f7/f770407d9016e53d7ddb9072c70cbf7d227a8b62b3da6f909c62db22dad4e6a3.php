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

/* auth/login.html.twig */
class __TwigTemplate_228219c2bbf97cff7a8b676e90efec6776431cc6aefeff0978795815f0f5dc48 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layouts/base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/base.html", "auth/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Главная";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 7
        $this->displayParentBlock("head", $context, $blocks);
        echo "

";
    }

    // line 11
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
<div class=\"container\">
    <div class=\"row justify-content-center\">

        <div class=\"col-md-6\">
            <h3>Sign in</h3>
            <form>
                <div class=\"form-group\">
                    <label for=\"exampleInputEmail1\">Email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
                    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
                </div>
                <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                </div>
                <div class=\"form-check pb-2\">
                    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
                    <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            </form>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  69 => 11,  62 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth/login.html.twig", "/opt/lampp/htdocs/simon-lib.loc/templates/auth/login.html.twig");
    }
}
