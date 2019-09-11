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

/* themes/photographer/templates/page.html.twig */
class __TwigTemplate_0eed4c346bc0864aa6b0fe68ced25a2b8e0d04adedf46c916d017ef7ae27b248 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 12, "trans" => 62, "set" => 82, "for" => 95];
        $filters = ["escape" => 9];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans', 'set', 'for'],
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
        // line 1
        echo "<a name=\"Top\" id=\"Top\"></a>
<div id=\"color\" class=\"default\">
  <div id=\"page\">
      <div id=\"dynamicPanel\" >
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"staticPanel\">
              <div class=\"top_header col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
              </div>

              ";
        // line 12
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 13
            echo "                <nav id=\"site-navigation\" class=\"navbar navbar-default col-lg-8 col-md-8 col-sm-8 col-xs-12\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navbar-collapse\">
                           <i class=\"fa fa-bars\"></i>
                         </button>
                        <div id=\"main-navbar-collapse\" class=\"navbar-collapse collapse\">
                            ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
                        </div>
                    </div>
                </nav><!-- #site-navigation -->
              ";
        }
        // line 24
        echo "
            </div>

            ";
        // line 27
        if (($context["secondary_menu"] ?? null)) {
            // line 28
            echo "              <div class=\"col-lg-8\">
                <nav id=\"navigation\" class=\"navigation\" role=\"navigation\">
                  <div class=\"container\">
                    ";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null)), "html", null, true);
            echo "
                  </div>
                </nav>
              </div>  
            ";
        }
        // line 36
        echo "
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>

          </div>
        </div>
      </div>
      ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_title", [])), "html", null, true);
        echo "

      
      <div class=\"video_block\">
      <div class=\"container\">

        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <div type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</div>
              ";
        // line 59
        if ($this->getAttribute(($context["page"] ?? null), "video", [])) {
            // line 60
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "video", [])), "html", null, true);
            echo "
                ";
        } else {
            // line 61
            echo " 
               <p>";
            // line 62
            echo t("In order to place video in the block, please go to Admin Area -> Structure -> Blocks -> Video, there create custom block for this region and specify the video code in this block.", array());
            echo "</p>
              ";
        }
        // line 63
        echo "  
            </div>
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 66
        echo t("Close", array());
        echo "</button>
            </div>
          </div>
        </div>
      </div>
        <div class=\"play\">
          <div id=\"play\"></div>
        <div class=\"border_button\">
        <div type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
        </div>
      </div>
      </div>
    
      ";
        // line 79
        if (($context["show_hide_icon"] ?? null)) {
            // line 80
            echo "              <div class=\"socBox col-lg-12\">
                <ul class=\"socIcons\">
                    ";
            // line 82
            $context["soc"] = ["twitter" =>             // line 83
($context["twitter"] ?? null), "facebook" =>             // line 84
($context["facebook"] ?? null), "flickr" =>             // line 85
($context["flickr"] ?? null), "linkedin" =>             // line 86
($context["linkedin"] ?? null), "play" =>             // line 87
($context["youtube"] ?? null), "pinterest" =>             // line 88
($context["pinterest"] ?? null), "google-plus" =>             // line 89
($context["google"] ?? null), "dribbble" =>             // line 90
($context["dribbble"] ?? null), "vimeo-square" =>             // line 91
($context["vimeo"] ?? null), "instagram" =>             // line 92
($context["instagram"] ?? null), "vk" =>             // line 93
($context["vk"] ?? null)];
            // line 95
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["soc"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 96
                echo "                        ";
                if ($context["value"]) {
                    // line 97
                    echo "                          <li>
                              <a href=\"";
                    // line 98
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"]), "html", null, true);
                    echo "\" target=\"_blank\">
                                  <i class=\"fa fa-";
                    // line 99
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                    echo "\"></i>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"]), "html", null, true);
                    echo "
                              </a>
                          </li>
                        ";
                }
                // line 103
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                  </ul>
                </div>
              ";
        }
        // line 107
        echo "

      ";
        // line 109
        if ($this->getAttribute(($context["page"] ?? null), "social_icon", [])) {
            // line 110
            echo "        <section id=\"social_icon_top\" class=\"social_icon\">
          <div class=\"\">
            ";
            // line 112
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "social_icon", [])), "html", null, true);
            echo "
          </div>
        </section>
      ";
        }
        // line 116
        echo "      </div>
    </div>
  </div>

<div class=\"wrapper\">
";
        // line 121
        if ($this->getAttribute(($context["page"] ?? null), "slideshow", [])) {
            // line 122
            echo "  <section id=\"slideshow\" class=\"slideshow\">
    <div class=\"\">
      ";
            // line 124
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
            echo "
    </div>
  </section>
";
        }
        // line 128
        echo "
";
        // line 129
        if (((($this->getAttribute(($context["page"] ?? null), "top1", []) || $this->getAttribute(($context["page"] ?? null), "top2", [])) || $this->getAttribute(($context["page"] ?? null), "top3", [])) || $this->getAttribute(($context["page"] ?? null), "top4", []))) {
            // line 130
            echo "<div id=\"page1\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 133
            if ($this->getAttribute(($context["page"] ?? null), "top1", [])) {
                // line 134
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top2", []) && $this->getAttribute(($context["page"] ?? null), "top3", [])) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 135
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 136
($context["page"] ?? null), "top2", []) && $this->getAttribute(($context["page"] ?? null), "top3", []))) {
                    // line 137
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 138
($context["page"] ?? null), "top2", []) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 139
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 140
($context["page"] ?? null), "top3", []) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 141
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 142
($context["page"] ?? null), "top2", []) || $this->getAttribute(($context["page"] ?? null), "top3", [])) || $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 143
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 145
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 147
                echo "          <div class=\"top1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 150
            echo "</div>
      ";
            // line 151
            if ($this->getAttribute(($context["page"] ?? null), "top2", [])) {
                // line 152
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top3", [])) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 153
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 154
($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top3", []))) {
                    // line 155
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 156
($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 157
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 158
($context["page"] ?? null), "top3", []) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 159
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 160
($context["page"] ?? null), "top1", []) || $this->getAttribute(($context["page"] ?? null), "top3", [])) || $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 161
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 163
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 165
                echo "          <div class=\"top2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 168
            echo "
      ";
            // line 169
            if ($this->getAttribute(($context["page"] ?? null), "top3", [])) {
                // line 170
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top2", [])) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 171
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 172
($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top2", []))) {
                    // line 173
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 174
($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 175
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 176
($context["page"] ?? null), "top2", []) && $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 177
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 178
($context["page"] ?? null), "top1", []) || $this->getAttribute(($context["page"] ?? null), "top2", [])) || $this->getAttribute(($context["page"] ?? null), "top4", []))) {
                    // line 179
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 181
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 183
                echo "          <div class=\"top3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 186
            echo "
      ";
            // line 187
            if ($this->getAttribute(($context["page"] ?? null), "top4", [])) {
                // line 188
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top2", [])) && $this->getAttribute(($context["page"] ?? null), "top3", []))) {
                    // line 189
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 190
($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top2", []))) {
                    // line 191
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 192
($context["page"] ?? null), "top1", []) && $this->getAttribute(($context["page"] ?? null), "top3", []))) {
                    // line 193
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 194
($context["page"] ?? null), "top2", []) && $this->getAttribute(($context["page"] ?? null), "top3", []))) {
                    // line 195
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 196
($context["page"] ?? null), "top1", []) || $this->getAttribute(($context["page"] ?? null), "top2", [])) || $this->getAttribute(($context["page"] ?? null), "top3", []))) {
                    // line 197
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 199
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 201
                echo "          <div class=\"top4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 204
            echo "
    </div>
  </div>
";
        }
        // line 208
        echo "
";
        // line 209
        if (((($this->getAttribute(($context["page"] ?? null), "top_content1", []) || $this->getAttribute(($context["page"] ?? null), "top_content2", [])) || $this->getAttribute(($context["page"] ?? null), "top_content3", [])) || $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
            // line 210
            echo "  <div id=\"page2\">
    <div class=\"row\">
      ";
            // line 212
            if ($this->getAttribute(($context["page"] ?? null), "top_content1", [])) {
                // line 213
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top_content2", []) && $this->getAttribute(($context["page"] ?? null), "top_content3", [])) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 214
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 215
($context["page"] ?? null), "top_content2", []) && $this->getAttribute(($context["page"] ?? null), "top_content3", []))) {
                    // line 216
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 217
($context["page"] ?? null), "top_content2", []) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 218
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 219
($context["page"] ?? null), "top_content3", []) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 220
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 221
($context["page"] ?? null), "top_content2", []) || $this->getAttribute(($context["page"] ?? null), "top_content3", [])) || $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 222
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 224
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 226
                echo "          <div class=\"top_content1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_content1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 229
            echo "
      ";
            // line 230
            if ($this->getAttribute(($context["page"] ?? null), "top_content2", [])) {
                // line 231
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content3", [])) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 232
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 233
($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content3", []))) {
                    // line 234
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 235
($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 236
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 237
($context["page"] ?? null), "top_content3", []) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 238
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 239
($context["page"] ?? null), "top_content1", []) || $this->getAttribute(($context["page"] ?? null), "top_content3", [])) || $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 240
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 242
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 244
                echo "          <div class=\"top_content2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_content2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 246
            echo "  

      ";
            // line 248
            if ($this->getAttribute(($context["page"] ?? null), "top_content3", [])) {
                // line 249
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content2", [])) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 250
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 251
($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content2", []))) {
                    // line 252
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 253
($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 254
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 255
($context["page"] ?? null), "top_content2", []) && $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 256
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 257
($context["page"] ?? null), "top_content1", []) || $this->getAttribute(($context["page"] ?? null), "top_content2", [])) || $this->getAttribute(($context["page"] ?? null), "top_content4", []))) {
                    // line 258
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 260
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 262
                echo "          <div class=\"top_content3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_content3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 265
            echo "
      ";
            // line 266
            if ($this->getAttribute(($context["page"] ?? null), "top_content4", [])) {
                // line 267
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content2", [])) && $this->getAttribute(($context["page"] ?? null), "top_content3", []))) {
                    // line 268
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 269
($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content2", []))) {
                    // line 270
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 271
($context["page"] ?? null), "top_content1", []) && $this->getAttribute(($context["page"] ?? null), "top_content3", []))) {
                    // line 272
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 273
($context["page"] ?? null), "top_content2", []) && $this->getAttribute(($context["page"] ?? null), "top_content3", []))) {
                    // line 274
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 275
($context["page"] ?? null), "top_content1", []) || $this->getAttribute(($context["page"] ?? null), "top_content2", [])) || $this->getAttribute(($context["page"] ?? null), "top_content3", []))) {
                    // line 276
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 278
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 280
                echo "          <div class=\"top4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_content4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 283
            echo "
    </div>
  </div>
";
        }
        // line 287
        echo "
";
        // line 288
        if (((($this->getAttribute(($context["page"] ?? null), "line1", []) || $this->getAttribute(($context["page"] ?? null), "line2", [])) || $this->getAttribute(($context["page"] ?? null), "line3", [])) || $this->getAttribute(($context["page"] ?? null), "line4", []))) {
            // line 289
            echo "<div id=\"page3\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 292
            if ($this->getAttribute(($context["page"] ?? null), "line1", [])) {
                // line 293
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "line2", []) && $this->getAttribute(($context["page"] ?? null), "line3", [])) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 294
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 295
($context["page"] ?? null), "line2", []) && $this->getAttribute(($context["page"] ?? null), "line3", []))) {
                    // line 296
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 297
($context["page"] ?? null), "line2", []) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 298
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 299
($context["page"] ?? null), "line3", []) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 300
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 301
($context["page"] ?? null), "line2", []) || $this->getAttribute(($context["page"] ?? null), "line3", [])) || $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 302
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 304
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 306
                echo "          <div class=\"line1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "line1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 309
            echo "</div>
      ";
            // line 310
            if ($this->getAttribute(($context["page"] ?? null), "line2", [])) {
                // line 311
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line3", [])) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 312
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 313
($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line3", []))) {
                    // line 314
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 315
($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 316
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 317
($context["page"] ?? null), "line3", []) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 318
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 319
($context["page"] ?? null), "line1", []) || $this->getAttribute(($context["page"] ?? null), "line3", [])) || $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 320
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 322
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 324
                echo "          <div class=\"line2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "line2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 326
            echo "  

      ";
            // line 328
            if ($this->getAttribute(($context["page"] ?? null), "line3", [])) {
                // line 329
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line2", [])) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 330
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 331
($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line2", []))) {
                    // line 332
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 333
($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 334
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 335
($context["page"] ?? null), "line2", []) && $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 336
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 337
($context["page"] ?? null), "line1", []) || $this->getAttribute(($context["page"] ?? null), "line2", [])) || $this->getAttribute(($context["page"] ?? null), "line4", []))) {
                    // line 338
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 340
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 342
                echo "          <div class=\"line3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "line3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 345
            echo "
      ";
            // line 346
            if ($this->getAttribute(($context["page"] ?? null), "line4", [])) {
                // line 347
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line2", [])) && $this->getAttribute(($context["page"] ?? null), "line3", []))) {
                    // line 348
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 349
($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line2", []))) {
                    // line 350
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 351
($context["page"] ?? null), "line1", []) && $this->getAttribute(($context["page"] ?? null), "line3", []))) {
                    // line 352
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 353
($context["page"] ?? null), "line2", []) && $this->getAttribute(($context["page"] ?? null), "line3", []))) {
                    // line 354
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 355
($context["page"] ?? null), "line1", []) || $this->getAttribute(($context["page"] ?? null), "line2", [])) || $this->getAttribute(($context["page"] ?? null), "line3", []))) {
                    // line 356
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 358
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 360
                echo "          <div class=\"line4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "line4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 363
            echo "
    </div>
  </div>
";
        }
        // line 367
        echo "
";
        // line 368
        if ($this->getAttribute(($context["page"] ?? null), "top_content", [])) {
            // line 369
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        ";
            // line 372
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_content", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 377
        echo "
";
        // line 378
        if (((($this->getAttribute(($context["page"] ?? null), "feature1", []) || $this->getAttribute(($context["page"] ?? null), "feature2", [])) || $this->getAttribute(($context["page"] ?? null), "feature3", [])) || $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
            // line 379
            echo "<div id=\"page4\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 382
            if ($this->getAttribute(($context["page"] ?? null), "feature1", [])) {
                // line 383
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "feature2", []) && $this->getAttribute(($context["page"] ?? null), "feature3", [])) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 384
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 385
($context["page"] ?? null), "feature2", []) && $this->getAttribute(($context["page"] ?? null), "feature3", []))) {
                    // line 386
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 387
($context["page"] ?? null), "feature2", []) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 388
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 389
($context["page"] ?? null), "feature3", []) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 390
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 391
($context["page"] ?? null), "feature2", []) || $this->getAttribute(($context["page"] ?? null), "feature3", [])) || $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 392
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 394
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 396
                echo "          <div class=\"feature1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 399
            echo "</div>
      ";
            // line 400
            if ($this->getAttribute(($context["page"] ?? null), "feature2", [])) {
                // line 401
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature3", [])) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 402
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 403
($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature3", []))) {
                    // line 404
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 405
($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 406
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 407
($context["page"] ?? null), "feature3", []) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 408
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 409
($context["page"] ?? null), "feature1", []) || $this->getAttribute(($context["page"] ?? null), "feature3", [])) || $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 410
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 412
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 414
                echo "          <div class=\"feature2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 417
            echo "
      ";
            // line 418
            if ($this->getAttribute(($context["page"] ?? null), "feature3", [])) {
                // line 419
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature2", [])) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 420
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 421
($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature2", []))) {
                    // line 422
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 423
($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 424
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 425
($context["page"] ?? null), "feature2", []) && $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 426
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 427
($context["page"] ?? null), "feature1", []) || $this->getAttribute(($context["page"] ?? null), "feature2", [])) || $this->getAttribute(($context["page"] ?? null), "feature4", []))) {
                    // line 428
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 430
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 432
                echo "          <div class=\"feature3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 435
            echo "
      ";
            // line 436
            if ($this->getAttribute(($context["page"] ?? null), "feature4", [])) {
                // line 437
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature2", [])) && $this->getAttribute(($context["page"] ?? null), "feature3", []))) {
                    // line 438
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 439
($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature2", []))) {
                    // line 440
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 441
($context["page"] ?? null), "feature1", []) && $this->getAttribute(($context["page"] ?? null), "feature3", []))) {
                    // line 442
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 443
($context["page"] ?? null), "feature2", []) && $this->getAttribute(($context["page"] ?? null), "feature3", []))) {
                    // line 444
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 445
($context["page"] ?? null), "feature1", []) || $this->getAttribute(($context["page"] ?? null), "feature2", [])) || $this->getAttribute(($context["page"] ?? null), "feature3", []))) {
                    // line 446
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 448
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 450
                echo "          <div class=\"feature4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "feature4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 453
            echo "
    </div>
  </div>
";
        }
        // line 457
        echo "
";
        // line 458
        if (((($this->getAttribute(($context["page"] ?? null), "contenttop1", []) || $this->getAttribute(($context["page"] ?? null), "contenttop2", [])) || $this->getAttribute(($context["page"] ?? null), "contenttop3", [])) || $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
            // line 459
            echo "<div id=\"page5\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 462
            if ($this->getAttribute(($context["page"] ?? null), "contenttop1", [])) {
                // line 463
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contenttop2", []) && $this->getAttribute(($context["page"] ?? null), "contenttop3", [])) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 464
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 465
($context["page"] ?? null), "contenttop2", []) && $this->getAttribute(($context["page"] ?? null), "contenttop3", []))) {
                    // line 466
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 467
($context["page"] ?? null), "contenttop2", []) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 468
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 469
($context["page"] ?? null), "contenttop3", []) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 470
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 471
($context["page"] ?? null), "contenttop2", []) || $this->getAttribute(($context["page"] ?? null), "contenttop3", [])) || $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 472
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 474
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 476
                echo "          <div class=\"contenttop1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contenttop1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 479
            echo "</div>
      ";
            // line 480
            if ($this->getAttribute(($context["page"] ?? null), "contenttop2", [])) {
                // line 481
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop3", [])) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 482
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 483
($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop3", []))) {
                    // line 484
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 485
($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 486
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 487
($context["page"] ?? null), "contenttop3", []) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 488
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 489
($context["page"] ?? null), "contenttop1", []) || $this->getAttribute(($context["page"] ?? null), "contenttop3", [])) || $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 490
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 492
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 494
                echo "          <div class=\"contenttop2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contenttop2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 497
            echo "
      ";
            // line 498
            if ($this->getAttribute(($context["page"] ?? null), "contenttop3", [])) {
                // line 499
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop2", [])) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 500
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 501
($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop2", []))) {
                    // line 502
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 503
($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 504
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 505
($context["page"] ?? null), "contenttop2", []) && $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 506
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 507
($context["page"] ?? null), "contenttop1", []) || $this->getAttribute(($context["page"] ?? null), "contenttop2", [])) || $this->getAttribute(($context["page"] ?? null), "contenttop4", []))) {
                    // line 508
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 510
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 512
                echo "          <div class=\"contenttop3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contenttop3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 515
            echo "
      ";
            // line 516
            if ($this->getAttribute(($context["page"] ?? null), "contenttop4", [])) {
                // line 517
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop2", [])) && $this->getAttribute(($context["page"] ?? null), "contenttop3", []))) {
                    // line 518
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 519
($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop2", []))) {
                    // line 520
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 521
($context["page"] ?? null), "contenttop1", []) && $this->getAttribute(($context["page"] ?? null), "contenttop3", []))) {
                    // line 522
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 523
($context["page"] ?? null), "contenttop2", []) && $this->getAttribute(($context["page"] ?? null), "contenttop3", []))) {
                    // line 524
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 525
($context["page"] ?? null), "contenttop1", []) || $this->getAttribute(($context["page"] ?? null), "contenttop2", [])) || $this->getAttribute(($context["page"] ?? null), "contenttop3", []))) {
                    // line 526
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 528
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 530
                echo "          <div class=\"contenttop4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contenttop4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 533
            echo "
    </div>
  </div>
";
        }
        // line 537
        echo "
 


  
    <a id=\"main-content\"></a>
    <div id=\"content\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 546
        if (($context["front_page"] ?? null)) {
            // line 547
            echo "
            ";
            // line 548
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
                // line 549
                echo "              <div class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
                ";
                // line 550
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 553
            echo "        
            <div class=\"content col-lg-";
            // line 554
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
            echo " col-md-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
            echo " col-sm-12 col-xs-12\">
              ";
            // line 555
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "

              ";
            // line 557
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
              ";
            // line 558
            if (($context["title"] ?? null)) {
                // line 559
                echo "                <h4>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "</h4>
              ";
            }
            // line 561
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "

              ";
            // line 563
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
            echo "

              ";
            // line 565
            if (($context["action_links"] ?? null)) {
                // line 566
                echo "                <nav class=\"action-links\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
                echo "</nav>
              ";
            }
            // line 568
            echo "
              ";
            // line 569
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
              ";
            // line 570
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
            </div>

            ";
            // line 573
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
                // line 574
                echo "              <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
                ";
                // line 575
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
                echo "
              </aside>
            ";
            }
            // line 578
            echo "
        ";
        } else {
            // line 580
            echo "
          ";
            // line 581
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
                // line 582
                echo "            <div class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
              ";
                // line 583
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 586
            echo "    
          <div class=\"content col-lg-";
            // line 587
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
            echo " col-md-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
            echo " col-sm-12 col-xs-12\">
            ";
            // line 588
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "

            ";
            // line 590
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
            echo "

             ";
            // line 592
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
              ";
            // line 593
            if (($context["title"] ?? null)) {
                // line 594
                echo "                <h2>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "</h2>
              ";
            }
            // line 596
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "

            ";
            // line 598
            if (($context["action_links"] ?? null)) {
                // line 599
                echo "              <nav class=\"action-links\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
                echo "</nav>
            ";
            }
            // line 601
            echo "            <div class=\"test_class\">
            ";
            // line 602
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>
            ";
            // line 604
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
          </div>

          ";
            // line 607
            if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
                // line 608
                echo "            <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
              ";
                // line 609
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
                echo "
            </aside>
          ";
            }
            // line 612
            echo "        ";
        }
        echo "     
      </div>
    </div>
    </div>

  ";
        // line 617
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 618
            echo "    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">
        ";
            // line 620
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 624
        echo "
  ";
        // line 625
        if (($context["messages"] ?? null)) {
            // line 626
            echo "    <section id=\"messages\" class=\"messages\">
      <div class=\"container\">
        ";
            // line 628
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 632
        echo "
  ";
        // line 633
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 634
            echo "    <section id=\"help\" class=\"help\">
      <div class=\"container\">
        ";
            // line 636
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 640
        echo "
  ";
        // line 641
        if (((($this->getAttribute(($context["page"] ?? null), "contentbottom1", []) || $this->getAttribute(($context["page"] ?? null), "contentbottom2", [])) || $this->getAttribute(($context["page"] ?? null), "contentbottom3", [])) || $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
            // line 642
            echo "  <div class=\"\">
    <div class=\"row\">
      ";
            // line 644
            if ($this->getAttribute(($context["page"] ?? null), "contentbottom1", [])) {
                // line 645
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contentbottom2", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", [])) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 646
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 647
($context["page"] ?? null), "contentbottom2", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", []))) {
                    // line 648
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 649
($context["page"] ?? null), "contentbottom2", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 650
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 651
($context["page"] ?? null), "contentbottom3", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 652
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 653
($context["page"] ?? null), "contentbottom2", []) || $this->getAttribute(($context["page"] ?? null), "contentbottom3", [])) || $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 654
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 656
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 658
                echo "          <div class=\"contentbottom1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contentbottom1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 661
            echo "
      ";
            // line 662
            if ($this->getAttribute(($context["page"] ?? null), "contentbottom2", [])) {
                // line 663
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", [])) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 664
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 665
($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", []))) {
                    // line 666
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 667
($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 668
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 669
($context["page"] ?? null), "contentbottom3", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 670
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 671
($context["page"] ?? null), "contentbottom1", []) || $this->getAttribute(($context["page"] ?? null), "contentbottom3", [])) || $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 672
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 674
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 676
                echo "          <div class=\"contentbottom2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contentbottom2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 679
            echo "
      ";
            // line 680
            if ($this->getAttribute(($context["page"] ?? null), "contentbottom3", [])) {
                // line 681
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom2", [])) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 682
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 683
($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom2", []))) {
                    // line 684
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 685
($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 686
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 687
($context["page"] ?? null), "contentbottom2", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 688
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 689
($context["page"] ?? null), "contentbottom1", []) || $this->getAttribute(($context["page"] ?? null), "contentbottom2", [])) || $this->getAttribute(($context["page"] ?? null), "contentbottom4", []))) {
                    // line 690
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 692
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 694
                echo "          <div class=\"contentbottom3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contentbottom3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 697
            echo "
      ";
            // line 698
            if ($this->getAttribute(($context["page"] ?? null), "contentbottom4", [])) {
                // line 699
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom2", [])) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", []))) {
                    // line 700
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 701
($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom2", []))) {
                    // line 702
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 703
($context["page"] ?? null), "contentbottom1", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", []))) {
                    // line 704
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 705
($context["page"] ?? null), "contentbottom2", []) && $this->getAttribute(($context["page"] ?? null), "contentbottom3", []))) {
                    // line 706
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 707
($context["page"] ?? null), "contentbottom1", []) || $this->getAttribute(($context["page"] ?? null), "contentbottom2", [])) || $this->getAttribute(($context["page"] ?? null), "contentbottom3", []))) {
                    // line 708
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 710
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 712
                echo "          <div class=\"contentbottom4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contentbottom4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 715
            echo "
    </div>
  </div>
";
        }
        // line 719
        echo "
";
        // line 720
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_line1", []) || $this->getAttribute(($context["page"] ?? null), "bottom_line2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_line3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
            // line 721
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 723
            if ($this->getAttribute(($context["page"] ?? null), "bottom_line1", [])) {
                // line 724
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom_line2", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", [])) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 725
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 726
($context["page"] ?? null), "bottom_line2", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", []))) {
                    // line 727
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 728
($context["page"] ?? null), "bottom_line2", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 729
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 730
($context["page"] ?? null), "bottom_line3", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 731
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 732
($context["page"] ?? null), "bottom_line2", []) || $this->getAttribute(($context["page"] ?? null), "bottom_line3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 733
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 735
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 737
                echo "          <div class=\"bottom_line1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_line1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 740
            echo "
      ";
            // line 741
            if ($this->getAttribute(($context["page"] ?? null), "bottom_line2", [])) {
                // line 742
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", [])) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 743
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 744
($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", []))) {
                    // line 745
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 746
($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 747
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 748
($context["page"] ?? null), "bottom_line3", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 749
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 750
($context["page"] ?? null), "bottom_line1", []) || $this->getAttribute(($context["page"] ?? null), "bottom_line3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 751
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 753
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 755
                echo "          <div class=\"bottom_line2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_line2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 758
            echo "
      ";
            // line 759
            if ($this->getAttribute(($context["page"] ?? null), "bottom_line3", [])) {
                // line 760
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line2", [])) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 761
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 762
($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line2", []))) {
                    // line 763
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 764
($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 765
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 766
($context["page"] ?? null), "bottom_line2", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 767
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 768
($context["page"] ?? null), "bottom_line1", []) || $this->getAttribute(($context["page"] ?? null), "bottom_line2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_line4", []))) {
                    // line 769
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 771
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 773
                echo "          <div class=\"bottom_line3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_line3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 776
            echo "
      ";
            // line 777
            if ($this->getAttribute(($context["page"] ?? null), "bottom_line4", [])) {
                // line 778
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line2", [])) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", []))) {
                    // line 779
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 780
($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line2", []))) {
                    // line 781
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 782
($context["page"] ?? null), "bottom_line1", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", []))) {
                    // line 783
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 784
($context["page"] ?? null), "bottom_line2", []) && $this->getAttribute(($context["page"] ?? null), "bottom_line3", []))) {
                    // line 785
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 786
($context["page"] ?? null), "bottom_line1", []) || $this->getAttribute(($context["page"] ?? null), "bottom_line2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_line3", []))) {
                    // line 787
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 789
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 791
                echo "          <div class=\"bottom_line4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_line4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 794
            echo "
    </div>
  </div>
";
        }
        // line 798
        echo "
";
        // line 799
        if (((($this->getAttribute(($context["page"] ?? null), "bottom1", []) || $this->getAttribute(($context["page"] ?? null), "bottom2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
            // line 800
            echo "<div id=\"page6\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 803
            if ($this->getAttribute(($context["page"] ?? null), "bottom1", [])) {
                // line 804
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom2", []) && $this->getAttribute(($context["page"] ?? null), "bottom3", [])) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 805
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 806
($context["page"] ?? null), "bottom2", []) && $this->getAttribute(($context["page"] ?? null), "bottom3", []))) {
                    // line 807
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 808
($context["page"] ?? null), "bottom2", []) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 809
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 810
($context["page"] ?? null), "bottom3", []) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 811
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 812
($context["page"] ?? null), "bottom2", []) || $this->getAttribute(($context["page"] ?? null), "bottom3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 813
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 815
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 817
                echo "          <div class=\"bottom1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 820
            echo "
      ";
            // line 821
            if ($this->getAttribute(($context["page"] ?? null), "bottom2", [])) {
                // line 822
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom3", [])) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 823
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 824
($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom3", []))) {
                    // line 825
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 826
($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 827
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 828
($context["page"] ?? null), "bottom3", []) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 829
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 830
($context["page"] ?? null), "bottom1", []) || $this->getAttribute(($context["page"] ?? null), "bottom3", [])) || $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 831
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 833
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 835
                echo "          <div class=\"bottom2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 838
            echo "
      ";
            // line 839
            if ($this->getAttribute(($context["page"] ?? null), "bottom3", [])) {
                // line 840
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom2", [])) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 841
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 842
($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom2", []))) {
                    // line 843
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 844
($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 845
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 846
($context["page"] ?? null), "bottom2", []) && $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 847
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 848
($context["page"] ?? null), "bottom1", []) || $this->getAttribute(($context["page"] ?? null), "bottom2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom4", []))) {
                    // line 849
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 851
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 853
                echo "          <div class=\"bottom3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 856
            echo "
      ";
            // line 857
            if ($this->getAttribute(($context["page"] ?? null), "bottom4", [])) {
                // line 858
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom2", [])) && $this->getAttribute(($context["page"] ?? null), "bottom3", []))) {
                    // line 859
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 860
($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom2", []))) {
                    // line 861
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 862
($context["page"] ?? null), "bottom1", []) && $this->getAttribute(($context["page"] ?? null), "bottom3", []))) {
                    // line 863
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 864
($context["page"] ?? null), "bottom2", []) && $this->getAttribute(($context["page"] ?? null), "bottom3", []))) {
                    // line 865
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 866
($context["page"] ?? null), "bottom1", []) || $this->getAttribute(($context["page"] ?? null), "bottom2", [])) || $this->getAttribute(($context["page"] ?? null), "bottom3", []))) {
                    // line 867
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 869
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 871
                echo "          <div class=\"bottom4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 874
            echo "
    </div>
  </div>
</div>  
";
        }
        // line 879
        echo "
";
        // line 880
        if (((($this->getAttribute(($context["page"] ?? null), "last1", []) || $this->getAttribute(($context["page"] ?? null), "last2", [])) || $this->getAttribute(($context["page"] ?? null), "last3", [])) || $this->getAttribute(($context["page"] ?? null), "last4", []))) {
            // line 881
            echo "  
    <div class=\"row\">
      ";
            // line 883
            if ($this->getAttribute(($context["page"] ?? null), "last1", [])) {
                // line 884
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "last2", []) && $this->getAttribute(($context["page"] ?? null), "last3", [])) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 885
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 886
($context["page"] ?? null), "last2", []) && $this->getAttribute(($context["page"] ?? null), "last3", []))) {
                    // line 887
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 888
($context["page"] ?? null), "last2", []) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 889
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 890
($context["page"] ?? null), "last3", []) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 891
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 892
($context["page"] ?? null), "last2", []) || $this->getAttribute(($context["page"] ?? null), "last3", [])) || $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 893
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 895
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 897
                echo "          <div class=\"last1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "last1", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 900
            echo "
      ";
            // line 901
            if ($this->getAttribute(($context["page"] ?? null), "last2", [])) {
                // line 902
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last3", [])) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 903
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 904
($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last3", []))) {
                    // line 905
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 906
($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 907
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 908
($context["page"] ?? null), "last3", []) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 909
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 910
($context["page"] ?? null), "last1", []) || $this->getAttribute(($context["page"] ?? null), "last3", [])) || $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 911
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 913
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 915
                echo "          <div class=\"last2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "last2", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 918
            echo "
      ";
            // line 919
            if ($this->getAttribute(($context["page"] ?? null), "last3", [])) {
                // line 920
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last2", [])) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 921
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 922
($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last2", []))) {
                    // line 923
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 924
($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 925
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 926
($context["page"] ?? null), "last2", []) && $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 927
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 928
($context["page"] ?? null), "last1", []) || $this->getAttribute(($context["page"] ?? null), "last2", [])) || $this->getAttribute(($context["page"] ?? null), "last4", []))) {
                    // line 929
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 931
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 933
                echo "          <div class=\"last3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "last3", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 936
            echo "
      ";
            // line 937
            if ($this->getAttribute(($context["page"] ?? null), "last4", [])) {
                // line 938
                echo "        ";
                if ((($this->getAttribute(($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last2", [])) && $this->getAttribute(($context["page"] ?? null), "last3", []))) {
                    // line 939
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 940
($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last2", []))) {
                    // line 941
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 942
($context["page"] ?? null), "last1", []) && $this->getAttribute(($context["page"] ?? null), "last3", []))) {
                    // line 943
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 944
($context["page"] ?? null), "last2", []) && $this->getAttribute(($context["page"] ?? null), "last3", []))) {
                    // line 945
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 946
($context["page"] ?? null), "last1", []) || $this->getAttribute(($context["page"] ?? null), "last2", [])) || $this->getAttribute(($context["page"] ?? null), "last3", []))) {
                    // line 947
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 949
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 951
                echo "          <div class=\"last4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "last4", [])), "html", null, true);
                echo "</div>
        </div>
      ";
            }
            // line 954
            echo "
    
  </div>
";
        }
        // line 958
        echo "
  ";
        // line 959
        if ($this->getAttribute(($context["page"] ?? null), "panel_first_1", [])) {
            // line 960
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 964
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_first_1", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 970
        echo "
  ";
        // line 971
        if (((($this->getAttribute(($context["page"] ?? null), "panel_second_1", []) || $this->getAttribute(($context["page"] ?? null), "panel_second_2", [])) || $this->getAttribute(($context["page"] ?? null), "panel_second_3", [])) || $this->getAttribute(($context["page"] ?? null), "panel_second_4", []))) {
            // line 972
            echo "    <section id=\"panel_second\" class=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 976
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_1", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 979
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_2", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 982
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_3", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 985
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_4", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 991
        echo "
  ";
        // line 992
        if (($context["breadcrumb"] ?? null)) {
            // line 993
            echo "    <section id=\"breadcrumb\" class=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 995
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 999
        echo "  <!-- <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"></a>   -->        
</div>
  <footer id=\"footer\" class=\"site-footer\" role=\"contentinfo\">
    ";
        // line 1002
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 1003
            echo "      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 1005
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 1009
        echo "
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"layout-container\">
        ";
        // line 1013
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 1014
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 1015
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
            echo "
            ";
            // line 1016
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
            echo "
            ";
            // line 1017
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
            echo "
            ";
            // line 1018
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 1021
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
            // line 1022
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 1023
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 1026
        echo "      </div>
      </div>
    </div>

    ";
        // line 1030
        if (((($this->getAttribute(($context["page"] ?? null), "footer1", []) || $this->getAttribute(($context["page"] ?? null), "footer2", [])) || $this->getAttribute(($context["page"] ?? null), "footer3", [])) || $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
            // line 1031
            echo "      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 1033
            if ($this->getAttribute(($context["page"] ?? null), "footer1", [])) {
                // line 1034
                echo "            ";
                if ((($this->getAttribute(($context["page"] ?? null), "footer2", []) && $this->getAttribute(($context["page"] ?? null), "footer3", [])) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1035
                    echo "              <div class=\"col-lg-3\">
              ";
                } elseif (($this->getAttribute(                // line 1036
($context["page"] ?? null), "footer2", []) && $this->getAttribute(($context["page"] ?? null), "footer3", []))) {
                    // line 1037
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1038
($context["page"] ?? null), "footer2", []) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1039
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1040
($context["page"] ?? null), "footer3", []) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1041
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((($this->getAttribute(                // line 1042
($context["page"] ?? null), "footer2", []) || $this->getAttribute(($context["page"] ?? null), "footer3", [])) || $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1043
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1045
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1047
                echo "              <div class=\"footer1\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer1", [])), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1050
            echo "
          ";
            // line 1051
            if ($this->getAttribute(($context["page"] ?? null), "footer2", [])) {
                // line 1052
                echo "            ";
                if ((($this->getAttribute(($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer3", [])) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1053
                    echo "              <div class=\"col-lg-3\">
              ";
                } elseif (($this->getAttribute(                // line 1054
($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer3", []))) {
                    // line 1055
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1056
($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1057
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1058
($context["page"] ?? null), "footer3", []) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1059
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((($this->getAttribute(                // line 1060
($context["page"] ?? null), "footer1", []) || $this->getAttribute(($context["page"] ?? null), "footer3", [])) || $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1061
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1063
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1065
                echo "              <div class=\"footer2\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer2", [])), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1068
            echo "
          ";
            // line 1069
            if ($this->getAttribute(($context["page"] ?? null), "footer3", [])) {
                // line 1070
                echo "            ";
                if ((($this->getAttribute(($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer2", [])) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1071
                    echo "              <div class=\"col-lg-3\">
              ";
                } elseif (($this->getAttribute(                // line 1072
($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer2", []))) {
                    // line 1073
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1074
($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1075
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1076
($context["page"] ?? null), "footer2", []) && $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1077
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((($this->getAttribute(                // line 1078
($context["page"] ?? null), "footer1", []) || $this->getAttribute(($context["page"] ?? null), "footer2", [])) || $this->getAttribute(($context["page"] ?? null), "footer4", []))) {
                    // line 1079
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1081
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1083
                echo "              <div class=\"footer3\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer3", [])), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1086
            echo "
          ";
            // line 1087
            if ($this->getAttribute(($context["page"] ?? null), "footer4", [])) {
                // line 1088
                echo "            ";
                if ((($this->getAttribute(($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer2", [])) && $this->getAttribute(($context["page"] ?? null), "footer3", []))) {
                    // line 1089
                    echo "              <div class=\"col-lg-3\">
              ";
                } elseif (($this->getAttribute(                // line 1090
($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer2", []))) {
                    // line 1091
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1092
($context["page"] ?? null), "footer1", []) && $this->getAttribute(($context["page"] ?? null), "footer3", []))) {
                    // line 1093
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1094
($context["page"] ?? null), "footer2", []) && $this->getAttribute(($context["page"] ?? null), "footer3", []))) {
                    // line 1095
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((($this->getAttribute(                // line 1096
($context["page"] ?? null), "footer1", []) || $this->getAttribute(($context["page"] ?? null), "footer2", [])) || $this->getAttribute(($context["page"] ?? null), "footer3", []))) {
                    // line 1097
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1099
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1101
                echo "              <div class=\"footer4\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer4", [])), "html", null, true);
                echo "</div>
            </div>
          ";
            }
            // line 1104
            echo "
          </div>

        ";
        }
        // line 1108
        echo "
        <div class=\"bottom_footer\">
        <div class=\"\">
          <div class=\"row\">
              ";
        // line 1112
        if (($context["show_hide_copyright"] ?? null)) {
            // line 1113
            echo "                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"copyright\">
                        <a href=\"";
            // line 1115
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_url"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\">
                          ";
            // line 1116
            echo t("@copyright_date @copyright_developedby", array("@copyright_date" =>             // line 1117
($context["copyright_date"] ?? null), "@copyright_developedby" => ($context["copyright_developedby"] ?? null), ));
            // line 1119
            echo "                        </a>
                    </div>
                </div>
              ";
        }
        // line 1123
        echo "          </div>
        </div>
        </div>
        </div>
  </footer>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/photographer/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2530 => 1123,  2524 => 1119,  2522 => 1117,  2521 => 1116,  2517 => 1115,  2513 => 1113,  2511 => 1112,  2505 => 1108,  2499 => 1104,  2492 => 1101,  2488 => 1099,  2484 => 1097,  2482 => 1096,  2479 => 1095,  2477 => 1094,  2474 => 1093,  2472 => 1092,  2469 => 1091,  2467 => 1090,  2464 => 1089,  2461 => 1088,  2459 => 1087,  2456 => 1086,  2449 => 1083,  2445 => 1081,  2441 => 1079,  2439 => 1078,  2436 => 1077,  2434 => 1076,  2431 => 1075,  2429 => 1074,  2426 => 1073,  2424 => 1072,  2421 => 1071,  2418 => 1070,  2416 => 1069,  2413 => 1068,  2406 => 1065,  2402 => 1063,  2398 => 1061,  2396 => 1060,  2393 => 1059,  2391 => 1058,  2388 => 1057,  2386 => 1056,  2383 => 1055,  2381 => 1054,  2378 => 1053,  2375 => 1052,  2373 => 1051,  2370 => 1050,  2363 => 1047,  2359 => 1045,  2355 => 1043,  2353 => 1042,  2350 => 1041,  2348 => 1040,  2345 => 1039,  2343 => 1038,  2340 => 1037,  2338 => 1036,  2335 => 1035,  2332 => 1034,  2330 => 1033,  2326 => 1031,  2324 => 1030,  2318 => 1026,  2312 => 1023,  2309 => 1022,  2306 => 1021,  2300 => 1018,  2296 => 1017,  2292 => 1016,  2288 => 1015,  2285 => 1014,  2283 => 1013,  2277 => 1009,  2270 => 1005,  2266 => 1003,  2264 => 1002,  2259 => 999,  2252 => 995,  2248 => 993,  2246 => 992,  2243 => 991,  2234 => 985,  2228 => 982,  2222 => 979,  2216 => 976,  2210 => 972,  2208 => 971,  2205 => 970,  2196 => 964,  2190 => 960,  2188 => 959,  2185 => 958,  2179 => 954,  2172 => 951,  2168 => 949,  2164 => 947,  2162 => 946,  2159 => 945,  2157 => 944,  2154 => 943,  2152 => 942,  2149 => 941,  2147 => 940,  2144 => 939,  2141 => 938,  2139 => 937,  2136 => 936,  2129 => 933,  2125 => 931,  2121 => 929,  2119 => 928,  2116 => 927,  2114 => 926,  2111 => 925,  2109 => 924,  2106 => 923,  2104 => 922,  2101 => 921,  2098 => 920,  2096 => 919,  2093 => 918,  2086 => 915,  2082 => 913,  2078 => 911,  2076 => 910,  2073 => 909,  2071 => 908,  2068 => 907,  2066 => 906,  2063 => 905,  2061 => 904,  2058 => 903,  2055 => 902,  2053 => 901,  2050 => 900,  2043 => 897,  2039 => 895,  2035 => 893,  2033 => 892,  2030 => 891,  2028 => 890,  2025 => 889,  2023 => 888,  2020 => 887,  2018 => 886,  2015 => 885,  2012 => 884,  2010 => 883,  2006 => 881,  2004 => 880,  2001 => 879,  1994 => 874,  1987 => 871,  1983 => 869,  1979 => 867,  1977 => 866,  1974 => 865,  1972 => 864,  1969 => 863,  1967 => 862,  1964 => 861,  1962 => 860,  1959 => 859,  1956 => 858,  1954 => 857,  1951 => 856,  1944 => 853,  1940 => 851,  1936 => 849,  1934 => 848,  1931 => 847,  1929 => 846,  1926 => 845,  1924 => 844,  1921 => 843,  1919 => 842,  1916 => 841,  1913 => 840,  1911 => 839,  1908 => 838,  1901 => 835,  1897 => 833,  1893 => 831,  1891 => 830,  1888 => 829,  1886 => 828,  1883 => 827,  1881 => 826,  1878 => 825,  1876 => 824,  1873 => 823,  1870 => 822,  1868 => 821,  1865 => 820,  1858 => 817,  1854 => 815,  1850 => 813,  1848 => 812,  1845 => 811,  1843 => 810,  1840 => 809,  1838 => 808,  1835 => 807,  1833 => 806,  1830 => 805,  1827 => 804,  1825 => 803,  1820 => 800,  1818 => 799,  1815 => 798,  1809 => 794,  1802 => 791,  1798 => 789,  1794 => 787,  1792 => 786,  1789 => 785,  1787 => 784,  1784 => 783,  1782 => 782,  1779 => 781,  1777 => 780,  1774 => 779,  1771 => 778,  1769 => 777,  1766 => 776,  1759 => 773,  1755 => 771,  1751 => 769,  1749 => 768,  1746 => 767,  1744 => 766,  1741 => 765,  1739 => 764,  1736 => 763,  1734 => 762,  1731 => 761,  1728 => 760,  1726 => 759,  1723 => 758,  1716 => 755,  1712 => 753,  1708 => 751,  1706 => 750,  1703 => 749,  1701 => 748,  1698 => 747,  1696 => 746,  1693 => 745,  1691 => 744,  1688 => 743,  1685 => 742,  1683 => 741,  1680 => 740,  1673 => 737,  1669 => 735,  1665 => 733,  1663 => 732,  1660 => 731,  1658 => 730,  1655 => 729,  1653 => 728,  1650 => 727,  1648 => 726,  1645 => 725,  1642 => 724,  1640 => 723,  1636 => 721,  1634 => 720,  1631 => 719,  1625 => 715,  1618 => 712,  1614 => 710,  1610 => 708,  1608 => 707,  1605 => 706,  1603 => 705,  1600 => 704,  1598 => 703,  1595 => 702,  1593 => 701,  1590 => 700,  1587 => 699,  1585 => 698,  1582 => 697,  1575 => 694,  1571 => 692,  1567 => 690,  1565 => 689,  1562 => 688,  1560 => 687,  1557 => 686,  1555 => 685,  1552 => 684,  1550 => 683,  1547 => 682,  1544 => 681,  1542 => 680,  1539 => 679,  1532 => 676,  1528 => 674,  1524 => 672,  1522 => 671,  1519 => 670,  1517 => 669,  1514 => 668,  1512 => 667,  1509 => 666,  1507 => 665,  1504 => 664,  1501 => 663,  1499 => 662,  1496 => 661,  1489 => 658,  1485 => 656,  1481 => 654,  1479 => 653,  1476 => 652,  1474 => 651,  1471 => 650,  1469 => 649,  1466 => 648,  1464 => 647,  1461 => 646,  1458 => 645,  1456 => 644,  1452 => 642,  1450 => 641,  1447 => 640,  1440 => 636,  1436 => 634,  1434 => 633,  1431 => 632,  1424 => 628,  1420 => 626,  1418 => 625,  1415 => 624,  1408 => 620,  1404 => 618,  1402 => 617,  1393 => 612,  1387 => 609,  1384 => 608,  1382 => 607,  1376 => 604,  1371 => 602,  1368 => 601,  1362 => 599,  1360 => 598,  1354 => 596,  1348 => 594,  1346 => 593,  1342 => 592,  1337 => 590,  1332 => 588,  1326 => 587,  1323 => 586,  1317 => 583,  1314 => 582,  1312 => 581,  1309 => 580,  1305 => 578,  1299 => 575,  1296 => 574,  1294 => 573,  1288 => 570,  1284 => 569,  1281 => 568,  1275 => 566,  1273 => 565,  1268 => 563,  1262 => 561,  1256 => 559,  1254 => 558,  1250 => 557,  1245 => 555,  1239 => 554,  1236 => 553,  1230 => 550,  1227 => 549,  1225 => 548,  1222 => 547,  1220 => 546,  1209 => 537,  1203 => 533,  1196 => 530,  1192 => 528,  1188 => 526,  1186 => 525,  1183 => 524,  1181 => 523,  1178 => 522,  1176 => 521,  1173 => 520,  1171 => 519,  1168 => 518,  1165 => 517,  1163 => 516,  1160 => 515,  1153 => 512,  1149 => 510,  1145 => 508,  1143 => 507,  1140 => 506,  1138 => 505,  1135 => 504,  1133 => 503,  1130 => 502,  1128 => 501,  1125 => 500,  1122 => 499,  1120 => 498,  1117 => 497,  1110 => 494,  1106 => 492,  1102 => 490,  1100 => 489,  1097 => 488,  1095 => 487,  1092 => 486,  1090 => 485,  1087 => 484,  1085 => 483,  1082 => 482,  1079 => 481,  1077 => 480,  1074 => 479,  1067 => 476,  1063 => 474,  1059 => 472,  1057 => 471,  1054 => 470,  1052 => 469,  1049 => 468,  1047 => 467,  1044 => 466,  1042 => 465,  1039 => 464,  1036 => 463,  1034 => 462,  1029 => 459,  1027 => 458,  1024 => 457,  1018 => 453,  1011 => 450,  1007 => 448,  1003 => 446,  1001 => 445,  998 => 444,  996 => 443,  993 => 442,  991 => 441,  988 => 440,  986 => 439,  983 => 438,  980 => 437,  978 => 436,  975 => 435,  968 => 432,  964 => 430,  960 => 428,  958 => 427,  955 => 426,  953 => 425,  950 => 424,  948 => 423,  945 => 422,  943 => 421,  940 => 420,  937 => 419,  935 => 418,  932 => 417,  925 => 414,  921 => 412,  917 => 410,  915 => 409,  912 => 408,  910 => 407,  907 => 406,  905 => 405,  902 => 404,  900 => 403,  897 => 402,  894 => 401,  892 => 400,  889 => 399,  882 => 396,  878 => 394,  874 => 392,  872 => 391,  869 => 390,  867 => 389,  864 => 388,  862 => 387,  859 => 386,  857 => 385,  854 => 384,  851 => 383,  849 => 382,  844 => 379,  842 => 378,  839 => 377,  831 => 372,  826 => 369,  824 => 368,  821 => 367,  815 => 363,  808 => 360,  804 => 358,  800 => 356,  798 => 355,  795 => 354,  793 => 353,  790 => 352,  788 => 351,  785 => 350,  783 => 349,  780 => 348,  777 => 347,  775 => 346,  772 => 345,  765 => 342,  761 => 340,  757 => 338,  755 => 337,  752 => 336,  750 => 335,  747 => 334,  745 => 333,  742 => 332,  740 => 331,  737 => 330,  734 => 329,  732 => 328,  728 => 326,  721 => 324,  717 => 322,  713 => 320,  711 => 319,  708 => 318,  706 => 317,  703 => 316,  701 => 315,  698 => 314,  696 => 313,  693 => 312,  690 => 311,  688 => 310,  685 => 309,  678 => 306,  674 => 304,  670 => 302,  668 => 301,  665 => 300,  663 => 299,  660 => 298,  658 => 297,  655 => 296,  653 => 295,  650 => 294,  647 => 293,  645 => 292,  640 => 289,  638 => 288,  635 => 287,  629 => 283,  622 => 280,  618 => 278,  614 => 276,  612 => 275,  609 => 274,  607 => 273,  604 => 272,  602 => 271,  599 => 270,  597 => 269,  594 => 268,  591 => 267,  589 => 266,  586 => 265,  579 => 262,  575 => 260,  571 => 258,  569 => 257,  566 => 256,  564 => 255,  561 => 254,  559 => 253,  556 => 252,  554 => 251,  551 => 250,  548 => 249,  546 => 248,  542 => 246,  535 => 244,  531 => 242,  527 => 240,  525 => 239,  522 => 238,  520 => 237,  517 => 236,  515 => 235,  512 => 234,  510 => 233,  507 => 232,  504 => 231,  502 => 230,  499 => 229,  492 => 226,  488 => 224,  484 => 222,  482 => 221,  479 => 220,  477 => 219,  474 => 218,  472 => 217,  469 => 216,  467 => 215,  464 => 214,  461 => 213,  459 => 212,  455 => 210,  453 => 209,  450 => 208,  444 => 204,  437 => 201,  433 => 199,  429 => 197,  427 => 196,  424 => 195,  422 => 194,  419 => 193,  417 => 192,  414 => 191,  412 => 190,  409 => 189,  406 => 188,  404 => 187,  401 => 186,  394 => 183,  390 => 181,  386 => 179,  384 => 178,  381 => 177,  379 => 176,  376 => 175,  374 => 174,  371 => 173,  369 => 172,  366 => 171,  363 => 170,  361 => 169,  358 => 168,  351 => 165,  347 => 163,  343 => 161,  341 => 160,  338 => 159,  336 => 158,  333 => 157,  331 => 156,  328 => 155,  326 => 154,  323 => 153,  320 => 152,  318 => 151,  315 => 150,  308 => 147,  304 => 145,  300 => 143,  298 => 142,  295 => 141,  293 => 140,  290 => 139,  288 => 138,  285 => 137,  283 => 136,  280 => 135,  277 => 134,  275 => 133,  270 => 130,  268 => 129,  265 => 128,  258 => 124,  254 => 122,  252 => 121,  245 => 116,  238 => 112,  234 => 110,  232 => 109,  228 => 107,  223 => 104,  217 => 103,  208 => 99,  204 => 98,  201 => 97,  198 => 96,  193 => 95,  191 => 93,  190 => 92,  189 => 91,  188 => 90,  187 => 89,  186 => 88,  185 => 87,  184 => 86,  183 => 85,  182 => 84,  181 => 83,  180 => 82,  176 => 80,  174 => 79,  158 => 66,  153 => 63,  148 => 62,  145 => 61,  139 => 60,  137 => 59,  122 => 47,  109 => 36,  101 => 31,  96 => 28,  94 => 27,  89 => 24,  81 => 19,  73 => 13,  71 => 12,  65 => 9,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/photographer/templates/page.html.twig", "/var/www/html/drupal/themes/photographer/templates/page.html.twig");
    }
}
