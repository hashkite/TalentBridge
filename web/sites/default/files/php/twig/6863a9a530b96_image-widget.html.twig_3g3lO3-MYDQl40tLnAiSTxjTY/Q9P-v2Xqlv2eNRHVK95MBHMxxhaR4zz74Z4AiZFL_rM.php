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

/* core/themes/claro/templates/content-edit/image-widget.html.twig */
class __TwigTemplate_053ea9cedb7ff2ea31f384f389dc6d29 extends Template
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
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 24
        return "@claro/content-edit/file-managed-file.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["form-managed-file--image"], "method", false, false, true, 26);
        // line 24
        $this->parent = $this->loadTemplate("@claro/content-edit/file-managed-file.html.twig", "core/themes/claro/templates/content-edit/image-widget.html.twig", 24);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/content-edit/image-widget.html.twig";
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
        return array (  50 => 24,  48 => 26,  41 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for an image field widget.
 *
 * Available variables:
 * - main_items: Main render elements of the image widget:
 *   file name, upload input, upload and remove buttons and hidden inputs.
 * - data: Other render elements of the image widget like preview, alt or title.
 * - display: A flag indicating whether the display field is visible.
 * - attributes: HTML attributes for the containing element.
 * - multiple: Whether this widget is the part of a multi-value file widget or
 *   not.
 * - upload: Whether the file upload input is displayed or not.
 * - has_value: true if the widget already contains a file.
 * - has_meta: true when at least one of the alt or title inputs is enabled and
 *   visible.
 *
 * @see template_preprocess_image_widget()
 * @see claro_preprocess_image_widget()
 */
#}

{% extends '@claro/content-edit/file-managed-file.html.twig' %}

{% set attributes = attributes.addClass('form-managed-file--image') %}
", "core/themes/claro/templates/content-edit/image-widget.html.twig", "/var/www/html/web/core/themes/claro/templates/content-edit/image-widget.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 24, "set" => 26];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'set'],
                [],
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
