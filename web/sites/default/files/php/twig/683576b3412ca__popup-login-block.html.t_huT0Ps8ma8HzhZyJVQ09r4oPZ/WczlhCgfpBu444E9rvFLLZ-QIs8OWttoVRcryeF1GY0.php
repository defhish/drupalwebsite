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

/* @solo/partials/_popup-login-block.html.twig */
class __TwigTemplate_0a81f63b45a30de96855f001e11c072e extends Template
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "popup_login_block", [], "any", false, false, true, 1)) {
            // line 2
            yield "  <!-- Start: Popup Login Block -->
  <div id=\"popup-login-block\" class=\"solo-outer lone popup-login-block solo-animate-opacity\" role=\"login\" aria-hidden=\"true\" aria-label=\"";
            // line 3
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Login Block"));
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_popup_login_block"] ?? null), "html", null, true);
            yield ">
    <div id=\"popup-login-block-inner\" class=\"solo-inner solo-col popup-login-block-inner";
            // line 4
            yield ((($context["classes_popup_login_block"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["classes_popup_login_block"] ?? null)), "html", null, true)) : (""));
            yield "\">
      <div id=\"login-button-close\" class=\"hamburger-icon hamburger-icon-close login-button-close\">
      ";
            // line 7
            yield "        <button class=\"solo-button-menu login-block-button-close-inner\" data-drupal-selector=\"login-block-button-close-inner\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close Login Popup Block"));
            yield "\" aria-controls=\"popup-login-block\" aria-expanded=\"false\">
            <span>";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["svg_bars"] ?? null));
            yield "</span>
            <span class=\"visually-hidden\">";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close Login Popup Block"));
            yield "</span>
        </button>
      </div>
    ";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "popup_login_block", [], "any", false, false, true, 12), "html", null, true);
            yield "
    </div>
  </div>
  <!-- End: Popup Login Block -->
  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "attributes_popup_login_block", "classes_popup_login_block", "svg_bars"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_popup-login-block.html.twig";
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
        return array (  76 => 12,  70 => 9,  66 => 8,  61 => 7,  56 => 4,  50 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_popup-login-block.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_popup-login-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["t" => 3, "escape" => 3, "raw" => 8];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape', 'raw'],
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
