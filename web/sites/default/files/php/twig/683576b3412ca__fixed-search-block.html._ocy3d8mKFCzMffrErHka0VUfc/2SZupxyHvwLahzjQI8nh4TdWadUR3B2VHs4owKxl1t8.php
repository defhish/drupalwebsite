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

/* @solo/partials/_fixed-search-block.html.twig */
class __TwigTemplate_8d223afd0727cd255531d3400f507611 extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "fixed_search_block", [], "any", false, false, true, 1)) {
            // line 2
            yield "  <div id=\"fixed-search-block\" class=\"solo-outer lone fixed-search-block";
            yield ((($context["classes_fixed_search_block"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["classes_fixed_search_block"] ?? null)), "html", null, true)) : (""));
            yield "\" role=\"search\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Search Bar"));
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_fixed_search_block"] ?? null), "html", null, true);
            yield ">
    <div id=\"fixed-search-block-inner\" class=\"solo-inner solo-col solo-col-1 fixed-search-block-inner\">
      <div class=\"fixed-search-wrapper\">
        <div id=\"search-button-close\" class=\"hamburger-icon hamburger-icon-close search-button-close\">
          <!-- Button for closing the search bar -->
          <button class=\"btn-animate solo-button-menu\" data-drupal-selector=\"search-block-button-close-inner\" aria-label=\"";
            // line 7
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close Search Block"));
            yield "\" aria-controls=\"fixed-search-block\" aria-expanded=\"false\">
            <span>";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["svg_bars"] ?? null));
            yield "</span>
            <span class=\"visually-hidden\">";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close Search Block"));
            yield "</span>
          </button>
        </div>
        ";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "fixed_search_block", [], "any", false, false, true, 12), "html", null, true);
            yield "
      </div>
    </div>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "classes_fixed_search_block", "attributes_fixed_search_block", "svg_bars"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_fixed-search-block.html.twig";
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
        return array (  73 => 12,  67 => 9,  63 => 8,  59 => 7,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_fixed-search-block.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_fixed-search-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 2, "t" => 2, "raw" => 8];
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
