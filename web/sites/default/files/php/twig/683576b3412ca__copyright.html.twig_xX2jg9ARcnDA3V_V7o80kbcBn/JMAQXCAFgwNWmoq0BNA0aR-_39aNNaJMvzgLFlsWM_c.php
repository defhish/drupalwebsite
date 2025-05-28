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

/* @solo/partials/_copyright.html.twig */
class __TwigTemplate_29b3d64c147b6fa939c6540e772a6e62 extends Template
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
        if ((($context["footer_copyright"] ?? null) || ($context["footer_link"] ?? null))) {
            // line 2
            yield "    <!-- Start: Copyright -->
    <div id=\"copyright\" class=\"solo-outer lone copyright";
            // line 3
            yield ((($context["classes_credit_copyright"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["classes_credit_copyright"] ?? null)), "html", null, true)) : (""));
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_credit_copyright"] ?? null), "html", null, true);
            yield ">
      <div id=\"copyright-inner\" class=\"solo-inner solo-col copyright-inner";
            // line 4
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["footer_copyright"] ?? null) && ($context["footer_link"] ?? null))) ? (" solo-col-2") : (" solo-col-1")));
            yield "\">
      ";
            // line 5
            if (($context["footer_copyright"] ?? null)) {
                // line 6
                yield "      <!-- Start: Copyright -->
      <p class=\"copyright-first\">
        ";
                // line 8
                $context["current_date"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
                // line 9
                yield "        ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::replace(($context["footer_copyright"] ?? null), ["%year%" => ($context["current_date"] ?? null)]), "html", null, true);
                yield "
      </p>
      <!-- End: Copyright -->
      ";
            }
            // line 13
            yield "      ";
            if (($context["footer_link"] ?? null)) {
                // line 14
                yield "          <!-- Start: Credit Link -->
      <p class=\"copyright-second\">
        ";
                // line 16
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_link_label"] ?? null), "html", null, true);
                yield " <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_link"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_link_text"] ?? null), "html", null, true);
                yield "\" target=\"_blank\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_link_text"] ?? null), "html", null, true);
                yield "</a>
      </p>
      <!-- End: Credit Link -->
      ";
            }
            // line 20
            yield "      </div>
    </div>
    <!-- End: Copyright -->
  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["footer_copyright", "footer_link", "classes_credit_copyright", "attributes_credit_copyright", "footer_link_label", "footer_link_text"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_copyright.html.twig";
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
        return array (  96 => 20,  83 => 16,  79 => 14,  76 => 13,  68 => 9,  66 => 8,  62 => 6,  60 => 5,  56 => 4,  50 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_copyright.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_copyright.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "set" => 8];
        static $filters = ["escape" => 3, "date" => 8, "replace" => 9];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'date', 'replace'],
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
