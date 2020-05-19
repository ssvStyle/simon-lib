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

/* 404.html.twig */
class __TwigTemplate_3282eefa821e7b0c4095c85928dd68faef5cc46a2f3f4b3a9637cc0c8fa8993f extends Template
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
        echo "<?php include __DIR__ . '/layouts/header.php'; ?>

<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8 text-center\">

            <h1>404 Not Found</h1>

        </div>
    </div>
</div>


<?php include __DIR__ . '/layouts/footer.php'; ?>";
    }

    public function getTemplateName()
    {
        return "404.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "404.html.twig", "/opt/lampp/htdocs/simon-lib.loc/templates/404.html.twig");
    }
}
