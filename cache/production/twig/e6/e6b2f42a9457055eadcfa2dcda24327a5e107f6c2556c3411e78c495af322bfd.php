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

/* acp_ext_enable.html */
class __TwigTemplate_a1a9107fcf38f1f7fd66b1480ccba53c367de73c13a4461fd00de888127c0ba7 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_ext_enable.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
\t<a id=\"maincontent\"></a>

\t<h1>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXTENSIONS_ADMIN");
        echo "</h1>

\t<p>";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXTENSIONS_EXPLAIN");
        echo "</p>
\t<p>";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXTENSION_ENABLE_EXPLAIN");
        echo "</p>

\t";
        // line 10
        if (($context["MIGRATOR_ERROR"] ?? null)) {
            // line 11
            echo "\t\t<div class=\"errorbox\">
\t\t\t<p><strong>";
            // line 12
            echo $this->extensions['phpbb\template\twig\extension']->lang("MIGRATION_EXCEPTION_ERROR");
            echo "</strong></p>
\t\t\t<p>";
            // line 13
            echo ($context["MIGRATOR_ERROR"] ?? null);
            echo "</p>
\t\t\t<p><a href=\"";
            // line 14
            echo ($context["U_RETURN"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_EXTENSION_LIST");
            echo "</a></p>
\t\t</div>
\t";
        } elseif (        // line 16
($context["S_PRE_STEP"] ?? null)) {
            // line 17
            echo "\t\t<fieldset>
\t\t\t<h2>";
            // line 18
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIRM");
            echo "</h2>
\t\t\t<p>";
            // line 19
            echo ($context["CONFIRM_MESSAGE"] ?? null);
            echo "</p>
\t\t</fieldset>

\t\t<form id=\"acp_extensions\" method=\"post\" action=\"";
            // line 22
            echo ($context["U_ENABLE"] ?? null);
            echo "\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"enable\" value=\"";
            // line 24
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXTENSION_ENABLE");
            echo "\">
\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"cancel\" value=\"";
            // line 25
            echo $this->extensions['phpbb\template\twig\extension']->lang("CANCEL");
            echo "\">
\t\t\t</fieldset>
\t\t</form>
\t";
        } elseif (        // line 28
($context["S_NEXT_STEP"] ?? null)) {
            // line 29
            echo "\t\t<div class=\"successbox notice\">
\t\t\t<p>";
            // line 30
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXTENSION_ENABLE_IN_PROGRESS");
            echo "</p>
\t\t</div>
\t";
        } else {
            // line 33
            echo "\t\t<div class=\"successbox\">
\t\t\t<p>";
            // line 34
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXTENSION_ENABLE_SUCCESS");
            echo "</p>
\t\t\t<br>
\t\t\t<p><a href=\"";
            // line 36
            echo ($context["U_RETURN"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RETURN_TO_EXTENSION_LIST");
            echo "</a></p>
\t\t</div>
\t";
        }
        // line 39
        echo "
";
        // line 40
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ext_enable.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ext_enable.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 40,  145 => 39,  137 => 36,  132 => 34,  129 => 33,  123 => 30,  120 => 29,  118 => 28,  112 => 25,  108 => 24,  103 => 22,  97 => 19,  93 => 18,  90 => 17,  88 => 16,  81 => 14,  77 => 13,  73 => 12,  70 => 11,  68 => 10,  63 => 8,  59 => 7,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_ext_enable.html", "");
    }
}
