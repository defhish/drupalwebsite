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

/* themes/contrib/solo/templates/navigation/menu-local-task.html.twig */
class __TwigTemplate_c8937b639b800d4c3f79efeeecb34201 extends Template
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
        // line 17
        yield "
";
        // line 19
        $context["classes"] = ["solo-button", "task-local", ((        // line 22
($context["is_active"] ?? null)) ? ("is-active") : (""))];
        // line 25
        $context["route_name"] = CoreExtension::getAttribute($this->env, $this->source, (($_v0 = (($_v1 = ($context["element"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#link"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#link", [], "array", false, false, true, 25))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = ($context["element"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#link"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#link", [], "array", false, false, true, 25)), "url", [], "array", false, false, true, 25)), "getRouteName", [], "method", false, false, true, 25);
        // line 26
        yield "
";
        // line 28
        if ((($context["route_name"] ?? null) == "entity.node.canonical")) {
            // line 29
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["core-task view-task"]);
            // line 30
            yield "  ";
            $context["icon_include"] = "@solo/partials/svg/_view-icon.html.twig";
        } elseif ((        // line 31
($context["route_name"] ?? null) == "entity.node.edit_form")) {
            // line 32
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["core-task edit-task"]);
            // line 33
            yield "  ";
            $context["icon_include"] = "@solo/partials/svg/_edit-icon.html.twig";
        } elseif ((        // line 34
($context["route_name"] ?? null) == "entity.node.delete_form")) {
            // line 35
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["core-task delete-task"]);
            // line 36
            yield "  ";
            $context["icon_include"] = "@solo/partials/svg/_delete-icon.html.twig";
        } elseif ((        // line 37
($context["route_name"] ?? null) == "entity.node.version_history")) {
            // line 38
            yield "  ";
            $context["classes"] = Twig\Extension\CoreExtension::merge(($context["classes"] ?? null), ["core-task revisions-task"]);
            // line 39
            yield "  ";
            $context["icon_include"] = "@solo/partials/svg/_revisions-icon.html.twig";
        } else {
            // line 41
            yield "  ";
            $context["icon_include"] = "";
        }
        // line 43
        yield "
<li";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 44), "html", null, true);
        yield ">
  ";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true);
        yield "
  ";
        // line 46
        if (($context["icon_include"] ?? null)) {
            // line 47
            yield "    ";
            yield from $this->loadTemplate(($context["icon_include"] ?? null), "themes/contrib/solo/templates/navigation/menu-local-task.html.twig", 47)->unwrap()->yield($context);
            // line 48
            yield "  ";
        }
        // line 49
        yield "</li>


";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["is_active", "element", "attributes", "link"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/navigation/menu-local-task.html.twig";
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
        return array (  111 => 49,  108 => 48,  105 => 47,  103 => 46,  99 => 45,  95 => 44,  92 => 43,  88 => 41,  84 => 39,  81 => 38,  79 => 37,  76 => 36,  73 => 35,  71 => 34,  68 => 33,  65 => 32,  63 => 31,  60 => 30,  57 => 29,  55 => 28,  52 => 26,  50 => 25,  48 => 22,  47 => 19,  44 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/navigation/menu-local-task.html.twig", "/var/www/html/web/themes/contrib/solo/templates/navigation/menu-local-task.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 19, "if" => 28, "include" => 47];
        static $filters = ["merge" => 29, "escape" => 44];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['merge', 'escape'],
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
