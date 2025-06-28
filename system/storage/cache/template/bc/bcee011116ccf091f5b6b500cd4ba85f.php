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

/* admin/view/template/design/banner_list.twig */
class __TwigTemplate_890db3fd7e8b7cc3a9e469b5f6c68746 extends Template
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
        yield "<form id=\"form-banner\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#banner\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 8
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 12
        if (($context["banners"] ?? null)) {
            // line 13
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 14
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "status", [], "any", false, false, false, 14)) {
                    yield " class=\"table-active opacity-50\"";
                }
                yield ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "banner_id", [], "any", false, false, false, 15);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "name", [], "any", false, false, false, 16);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "edit", [], "any", false, false, false, 17);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "        ";
        } else {
            // line 21
            yield "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 22
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 25
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 29
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 30
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/design/banner_list.twig";
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
        return array (  126 => 30,  122 => 29,  116 => 25,  110 => 22,  107 => 21,  104 => 20,  93 => 17,  89 => 16,  85 => 15,  78 => 14,  73 => 13,  71 => 12,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-banner\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#banner\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if banners %}
          {% for banner in banners %}
            <tr{% if not banner.status %} class=\"table-active opacity-50\"{% endif %}>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ banner.banner_id }}\" class=\"form-check-input\"/></td>
              <td>{{ banner.name }}</td>
              <td class=\"text-end\"><a href=\"{{ banner.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>
", "admin/view/template/design/banner_list.twig", "C:\\xampp\\htdocs\\rizkistore\\admin\\view\\template\\design\\banner_list.twig");
    }
}
