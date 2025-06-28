<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* extension/opencart/catalog/view/template/payment/bank_transfer.twig */
class __TwigTemplate_29ec5dce0fd08e5bd83455394c03b57b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<fieldset>
  <legend>";
        // line 2
        yield ($context["text_instruction"] ?? null);
        yield "</legend>
  <p><b>";
        // line 3
        yield ($context["text_description"] ?? null);
        yield "</b></p>
  <div class=\"border rounded p-3 mb-2\">
    <p>";
        // line 5
        yield ($context["bank"] ?? null);
        yield "</p>
    <p>";
        // line 6
        yield ($context["text_payment"] ?? null);
        yield "</p>
  </div>
  <div class=\"text-end\">
    <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\">";
        // line 9
        yield ($context["button_confirm"] ?? null);
        yield "</button>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=extension/opencart/payment/bank_transfer.confirm&language=";
        // line 17
        yield ($context["language"] ?? null);
        yield "',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['redirect']) {
                location = json['redirect'];
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/catalog/view/template/payment/bank_transfer.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  75 => 17,  64 => 9,  58 => 6,  54 => 5,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<fieldset>
  <legend>{{ text_instruction }}</legend>
  <p><b>{{ text_description }}</b></p>
  <div class=\"border rounded p-3 mb-2\">
    <p>{{ bank }}</p>
    <p>{{ text_payment }}</p>
  </div>
  <div class=\"text-end\">
    <button type=\"button\" id=\"button-confirm\" class=\"btn btn-primary\">{{ button_confirm }}</button>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=extension/opencart/payment/bank_transfer.confirm&language={{ language }}',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['redirect']) {
                location = json['redirect'];
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
", "extension/opencart/catalog/view/template/payment/bank_transfer.twig", "C:\\xampp\\htdocs\\rizkistore\\extension\\opencart\\catalog\\view\\template\\payment\\bank_transfer.twig");
    }
}
