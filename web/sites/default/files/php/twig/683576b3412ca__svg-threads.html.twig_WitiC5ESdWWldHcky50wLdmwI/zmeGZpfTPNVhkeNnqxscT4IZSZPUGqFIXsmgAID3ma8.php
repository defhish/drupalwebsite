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

/* @solo/partials/svg/_svg-threads.html.twig */
class __TwigTemplate_92f882178e535fc94a0889d7a0959ec4 extends Template
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
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 128 128\" class=\"svg-icon threads\">
  <path class=\"path-update\" style=\"stroke:none;fill-rule:evenodd;fill:";
        // line 2
        yield (((($context["sm_icon_colors"] ?? null) == "")) ? ("--solo-th") : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sm_icon_colors"] ?? null), "html", null, true)));
        yield ";fill-opacity:1;\" d=\"M64.076,0.962h-0.152C29.109,0.962,0.886,29.185,0.886,64v0c0,34.815,28.223,63.038,63.038,63.038h0.152 c34.815,0,63.038-28.223,63.038-63.038v0C127.114,29.185,98.891,0.962,64.076,0.962z M59.431,67.349c-1.505,0.942-2.334,2.107-2.535,3.563c-0.253,1.836,0.546,3.125,1.261,3.885c1.543,1.638,4.191,2.483,7.088,2.254c6.33-0.492,8.473-5.595,9.003-10.709c-2.376-0.565-4.707-0.848-6.858-0.848C64.199,65.494,61.402,66.114,59.431,67.349z M37.892,66.349c0.267,8.744,3.392,29.082,26.582,29.082c12.672,0,22.229-6.817,22.229-15.858c0-4.725-1.45-7.919-4.82-10.182 c-1.676,9.247-7.4,14.966-16.016,15.637c-5.356,0.419-10.296-1.311-13.531-4.744c-2.704-2.87-3.899-6.586-3.364-10.465 c0.521-3.783,2.729-7.068,6.215-9.251c4.707-2.946,11.425-3.797,18.656-2.488c-1.366-5.743-5.028-7.283-8.206-7.448 c-6.487-0.336-8.837,3.362-9.084,3.786l-7.033-3.811c0.186-0.351,4.662-8.573,16.532-7.964c7.371,0.382,15.215,5.343,16.231,17.927c8.35,3.595,12.42,9.837,12.42,19.003c0,13.602-12.995,23.858-30.229,23.858c-20.947,0-33.874-13.771-34.578-36.838c-0.432-14.117,3.068-25.422,10.12-32.693c6.004-6.191,14.33-9.33,24.746-9.33c25.065,0,31.793,19.129,33.259,24.992l-7.762,1.939c-1.422-5.692-6.754-18.931-25.497-18.931c-8.169,0-14.563,2.321-19.003,6.899C38.797,46.646,37.638,58.048,37.892,66.349z\"/>
</svg>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["sm_icon_colors"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/svg/_svg-threads.html.twig";
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
        return array (  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/svg/_svg-threads.html.twig", "/var/www/html/web/themes/contrib/solo/partials/svg/_svg-threads.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 2];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
