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

/* themes/contrib/solo/templates/layout/html.html.twig */
class __TwigTemplate_280a991e4f2ae29d6d334d6c70bd469b extends Template
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
        // line 26
        $context["body_classes"] = [((        // line 27
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 28
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), ((        // line 29
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), ((        // line 30
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 33
        yield "<!DOCTYPE html>
<html";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
        yield ">
  <head>
    <head-placeholder token=\"";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
    <title>";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
    <js-placeholder token=\"";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
  </head>
  <body";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 41), "html", null, true);
        yield ">
    ";
        // line 46
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["enabled_skip_links"] ?? null), "skip_header_content", [], "any", false, false, true, 46)) {
            // line 47
            yield "      <a href=\"#header-content\" class=\"visually-hidden focusable skip-link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to header"));
            yield "</a>
    ";
        }
        // line 49
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["enabled_skip_links"] ?? null), "skip_navigation_content", [], "any", false, false, true, 49)) {
            // line 50
            yield "      <a href=\"#main-navigation-content\" class=\"visually-hidden focusable skip-link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main navigation"));
            yield "</a>
    ";
        }
        // line 52
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["enabled_skip_links"] ?? null), "skip_main_content", [], "any", false, false, true, 52)) {
            // line 53
            yield "      <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
            yield "</a>
    ";
        }
        // line 55
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["enabled_skip_links"] ?? null), "skip_footer_content", [], "any", false, false, true, 55)) {
            // line 56
            yield "      <a href=\"#footer-content\" class=\"visually-hidden focusable skip-link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to footer"));
            yield "</a>
    ";
        }
        // line 58
        yield "
    ";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true);
        yield "
    ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true);
        yield "
    ";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "html_attributes", "placeholder_token", "head_title", "attributes", "enabled_skip_links", "page_top", "page", "page_bottom"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/layout/html.html.twig";
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
        return array (  130 => 62,  126 => 61,  122 => 60,  118 => 59,  115 => 58,  109 => 56,  106 => 55,  100 => 53,  97 => 52,  91 => 50,  88 => 49,  82 => 47,  79 => 46,  75 => 41,  70 => 39,  66 => 38,  62 => 37,  58 => 36,  53 => 34,  50 => 33,  48 => 30,  47 => 29,  46 => 28,  45 => 27,  44 => 26,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/layout/html.html.twig", "/var/www/html/web/themes/contrib/solo/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 26, "if" => 46];
        static $filters = ["clean_class" => 28, "escape" => 34, "safe_join" => 37, "t" => 47];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'safe_join', 't'],
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
