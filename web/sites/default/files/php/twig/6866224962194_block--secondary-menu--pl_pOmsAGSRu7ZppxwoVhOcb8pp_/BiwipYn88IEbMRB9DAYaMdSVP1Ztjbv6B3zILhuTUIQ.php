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

/* core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig */
class __TwigTemplate_20b9b8d65d4fd2b0babd14854bfede05 extends Template
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
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        $context["classes"] = ["block", "block-search-wide"];
        // line 31
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 31), "html", null, true);
        yield ">
  ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 33
        if (($context["label"] ?? null)) {
            // line 34
            yield "    <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</h2>
  ";
        }
        // line 36
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        // line 37
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 56
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title_prefix", "label", "title_attributes", "title_suffix", "content_attributes", "content"]);        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    <button class=\"block-search-wide__button\" aria-label=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search Form"));
        yield "\" data-drupal-selector=\"block-search-wide-button\">
      ";
        // line 39
        yield from $this->loadTemplate("@olivero/../images/search.svg", "core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig", 39)->unwrap()->yield($context);
        // line 40
        yield "      <span class=\"block-search-wide__button-close\"></span>
    </button>

    ";
        // line 48
        yield "    <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["block-search-wide__wrapper"], "method", false, false, true, 48), "setAttribute", ["data-drupal-selector", "block-search-wide-wrapper"], "method", false, false, true, 48), "setAttribute", ["tabindex", "-1"], "method", false, false, true, 48), "html", null, true);
        yield ">
      <div class=\"block-search-wide__container\">
        <div class=\"block-search-wide__grid\">
          ";
        // line 51
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
        </div>
      </div>
    </div>
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig";
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
        return array (  106 => 51,  99 => 48,  94 => 40,  92 => 39,  87 => 38,  80 => 37,  73 => 56,  71 => 37,  66 => 36,  58 => 34,  56 => 33,  52 => 32,  47 => 31,  45 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme implementation for a search form block in the Secondary Menu region.
 *
 * Available variables:
 * - content: The content of this block.
 * - content_attributes: A list of HTML attributes applied to the main content
 *   tag that appears in the template.
 * - label: The configured label of the block if visible.
 * - attributes: HTML attributes for the wrapper.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 * @see search_preprocess_block()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'block',
    'block-search-wide',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}
    <button class=\"block-search-wide__button\" aria-label=\"{{ 'Search Form'|t }}\" data-drupal-selector=\"block-search-wide-button\">
      {% include \"@olivero/../images/search.svg\" %}
      <span class=\"block-search-wide__button-close\"></span>
    </button>

    {#
      Add tabindex=“-1” to prevent Safari from closing search bar when the submit button is clicked with a mouse.
      @see https://www.drupal.org/project/drupal/issues/3269716
      @see https://bugs.webkit.org/show_bug.cgi?id=229895
    #}
    <div{{ content_attributes.addClass('block-search-wide__wrapper').setAttribute('data-drupal-selector', 'block-search-wide-wrapper').setAttribute('tabindex', '-1') }}>
      <div class=\"block-search-wide__container\">
        <div class=\"block-search-wide__grid\">
          {{ content }}
        </div>
      </div>
    </div>
  {% endblock %}
</div>
", "core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig", "/var/www/html/web/core/themes/olivero/templates/block/block--secondary-menu--plugin-id--search-form-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 26, "if" => 33, "block" => 37, "include" => 39];
        static $filters = ["escape" => 31, "t" => 38];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['escape', 't'],
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
