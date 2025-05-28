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

/* themes/contrib/solo/templates/layout/page.html.twig */
class __TwigTemplate_5b9f79ca53dd0189c9945f5d2e586b89 extends Template
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
        // line 59
        $context["svg_bars"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 60
            yield from $this->loadTemplate("@solo/partials/svg/_svg-bars.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 60)->unwrap()->yield($context);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        $context["svg_search"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 63
            yield from $this->loadTemplate("@solo/partials/svg/_svg-search.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 63)->unwrap()->yield($context);
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 65
        yield "
<!-- Start: Page Wrapper -->
";
        // line 67
        $context["page_wrapper_classes"] = ((((((((((((("page-wrapper" . ((        // line 68
($context["site_width_class"] ?? null)) ? ((" " . ($context["site_width_class"] ?? null))) : (""))) . ((        // line 69
($context["site_global_breakpoints"] ?? null)) ? ((" " . ($context["site_global_breakpoints"] ?? null))) : (""))) . ((        // line 70
($context["site_menu_breakpoints"] ?? null)) ? ((" " . ($context["site_menu_breakpoints"] ?? null))) : (""))) . ((        // line 71
($context["site_pagetitle_google_font"] ?? null)) ? ((" " . ($context["site_pagetitle_google_font"] ?? null))) : (""))) . ((        // line 72
($context["site_pagetitle_animate_on"] ?? null)) ? ((" " . ($context["site_pagetitle_animate_on"] ?? null))) : (""))) . ((        // line 73
($context["site_pagetitle_center"] ?? null)) ? ((" " . ($context["site_pagetitle_center"] ?? null))) : (""))) . ((        // line 74
($context["title_size_l"] ?? null)) ? ((" " . ($context["title_size_l"] ?? null))) : (""))) . ((        // line 75
($context["title_size_s"] ?? null)) ? ((" " . ($context["title_size_s"] ?? null))) : (""))) . ((        // line 76
($context["classes_page_wrapper"] ?? null)) ? ((" " . ($context["classes_page_wrapper"] ?? null))) : (""))) . ((        // line 77
($context["opacity_page_wrapper"] ?? null)) ? (" solo__fade-in") : (""))) . ((        // line 78
($context["site_breadcrumb_scroll"] ?? null)) ? (" solo__bc-scroll") : (""))) . ((        // line 79
($context["site_regions_collapse_order"] ?? null)) ? (" solo__collapse-order") : (""))) . ((        // line 80
($context["site_inline_items_on"] ?? null)) ? (" solo__inline-items") : ("")));
        // line 82
        yield "
<div id=\"page-wrapper\" class=\"";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_wrapper_classes"] ?? null), "html", null, true);
        yield "\" ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_page_wrapper"] ?? null), "html", null, true);
        yield ">

  ";
        // line 85
        if ((($context["site_regions_highlighted_disable"] ?? null) == 0)) {
            // line 86
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_highlighted.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 86)->unwrap()->yield($context);
            // line 87
            yield "  ";
        }
        // line 88
        yield "  ";
        if (((($context["site_regions_highlighted_disable"] ?? null) == 1) && ($context["is_front"] ?? null))) {
            // line 89
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_highlighted.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 89)->unwrap()->yield($context);
            // line 90
            yield "  ";
        }
        // line 91
        yield "  ";
        if (((($context["site_regions_highlighted_disable"] ?? null) == 2) &&  !($context["is_front"] ?? null))) {
            // line 92
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_highlighted.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 92)->unwrap()->yield($context);
            // line 93
            yield "  ";
        }
        // line 94
        yield "
  ";
        // line 95
        yield from $this->loadTemplate("@solo/partials/_primary-sidebar-menu.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 95)->unwrap()->yield($context);
        // line 96
        yield "
  ";
        // line 97
        yield from $this->loadTemplate("@solo/partials/_fixed-search-block.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 97)->unwrap()->yield($context);
        // line 98
        yield "
  ";
        // line 99
        yield from $this->loadTemplate("@solo/partials/_popup-login-block.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 99)->unwrap()->yield($context);
        // line 100
        yield "
  ";
        // line 101
        if (($context["site_flip_header_menu"] ?? null)) {
            // line 102
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_primary-menu.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 102)->unwrap()->yield($context);
            // line 103
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_header.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 103)->unwrap()->yield($context);
            // line 104
            yield "  ";
        } else {
            // line 105
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_header.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 105)->unwrap()->yield($context);
            // line 106
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_primary-menu.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 106)->unwrap()->yield($context);
            // line 107
            yield "  ";
        }
        // line 108
        yield "
  ";
        // line 109
        if ((($context["site_regions_welcome_disable"] ?? null) == 0)) {
            // line 110
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_welcome-text.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 110)->unwrap()->yield($context);
            // line 111
            yield "  ";
        }
        // line 112
        yield "  ";
        if (((($context["site_regions_welcome_disable"] ?? null) == 1) && ($context["is_front"] ?? null))) {
            // line 113
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_welcome-text.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 113)->unwrap()->yield($context);
            // line 114
            yield "  ";
        }
        // line 115
        yield "  ";
        if (((($context["site_regions_welcome_disable"] ?? null) == 2) &&  !($context["is_front"] ?? null))) {
            // line 116
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_welcome-text.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 116)->unwrap()->yield($context);
            // line 117
            yield "  ";
        }
        // line 118
        yield "
  ";
        // line 119
        if ((($context["site_regions_top_disable"] ?? null) == 0)) {
            // line 120
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_top-regions.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 120)->unwrap()->yield($context);
            // line 121
            yield "  ";
        }
        // line 122
        yield "  ";
        if (((($context["site_regions_top_disable"] ?? null) == 1) && ($context["is_front"] ?? null))) {
            // line 123
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_top-regions.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 123)->unwrap()->yield($context);
            // line 124
            yield "  ";
        }
        // line 125
        yield "  ";
        if (((($context["site_regions_top_disable"] ?? null) == 2) &&  !($context["is_front"] ?? null))) {
            // line 126
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_top-regions.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 126)->unwrap()->yield($context);
            // line 127
            yield "  ";
        }
        // line 128
        yield "
  ";
        // line 129
        yield from $this->loadTemplate("@solo/partials/_system-messages.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 129)->unwrap()->yield($context);
        // line 130
        yield "
  ";
        // line 131
        yield from $this->loadTemplate("@solo/partials/_page-title.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 131)->unwrap()->yield($context);
        // line 132
        yield "
  ";
        // line 133
        yield from $this->loadTemplate("@solo/partials/_breadcrumb.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 133)->unwrap()->yield($context);
        // line 134
        yield "
  ";
        // line 135
        yield from $this->loadTemplate("@solo/partials/_main-regions.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 135)->unwrap()->yield($context);
        // line 136
        yield "
  ";
        // line 137
        if ((($context["site_regions_bottom_disable"] ?? null) == 0)) {
            // line 138
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_bottom-regions.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 138)->unwrap()->yield($context);
            // line 139
            yield "  ";
        }
        // line 140
        yield "  ";
        if (((($context["site_regions_bottom_disable"] ?? null) == 1) && ($context["is_front"] ?? null))) {
            // line 141
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_bottom-regions.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 141)->unwrap()->yield($context);
            // line 142
            yield "  ";
        }
        // line 143
        yield "  ";
        if (((($context["site_regions_bottom_disable"] ?? null) == 2) &&  !($context["is_front"] ?? null))) {
            // line 144
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_bottom-regions.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 144)->unwrap()->yield($context);
            // line 145
            yield "  ";
        }
        // line 146
        yield "
  ";
        // line 147
        if ((($context["site_regions_footer_disable"] ?? null) == 0)) {
            // line 148
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_footer-regions.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 148)->unwrap()->yield($context);
            // line 149
            yield "  ";
        }
        // line 150
        yield "  ";
        if (((($context["site_regions_footer_disable"] ?? null) == 1) && ($context["is_front"] ?? null))) {
            // line 151
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_footer-regions.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 151)->unwrap()->yield($context);
            // line 152
            yield "  ";
        }
        // line 153
        yield "  ";
        if (((($context["site_regions_footer_disable"] ?? null) == 2) &&  !($context["is_front"] ?? null))) {
            // line 154
            yield "  ";
            yield from $this->loadTemplate("@solo/partials/_footer-regions.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 154)->unwrap()->yield($context);
            // line 155
            yield "  ";
        }
        // line 156
        yield "
  ";
        // line 157
        yield from $this->loadTemplate("@solo/partials/_footer-menu.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 157)->unwrap()->yield($context);
        // line 158
        yield "
  ";
        // line 159
        yield from $this->loadTemplate("@solo/partials/_copyright.html.twig", "themes/contrib/solo/templates/layout/page.html.twig", 159)->unwrap()->yield($context);
        // line 160
        yield "</div>
<!-- End: Page Wrapper -->
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_width_class", "site_global_breakpoints", "site_menu_breakpoints", "site_pagetitle_google_font", "site_pagetitle_animate_on", "site_pagetitle_center", "title_size_l", "title_size_s", "classes_page_wrapper", "opacity_page_wrapper", "site_breadcrumb_scroll", "site_regions_collapse_order", "site_inline_items_on", "attributes_page_wrapper", "site_regions_highlighted_disable", "is_front", "site_flip_header_menu", "site_regions_welcome_disable", "site_regions_top_disable", "site_regions_bottom_disable", "site_regions_footer_disable"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/solo/templates/layout/page.html.twig";
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
        return array (  295 => 160,  293 => 159,  290 => 158,  288 => 157,  285 => 156,  282 => 155,  279 => 154,  276 => 153,  273 => 152,  270 => 151,  267 => 150,  264 => 149,  261 => 148,  259 => 147,  256 => 146,  253 => 145,  250 => 144,  247 => 143,  244 => 142,  241 => 141,  238 => 140,  235 => 139,  232 => 138,  230 => 137,  227 => 136,  225 => 135,  222 => 134,  220 => 133,  217 => 132,  215 => 131,  212 => 130,  210 => 129,  207 => 128,  204 => 127,  201 => 126,  198 => 125,  195 => 124,  192 => 123,  189 => 122,  186 => 121,  183 => 120,  181 => 119,  178 => 118,  175 => 117,  172 => 116,  169 => 115,  166 => 114,  163 => 113,  160 => 112,  157 => 111,  154 => 110,  152 => 109,  149 => 108,  146 => 107,  143 => 106,  140 => 105,  137 => 104,  134 => 103,  131 => 102,  129 => 101,  126 => 100,  124 => 99,  121 => 98,  119 => 97,  116 => 96,  114 => 95,  111 => 94,  108 => 93,  105 => 92,  102 => 91,  99 => 90,  96 => 89,  93 => 88,  90 => 87,  87 => 86,  85 => 85,  78 => 83,  75 => 82,  73 => 80,  72 => 79,  71 => 78,  70 => 77,  69 => 76,  68 => 75,  67 => 74,  66 => 73,  65 => 72,  64 => 71,  63 => 70,  62 => 69,  61 => 68,  60 => 67,  56 => 65,  52 => 63,  50 => 62,  46 => 60,  44 => 59,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/solo/templates/layout/page.html.twig", "/var/www/html/web/themes/contrib/solo/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 59, "include" => 60, "if" => 85];
        static $filters = ["escape" => 83];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
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
