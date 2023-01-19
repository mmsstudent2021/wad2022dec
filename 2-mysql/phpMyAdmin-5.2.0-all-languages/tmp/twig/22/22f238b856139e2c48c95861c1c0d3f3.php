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

/* table/index_form.twig */
class __TwigTemplate_3aebce9fdd1418a70917eb6795bea31d extends Template
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
        echo "<form action=\"";
        echo PhpMyAdmin\Url::getFromRoute("/table/indexes");
        echo "\"
    method=\"post\"
    name=\"index_frm\"
    id=\"index_frm\"
    class=\"ajax\">

    ";
        // line 7
        echo PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
        echo "

    <fieldset class=\"pma-fieldset\" id=\"index_edit_fields\">
        <div class=\"index_info\">
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_name\">
                            ";
echo _gettext("Index name:");
        // line 16
        echo "                            ";
        echo PhpMyAdmin\Html\Generator::showHint(_gettext("\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!"));
        echo "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_name]\"
                    id=\"input_index_name\"
                    size=\"25\"
                    maxlength=\"64\"
                    value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getName", [], "method", false, false, false, 26), "html", null, true);
        echo "\"
                    onfocus=\"this.select()\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_choice\">
                            ";
echo _gettext("Index choice:");
        // line 35
        echo "                            ";
        echo PhpMyAdmin\Html\MySQLDocumentation::show("ALTER_TABLE");
        echo "
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_choice]\" id=\"select_index_choice\"";
        // line 40
        echo ((($context["create_edit_table"] ?? null)) ? (" disabled") : (""));
        echo ">
                ";
        // line 41
        if (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 41) == "PRIMARY") ||  !twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "hasPrimary", [], "method", false, false, false, 41))) {
            // line 42
            echo "                  <option value=\"PRIMARY\"";
            echo (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 42) == "PRIMARY")) ? (" selected") : (""));
            echo ">PRIMARY</option>
                ";
        }
        // line 44
        echo "                <option value=\"INDEX\"";
        echo (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 44) == "INDEX")) ? (" selected") : (""));
        echo ">INDEX</option>
                <option value=\"UNIQUE\"";
        // line 45
        echo (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 45) == "UNIQUE")) ? (" selected") : (""));
        echo ">UNIQUE</option>
                <option value=\"SPATIAL\"";
        // line 46
        echo (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 46) == "SPATIAL")) ? (" selected") : (""));
        echo ">SPATIAL</option>
                <option value=\"FULLTEXT\"";
        // line 47
        echo (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 47) == "FULLTEXT")) ? (" selected") : (""));
        echo ">FULLTEXT</option>
              </select>
            </div>

            ";
        // line 51
        if ((($context["default_sliders_state"] ?? null) != "disabled")) {
            // line 52
            echo "            <div class=\"mb-3\">
              <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#advancedOptions\" aria-expanded=\"";
            // line 53
            echo (((($context["default_sliders_state"] ?? null) == "open")) ? ("true") : ("false"));
            echo "\" aria-controls=\"advancedOptions\">
                ";
echo _gettext("Advanced options");
            // line 55
            echo "              </button>
            </div>
            <div class=\"collapse mb-3";
            // line 57
            echo (((($context["default_sliders_state"] ?? null) == "open")) ? (" show") : (""));
            echo "\" id=\"advancedOptions\">
            ";
        }
        // line 59
        echo "
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_key_block_size\">
                            ";
echo _gettext("Key block size:");
        // line 65
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_block_size]\"
                    id=\"input_key_block_size\"
                    size=\"30\"
                    value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getKeyBlockSize", [], "method", false, false, false, 73), "html", null, true);
        echo "\">
            </div>

            <div>

                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_type\">
                            ";
echo _gettext("Index type:");
        // line 82
        echo "                            ";
        echo PhpMyAdmin\Html\MySQLDocumentation::show("ALTER_TABLE");
        echo "
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_type]\" id=\"select_index_type\">
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "", 1 => "BTREE", 2 => "HASH"]);
        foreach ($context['_seq'] as $context["_key"] => $context["index_type"]) {
            // line 89
            echo "                  <option value=\"";
            echo twig_escape_filter($this->env, $context["index_type"], "html", null, true);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getType", [], "method", false, false, false, 89) == $context["index_type"])) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["index_type"], "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "              </select>
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_parser\">
                            ";
echo _gettext("Parser:");
        // line 99
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Parser]\"
                    id=\"input_parse\"
                    size=\"30\"
                    value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getParser", [], "method", false, false, false, 107), "html", null, true);
        echo "\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_comment\">
                            ";
echo _gettext("Comment:");
        // line 115
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Index_comment]\"
                    id=\"input_index_comment\"
                    size=\"30\"
                    maxlength=\"1024\"
                    value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getComment", [], "method", false, false, false, 124), "html", null, true);
        echo "\">
            </div>

            ";
        // line 127
        if ((($context["default_sliders_state"] ?? null) != "disabled")) {
            // line 128
            echo "            </div>
            ";
        }
        // line 130
        echo "
        <div class=\"clearfloat\"></div>

        <table class=\"table align-middle\" id=\"index_columns\">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        ";
echo _gettext("Column");
        // line 139
        echo "                    </th>
                    <th>
                        ";
echo _gettext("Size");
        // line 142
        echo "                    </th>
                </tr>
            </thead>
            ";
        // line 145
        $context["spatial_types"] = [0 => "geometry", 1 => "point", 2 => "linestring", 3 => "polygon", 4 => "multipoint", 5 => "multilinestring", 6 => "multipolygon", 7 => "geomtrycollection"];
        // line 155
        echo "            <tbody>
                ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getColumns", [], "method", false, false, false, 156));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 157
            echo "                    <tr class=\"noclick\">
                        <td>
                            <span class=\"drag_icon\" title=\"";
echo _gettext("Drag to reorder");
            // line 159
            echo "\"></span>
                        </td>
                        <td>
                            <select name=\"index[columns][names][]\">
                                <option value=\"\">
                                    -- ";
echo _gettext("Ignore");
            // line 164
            echo " --
                                </option>
                                ";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                // line 167
                echo "                                    ";
                if ((((twig_get_attribute($this->env, $this->source, ($context["index"] ?? null), "getChoice", [], "method", false, false, false, 167) != "FULLTEXT") || preg_match("/(char|text)/i",                 // line 168
$context["field_type"])) && ((twig_get_attribute($this->env, $this->source,                 // line 169
($context["index"] ?? null), "getChoice", [], "method", false, false, false, 169) != "SPATIAL") || twig_in_filter(                // line 170
$context["field_type"], ($context["spatial_types"] ?? null))))) {
                    // line 171
                    echo "
                                        <option value=\"";
                    // line 172
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo "\"";
                    // line 173
                    if (($context["field_name"] == twig_get_attribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 173))) {
                        // line 174
                        echo "                                                selected=\"selected\"";
                    }
                    // line 175
                    echo ">
                                            ";
                    // line 176
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo " [";
                    echo twig_escape_filter($this->env, $context["field_type"], "html", null, true);
                    echo "]
                                        </option>
                                    ";
                }
                // line 179
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "                            </select>
                        </td>
                        <td>
                            <input type=\"text\"
                                size=\"5\"
                                onfocus=\"this.select()\"
                                name=\"index[columns][sub_parts][]\"
                                value=\"";
            // line 188
            (((twig_get_attribute($this->env, $this->source,             // line 187
($context["index"] ?? null), "getChoice", [], "method", false, false, false, 187) != "SPATIAL")) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 188
$context["column"], "getSubPart", [], "method", false, false, false, 188), "html", null, true))) : (print ("")));
            echo "\">
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                ";
        if ((($context["add_fields"] ?? null) > 0)) {
            // line 193
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["add_fields"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 194
                echo "                        <tr class=\"noclick\">
                            <td>
                                <span class=\"drag_icon\" title=\"";
echo _gettext("Drag to reorder");
                // line 196
                echo "\"></span>
                            </td>
                            <td>
                                <select name=\"index[columns][names][]\">
                                    <option value=\"\">-- ";
echo _gettext("Ignore");
                // line 200
                echo " --</option>
                                    ";
                // line 201
                $context["j"] = 0;
                // line 202
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                    // line 203
                    echo "                                        ";
                    if (($context["create_edit_table"] ?? null)) {
                        // line 204
                        echo "                                            ";
                        $context["col_index"] = (($__internal_compile_0 = $context["field_type"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[1] ?? null) : null);
                        // line 205
                        echo "                                            ";
                        $context["field_type"] = (($__internal_compile_1 = $context["field_type"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null);
                        // line 206
                        echo "                                        ";
                    }
                    // line 207
                    echo "                                        ";
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 208
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, ((array_key_exists("col_index", $context)) ? (                    // line 209
($context["col_index"] ?? null)) : ($context["field_name"])), "html", null, true);
                    echo "\"";
                    // line 210
                    echo (((($context["j"] ?? null) == $context["i"])) ? (" selected=\"selected\"") : (""));
                    echo ">
                                            ";
                    // line 211
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo " [";
                    echo twig_escape_filter($this->env, $context["field_type"], "html", null, true);
                    echo "]
                                        </option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "                                </select>
                            </td>
                            <td>
                                <input type=\"text\"
                                    size=\"5\"
                                    onfocus=\"this.select()\"
                                    name=\"index[columns][sub_parts][]\"
                                    value=\"\">
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                ";
        }
        // line 226
        echo "            </tbody>
        </table>
        <div class=\"add_more\">

            <div class=\"slider\"></div>
            <div class=\"add_fields hide\">
                <input class=\"btn btn-secondary\" type=\"submit\"
                    id=\"add_fields\"
                    value=\"";
        // line 234
        echo twig_escape_filter($this->env, twig_sprintf(_gettext("Add %s column(s) to index"), 1), "html", null, true);
        echo "\">
            </div>
        </div>
        </div>
    </fieldset>
    <fieldset class=\"pma-fieldset tblFooters\">
        <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">";
echo _gettext("Preview SQL");
        // line 240
        echo "</button>
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "table/index_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 240,  456 => 234,  446 => 226,  443 => 225,  427 => 214,  416 => 211,  412 => 210,  409 => 209,  407 => 208,  404 => 207,  401 => 206,  398 => 205,  395 => 204,  392 => 203,  387 => 202,  385 => 201,  382 => 200,  375 => 196,  370 => 194,  365 => 193,  362 => 192,  352 => 188,  351 => 187,  350 => 188,  341 => 180,  335 => 179,  327 => 176,  324 => 175,  321 => 174,  319 => 173,  316 => 172,  313 => 171,  311 => 170,  310 => 169,  309 => 168,  307 => 167,  303 => 166,  299 => 164,  291 => 159,  286 => 157,  282 => 156,  279 => 155,  277 => 145,  272 => 142,  267 => 139,  256 => 130,  252 => 128,  250 => 127,  244 => 124,  233 => 115,  222 => 107,  212 => 99,  202 => 91,  189 => 89,  185 => 88,  175 => 82,  163 => 73,  153 => 65,  145 => 59,  140 => 57,  136 => 55,  131 => 53,  128 => 52,  126 => 51,  119 => 47,  115 => 46,  111 => 45,  106 => 44,  100 => 42,  98 => 41,  94 => 40,  85 => 35,  73 => 26,  59 => 16,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/index_form.twig", "/Users/mmsit/Desktop/WAD/phpMyAdmin-5.2.0-all-languages/templates/table/index_form.twig");
    }
}
