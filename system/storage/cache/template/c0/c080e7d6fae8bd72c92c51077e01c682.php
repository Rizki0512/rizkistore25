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

/* extension/opencart/admin/view/template/shipping/free.twig */
class __TwigTemplate_749a6cf3abac79c0e2317fad25f4866b extends Template
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
        <button type=\"submit\" form=\"form-shipping\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        yield ($context["text_edit"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-shipping\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"input-total\" class=\"col-sm-2 col-form-label\">";
        // line 22
        yield ($context["entry_total"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_free_total\" value=\"";
        // line 24
        yield ($context["shipping_free_total"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_total"] ?? null);
        yield "\" id=\"input-total\" class=\"form-control\"/>
              <div class=\"form-text text-muted\">";
        // line 25
        yield ($context["help_total"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-geo-zone\" class=\"col-sm-2 col-form-label\">";
        // line 29
        yield ($context["entry_geo_zone"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_free_geo_zone_id\" id=\"input-geo-zone\" class=\"form-select\">
                <option value=\"0\">";
        // line 32
        yield ($context["text_all_zones"] ?? null);
        yield "</option>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 34
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 34);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 34) == ($context["shipping_free_geo_zone_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 34);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['geo_zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 40
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"shipping_free_status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"shipping_free_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 44
        if (($context["shipping_free_status"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 49
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_free_sort_order\" value=\"";
        // line 51
        yield ($context["shipping_free_sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 59
        yield ($context["footer"] ?? null);
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/admin/view/template/shipping/free.twig";
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
        return array (  186 => 59,  173 => 51,  168 => 49,  158 => 44,  151 => 40,  145 => 36,  130 => 34,  126 => 33,  122 => 32,  116 => 29,  109 => 25,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-shipping\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
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
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_edit }}</div>
      <div class=\"card-body\">
        <form id=\"form-shipping\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label for=\"input-total\" class=\"col-sm-2 col-form-label\">{{ entry_total }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_free_total\" value=\"{{ shipping_free_total }}\" placeholder=\"{{ entry_total }}\" id=\"input-total\" class=\"form-control\"/>
              <div class=\"form-text text-muted\">{{ help_total }}</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-geo-zone\" class=\"col-sm-2 col-form-label\">{{ entry_geo_zone }}</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_free_geo_zone_id\" id=\"input-geo-zone\" class=\"form-select\">
                <option value=\"0\">{{ text_all_zones }}</option>
                {% for geo_zone in geo_zones %}
                  <option value=\"{{ geo_zone.geo_zone_id }}\"{% if geo_zone.geo_zone_id == shipping_free_geo_zone_id %} selected{% endif %}>{{ geo_zone.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"shipping_free_status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"shipping_free_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if shipping_free_status %} checked{% endif %}/>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_free_sort_order\" value=\"{{ shipping_free_sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }} ", "extension/opencart/admin/view/template/shipping/free.twig", "C:\\xampp\\htdocs\\rizkistore\\extension\\opencart\\admin\\view\\template\\shipping\\free.twig");
    }
}
