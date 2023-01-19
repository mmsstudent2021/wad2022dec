<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* navigation/tree/node.twig */
class __TwigTemplate_0b975ef26d5a41b78de64442cb59821f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["show_node"] ?? null)) {
            // line 2
            echo "  <li class=\"";
            echo twig_escape_filter($this->env, ($context["li_classes"] ?? null), "html", null, true);
            echo "\">
    <div class=\"block\">
      <i";
            // line 4
            echo (((($context["class"] ?? null) == "first")) ? (" class=\"first\"") : (""));
            echo "></i>
      ";
            // line 5
            if (($context["node_is_group"] ?? null)) {
                // line 6
                echo "        ";
                echo ((!twig_in_filter("last", ($context["class"] ?? null))) ? ("<b></b>") : (""));
                echo "
        <a class=\"";
                // line 7
                echo twig_escape_filter($this->env, ($context["link_classes"] ?? null), "html", null, true);
                echo "\" href=\"#\">
          <span class=\"hide paths_nav\" data-apath=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "a_path", [], "any", false, false, false, 8), "html", null, true);
                echo "\" data-vpath=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "v_path", [], "any", false, false, false, 8), "html", null, true);
                echo "\" data-pos=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "pos", [], "any", false, false, false, 8), "html", null, true);
                echo "\"></span>
          ";
                // line 9
                if ( !twig_test_empty(($context["pagination_params"] ?? null))) {
                    // line 10
                    echo "            <span class=\"hide ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination_params"] ?? null), "position", [], "any", false, false, false, 10), "html", null, true);
                    echo "\" data-name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination_params"] ?? null), "data_name", [], "any", false, false, false, 10), "html", null, true);
                    echo "\" data-value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination_params"] ?? null), "data_value", [], "any", false, false, false, 10), "html", null, true);
                    echo "\"></span>
          ";
                }
                // line 12
                echo "          ";
                echo ($context["node_icon"] ?? null);
                echo "
        </a>
      ";
            } elseif ( !twig_test_empty(            // line 14
($context["pagination_params"] ?? null))) {
                // line 15
                echo "        <span class=\"hide ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination_params"] ?? null), "position", [], "any", false, false, false, 15), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination_params"] ?? null), "data_name", [], "any", false, false, false, 15), "html", null, true);
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination_params"] ?? null), "data_value", [], "any", false, false, false, 15), "html", null, true);
                echo "\"></span>
      ";
            }
            // line 17
            echo "    </div>
    ";
            // line 18
            if (($context["node_is_container"] ?? null)) {
                // line 19
                echo "      <div class=\"fst-italic\">
    ";
            }
            // line 21
            echo "
    ";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "isGroup", [], "any", false, false, false, 22)) {
                // line 23
                echo "      <div class=\"block second";
                echo ((($context["has_second_icon"] ?? null)) ? (" double") : (""));
                echo "\">
        <u>";
                // line 24
                echo PhpMyAdmin\Html\Generator::getImage((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "icon", [], "any", false, false, false, 24)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["image"] ?? null) : null), (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "icon", [], "any", false, false, false, 24)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["title"] ?? null) : null));
                echo "</u>
      </div>
      &nbsp;";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "name", [], "any", false, false, false, 26), "html", null, true);
                echo "
    ";
            } else {
                // line 28
                echo "      <div class=\"block second";
                echo ((($context["has_second_icon"] ?? null)) ? (" double") : (""));
                echo "\">
        ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["icon_links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                    // line 30
                    echo "          <a href=\"";
                    echo PhpMyAdmin\Url::getFromRoute(twig_get_attribute($this->env, $this->source, $context["link"], "route", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, $context["link"], "params", [], "any", false, false, false, 30));
                    echo "\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["link"], "is_ajax", [], "any", false, false, false, 30)) ? (" class=\"ajax\"") : (""));
                    echo ">";
                    // line 31
                    echo PhpMyAdmin\Html\Generator::getImage(twig_get_attribute($this->env, $this->source, $context["link"], "image", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 31));
                    // line 32
                    echo "</a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "      </div>

      ";
                // line 36
                if (($context["node_is_container"] ?? null)) {
                    // line 37
                    echo "        &nbsp;<a class=\"hover_show_full\" href=\"";
                    echo PhpMyAdmin\Url::getFromRoute(twig_get_attribute($this->env, $this->source, ($context["text_link"] ?? null), "route", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, ($context["text_link"] ?? null), "params", [], "any", false, false, false, 37));
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "name", [], "any", false, false, false, 37), "html", null, true);
                    echo "</a>
      ";
                } else {
                    // line 39
                    echo "        <a class=\"hover_show_full";
                    echo ((twig_get_attribute($this->env, $this->source, ($context["text_link"] ?? null), "is_ajax", [], "any", false, false, false, 39)) ? (" ajax") : (""));
                    echo "\" href=\"";
                    echo PhpMyAdmin\Url::getFromRoute(twig_get_attribute($this->env, $this->source, ($context["text_link"] ?? null), "route", [], "any", false, false, false, 39), twig_get_attribute($this->env, $this->source, ($context["text_link"] ?? null), "params", [], "any", false, false, false, 39));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["text_link"] ?? null), "title", [], "any", false, false, false, 39), "html", null, true);
                    echo "\">";
                    // line 40
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "displayName", [], "any", true, true, false, 40) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "displayName", [], "any", false, false, false, 40)))) ? (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "displayName", [], "any", false, false, false, 40)) : (twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "realName", [], "any", false, false, false, 40))), "html", null, true);
                    // line 41
                    echo "</a>
      ";
                }
                // line 43
                echo "    ";
            }
            // line 44
            echo "
    ";
            // line 45
            echo ($context["control_buttons"] ?? null);
            echo "

    ";
            // line 47
            if (($context["node_is_container"] ?? null)) {
                // line 48
                echo "      </div>
    ";
            }
            // line 50
            echo "
    <div class=\"clearfloat\"></div>
";
        } elseif ( !twig_test_empty(        // line 52
($context["pagination_params"] ?? null))) {
            // line 53
            echo "  <span class=\"hide ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination_params"] ?? null), "position", [], "any", false, false, false, 53), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination_params"] ?? null), "data_name", [], "any", false, false, false, 53), "html", null, true);
            echo "\" data-value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination_params"] ?? null), "data_value", [], "any", false, false, false, 53), "html", null, true);
            echo "\"></span>
";
        }
        // line 55
        echo "
";
        // line 56
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["recursive"] ?? null), "html", [], "any", false, false, false, 56)) && twig_get_attribute($this->env, $this->source, ($context["recursive"] ?? null), "has_wrapper", [], "any", false, false, false, 56))) {
            // line 57
            echo "  <div class=\"list_container\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["recursive"] ?? null), "is_hidden", [], "any", false, false, false, 57)) ? (" style=\"display: none;\"") : (""));
            echo ">
    <ul>
";
        }
        // line 60
        echo twig_get_attribute($this->env, $this->source, ($context["recursive"] ?? null), "html", [], "any", false, false, false, 60);
        echo "
";
        // line 61
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["recursive"] ?? null), "html", [], "any", false, false, false, 61)) && twig_get_attribute($this->env, $this->source, ($context["recursive"] ?? null), "has_wrapper", [], "any", false, false, false, 61))) {
            // line 62
            echo "    </ul>
  </div>
";
        }
        // line 65
        echo "
";
        // line 66
        if (($context["has_siblings"] ?? null)) {
            // line 67
            echo "  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "navigation/tree/node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 67,  238 => 66,  235 => 65,  230 => 62,  228 => 61,  224 => 60,  217 => 57,  215 => 56,  212 => 55,  202 => 53,  200 => 52,  196 => 50,  192 => 48,  190 => 47,  185 => 45,  182 => 44,  179 => 43,  175 => 41,  173 => 40,  165 => 39,  157 => 37,  155 => 36,  151 => 34,  144 => 32,  142 => 31,  136 => 30,  132 => 29,  127 => 28,  122 => 26,  117 => 24,  112 => 23,  110 => 22,  107 => 21,  103 => 19,  101 => 18,  98 => 17,  88 => 15,  86 => 14,  80 => 12,  70 => 10,  68 => 9,  60 => 8,  56 => 7,  51 => 6,  49 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navigation/tree/node.twig", "/Users/mmsit/Desktop/WAD/phpMyAdmin-5.2.0-all-languages/templates/navigation/tree/node.twig");
    }
}
