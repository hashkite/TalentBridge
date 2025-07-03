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

/* modules/contrib/flag/templates/flag.html.twig */
class __TwigTemplate_7d515619266ba47c2a128d5f2a4d63f8 extends Template
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
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("flag/flag.link"), "html", null, true);
        yield "

";
        // line 21
        if ((($context["action"] ?? null) == "unflag")) {
            // line 22
            yield "    ";
            $context["action_class"] = "action-unflag";
        } else {
            // line 24
            yield "    ";
            $context["action_class"] = "action-flag";
        }
        // line 26
        yield "
";
        // line 29
        $context["classes"] = ["flag", ("flag-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["flag"] ?? null), "id", [], "method", false, false, true, 31))), ((("js-flag-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["flag"] ?? null), "id", [], "method", false, false, true, 32))) . "-") . CoreExtension::getAttribute($this->env, $this->source, ($context["flaggable"] ?? null), "id", [], "method", false, false, true, 32)),         // line 33
($context["action_class"] ?? null)];
        // line 36
        yield "
";
        // line 38
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["rel", "nofollow"], "method", false, false, true, 38);
        // line 39
        yield "
<div class=\"";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " "), "html", null, true);
        yield "\"><a";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</a></div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["action", "flag", "flaggable", "title"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/flag/templates/flag.html.twig";
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
        return array (  75 => 40,  72 => 39,  70 => 38,  67 => 36,  65 => 33,  64 => 32,  63 => 31,  62 => 29,  59 => 26,  55 => 24,  51 => 22,  49 => 21,  44 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for flag links.
 *
 * Available functions:
 * - flagcount(flag, flaggable) gets the number of flaggings for the given flag and flaggable.
 *
 * Available variables:
 * - attributes: HTML attributes for the link element.
 * - title: The flag link title.
 * - action: 'flag' or 'unflag'
 * - flag: The flag object.
 * - flaggable: The flaggable entity.
 */
#}
{# Attach the flag CSS library.#}
{{ attach_library('flag/flag.link') }}

{# Depending on the flag action, set the appropriate action class. #}
{% if action == 'unflag' %}
    {% set action_class = 'action-unflag' %}
{% else %}
    {% set action_class = 'action-flag' %}
{% endif %}

{# Set the remaining Flag CSS classes. #}
{%
  set classes = [
    'flag',
    'flag-' ~ flag.id()|clean_class,
    'js-flag-' ~ flag.id()|clean_class ~ '-' ~ flaggable.id(),
    action_class
  ]
%}

{# Set nofollow to prevent search bots from crawling anonymous flag links #}
{% set attributes = attributes.setAttribute('rel', 'nofollow') %}

<div class=\"{{classes|join(' ')}}\"><a{{ attributes }}>{{ title }}</a></div>
", "modules/contrib/flag/templates/flag.html.twig", "/var/www/html/web/modules/contrib/flag/templates/flag.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 21, "set" => 22];
        static $filters = ["escape" => 18, "clean_class" => 31, "join" => 40];
        static $functions = ["attach_library" => 18];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'clean_class', 'join'],
                ['attach_library'],
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
