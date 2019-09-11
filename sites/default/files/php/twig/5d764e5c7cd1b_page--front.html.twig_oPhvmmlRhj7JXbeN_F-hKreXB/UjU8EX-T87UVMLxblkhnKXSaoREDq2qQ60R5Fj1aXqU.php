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

/* themes/yg_simple/templates/page--front.html.twig */
class __TwigTemplate_0b75e4afcb19c71dac9235d3ff4b9869ae90b7514a4a8bc30032b5d9ee5d1770 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 23, "autoescape" => 24];
        $filters = ["escape" => 7, "t" => 7, "raw" => 25, "render" => 35];
        $functions = ["path" => 7];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'autoescape'],
                ['escape', 't', 'raw', 'render'],
                ['path']
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
        // line 1
        echo "<div id=\"fh5co-wrap\">
  <header id=\"fh5co-header\">
    <div class=\"container\">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#yg-simple-navbar-collapse\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
        <a class=\"navbar-brand page-scroll\" href=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
        echo "\"><img src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null)), "html", null, true);
        echo "\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
        echo "\"></a> </div> 
        <!-- Collect the nav links, forms, and other content for toggling -->
          ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
        <!-- /.navbar-collapse --> 
    </div>
  </header>
  <!-- Content -->
  ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
 </div> 
<!-- END fh5co-wrap -->

  <footer id=\"fh5co-footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4\">
          <h3>";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_title"] ?? null)), "html", null, true);
        echo "</h3>
            ";
        // line 23
        if (($context["desc"] ?? null)) {
            // line 24
            echo "              ";
            // line 25
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["desc"] ?? null)));
            echo "
              ";
            // line 27
            echo "            ";
        }
        // line 28
        echo "        </div>
        <div class=\"col-md-3 col-md-push-1\">
          ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-3 col-md-push-1\">
          <h3>";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_title"] ?? null)), "html", null, true);
        echo "</h3>
          <ul class=\"fh5co-social\">
            ";
        // line 35
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["twitter_url"] ?? null)))) {
            // line 36
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-twitter\"></i> <span>Twitter</span></a></li>
            ";
        }
        // line 37
        echo " 
            ";
        // line 38
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["facebook_url"] ?? null)))) {
            // line 39
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-facebook\"></i> <span>Facebook</span></a></li>
            ";
        }
        // line 41
        echo "            ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["instagram_url"] ?? null)))) {
            // line 42
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-instagram\"></i> <span>Instagram</span></a></li>
            ";
        }
        // line 44
        echo "            ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["google_plus_url"] ?? null)))) {
            // line 45
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-google\"></i> <span>Google Plus</span></a></li>
            ";
        }
        // line 47
        echo "          </ul>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-12 fh5co-copyright text-center\">
            <p>
           <small class=\"block\">&copy; 2018 YG Simple. All Rights Reserved.</small>
           <small class=\"block\">Designed by <a href=\"http://freehtml5.co/\" target=\"_blank\">FreeHTML5.co</a> Druapl theme by <a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\">Drupal Developers Studio</a></small>
         </p>
        </div>
      </div>
    </div>
  </footer>";
    }

    public function getTemplateName()
    {
        return "themes/yg_simple/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 47,  155 => 45,  152 => 44,  146 => 42,  143 => 41,  137 => 39,  135 => 38,  132 => 37,  126 => 36,  124 => 35,  119 => 33,  113 => 30,  109 => 28,  106 => 27,  101 => 25,  99 => 24,  97 => 23,  93 => 22,  82 => 14,  74 => 9,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_simple/templates/page--front.html.twig", "/var/www/html/drupal/themes/yg_simple/templates/page--front.html.twig");
    }
}
