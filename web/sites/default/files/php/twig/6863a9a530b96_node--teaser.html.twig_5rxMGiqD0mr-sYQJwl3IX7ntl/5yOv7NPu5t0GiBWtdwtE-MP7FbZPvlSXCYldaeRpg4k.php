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

/* core/themes/olivero/templates/content/node--teaser.html.twig */
class __TwigTemplate_fc914316c87cc824923df06ecac19255 extends Template
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
        // line 63
        yield "
";
        // line 65
        $context["classes"] = ["node", ("node--type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "bundle", [], "any", false, false, true, 67))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 68)) ? ("node--promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 69)) ? ("node--sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 70)) ? ("node--unpublished") : ("")), ((        // line 71
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 74
        yield "

";
        // line 76
        yield from $this->loadTemplate("core/themes/olivero/templates/content/node--teaser.html.twig", "core/themes/olivero/templates/content/node--teaser.html.twig", 76, "1515429418")->unwrap()->yield(CoreExtension::toArray(["attributes" => CoreExtension::getAttribute($this->env, $this->source,         // line 77
($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 77), "author_attributes" =>         // line 78
($context["author_attributes"] ?? null), "author_name" =>         // line 79
($context["author_name"] ?? null), "content" =>         // line 80
($context["content"] ?? null), "date" =>         // line 81
($context["date"] ?? null), "display_submitted" =>         // line 82
($context["display_submitted"] ?? null), "label" =>         // line 83
($context["label"] ?? null), "metadata" =>         // line 84
($context["metadata"] ?? null), "title_attributes" =>         // line 85
($context["title_attributes"] ?? null), "title_prefix" =>         // line 86
($context["title_prefix"] ?? null), "title_suffix" =>         // line 87
($context["title_suffix"] ?? null), "read_more" =>         // line 88
($context["read_more"] ?? null), "url" =>         // line 89
($context["url"] ?? null)]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "author_attributes", "author_name", "content", "date", "display_submitted", "label", "metadata", "title_attributes", "title_prefix", "title_suffix", "read_more", "url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/olivero/templates/content/node--teaser.html.twig";
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
        return array (  71 => 89,  70 => 88,  69 => 87,  68 => 86,  67 => 85,  66 => 84,  65 => 83,  64 => 82,  63 => 81,  62 => 80,  61 => 79,  60 => 78,  59 => 77,  58 => 76,  54 => 74,  52 => 71,  51 => 70,  50 => 69,  49 => 68,  48 => 67,  47 => 65,  44 => 63,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Olivero's theme implementation to display a node teaser.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 *
 * @see template_preprocess_node()
 */
#}

{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  ]
%}


{% embed \"olivero:teaser\" with {
  attributes: attributes.addClass(classes),
  author_attributes,
  author_name,
  content,
  date,
  display_submitted,
  label,
  metadata,
  title_attributes,
  title_prefix,
  title_suffix,
  read_more,
  url,
  } only %}
  {% block prefix %}
    {{ title_prefix }}
    {{ title_suffix }}
  {% endblock %}
  {% block meta %}
    {% if display_submitted %}
      <div class=\"node__meta\">
        <span{{ author_attributes }}>
          {{ 'By'|t }} {% apply spaceless %}<span class=\"node__author\">{{ author_name }}</span>{% endapply %}, {{ date }}
        </span>
        {{ metadata }}
      </div>
    {% endif %}
  {% endblock %}
  {% block image %}{{~ content.field_image ~}}{% endblock %}
  {% block title %}
    {% if label and not page %}
      <h2{{ title_attributes.addClass('node__title', 'teaser__title') }}>
        <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
      </h2>
    {% endif %}
  {% endblock %}
  {% block content %}
    {{ content|without('field_image', 'links') }}
  {% endblock %}
{% endembed %}
", "core/themes/olivero/templates/content/node--teaser.html.twig", "/var/www/html/web/core/themes/olivero/templates/content/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 65, "embed" => 76];
        static $filters = ["clean_class" => 67];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'embed'],
                ['clean_class'],
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


/* core/themes/olivero/templates/content/node--teaser.html.twig */
class __TwigTemplate_fc914316c87cc824923df06ecac19255___1515429418 extends Template
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

        $this->blocks = [
            'prefix' => [$this, 'block_prefix'],
            'meta' => [$this, 'block_meta'],
            'image' => [$this, 'block_image'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 76
        return "olivero:teaser";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("olivero:teaser", "core/themes/olivero/templates/content/node--teaser.html.twig", 76);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title_prefix", "title_suffix", "display_submitted", "author_attributes", "author_name", "date", "metadata", "content", "label", "page", "title_attributes", "url"]);    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_prefix(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 92
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
    ";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_meta(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 96
        yield "    ";
        if (($context["display_submitted"] ?? null)) {
            // line 97
            yield "      <div class=\"node__meta\">
        <span";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true);
            yield ">
          ";
            // line 99
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("By"));
            yield " ";
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                yield "<span class=\"node__author\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_name"] ?? null), "html", null, true);
                yield "</span>";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($_v0));
            yield ", ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["date"] ?? null), "html", null, true);
            yield "
        </span>
        ";
            // line 101
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 104
        yield "  ";
        yield from [];
    }

    // line 105
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 105), "html", null, true);
        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 107
        yield "    ";
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 108
            yield "      <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node__title", "teaser__title"], "method", false, false, true, 108), "html", null, true);
            yield ">
        <a href=\"";
            // line 109
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a>
      </h2>
    ";
        }
        // line 112
        yield "  ";
        yield from [];
    }

    // line 113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 114
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_image", "links"), "html", null, true);
        yield "
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/olivero/templates/content/node--teaser.html.twig";
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
        return array (  401 => 114,  394 => 113,  389 => 112,  381 => 109,  376 => 108,  373 => 107,  366 => 106,  355 => 105,  350 => 104,  344 => 101,  329 => 99,  325 => 98,  322 => 97,  319 => 96,  312 => 95,  305 => 93,  300 => 92,  293 => 91,  281 => 76,  71 => 89,  70 => 88,  69 => 87,  68 => 86,  67 => 85,  66 => 84,  65 => 83,  64 => 82,  63 => 81,  62 => 80,  61 => 79,  60 => 78,  59 => 77,  58 => 76,  54 => 74,  52 => 71,  51 => 70,  50 => 69,  49 => 68,  48 => 67,  47 => 65,  44 => 63,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Olivero's theme implementation to display a node teaser.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 *
 * @see template_preprocess_node()
 */
#}

{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.isPromoted() ? 'node--promoted',
    node.isSticky() ? 'node--sticky',
    not node.isPublished() ? 'node--unpublished',
    view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
  ]
%}


{% embed \"olivero:teaser\" with {
  attributes: attributes.addClass(classes),
  author_attributes,
  author_name,
  content,
  date,
  display_submitted,
  label,
  metadata,
  title_attributes,
  title_prefix,
  title_suffix,
  read_more,
  url,
  } only %}
  {% block prefix %}
    {{ title_prefix }}
    {{ title_suffix }}
  {% endblock %}
  {% block meta %}
    {% if display_submitted %}
      <div class=\"node__meta\">
        <span{{ author_attributes }}>
          {{ 'By'|t }} {% apply spaceless %}<span class=\"node__author\">{{ author_name }}</span>{% endapply %}, {{ date }}
        </span>
        {{ metadata }}
      </div>
    {% endif %}
  {% endblock %}
  {% block image %}{{~ content.field_image ~}}{% endblock %}
  {% block title %}
    {% if label and not page %}
      <h2{{ title_attributes.addClass('node__title', 'teaser__title') }}>
        <a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
      </h2>
    {% endif %}
  {% endblock %}
  {% block content %}
    {{ content|without('field_image', 'links') }}
  {% endblock %}
{% endembed %}
", "core/themes/olivero/templates/content/node--teaser.html.twig", "/var/www/html/web/core/themes/olivero/templates/content/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 76, "if" => 96, "apply" => 99];
        static $filters = ["escape" => 92, "t" => 99, "spaceless" => 99, "without" => 114];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if', 'apply'],
                ['escape', 't', 'spaceless', 'without'],
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
