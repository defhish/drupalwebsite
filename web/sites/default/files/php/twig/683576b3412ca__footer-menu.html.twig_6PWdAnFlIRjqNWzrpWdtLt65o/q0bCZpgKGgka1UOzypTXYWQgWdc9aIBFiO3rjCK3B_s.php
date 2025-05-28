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

/* @solo/partials/_footer-menu.html.twig */
class __TwigTemplate_751dd304741bb5a1afff71464a9eed5d extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 1) || ($context["sm_show_icons"] ?? null))) {
            // line 2
            yield "    <!-- Start: Footer Menu -->
    <div id=\"footer-menu\" class=\"solo-outer lone footer-menu";
            // line 3
            yield ((($context["classes_footer_menu"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["classes_footer_menu"] ?? null)), "html", null, true)) : (""));
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes_footer_menu"] ?? null), "html", null, true);
            yield ">
      <div id=\"footer-menu-inner\" class=\"solo-inner solo-col solo-col-1 footer-menu-inner\">

    ";
            // line 6
            if (($context["sm_show_icons"] ?? null)) {
                // line 7
                yield "      <!-- Start: Social Media -->
      <div class=\"solo-clear fade-inner footer-menu-first sm-icons";
                // line 8
                yield ((($context["sm_icon_size"] ?? null)) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (" " . ($context["sm_icon_size"] ?? null)), "html", null, true)) : (""));
                yield "\" ";
                if (($context["sm_icon_colors"] ?? null)) {
                    yield " style=\"fill: ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sm_icon_colors"] ?? null), "html", null, true);
                    yield "\" ";
                }
                yield ">
        ";
                // line 9
                $context["socials"] = ["facebook" => ["url" =>                 // line 10
($context["sm_icon_facebook"] ?? null)], "instagram" => ["url" =>                 // line 11
($context["sm_icon_instagram"] ?? null)], "twitter" => ["url" =>                 // line 12
($context["sm_icon_twitter"] ?? null)], "bluesky" => ["url" =>                 // line 13
($context["sm_icon_bluesky"] ?? null)], "linkedin" => ["url" =>                 // line 14
($context["sm_icon_linkedin"] ?? null)], "youtube" => ["url" =>                 // line 15
($context["sm_icon_youtube"] ?? null)], "pinterest" => ["url" =>                 // line 16
($context["sm_icon_pinterest"] ?? null)], "snapchat" => ["url" =>                 // line 17
($context["sm_icon_snapchat"] ?? null)], "reddit" => ["url" =>                 // line 18
($context["sm_icon_reddit"] ?? null)], "tiktok" => ["url" =>                 // line 19
($context["sm_icon_tiktok"] ?? null)], "whatsapp" => ["url" =>                 // line 20
($context["sm_icon_whatsapp"] ?? null)], "telegram" => ["url" =>                 // line 21
($context["sm_icon_telegram"] ?? null)], "mastodon" => ["url" =>                 // line 22
($context["sm_icon_mastodon"] ?? null)], "drupal" => ["url" =>                 // line 23
($context["sm_icon_drupal"] ?? null)], "threads" => ["url" =>                 // line 24
($context["sm_icon_threads"] ?? null)], "rss" => ["url" =>                 // line 25
($context["sm_icon_rss"] ?? null)], "email" => ["url" =>                 // line 26
($context["sm_icon_email"] ?? null)]];
                // line 28
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["socials"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["key"] => $context["social"]) {
                    // line 29
                    yield "          ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, true, 29)) {
                        // line 30
                        yield "            ";
                        if (($context["key"] == "email")) {
                            // line 31
                            yield "              <a href=\"mailto:";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, true, 31), "html", null, true);
                            yield "\" title=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["key"]), "html", null, true);
                            yield "\" class=\"solo-clear ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                            yield "\">
            ";
                        } else {
                            // line 33
                            yield "              <a href=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["social"], "url", [], "any", false, false, true, 33), "html", null, true);
                            yield "\" title=\"";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["key"]), "html", null, true);
                            yield "\" class=\"solo-clear ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                            yield "\" target=\"_blank\">
            ";
                        }
                        // line 35
                        yield "                <span class=\"sm-icon\">
                  ";
                        // line 36
                        $context["svg_icon"] = (("@solo/partials/svg/_svg-" . $context["key"]) . ".html.twig");
                        // line 37
                        yield "                  ";
                        yield from $this->loadTemplate(($context["svg_icon"] ?? null), "@solo/partials/_footer-menu.html.twig", 37)->unwrap()->yield($context);
                        // line 38
                        yield "                </span>
              </a>
          ";
                    }
                    // line 41
                    yield "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['social'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                yield "      </div>
      <!-- End: Social Media -->
    ";
            }
            // line 45
            yield "
        <!-- Start: Bottom Menu -->
        ";
            // line 47
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 47)) {
                // line 48
                yield "          <div class=\"solo-clear footer-menu-second fade-inner\">
            <a id=\"footer-content\" tabindex=\"-1\"></a>
            ";
                // line 50
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 50), "html", null, true);
                yield "
          </div>
          <!-- End: Bottom Menu -->
        ";
            }
            // line 54
            yield "      </div>
    </div>
    <!-- End: Footer Menu -->
  ";
        }
        // line 58
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "sm_show_icons", "classes_footer_menu", "attributes_footer_menu", "sm_icon_size", "sm_icon_colors", "sm_icon_facebook", "sm_icon_instagram", "sm_icon_twitter", "sm_icon_bluesky", "sm_icon_linkedin", "sm_icon_youtube", "sm_icon_pinterest", "sm_icon_snapchat", "sm_icon_reddit", "sm_icon_tiktok", "sm_icon_whatsapp", "sm_icon_telegram", "sm_icon_mastodon", "sm_icon_drupal", "sm_icon_threads", "sm_icon_rss", "sm_icon_email"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@solo/partials/_footer-menu.html.twig";
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
        return array (  191 => 58,  185 => 54,  178 => 50,  174 => 48,  172 => 47,  168 => 45,  163 => 42,  149 => 41,  144 => 38,  141 => 37,  139 => 36,  136 => 35,  126 => 33,  116 => 31,  113 => 30,  110 => 29,  92 => 28,  90 => 26,  89 => 25,  88 => 24,  87 => 23,  86 => 22,  85 => 21,  84 => 20,  83 => 19,  82 => 18,  81 => 17,  80 => 16,  79 => 15,  78 => 14,  77 => 13,  76 => 12,  75 => 11,  74 => 10,  73 => 9,  63 => 8,  60 => 7,  58 => 6,  50 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@solo/partials/_footer-menu.html.twig", "/var/www/html/web/themes/contrib/solo/partials/_footer-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1, "set" => 9, "for" => 28, "include" => 37];
        static $filters = ["escape" => 3, "capitalize" => 31];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'include'],
                ['escape', 'capitalize'],
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
