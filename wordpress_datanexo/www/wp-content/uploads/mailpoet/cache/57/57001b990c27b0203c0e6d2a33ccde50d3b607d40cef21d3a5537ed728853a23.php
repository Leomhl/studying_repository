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

/* newsletter/templates/blocks/spacer/block.hbs */
class __TwigTemplate_42d393f862df49109e0c8b49b846883195d78b2ea663be452f0985923690a1a3 extends \MailPoetVendor\Twig\Template
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
        echo "<div class=\"mailpoet_tools\"></div>
<div class=\"mailpoet_content\">
    <div class=\"mailpoet_spacer\" style=\"height: {{ model.styles.block.height }}; background-color: {{ model.styles.block.backgroundColor }};\">
        <div class=\"mailpoet_resize_handle_container\">
            <div class=\"mailpoet_resize_handle\">
                <span class=\"mailpoet_resize_handle_text\">{{ model.styles.block.height }}</span>
                <span class=\"mailpoet_resize_handle_icon\">";
        // line 7
        echo \MailPoetVendor\twig_source($this->env, "newsletter/templates/svg/block-icons/spacer.svg");
        echo "</span>
            </div>
        </div>
    </div>
</div>
<div class=\"mailpoet_block_highlight\"></div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/spacer/block.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/spacer/block.hbs", "/home1/datane09/public_html/wp-content/plugins/mailpoet/views/newsletter/templates/blocks/spacer/block.hbs");
    }
}
