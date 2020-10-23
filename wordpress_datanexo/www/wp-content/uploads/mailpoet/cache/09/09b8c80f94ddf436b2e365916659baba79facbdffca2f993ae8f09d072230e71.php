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

/* settings/advanced.html */
class __TwigTemplate_095e78d6cd63a01152e7d3e28243270c2a7c6946512c0a2991fbff621c467e5a extends \MailPoetVendor\Twig\Template
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
        echo "<table class=\"form-table\">
  <tbody>
    <!-- bounce email -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[bounce_email]\">
          ";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Bounce email address");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 10
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your bounced emails will be sent to this address.");
        echo "
          <a href=\"http://beta.docs.mailpoet.com/article/180-how-bounce-management-works-in-mailpoet-3\"
             target=\"_blank\" 
          >";
        // line 13
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.", "support article link label");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <input type=\"text\"
            id=\"settings[bounce_email]\"
            name=\"bounce[address]\"
            data-automation-id=\"bounce-address-field\"
            value=\"";
        // line 22
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "bounce", []), "address", []), "html", null, true);
        echo "\"
            placeholder=\"bounce@mydomain.com\"
          />
        </p>
      </td>
    </tr>
    <!-- task scheduler -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 32
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter task scheduler (cron)");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 35
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select what will activate your newsletter queue.");
        echo "
          <a href=\"http://docs.mailpoet.com/article/129-what-is-the-newsletter-task-scheduler\"
             target=\"_blank\"
          >";
        // line 38
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.", "support article link label");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"cron_trigger[method]\"
              value=\"";
        // line 47
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute(($context["cron_trigger"] ?? null), "wordpress", []), "html", null, true);
        echo "\"
              data-automation-id=\"wordress_cron_radio\"
              ";
        // line 49
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "cron_trigger", []), "method", []) == $this->getAttribute(($context["cron_trigger"] ?? null), "wordpress", []))) {
            // line 50
            echo "              checked=\"checked\"
              ";
        }
        // line 52
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Visitors to your website (recommended)");
        echo "
          </label>
        </p>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"cron_trigger[method]\"
              value=\"";
        // line 60
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute(($context["cron_trigger"] ?? null), "mailpoet", []), "html", null, true);
        echo "\"
              data-automation-id=\"mailpoet_cron_radio\"
              ";
        // line 62
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "cron_trigger", []), "method", []) == $this->getAttribute(($context["cron_trigger"] ?? null), "mailpoet", []))) {
            // line 63
            echo "                checked=\"checked\"
                ";
        }
        // line 65
        echo "              />";
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet's own script. Doesn't work with [link]these hosts[/link]."), "http://docs.mailpoet.com/article/131-hosts-which-mailpoet-task-scheduler-wont-work", ["target" => "_blank"]);
        // line 68
        echo "
          </label>
        </p>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"cron_trigger[method]\"
              value=\"";
        // line 76
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute(($context["cron_trigger"] ?? null), "linux_cron", []), "html", null, true);
        echo "\"
              data-automation-id=\"linux_cron_radio\"
            ";
        // line 78
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "cron_trigger", []), "method", []) == $this->getAttribute(($context["cron_trigger"] ?? null), "linux_cron", []))) {
            // line 79
            echo "            checked=\"checked\"
            ";
        }
        // line 81
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Server side cron (Linux cron)");
        // line 82
        echo "
          </label>
        </p>
        <div id=\"settings_linux_cron\">
          <p>
            ";
        // line 87
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("To use this option please add this command to your crontab:");
        echo "<br>
            <input
               value=\"php ";
        // line 89
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["linux_cron_path"] ?? null), "html", null, true);
        echo "/mailpoet-cron.php ";
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["ABSPATH"] ?? null), "html", null, true);
        echo "\"
               class=\"large-text\"
               readonly
            />
          <p>
            ";
        // line 94
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("With the frequency of running it every minute:");
        echo "<br>
            <input
               value=\"*/1 * * * *\"
               class=\"large-text\"
               readonly
            />
        </div>
      </td>
    </tr>
    <!-- roles and capabilities -->
    <tr>
      <th scope=\"row\">
        ";
        // line 106
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Roles and capabilities");
        echo "
        <p class=\"description\">
          ";
        // line 108
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage which WordPress roles access which features of MailPoet.");
        echo "
        </p>
      </th>
      <td>
        ";
        // line 112
        if (($context["members_plugin_active"] ?? null)) {
            // line 113
            echo "        <p>
          <a href=\"";
            // line 114
            echo admin_url("users.php?page=roles");
            echo "\">";
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage using the Members plugin");
            echo "</a>
        </p>
        ";
        } else {
            // line 117
            echo "          ";
            echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Install the plugin [link]Members[/link] (free) to manage permissions."), "https://wordpress.org/plugins/members/", ["target" => "_blank"]);
            // line 120
            echo "
        ";
        }
        // line 122
        echo "      </td>
    </tr>
    <!-- link tracking -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 128
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Open and click tracking");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 131
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enable or disable open and click tracking.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"tracking[enabled]\"
              data-automation-id=\"tracking-enabled-radio\"
              value=\"1\"
              ";
        // line 142
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "tracking", []), "enabled", [])) {
            // line 143
            echo "              checked=\"checked\"
              ";
        }
        // line 145
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"tracking[enabled]\"
              data-automation-id=\"tracking-disabled-radio\"
              value=\"\"
              ";
        // line 154
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "tracking", []), "enabled", [])) {
            // line 155
            echo "              checked=\"checked\"
              ";
        }
        // line 157
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- share anonymous data? -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 166
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Share anonymous data");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 169
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Share anonymous data and help us improve the plugin. We appreciate your help!");
        echo "
          <a
            href=\"http://docs.mailpoet.com/article/130-sharing-your-data-with-us\"
            target=\"_blank\"
          >";
        // line 173
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.", "support article link label");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"analytics[enabled]\"
              data-automation-id=\"analytics-yes\"
              value=\"1\"
              ";
        // line 184
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "analytics", []), "enabled", [])) {
            // line 185
            echo "                checked=\"checked\"
              ";
        }
        // line 187
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"analytics[enabled]\"
              data-automation-id=\"analytics-no\"
              value=\"\"
              ";
        // line 196
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "analytics", []), "enabled", [])) {
            // line 197
            echo "                checked=\"checked\"
              ";
        }
        // line 199
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- reCaptcha settings -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 208
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enable reCAPTCHA");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 211
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Use reCAPTCHA to protect MailPoet subscription forms.");
        echo "
          <a
            href=\"https://www.google.com/recaptcha/admin\"
            target=\"_blank\"
          >";
        // line 215
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sign up for an API key pair here.");
        echo "</a>
        </p>
      </th>
      <td>
        <p>
          <label>
            <input
              type=\"radio\"
              name=\"re_captcha[enabled]\"
              value=\"1\"
              ";
        // line 225
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "re_captcha", []), "enabled", [])) {
            // line 226
            echo "                checked=\"checked\"
              ";
        }
        // line 228
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              name=\"re_captcha[enabled]\"
              value=\"\"
              ";
        // line 236
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "re_captcha", []), "enabled", [])) {
            // line 237
            echo "                checked=\"checked\"
              ";
        }
        // line 239
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </p>
        <div id=\"settings_re_captcha_tokens\">
          <p>
            <input type=\"text\"
              name=\"re_captcha[site_token]\"
              value=\"";
        // line 246
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "re_captcha", []), "site_token", []), "html", null, true);
        echo "\"
              placeholder=\"";
        // line 247
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your reCAPTCHA Site Key");
        echo "\"
              class=\"regular-text\"
            />
          </p>
          <p>
            <input type=\"text\"
              name=\"re_captcha[secret_token]\"
              value=\"";
        // line 254
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "re_captcha", []), "secret_token", []), "html", null, true);
        echo "\"
              placeholder=\"";
        // line 255
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your reCAPTCHA Secret Key");
        echo "\"
              class=\"regular-text\"
            />
          </p>
          <div id=\"settings_re_captcha_tokens_error\" class=\"mailpoet_error_item mailpoet_error\">
            ";
        // line 260
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Please fill the reCAPTCHA keys.");
        echo "
          </div>
        </div>
      </td>
    </tr>
    <!-- reinstall -->
    <tr>
      <th scope=\"row\">
        <label>";
        // line 268
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reinstall from scratch");
        echo "</label>
        <p class=\"description\">
          ";
        // line 270
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Want to start from the beginning? This will completely delete MailPoet and reinstall it from scratch. Remember: you will lose all of your data!");
        echo "
        </p>
      </th>
      <td>
        <p>
          <a
            id=\"mailpoet_reinstall\"
            class=\"button\"
            href=\"javascript:;\">";
        // line 278
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reinstall now...");
        echo "</a>
        </p>
      </td>
    </tr>
    <!-- logging -->
    <tr>
      <th scope=\"row\">
        <label>";
        // line 285
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Logging");
        echo "</label>
        <p class=\"description\">
          ";
        // line 287
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Enables logging for diagnostics of plugin behavior.");
        echo "
      <td>
        <select
          name=\"logging\"
          data-automation-id=\"logging-select-box\"
        >
          <option
            value=\"everything\"
            data-automation-id=\"log-everything\"
            ";
        // line 296
        if (($this->getAttribute(($context["settings"] ?? null), "logging", []) == "everything")) {
            // line 297
            echo "              selected
            ";
        }
        // line 299
        echo "          >";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Everything", "In settings: \"Logging: Everything\"");
        echo "
          <option
            value=\"errors\"
            data-automation-id=\"log-errors\"
            ";
        // line 303
        if ((($this->getAttribute(($context["settings"] ?? null), "logging", []) != "nothing") && ($this->getAttribute(($context["settings"] ?? null), "logging", []) != "everything"))) {
            // line 304
            echo "              selected
            ";
        }
        // line 306
        echo "          >";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Errors only", "In settings: \"Logging: Errors only\"");
        echo "
          <option
            value=\"nothing\"
            data-automation-id=\"log-nothing\"
            ";
        // line 310
        if (($this->getAttribute(($context["settings"] ?? null), "logging", []) == "nothing")) {
            // line 311
            echo "              selected
            ";
        }
        // line 313
        echo "          >";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Nothing", "In settings: \"Logging: Nothing\"");
        echo "
        </select>
  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "settings/advanced.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 313,  531 => 311,  529 => 310,  521 => 306,  517 => 304,  515 => 303,  507 => 299,  503 => 297,  501 => 296,  489 => 287,  484 => 285,  474 => 278,  463 => 270,  458 => 268,  447 => 260,  439 => 255,  435 => 254,  425 => 247,  421 => 246,  410 => 239,  406 => 237,  404 => 236,  392 => 228,  388 => 226,  386 => 225,  373 => 215,  366 => 211,  360 => 208,  347 => 199,  343 => 197,  341 => 196,  328 => 187,  324 => 185,  322 => 184,  308 => 173,  301 => 169,  295 => 166,  282 => 157,  278 => 155,  276 => 154,  263 => 145,  259 => 143,  257 => 142,  243 => 131,  237 => 128,  229 => 122,  225 => 120,  222 => 117,  214 => 114,  211 => 113,  209 => 112,  202 => 108,  197 => 106,  182 => 94,  172 => 89,  167 => 87,  160 => 82,  157 => 81,  153 => 79,  151 => 78,  146 => 76,  136 => 68,  133 => 65,  129 => 63,  127 => 62,  122 => 60,  110 => 52,  106 => 50,  104 => 49,  99 => 47,  87 => 38,  81 => 35,  75 => 32,  62 => 22,  50 => 13,  44 => 10,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "settings/advanced.html", "/home1/datane09/public_html/wp-content/plugins/mailpoet/views/settings/advanced.html");
    }
}
