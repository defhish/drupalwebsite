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

/* modules/custom/content_stats/templates/content-stats.html.twig */
class __TwigTemplate_8da03cee275e6e9b5569460b85ebc33b extends Template
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
        yield "<div class=\"content-stats\">
  <h2>";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Content Statistics"));
        yield "</h2>

  ";
        // line 5
        yield "  <div id=\"content-stats-container\" class=\"chart-container\">
    ";
        // line 7
        yield "  </div>

  <div class=\"stats-table\">
    <table>
      <thead>
        <tr>
          <th>";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Content Type"));
        yield "</th>
          <th>";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Count"));
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stats"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 19
            yield "          <tr>
            <td>";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "label", [], "any", false, false, true, 20), "html", null, true);
            yield "</td>
            <td>";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "count", [], "any", false, false, true, 21), "html", null, true);
            yield "</td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 27
        if (!$context['_iterated']) {
            // line 24
            yield "          <tr>
            <td colspan=\"2\">No content types found</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "      </tbody>
    </table>
  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["stats"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/content_stats/templates/content-stats.html.twig";
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
        return array (  104 => 28,  95 => 24,  93 => 27,  86 => 21,  82 => 20,  79 => 19,  74 => 18,  67 => 14,  63 => 13,  55 => 7,  52 => 5,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/content_stats/templates/content-stats.html.twig", "/var/www/html/web/modules/custom/content_stats/templates/content-stats.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 18];
        static $filters = ["t" => 2, "escape" => 20];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['t', 'escape'],
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
