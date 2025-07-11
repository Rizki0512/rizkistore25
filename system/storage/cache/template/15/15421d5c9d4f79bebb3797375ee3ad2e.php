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

/* admin/view/template/localisation/location_list.twig */
class __TwigTemplate_ee2dced27323319b1a1ae78394615568 extends Template
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
        yield "<form id=\"form-location\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#location\">
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
          <th><a href=\"";
        // line 8
        yield ($context["sort_address"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "address")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_address"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 9
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 13
        if (($context["locations"] ?? null)) {
            // line 14
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 15
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 16);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 17);
                yield "</td>
              <td>";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 18);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "edit", [], "any", false, false, false, 19);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "        ";
        } else {
            // line 23
            yield "          <tr>
            <td class=\"text-center\" colspan=\"4\">";
            // line 24
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 27
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 31
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 32
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/localisation/location_list.twig";
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
        return array (  138 => 32,  134 => 31,  128 => 27,  122 => 24,  119 => 23,  116 => 22,  105 => 19,  101 => 18,  97 => 17,  93 => 16,  90 => 15,  85 => 14,  83 => 13,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-location\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#location\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th><a href=\"{{ sort_address }}\"{% if sort == 'address' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_address }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if locations %}
          {% for location in locations %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ location.location_id }}\" class=\"form-check-input\"/></td>
              <td>{{ location.name }}</td>
              <td>{{ location.address }}</td>
              <td class=\"text-end\"><a href=\"{{ location.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"4\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "admin/view/template/localisation/location_list.twig", "C:\\xampp\\htdocs\\rizkistore\\admin\\view\\template\\localisation\\location_list.twig");
    }
}
