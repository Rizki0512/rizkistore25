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

/* admin/view/template/catalog/review_list.twig */
class __TwigTemplate_380bc2c1f22d23d23f6091f88fcfa97c extends Template
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
        yield "<form id=\"form-review\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#review\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_product"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "pd.name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_product"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 8
        yield ($context["sort_author"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "r.author")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_author"] ?? null);
        yield "</a></th>
          <th class=\"text-end d-none d-lg-table-cell\"><a href=\"";
        // line 9
        yield ($context["sort_rating"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "r.rating")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_rating"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 10
        yield ($context["sort_date_added"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "r.date_added")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_date_added"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 11
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 15
        if (($context["reviews"] ?? null)) {
            // line 16
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 17
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 17)) {
                    yield " class=\"table-active opacity-50\"";
                }
                yield ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 18);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 19);
                yield "</td>
              <td>";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 20);
                yield "</td>
              <td class=\"text-end d-none d-lg-table-cell\">";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 21);
                yield "</td>
              <td>";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 22);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 23);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "        ";
        } else {
            // line 27
            yield "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 28
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 31
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 35
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 36
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
        return "admin/view/template/catalog/review_list.twig";
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
        return array (  174 => 36,  170 => 35,  164 => 31,  158 => 28,  155 => 27,  152 => 26,  141 => 23,  137 => 22,  133 => 21,  129 => 20,  125 => 19,  121 => 18,  114 => 17,  109 => 16,  107 => 15,  100 => 11,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-review\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#review\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_product }}\"{% if sort == 'pd.name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_product }}</a></th>
          <th><a href=\"{{ sort_author }}\"{% if sort == 'r.author' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_author }}</a></th>
          <th class=\"text-end d-none d-lg-table-cell\"><a href=\"{{ sort_rating }}\"{% if sort == 'r.rating' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_rating }}</a></th>
          <th><a href=\"{{ sort_date_added }}\"{% if sort == 'r.date_added' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_added }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if reviews %}
          {% for review in reviews %}
            <tr{% if not review.status %} class=\"table-active opacity-50\"{% endif %}>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ review.review_id }}\" class=\"form-check-input\"/></td>
              <td>{{ review.name }}</td>
              <td>{{ review.author }}</td>
              <td class=\"text-end d-none d-lg-table-cell\">{{ review.rating }}</td>
              <td>{{ review.date_added }}</td>
              <td class=\"text-end\"><a href=\"{{ review.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"7\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "admin/view/template/catalog/review_list.twig", "C:\\xampp\\htdocs\\rizkistore\\admin\\view\\template\\catalog\\review_list.twig");
    }
}
