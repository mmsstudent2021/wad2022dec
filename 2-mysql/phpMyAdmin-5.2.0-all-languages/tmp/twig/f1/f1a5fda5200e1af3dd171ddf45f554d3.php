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

/* table/structure/display_structure.twig */
class __TwigTemplate_eca44c0779ab34d8e40db1978a44dec9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "table/page_with_secondary_tabs.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("table/page_with_secondary_tabs.twig", "table/structure/display_structure.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<h1 class=\"d-none d-print-block\">";
        echo twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true);
        echo "</h1>
<form method=\"post\" action=\"";
        // line 4
        echo PhpMyAdmin\Url::getFromRoute("/table/structure");
        echo "\" name=\"fieldsForm\" id=\"fieldsForm\">
    ";
        // line 5
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
    <input type=\"hidden\" name=\"table_type\" value=";
        // line 7
        if (($context["db_is_system_schema"] ?? null)) {
            // line 8
            echo "\"information_schema\"";
        } elseif (        // line 9
($context["tbl_is_view"] ?? null)) {
            // line 10
            echo "\"view\"";
        } else {
            // line 12
            echo "\"table\"";
        }
        // line 13
        echo ">
    <div class=\"table-responsive-md\">
    <table id=\"tablestructure\" class=\"table table-light table-striped table-hover w-auto align-middle\">
        ";
        // line 17
        echo "        <thead>
            <tr>
                <th class=\"d-print-none\"></th>
                <th>#</th>
                <th>";
echo _gettext("Name");
        // line 21
        echo "</th>
                <th>";
echo _gettext("Type");
        // line 22
        echo "</th>
                <th>";
echo _gettext("Collation");
        // line 23
        echo "</th>
                <th>";
echo _gettext("Attributes");
        // line 24
        echo "</th>
                <th>";
echo _gettext("Null");
        // line 25
        echo "</th>
                <th>";
echo _gettext("Default");
        // line 26
        echo "</th>
                ";
        // line 27
        if (($context["show_column_comments"] ?? null)) {
            // line 28
            echo "<th>";
echo _gettext("Comments");
            echo "</th>";
        }
        // line 30
        echo "                <th>";
echo _gettext("Extra");
        echo "</th>
                ";
        // line 32
        echo "                ";
        if (( !($context["db_is_system_schema"] ?? null) &&  !($context["tbl_is_view"] ?? null))) {
            // line 33
            echo "                    <th colspan=\"";
            echo ((PhpMyAdmin\Util::showIcons("ActionLinksMode")) ? ("8") : ("9"));
            // line 34
            echo "\" class=\"action d-print-none\">";
echo _gettext("Action");
            echo "</th>
                ";
        }
        // line 36
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        echo "        ";
        $context["rownum"] = 0;
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 42
            echo "            ";
            $context["rownum"] = (($context["rownum"] ?? null) + 1);
            // line 43
            echo "
            ";
            // line 44
            $context["extracted_columnspec"] = (($__internal_compile_0 = ($context["extracted_columnspecs"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["rownum"] ?? null)] ?? null) : null);
            // line 45
            echo "            ";
            $context["field_name"] = twig_escape_filter($this->env, (($__internal_compile_1 = $context["row"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["Field"] ?? null) : null));
            // line 46
            echo "            ";
            // line 47
            echo "            ";
            $context["comments"] = (($__internal_compile_2 = ($context["row_comments"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["rownum"] ?? null)] ?? null) : null);
            // line 48
            echo "            ";
            // line 49
            echo "
        <tr>
            <td class=\"text-center d-print-none\">
                <input type=\"checkbox\" class=\"checkall\" name=\"selected_fld[]\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["row"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["Field"] ?? null) : null), "html", null, true);
            echo "\" id=\"checkbox_row_";
            echo twig_escape_filter($this->env, ($context["rownum"] ?? null), "html", null, true);
            echo "\">
            </td>
            <td class=\"text-end\">";
            // line 54
            echo twig_escape_filter($this->env, ($context["rownum"] ?? null), "html", null, true);
            echo "</td>
            <th class=\"text-nowrap\">
                <label for=\"checkbox_row_";
            // line 56
            echo twig_escape_filter($this->env, ($context["rownum"] ?? null), "html", null, true);
            echo "\">
                    ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["displayed_fields"] ?? null), ($context["rownum"] ?? null), [], "array", false, true, false, 57), "comment", [], "any", true, true, false, 57)) {
                // line 58
                echo "                        <span class=\"commented_column\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["displayed_fields"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["rownum"] ?? null)] ?? null) : null), "comment", [], "any", false, false, false, 58), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["displayed_fields"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[($context["rownum"] ?? null)] ?? null) : null), "text", [], "any", false, false, false, 58), "html", null, true);
                echo "</span>
                    ";
            } else {
                // line 60
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["displayed_fields"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["rownum"] ?? null)] ?? null) : null), "text", [], "any", false, false, false, 60), "html", null, true);
                echo "
                    ";
            }
            // line 62
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["displayed_fields"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["rownum"] ?? null)] ?? null) : null), "icon", [], "any", false, false, false, 62);
            echo "
                </label>
            </th>
            <td";
            // line 65
            echo (((("set" != (($__internal_compile_8 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["type"] ?? null) : null)) && ("enum" != (($__internal_compile_9 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["type"] ?? null) : null)))) ? (" class=\"text-nowrap\"") : (""));
            echo ">
                <bdo dir=\"ltr\" lang=\"en\">
                    ";
            // line 67
            echo (($__internal_compile_10 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["displayed_type"] ?? null) : null);
            echo "
                    ";
            // line 68
            if (((( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "columnCommentsFeature", [], "any", false, false, false, 68)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "browserTransformationFeature", [], "any", false, false, false, 68))) && ($context["browse_mime"] ?? null)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 69
($context["mime_map"] ?? null), (($__internal_compile_11 = $context["row"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["Field"] ?? null) : null), [], "array", false, true, false, 69), "mimetype", [], "array", true, true, false, 69))) {
                // line 70
                echo "                        <br>";
echo _gettext("Media type:");
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter((($__internal_compile_12 = (($__internal_compile_13 = ($context["mime_map"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[(($__internal_compile_14 = $context["row"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["Field"] ?? null) : null)] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["mimetype"] ?? null) : null), ["_" => "/"])), "html", null, true);
                echo "
                    ";
            }
            // line 72
            echo "                </bdo>
            </td>
            <td>
            ";
            // line 75
            if ( !twig_test_empty((($__internal_compile_15 = $context["row"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["Collation"] ?? null) : null))) {
                // line 76
                echo "                <dfn title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = ($context["collations"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[(($__internal_compile_17 = $context["row"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["Collation"] ?? null) : null)] ?? null) : null), "description", [], "any", false, false, false, 76), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = ($context["collations"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[(($__internal_compile_19 = $context["row"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["Collation"] ?? null) : null)] ?? null) : null), "name", [], "any", false, false, false, 76), "html", null, true);
                echo "</dfn>
            ";
            }
            // line 78
            echo "            </td>
            <td class=\"column_attribute text-nowrap\">";
            // line 79
            echo twig_escape_filter($this->env, (($__internal_compile_20 = ($context["attributes"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[($context["rownum"] ?? null)] ?? null) : null), "html", null, true);
            echo "</td>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, ((((($__internal_compile_21 = $context["row"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["Null"] ?? null) : null) == "YES")) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
            echo "</td>
            <td class=\"text-nowrap\">
                ";
            // line 82
            if ( !(null === (($__internal_compile_22 = $context["row"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["Default"] ?? null) : null))) {
                // line 83
                echo "                    ";
                if (((($__internal_compile_23 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["type"] ?? null) : null) == "bit")) {
                    // line 84
                    echo "                        ";
                    echo twig_escape_filter($this->env, PhpMyAdmin\Util::convertBitDefaultValue((($__internal_compile_24 = $context["row"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["Default"] ?? null) : null)), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 86
                    echo "                        ";
                    echo twig_escape_filter($this->env, (($__internal_compile_25 = $context["row"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["Default"] ?? null) : null), "html", null, true);
                    echo "
                    ";
                }
                // line 88
                echo "                ";
            } elseif (((($__internal_compile_26 = $context["row"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["Null"] ?? null) : null) == "YES")) {
                // line 89
                echo "                    <em>NULL</em>
                ";
            } else {
                // line 91
                echo "                    <em>";
echo _pgettext("None for default", "None");
                echo "</em>
                ";
            }
            // line 93
            echo "            </td>
            ";
            // line 94
            if (($context["show_column_comments"] ?? null)) {
                // line 95
                echo "                <td>
                    ";
                // line 96
                echo twig_escape_filter($this->env, ($context["comments"] ?? null), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 99
            echo "            <td class=\"text-nowrap\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, (($__internal_compile_27 = $context["row"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["Extra"] ?? null) : null)), "html", null, true);
            echo "</td>
            ";
            // line 100
            if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
                // line 101
                echo "                <td class=\"edit text-center d-print-none\">
                    <a class=\"change_column_anchor ajax\" href=\"";
                // line 102
                echo PhpMyAdmin\Url::getFromRoute("/table/structure/change", ["db" =>                 // line 103
($context["db"] ?? null), "table" =>                 // line 104
($context["table"] ?? null), "field" => (($__internal_compile_28 =                 // line 105
$context["row"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["Field"] ?? null) : null), "change_column" => 1]);
                // line 107
                echo "\">
                      ";
                // line 108
                echo PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Change"));
                echo "
                    </a>
                </td>
                <td class=\"drop text-center d-print-none\">
                    <a class=\"drop_column_anchor ajax\" href=\"";
                // line 112
                echo PhpMyAdmin\Url::getFromRoute("/sql");
                echo "\" data-post=\"";
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 113
($context["db"] ?? null), "table" =>                 // line 114
($context["table"] ?? null), "sql_query" => (((("ALTER TABLE " . PhpMyAdmin\Util::backquote(                // line 115
($context["table"] ?? null))) . " DROP ") . PhpMyAdmin\Util::backquote((($__internal_compile_29 = $context["row"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["Field"] ?? null) : null))) . ";"), "dropped_column" => (($__internal_compile_30 =                 // line 116
$context["row"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["Field"] ?? null) : null), "purge" => true, "message_to_show" => twig_sprintf(_gettext("Column %s has been dropped."), twig_escape_filter($this->env, (($__internal_compile_31 =                 // line 118
$context["row"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["Field"] ?? null) : null)))], "", false);
                // line 119
                echo "\">
                      ";
                // line 120
                echo PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Drop"));
                echo "
                    </a>
                </td>
            ";
            }
            // line 124
            echo "
            ";
            // line 125
            if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
                // line 126
                echo "                ";
                $context["type"] = (( !twig_test_empty((($__internal_compile_32 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["print_type"] ?? null) : null))) ? ((($__internal_compile_33 = ($context["extracted_columnspec"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["print_type"] ?? null) : null)) : (""));
                // line 127
                echo "                <td class=\"d-print-none\">
                  ";
                // line 128
                if (($context["hide_structure_actions"] ?? null)) {
                    // line 129
                    echo "                  <div class=\"dropdown\">
                    <button class=\"btn btn-link p-0 dropdown-toggle\" type=\"button\" id=\"moreActionsButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">";
echo _gettext("More");
                    // line 130
                    echo "</button>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"moreActionsButton\">
                  ";
                } else {
                    // line 133
                    echo "                    <ul class=\"nav\">
                  ";
                }
                // line 135
                echo "                        <li class=\"";
                echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                echo "primary text-nowrap\">
                          ";
                // line 136
                if (((((($context["type"] ?? null) == "text") || (($context["type"] ?? null) == "blob")) || (($context["tbl_storage_engine"] ?? null) == "ARCHIVE")) || (($context["primary"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["primary"] ?? null), "hasColumn", [0 => ($context["field_name"] ?? null)], "method", false, false, false, 136)))) {
                    // line 137
                    echo "                            <span class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo PhpMyAdmin\Html\Generator::getIcon("bd_primary", _gettext("Primary"));
                    echo "</span>
                          ";
                } else {
                    // line 139
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key d-print-none add_primary_key_anchor\" href=\"";
                    echo PhpMyAdmin\Url::getFromRoute("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo PhpMyAdmin\Url::getCommon(["db" =>                     // line 140
($context["db"] ?? null), "table" =>                     // line 141
($context["table"] ?? null), "sql_query" => ((((("ALTER TABLE " . PhpMyAdmin\Util::backquote(                    // line 142
($context["table"] ?? null))) . ((($context["primary"] ?? null)) ? (" DROP PRIMARY KEY,") : (""))) . " ADD PRIMARY KEY(") . PhpMyAdmin\Util::backquote((($__internal_compile_34 = $context["row"]) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["Field"] ?? null) : null))) . ");"), "message_to_show" => twig_sprintf(_gettext("A primary key has been added on %s."), twig_escape_filter($this->env, (($__internal_compile_35 =                     // line 143
$context["row"]) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["Field"] ?? null) : null)))], "", false);
                    // line 144
                    echo "\">
                              ";
                    // line 145
                    echo PhpMyAdmin\Html\Generator::getIcon("b_primary", _gettext("Primary"));
                    echo "
                            </a>
                          ";
                }
                // line 148
                echo "                        </li>

                        <li class=\"";
                // line 150
                echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                echo "add_unique unique text-nowrap\">
                          ";
                // line 151
                if (((((($context["type"] ?? null) == "text") || (($context["type"] ?? null) == "blob")) || (($context["tbl_storage_engine"] ?? null) == "ARCHIVE")) || twig_in_filter(($context["field_name"] ?? null), ($context["columns_with_unique_index"] ?? null)))) {
                    // line 152
                    echo "                            <span class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo PhpMyAdmin\Html\Generator::getIcon("bd_unique", _gettext("Unique"));
                    echo "</span>
                          ";
                } else {
                    // line 154
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key d-print-none add_unique_anchor\" href=\"";
                    echo PhpMyAdmin\Url::getFromRoute("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo PhpMyAdmin\Url::getCommon(["db" =>                     // line 155
($context["db"] ?? null), "table" =>                     // line 156
($context["table"] ?? null), "sql_query" => (((("ALTER TABLE " . PhpMyAdmin\Util::backquote(                    // line 157
($context["table"] ?? null))) . " ADD UNIQUE(") . PhpMyAdmin\Util::backquote((($__internal_compile_36 = $context["row"]) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["Field"] ?? null) : null))) . ");"), "message_to_show" => twig_sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, (($__internal_compile_37 =                     // line 158
$context["row"]) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["Field"] ?? null) : null)))], "", false);
                    // line 159
                    echo "\">
                              ";
                    // line 160
                    echo PhpMyAdmin\Html\Generator::getIcon("b_unique", _gettext("Unique"));
                    echo "
                            </a>
                          ";
                }
                // line 163
                echo "                        </li>

                        <li class=\"";
                // line 165
                echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                echo "add_index text-nowrap\">
                          ";
                // line 166
                if ((((($context["type"] ?? null) == "text") || (($context["type"] ?? null) == "blob")) || (($context["tbl_storage_engine"] ?? null) == "ARCHIVE"))) {
                    // line 167
                    echo "                            <span class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo PhpMyAdmin\Html\Generator::getIcon("bd_index", _gettext("Index"));
                    echo "</span>
                          ";
                } else {
                    // line 169
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key d-print-none add_index_anchor\" href=\"";
                    echo PhpMyAdmin\Url::getFromRoute("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo PhpMyAdmin\Url::getCommon(["db" =>                     // line 170
($context["db"] ?? null), "table" =>                     // line 171
($context["table"] ?? null), "sql_query" => (((("ALTER TABLE " . PhpMyAdmin\Util::backquote(                    // line 172
($context["table"] ?? null))) . " ADD INDEX(") . PhpMyAdmin\Util::backquote((($__internal_compile_38 = $context["row"]) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["Field"] ?? null) : null))) . ");"), "message_to_show" => twig_sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, (($__internal_compile_39 =                     // line 173
$context["row"]) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["Field"] ?? null) : null)))], "", false);
                    // line 174
                    echo "\">
                              ";
                    // line 175
                    echo PhpMyAdmin\Html\Generator::getIcon("b_index", _gettext("Index"));
                    echo "
                            </a>
                          ";
                }
                // line 178
                echo "                        </li>

                        ";
                // line 180
                $context["spatial_types"] = [0 => "geometry", 1 => "point", 2 => "linestring", 3 => "polygon", 4 => "multipoint", 5 => "multilinestring", 6 => "multipolygon", 7 => "geomtrycollection"];
                // line 190
                echo "                        <li class=\"";
                echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                echo "spatial text-nowrap\">
                          ";
                // line 191
                if (((((($context["type"] ?? null) == "text") || (($context["type"] ?? null) == "blob")) || (($context["tbl_storage_engine"] ?? null) == "ARCHIVE")) || (!twig_in_filter(($context["type"] ?? null), ($context["spatial_types"] ?? null)) && ((($context["tbl_storage_engine"] ?? null) == "MYISAM") || (($context["mysql_int_version"] ?? null) >= 50705))))) {
                    // line 192
                    echo "                            <span class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo PhpMyAdmin\Html\Generator::getIcon("bd_spatial", _gettext("Spatial"));
                    echo "</span>
                          ";
                } else {
                    // line 194
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key d-print-none add_spatial_anchor\" href=\"";
                    echo PhpMyAdmin\Url::getFromRoute("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo PhpMyAdmin\Url::getCommon(["db" =>                     // line 195
($context["db"] ?? null), "table" =>                     // line 196
($context["table"] ?? null), "sql_query" => (((("ALTER TABLE " . PhpMyAdmin\Util::backquote(                    // line 197
($context["table"] ?? null))) . " ADD SPATIAL(") . PhpMyAdmin\Util::backquote((($__internal_compile_40 = $context["row"]) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["Field"] ?? null) : null))) . ");"), "message_to_show" => twig_sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, (($__internal_compile_41 =                     // line 198
$context["row"]) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["Field"] ?? null) : null)))], "", false);
                    // line 199
                    echo "\">
                              ";
                    // line 200
                    echo PhpMyAdmin\Html\Generator::getIcon("b_spatial", _gettext("Spatial"));
                    echo "
                            </a>
                          ";
                }
                // line 203
                echo "                        </li>

                        ";
                // line 206
                echo "                        <li class=\"";
                echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                echo "fulltext text-nowrap\">
                        ";
                // line 207
                if ((( !twig_test_empty(($context["tbl_storage_engine"] ?? null)) && ((((                // line 208
($context["tbl_storage_engine"] ?? null) == "MYISAM") || (                // line 209
($context["tbl_storage_engine"] ?? null) == "ARIA")) || (                // line 210
($context["tbl_storage_engine"] ?? null) == "MARIA")) || ((                // line 211
($context["tbl_storage_engine"] ?? null) == "INNODB") && (($context["mysql_int_version"] ?? null) >= 50604)))) && (twig_in_filter("text",                 // line 212
($context["type"] ?? null)) || twig_in_filter("char", ($context["type"] ?? null))))) {
                    // line 213
                    echo "                            <a rel=\"samepage\" class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                    echo " ajax add_key add_fulltext_anchor\" href=\"";
                    echo PhpMyAdmin\Url::getFromRoute("/table/structure/add-key");
                    echo "\" data-post=\"";
                    echo PhpMyAdmin\Url::getCommon(["db" =>                     // line 214
($context["db"] ?? null), "table" =>                     // line 215
($context["table"] ?? null), "sql_query" => (((("ALTER TABLE " . PhpMyAdmin\Util::backquote(                    // line 216
($context["table"] ?? null))) . " ADD FULLTEXT(") . PhpMyAdmin\Util::backquote((($__internal_compile_42 = $context["row"]) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["Field"] ?? null) : null))) . ");"), "message_to_show" => twig_sprintf(_gettext("An index has been added on %s."), twig_escape_filter($this->env, (($__internal_compile_43 =                     // line 217
$context["row"]) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["Field"] ?? null) : null)))], "", false);
                    // line 218
                    echo "\">
                              ";
                    // line 219
                    echo PhpMyAdmin\Html\Generator::getIcon("b_ftext", _gettext("Fulltext"));
                    echo "
                            </a>
                        ";
                } else {
                    // line 222
                    echo "                            <span class=\"";
                    echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item-text") : ("nav-link px-1"));
                    echo " disabled\">";
                    echo PhpMyAdmin\Html\Generator::getIcon("bd_ftext", _gettext("Fulltext"));
                    echo "</span>
                        ";
                }
                // line 224
                echo "                        </li>

                        ";
                // line 227
                echo "                        <li class=\"";
                echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                echo "browse text-nowrap\">
                            <a class=\"";
                // line 228
                echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                echo "\" href=\"";
                echo PhpMyAdmin\Url::getFromRoute("/sql");
                echo "\" data-post=\"";
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 229
($context["db"] ?? null), "table" =>                 // line 230
($context["table"] ?? null), "sql_query" => ((((((((("SELECT COUNT(*) AS " . PhpMyAdmin\Util::backquote(_gettext("Rows"))) . ", ") . PhpMyAdmin\Util::backquote((($__internal_compile_44 =                 // line 232
$context["row"]) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["Field"] ?? null) : null))) . " FROM ") . PhpMyAdmin\Util::backquote(                // line 233
($context["table"] ?? null))) . " GROUP BY ") . PhpMyAdmin\Util::backquote((($__internal_compile_45 =                 // line 234
$context["row"]) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["Field"] ?? null) : null))) . " ORDER BY ") . PhpMyAdmin\Util::backquote((($__internal_compile_46 =                 // line 235
$context["row"]) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["Field"] ?? null) : null))), "is_browse_distinct" => true], "", false);
                // line 237
                echo "\">
                              ";
                // line 238
                echo PhpMyAdmin\Html\Generator::getIcon("b_browse", _gettext("Distinct values"));
                echo "
                            </a>
                        </li>
                        ";
                // line 241
                if ( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "centralColumnsFeature", [], "any", false, false, false, 241))) {
                    // line 242
                    echo "                            <li class=\"";
                    echo (( !($context["hide_structure_actions"] ?? null)) ? ("nav-item ") : (""));
                    echo "browse text-nowrap\">
                            ";
                    // line 243
                    if (twig_in_filter((($__internal_compile_47 = $context["row"]) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["Field"] ?? null) : null), ($context["central_list"] ?? null))) {
                        // line 244
                        echo "                                <a class=\"";
                        echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                        echo "\" href=\"";
                        echo PhpMyAdmin\Url::getFromRoute("/table/structure/central-columns-remove");
                        echo "\" data-post=\"";
                        echo PhpMyAdmin\Url::getCommon(["db" =>                         // line 245
($context["db"] ?? null), "table" =>                         // line 246
($context["table"] ?? null), "selected_fld" => [0 => (($__internal_compile_48 =                         // line 247
$context["row"]) && is_array($__internal_compile_48) || $__internal_compile_48 instanceof ArrayAccess ? ($__internal_compile_48["Field"] ?? null) : null)]]);
                        // line 248
                        echo "\">
                                    ";
                        // line 249
                        echo PhpMyAdmin\Html\Generator::getIcon("centralColumns_delete", _gettext("Remove from central columns"));
                        echo "
                                </a>
                            ";
                    } else {
                        // line 252
                        echo "                                <a class=\"";
                        echo ((($context["hide_structure_actions"] ?? null)) ? ("dropdown-item") : ("nav-link px-1"));
                        echo "\" href=\"";
                        echo PhpMyAdmin\Url::getFromRoute("/table/structure/central-columns-add");
                        echo "\" data-post=\"";
                        echo PhpMyAdmin\Url::getCommon(["db" =>                         // line 253
($context["db"] ?? null), "table" =>                         // line 254
($context["table"] ?? null), "selected_fld" => [0 => (($__internal_compile_49 =                         // line 255
$context["row"]) && is_array($__internal_compile_49) || $__internal_compile_49 instanceof ArrayAccess ? ($__internal_compile_49["Field"] ?? null) : null)]]);
                        // line 256
                        echo "\">
                                    ";
                        // line 257
                        echo PhpMyAdmin\Html\Generator::getIcon("centralColumns_add", _gettext("Add to central columns"));
                        echo "
                                </a>
                            ";
                    }
                    // line 260
                    echo "                            </li>
                        ";
                }
                // line 262
                echo "                  ";
                if ( !($context["hide_structure_actions"] ?? null)) {
                    // line 263
                    echo "                    </ul>
                  ";
                } else {
                    // line 265
                    echo "                    </ul>
                  </div>
                  ";
                }
                // line 268
                echo "                </td>
            ";
            }
            // line 270
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "        </tbody>
    </table>
    </div>
    <div class=\"d-print-none\">
        ";
        // line 276
        $this->loadTemplate("select_all.twig", "table/structure/display_structure.twig", 276)->display(twig_to_array(["text_dir" =>         // line 277
($context["text_dir"] ?? null), "form_name" => "fieldsForm"]));
        // line 280
        echo "
        <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
        // line 281
        echo PhpMyAdmin\Url::getFromRoute("/table/structure/browse");
        echo "\">
          ";
        // line 282
        echo PhpMyAdmin\Html\Generator::getIcon("b_browse", _gettext("Browse"));
        echo "
        </button>

        ";
        // line 285
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 286
            echo "          <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
            echo PhpMyAdmin\Url::getFromRoute("/table/structure/change");
            echo "\">
            ";
            // line 287
            echo PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Change"));
            echo "
          </button>
          <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
            // line 289
            echo PhpMyAdmin\Url::getFromRoute("/table/structure/drop-confirm");
            echo "\">
            ";
            // line 290
            echo PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Drop"));
            echo "
          </button>

          ";
            // line 293
            if ((($context["tbl_storage_engine"] ?? null) != "ARCHIVE")) {
                // line 294
                echo "            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                echo PhpMyAdmin\Url::getFromRoute("/table/structure/primary");
                echo "\">
              ";
                // line 295
                echo PhpMyAdmin\Html\Generator::getIcon("b_primary", _gettext("Primary"));
                echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 297
                echo PhpMyAdmin\Url::getFromRoute("/table/structure/unique");
                echo "\">
              ";
                // line 298
                echo PhpMyAdmin\Html\Generator::getIcon("b_unique", _gettext("Unique"));
                echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 300
                echo PhpMyAdmin\Url::getFromRoute("/table/structure/index");
                echo "\">
              ";
                // line 301
                echo PhpMyAdmin\Html\Generator::getIcon("b_index", _gettext("Index"));
                echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 303
                echo PhpMyAdmin\Url::getFromRoute("/table/structure/spatial");
                echo "\">
              ";
                // line 304
                echo PhpMyAdmin\Html\Generator::getIcon("b_spatial", _gettext("Spatial"));
                echo "
            </button>
            <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                // line 306
                echo PhpMyAdmin\Url::getFromRoute("/table/structure/fulltext");
                echo "\">
              ";
                // line 307
                echo PhpMyAdmin\Html\Generator::getIcon("b_ftext", _gettext("Fulltext"));
                echo "
            </button>

            ";
                // line 310
                if ( !(null === twig_get_attribute($this->env, $this->source, ($context["relation_parameters"] ?? null), "centralColumnsFeature", [], "any", false, false, false, 310))) {
                    // line 311
                    echo "              <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                    echo PhpMyAdmin\Url::getFromRoute("/table/structure/central-columns-add");
                    echo "\">
                ";
                    // line 312
                    echo PhpMyAdmin\Html\Generator::getIcon("centralColumns_add", _gettext("Add to central columns"));
                    echo "
              </button>
              <button class=\"btn btn-link mult_submit\" type=\"submit\" formaction=\"";
                    // line 314
                    echo PhpMyAdmin\Url::getFromRoute("/table/structure/central-columns-remove");
                    echo "\">
                ";
                    // line 315
                    echo PhpMyAdmin\Html\Generator::getIcon("centralColumns_delete", _gettext("Remove from central columns"));
                    echo "
              </button>
            ";
                }
                // line 318
                echo "          ";
            }
            // line 319
            echo "        ";
        }
        // line 320
        echo "    </div>
</form>
<hr class=\"d-print-none\">

<div class=\"modal fade\" id=\"moveColumnsModal\" tabindex=\"-1\" aria-labelledby=\"moveColumnsModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"moveColumnsModalLabel\">";
echo _gettext("Move columns");
        // line 328
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 329
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
        <div id=\"move_columns_dialog\" title=\"";
echo _gettext("Move columns");
        // line 332
        echo "\">
          <p>";
echo _gettext("Move the columns by dragging them up and down.");
        // line 333
        echo "</p>
          <form action=\"";
        // line 334
        echo PhpMyAdmin\Url::getFromRoute("/table/structure/move-columns");
        echo "\" name=\"move_column_form\" id=\"move_column_form\">
            <div>
              ";
        // line 336
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
              <ul></ul>
            </div>
          </form>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalGoButton\">";
echo _gettext("Go");
        // line 343
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalPreviewButton\">";
echo _gettext("Preview SQL");
        // line 344
        echo "</button>
        <button type=\"button\" class=\"btn btn-secondary\" id=\"designerModalCloseButton\" data-bs-dismiss=\"modal\">";
echo _gettext("Close");
        // line 345
        echo "</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"moveColumnsErrorModal\" tabindex=\"-1\" aria-labelledby=\"moveColumnsErrorModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"moveColumnsErrorModalLabel\">";
echo _gettext("Error");
        // line 355
        echo "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
echo _gettext("Close");
        // line 356
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">";
echo _gettext("OK");
        // line 361
        echo "</button>
      </div>
    </div>
  </div>
</div>

";
        // line 368
        echo "<div id=\"structure-action-links\" class=\"d-print-none\">
    ";
        // line 369
        if ((($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 370
            echo "        ";
            echo PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/view/create"), ["db" =>             // line 372
($context["db"] ?? null), "table" => ($context["table"] ?? null)], PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Edit view"), true));
            // line 374
            echo "
    ";
        }
        // line 376
        echo "    <button type=\"button\" class=\"btn btn-link p-0 jsPrintButton\">";
        echo PhpMyAdmin\Html\Generator::getIcon("b_print", _gettext("Print"), true);
        echo "</button>
    ";
        // line 377
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 378
            echo "        ";
            // line 379
            echo "        ";
            if (((($context["mysql_int_version"] ?? null) < 80000) || ($context["is_mariadb"] ?? null))) {
                // line 380
                echo "          <a class=\"me-0\" href=\"";
                echo PhpMyAdmin\Url::getFromRoute("/sql");
                echo "\" data-post=\"";
                echo PhpMyAdmin\Url::getCommon(["db" =>                 // line 381
($context["db"] ?? null), "table" =>                 // line 382
($context["table"] ?? null), "sql_query" => (("SELECT * FROM " . PhpMyAdmin\Util::backquote(                // line 383
($context["table"] ?? null))) . " PROCEDURE ANALYSE()"), "session_max_rows" => "all"], "", false);
                // line 385
                echo "\">
            ";
                // line 386
                echo PhpMyAdmin\Html\Generator::getIcon("b_tblanalyse", _gettext("Propose table structure"), true);
                // line 390
                echo "
          </a>
          ";
                // line 392
                echo PhpMyAdmin\Html\MySQLDocumentation::show("procedure_analyse");
                echo "
        ";
            }
            // line 394
            echo "        ";
            if (($context["is_active"] ?? null)) {
                // line 395
                echo "            <a href=\"";
                echo PhpMyAdmin\Url::getFromRoute("/table/tracking", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                echo "\">
                ";
                // line 396
                echo PhpMyAdmin\Html\Generator::getIcon("eye", _gettext("Track table"), true);
                echo "
            </a>
        ";
            }
            // line 399
            echo "        <a href=\"#\" id=\"move_columns_anchor\">
            ";
            // line 400
            echo PhpMyAdmin\Html\Generator::getIcon("b_move", _gettext("Move columns"), true);
            echo "
        </a>
        <a href=\"";
            // line 402
            echo PhpMyAdmin\Url::getFromRoute("/normalization", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
            echo "\">
            ";
            // line 403
            echo PhpMyAdmin\Html\Generator::getIcon("normalize", _gettext("Normalize"), true);
            echo "
        </a>
    ";
        }
        // line 406
        echo "    ";
        if ((($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 407
            echo "        ";
            if (($context["is_active"] ?? null)) {
                // line 408
                echo "            <a href=\"";
                echo PhpMyAdmin\Url::getFromRoute("/table/tracking", ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]);
                echo "\">
                ";
                // line 409
                echo PhpMyAdmin\Html\Generator::getIcon("eye", _gettext("Track view"), true);
                echo "
            </a>
        ";
            }
            // line 412
            echo "    ";
        }
        // line 413
        echo "</div>
";
        // line 414
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 415
            echo "    <form method=\"post\" action=\"";
            echo PhpMyAdmin\Url::getFromRoute("/table/add-field");
            echo "\" id=\"addColumns\" name=\"addColumns\" class=\"d-print-none\">
        ";
            // line 416
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            echo "
        ";
            // line 417
            if (PhpMyAdmin\Util::showIcons("ActionLinksMode")) {
                // line 418
                echo "            ";
                echo PhpMyAdmin\Html\Generator::getImage("b_insrow", _gettext("Add column"));
                echo "&nbsp;
        ";
            }
            // line 420
            echo "        ";
            $context["num_fields"] = ('' === $tmp = "<input type=\"number\" name=\"num_fields\" value=\"1\" onfocus=\"this.select()\" min=\"1\" required>") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 423
            echo "        ";
            echo twig_sprintf(_gettext("Add %s column(s)"), ($context["num_fields"] ?? null));
            echo "
        <input type=\"hidden\" name=\"field_where\" value=\"after\">&nbsp;
        ";
            // line 426
            echo "        <select name=\"after_field\">
            <option value=\"first\" data-pos=\"first\">
                ";
echo _gettext("at beginning of table");
            // line 429
            echo "            </option>
            ";
            // line 430
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["columns_list"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["one_column_name"]) {
                // line 431
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["one_column_name"], "html", null, true);
                echo "\"";
                // line 432
                echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "revindex0", [], "any", false, false, false, 432) == 0)) ? (" selected=\"selected\"") : (""));
                echo ">
                    ";
                // line 433
                echo twig_escape_filter($this->env, twig_sprintf(_gettext("after %s"), $context["one_column_name"]), "html", null, true);
                echo "
                </option>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one_column_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 436
            echo "        </select>
        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
echo _gettext("Go");
            // line 437
            echo "\">
    </form>
";
        }
        // line 440
        echo "
";
        // line 441
        if ((( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null)) && (($context["tbl_storage_engine"] ?? null) != "ARCHIVE"))) {
            // line 442
            echo "  <div id=\"index_div\" class=\"w-100 ajax\">
    <fieldset class=\"pma-fieldset index_info\">
      <legend id=\"index_header\">
        ";
echo _gettext("Indexes");
            // line 446
            echo "        ";
            echo PhpMyAdmin\Html\MySQLDocumentation::show("optimizing-database-structure");
            echo "
      </legend>

      ";
            // line 449
            if ( !twig_test_empty(($context["indexes"] ?? null))) {
                // line 450
                echo "        ";
                echo ($context["indexes_duplicates"] ?? null);
                echo "

        ";
                // line 452
                echo twig_include($this->env, $context, "modals/preview_sql_confirmation.twig");
                echo "
        <div class=\"table-responsive jsresponsive\">
          <table class=\"table table-light table-striped table-hover table-sm w-auto align-middle\" id=\"table_index\">
            <thead class=\"table-light\">
              <tr>
                <th colspan=\"3\" class=\"d-print-none\">";
echo _gettext("Action");
                // line 457
                echo "</th>
                <th>";
echo _gettext("Keyname");
                // line 458
                echo "</th>
                <th>";
echo _gettext("Type");
                // line 459
                echo "</th>
                <th>";
echo _gettext("Unique");
                // line 460
                echo "</th>
                <th>";
echo _gettext("Packed");
                // line 461
                echo "</th>
                <th>";
echo _gettext("Column");
                // line 462
                echo "</th>
                <th>";
echo _gettext("Cardinality");
                // line 463
                echo "</th>
                <th>";
echo _gettext("Collation");
                // line 464
                echo "</th>
                <th>";
echo _gettext("Null");
                // line 465
                echo "</th>
                <th>";
echo _gettext("Comment");
                // line 466
                echo "</th>
              </tr>
            </thead>

            ";
                // line 470
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["indexes"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                    // line 471
                    echo "              <tbody class=\"row_span\">
                ";
                    // line 472
                    $context["columns_count"] = twig_get_attribute($this->env, $this->source, $context["index"], "getColumnCount", [], "method", false, false, false, 472);
                    // line 473
                    echo "                <tr class=\"noclick\">
                <td rowspan=\"";
                    // line 474
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\" class=\"edit_index d-print-none ajax\">
                  <a class=\"ajax\" href=\"";
                    // line 475
                    echo PhpMyAdmin\Url::getFromRoute("/table/indexes");
                    echo "\" data-post=\"";
                    echo PhpMyAdmin\Url::getCommon(["db" =>                     // line 476
($context["db"] ?? null), "table" =>                     // line 477
($context["table"] ?? null), "index" => twig_get_attribute($this->env, $this->source,                     // line 478
$context["index"], "getName", [], "method", false, false, false, 478)], "", false);
                    // line 479
                    echo "\">
                    ";
                    // line 480
                    echo PhpMyAdmin\Html\Generator::getIcon("b_edit", _gettext("Edit"));
                    echo "
                  </a>
                </td>
                <td rowspan=\"";
                    // line 483
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\" class=\"rename_index d-print-none ajax\" >
                  <a class=\"ajax\" href=\"";
                    // line 484
                    echo PhpMyAdmin\Url::getFromRoute("/table/indexes/rename");
                    echo "\" data-post=\"";
                    echo PhpMyAdmin\Url::getCommon(["db" =>                     // line 485
($context["db"] ?? null), "table" =>                     // line 486
($context["table"] ?? null), "index" => twig_get_attribute($this->env, $this->source,                     // line 487
$context["index"], "getName", [], "method", false, false, false, 487)], "", false);
                    // line 488
                    echo "\">
                    ";
                    // line 489
                    echo PhpMyAdmin\Html\Generator::getIcon("b_rename", _gettext("Rename"));
                    echo "
                  </a>
                </td>
                <td rowspan=\"";
                    // line 492
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\" class=\"d-print-none\">
                  ";
                    // line 493
                    if ((twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 493) == "PRIMARY")) {
                        // line 494
                        echo "                    ";
                        $context["index_params"] = ["sql_query" => (("ALTER TABLE " . PhpMyAdmin\Util::backquote(                        // line 495
($context["table"] ?? null))) . " DROP PRIMARY KEY;"), "message_to_show" => _gettext("The primary key has been dropped.")];
                        // line 498
                        echo "                  ";
                    } else {
                        // line 499
                        echo "                    ";
                        $context["index_params"] = ["sql_query" => (((("ALTER TABLE " . PhpMyAdmin\Util::backquote(                        // line 500
($context["table"] ?? null))) . " DROP INDEX ") . PhpMyAdmin\Util::backquote(twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 500))) . ";"), "message_to_show" => twig_sprintf(_gettext("Index %s has been dropped."), twig_get_attribute($this->env, $this->source,                         // line 501
$context["index"], "getName", [], "method", false, false, false, 501))];
                        // line 503
                        echo "                  ";
                    }
                    // line 504
                    echo "
                  <input type=\"hidden\" class=\"drop_primary_key_index_msg\" value=\"";
                    // line 505
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["index_params"] ?? null), "sql_query", [], "any", false, false, false, 505), "html", null, true);
                    echo "\">
                  ";
                    // line 506
                    echo PhpMyAdmin\Html\Generator::linkOrButton(PhpMyAdmin\Url::getFromRoute("/sql"), twig_array_merge(                    // line 508
($context["index_params"] ?? null), ["db" => ($context["db"] ?? null), "table" => ($context["table"] ?? null)]), PhpMyAdmin\Html\Generator::getIcon("b_drop", _gettext("Drop")), ["class" => "drop_primary_key_index_anchor ajax"]);
                    // line 511
                    echo "
                </td>
                <th rowspan=\"";
                    // line 513
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "getName", [], "method", false, false, false, 513), "html", null, true);
                    echo "</th>
                <td rowspan=\"";
                    // line 514
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["index"], "getType", [], "method", true, true, false, 514)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["index"], "getType", [], "method", false, false, false, 514), twig_get_attribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 514))) : (twig_get_attribute($this->env, $this->source, $context["index"], "getChoice", [], "method", false, false, false, 514))), "html", null, true);
                    echo "</td>
                <td rowspan=\"";
                    // line 515
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["index"], "isUnique", [], "method", false, false, false, 515)) ? (_gettext("Yes")) : (_gettext("No"))), "html", null, true);
                    echo "</td>
                <td rowspan=\"";
                    // line 516
                    echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["index"], "isPacked", [], "method", false, false, false, 516);
                    echo "</td>

                ";
                    // line 518
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["index"], "getColumns", [], "method", false, false, false, 518));
                    foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                        // line 519
                        echo "                  ";
                        if ((twig_get_attribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 519) > 1)) {
                            // line 520
                            echo "                    <tr class=\"noclick\">
                  ";
                        }
                        // line 522
                        echo "                  <td>
                    ";
                        // line 523
                        if (twig_get_attribute($this->env, $this->source, $context["column"], "hasExpression", [], "method", false, false, false, 523)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getExpression", [], "method", false, false, false, 523), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 523), "html", null, true);
                        }
                        // line 524
                        echo "                    ";
                        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 524))) {
                            // line 525
                            echo "                      (";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getSubPart", [], "method", false, false, false, 525), "html", null, true);
                            echo ")
                    ";
                        }
                        // line 527
                        echo "                  </td>
                  <td>";
                        // line 528
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getCardinality", [], "method", false, false, false, 528), "html", null, true);
                        echo "</td>
                  <td>";
                        // line 529
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getCollation", [], "method", false, false, false, 529), "html", null, true);
                        echo "</td>
                  <td>";
                        // line 530
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "getNull", [0 => true], "method", false, false, false, 530), "html", null, true);
                        echo "</td>

                  ";
                        // line 532
                        if ((twig_get_attribute($this->env, $this->source, $context["column"], "getSeqInIndex", [], "method", false, false, false, 532) == 1)) {
                            // line 533
                            echo "                    <td rowspan=\"";
                            echo twig_escape_filter($this->env, ($context["columns_count"] ?? null), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "getComments", [], "method", false, false, false, 533), "html", null, true);
                            echo "</td>
                  ";
                        }
                        // line 535
                        echo "                  </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 537
                    echo "              </tbody>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 539
                echo "          </table>
        </div>
      ";
            } else {
                // line 542
                echo "        <div class=\"no_indexes_defined\">";
                echo call_user_func_array($this->env->getFilter('notice')->getCallable(), [_gettext("No index defined!")]);
                echo "</div>
      ";
            }
            // line 544
            echo "    </fieldset>

    <fieldset class=\"pma-fieldset tblFooters d-print-none text-start\">
      <form action=\"";
            // line 547
            echo PhpMyAdmin\Url::getFromRoute("/table/indexes");
            echo "\" method=\"post\">
        ";
            // line 548
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
            echo "
        <input type=\"hidden\" name=\"create_index\" value=\"1\">

        ";
            // line 551
            ob_start(function () { return ''; });
            // line 552
            echo "          ";
echo _gettext("Create an index on %s columns");
            // line 553
            echo "        ";
            $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 551
            echo twig_sprintf($___internal_parse_0_, "<input class=\"mx-2\" type=\"number\" name=\"added_fields\" value=\"1\" min=\"1\" max=\"16\" required>");
            // line 554
            echo "
        <input class=\"btn btn-primary add_index ajax\" type=\"submit\" value=\"";
echo _gettext("Go");
            // line 555
            echo "\">
      </form>
    </fieldset>
  </div>
  ";
            // line 559
            echo twig_include($this->env, $context, "modals/index_dialog_modal.twig");
            echo "
";
        }
        // line 561
        echo "
";
        // line 563
        if (($context["have_partitioning"] ?? null)) {
            // line 564
            echo "    ";
            // line 565
            echo "    ";
            if (( !twig_test_empty(($context["partition_names"] ?? null)) &&  !(null === (($__internal_compile_50 = ($context["partition_names"] ?? null)) && is_array($__internal_compile_50) || $__internal_compile_50 instanceof ArrayAccess ? ($__internal_compile_50[0] ?? null) : null)))) {
                // line 566
                echo "        ";
                $context["first_partition"] = (($__internal_compile_51 = ($context["partitions"] ?? null)) && is_array($__internal_compile_51) || $__internal_compile_51 instanceof ArrayAccess ? ($__internal_compile_51[0] ?? null) : null);
                // line 567
                echo "        ";
                $context["range_or_list"] = ((((twig_get_attribute($this->env, $this->source, ($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 567) == "RANGE") || (twig_get_attribute($this->env, $this->source,                 // line 568
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 568) == "RANGE COLUMNS")) || (twig_get_attribute($this->env, $this->source,                 // line 569
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 569) == "LIST")) || (twig_get_attribute($this->env, $this->source,                 // line 570
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 570) == "LIST COLUMNS"));
                // line 571
                echo "        ";
                $context["sub_partitions"] = twig_get_attribute($this->env, $this->source, ($context["first_partition"] ?? null), "getSubPartitions", [], "method", false, false, false, 571);
                // line 572
                echo "        ";
                $context["has_sub_partitions"] = twig_get_attribute($this->env, $this->source, ($context["first_partition"] ?? null), "hasSubPartitions", [], "method", false, false, false, 572);
                // line 573
                echo "        ";
                if (($context["has_sub_partitions"] ?? null)) {
                    // line 574
                    echo "            ";
                    $context["first_sub_partition"] = (($__internal_compile_52 = ($context["sub_partitions"] ?? null)) && is_array($__internal_compile_52) || $__internal_compile_52 instanceof ArrayAccess ? ($__internal_compile_52[0] ?? null) : null);
                    // line 575
                    echo "        ";
                }
                // line 576
                echo "
        ";
                // line 577
                if ((($context["default_sliders_state"] ?? null) != "disabled")) {
                    // line 578
                    echo "        <div class=\"mb-3\">
          <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#partitionsCollapse\" aria-expanded=\"";
                    // line 579
                    echo (((($context["default_sliders_state"] ?? null) == "open")) ? ("true") : ("false"));
                    echo "\" aria-controls=\"partitionsCollapse\">
            ";
echo _gettext("Partitions");
                    // line 581
                    echo "          </button>
        </div>
        <div class=\"collapse mb-3";
                    // line 583
                    echo (((($context["default_sliders_state"] ?? null) == "open")) ? (" show") : (""));
                    echo "\" id=\"partitionsCollapse\">
        ";
                }
                // line 585
                echo "
        ";
                // line 586
                $this->loadTemplate("table/structure/display_partitions.twig", "table/structure/display_structure.twig", 586)->display(twig_to_array(["db" =>                 // line 587
($context["db"] ?? null), "table" =>                 // line 588
($context["table"] ?? null), "partitions" =>                 // line 589
($context["partitions"] ?? null), "partition_method" => twig_get_attribute($this->env, $this->source,                 // line 590
($context["first_partition"] ?? null), "getMethod", [], "method", false, false, false, 590), "partition_expression" => twig_get_attribute($this->env, $this->source,                 // line 591
($context["first_partition"] ?? null), "getExpression", [], "method", false, false, false, 591), "has_description" =>  !twig_test_empty(twig_get_attribute($this->env, $this->source,                 // line 592
($context["first_partition"] ?? null), "getDescription", [], "method", false, false, false, 592)), "has_sub_partitions" =>                 // line 593
($context["has_sub_partitions"] ?? null), "sub_partition_method" => ((                // line 594
($context["has_sub_partitions"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["first_sub_partition"] ?? null), "getMethod", [], "method", false, false, false, 594)) : ("")), "sub_partition_expression" => ((                // line 595
($context["has_sub_partitions"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["first_sub_partition"] ?? null), "getExpression", [], "method", false, false, false, 595)) : ("")), "range_or_list" =>                 // line 596
($context["range_or_list"] ?? null)]));
                // line 598
                echo "    ";
            } else {
                // line 599
                echo "        ";
                $this->loadTemplate("table/structure/display_partitions.twig", "table/structure/display_structure.twig", 599)->display(twig_to_array(["db" =>                 // line 600
($context["db"] ?? null), "table" =>                 // line 601
($context["table"] ?? null)]));
                // line 603
                echo "    ";
            }
            // line 604
            echo "    ";
            if ((($context["default_sliders_state"] ?? null) != "disabled")) {
                // line 605
                echo "    </div>
    ";
            }
        }
        // line 608
        echo "
";
        // line 610
        if (($context["show_stats"] ?? null)) {
            // line 611
            echo "    ";
            echo ($context["table_stats"] ?? null);
            echo "
";
        }
        // line 613
        echo "<div class=\"clearfloat\"></div>
";
    }

    public function getTemplateName()
    {
        return "table/structure/display_structure.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1475 => 613,  1469 => 611,  1467 => 610,  1464 => 608,  1459 => 605,  1456 => 604,  1453 => 603,  1451 => 601,  1450 => 600,  1448 => 599,  1445 => 598,  1443 => 596,  1442 => 595,  1441 => 594,  1440 => 593,  1439 => 592,  1438 => 591,  1437 => 590,  1436 => 589,  1435 => 588,  1434 => 587,  1433 => 586,  1430 => 585,  1425 => 583,  1421 => 581,  1416 => 579,  1413 => 578,  1411 => 577,  1408 => 576,  1405 => 575,  1402 => 574,  1399 => 573,  1396 => 572,  1393 => 571,  1391 => 570,  1390 => 569,  1389 => 568,  1387 => 567,  1384 => 566,  1381 => 565,  1379 => 564,  1377 => 563,  1374 => 561,  1369 => 559,  1363 => 555,  1359 => 554,  1357 => 551,  1354 => 553,  1351 => 552,  1349 => 551,  1343 => 548,  1339 => 547,  1334 => 544,  1328 => 542,  1323 => 539,  1316 => 537,  1309 => 535,  1301 => 533,  1299 => 532,  1294 => 530,  1290 => 529,  1286 => 528,  1283 => 527,  1277 => 525,  1274 => 524,  1268 => 523,  1265 => 522,  1261 => 520,  1258 => 519,  1254 => 518,  1247 => 516,  1241 => 515,  1235 => 514,  1229 => 513,  1225 => 511,  1223 => 508,  1222 => 506,  1218 => 505,  1215 => 504,  1212 => 503,  1210 => 501,  1209 => 500,  1207 => 499,  1204 => 498,  1202 => 495,  1200 => 494,  1198 => 493,  1194 => 492,  1188 => 489,  1185 => 488,  1183 => 487,  1182 => 486,  1181 => 485,  1178 => 484,  1174 => 483,  1168 => 480,  1165 => 479,  1163 => 478,  1162 => 477,  1161 => 476,  1158 => 475,  1154 => 474,  1151 => 473,  1149 => 472,  1146 => 471,  1142 => 470,  1136 => 466,  1132 => 465,  1128 => 464,  1124 => 463,  1120 => 462,  1116 => 461,  1112 => 460,  1108 => 459,  1104 => 458,  1100 => 457,  1091 => 452,  1085 => 450,  1083 => 449,  1076 => 446,  1070 => 442,  1068 => 441,  1065 => 440,  1060 => 437,  1056 => 436,  1039 => 433,  1035 => 432,  1031 => 431,  1014 => 430,  1011 => 429,  1006 => 426,  1000 => 423,  997 => 420,  991 => 418,  989 => 417,  985 => 416,  980 => 415,  978 => 414,  975 => 413,  972 => 412,  966 => 409,  961 => 408,  958 => 407,  955 => 406,  949 => 403,  945 => 402,  940 => 400,  937 => 399,  931 => 396,  926 => 395,  923 => 394,  918 => 392,  914 => 390,  912 => 386,  909 => 385,  907 => 383,  906 => 382,  905 => 381,  901 => 380,  898 => 379,  896 => 378,  894 => 377,  889 => 376,  885 => 374,  883 => 372,  881 => 370,  879 => 369,  876 => 368,  868 => 361,  860 => 356,  856 => 355,  843 => 345,  839 => 344,  835 => 343,  824 => 336,  819 => 334,  816 => 333,  812 => 332,  806 => 329,  802 => 328,  791 => 320,  788 => 319,  785 => 318,  779 => 315,  775 => 314,  770 => 312,  765 => 311,  763 => 310,  757 => 307,  753 => 306,  748 => 304,  744 => 303,  739 => 301,  735 => 300,  730 => 298,  726 => 297,  721 => 295,  716 => 294,  714 => 293,  708 => 290,  704 => 289,  699 => 287,  694 => 286,  692 => 285,  686 => 282,  682 => 281,  679 => 280,  677 => 277,  676 => 276,  670 => 272,  663 => 270,  659 => 268,  654 => 265,  650 => 263,  647 => 262,  643 => 260,  637 => 257,  634 => 256,  632 => 255,  631 => 254,  630 => 253,  624 => 252,  618 => 249,  615 => 248,  613 => 247,  612 => 246,  611 => 245,  605 => 244,  603 => 243,  598 => 242,  596 => 241,  590 => 238,  587 => 237,  585 => 235,  584 => 234,  583 => 233,  582 => 232,  581 => 230,  580 => 229,  575 => 228,  570 => 227,  566 => 224,  558 => 222,  552 => 219,  549 => 218,  547 => 217,  546 => 216,  545 => 215,  544 => 214,  538 => 213,  536 => 212,  535 => 211,  534 => 210,  533 => 209,  532 => 208,  531 => 207,  526 => 206,  522 => 203,  516 => 200,  513 => 199,  511 => 198,  510 => 197,  509 => 196,  508 => 195,  502 => 194,  494 => 192,  492 => 191,  487 => 190,  485 => 180,  481 => 178,  475 => 175,  472 => 174,  470 => 173,  469 => 172,  468 => 171,  467 => 170,  461 => 169,  453 => 167,  451 => 166,  447 => 165,  443 => 163,  437 => 160,  434 => 159,  432 => 158,  431 => 157,  430 => 156,  429 => 155,  423 => 154,  415 => 152,  413 => 151,  409 => 150,  405 => 148,  399 => 145,  396 => 144,  394 => 143,  393 => 142,  392 => 141,  391 => 140,  385 => 139,  377 => 137,  375 => 136,  370 => 135,  366 => 133,  361 => 130,  357 => 129,  355 => 128,  352 => 127,  349 => 126,  347 => 125,  344 => 124,  337 => 120,  334 => 119,  332 => 118,  331 => 116,  330 => 115,  329 => 114,  328 => 113,  325 => 112,  318 => 108,  315 => 107,  313 => 105,  312 => 104,  311 => 103,  310 => 102,  307 => 101,  305 => 100,  300 => 99,  294 => 96,  291 => 95,  289 => 94,  286 => 93,  280 => 91,  276 => 89,  273 => 88,  267 => 86,  261 => 84,  258 => 83,  256 => 82,  251 => 80,  247 => 79,  244 => 78,  236 => 76,  234 => 75,  229 => 72,  221 => 70,  219 => 69,  218 => 68,  214 => 67,  209 => 65,  202 => 62,  196 => 60,  188 => 58,  186 => 57,  182 => 56,  177 => 54,  170 => 52,  165 => 49,  163 => 48,  160 => 47,  158 => 46,  155 => 45,  153 => 44,  150 => 43,  147 => 42,  142 => 41,  139 => 40,  134 => 36,  128 => 34,  125 => 33,  122 => 32,  117 => 30,  112 => 28,  110 => 27,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  80 => 17,  75 => 13,  72 => 12,  69 => 10,  67 => 9,  65 => 8,  63 => 7,  59 => 5,  55 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/display_structure.twig", "/Users/mmsit/Desktop/WAD/phpMyAdmin-5.2.0-all-languages/templates/table/structure/display_structure.twig");
    }
}
