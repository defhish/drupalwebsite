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

/* @solo/partials/_top-regions.html.twig */
class __TwigTemplate_33d3939401cc330467f49384729c6412 extends Template
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
        yield "
";
        // line 2
        $context["top_first"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 2))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_first", [], "any", false, false, true, 2)) : (null));
        // line 3
        $context["top_second"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 3))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_second", [], "any", false, false, true, 3)) : (null));
        // line 4
        $context["top_third"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 4))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_third", [], "any", false, false, true, 4)) : (null));
        // line 5
        yield "
";
        // line 6
        if (((($context["top_first"] ?? null) || ($context["top_second"] ?? null)) || ($context["top_third"] ?? null))) {
            // line 7
            yield "
";
            // line 8
            $context["top_regions"] = 0;
            // line 9
            yield "
";
            // line 10
            if (($context["top_first"] ?? null)) {
                // line 11
                yield "  ";
                $context["top_regions"] = (($context["top_regions"] ?? null) + 1);
                // line 12
                yield "  ";
                $context["top_first_outer_classes"] = "region-outer top-box top-box-first";
                // line 13
                yield "  ";
                $context["top_first_inner_classes"] = (("region-inner top-box-inner top-box-first-inner fade-inner" . ((($context["align_top_first"] ?? null)) ? ((" " . ($context["align_top_first"] ?? null))) : (""))) . ((($context["classes_top_first"] ?? null)) ? ((" " . ($context["classes_top_first"] ?? null))) : ("")));
            }
            // line 15
            yield "
";
            // line 16
            if (($context["top_second"] ?? null)) {
                // line 17
                yield "  ";
                $context["top_regions"] = (($context["top_regions"] ?? null) + 1);
                // line 18
                yield "  ";
                $context["top_second_outer_classes"] = "region-outer top-box top-box-second";
                // line 19
                yield "  ";
                $context["top_second_inner_classes"] = (("region-inner top-box-inner top-box-second-inner fade-inner" . ((($context["align_top_second"] ?? null)) ? ((" " . ($context["align_top_second"] ?? null))) : (""))) . ((($context["classes_top_second"] ?? null)) ? ((" " . ($context["classes_top_second"] ?? null))) : ("")));
            }
            // line 21
            yield "
";
            // line 22
            if (($context["top_third"] ?? null)) {
                // line 23
                yield "  ";
                $context["top_regions"] = (($context["top_regions"] ?? null) + 1);
                // line 24
                yield "  ";
                $context["top_third_outer_classes"] = "region-outer top-box top-box-third";
                // line 25
                yield "  ";
                $context["top_third_inner_classes"] = (("region-inner top-box-inner top-box-third-inner fade-inner" . ((($context["align_top_third"] ?? null)) ? ((" " . ($context["align_top_third"] ?? null))) : (""))) . ((($context["classes_top_third"] ?? null)) ? ((" " . ($context["classes_top_third"] ?? null))) : ("")));
            }
            // line 27
            yield "
";
            // line 28
            $context["top_active"] = ("active-top-" . ($context["top_regions"] ?? null));
            // line 29
            yield "
";
            // line 30
            $context["top_outer"] = (((((("solo-outer multi top-container" . ((            // line 31
($context["top_active"] ?? null)) ? ((" " . ($context["top_active"] ?? null))) : (""))) . ((            // line 32
($context["site_regions_top_border"] ?? null)) ? (" has-border") : (""))) . ((            // line 33
($context["site_regions_top_rounded"] ?? null)) ? ((" " . ($context["site_regions_top_rounded"] ?? null))) : (""))) . ((            // line 34
($context["site_regions_top_animate_border"] ?? null)) ? (" animate-border") : (""))) . ((            // line 35
($context["site_regions_top_animate_hover"] ?? null)) ? (" animate-hover") : (""))) . ((            // line 36
($context["classes_top_container"] ?? null)) ? ((" " . ($context["classes_top_container"] ?? null))) : ("")));
            // line 37
            yield "
";
            // line 38
            $context["top_inner"] = ("solo-inner solo-col top-container-inner" . ((            // line 39
($context["top_layout"] ?? null)) ? ((" " . ($context["top_layout"] ?? null))) : ("")));
            // line 40
            yield "
  <!-- Start: Top Container -->
  <div id=\"top-container\" class=\"";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["top_outer"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_top_container"] ?? null), "html", null, true);
            yield ">
    <div id=\"top-container-inner\" class=\"";
            // line 43
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["top_inner"] ?? null), "html", null, true);
            yield "\">

    ";
            // line 45
            if (($context["top_first"] ?? null)) {
                // line 46
                yield "      <!-- Start: Top container first region -->
      <div id=\"top-box-first\" class=\"";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["top_first_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 48
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["top_first_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_top_first"] ?? null), "html", null, true);
                yield ">
          ";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["top_first"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Top Container First -->
    ";
            }
            // line 54
            yield "
    ";
            // line 55
            if (($context["top_second"] ?? null)) {
                // line 56
                yield "      <!-- Start: Top Container Second  -->
      <div id=\"top-box-second\" class=\"";
                // line 57
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["top_second_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 58
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["top_second_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_top_second"] ?? null), "html", null, true);
                yield ">
          ";
                // line 59
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["top_second"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Top Container Second -->
    ";
            }
            // line 64
            yield "
    ";
            // line 65
            if (($context["top_third"] ?? null)) {
                // line 66
                yield "      <!-- Start: Top Container Third -->
      <div id=\"top-box-third\" class=\"";
                // line 67
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["top_third_outer_classes"] ?? null), "html", null, true);
                yield "\">
        <div class=\"";
                // line 68
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["top_third_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_top_third"] ?? null), "html", null, true);
                yield ">
          ";
                // line 69
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["top_third"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Top Container Third -->
    ";
            }
            // line 74
            yield "
    </div>
  </div>
  <!-- End: Top container -->
";
        }
        // line 79
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "align_top_first", "classes_top_first", "align_top_second", "classes_top_second", "align_top_third", "classes_top_third", "site_regions_top_border", "site_regions_top_rounded", "site_regions_top_animate_border", "site_regions_top_animate_hover", "classes_top_container", "top_layout", "attributes_top_container", "attributes_top_first", "attributes_top_second", "attributes_top_third"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_top-regions.html.twig";
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
        return array (  227 => 79,  220 => 74,  212 => 69,  206 => 68,  202 => 67,  199 => 66,  197 => 65,  194 => 64,  186 => 59,  180 => 58,  176 => 57,  173 => 56,  171 => 55,  168 => 54,  160 => 49,  154 => 48,  150 => 47,  147 => 46,  145 => 45,  140 => 43,  134 => 42,  130 => 40,  128 => 39,  127 => 38,  124 => 37,  122 => 36,  121 => 35,  120 => 34,  119 => 33,  118 => 32,  117 => 31,  116 => 30,  113 => 29,  111 => 28,  108 => 27,  104 => 25,  101 => 24,  98 => 23,  96 => 22,  93 => 21,  89 => 19,  86 => 18,  83 => 17,  81 => 16,  78 => 15,  74 => 13,  71 => 12,  68 => 11,  66 => 10,  63 => 9,  61 => 8,  58 => 7,  56 => 6,  53 => 5,  51 => 4,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_top-regions.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_top-regions.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 2, "if" => 6];
        static $filters = ["escape" => 42];
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
