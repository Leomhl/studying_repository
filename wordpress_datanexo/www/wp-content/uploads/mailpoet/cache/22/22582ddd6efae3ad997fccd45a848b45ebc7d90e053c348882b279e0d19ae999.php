<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/components/styles.hbs */
class __TwigTemplate_73052091d89660efda7befec273926e3d26982739ab26a674392ee1ba9d325ff extends \MailPoetVendor\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<style type=\"text/css\">
    .mailpoet_text_block .mailpoet_content,
    .mailpoet_text_block .mailpoet_content p {
        color: {{ text.fontColor }};
        font-size: {{ text.fontSize }};
        font-family: {{fontWithFallback text.fontFamily }};
        line-height: {{ text.lineHeight }};
    }
    .mailpoet_text_block .mailpoet_content h1 {
        color: {{ h1.fontColor }};
        font-size: {{ h1.fontSize }};
        font-family: {{fontWithFallback h1.fontFamily }};
        line-height: {{ h1.lineHeight }};
    }
    .mailpoet_text_block .mailpoet_content h2 {
        color: {{ h2.fontColor }};
        font-size: {{ h2.fontSize }};
        font-family: {{fontWithFallback h2.fontFamily }};
        line-height: {{ h2.lineHeight }};
    }
    .mailpoet_text_block .mailpoet_content h3 {
        color: {{ h3.fontColor }};
        font-size: {{ h3.fontSize }};
        font-family: {{fontWithFallback h3.fontFamily }};
        line-height: {{ h3.lineHeight }};
    }
    .mailpoet_content a {
        color: {{ link.fontColor }};
        text-decoration: {{ link.textDecoration }};
    }
    .mailpoet_container_block, .mailpoet_container {
        background-color: {{ wrapper.backgroundColor }};
    }
    #mailpoet_editor_main_wrapper {
        background-color: {{ body.backgroundColor }};
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/styles.hbs";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/components/styles.hbs", "/home1/datane09/public_html/wp-content/plugins/mailpoet/views/newsletter/templates/components/styles.hbs");
    }
}
