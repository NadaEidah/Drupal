<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/flow2/templates/system/page.html.twig */
class __TwigTemplate_ee2ed4cee69fdd0b631e2cc91552b4f540ff8770695e0685d6379154c46e3720 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 73, "block" => 88, "if" => 101];
        $filters = ["escape" => 79];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        echo "<div id=\"loader\" class=\"eltd-smooth-transition-loader ajax\">
  <div class=\"eltd-st-loader\">
    <div class=\"eltd-st-loader1\">
      <div class=\"eltd-diamond-spinner\">
        <div class=\"eltd-preload-square eltd-preload-square-1\"></div>
        <div class=\"eltd-preload-square eltd-preload-square-2\"></div>
        <div class=\"eltd-preload-square eltd-preload-square-4\"></div>
        <div class=\"eltd-preload-square eltd-preload-square-3\"></div>
      </div>        
    </div>
  </div>
</div>
<!-- <a id=\"buttton\"></a> -->
<a id=\"eltd-back-to-top\" href=\"#\">
  <span class=\"eltd-icon-stack\"></span>
  <span class=\"eltd-back-to-top-text\">Top</span>
  <span class=\"arrow_carrot-up eltd-back-to-top-arrow\"></span>
</a>
<div id=\"main-wrapper\" class=\"wrapper\">
  ";
        // line 73
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 74
        echo "    <nav id=\"sidebar\" class=\"active\">
        <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info navbar-btn\">
          <i class=\"fas fa-bars\"></i>
        </button>
      <div class=\"sidebar-header\">
        ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo_header", [])), "html", null, true);
        echo "
        <div class=\"logo-small\"><a href=\"/\" title=\"Home\" rel=\"home\"><img src=\"/";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/logo2.png\" alt=\"home\"></a></div>
        <div class=\"nav-toggle\">
          ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        </div>
      </div>
    </nav>
  <div id=\"content\">
    ";
        // line 88
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 138
        echo "  </div>
</div>
";
    }

    // line 88
    public function block_main($context, array $blocks = [])
    {
        // line 89
        echo "      <div role=\"main\" class=\"main-container container-fluid js-quickedit-main-content\" id=\"body-container\">
        <div class=\"row\">
          <div class=\"container-inner\">
            ";
        // line 93
        echo "            ";
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 94
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-lg-6 col-md-12 col-sm-12") : ("")), 1 => ((($this->getAttribute(        // line 95
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-lg-9 col-md-12 col-sm-12") : ("")), 2 => ((($this->getAttribute(        // line 96
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-lg-9 col-md-12 col-sm-12") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 97
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-lg-12 col-md-12 col-sm-12 custom-columns") : (""))];
        // line 99
        echo "            <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">
              ";
        // line 101
        echo "              ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 102
            echo "                ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 105
            echo "              ";
        }
        // line 106
        echo "              ";
        // line 107
        echo "              ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 108
            echo "                ";
            $this->displayBlock('help', $context, $blocks);
            // line 111
            echo "              ";
        }
        // line 112
        echo "              ";
        // line 113
        echo "              ";
        $this->displayBlock('content', $context, $blocks);
        // line 117
        echo "            </section>
            ";
        // line 119
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 120
            echo "              ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 125
            echo "            ";
        }
        // line 126
        echo "          </div>
        </div>
        ";
        // line 128
        if ( !($context["logged_in"] ?? null)) {
            // line 129
            echo "          ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 130
                echo "            <footer class=\"footer ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
                echo "\" role=\"contentinfo\">
              ";
                // line 131
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
            </footer>
          ";
            }
            // line 134
            echo "        ";
        }
        // line 135
        echo "
      </div>
    ";
    }

    // line 102
    public function block_highlighted($context, array $blocks = [])
    {
        // line 103
        echo "                  <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
                ";
    }

    // line 108
    public function block_help($context, array $blocks = [])
    {
        // line 109
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
                ";
    }

    // line 113
    public function block_content($context, array $blocks = [])
    {
        // line 114
        echo "                <a id=\"main-content\"></a>
                ";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
              ";
    }

    // line 120
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 121
        echo "                <aside class=\"col-lg-3 col-md-12 col-sm-12\" role=\"complementary\">
                  ";
        // line 122
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
                </aside>
              ";
    }

    public function getTemplateName()
    {
        return "themes/flow2/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 122,  237 => 121,  234 => 120,  228 => 115,  225 => 114,  222 => 113,  215 => 109,  212 => 108,  205 => 103,  202 => 102,  196 => 135,  193 => 134,  187 => 131,  182 => 130,  179 => 129,  177 => 128,  173 => 126,  170 => 125,  167 => 120,  164 => 119,  161 => 117,  158 => 113,  156 => 112,  153 => 111,  150 => 108,  147 => 107,  145 => 106,  142 => 105,  139 => 102,  136 => 101,  131 => 99,  129 => 97,  128 => 96,  127 => 95,  126 => 94,  124 => 93,  119 => 89,  116 => 88,  110 => 138,  107 => 88,  99 => 82,  94 => 80,  90 => 79,  83 => 74,  81 => 73,  60 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/flow2/templates/system/page.html.twig", "/var/www/html/drupal/themes/flow2/templates/system/page.html.twig");
    }
}
