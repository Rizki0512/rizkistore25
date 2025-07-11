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

/* catalog/view/template/checkout/payment_method.twig */
class __TwigTemplate_26641855be7a85d88ed40e4cc2aa1617 extends Template
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
        yield ($context["heading_title"] ?? null);
        yield "</legend>
  <div class=\"input-group\">
    <span class=\"input-group-text\"><i class=\"fa fa-credit-card\"></i></span><input type=\"text\" name=\"payment_method\" value=\"";
        // line 4
        yield ($context["payment_method"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_payment_method"] ?? null);
        yield "\" id=\"input-payment-method\" class=\"form-control\" readonly/>
    <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-primary\">";
        // line 5
        yield ($context["button_choose"] ?? null);
        yield "</button>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"";
        // line 7
        yield ($context["code"] ?? null);
        yield "\" id=\"input-payment-code\"/>
  <div id=\"error-payment-method\" class=\"invalid-feedback\"></div>
</fieldset>
<br/>
<div class=\"mb-2\">
  <label for=\"input-comment\" class=\"form-label\"><strong>";
        // line 12
        yield ($context["text_comments"] ?? null);
        yield "</strong></label>
  <textarea name=\"comment\" rows=\"4\" id=\"input-comment\" class=\"form-control\">";
        // line 13
        yield ($context["comment"] ?? null);
        yield "</textarea>
</div>
";
        // line 15
        if (($context["text_agree"] ?? null)) {
            // line 16
            yield "  <div class=\"form-check form-switch form-switch-lg form-check-reverse mt-3\">
    <label for=\"input-checkout-agree\" class=\"form-check-label\">";
            // line 17
            yield ($context["text_agree"] ?? null);
            yield "</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-checkout-agree\" class=\"form-check-input\"";
            if (($context["agree"] ?? null)) {
                yield " checked";
            }
            yield "/>
  </div>
";
        }
        // line 20
        yield "<script type=\"text/javascript\"><!--
\$('#button-payment-methods').on('click', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method.getMethods&language=";
        // line 26
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
                console.log(json);

                \$('#input-payment-method').removeClass('is-invalid');
                \$('#error-payment-method').removeClass('d-block');

                if (json['error']) {
                    \$('#input-payment-method').addClass('is-invalid');
                    \$('#error-payment-method').html(json['error']).addClass('d-block');
                }

                if (json['payment_methods']) {
                    \$('#modal-payment').remove();

                    html = '<div id=\"modal-payment\" class=\"modal\">';
                    html += '  <div class=\"modal-dialog modal-dialog-centered\">';
                    html += '    <div class=\"modal-content\">';
                    html += '      <div class=\"modal-header\">';
                    html += '        <h5 class=\"modal-title\"><i class=\"fa fa-credit-card\"></i> ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_payment_method"] ?? null), "js");
        yield "</h5>';
                    html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
                    html += '      </div>';
                    html += '      <div class=\"modal-body\">';
                    html += '        <form id=\"form-payment-method\">';
                    html += '          <p>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_payment"] ?? null), "js");
        yield "</p>';

                    var first = true;

                    for (i in json['payment_methods']) {
                        html += '<p><strong>' + json['payment_methods'][i]['name'] + '</strong></p>';

                        if (!json['payment_methods'][i]['error']) {
                            for (j in json['payment_methods'][i]['option']) {
                                html += '<div class=\"form-check\">';

                                var code = i + '-' + j.replaceAll('_', '-');

                                html += '<input type=\"radio\" name=\"payment_method\" value=\"' + json['payment_methods'][i]['option'][j]['code'] + '\" id=\"input-payment-method-' + code + '\"';

                                var method = \$('#input-payment-code').val();

                                if ((json['payment_methods'][i]['option'][j]['code'] == method) || (!method && first)) {
                                    html += ' checked';

                                    first = false;
                                }

                                html += '/>';
                                html += '  <label for=\"input-payment-method-' + code + '\">' + json['payment_methods'][i]['option'][j]['name'] + '</label>';
                                html += '</div>';
                            }
                        } else {
                            html += '<div class=\"alert alert-danger\">' + json['payment_methods'][i]['error'] + '</div>';
                        }
                    }

                    html += '          <div class=\"text-end\">';
                    html += '            <button type=\"submit\" id=\"button-payment-method\" class=\"btn btn-primary\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_continue"] ?? null), "js");
        yield "</button>';
                    html += '          </div>';
                    html += '        </form>';
                    html += '      </div>';
                    html += '    </div>';
                    html += '  </div>';
                    html += '</div>';

                    \$('body').append(html);

                    \$('#modal-payment').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$(document).on('submit', '#form-payment-method', function(e) {
    e.preventDefault();

    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method.save&language=";
        // line 117
        yield ($context["language"] ?? null);
        yield "',
            type: 'post',
            data: \$('#form-payment-method').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-payment-method').button('loading');
            },
            complete: function() {
                \$('#button-payment-method').button('reset');
            },
            success: function(json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#modal-payment').modal('hide');

                    \$('#input-payment-method').val(\$('input[name=\\'payment_method\\']:checked').parent().find('label').text());
                    \$('#input-payment-code').val(\$('input[name=\\'payment_method\\']:checked').val());

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 147
        yield ($context["language"] ?? null);
        yield "');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// Comment
var timer = '';

\$('#input-comment').on('keydown', function() {
    \$('#button-confirm').prop('disabled', true);

    // Request
    clearTimeout(timer);

    timer = setTimeout(function(object) {
        chain.attach(function() {
            return \$.ajax({
                url: 'index.php?route=checkout/payment_method.comment&language=";
        // line 169
        yield ($context["language"] ?? null);
        yield "',
                type: 'post',
                data: \$('#input-comment').serialize(),
                dataType: 'json',
                contentType: 'application/x-www-form-urlencoded',
                success: function(json) {
                    console.log(json);

                    \$('.alert-dismissible').remove();

                    if (json['redirect']) {
                        location = json['redirect'];
                    }

                    if (json['error']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                        \$('#button-confirm').prop('disabled', false);
                    }

                    if (json['success']) {
                        \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                        \$('#button-confirm').prop('disabled', false);
                    }

                    window.setTimeout(function() {
                        \$('.alert-dismissible').fadeTo(1000, 0, function() {
                            \$(this).remove();
                        });
                    }, 3000);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    \$('#button-confirm').prop('disabled', false);

                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });
    }, 1000, this);
});

/* Agree to terms */
\$('#input-checkout-agree').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method.agree&language=";
        // line 217
        yield ($context["language"] ?? null);
        yield "',
            type: 'post',
            data: \$('#input-checkout-agree').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-confirm').button('loading');
            },
            complete: function() {
                \$('#button-confirm').button('reset');
            },
            success: function(json) {
                \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 229
        yield ($context["language"] ?? null);
        yield "');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
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
        return "catalog/view/template/checkout/payment_method.twig";
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
        return array (  328 => 229,  313 => 217,  262 => 169,  237 => 147,  204 => 117,  174 => 90,  138 => 57,  130 => 52,  101 => 26,  93 => 20,  83 => 17,  80 => 16,  78 => 15,  73 => 13,  69 => 12,  61 => 7,  56 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<fieldset>
  <legend>{{ heading_title }}</legend>
  <div class=\"input-group\">
    <span class=\"input-group-text\"><i class=\"fa fa-credit-card\"></i></span><input type=\"text\" name=\"payment_method\" value=\"{{ payment_method }}\" placeholder=\"{{ entry_payment_method }}\" id=\"input-payment-method\" class=\"form-control\" readonly/>
    <button type=\"button\" id=\"button-payment-methods\" class=\"btn btn-primary\">{{ button_choose }}</button>
  </div>
  <input type=\"hidden\" name=\"code\" value=\"{{ code }}\" id=\"input-payment-code\"/>
  <div id=\"error-payment-method\" class=\"invalid-feedback\"></div>
</fieldset>
<br/>
<div class=\"mb-2\">
  <label for=\"input-comment\" class=\"form-label\"><strong>{{ text_comments }}</strong></label>
  <textarea name=\"comment\" rows=\"4\" id=\"input-comment\" class=\"form-control\">{{ comment }}</textarea>
</div>
{% if text_agree %}
  <div class=\"form-check form-switch form-switch-lg form-check-reverse mt-3\">
    <label for=\"input-checkout-agree\" class=\"form-check-label\">{{ text_agree }}</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-checkout-agree\" class=\"form-check-input\"{% if agree %} checked{% endif %}/>
  </div>
{% endif %}
<script type=\"text/javascript\"><!--
\$('#button-payment-methods').on('click', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method.getMethods&language={{ language }}',
            dataType: 'json',
            beforeSend: function() {
                \$(element).button('loading');
            },
            complete: function() {
                \$(element).button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#input-payment-method').removeClass('is-invalid');
                \$('#error-payment-method').removeClass('d-block');

                if (json['error']) {
                    \$('#input-payment-method').addClass('is-invalid');
                    \$('#error-payment-method').html(json['error']).addClass('d-block');
                }

                if (json['payment_methods']) {
                    \$('#modal-payment').remove();

                    html = '<div id=\"modal-payment\" class=\"modal\">';
                    html += '  <div class=\"modal-dialog modal-dialog-centered\">';
                    html += '    <div class=\"modal-content\">';
                    html += '      <div class=\"modal-header\">';
                    html += '        <h5 class=\"modal-title\"><i class=\"fa fa-credit-card\"></i> {{ text_payment_method|escape('js') }}</h5>';
                    html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
                    html += '      </div>';
                    html += '      <div class=\"modal-body\">';
                    html += '        <form id=\"form-payment-method\">';
                    html += '          <p>{{ text_payment|escape('js') }}</p>';

                    var first = true;

                    for (i in json['payment_methods']) {
                        html += '<p><strong>' + json['payment_methods'][i]['name'] + '</strong></p>';

                        if (!json['payment_methods'][i]['error']) {
                            for (j in json['payment_methods'][i]['option']) {
                                html += '<div class=\"form-check\">';

                                var code = i + '-' + j.replaceAll('_', '-');

                                html += '<input type=\"radio\" name=\"payment_method\" value=\"' + json['payment_methods'][i]['option'][j]['code'] + '\" id=\"input-payment-method-' + code + '\"';

                                var method = \$('#input-payment-code').val();

                                if ((json['payment_methods'][i]['option'][j]['code'] == method) || (!method && first)) {
                                    html += ' checked';

                                    first = false;
                                }

                                html += '/>';
                                html += '  <label for=\"input-payment-method-' + code + '\">' + json['payment_methods'][i]['option'][j]['name'] + '</label>';
                                html += '</div>';
                            }
                        } else {
                            html += '<div class=\"alert alert-danger\">' + json['payment_methods'][i]['error'] + '</div>';
                        }
                    }

                    html += '          <div class=\"text-end\">';
                    html += '            <button type=\"submit\" id=\"button-payment-method\" class=\"btn btn-primary\">{{ button_continue|escape('js') }}</button>';
                    html += '          </div>';
                    html += '        </form>';
                    html += '      </div>';
                    html += '    </div>';
                    html += '  </div>';
                    html += '</div>';

                    \$('body').append(html);

                    \$('#modal-payment').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$(document).on('submit', '#form-payment-method', function(e) {
    e.preventDefault();

    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method.save&language={{ language }}',
            type: 'post',
            data: \$('#form-payment-method').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-payment-method').button('loading');
            },
            complete: function() {
                \$('#button-payment-method').button('reset');
            },
            success: function(json) {
                console.log(json);

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#modal-payment').modal('hide');

                    \$('#input-payment-method').val(\$('input[name=\\'payment_method\\']:checked').parent().find('label').text());
                    \$('#input-payment-code').val(\$('input[name=\\'payment_method\\']:checked').val());

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language={{ language }}');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// Comment
var timer = '';

\$('#input-comment').on('keydown', function() {
    \$('#button-confirm').prop('disabled', true);

    // Request
    clearTimeout(timer);

    timer = setTimeout(function(object) {
        chain.attach(function() {
            return \$.ajax({
                url: 'index.php?route=checkout/payment_method.comment&language={{ language }}',
                type: 'post',
                data: \$('#input-comment').serialize(),
                dataType: 'json',
                contentType: 'application/x-www-form-urlencoded',
                success: function(json) {
                    console.log(json);

                    \$('.alert-dismissible').remove();

                    if (json['redirect']) {
                        location = json['redirect'];
                    }

                    if (json['error']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                        \$('#button-confirm').prop('disabled', false);
                    }

                    if (json['success']) {
                        \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                        \$('#button-confirm').prop('disabled', false);
                    }

                    window.setTimeout(function() {
                        \$('.alert-dismissible').fadeTo(1000, 0, function() {
                            \$(this).remove();
                        });
                    }, 3000);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    \$('#button-confirm').prop('disabled', false);

                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });
    }, 1000, this);
});

/* Agree to terms */
\$('#input-checkout-agree').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_method.agree&language={{ language }}',
            type: 'post',
            data: \$('#input-checkout-agree').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-confirm').button('loading');
            },
            complete: function() {
                \$('#button-confirm').button('reset');
            },
            success: function(json) {
                \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language={{ language }}');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>
", "catalog/view/template/checkout/payment_method.twig", "C:\\xampp\\htdocs\\rizkistore\\catalog\\view\\template\\checkout\\payment_method.twig");
    }
}
