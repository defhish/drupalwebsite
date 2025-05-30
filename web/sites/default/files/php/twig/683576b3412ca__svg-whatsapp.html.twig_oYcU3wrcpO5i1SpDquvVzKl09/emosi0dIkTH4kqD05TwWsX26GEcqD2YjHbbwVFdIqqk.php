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

/* @solo/partials/svg/_svg-whatsapp.html.twig */
class __TwigTemplate_fd228b0d7f274601dc21ec52589aefb8 extends Template
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
        yield "<svg class=\"svg-icon whatsapp\" version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"108.7 108.7 782.6 782.6\" xml:space=\"preserve\">
  <g>
    <path class=\"path-update\" style=\"stroke:none;fill-rule:evenodd;fill:";
        // line 3
        yield (((($context["sm_icon_colors"] ?? null) == "")) ? ("--solo-up") : ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sm_icon_colors"] ?? null), "html", null, true)));
        yield ";fill-opacity:1;\" d=\"M503.7,282.4c-112,0-203.1,91.1-203.2,203c0,38.4,10.7,75.7,31.1,108.1l4.8,7.7L315.9,676l76.9-20.2l7.4,4.4
      c31.2,18.5,66.9,28.3,103.4,28.3h0.1c111.9,0,203-91.1,203.1-203c0-54.3-21.1-105.3-59.4-143.6C609,303.5,558,282.4,503.7,282.4z
       M623.2,572.7c-5.1,14.3-29.5,27.3-41.2,29c-10.5,1.6-23.8,2.2-38.5-2.4c-8.9-2.8-20.2-6.6-34.8-12.9
      c-61.2-26.4-101.2-88.1-104.3-92.2c-3.1-4.1-24.9-33.1-24.9-63.1c0-30,15.8-44.8,21.4-50.9c5.6-6.1,12.2-7.6,16.3-7.6
      c4.1,0,8.1,0,11.7,0.2c3.7,0.2,8.8-1.4,13.7,10.5c5.1,12.2,17.3,42.3,18.8,45.3c1.5,3.1,2.5,6.6,0.5,10.7c-2,4.1-3.1,6.6-6.1,10.2
      c-3.1,3.6-6.4,8-9.2,10.7c-3.1,3-6.2,6.3-2.7,12.5c3.6,6.1,15.8,26.1,34,42.3c23.3,20.8,43,27.2,49.1,30.3
      c6.1,3.1,9.7,2.5,13.2-1.5c3.6-4.1,15.3-17.8,19.3-23.9c4.1-6.1,8.1-5.1,13.7-3.1c5.6,2,35.6,16.8,41.7,19.9
      c6.1,3.1,10.2,4.6,11.7,7.1C628.3,546.2,628.3,558.4,623.2,572.7z M500,108.7c-216.1,0-391.3,175.2-391.3,391.3
      c0,216.1,175.2,391.3,391.3,391.3c216.1,0,391.3-175.2,391.3-391.3C891.3,283.9,716.1,108.7,500,108.7z M503.7,729.8h-0.1
      c-40.9,0-81.1-10.3-116.8-29.7l-129.5,34l34.7-126.6c-21.4-37-32.6-79.1-32.6-122.1c0.1-134.7,109.7-244.3,244.3-244.3
      c65.4,0,126.7,25.5,172.9,71.6c46.1,46.2,71.5,107.6,71.5,172.8C748,620.3,638.3,729.8,503.7,729.8z\"></path>
  </g>
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
        return "@solo/partials/svg/_svg-whatsapp.html.twig";
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
        return array (  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/svg/_svg-whatsapp.html.twig", "/var/www/html/web/themes/contrib/solo/partials/svg/_svg-whatsapp.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 3];
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
