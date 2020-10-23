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

/* form/templates/blocks/date.hbs */
class __TwigTemplate_e0ad48233013f699f7d22ab38349563cc9ffd6c9ba3c78d08e8077bbc78932a3 extends \MailPoetVendor\Twig\Template
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
        echo "{{#if params.label}}
  <p>
    <label>{{ params.label }}{{#if params.required}} *{{/if}}</label>
  </p>
{{/if}}
{{#ifCond params.date_type \"==\" \"year_month_day\"}}
  {{#unless params.date_format}}
    {{> _settings_date_months }}
    {{> _settings_date_days }}
    {{> _settings_date_years }}
  {{/unless}}
  {{#ifCond params.date_format \"==\" \"MM/DD/YYYY\"}}
    {{> _settings_date_months }}
    {{> _settings_date_days }}
    {{> _settings_date_years }}
  {{/ifCond}}
  {{#ifCond params.date_format \"==\" \"DD/MM/YYYY\"}}
    {{> _settings_date_days }}
    {{> _settings_date_months }}
    {{> _settings_date_years }}
  {{/ifCond}}
  {{#ifCond params.date_format \"==\" \"YYYY/MM/DD\"}}
    {{> _settings_date_years }}
    {{> _settings_date_months }}
    {{> _settings_date_days }}
  {{/ifCond}}
{{/ifCond}}

{{#ifCond params.date_type \"==\" \"year_month\"}}
  {{#unless params.date_format}}
    {{> _settings_date_months }}
    {{> _settings_date_years }}
  {{/unless}}
  {{#ifCond params.date_format \"==\" \"MM/YYYY\"}}
    {{> _settings_date_months }}
    {{> _settings_date_years }}
  {{/ifCond}}
  {{#ifCond params.date_format \"==\" \"YYYY/MM\"}}
    {{> _settings_date_years }}
    {{> _settings_date_months }}
  {{/ifCond}}
{{/ifCond}}

{{#ifCond params.date_type \"==\" \"year\"}}
  {{> _settings_date_years }}
{{/ifCond}}

{{#ifCond params.date_type \"==\" \"month\"}}
  {{> _settings_date_months }}
{{/ifCond}}";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/date.hbs";
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
        return new Source("", "form/templates/blocks/date.hbs", "/home1/datane09/public_html/wp-content/plugins/mailpoet/views/form/templates/blocks/date.hbs");
    }
}
