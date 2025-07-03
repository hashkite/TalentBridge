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

/* modules/contrib/gin_login/templates/page--user--login.html.twig */
class __TwigTemplate_0e263e0b0b8ad9c4888d62b6c3b691d7 extends Template
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
            'title' => [$this, 'block_title'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "<div class=\"user-form-page\">
  <div class=\"user-form-page__user-form\">
    <header class=\"content-header clearfix\">
      <div class=\"layout-container\">
        ";
        // line 46
        if (((($context["icon_default"] ?? null) == false) && (($context["icon_path"] ?? null) != ""))) {
            // line 47
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
            <img src=\"";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(($context["icon_path"] ?? null)), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
            yield "\" class=\"toolbar-icon-home\" />
          </a>
        ";
        } else {
            // line 51
            yield "          <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
            yield "\" class=\"toolbar-icon toolbar-icon-default\" data-drupal-link-system-path=\"<front>\">
            ";
            // line 52
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "
          </a>
        ";
        }
        // line 55
        yield "      </div>
    </header>

    <div class=\"layout-container\">
      ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "pre_content", [], "any", false, false, true, 59), "claro_primary_local_tasks", "gin_primary_local_tasks"), "html", null, true);
        yield "
      <main class=\"page-content clearfix\" role=\"main\">
        <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
        ";
        // line 62
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 65
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 65), "html", null, true);
        yield "
        ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 66)) {
            // line 67
            yield "          <div class=\"help\">
            ";
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 68), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 71
        yield "        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 71), "claro_primary_local_tasks", "gin_primary_local_tasks"), "html", null, true);
        yield "
      </main>

    </div>
  </div>

  <div class=\"user-form-page__wallpaper\">
    <!-- Wallpaper goes here -->
    ";
        // line 79
        if (($context["brand_image"] ?? null)) {
            // line 80
            yield "      <img src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["brand_image"] ?? null), "html", null, true);
            yield "\" alt=\"\" />
    ";
        }
        // line 82
        yield "  </div>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["icon_default", "icon_path", "site_name", "page", "brand_image"]);        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "          <h1 class=\"page-title user-form-page__page-title\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Log in"));
        yield "</h1>
        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/gin_login/templates/page--user--login.html.twig";
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
        return array (  144 => 63,  137 => 62,  129 => 82,  123 => 80,  121 => 79,  109 => 71,  103 => 68,  100 => 67,  98 => 66,  93 => 65,  91 => 62,  85 => 59,  79 => 55,  73 => 52,  66 => 51,  58 => 48,  53 => 47,  51 => 46,  45 => 42,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 *  Gin Login's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head, and body tags are not in this template. Instead
 * they can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.pre_content: Items for the pre-content region.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.highlighted: Items for the highlighted region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"user-form-page\">
  <div class=\"user-form-page__user-form\">
    <header class=\"content-header clearfix\">
      <div class=\"layout-container\">
        {% if icon_default == false and icon_path != '' %}
          <a href=\"{{ path('<front>') }}\" class=\"toolbar-logo\" data-drupal-link-system-path=\"<front>\">
            <img src=\"{{ file_url(icon_path) }}\" alt=\"{{ site_name }}\" class=\"toolbar-icon-home\" />
          </a>
        {% else %}
          <a href=\"{{ path('<front>') }}\" alt=\"{{ site_name }}\" class=\"toolbar-icon toolbar-icon-default\" data-drupal-link-system-path=\"<front>\">
            {{ 'Home'|t }}
          </a>
        {% endif %}
      </div>
    </header>

    <div class=\"layout-container\">
      {{ page.pre_content|without('claro_primary_local_tasks', 'gin_primary_local_tasks') }}
      <main class=\"page-content clearfix\" role=\"main\">
        <div class=\"visually-hidden\"><a id=\"main-content\" tabindex=\"-1\"></a></div>
        {% block title %}
          <h1 class=\"page-title user-form-page__page-title\">{{ 'Log in'|t }}</h1>
        {% endblock %}
        {{ page.highlighted }}
        {% if page.help %}
          <div class=\"help\">
            {{ page.help }}
          </div>
        {% endif %}
        {{ page.content|without('claro_primary_local_tasks', 'gin_primary_local_tasks') }}
      </main>

    </div>
  </div>

  <div class=\"user-form-page__wallpaper\">
    <!-- Wallpaper goes here -->
    {% if brand_image %}
      <img src=\"{{ brand_image }}\" alt=\"\" />
    {% endif %}
  </div>
</div>
", "modules/contrib/gin_login/templates/page--user--login.html.twig", "/var/www/html/web/modules/contrib/gin_login/templates/page--user--login.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 46, "block" => 62];
        static $filters = ["escape" => 48, "t" => 52, "without" => 59];
        static $functions = ["path" => 47, "file_url" => 48];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 't', 'without'],
                ['path', 'file_url'],
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
