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

/* themes/contrib/solo/templates/navigation/menu--footer-menu.html.twig */
class __TwigTemplate_9069c7290cbf0b9ac839fd2879671f50 extends Template
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
        // line 7
        yield "
";
        // line 8
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 9
        yield "
";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 15, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "

";
        // line 40
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 17
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 18
            yield "  ";
            $macros["menus"] = $this;
            // line 19
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 20
                yield "    <ul";
                if ((($context["menu_level"] ?? null) == 0)) {
                    yield " class=\"solo-footer-menu\" role=\"menubar\"";
                } else {
                    yield " class=\"solo-footer-menu__sublist\" role=\"menu\"";
                }
                yield ">
      ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 22
                    yield "        ";
                    // line 23
                    $context["classes"] = ["solo-footer-menu__item", ((CoreExtension::getAttribute($this->env, $this->source,                     // line 25
$context["item"], "is_expanded", [], "any", false, false, true, 25)) ? ("expanded") : (null)), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 26
$context["item"], "is_collapsed", [], "any", false, false, true, 26)) ? ("collapsed") : (null)), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 27
$context["item"], "in_active_trail", [], "any", false, false, true, 27)) ? ("is-active") : (null))];
                    // line 30
                    yield "        <li";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, true, true, 30), "addClass", [($context["classes"] ?? null)], "method", true, true, true, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 30), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 30), ($context["attributes"] ?? null))) : (($context["attributes"] ?? null))), "html", null, true);
                    yield " role=\"none\">
          ";
                    // line 31
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 31), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 31), ["role" => "menuitem"]), "html", null, true);
                    yield "
          ";
                    // line 32
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 32)) {
                        // line 33
                        yield "            ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 33, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 33), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                        yield "
          ";
                    }
                    // line 35
                    yield "        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/navigation/menu--footer-menu.html.twig";
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
        return array (  128 => 37,  121 => 35,  115 => 33,  113 => 32,  109 => 31,  104 => 30,  102 => 27,  101 => 26,  100 => 25,  99 => 23,  97 => 22,  93 => 21,  84 => 20,  81 => 19,  78 => 18,  64 => 17,  57 => 40,  52 => 15,  49 => 9,  47 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/navigation/menu--footer-menu.html.twig", "/var/www/html/web/themes/contrib/solo/templates/navigation/menu--footer-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 8, "macro" => 17, "if" => 19, "for" => 21, "set" => 23];
        static $filters = ["escape" => 30, "default" => 30];
        static $functions = ["link" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'default'],
                ['link'],
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
