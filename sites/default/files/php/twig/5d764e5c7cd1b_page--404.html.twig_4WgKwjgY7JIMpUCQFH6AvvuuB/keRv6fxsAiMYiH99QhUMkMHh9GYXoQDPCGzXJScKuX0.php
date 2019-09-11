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

/* themes/yg_simple/templates/page/page--404.html.twig */
class __TwigTemplate_588641e37e35f427cbc5b26d405d40780537818f985500df30283ba60c4bcea3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 112, "autoescape" => 113];
        $filters = ["escape" => 65, "t" => 65, "raw" => 114, "render" => 124];
        $functions = ["path" => 65];

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
        // line 59
        echo "<div id=\"fh5co-wrap\">
  <header id=\"fh5co-header\">
    <div class=\"container\">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#yg-simple-navbar-collapse\"> <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
        <a class=\"navbar-brand page-scroll\" href=\"";
        // line 65
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
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
        <!-- /.navbar-collapse --> 
    </div>
  </header>
<!-- Content -->
<div class=\"fh5co-hero\" style=\"background-image: url(images/hero_1.jpg);\" data-stellar-background-ratio=\"0.5\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table\">
        <div class=\"fh5co-intro fh5co-table-cell\">
          <h1 class=\"text-center\">";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "#title", [], "array")), "html", null, true);
        echo "</h1>
          <p>";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 404 Page -->
<div id=\"page-not-found\">
  <div class=\"container\">  
    <div class=\"row\"> 
      <div class=\"col-xs-12 col-md-12 text-center\">
        <div class=\"section-title wow fadeInUp\" data-wow-delay=\"0.3s\">
          <h1>404</h1>
          <h2>Page Not Found</h2>
        </div>        
        <div class=\"page-not-found-text\">
          <h3 class=\"title wow fadeInUp\" data-wow-delay=\"0.3s\">Sorry, we can't find that page</h3>
          <p class=\"wow fadeInUp\" data-wow-delay=\"0.6s\">Sorry! The page you are trying to reach does not exist, or has been moved.</p>
          <a href=\"";
        // line 97
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\" class=\"enquiry-btn custom-btn wow fadeInLeft\" data-wow-delay=\"0.9s\">Go Home</a>
        </div>
      </div>      
    </div>
  </div>
</div>
<!-- 404 Page End -->
</div> 
<!-- FOOTER -->
<!-- END fh5co-wrap -->
  <footer id=\"fh5co-footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4\">
          <h3>";
        // line 111
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_title"] ?? null)), "html", null, true);
        echo "</h3>
            ";
        // line 112
        if (($context["desc"] ?? null)) {
            // line 113
            echo "              ";
            // line 114
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["desc"] ?? null)));
            echo "
              ";
            // line 116
            echo "            ";
        }
        // line 117
        echo "        </div>
        <div class=\"col-md-3 col-md-push-1\">
          ";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-3 col-md-push-1\">
          <h3>";
        // line 122
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["social_title"] ?? null)), "html", null, true);
        echo "</h3>
          <ul class=\"fh5co-social\">
            ";
        // line 124
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["twitter_url"] ?? null)))) {
            // line 125
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-twitter\"></i> <span>Twitter</span></a></li>
            ";
        }
        // line 126
        echo " 
            ";
        // line 127
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["facebook_url"] ?? null)))) {
            // line 128
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-facebook\"></i> <span>Facebook</span></a></li>
            ";
        }
        // line 130
        echo "            ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["instagram_url"] ?? null)))) {
            // line 131
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-instagram\"></i> <span>Instagram</span></a></li>
            ";
        }
        // line 133
        echo "            ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["google_plus_url"] ?? null)))) {
            // line 134
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
            echo "\"><i class=\"icon-google\"></i> <span>Google Plus</span></a></li>
            ";
        }
        // line 136
        echo "          </ul>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-md-12 fh5co-copyright text-center\">
            ";
        // line 141
        if (($context["sub_footer"] ?? null)) {
            // line 142
            echo "              ";
            // line 143
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["sub_footer"] ?? null)));
            echo "
              ";
            // line 145
            echo "            ";
        }
        // line 146
        echo "        </div>
      </div>
    </div>
  </footer>";
    }

    public function getTemplateName()
    {
        return "themes/yg_simple/templates/page/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 146,  214 => 145,  209 => 143,  207 => 142,  205 => 141,  198 => 136,  192 => 134,  189 => 133,  183 => 131,  180 => 130,  174 => 128,  172 => 127,  169 => 126,  163 => 125,  161 => 124,  156 => 122,  150 => 119,  146 => 117,  143 => 116,  138 => 114,  136 => 113,  134 => 112,  130 => 111,  113 => 97,  92 => 79,  88 => 78,  74 => 67,  63 => 65,  55 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_simple/templates/page/page--404.html.twig", "/var/www/html/drupal/themes/yg_simple/templates/page/page--404.html.twig");
    }
}
