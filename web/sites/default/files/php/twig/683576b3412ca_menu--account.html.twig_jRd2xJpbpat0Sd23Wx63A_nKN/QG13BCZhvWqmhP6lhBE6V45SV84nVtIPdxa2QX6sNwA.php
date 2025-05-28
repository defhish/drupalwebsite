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

/* themes/contrib/solo/templates/navigation/menu--account.html.twig */
class __TwigTemplate_bf5572d4a1efccc404cee6e26e46b433 extends Template
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
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        yield "
";
        // line 28
        yield "
<div class=\"solo-clear solo-menu navigation-default solo-account-menu\">
  ";
        // line 30
        if ((($context["login_popup_block"] ?? null) && (($context["current_path"] ?? null) != "/user/login"))) {
            // line 31
            yield "  <div id=\"login-button-open\" class=\"login-button-open\">
    <button class=\"solo-button-menu\" data-drupal-selector=\"login-block-button-open-inner\" aria-label=\"";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open Login Popup Block"));
            yield "\" aria-controls=\"popup-login-block\" aria-expanded=\"false\">
        <span>";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t(($context["login_text"] ?? null)));
            yield "</span>
        <span class=\"visually-hidden\">";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open Login Popup Block"));
            yield "</span>
    </button>
  </div>
  ";
        }
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 38, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0, ($context["menu_name"] ?? null), ($context["aria_id"] ?? null)]));
        yield "
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "login_popup_block", "current_path", "login_text", "items", "attributes", "menu_name", "aria_id", "loop"]);        yield from [];
    }

    // line 25
    public function macro_svg_icon($icon_value = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "icon_value" => $icon_value,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 26
            yield from $this->loadTemplate("@solo/partials/svg/_svg-menu-arrow.html.twig", "themes/contrib/solo/templates/navigation/menu--account.html.twig", 26)->unwrap()->yield($context);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 41
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, $menu_name = null, $aria_id = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "menu_name" => $menu_name,
            "aria_id" => $aria_id,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 42
            yield "
";
            // line 43
            $context["menu_level"] = (($context["menu_level"] ?? null) + 1);
            // line 44
            yield "
";
            // line 45
            $context["menu_classes"] = ["navigation__menubar", "navigation__default", ("navigation__menubar-" . \Drupal\Component\Utility\Html::getClass(            // line 48
($context["menu_name"] ?? null)))];
            // line 51
            yield "
";
            // line 52
            $context["submenu_classes"] = [("sub__menu sub__menu-" . \Drupal\Component\Utility\Html::getClass(            // line 53
($context["menu_name"] ?? null)))];
            // line 56
            yield "
";
            // line 57
            $context["menubar_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => (            // line 58
($context["menu_name"] ?? null) . \Drupal\Component\Utility\Html::getUniqueId("__menubar")), "role" => "menubar"]);
            // line 61
            yield "
";
            // line 62
            $context["submenu_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["id" => (            // line 63
($context["menu_name"] ?? null) . \Drupal\Component\Utility\Html::getUniqueId("__submenu")), "role" => "menu", "tabindex" => "-1", "aria-hidden" => "true"]);
            // line 68
            yield "
";
            // line 69
            if (($context["items"] ?? null)) {
                // line 70
                yield "
  ";
                // line 71
                if ((($context["menu_level"] ?? null) == 1)) {
                    // line 72
                    yield "  <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 72), "removeAttribute", ["region"], "method", false, false, true, 72), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["menubar_attributes"] ?? null), "html", null, true);
                    yield ">
  ";
                } else {
                    // line 74
                    yield "  <ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [($context["menu_classes"] ?? null)], "method", false, false, true, 74), "addClass", [($context["submenu_classes"] ?? null)], "method", false, false, true, 74), "html", null, true);
                    yield " ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["submenu_attributes"] ?? null), "html", null, true);
                    yield ">
  ";
                }
                // line 76
                yield "
  ";
                // line 78
                yield "  ";
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
                    // line 79
                    yield "
  ";
                    // line 81
                    yield "  ";
                    $context["system_path"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 81), "isRouted", [], "method", false, false, true, 81)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 81), "getInternalPath", [], "method", false, false, true, 81)) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 81), "toString", [], "method", false, false, true, 81)));
                    // line 82
                    yield "  ";
                    if ((($context["system_path"] ?? null) == "")) {
                        // line 83
                        yield "    ";
                        $context["system_path"] = "<front>";
                        // line 84
                        yield "  ";
                    }
                    // line 85
                    yield "
  ";
                    // line 86
                    $macros["͜macros"] = $this;
                    // line 87
                    yield "  ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getUniqueId(((($context["menu_name"] ?? null) . "-sub__menu-") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 87)));
                    // line 88
                    yield "  ";
                    $context["dropdown_toggler_class"] = (((($context["menu_level"] ?? null) == 1)) ? ("dropdown-toggler-parent") : ("dropdown-toggler-child"));
                    // line 89
                    yield "  ";
                    $context["rendered_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 89));
                    // line 90
                    yield "
  ";
                    // line 91
                    $context["item_classes"] = [("btn-animate nav__menu-item nav__menu-item-" . \Drupal\Component\Utility\Html::getClass(                    // line 92
($context["menu_name"] ?? null))), (((                    // line 93
$context["item"] && (($context["menu_level"] ?? null) == 1))) ? ("nav__menubar-item") : ("")), (((                    // line 94
$context["item"] && (($context["menu_level"] ?? null) > 1))) ? ("nav__submenu-item") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 95
$context["item"], "is_expanded", [], "any", false, false, true, 95)) ? ("has-sub__menu") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,                     // line 96
$context["item"], "is_expanded", [], "any", false, false, true, 96) && ((is_string($_v0 = ($context["rendered_url"] ?? null)) && is_string($_v1 = "/") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = ($context["rendered_url"] ?? null)) && is_string($_v3 = "http") && str_starts_with($_v2, $_v3))))) ? ("link-and-button") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,                     // line 97
$context["item"], "is_expanded", [], "any", false, false, true, 97) &&  !((is_string($_v4 = ($context["rendered_url"] ?? null)) && is_string($_v5 = "/") && str_starts_with($_v4, $_v5)) || (is_string($_v6 = ($context["rendered_url"] ?? null)) && is_string($_v7 = "http") && str_starts_with($_v6, $_v7))))) ? ("button-only") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,                     // line 98
$context["item"], "is_expanded", [], "any", false, false, true, 98)) ? ("link-only") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                     // line 99
$context["item"], "in_active_trail", [], "any", false, false, true, 99)) ? ("is-active") : (""))];
                    // line 102
                    yield "
  ";
                    // line 103
                    $context["dorpdown_toggler_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-drupal-selector" => ((                    // line 104
($context["menu_name"] ?? null) . "__level-") . (($context["menu_level"] ?? null) + 1)), "role" => "menuitem", "aria-controls" =>                     // line 106
($context["aria_id"] ?? null), "aria-haspopup" => "true", "aria-expanded" => "false", "tabindex" => "-1"]);
                    // line 111
                    yield "
    ";
                    // line 113
                    yield "    ";
                    $context["additional_classes"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, true, true, 113), "getOption", ["attributes"], "method", false, true, true, 113), "class", [], "any", true, true, true, 113)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 113), "getOption", ["attributes"], "method", false, false, true, 113), "class", [], "any", false, false, true, 113), "")) : (""));
                    // line 114
                    yield "    ";
                    $context["class_list"] = ((is_iterable(($context["additional_classes"] ?? null))) ? (Twig\Extension\CoreExtension::join(($context["additional_classes"] ?? null), " ")) : (($context["additional_classes"] ?? null)));
                    // line 115
                    yield "
    ";
                    // line 117
                    yield "    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 117)) {
                        // line 118
                        yield "    <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 118), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 118), "html", null, true);
                        yield " role='none'>
    ";
                        // line 119
                        if (((is_string($_v8 = ($context["rendered_url"] ?? null)) && is_string($_v9 = "/") && str_starts_with($_v8, $_v9)) || (is_string($_v10 = ($context["rendered_url"] ?? null)) && is_string($_v11 = "http") && str_starts_with($_v10, $_v11)))) {
                            // line 120
                            yield "        ";
                            // line 121
                            yield "        ";
                            $context["c_link_classes"] = [("nav__menu-link nav__menu-link-" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))), "url-added"];
                            // line 122
                            yield "        ";
                            if (($context["class_list"] ?? null)) {
                                // line 123
                                yield "            ";
                                $context["c_link_classes"] = Twig\Extension\CoreExtension::merge(($context["c_link_classes"] ?? null), [($context["class_list"] ?? null)]);
                                // line 124
                                yield "        ";
                            }
                            // line 125
                            yield "        <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 125), "html", null, true);
                            yield "\" class=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["c_link_classes"] ?? null), " "), "html", null, true);
                            yield "\"";
                            // line 126
                            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 126), "getOption", ["attributes"], "method", false, false, true, 126), "title", [], "any", false, false, true, 126)) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 126), "getOption", ["attributes"], "method", false, false, true, 126), "title", [], "any", false, false, true, 126), "html", null, true);
                                yield "\" ";
                            }
                            // line 127
                            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 127), "getOption", ["attributes"], "method", false, false, true, 127), "target", [], "any", false, false, true, 127)) {
                                yield " target=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 127), "getOption", ["attributes"], "method", false, false, true, 127), "target", [], "any", false, false, true, 127), "html", null, true);
                                yield "\" ";
                            }
                            // line 128
                            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 128), "getOption", ["attributes"], "method", false, false, true, 128), "rel", [], "any", false, false, true, 128)) {
                                yield " rel=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 128), "getOption", ["attributes"], "method", false, false, true, 128), "rel", [], "any", false, false, true, 128), "html", null, true);
                                yield "\" ";
                            }
                            // line 129
                            if ((($context["menu_level"] ?? null) == 1)) {
                                yield " tabindex=\"0\" ";
                            } else {
                                yield " tabindex=\"-1\" ";
                            }
                            // line 130
                            yield "            data-drupal-link-system-path=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["system_path"] ?? null), "html", null, true);
                            yield "\" role='menuitem'>
            <span class=\"menu__url-title-enabled\">";
                            // line 131
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 131), "html", null, true);
                            yield "</span>
        </a>
        <button class=\"en-link dropdown-toggler ";
                            // line 133
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dropdown_toggler_class"] ?? null), "html", null, true);
                            yield "\" ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dorpdown_toggler_attributes"] ?? null), "html", null, true);
                            yield ">
            <span class=\"visually-hidden\">";
                            // line 134
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 134)]));
                            yield "</span>
            <span class=\"toggler-icon dropdown-arrow\">";
                            // line 135
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["͜macros"]->getTemplateForMacro("macro_svg_icon", $context, 135, $this->getSourceContext())->macro_svg_icon(...["M6 9l6 6 6-6"]));
                            yield "</span>
        </button>
    ";
                        } else {
                            // line 138
                            yield "        ";
                            // line 139
                            yield "        <button class=\"ds-link dropdown-toggler ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dropdown_toggler_class"] ?? null), "html", null, true);
                            yield " ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["class_list"] ?? null), "html", null, true);
                            yield "\" ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["dorpdown_toggler_attributes"] ?? null), "html", null, true);
                            // line 140
                            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 140), "getOption", ["attributes"], "method", false, false, true, 140), "title", [], "any", false, false, true, 140)) {
                                yield " title=\"";
                                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 140), "getOption", ["attributes"], "method", false, false, true, 140), "title", [], "any", false, false, true, 140), "html", null, true);
                                yield "\" ";
                            }
                            yield ">
            <span class=\"menu__url-title-disabled\">";
                            // line 141
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 141), "html", null, true);
                            yield "</span>
            <span class=\"visually-hidden\">";
                            // line 142
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 142)]));
                            yield "</span>
            <span class=\"toggler-icon dropdown-arrow\">";
                            // line 143
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["͜macros"]->getTemplateForMacro("macro_svg_icon", $context, 143, $this->getSourceContext())->macro_svg_icon(...["M6 9l6 6 6-6"]));
                            yield "</span>
        </button>
    ";
                        }
                        // line 146
                        yield "
    ";
                    } else {
                        // line 147
                        yield " ";
                        // line 148
                        yield "    ";
                        $context["link_classes"] = [("nav__menu-link nav__menu-link-" . \Drupal\Component\Utility\Html::getClass(                        // line 149
($context["menu_name"] ?? null)))];
                        // line 152
                        yield "    ";
                        $context["link_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                            // line 153
                            yield "      <span class=\"menu__url-title\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 153), "html", null, true);
                            yield "</span>
    ";
                            yield from [];
                        })())) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 155
                        yield "    <li";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 155), "addClass", [($context["item_classes"] ?? null)], "method", false, false, true, 155), "html", null, true);
                        yield " role='none'>
      ";
                        // line 156
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(                        // line 157
($context["link_title"] ?? null), CoreExtension::getAttribute($this->env, $this->source,                         // line 158
$context["item"], "url", [], "any", false, false, true, 158), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 159
$context["item"], "attributes", [], "any", false, false, true, 159), "removeClass", [($context["item_classes"] ?? null)], "method", false, false, true, 159), "addClass", [($context["link_classes"] ?? null)], "method", false, false, true, 159), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 160
$context["item"], "attributes", [], "any", false, false, true, 160), "setAttribute", ["role", "menuitem"], "method", false, false, true, 160), "setAttribute", ["tabindex", (((($context["menu_level"] ?? null) == 1)) ? ("0") : ("-1"))], "method", false, false, true, 160)), "html", null, true);
                        // line 162
                        yield "
    ";
                    }
                    // line 164
                    yield "
    ";
                    // line 165
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 165)) {
                        // line 166
                        yield "      ";
                        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", ["id", ($context["aria_id"] ?? null)], "method", false, false, true, 166), "setAttribute", ["tabindex", "-1"], "method", false, false, true, 166);
                        // line 167
                        yield "      ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 167, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 167), ($context["attributes"] ?? null), ($context["menu_level"] ?? null), ($context["menu_name"] ?? null)]));
                        yield "
    ";
                    }
                    // line 169
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
                // line 172
                yield "  </ul>
";
            }
            // line 173
            yield " ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/navigation/menu--account.html.twig";
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
        return array (  434 => 173,  430 => 172,  414 => 169,  408 => 167,  405 => 166,  403 => 165,  400 => 164,  396 => 162,  394 => 160,  393 => 159,  392 => 158,  391 => 157,  390 => 156,  385 => 155,  378 => 153,  375 => 152,  373 => 149,  371 => 148,  369 => 147,  365 => 146,  359 => 143,  355 => 142,  351 => 141,  343 => 140,  336 => 139,  334 => 138,  328 => 135,  324 => 134,  318 => 133,  313 => 131,  308 => 130,  302 => 129,  296 => 128,  290 => 127,  284 => 126,  278 => 125,  275 => 124,  272 => 123,  269 => 122,  266 => 121,  264 => 120,  262 => 119,  257 => 118,  254 => 117,  251 => 115,  248 => 114,  245 => 113,  242 => 111,  240 => 106,  239 => 104,  238 => 103,  235 => 102,  233 => 99,  232 => 98,  231 => 97,  230 => 96,  229 => 95,  228 => 94,  227 => 93,  226 => 92,  225 => 91,  222 => 90,  219 => 89,  216 => 88,  213 => 87,  211 => 86,  208 => 85,  205 => 84,  202 => 83,  199 => 82,  196 => 81,  193 => 79,  175 => 78,  172 => 76,  164 => 74,  156 => 72,  154 => 71,  151 => 70,  149 => 69,  146 => 68,  144 => 63,  143 => 62,  140 => 61,  138 => 58,  137 => 57,  134 => 56,  132 => 53,  131 => 52,  128 => 51,  126 => 48,  125 => 45,  122 => 44,  120 => 43,  117 => 42,  101 => 41,  95 => 26,  83 => 25,  73 => 38,  66 => 34,  62 => 33,  58 => 32,  55 => 31,  53 => 30,  49 => 28,  46 => 24,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/navigation/menu--account.html.twig", "/var/www/html/web/themes/contrib/solo/templates/navigation/menu--account.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 23, "macro" => 25, "if" => 30, "include" => 26, "set" => 43, "for" => 78];
        static $filters = ["t" => 32, "clean_class" => 48, "clean_unique_id" => 58, "escape" => 72, "render" => 89, "default" => 113, "join" => 114, "merge" => 123];
        static $functions = ["create_attribute" => 57, "link" => 156];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'include', 'set', 'for'],
                ['t', 'clean_class', 'clean_unique_id', 'escape', 'render', 'default', 'join', 'merge'],
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
