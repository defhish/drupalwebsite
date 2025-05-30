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

/* @solo/partials/svg/_svg-pinterest.html.twig */
class __TwigTemplate_5562177944bd504457ffe3460d37caac extends Template
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
        yield "<svg class=\"svg-icon pinterest\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"30pt\" height=\"30pt\" viewBox=\"0 0 30 30\" version=\"1.1\"><g><path class=\"path-update\" style=\"stroke:none;fill-rule:evenodd;fill:";
        yield (((($context["sm_icon_colors"] ?? null) == "")) ? ("--solo-pi") : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sm_icon_colors"] ?? null), "html", null, true)));
        yield ";fill-opacity:1;\" d=\"M 15 0 C 23.285156 0 30 6.714844 30 15 C 30 23.285156 23.285156 30 15 30 C 6.714844 30 0 23.285156 0 15 C 0 6.714844 6.714844 0 15 0 Z M 15.703125 5.25 C 10.417969 5.25 7.75 9.164062 7.75 12.425781 C 7.75 14.402344 8.476562 16.160156 10.027344 16.8125 C 10.285156 16.921875 10.511719 16.820312 10.585938 16.527344 L 10.8125 15.605469 C 10.875 15.359375 10.863281 15.25 10.730469 15.066406 L 10.652344 14.964844 C 10.203125 14.421875 9.917969 13.714844 9.917969 12.710938 C 9.917969 9.808594 12.023438 7.210938 15.398438 7.210938 C 18.386719 7.210938 20.027344 9.09375 20.027344 11.613281 C 20.027344 14.925781 18.609375 17.722656 16.5 17.722656 C 15.335938 17.722656 14.464844 16.726562 14.742188 15.507812 C 15.078125 14.050781 15.726562 12.484375 15.726562 11.429688 C 15.726562 10.492188 15.238281 9.707031 14.226562 9.707031 C 13.035156 9.707031 12.078125 10.976562 12.078125 12.679688 C 12.078125 13.765625 12.433594 14.496094 12.433594 14.496094 L 11.003906 20.757812 C 10.578125 22.617188 10.9375 24.894531 10.96875 25.121094 C 10.988281 25.261719 11.15625 25.292969 11.234375 25.191406 L 11.46875 24.875 C 11.890625 24.289062 12.761719 22.996094 13.175781 21.664062 L 13.242188 21.429688 C 13.378906 20.917969 14.027344 18.273438 14.027344 18.273438 C 14.414062 19.035156 15.542969 19.703125 16.746094 19.703125 C 20.324219 19.703125 22.75 16.335938 22.75 11.832031 C 22.75 8.421875 19.953125 5.25 15.703125 5.25 Z M 15.703125 5.25 \"/></g></svg>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["sm_icon_colors"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/svg/_svg-pinterest.html.twig";
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
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/svg/_svg-pinterest.html.twig", "/var/www/html/web/themes/contrib/solo/partials/svg/_svg-pinterest.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 1];
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
