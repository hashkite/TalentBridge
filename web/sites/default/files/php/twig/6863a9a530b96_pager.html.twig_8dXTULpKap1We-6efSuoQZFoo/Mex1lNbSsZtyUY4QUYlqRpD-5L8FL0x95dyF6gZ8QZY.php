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

/* core/themes/claro/templates/pager.html.twig */
class __TwigTemplate_ead31df13ffaf74c3d99961b3dadadb3 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        if (($context["items"] ?? null)) {
            // line 39
            yield "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\">
    <";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield " id=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield ">
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 43
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 43)) {
                // line 44
                yield "        ";
                $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 45
                    yield "        <li class=\"pager__item pager__item--action pager__item--first\">
          <a href=\"";
                    // line 46
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 46), "href", [], "any", false, false, true, 46), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 46), "attributes", [], "any", false, false, true, 46), "href", "title"), "addClass", ["pager__link", "pager__link--action-link"], "method", false, false, true, 46), "html", null, true);
                    yield ">
            <span class=\"visually-hidden\">";
                    // line 47
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                    yield "</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              ";
                    // line 49
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 49), "text", [], "any", true, true, true, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 49), "text", [], "any", false, false, true, 49), t("First"))) : (t("First"))), ["«" => ""]), "html", null, true);
                    yield "
            </span>
          </a>
        </li>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 44
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($_v0));
                // line 54
                yield "      ";
            }
            // line 55
            yield "
      ";
            // line 57
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 57)) {
                // line 58
                yield "        ";
                $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 59
                    yield "        <li class=\"pager__item pager__item--action pager__item--previous\">
          <a href=\"";
                    // line 60
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 60), "href", [], "any", false, false, true, 60), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                    yield "\" rel=\"prev\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 60), "attributes", [], "any", false, false, true, 60), "href", "title", "rel"), "addClass", ["pager__link", "pager__link--action-link"], "method", false, false, true, 60), "html", null, true);
                    yield ">
            <span class=\"visually-hidden\">";
                    // line 61
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                    yield "</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              ";
                    // line 63
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 63), "text", [], "any", true, true, true, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 63), "text", [], "any", false, false, true, 63), t("Previous"))) : (t("Previous"))), ["‹" => ""]), "html", null, true);
                    yield "
            </span>
          </a>
        </li>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 58
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($_v1));
                // line 68
                yield "      ";
            }
            // line 69
            yield "
      ";
            // line 71
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 71)) {
                // line 72
                yield "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 74
            yield "
      ";
            // line 76
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 76));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 77
                yield "        ";
                $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 78
                    yield "        <li class=\"pager__item";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                    yield " pager__item--number\">
          ";
                    // line 79
                    if ((($context["current"] ?? null) == $context["key"])) {
                        // line 80
                        yield "            ";
                        $context["title"] = t("Current page");
                        // line 81
                        yield "          ";
                    } else {
                        // line 82
                        yield "            ";
                        $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                        // line 83
                        yield "          ";
                    }
                    // line 84
                    yield "          <a href=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 84), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 84), "href", "title"), "addClass", [["pager__link", (((($context["current"] ?? null) == $context["key"])) ? (" is-active") : (""))]], "method", false, false, true, 84), "html", null, true);
                    yield ">
            <span class=\"visually-hidden\">
              ";
                    // line 86
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page"));
                    yield "
            </span>
            ";
                    // line 88
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                    yield "
          </a>
        </li>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 77
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($_v2));
                // line 92
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "
      ";
            // line 95
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 95)) {
                // line 96
                yield "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 98
            yield "
      ";
            // line 100
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 100)) {
                // line 101
                yield "        ";
                $_v3 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 102
                    yield "        <li class=\"pager__item pager__item--action pager__item--next\">
          <a href=\"";
                    // line 103
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 103), "href", [], "any", false, false, true, 103), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                    yield "\" rel=\"next\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 103), "attributes", [], "any", false, false, true, 103), "href", "title", "rel"), "addClass", ["pager__link", "pager__link--action-link"], "method", false, false, true, 103), "html", null, true);
                    yield ">
            <span class=\"visually-hidden\">";
                    // line 104
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                    yield "</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              ";
                    // line 106
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 106), "text", [], "any", true, true, true, 106)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 106), "text", [], "any", false, false, true, 106), t("Next"))) : (t("Next"))), ["›" => ""]), "html", null, true);
                    yield "
            </span>
          </a>
        </li>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 101
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($_v3));
                // line 111
                yield "      ";
            }
            // line 112
            yield "
      ";
            // line 114
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 114)) {
                // line 115
                yield "        ";
                $_v4 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 116
                    yield "        <li class=\"pager__item pager__item--action pager__item--last\">
          <a href=\"";
                    // line 117
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 117), "href", [], "any", false, false, true, 117), "html", null, true);
                    yield "\" title=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                    yield "\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 117), "attributes", [], "any", false, false, true, 117), "href", "title"), "addClass", ["pager__link", "pager__link--action-link"], "method", false, false, true, 117), "html", null, true);
                    yield ">
            <span class=\"visually-hidden\">";
                    // line 118
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                    yield "</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              ";
                    // line 120
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 120), "text", [], "any", true, true, true, 120)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 120), "text", [], "any", false, false, true, 120), t("Last"))) : (t("Last"))), ["»" => ""]), "html", null, true);
                    yield "
            </span>
          </a>
        </li>
        ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 115
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($_v4));
                // line 125
                yield "      ";
            }
            // line 126
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "heading_id", "pagination_heading_level", "ellipses", "current"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/pager.html.twig";
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
        return array (  296 => 126,  293 => 125,  291 => 115,  282 => 120,  277 => 118,  269 => 117,  266 => 116,  263 => 115,  260 => 114,  257 => 112,  254 => 111,  252 => 101,  243 => 106,  238 => 104,  230 => 103,  227 => 102,  224 => 101,  221 => 100,  218 => 98,  214 => 96,  211 => 95,  208 => 93,  202 => 92,  200 => 77,  192 => 88,  187 => 86,  177 => 84,  174 => 83,  171 => 82,  168 => 81,  165 => 80,  163 => 79,  158 => 78,  155 => 77,  150 => 76,  147 => 74,  143 => 72,  140 => 71,  137 => 69,  134 => 68,  132 => 58,  123 => 63,  118 => 61,  110 => 60,  107 => 59,  104 => 58,  101 => 57,  98 => 55,  95 => 54,  93 => 44,  84 => 49,  79 => 47,  71 => 46,  68 => 45,  65 => 44,  62 => 43,  51 => 40,  46 => 39,  44 => 38,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a pager.
 *
 * Available variables:
 * - heading_id: Pagination heading ID.
 * - pagination_heading_level: The heading level to use for the pager.
 * - items: List of pager items.
 *   The list is keyed by the following elements:
 *   - first: Item for the first page; not present on the first page of results.
 *   - previous: Item for the previous page; not present on the first page
 *     of results.
 *   - next: Item for the next page; not present on the last page of results.
 *   - last: Item for the last page; not present on the last page of results.
 *   - pages: List of pages, keyed by page number.
 *   Sub-sub elements:
 *   items.first, items.previous, items.next, items.last, and each item inside
 *   items.pages contain the following elements:
 *   - href: URL with appropriate query parameters for the item.
 *   - attributes: A keyed list of HTML attributes for the item.
 *   - text: The visible text used for the item link, such as \"‹ Previous\"
 *     or \"Next ›\".
 * - current: The page number of the current page.
 * - ellipses: If there are more pages than the quantity allows, then an
 *   ellipsis before or after the listed pages may be present.
 *   - previous: Present if the currently visible list of pages does not start
 *     at the first page.
 *   - next: Present if the visible list of pages ends before the last page.
 *
 * @see template_preprocess_pager()
 *
 * @todo review all uses of the replace() filter below in
 *   https://www.drupal.org/node/3053707 as the behavior it addresses will
 *   likely change when that issue is completed.
 */
#}
{% if items %}
  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"{{ heading_id }}\">
    <{{ pagination_heading_level }} id=\"{{ heading_id }}\" class=\"visually-hidden\">{{ 'Pagination'|t }}</{{ pagination_heading_level }}>
    <ul class=\"pager__items js-pager__items\">
      {# Print first item if we are not on the first page. #}
      {% if items.first %}
        {% apply spaceless %}
        <li class=\"pager__item pager__item--action pager__item--first\">
          <a href=\"{{ items.first.href }}\" title=\"{{ 'Go to first page'|t }}\"{{ items.first.attributes|without('href', 'title').addClass('pager__link', 'pager__link--action-link') }}>
            <span class=\"visually-hidden\">{{ 'First page'|t }}</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              {{ items.first.text|default('First'|t)|replace({'«': ''}) }}
            </span>
          </a>
        </li>
        {% endapply %}
      {% endif %}

      {# Print previous item if we are not on the first page. #}
      {% if items.previous %}
        {% apply spaceless %}
        <li class=\"pager__item pager__item--action pager__item--previous\">
          <a href=\"{{ items.previous.href }}\" title=\"{{ 'Go to previous page'|t }}\" rel=\"prev\"{{ items.previous.attributes|without('href', 'title', 'rel').addClass('pager__link', 'pager__link--action-link') }}>
            <span class=\"visually-hidden\">{{ 'Previous page'|t }}</span>
            <span class=\"pager__item-title pager__item-title--backwards\" aria-hidden=\"true\">
              {{ items.previous.text|default('Previous'|t)|replace({'‹': ''}) }}
            </span>
          </a>
        </li>
        {% endapply %}
      {% endif %}

      {# Add an ellipsis if there are further previous pages. #}
      {% if ellipses.previous %}
        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      {% endif %}

      {# Now generate the actual pager piece. #}
      {% for key, item in items.pages %}
        {% apply spaceless %}
        <li class=\"pager__item{{ current == key ? ' pager__item--active' : '' }} pager__item--number\">
          {% if current == key %}
            {% set title = 'Current page'|t %}
          {% else %}
            {% set title = 'Go to page @key'|t({'@key': key}) %}
          {% endif %}
          <a href=\"{{ item.href }}\" title=\"{{ title }}\"{{ item.attributes|without('href', 'title').addClass(['pager__link', current == key ? ' is-active']) }}>
            <span class=\"visually-hidden\">
              {{ 'Page'|t }}
            </span>
            {{ key }}
          </a>
        </li>
        {% endapply %}
      {% endfor %}

      {# Add an ellipsis if there are further next pages. #}
      {% if ellipses.next %}
        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      {% endif %}

      {# Print next item if we are not on the last page. #}
      {% if items.next %}
        {% apply spaceless %}
        <li class=\"pager__item pager__item--action pager__item--next\">
          <a href=\"{{ items.next.href }}\" title=\"{{ 'Go to next page'|t }}\" rel=\"next\"{{ items.next.attributes|without('href', 'title', 'rel').addClass('pager__link', 'pager__link--action-link') }}>
            <span class=\"visually-hidden\">{{ 'Next page'|t }}</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              {{ items.next.text|default('Next'|t)|replace({'›': ''}) }}
            </span>
          </a>
        </li>
        {% endapply %}
      {% endif %}

      {# Print last item if we are not on the last page. #}
      {% if items.last %}
        {% apply spaceless %}
        <li class=\"pager__item pager__item--action pager__item--last\">
          <a href=\"{{ items.last.href }}\" title=\"{{ 'Go to last page'|t }}\"{{ items.last.attributes|without('href', 'title').addClass('pager__link', 'pager__link--action-link') }}>
            <span class=\"visually-hidden\">{{ 'Last page'|t }}</span>
            <span class=\"pager__item-title pager__item-title--forward\" aria-hidden=\"true\">
              {{ items.last.text|default('Last'|t)|replace({'»': ''}) }}
            </span>
          </a>
        </li>
        {% endapply %}
      {% endif %}
    </ul>
  </nav>
{% endif %}
", "core/themes/claro/templates/pager.html.twig", "/var/www/html/web/core/themes/claro/templates/pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 38, "apply" => 44, "for" => 76, "set" => 80];
        static $filters = ["escape" => 39, "t" => 40, "without" => 46, "replace" => 49, "default" => 49, "spaceless" => 44];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply', 'for', 'set'],
                ['escape', 't', 'without', 'replace', 'default', 'spaceless'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
