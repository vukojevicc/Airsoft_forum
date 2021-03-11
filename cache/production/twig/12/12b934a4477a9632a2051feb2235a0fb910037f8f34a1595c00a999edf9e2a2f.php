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

/* @postimage_imageupload/event/posting_editor_options_prepend.html */
class __TwigTemplate_745d18122eddd585882b58d9fba3f46c791967914d81c99599be0038bfcf3c1f extends \Twig\Template
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
        echo "<script type=\"text/javascript\" src=\"//mod.postimage.org/phpbb3.js\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "@postimage_imageupload/event/posting_editor_options_prepend.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@postimage_imageupload/event/posting_editor_options_prepend.html", "");
    }
}
