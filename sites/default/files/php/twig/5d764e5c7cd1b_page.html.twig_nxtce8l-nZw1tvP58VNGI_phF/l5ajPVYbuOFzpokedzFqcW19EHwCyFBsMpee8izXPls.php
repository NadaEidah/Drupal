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

/* themes/yg_elate/templates/page.html.twig */
class __TwigTemplate_701d9ee2e04d11e430dcdece14a721eda029e6a7c6f5c15358039a44f2e1309d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 59, "if" => 60, "block" => 81];
        $filters = ["escape" => 69];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
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
        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : (""));
        // line 60
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "primary_menu", []))) {
            // line 61
            echo "  
  ";
            // line 62
            if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
                // line 63
                echo "    <header role=\"banner\" id=\"fh5co-header\">
      <div class=\"container\">
        <!-- <div class=\"row\"> -->
          <nav class=\"navbar navbar-default\">
          <div class=\"navbar-header\">
          <a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\"><i></i></a>
          ";
                // line 69
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                echo "
          </div>
            
            ";
                // line 72
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
                echo "
          </nav>
        <!-- </div> -->
      </div>
  </header>
      ";
            }
            // line 77
            echo "  
";
        }
        // line 79
        echo "
";
        // line 81
        $this->displayBlock('main', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 163
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 177
        echo "

";
    }

    // line 81
    public function block_main($context, array $blocks = [])
    {
        // line 82
        echo "  <div role=\"main\" class=\"blog-container js-quickedit-main-content\">
    <div class=\"\">


      ";
        // line 87
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 88
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 93
            echo "      ";
        }
        // line 94
        echo "
      ";
        // line 96
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 97
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 102
            echo "      ";
        }
        // line 103
        echo "
      ";
        // line 105
        echo "      ";
        // line 106
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 107
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 108
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 109
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 110
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("") : (""))];
        // line 113
        echo "      <section ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 116
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 117
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 120
            echo "        ";
        }
        // line 121
        echo "
        ";
        // line 123
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 124
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 127
            echo "        ";
        }
        // line 128
        echo "
        ";
        // line 130
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 131
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 134
            echo "        ";
        }
        // line 135
        echo "
        ";
        // line 137
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 138
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 141
            echo "        ";
        }
        // line 142
        echo "
        ";
        // line 144
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 148
        echo "      </section>

      ";
        // line 151
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 152
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 157
            echo "      ";
        }
        // line 158
        echo "   </div>
   </div>
";
    }

    // line 88
    public function block_header($context, array $blocks = [])
    {
        // line 89
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            
          </div>
        ";
    }

    // line 97
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 98
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 117
    public function block_highlighted($context, array $blocks = [])
    {
        // line 118
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 124
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 125
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
        echo "
          ";
    }

    // line 131
    public function block_action_links($context, array $blocks = [])
    {
        // line 132
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
          ";
    }

    // line 138
    public function block_help($context, array $blocks = [])
    {
        // line 139
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 144
    public function block_content($context, array $blocks = [])
    {
        // line 145
        echo "          <a id=\"main-content\"></a>
          ";
        // line 146
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 152
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 153
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 154
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 163
    public function block_footer($context, array $blocks = [])
    {
        // line 164
        echo "  <footer id=\"footer\" role=\"contentinfo\">
    <a href=\"#\" class=\"gotop js-gotop\"><i class=\"fa fa-arrow-up\" aria-hidden=\"true\"></i></a>
    <div class=\"container\">
      <div class=\"\">
        <div class=\"col-md-12 text-center\">
          ";
        // line 169
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
          
        </div>
      </div>
    </div>
  </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/yg_elate/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 169,  329 => 164,  326 => 163,  319 => 154,  316 => 153,  313 => 152,  307 => 146,  304 => 145,  301 => 144,  294 => 139,  291 => 138,  284 => 132,  281 => 131,  274 => 125,  271 => 124,  264 => 118,  261 => 117,  254 => 99,  251 => 98,  248 => 97,  241 => 89,  238 => 88,  232 => 158,  229 => 157,  226 => 152,  223 => 151,  219 => 148,  216 => 144,  213 => 142,  210 => 141,  207 => 138,  204 => 137,  201 => 135,  198 => 134,  195 => 131,  192 => 130,  189 => 128,  186 => 127,  183 => 124,  180 => 123,  177 => 121,  174 => 120,  171 => 117,  168 => 116,  162 => 113,  160 => 110,  159 => 109,  158 => 108,  157 => 107,  156 => 106,  154 => 105,  151 => 103,  148 => 102,  145 => 97,  142 => 96,  139 => 94,  136 => 93,  133 => 88,  130 => 87,  124 => 82,  121 => 81,  115 => 177,  111 => 163,  109 => 162,  106 => 161,  104 => 81,  101 => 79,  97 => 77,  88 => 72,  82 => 69,  74 => 63,  72 => 62,  69 => 61,  67 => 60,  65 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_elate/templates/page.html.twig", "/var/www/html/drupal/themes/yg_elate/templates/page.html.twig");
    }
}
