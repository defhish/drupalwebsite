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

/* @solo/partials/_header.html.twig */
class __TwigTemplate_d2046ff96f3bea1e4916f42cee075c32 extends Template
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
        // line 1
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 1) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_sidebar_menu", [], "any", false, false, true, 1))) {
            // line 2
            yield "    <!-- Start: Header -->
    <header id=\"header\" class=\"solo-outer lone header";
            // line 3
            yield ((($context["site_header_colors"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["site_header_colors"] ?? null)), "html", null, true)) : (""));
            yield ((($context["site_name_animate_on"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["site_name_animate_on"] ?? null)), "html", null, true)) : (""));
            yield ((($context["site_name_google_font"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["site_name_google_font"] ?? null)), "html", null, true)) : (""));
            yield ((($context["name_size_s"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["name_size_s"] ?? null)), "html", null, true)) : (""));
            yield ((($context["name_size_l"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["name_size_l"] ?? null)), "html", null, true)) : (""));
            yield ((($context["classes_header"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["classes_header"] ?? null)), "html", null, true)) : (""));
            yield "\" role=\"banner\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
            yield "\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_header"] ?? null), "html", null, true);
            yield ">
      <div id=\"header-inner\" class=\"solo-inner solo-col solo-col-1 header-inner";
            // line 4
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_change_icons"] ?? null)) ? (" hs-icons-left") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_sitename_center"] ?? null)) ? (" header-sitename-center") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_sitename_center_small"] ?? null)) ? (" header-sitename-center-small") : ("")));
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["header_sitename_center_default"] ?? null)) ? (" header-sitename-center-default") : ("")));
            yield "\">

        ";
            // line 6
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_sidebar_menu", [], "any", false, false, true, 6)) {
                // line 7
                yield "          <div id=\"sidebar-button-open\" class=\"hamburger-icon sidebar-button-open\">
            ";
                // line 9
                yield "            <button class=\"btn-animate solo-button-menu sidebar-hamburger-icon\" data-drupal-selector=\"sidebar-hamburger-icon\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open Sidebar Main Menu"));
                yield "\" aria-controls=\"primary-sidebar-menu\" aria-expanded=\"false\">
              <span>";
                // line 10
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["svg_bars"] ?? null));
                yield "</span>
              <span class=\"visually-hidden\">";
                // line 11
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open Sidebar Main Menu"));
                yield "</span>
            </button>
          </div>
        ";
            }
            // line 15
            yield "
        ";
            // line 16
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "fixed_search_block", [], "any", false, false, true, 16)) {
                // line 17
                yield "          <div id=\"search-button-open\" class=\"hamburger-icon search-button-open\">
            ";
                // line 19
                yield "            <button class=\"btn-animate solo-button-menu sidebar-hamburger-icon\" data-drupal-selector=\"sidebar-hamburger-icon\" aria-label=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open Search Block"));
                yield "\" aria-controls=\"fixed-search-block\" aria-expanded=\"false\">
              <span>";
                // line 20
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["svg_search"] ?? null));
                yield "</span>
              <span class=\"visually-hidden\">";
                // line 21
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Open Search Block"));
                yield "</span>
            </button>
          </div>
        ";
            }
            // line 25
            yield "
        ";
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 26)) {
                // line 27
                yield "          <a id=\"header-content\" tabindex=\"-1\"></a>
          ";
                // line 28
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 28), "html", null, true);
                yield "
        ";
            }
            // line 30
            yield "
      </div>
    </header>
    <!-- End: Header -->
  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "site_header_colors", "site_name_animate_on", "site_name_google_font", "name_size_s", "name_size_l", "classes_header", "attributes_header", "header_change_icons", "header_sitename_center", "header_sitename_center_small", "header_sitename_center_default", "svg_bars", "svg_search"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_header.html.twig";
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
        return array (  129 => 30,  124 => 28,  121 => 27,  119 => 26,  116 => 25,  109 => 21,  105 => 20,  100 => 19,  97 => 17,  95 => 16,  92 => 15,  85 => 11,  81 => 10,  76 => 9,  73 => 7,  71 => 6,  63 => 4,  50 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_header.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 3, "t" => 3, "raw" => 10];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'raw'],
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
