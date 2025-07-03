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

/* core/modules/media/templates/media-reference-help.html.twig */
class __TwigTemplate_46a57fa87fcdb0ce2fdff4ee3f911fca extends Template
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
        // line 10
        $context["classes"] = ["js-form-item", "form-item", "js-form-wrapper", "form-wrapper"];
        // line 17
        yield "<fieldset";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 17), "html", null, true);
        yield ">
  ";
        // line 19
        $context["legend_span_classes"] = ["fieldset-legend", ((        // line 21
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((        // line 22
($context["required"] ?? null)) ? ("form-required") : (""))];
        // line 25
        yield "  ";
        // line 26
        yield "  <legend";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["legend_attributes"] ?? null), "html", null, true);
        yield ">
    <span";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["legend_span_attributes"] ?? null), "addClass", [($context["legend_span_classes"] ?? null)], "method", false, false, true, 27), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["original_label"] ?? null), "html", null, true);
        yield "</span>
  </legend>

  <div class=\"js-form-item form-item\">
    ";
        // line 31
        if (($context["media_add_help"] ?? null)) {
            // line 32
            yield "      <h4";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["header_attributes"] ?? null), "addClass", ["label"], "method", false, false, true, 32), "html", null, true);
            yield ">
        ";
            // line 33
            yield t("Create new media", array());
            // line 36
            yield "      </h4><br />
      <div class=\"description\">
        ";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["media_add_help"] ?? null), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 41
        yield "
    ";
        // line 42
        if (($context["multiple"] ?? null)) {
            // line 43
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["table"] ?? null), "html", null, true);
            yield "
    ";
        } else {
            // line 45
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 46
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["element"], "html", null, true);
                yield "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['element'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "    ";
        }
        // line 49
        yield "
    <div";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 50), "addClass", ["description"], "method", false, false, true, 50), "html", null, true);
        yield ">
      ";
        // line 51
        if ((($context["multiple"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 51))) {
            // line 52
            yield "        <ul>
          <li>";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["media_list_help"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["media_list_link"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["allowed_types_help"] ?? null), "html", null, true);
            yield "</li>
          <li>";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 54), "html", null, true);
            yield "</li>
        </ul>
      ";
        } else {
            // line 57
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["media_list_help"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["media_list_link"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["allowed_types_help"] ?? null), "html", null, true);
            yield "
      ";
        }
        // line 59
        yield "      ";
        if ((($context["multiple"] ?? null) && ($context["button"] ?? null))) {
            // line 60
            yield "        <div class=\"clearfix\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["button"] ?? null), "html", null, true);
            yield "</div>
      ";
        }
        // line 62
        yield "    </div>

  </div>
</fieldset>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "required", "legend_attributes", "legend_span_attributes", "original_label", "media_add_help", "header_attributes", "multiple", "table", "elements", "description", "media_list_help", "media_list_link", "allowed_types_help", "button"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/media/templates/media-reference-help.html.twig";
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
        return array (  163 => 62,  157 => 60,  154 => 59,  144 => 57,  138 => 54,  130 => 53,  127 => 52,  125 => 51,  121 => 50,  118 => 49,  115 => 48,  106 => 46,  101 => 45,  95 => 43,  93 => 42,  90 => 41,  84 => 38,  80 => 36,  78 => 33,  73 => 32,  71 => 31,  62 => 27,  57 => 26,  55 => 25,  53 => 22,  52 => 21,  51 => 19,  46 => 17,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for media reference fields.
 *
 * @see template_preprocess_field_multiple_value_form()
 */
#}
{%
  set classes = [
    'js-form-item',
    'form-item',
    'js-form-wrapper',
    'form-wrapper',
  ]
%}
<fieldset{{ attributes.addClass(classes) }}>
  {%
    set legend_span_classes = [
      'fieldset-legend',
      required ? 'js-form-required',
      required ? 'form-required',
    ]
  %}
  {# Always wrap fieldset legends in a <span> for CSS positioning. #}
  <legend{{ legend_attributes }}>
    <span{{ legend_span_attributes.addClass(legend_span_classes) }}>{{ original_label }}</span>
  </legend>

  <div class=\"js-form-item form-item\">
    {% if media_add_help %}
      <h4{{ header_attributes.addClass('label') }}>
        {% trans %}
          Create new media
        {% endtrans %}
      </h4><br />
      <div class=\"description\">
        {{ media_add_help }}
      </div>
    {% endif %}

    {% if multiple %}
      {{ table }}
    {% else %}
      {% for element in elements %}
        {{ element }}
      {% endfor %}
    {% endif %}

    <div{{ description.attributes.addClass('description') }}>
      {% if multiple and description.content %}
        <ul>
          <li>{{ media_list_help }} {{ media_list_link }} {{ allowed_types_help }}</li>
          <li>{{ description.content }}</li>
        </ul>
      {% else %}
        {{ media_list_help }} {{ media_list_link }} {{ allowed_types_help }}
      {% endif %}
      {% if multiple and button %}
        <div class=\"clearfix\">{{ button }}</div>
      {% endif %}
    </div>

  </div>
</fieldset>
", "core/modules/media/templates/media-reference-help.html.twig", "/var/www/html/web/core/modules/media/templates/media-reference-help.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 10, "if" => 31, "trans" => 33, "for" => 45];
        static $filters = ["escape" => 17];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'for'],
                ['escape'],
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
