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

/* themes/drupal8_custom_theme/templates/layout/page.html.twig */
class __TwigTemplate_3ae33fb3bc5322fb3142e67b8b85e42fdec2200c81576a6cf54f1829497d09b9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 74, "for" => 118];
        $filters = ["escape" => 75, "raw" => 119, "date" => 323];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"\">
      <div class=\"\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 75
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
        ";
        }
        // line 77
        echo "      </div>

      <!-- Navigation -->
      <div class=\"\">
        ";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 82
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
        ";
        }
        // line 84
        echo "      </div>
      <!--End Navigation -->

      <!-- Navigation -->
      <div class=\"\">
        <!--Search-->
          ";
        // line 90
        if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
            // line 91
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
          ";
        }
        // line 93
        echo "        <!--End Search-->
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 102
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", []))) {
            echo "  
    <div class=\"slideshow\">
      ";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 107
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->

<div class=\"main-content-wrap\">

  <!-- Start Slider -->
  ";
        // line 115
        if (($context["is_front"] ?? null)) {
            // line 116
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 119
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "      </ul>
    </div>
  ";
        }
        // line 124
        echo "  <!-- End Slider -->

  <!--Home page message-->
  ";
        // line 127
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "homepagemessage", []))) {
            // line 128
            echo "    <div class=\"container-sub\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 131
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepagemessage", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 136
        echo "  <!--End Highlighted-->

  <!-- Page Title -->
  ";
        // line 139
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 140
            echo "    <div id=\"page-title\">
      <div id=\"page-title-inner\">
        <!-- start: Container-sub -->
        <div class=\"container-sub\">
          ";
            // line 144
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 149
        echo "  <!-- End Page Title -- >


  <!-- layout -->
  ";
        // line 153
        if ( !($context["is_front"] ?? null)) {
            // line 154
            echo "    <div id=\"wrapper\" class=\"main-container\">

      <!--Highlighted-->
      ";
            // line 157
            if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
                // line 158
                echo "        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
                // line 160
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
                echo "
          </div>
        </div>
      ";
            }
            // line 164
            echo "      <!--End Highlighted-->

      <!-- start: Container-sub -->
      <div class=\"container-sub\">
                
        <!--start:content -->
        ";
            // line 170
            if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
                // line 171
                echo "          <div class=\"breadcrumb-wrap\">
            <div class=\"breadcrumb-subwrap\">";
                // line 172
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
                echo "</div>
          </div>
        ";
            }
            // line 175
            echo "
        <div class=\"row layout\">

          <!--- Start Left SideBar -->
          ";
            // line 179
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
                // line 180
                echo "            <div class=\"sidebar\" >
              <div class = ";
                // line 181
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
                echo " >
                ";
                // line 182
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 186
            echo "          <!---End Right SideBar -->

          <!--- Start content -->
          ";
            // line 189
            if (($this->getAttribute(($context["page"] ?? null), "content", []) &&  !($context["is_front"] ?? null))) {
                // line 190
                echo "            <div class=\"content_layout\">
              <div class=";
                // line 191
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
                echo ">
                ";
                // line 192
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 196
            echo "          <!---End content -->

          <!--- Start Right SideBar -->
          ";
            // line 199
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
                // line 200
                echo "            <div class=\"sidebar\">
              <div class=";
                // line 201
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
                echo ">
                ";
                // line 202
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
                echo "
              </div>
            </div>
          ";
            }
            // line 206
            echo "          <!---End Right SideBar -->
          
        </div>
        <!--End Content -->

        <!--Start Content Bottom-->
        ";
            // line 212
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
                // line 213
                echo "          <div class=\"row\">
            ";
                // line 214
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 217
            echo "        <!--End Content Bottom-->

      </div>
    </div>
  ";
        }
        // line 222
        echo "  <!-- End layout -->


  <!-- Start Google Map -->
  ";
        // line 226
        if ($this->getAttribute(($context["page"] ?? null), "google_map", [])) {
            // line 227
            echo "    <div class=\"google-map\">
      ";
            // line 228
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "google_map", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 231
        echo "  <!-- End Google Map -->


  <!-- Start bottom -->
  ";
        // line 235
        if (($context["is_front"] ?? null)) {
            echo "  
    ";
            // line 236
            if ((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", []))) {
                // line 237
                echo "      <div class=\"bottom-widgets\">
        <div class=\"container-sub\">        
          <div class=\"row-sub clearfix\">

            <!-- Start Bottom First Region -->          
            ";
                // line 242
                if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                    // line 243
                    echo "              <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                    echo ">
                ";
                    // line 244
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 246
                echo "          
            <!-- End Bottom First Region -->

            <!-- Start Bottom Second Region -->
            ";
                // line 250
                if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                    // line 251
                    echo "              <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                    echo ">
                ";
                    // line 252
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 254
                echo "          
            <!-- End Bottom Second Region -->

            <!-- Start Bottom third Region -->          
            ";
                // line 258
                if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                    // line 259
                    echo "              <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                    echo ">
                ";
                    // line 260
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 262
                echo "          
            <!-- End Bottom Third Region -->

            ";
                // line 265
                if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                    // line 266
                    echo "            <div class = ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                    echo ">
              ";
                    // line 267
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                    echo "
            </div>
            ";
                }
                // line 270
                echo "
          </div>
        </div>
      </div>
    ";
            }
            // line 275
            echo "  ";
        }
        // line 276
        echo "  <!--End Bottom -->


  <!-- Start Footer Menu -->
  ";
        // line 280
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 281
            echo "    <div class=\"footer-menu\">
      <div class=\"container-sub\">
        <div class=\"row-sub clearfix\">
          <div class=\"col-sm-6\">
            ";
            // line 285
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
            echo "
          </div>
          ";
            // line 287
            if (($context["show_social_icon"] ?? null)) {
                // line 288
                echo "          <div class=\"col-sm-6\">
            <div class=\"social-media\">
              ";
                // line 290
                if (($context["facebook_url"] ?? null)) {
                    // line 291
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 293
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 294
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 296
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 297
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 299
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 300
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 302
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 303
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              ";
                }
                // line 305
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 306
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 308
                echo "            </div>
          </div>
          ";
            }
            // line 311
            echo "        </div>
      </div>
    </div>
  ";
        }
        // line 315
        echo "  <!-- End Footer Menu -->

  <div class=\"copyright\">
    <div class=\"container-sub\">
      <div class=\"row-sub clearfix\">

        <!-- Copyright -->
        <div class=\"col-sm-6\">
          <p class=\"copyright\">Copyright © ";
        // line 323
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved</p>
        </div>
        <!-- End Copyright -->

        <!-- Credit link -->
        ";
        // line 328
        if (($context["show_credit_link"] ?? null)) {
            // line 329
            echo "          <div class=\"col-sm-6\">
            <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
          </div>
        ";
        }
        // line 333
        echo "        <!-- End Credit link -->
        
      </div>
    </div>
  </div>

</div>


";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_custom_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 333,  565 => 329,  563 => 328,  555 => 323,  545 => 315,  539 => 311,  534 => 308,  528 => 306,  525 => 305,  519 => 303,  516 => 302,  510 => 300,  507 => 299,  501 => 297,  498 => 296,  492 => 294,  489 => 293,  483 => 291,  481 => 290,  477 => 288,  475 => 287,  470 => 285,  464 => 281,  462 => 280,  456 => 276,  453 => 275,  446 => 270,  440 => 267,  435 => 266,  433 => 265,  428 => 262,  422 => 260,  417 => 259,  415 => 258,  409 => 254,  403 => 252,  398 => 251,  396 => 250,  390 => 246,  384 => 244,  379 => 243,  377 => 242,  370 => 237,  368 => 236,  364 => 235,  358 => 231,  352 => 228,  349 => 227,  347 => 226,  341 => 222,  334 => 217,  328 => 214,  325 => 213,  323 => 212,  315 => 206,  308 => 202,  304 => 201,  301 => 200,  299 => 199,  294 => 196,  287 => 192,  283 => 191,  280 => 190,  278 => 189,  273 => 186,  266 => 182,  262 => 181,  259 => 180,  257 => 179,  251 => 175,  245 => 172,  242 => 171,  240 => 170,  232 => 164,  225 => 160,  221 => 158,  219 => 157,  214 => 154,  212 => 153,  206 => 149,  198 => 144,  192 => 140,  190 => 139,  185 => 136,  177 => 131,  172 => 128,  170 => 127,  165 => 124,  160 => 121,  151 => 119,  147 => 118,  143 => 116,  141 => 115,  131 => 107,  125 => 104,  120 => 102,  109 => 93,  103 => 91,  101 => 90,  93 => 84,  87 => 82,  85 => 81,  79 => 77,  73 => 75,  71 => 74,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/drupal8_custom_theme/templates/layout/page.html.twig", "/var/www/html/drupal/themes/drupal8_custom_theme/templates/layout/page.html.twig");
    }
}
