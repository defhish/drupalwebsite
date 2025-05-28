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

/* themes/contrib/solo/templates/navigation/menu--primary-menu.html.twig */
class __TwigTemplate_1ca8f3c5ba0d37edda6ae443f6a41f0a extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        yield "
";
        // line 23
        $context["svg_bars"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 24
            yield from $this->loadTemplate("@solo/partials/svg/_svg-bars.html.twig", "themes/contrib/solo/templates/navigation/menu--primary-menu.html.twig", 24)->unwrap()->yield($context);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 26
        yield "
";
        // line 30
        yield "
<div class=\"solo-clear solo-menu navigation-responsive navigation-primary-responsive";
        // line 31
        yield ((($context["click_hover"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["click_hover"] ?? null)), "html", null, true)) : (""));
        yield ((($context["remove_arrow"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["remove_arrow"] ?? null)), "html", null, true)) : (""));
        yield ((($context["menu_alignment"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["menu_alignment"] ?? null)), "html", null, true)) : (""));
        yield ((($context["expand_left"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["expand_left"] ?? null)), "html", null, true)) : (""));
        yield ((($context["primary_menu_branding"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["primary_menu_branding"] ?? null)), "html", null, true)) : (""));
        yield "\">

  ";
        // line 33
        if (($context["primary_menu_branding"] ?? null)) {
            // line 34
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_menu-branding.html.twig", "themes/contrib/solo/templates/navigation/menu--primary-menu.html.twig", 34)->unwrap()->yield($context);
            // line 35
            yield "  ";
        }
        // line 36
        yield "
  <div class=\"mobile-nav hamburger-icon solo-block\">
    <button class=\"solo-button-menu mobile-menubar-toggler-button\" data-drupal-selector=\"mobile-menubar-toggler-button\" tabindex='-1' aria-label=\"";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open or Close horizontal Main Menu"));
        yield "\" aria-expanded=\"false\">
      <span>
        ";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["svg_bars"] ?? null));
        yield "
      </span>
      <span class=\"visually-hidden\">";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open or Close horizontal Main Menu"));
        yield "</span>
    </button>
  </div>
";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 45, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null), ($context["aria_id"] ?? null), ($context["megamenu"] ?? null), ($context["megamenu_layout"] ?? null), ($context["sub_mega"] ?? null), ($context["sub_menu_header"] ?? null)]));
        yield "
</div>

";
        // line 183
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "click_hover", "remove_arrow", "menu_alignment", "expand_left", "primary_menu_branding", "items", "attributes", "menu_name", "aria_id", "megamenu", "megamenu_layout", "sub_mega", "sub_menu_header", "loop"]);        yield from [];
    }

    // line 27
    public function macro_svg_icon($icon_value = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "icon_value" => $icon_value,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 28
            yield from $this->loadTemplate("@solo/partials/svg/_svg-menu-arrow.html.twig", "themes/contrib/solo/templates/navigation/menu--primary-menu.html.twig", 28)->unwrap()->yield($context);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 48
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, $menu_name = null, $aria_id = null, $megamenu = null, $megamenu_layout = null, $sub_mega = null, $sub_menu_header = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "menu_name" => $menu_name,
            "aria_id" => $aria_id,
            "megamenu" => $megamenu,
            "megamenu_layout" => $megamenu_layout,
            "sub_mega" => $sub_mega,
            "sub_menu_header" => $sub_menu_header,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 49
            yield "
";
            // line 50
            $context["menu_level"] = (($context["menu_level"] ?? null) + 1);
            // line 51
            yield "
";
            // line 52
            $context["menu_classes"] = ["navigation__menubar", "navigation__responsive", "navigation__primary", \Drupal\Component\Utility\Html::getClass(            // line 56
($context["megamenu"] ?? null)), \Drupal\Component\Utility\Html::getClass(            // line 57
($context["megamenu_layout"] ?? null)), ("navigation__menubar-" . \Drupal\Component\Utility\Html::getClass(            // line 58
($context["menu_name"] ?? null)))];
            // line 61
            yield "
";
            // line 62
            $context["submenu_classes"] = [("sub__menu sub__menu-" . \Drupal\Component\Utility\Html::getClass(            // line 63
($context["menu_name"] ?? null))), \Drupal\Component\Utility\Html::getClass(            // line 64
($context["sub_mega"] ?? null)), \Drupal\Component\Utility\Html::getClass(            // line 65
($context["sub_menu_header"] ?? null))];
            // line 68
            yield "
";
            // line 69
            $context["menubar_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => (            // line 70
($context["menu_name"] ?? null) . \Drupal\Component\Utility\Html::getUniqueId("__menubar")), "role" => "menubar"]);
            // line 73
            yield "
";
            // line 74
            $context["submenu_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => (            // line 75
($context["menu_name"] ?? null) . \Drupal\Component\Utility\Html::getUniqueId("__submenu")), "role" => "menu", "tabindex" => "-1", "aria-hidden" => "true"]);
            // line 80
            yield "
";
            // line 81
            if (($context["items"] ?? null)) {
                // line 82
                yield "
  ";
                // line 83
                if ((($context["menu_level"] ?? null) == 1)) {
                    // line 84
                    yield "  <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 84), "removeAttribute", ["region"], "method", false, false, true, 84), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menubar_attributes"] ?? null), "html", null, true);
                    yield ">
  ";
                } else {
                    // line 86
                    yield "  <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 86), "addClass", [($context["submenu_classes"] ?? null)], "method", false, false, true, 86), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["submenu_attributes"] ?? null), "html", null, true);
                    yield ">
  ";
                }
                // line 88
                yield "
    ";
                // line 90
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 91
                    yield "
    ";
                    // line 93
                    yield "    ";
                    $context["system_path"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 93), "isRouted", [], "method", false, false, true, 93)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 93), "getInternalPath", [], "method", false, false, true, 93)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 93), "toString", [], "method", false, false, true, 93)));
                    // line 94
                    yield "    ";
                    if ((($context["system_path"] ?? null) == "")) {
                        // line 95
                        yield "      ";
                        $context["system_path"] = "<front>";
                        // line 96
                        yield "    ";
                    }
                    // line 97
                    yield "
    ";
                    // line 98
                    $macros["͜macros"] = $this;
                    // line 99
                    yield "    ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getUniqueId(((($context["menu_name"] ?? null) . "-sub__menu-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 99)));
                    // line 100
                    yield "    ";
                    $context["dropdown_toggler_class"] = (((($context["menu_level"] ?? null) == 1)) ? ("dropdown-toggler-parent") : ("dropdown-toggler-child"));
                    // line 101
                    yield "    ";
                    $context["rendered_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 101));
                    // line 102
                    yield "
    ";
                    // line 103
                    $context["item_classes"] = [("btn-animate nav__menu-item nav__menu-item-" . \Drupal\Component\Utility\Html::getClass(                    // line 104
($context["menu_name"] ?? null))), (((                    // line 105
$context["item"] && (($context["menu_level"] ?? null) == 1))) ? ("nav__menubar-item") : ("")), (((                    // line 106
$context["item"] && (($context["menu_level"] ?? null) > 1))) ? ("nav__submenu-item") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 107
$context["item"], "is_expanded", [], "any", false, false, true, 107)) ? ("has-sub__menu") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,                     // line 108
$context["item"], "is_expanded", [], "any", false, false, true, 108) && ((is_string($_v0 = ($context["rendered_url"] ?? null)) && is_string($_v1 = "/") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = ($context["rendered_url"] ?? null)) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))))) ? ("link-and-button") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,                     // line 109
$context["item"], "is_expanded", [], "any", false, false, true, 109) &&  !((is_string($_v4 = ($context["rendered_url"] ?? null)) && is_string($_v5 = "/") && str_starts_with($_v4, $_v5)) || (is_string($_v6 = ($context["rendered_url"] ?? null)) && is_string($_v7 = "http") && str_starts_with($_v6, $_v7))))) ? ("button-only") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,                     // line 110
$context["item"], "is_expanded", [], "any", false, false, true, 110)) ? ("link-only") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 111
$context["item"], "in_active_trail", [], "any", false, false, true, 111)) ? ("is-active") : (""))];
                    // line 114
                    yield "
    ";
                    // line 115
                    $context["dorpdown_toggler_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-drupal-selector" =>                     // line 116
($context["aria_id"] ?? null), "role" => "menuitem", "aria-controls" =>                     // line 118
($context["aria_id"] ?? null), "aria-haspopup" => "true", "aria-expanded" => "false", "tabindex" => "-1"]);
                    // line 123
                    yield "
    ";
                    // line 125
                    yield "    ";
                    $context["additional_classes"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, true, true, 125), "getOption", ["attributes"], "method", false, true, true, 125), "class", [], "any", true, true, true, 125)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 125), "getOption", ["attributes"], "method", false, false, true, 125), "class", [], "any", false, false, true, 125), "")) : (""));
                    // line 126
                    yield "    ";
                    $context["class_list"] = ((is_iterable(($context["additional_classes"] ?? null))) ? (Twig\Extension\CoreExtension::join(($context["additional_classes"] ?? null), " ")) : (($context["additional_classes"] ?? null)));
                    // line 127
                    yield "
    ";
                    // line 129
                    yield "    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 129)) {
                        // line 130
                        yield "    <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 130), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 130), "html", null, true);
                        yield " role='none'>
    ";
                        // line 131
                        if (((is_string($_v8 = ($context["rendered_url"] ?? null)) && is_string($_v9 = "/") && str_starts_with($_v8, $_v9)) || (is_string($_v10 = ($context["rendered_url"] ?? null)) && is_string($_v11 = "http") && str_starts_with($_v10, $_v11)))) {
                            // line 132
                            yield "        ";
                            // line 133
                            yield "        ";
                            $context["c_link_classes"] = [("nav__menu-link nav__menu-link-" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))), "url-added"];
                            // line 134
                            yield "        ";
                            if (($context["class_list"] ?? null)) {
                                // line 135
                                yield "            ";
                                $context["c_link_classes"] = Twig\Extension\CoreExtension::merge(($context["c_link_classes"] ?? null), [($context["class_list"] ?? null)]);
                                // line 136
                                yield "        ";
                            }
                            // line 137
                            yield "        <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 137), "html", null, true);
                            yield "\" class=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["c_link_classes"] ?? null), " "), "html", null, true);
                            yield "\"";
                            // line 138
                            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 138), "getOption", ["attributes"], "method", false, false, true, 138), "title", [], "any", false, false, true, 138)) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 138), "getOption", ["attributes"], "method", false, false, true, 138), "title", [], "any", false, false, true, 138), "html", null, true);
                                yield "\" ";
                            }
                            // line 139
                            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 139), "getOption", ["attributes"], "method", false, false, true, 139), "target", [], "any", false, false, true, 139)) {
                                yield " target=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 139), "getOption", ["attributes"], "method", false, false, true, 139), "target", [], "any", false, false, true, 139), "html", null, true);
                                yield "\" ";
                            }
                            // line 140
                            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 140), "getOption", ["attributes"], "method", false, false, true, 140), "rel", [], "any", false, false, true, 140)) {
                                yield " rel=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 140), "getOption", ["attributes"], "method", false, false, true, 140), "rel", [], "any", false, false, true, 140), "html", null, true);
                                yield "\" ";
                            }
                            // line 141
                            yield "tabindex=\"-1\" data-drupal-link-system-path=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["system_path"] ?? null), "html", null, true);
                            yield "\" role='menuitem'>
            <span class=\"menu__url-title-enabled\">";
                            // line 142
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 142), "html", null, true);
                            yield "</span>
        </a>
        <button class=\"en-link dropdown-toggler ";
                            // line 144
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dropdown_toggler_class"] ?? null), "html", null, true);
                            yield "\" ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dorpdown_toggler_attributes"] ?? null), "html", null, true);
                            yield ">
            <span class=\"visually-hidden\">";
                            // line 145
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 145)]));
                            yield "</span>
            <span class=\"toggler-icon dropdown-arrow\">";
                            // line 146
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["͜macros"]->getTemplateForMacro("macro_svg_icon", $context, 146, $this->getSourceContext())->macro_svg_icon(...["M6 9l6 6 6-6"]));
                            yield "</span>
        </button>
    ";
                        } else {
                            // line 149
                            yield "        ";
                            // line 150
                            yield "        <button class=\"ds-link dropdown-toggler ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dropdown_toggler_class"] ?? null), "html", null, true);
                            yield " ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["class_list"] ?? null), "html", null, true);
                            yield "\" ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dorpdown_toggler_attributes"] ?? null), "html", null, true);
                            // line 151
                            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 151), "getOption", ["attributes"], "method", false, false, true, 151), "title", [], "any", false, false, true, 151)) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 151), "getOption", ["attributes"], "method", false, false, true, 151), "title", [], "any", false, false, true, 151), "html", null, true);
                                yield "\" ";
                            }
                            yield ">
            <span class=\"menu__url-title-disabled\">";
                            // line 152
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 152), "html", null, true);
                            yield "</span>
            <span class=\"visually-hidden\">";
                            // line 153
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 153)]));
                            yield "</span>
            <span class=\"toggler-icon dropdown-arrow\">";
                            // line 154
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["͜macros"]->getTemplateForMacro("macro_svg_icon", $context, 154, $this->getSourceContext())->macro_svg_icon(...["M6 9l6 6 6-6"]));
                            yield "</span>
        </button>
    ";
                        }
                        // line 157
                        yield "
    ";
                    } else {
                        // line 158
                        yield " ";
                        // line 159
                        yield "      ";
                        $context["link_classes"] = [("nav__menu-link nav__menu-link-" . \Drupal\Component\Utility\Html::getClass(                        // line 160
($context["menu_name"] ?? null)))];
                        // line 163
                        yield "      ";
                        $context["link_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 164
                            yield "        <span class=\"menu__url-title\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 164), "html", null, true);
                            yield "</span>
      ";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 166
                        yield "    <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 166), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 166), "html", null, true);
                        yield " role='none'>
        ";
                        // line 167
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(                        // line 168
($context["link_title"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                         // line 169
$context["item"], "url", [], "any", false, false, true, 169), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 170
$context["item"], "attributes", [], "any", false, false, true, 170), "removeClass", [($context["item_classes"] ?? null)], "method", false, false, true, 170), "addClass", [($context["link_classes"] ?? null)], "method", false, false, true, 170), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 171
$context["item"], "attributes", [], "any", false, false, true, 171), "setAttribute", ["role", "menuitem"], "method", false, false, true, 171), "setAttribute", ["tabindex", "-1"], "method", false, false, true, 171)), "html", null, true);
                        yield "
    ";
                    }
                    // line 173
                    yield "
    ";
                    // line 174
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 174)) {
                        // line 175
                        yield "      ";
                        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 175), "setAttribute", ["tabindex", "-1"], "method", false, false, true, 175);
                        // line 176
                        yield "      ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 176, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 176), ($context["attributes"] ?? null), ($context["menu_level"] ?? null), ($context["menu_name"] ?? null), ($context["aria_id"] ?? null), ($context["megamenu"] ?? null), ($context["megamenu_layout"] ?? null), ($context["sub_mega"] ?? null), ($context["sub_menu_header"] ?? null)]));
                        yield "
    ";
                    }
                    // line 178
                    yield "    </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                yield "  </ul>
";
            }
            // line 181
            yield " ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/navigation/menu--primary-menu.html.twig";
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
        return array (  462 => 181,  458 => 180,  443 => 178,  437 => 176,  434 => 175,  432 => 174,  429 => 173,  424 => 171,  423 => 170,  422 => 169,  421 => 168,  420 => 167,  415 => 166,  408 => 164,  405 => 163,  403 => 160,  401 => 159,  399 => 158,  395 => 157,  389 => 154,  385 => 153,  381 => 152,  373 => 151,  366 => 150,  364 => 149,  358 => 146,  354 => 145,  348 => 144,  343 => 142,  338 => 141,  332 => 140,  326 => 139,  320 => 138,  314 => 137,  311 => 136,  308 => 135,  305 => 134,  302 => 133,  300 => 132,  298 => 131,  293 => 130,  290 => 129,  287 => 127,  284 => 126,  281 => 125,  278 => 123,  276 => 118,  275 => 116,  274 => 115,  271 => 114,  269 => 111,  268 => 110,  267 => 109,  266 => 108,  265 => 107,  264 => 106,  263 => 105,  262 => 104,  261 => 103,  258 => 102,  255 => 101,  252 => 100,  249 => 99,  247 => 98,  244 => 97,  241 => 96,  238 => 95,  235 => 94,  232 => 93,  229 => 91,  211 => 90,  208 => 88,  200 => 86,  192 => 84,  190 => 83,  187 => 82,  185 => 81,  182 => 80,  180 => 75,  179 => 74,  176 => 73,  174 => 70,  173 => 69,  170 => 68,  168 => 65,  167 => 64,  166 => 63,  165 => 62,  162 => 61,  160 => 58,  159 => 57,  158 => 56,  157 => 52,  154 => 51,  152 => 50,  149 => 49,  129 => 48,  123 => 28,  111 => 27,  104 => 183,  98 => 45,  92 => 42,  87 => 40,  82 => 38,  78 => 36,  75 => 35,  72 => 34,  70 => 33,  61 => 31,  58 => 30,  55 => 26,  51 => 24,  49 => 23,  46 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/navigation/menu--primary-menu.html.twig", "/var/www/html/web/themes/contrib/solo/templates/navigation/menu--primary-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 21, "set" => 23, "include" => 24, "macro" => 27, "if" => 33, "for" => 90];
        static $filters = ["escape" => 31, "t" => 38, "raw" => 40, "clean_class" => 56, "clean_unique_id" => 70, "render" => 101, "default" => 125, "join" => 126, "merge" => 135];
        static $functions = ["create_attribute" => 69, "link" => 167];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'include', 'macro', 'if', 'for'],
                ['escape', 't', 'raw', 'clean_class', 'clean_unique_id', 'render', 'default', 'join', 'merge'],
                ['create_attribute', 'link'],
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
