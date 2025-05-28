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

/* @solo/partials/_bottom-regions.html.twig */
class __TwigTemplate_77541ef6064f7d4d142164ba51f303f7 extends Template
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
        $context["bottom_first"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 1))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 1)) : (null));
        // line 2
        $context["bottom_second"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 2))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 2)) : (null));
        // line 3
        $context["bottom_third"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 3))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 3)) : (null));
        // line 4
        $context["bottom_fourth"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_fourth", [], "any", false, false, true, 4))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "bottom_fourth", [], "any", false, false, true, 4)) : (null));
        // line 5
        yield "
";
        // line 6
        if ((((($context["bottom_first"] ?? null) || ($context["bottom_second"] ?? null)) || ($context["bottom_third"] ?? null)) || ($context["bottom_fourth"] ?? null))) {
            // line 7
            yield "
";
            // line 8
            $context["bottom_regions"] = 0;
            // line 9
            yield "
";
            // line 10
            if (($context["bottom_first"] ?? null)) {
                // line 11
                yield "  ";
                $context["bottom_regions"] = (($context["bottom_regions"] ?? null) + 1);
                // line 12
                yield "  ";
                $context["bottom_first_outer_classes"] = "region-outer bottom-box bottom-box-first";
                // line 13
                yield "  ";
                $context["bottom_first_inner_classes"] = (("region-inner bottom-box-inner bottom-box-first-inner fade-inner" . ((($context["align_bottom_first"] ?? null)) ? ((" " . ($context["align_bottom_first"] ?? null))) : (""))) . ((($context["classes_bottom_first"] ?? null)) ? ((" " . ($context["classes_bottom_first"] ?? null))) : ("")));
            }
            // line 15
            yield "
";
            // line 16
            if (($context["bottom_second"] ?? null)) {
                // line 17
                yield "  ";
                $context["bottom_regions"] = (($context["bottom_regions"] ?? null) + 1);
                // line 18
                yield "  ";
                $context["bottom_second_outer_classes"] = "region-outer bottom-box bottom-box-second";
                // line 19
                yield "  ";
                $context["bottom_second_inner_classes"] = (("region-inner bottom-box-inner bottom-box-second-inner fade-inner" . ((($context["align_bottom_second"] ?? null)) ? ((" " . ($context["align_bottom_second"] ?? null))) : (""))) . ((($context["classes_bottom_second"] ?? null)) ? ((" " . ($context["classes_bottom_second"] ?? null))) : ("")));
            }
            // line 21
            yield "
";
            // line 22
            if (($context["bottom_third"] ?? null)) {
                // line 23
                yield "  ";
                $context["bottom_regions"] = (($context["bottom_regions"] ?? null) + 1);
                // line 24
                yield "  ";
                $context["bottom_third_outer_classes"] = "region-outer bottom-box bottom-box-third";
                // line 25
                yield "  ";
                $context["bottom_third_inner_classes"] = (("region-inner bottom-box-inner bottom-box-third-inner fade-inner" . ((($context["align_bottom_third"] ?? null)) ? ((" " . ($context["align_bottom_third"] ?? null))) : (""))) . ((($context["classes_bottom_third"] ?? null)) ? ((" " . ($context["classes_bottom_third"] ?? null))) : ("")));
            }
            // line 27
            yield "
";
            // line 28
            if (($context["bottom_fourth"] ?? null)) {
                // line 29
                yield "  ";
                $context["bottom_regions"] = (($context["bottom_regions"] ?? null) + 1);
                // line 30
                yield "  ";
                $context["bottom_fourth_outer_classes"] = "region-outer bottom-box bottom-box-fourth";
                // line 31
                yield "  ";
                $context["bottom_fourth_inner_classes"] = (("region-inner bottom-box-inner bottom-box-fourth-inner fade-inner" . ((($context["align_bottom_fourth"] ?? null)) ? ((" " . ($context["align_bottom_fourth"] ?? null))) : (""))) . ((($context["classes_bottom_fourth"] ?? null)) ? ((" " . ($context["classes_bottom_fourth"] ?? null))) : ("")));
            }
            // line 33
            yield "
";
            // line 34
            $context["bottom_active"] = ("active-bottom-" . ($context["bottom_regions"] ?? null));
            // line 35
            yield "
";
            // line 36
            $context["bottom_outer"] = (((((("solo-outer multi bottom-container" . ((            // line 37
($context["bottom_active"] ?? null)) ? ((" " . ($context["bottom_active"] ?? null))) : (""))) . ((            // line 38
($context["site_regions_bottom_border"] ?? null)) ? (" has-border") : (""))) . ((            // line 39
($context["site_regions_bottom_rounded"] ?? null)) ? ((" " . ($context["site_regions_bottom_rounded"] ?? null))) : (""))) . ((            // line 40
($context["site_regions_bottom_animate_border"] ?? null)) ? (" animate-border") : (""))) . ((            // line 41
($context["site_regions_bottom_animate_hover"] ?? null)) ? (" animate-hover") : (""))) . ((            // line 42
($context["classes_bottom_container"] ?? null)) ? ((" " . ($context["classes_bottom_container"] ?? null))) : ("")));
            // line 43
            yield "
";
            // line 44
            $context["bottom_inner"] = ("solo-inner solo-col bottom-container-inner" . ((            // line 45
($context["bottom_layout"] ?? null)) ? ((" " . ($context["bottom_layout"] ?? null))) : ("")));
            // line 46
            yield "
  <!-- Start: Bottom Container -->
  <div id=\"bottom-container\" class=\"";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_outer"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_bottom_container"] ?? null), "html", null, true);
            yield ">
    <div id=\"bottom-container-inner\" class=\"";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_inner"] ?? null), "html", null, true);
            yield "\">

    ";
            // line 51
            if (($context["bottom_first"] ?? null)) {
                // line 52
                yield "      <!-- Start: Bottom First -->
      <div id=\"bottom-box-first\" class=\"";
                // line 53
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_first_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 54
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_first_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_bottom_first"] ?? null), "html", null, true);
                yield ">
          ";
                // line 55
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_first"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Bottom First -->
    ";
            }
            // line 60
            yield "
    ";
            // line 61
            if (($context["bottom_second"] ?? null)) {
                // line 62
                yield "      <!-- Start: Bottom Second -->
      <div id=\"bottom-box-second\" class=\"";
                // line 63
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_second_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 64
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_second_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_bottom_second"] ?? null), "html", null, true);
                yield ">
          ";
                // line 65
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_second"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Bottom Second -->
    ";
            }
            // line 70
            yield "
    ";
            // line 71
            if (($context["bottom_third"] ?? null)) {
                // line 72
                yield "      <!-- Start: Bottom Third -->
      <div id=\"bottom-box-third\" class=\"";
                // line 73
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_third_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 74
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_third_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_bottom_third"] ?? null), "html", null, true);
                yield ">
          ";
                // line 75
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_third"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Bottom Third -->
    ";
            }
            // line 80
            yield "
    ";
            // line 81
            if (($context["bottom_fourth"] ?? null)) {
                // line 82
                yield "      <!-- Start: Bottom Fourth -->
      <div id=\"bottom-box-fourth\" class=\"";
                // line 83
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_fourth_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 84
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_fourth_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_bottom_fourth"] ?? null), "html", null, true);
                yield ">
          ";
                // line 85
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["bottom_fourth"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Bottom Fourth -->
    ";
            }
            // line 90
            yield "
    </div>
  </div>
  <!-- End: Bottom -->
";
        }
        // line 95
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "align_bottom_first", "classes_bottom_first", "align_bottom_second", "classes_bottom_second", "align_bottom_third", "classes_bottom_third", "align_bottom_fourth", "classes_bottom_fourth", "site_regions_bottom_border", "site_regions_bottom_rounded", "site_regions_bottom_animate_border", "site_regions_bottom_animate_hover", "classes_bottom_container", "bottom_layout", "attributes_bottom_container", "attributes_bottom_first", "attributes_bottom_second", "attributes_bottom_third", "attributes_bottom_fourth"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_bottom-regions.html.twig";
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
        return array (  267 => 95,  260 => 90,  252 => 85,  246 => 84,  242 => 83,  239 => 82,  237 => 81,  234 => 80,  226 => 75,  220 => 74,  216 => 73,  213 => 72,  211 => 71,  208 => 70,  200 => 65,  194 => 64,  190 => 63,  187 => 62,  185 => 61,  182 => 60,  174 => 55,  168 => 54,  164 => 53,  161 => 52,  159 => 51,  154 => 49,  148 => 48,  144 => 46,  142 => 45,  141 => 44,  138 => 43,  136 => 42,  135 => 41,  134 => 40,  133 => 39,  132 => 38,  131 => 37,  130 => 36,  127 => 35,  125 => 34,  122 => 33,  118 => 31,  115 => 30,  112 => 29,  110 => 28,  107 => 27,  103 => 25,  100 => 24,  97 => 23,  95 => 22,  92 => 21,  88 => 19,  85 => 18,  82 => 17,  80 => 16,  77 => 15,  73 => 13,  70 => 12,  67 => 11,  65 => 10,  62 => 9,  60 => 8,  57 => 7,  55 => 6,  52 => 5,  50 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_bottom-regions.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_bottom-regions.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 6];
        static $filters = ["escape" => 48];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
