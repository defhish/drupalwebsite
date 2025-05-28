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

/* @solo/partials/_main-regions.html.twig */
class __TwigTemplate_da234cb08f0fc9c7cced78037c8ac63b extends Template
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
        $context["main_left"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 1))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 1)) : (null));
        // line 2
        $context["main_middle"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 2))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 2)) : (null));
        // line 3
        $context["main_right"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 3))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 3)) : (null));
        // line 4
        yield "
";
        // line 5
        if (((($context["main_left"] ?? null) || ($context["main_middle"] ?? null)) || ($context["main_right"] ?? null))) {
            // line 6
            yield "
";
            // line 7
            $context["main_regions"] = 0;
            // line 8
            if (($context["main_left"] ?? null)) {
                // line 9
                yield "  ";
                $context["main_regions"] = (($context["main_regions"] ?? null) + 1);
                // line 10
                yield "  ";
                $context["sidebar_first_outer_classes"] = "region-outer main-box main-box-sides sidebar-box-first";
                // line 11
                yield "  ";
                $context["sidebar_first_inner_classes"] = (("region-inner main-box-inner sidebar-box-first-inner fade-inner" . ((($context["align_sidebar_first"] ?? null)) ? ((" " . ($context["align_sidebar_first"] ?? null))) : (""))) . ((($context["classes_sidebar_first"] ?? null)) ? ((" " . ($context["classes_sidebar_first"] ?? null))) : ("")));
            }
            // line 13
            yield "
";
            // line 14
            if (($context["main_middle"] ?? null)) {
                // line 15
                yield "  ";
                $context["main_regions"] = (($context["main_regions"] ?? null) + 1);
                // line 16
                yield "  ";
                $context["content_outer_classes"] = "region-outer main-box sidebar-box-main";
                // line 17
                yield "  ";
                $context["content_inner_classes"] = (("region-inner main-box-inner sidebar-box-main-inner fade-inner" . ((($context["align_content"] ?? null)) ? ((" " . ($context["align_content"] ?? null))) : (""))) . ((($context["classes_content"] ?? null)) ? ((" " . ($context["classes_content"] ?? null))) : ("")));
            }
            // line 19
            yield "
";
            // line 20
            if (($context["main_right"] ?? null)) {
                // line 21
                yield "  ";
                $context["main_regions"] = (($context["main_regions"] ?? null) + 1);
                // line 22
                yield "  ";
                $context["sidebar_second_outer_classes"] = "region-outer main-box main-box-sides sidebar-box-second";
                // line 23
                yield "  ";
                $context["sidebar_second_inner_classes"] = (("region-inner main-box-inner sidebar-box-second-inner fade-inner" . ((($context["align_sidebar_second"] ?? null)) ? ((" " . ($context["align_sidebar_second"] ?? null))) : (""))) . ((($context["classes_sidebar_second"] ?? null)) ? ((" " . ($context["classes_sidebar_second"] ?? null))) : ("")));
            }
            // line 25
            yield "
";
            // line 26
            $context["main_active"] = ("active-main-" . ($context["main_regions"] ?? null));
            // line 27
            yield "
";
            // line 28
            $context["main_outer"] = (((("solo-outer multi main-container" . ((            // line 29
($context["main_active"] ?? null)) ? ((" " . ($context["main_active"] ?? null))) : (""))) . ((            // line 30
($context["site_regions_main_border"] ?? null)) ? (" has-border") : (""))) . ((            // line 31
($context["site_regions_main_rounded"] ?? null)) ? ((" " . ($context["site_regions_main_rounded"] ?? null))) : (""))) . ((            // line 32
($context["classes_main_container"] ?? null)) ? ((" " . ($context["classes_main_container"] ?? null))) : ("")));
            // line 34
            yield "
";
            // line 35
            $context["main_inner"] = (("solo-inner solo-col main-container-inner" . ((            // line 36
($context["main_layout"] ?? null)) ? ((" " . ($context["main_layout"] ?? null))) : (""))) . ((            // line 37
($context["main_layout_order"] ?? null)) ? ((" " . ($context["main_layout_order"] ?? null))) : ("")));
            // line 39
            yield "
  <!-- Start: Main -->
  <div id=\"main-container\" class=\"";
            // line 41
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_outer"] ?? null), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_main_container"] ?? null), "html", null, true);
            yield ">
    <div id=\"main-container-inner\" class=\"";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_inner"] ?? null), "html", null, true);
            yield "\">
      <!-- Start Main Container -->

    ";
            // line 45
            if (($context["main_left"] ?? null)) {
                // line 46
                yield "      <!-- Start Left SideBar -->
      <div id=\"sidebar-box-first\" class=\"";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_outer_classes"] ?? null), "html", null, true);
                yield "\" role=\"complementary\">
        <div class=\"";
                // line 48
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_sidebar_first"] ?? null), "html", null, true);
                yield ">
          ";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_left"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Left SideBar -->
    ";
            }
            // line 54
            yield "
    ";
            // line 55
            if (($context["main_middle"] ?? null)) {
                // line 56
                yield "      <!-- Start: Main Content -->
      <div id=\"sidebar-box-main\" class=\"";
                // line 57
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_outer_classes"] ?? null), "html", null, true);
                yield "\" role=\"main\">
        <div class=\"";
                // line 58
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_content"] ?? null), "html", null, true);
                yield ">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          ";
                // line 60
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_middle"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Main Content -->
    ";
            }
            // line 65
            yield "
    ";
            // line 66
            if (($context["main_right"] ?? null)) {
                // line 67
                yield "      <!-- Start: Right SideBar -->
      <div id=\"sidebar-box-second\" class=\"";
                // line 68
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_outer_classes"] ?? null), "html", null, true);
                yield "\" role=\"complementary\">
        <div class=\"";
                // line 69
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_inner_classes"] ?? null), "html", null, true);
                yield "\" ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_sidebar_second"] ?? null), "html", null, true);
                yield ">
          ";
                // line 70
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["main_right"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
      <!-- End: Right SideBar -->
    ";
            }
            // line 75
            yield "
      <!-- End: Main Container -->
    </div>
  </div>
<!-- End: Main -->
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "align_sidebar_first", "classes_sidebar_first", "align_content", "classes_content", "align_sidebar_second", "classes_sidebar_second", "site_regions_main_border", "site_regions_main_rounded", "classes_main_container", "main_layout", "main_layout_order", "attributes_main_container", "attributes_sidebar_first", "attributes_content", "attributes_sidebar_second"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_main-regions.html.twig";
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
        return array (  215 => 75,  207 => 70,  201 => 69,  197 => 68,  194 => 67,  192 => 66,  189 => 65,  181 => 60,  174 => 58,  170 => 57,  167 => 56,  165 => 55,  162 => 54,  154 => 49,  148 => 48,  144 => 47,  141 => 46,  139 => 45,  133 => 42,  127 => 41,  123 => 39,  121 => 37,  120 => 36,  119 => 35,  116 => 34,  114 => 32,  113 => 31,  112 => 30,  111 => 29,  110 => 28,  107 => 27,  105 => 26,  102 => 25,  98 => 23,  95 => 22,  92 => 21,  90 => 20,  87 => 19,  83 => 17,  80 => 16,  77 => 15,  75 => 14,  72 => 13,  68 => 11,  65 => 10,  62 => 9,  60 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_main-regions.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_main-regions.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 5];
        static $filters = ["escape" => 41];
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
