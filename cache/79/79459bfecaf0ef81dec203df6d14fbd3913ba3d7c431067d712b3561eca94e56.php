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

/* auth/register.php */
class __TwigTemplate_b47863f91b65994253b208f72b24c72ea519b43df349d4191dc50c3fab10e243 extends Template
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
        echo "<?php include __DIR__ . '/../layouts/header.php'; ?>

    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">

                <h3>Registration</h3>

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
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Repeat password</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                </form>

            </div>
        </div>
    </div>


<?php include __DIR__ . '/../layouts/footer.php'; ?>";
    }

    public function getTemplateName()
    {
        return "auth/register.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth/register.php", "/opt/lampp/htdocs/simon-lib.loc/templates/auth/register.php");
    }
}
