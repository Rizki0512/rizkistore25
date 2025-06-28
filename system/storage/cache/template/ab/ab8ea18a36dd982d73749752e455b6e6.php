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

/* admin/view/template/design/translation_form.twig */
class __TwigTemplate_69308cfafc9fd32e54397c3b14e44ba1 extends Template
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
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-translation\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-translation\" action=\"";
        // line 21
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"input-store\" class=\"col-sm-2 col-form-label\">";
        // line 23
        yield ($context["entry_store"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                <option value=\"0\">";
        // line 26
        yield ($context["text_default"] ?? null);
        yield "</option>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 28
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 28);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 28) == ($context["store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 28);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-language\" class=\"col-sm-2 col-form-label\">";
        // line 34
        yield ($context["entry_language"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"language_id\" id=\"input-language\" class=\"form-select\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 38
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 38);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 38) == ($context["language_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 38);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-route\" class=\"col-sm-2 col-form-label\">";
        // line 44
        yield ($context["entry_route"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"route\" id=\"input-route\" class=\"form-select\"></select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-key\" class=\"col-sm-2 col-form-label\">";
        // line 50
        yield ($context["entry_key"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select id=\"input-keys\" class=\"form-select\"></select>
              <input type=\"text\" name=\"key\" value=\"";
        // line 53
        yield ($context["key"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_key"] ?? null);
        yield "\" id=\"input-key\" class=\"form-control\"/>
              <div id=\"error-key\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-default\" class=\"col-sm-2 col-form-label\">";
        // line 58
        yield ($context["entry_default"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"default\" rows=\"5\" placeholder=\"";
        // line 60
        yield ($context["entry_default"] ?? null);
        yield "\" id=\"input-default\" class=\"form-control\" disabled=\"disabled\">";
        if (($context["default"] ?? null)) {
            yield ($context["default"] ?? null);
        }
        yield "</textarea>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-value\" class=\"col-sm-2 col-form-label\">";
        // line 64
        yield ($context["entry_value"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"value\" rows=\"5\" placeholder=\"";
        // line 66
        yield ($context["entry_value"] ?? null);
        yield "\" id=\"input-value\" class=\"form-control\">";
        yield ($context["value"] ?? null);
        yield "</textarea>
            </div>
          </div>
          <input type=\"hidden\" name=\"translation_id\" value=\"";
        // line 69
        yield ($context["translation_id"] ?? null);
        yield "\" id=\"input-translation-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-language').on('change', function() {
    \$.ajax({
        url: 'index.php?route=design/translation.path&user_token=";
        // line 78
        yield ($context["user_token"] ?? null);
        yield "&language_id=' + \$('#input-language').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#input-language').prop('disabled', true);
            \$('#input-route').prop('disabled', true);
            \$('#input-key').prop('disabled', true);
        },
        complete: function() {
            \$('#input-language').prop('disabled', false);
            \$('#input-route').prop('disabled', false);
            \$('#input-key').prop('disabled', false);
        },
        success: function(json) {
            html = '';

            if (json) {
                for (i = 0; i < json.length; i++) {
                    if (json[i] == '";
        // line 95
        yield ($context["route"] ?? null);
        yield "') {
                        html += '<option value=\"' + json[i] + '\" selected>' + json[i] + '</option>';
                    } else {
                        html += '<option value=\"' + json[i] + '\">' + json[i] + '</option>';
                    }
                }
            }

            \$('#input-route').html(html);

            \$('#input-route').trigger('change');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-route').on('change', function() {
    \$.ajax({
        url: 'index.php?route=design/translation.translation&user_token=";
        // line 115
        yield ($context["user_token"] ?? null);
        yield "&language_id=' + \$('#input-language').val() + '&path=' + \$('#input-route').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#input-language').prop('disabled', true);
            \$('#input-route').prop('disabled', true);
            \$('#input-key').prop('disabled', true);
        },
        complete: function() {
            \$('#input-language').prop('disabled', false);
            \$('#input-route').prop('disabled', false);
            \$('#input-key').prop('disabled', false);
        },
        success: function(json) {
            translation = [];

            html = '<option value=\"\"></option>';

            if (json) {
                for (i = 0; i < json.length; i++) {
                    if (json[i]['key'] == \$('#input-key').val()) {
                        html += '<option value=\"' + json[i]['key'] + '\" selected>' + json[i]['key'] + '</option>';
                    } else {
                        html += '<option value=\"' + json[i]['key'] + '\">' + json[i]['key'] + '</option>';
                    }

                    translation[json[i]['key']] = json[i]['value'];
                }
            }

            \$('#input-keys').html(html);

            \$('#input-keys').trigger('change');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-keys').on('change', function() {
    if (translation[\$('#input-keys').val()]) {
        \$('#input-default').val(translation[\$('#input-keys').val()]);

        \$('#input-key').val(\$('#input-keys').val());
    } else {
        \$('#input-default').val('');
    }
});

\$('#input-language').trigger('change');
//--></script>
";
        // line 166
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/design/translation_form.twig";
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
        return array (  328 => 166,  274 => 115,  251 => 95,  231 => 78,  219 => 69,  211 => 66,  206 => 64,  195 => 60,  190 => 58,  180 => 53,  174 => 50,  165 => 44,  159 => 40,  144 => 38,  140 => 37,  134 => 34,  128 => 30,  113 => 28,  109 => 27,  105 => 26,  99 => 23,  94 => 21,  89 => 19,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-translation\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-translation\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"input-store\" class=\"col-sm-2 col-form-label\">{{ entry_store }}</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                <option value=\"0\">{{ text_default }}</option>
                {% for store in stores %}
                  <option value=\"{{ store.store_id }}\"{% if store.store_id == store_id %} selected{% endif %}>{{ store.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-language\" class=\"col-sm-2 col-form-label\">{{ entry_language }}</label>
            <div class=\"col-sm-10\">
              <select name=\"language_id\" id=\"input-language\" class=\"form-select\">
                {% for language in languages %}
                  <option value=\"{{ language.language_id }}\"{% if language.language_id == language_id %} selected{% endif %}>{{ language.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-route\" class=\"col-sm-2 col-form-label\">{{ entry_route }}</label>
            <div class=\"col-sm-10\">
              <select name=\"route\" id=\"input-route\" class=\"form-select\"></select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-key\" class=\"col-sm-2 col-form-label\">{{ entry_key }}</label>
            <div class=\"col-sm-10\">
              <select id=\"input-keys\" class=\"form-select\"></select>
              <input type=\"text\" name=\"key\" value=\"{{ key }}\" placeholder=\"{{ entry_key }}\" id=\"input-key\" class=\"form-control\"/>
              <div id=\"error-key\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-default\" class=\"col-sm-2 col-form-label\">{{ entry_default }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"default\" rows=\"5\" placeholder=\"{{ entry_default }}\" id=\"input-default\" class=\"form-control\" disabled=\"disabled\">{% if default %}{{ default }}{% endif %}</textarea>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-value\" class=\"col-sm-2 col-form-label\">{{ entry_value }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"value\" rows=\"5\" placeholder=\"{{ entry_value }}\" id=\"input-value\" class=\"form-control\">{{ value }}</textarea>
            </div>
          </div>
          <input type=\"hidden\" name=\"translation_id\" value=\"{{ translation_id }}\" id=\"input-translation-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-language').on('change', function() {
    \$.ajax({
        url: 'index.php?route=design/translation.path&user_token={{ user_token }}&language_id=' + \$('#input-language').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#input-language').prop('disabled', true);
            \$('#input-route').prop('disabled', true);
            \$('#input-key').prop('disabled', true);
        },
        complete: function() {
            \$('#input-language').prop('disabled', false);
            \$('#input-route').prop('disabled', false);
            \$('#input-key').prop('disabled', false);
        },
        success: function(json) {
            html = '';

            if (json) {
                for (i = 0; i < json.length; i++) {
                    if (json[i] == '{{ route }}') {
                        html += '<option value=\"' + json[i] + '\" selected>' + json[i] + '</option>';
                    } else {
                        html += '<option value=\"' + json[i] + '\">' + json[i] + '</option>';
                    }
                }
            }

            \$('#input-route').html(html);

            \$('#input-route').trigger('change');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-route').on('change', function() {
    \$.ajax({
        url: 'index.php?route=design/translation.translation&user_token={{ user_token }}&language_id=' + \$('#input-language').val() + '&path=' + \$('#input-route').val(),
        dataType: 'json',
        beforeSend: function() {
            \$('#input-language').prop('disabled', true);
            \$('#input-route').prop('disabled', true);
            \$('#input-key').prop('disabled', true);
        },
        complete: function() {
            \$('#input-language').prop('disabled', false);
            \$('#input-route').prop('disabled', false);
            \$('#input-key').prop('disabled', false);
        },
        success: function(json) {
            translation = [];

            html = '<option value=\"\"></option>';

            if (json) {
                for (i = 0; i < json.length; i++) {
                    if (json[i]['key'] == \$('#input-key').val()) {
                        html += '<option value=\"' + json[i]['key'] + '\" selected>' + json[i]['key'] + '</option>';
                    } else {
                        html += '<option value=\"' + json[i]['key'] + '\">' + json[i]['key'] + '</option>';
                    }

                    translation[json[i]['key']] = json[i]['value'];
                }
            }

            \$('#input-keys').html(html);

            \$('#input-keys').trigger('change');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-keys').on('change', function() {
    if (translation[\$('#input-keys').val()]) {
        \$('#input-default').val(translation[\$('#input-keys').val()]);

        \$('#input-key').val(\$('#input-keys').val());
    } else {
        \$('#input-default').val('');
    }
});

\$('#input-language').trigger('change');
//--></script>
{{ footer }}", "admin/view/template/design/translation_form.twig", "C:\\xampp\\htdocs\\rizkistore\\admin\\view\\template\\design\\translation_form.twig");
    }
}
