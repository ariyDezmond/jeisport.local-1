<?php

/* acp_search.html */
class __TwigTemplate_e8d4f071a642e07dd85aa6680bec9dcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (isset($context["S_SETTINGS"])) { $_S_SETTINGS_ = $context["S_SETTINGS"]; } else { $_S_SETTINGS_ = null; }
        if (isset($context["S_INDEX"])) { $_S_INDEX_ = $context["S_INDEX"]; } else { $_S_INDEX_ = null; }
        if ($_S_SETTINGS_) {
            // line 6
            echo "\t<h1>";
            echo $this->env->getExtension('phpbb')->lang("ACP_SEARCH_SETTINGS");
            echo "</h1>

\t<p>";
            // line 8
            echo $this->env->getExtension('phpbb')->lang("ACP_SEARCH_SETTINGS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_search\" method=\"post\" action=\"";
            // line 10
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("GENERAL_SEARCH_SETTINGS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"load_search\">";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("YES_SEARCH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("YES_SEARCH_EXPLAIN");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"load_search\" name=\"config[load_search]\" value=\"1\"";
            // line 16
            if (isset($context["S_YES_SEARCH"])) { $_S_YES_SEARCH_ = $context["S_YES_SEARCH"]; } else { $_S_YES_SEARCH_ = null; }
            if ($_S_YES_SEARCH_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"config[load_search]\" value=\"0\"";
            // line 17
            if (isset($context["S_YES_SEARCH"])) { $_S_YES_SEARCH_ = $context["S_YES_SEARCH"]; } else { $_S_YES_SEARCH_ = null; }
            if ((!$_S_YES_SEARCH_)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"search_interval\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("SEARCH_INTERVAL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_INTERVAL_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"search_interval\" type=\"number\" size=\"4\" maxlength=\"4\" min=\"0\" max=\"9999\" name=\"config[search_interval]\" value=\"";
            // line 21
            if (isset($context["SEARCH_INTERVAL"])) { $_SEARCH_INTERVAL_ = $context["SEARCH_INTERVAL"]; } else { $_SEARCH_INTERVAL_ = null; }
            echo $_SEARCH_INTERVAL_;
            echo "\" /> ";
            echo $this->env->getExtension('phpbb')->lang("SECONDS");
            echo "</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"search_anonymous_interval\">";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("SEARCH_GUEST_INTERVAL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_GUEST_INTERVAL_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"search_anonymous_interval\" type=\"number\" size=\"4\" maxlength=\"4\" min=\"0\" max=\"9999\" name=\"config[search_anonymous_interval]\" value=\"";
            // line 25
            if (isset($context["SEARCH_GUEST_INTERVAL"])) { $_SEARCH_GUEST_INTERVAL_ = $context["SEARCH_GUEST_INTERVAL"]; } else { $_SEARCH_GUEST_INTERVAL_ = null; }
            echo $_SEARCH_GUEST_INTERVAL_;
            echo "\" /> ";
            echo $this->env->getExtension('phpbb')->lang("SECONDS");
            echo "</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"limit_search_load\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("LIMIT_SEARCH_LOAD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LIMIT_SEARCH_LOAD_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"limit_search_load\" type=\"text\" size=\"4\" maxlength=\"4\" name=\"config[limit_search_load]\" value=\"";
            // line 29
            if (isset($context["LIMIT_SEARCH_LOAD"])) { $_LIMIT_SEARCH_LOAD_ = $context["LIMIT_SEARCH_LOAD"]; } else { $_LIMIT_SEARCH_LOAD_ = null; }
            echo $_LIMIT_SEARCH_LOAD_;
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"min_search_author_chars\">";
            // line 32
            echo $this->env->getExtension('phpbb')->lang("MIN_SEARCH_AUTHOR_CHARS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("MIN_SEARCH_AUTHOR_CHARS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"min_search_author_chars\" type=\"number\" size=\"4\" maxlength=\"4\" min=\"0\" max=\"9999\" name=\"config[min_search_author_chars]\" value=\"";
            // line 33
            if (isset($context["MIN_SEARCH_AUTHOR_CHARS"])) { $_MIN_SEARCH_AUTHOR_CHARS_ = $context["MIN_SEARCH_AUTHOR_CHARS"]; } else { $_MIN_SEARCH_AUTHOR_CHARS_ = null; }
            echo $_MIN_SEARCH_AUTHOR_CHARS_;
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"max_num_search_keywords\">";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("MAX_NUM_SEARCH_KEYWORDS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("MAX_NUM_SEARCH_KEYWORDS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"max_num_search_keywords\" type=\"number\" size=\"4\" maxlength=\"4\" min=\"0\" max=\"9999\" name=\"config[max_num_search_keywords]\" value=\"";
            // line 37
            if (isset($context["MAX_NUM_SEARCH_KEYWORDS"])) { $_MAX_NUM_SEARCH_KEYWORDS_ = $context["MAX_NUM_SEARCH_KEYWORDS"]; } else { $_MAX_NUM_SEARCH_KEYWORDS_ = null; }
            echo $_MAX_NUM_SEARCH_KEYWORDS_;
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"search_store_results\">";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("SEARCH_STORE_RESULTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_STORE_RESULTS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input id=\"search_store_results\" type=\"number\" size=\"4\" maxlength=\"6\" min=\"0\" max=\"999999\" name=\"config[search_store_results]\" value=\"";
            // line 41
            if (isset($context["SEARCH_STORE_RESULTS"])) { $_SEARCH_STORE_RESULTS_ = $context["SEARCH_STORE_RESULTS"]; } else { $_SEARCH_STORE_RESULTS_ = null; }
            echo $_SEARCH_STORE_RESULTS_;
            echo "\" /> ";
            echo $this->env->getExtension('phpbb')->lang("SECONDS");
            echo "</dd>
\t</dl>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TYPE");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"search_type\">";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TYPE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TYPE_EXPLAIN");
            echo "</span></dt>
\t\t<dd><select id=\"search_type\" name=\"config[search_type]\" data-togglable-settings=\"true\">";
            // line 49
            if (isset($context["S_SEARCH_TYPES"])) { $_S_SEARCH_TYPES_ = $context["S_SEARCH_TYPES"]; } else { $_S_SEARCH_TYPES_ = null; }
            echo $_S_SEARCH_TYPES_;
            echo "</select></dd>
\t</dl>
\t</fieldset>

\t";
            // line 53
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "backend"));
            foreach ($context['_seq'] as $context["_key"] => $context["backend"]) {
                // line 54
                echo "
\t\t<fieldset id=\"search_";
                // line 55
                if (isset($context["backend"])) { $_backend_ = $context["backend"]; } else { $_backend_ = null; }
                echo $this->getAttribute($_backend_, "IDENTIFIER");
                echo "_settings\">
\t\t\t<legend>";
                // line 56
                if (isset($context["backend"])) { $_backend_ = $context["backend"]; } else { $_backend_ = null; }
                echo $this->getAttribute($_backend_, "NAME");
                echo "</legend>
\t\t";
                // line 57
                if (isset($context["backend"])) { $_backend_ = $context["backend"]; } else { $_backend_ = null; }
                echo $this->getAttribute($_backend_, "SETTINGS");
                echo "
\t\t</fieldset>

\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 65
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 66
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } elseif ($_S_INDEX_) {
            // line 71
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\t/**
\t\t* Popup search progress bar
\t\t*/
\t\tfunction popup_progress_bar(progress_type)
\t\t{
\t\t\tclose_waitscreen = 0;
\t\t\t// no scrollbars
\t\t\tpopup('";
            // line 81
            if (isset($context["UA_PROGRESS_BAR"])) { $_UA_PROGRESS_BAR_ = $context["UA_PROGRESS_BAR"]; } else { $_UA_PROGRESS_BAR_ = null; }
            echo $_UA_PROGRESS_BAR_;
            echo "&amp;type=' + progress_type, 400, 240, '_index');
\t\t}
\t// ]]>
\t</script>

\t<h1>";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("ACP_SEARCH_INDEX");
            echo "</h1>

\t";
            // line 88
            if (isset($context["S_CONTINUE_INDEXING"])) { $_S_CONTINUE_INDEXING_ = $context["S_CONTINUE_INDEXING"]; } else { $_S_CONTINUE_INDEXING_ = null; }
            if ($_S_CONTINUE_INDEXING_) {
                // line 89
                echo "\t\t<p>";
                echo $this->env->getExtension('phpbb')->lang("CONTINUE_EXPLAIN");
                echo "</p>

\t\t<form id=\"acp_search_continue\" method=\"post\" action=\"";
                // line 91
                if (isset($context["U_CONTINUE_INDEXING"])) { $_U_CONTINUE_INDEXING_ = $context["U_CONTINUE_INDEXING"]; } else { $_U_CONTINUE_INDEXING_ = null; }
                echo $_U_CONTINUE_INDEXING_;
                echo "\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<legend>";
                // line 93
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "</legend>
\t\t\t\t<input class=\"button1\" type=\"submit\" id=\"continue\" name=\"continue\" value=\"";
                // line 94
                echo $this->env->getExtension('phpbb')->lang("CONTINUE");
                echo "\" onclick=\"popup_progress_bar('";
                if (isset($context["S_CONTINUE_INDEXING"])) { $_S_CONTINUE_INDEXING_ = $context["S_CONTINUE_INDEXING"]; } else { $_S_CONTINUE_INDEXING_ = null; }
                echo $_S_CONTINUE_INDEXING_;
                echo "');\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"submit\" id=\"cancel\" name=\"cancel\" value=\"";
                // line 95
                echo $this->env->getExtension('phpbb')->lang("CANCEL");
                echo "\" />
\t\t\t\t";
                // line 96
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t\t</fieldset>
\t\t</form>
\t";
            } else {
                // line 100
                echo "
\t\t<p>";
                // line 101
                echo $this->env->getExtension('phpbb')->lang("ACP_SEARCH_INDEX_EXPLAIN");
                echo "</p>

\t\t";
                // line 103
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "backend"));
                foreach ($context['_seq'] as $context["_key"] => $context["backend"]) {
                    // line 104
                    echo "
\t\t\t";
                    // line 105
                    if (isset($context["backend"])) { $_backend_ = $context["backend"]; } else { $_backend_ = null; }
                    if ($this->getAttribute($_backend_, "S_STATS")) {
                        // line 106
                        echo "
\t\t\t<form id=\"acp_search_index_";
                        // line 107
                        if (isset($context["backend"])) { $_backend_ = $context["backend"]; } else { $_backend_ = null; }
                        echo $this->getAttribute($_backend_, "NAME");
                        echo "\" method=\"post\" action=\"";
                        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
                        echo $_U_ACTION_;
                        echo "\">

\t\t\t\t<fieldset class=\"tabulated\">

\t\t\t\t";
                        // line 111
                        if (isset($context["backend"])) { $_backend_ = $context["backend"]; } else { $_backend_ = null; }
                        echo $this->getAttribute($_backend_, "S_HIDDEN_FIELDS");
                        echo "

\t\t\t\t<legend>";
                        // line 113
                        echo $this->env->getExtension('phpbb')->lang("INDEX_STATS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        if (isset($context["backend"])) { $_backend_ = $context["backend"]; } else { $_backend_ = null; }
                        echo $this->getAttribute($_backend_, "L_NAME");
                        echo " ";
                        if (isset($context["backend"])) { $_backend_ = $context["backend"]; } else { $_backend_ = null; }
                        if ($this->getAttribute($_backend_, "S_ACTIVE")) {
                            echo "(";
                            echo $this->env->getExtension('phpbb')->lang("ACTIVE");
                            echo ") ";
                        }
                        echo "</legend>

\t\t\t\t<table class=\"table1\">
\t\t\t\t\t<caption>";
                        // line 116
                        if (isset($context["backend"])) { $_backend_ = $context["backend"]; } else { $_backend_ = null; }
                        echo $this->getAttribute($_backend_, "L_NAME");
                        echo " ";
                        if (isset($context["backend"])) { $_backend_ = $context["backend"]; } else { $_backend_ = null; }
                        if ($this->getAttribute($_backend_, "S_ACTIVE")) {
                            echo "(";
                            echo $this->env->getExtension('phpbb')->lang("ACTIVE");
                            echo ") ";
                        }
                        echo "</caption>
\t\t\t\t\t<col class=\"col1\" /><col class=\"col2\" /><col class=\"col1\" /><col class=\"col2\" />
\t\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
                        // line 120
                        echo $this->env->getExtension('phpbb')->lang("STATISTIC");
                        echo "</th>
\t\t\t\t\t<th>";
                        // line 121
                        echo $this->env->getExtension('phpbb')->lang("VALUE");
                        echo "</th>
\t\t\t\t\t<th>";
                        // line 122
                        echo $this->env->getExtension('phpbb')->lang("STATISTIC");
                        echo "</th>
\t\t\t\t\t<th>";
                        // line 123
                        echo $this->env->getExtension('phpbb')->lang("VALUE");
                        echo "</th>
\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
                        // line 127
                        if (isset($context["backend"])) { $_backend_ = $context["backend"]; } else { $_backend_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_backend_, "data"));
                        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                            // line 128
                            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                            // line 129
                            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                            echo $this->getAttribute($_data_, "STATISTIC_1");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo "</td>
\t\t\t\t\t\t<td>";
                            // line 130
                            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                            echo $this->getAttribute($_data_, "VALUE_1");
                            echo "</td>
\t\t\t\t\t\t<td>";
                            // line 131
                            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                            echo $this->getAttribute($_data_, "STATISTIC_2");
                            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                            if ($this->getAttribute($_data_, "STATISTIC_2")) {
                                echo $this->env->getExtension('phpbb')->lang("COLON");
                            }
                            echo "</td>
\t\t\t\t\t\t<td>";
                            // line 132
                            if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                            echo $this->getAttribute($_data_, "VALUE_2");
                            echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 135
                        echo "\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t";
                    }
                    // line 139
                    echo "
\t\t\t<p class=\"quick\">
\t\t\t";
                    // line 141
                    if (isset($context["backend"])) { $_backend_ = $context["backend"]; } else { $_backend_ = null; }
                    if ($this->getAttribute($_backend_, "S_INDEXED")) {
                        // line 142
                        echo "\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"delete\" />
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                        // line 143
                        echo $this->env->getExtension('phpbb')->lang("DELETE_INDEX");
                        echo "\" onclick=\"popup_progress_bar('delete');\" />
\t\t\t";
                    } else {
                        // line 145
                        echo "\t\t\t\t<input type=\"hidden\" name=\"action\" value=\"create\" />
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                        // line 146
                        echo $this->env->getExtension('phpbb')->lang("CREATE_INDEX");
                        echo "\" onclick=\"popup_progress_bar('create');\" />
\t\t\t";
                    }
                    // line 148
                    echo "\t\t\t</p>
\t\t\t";
                    // line 149
                    if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                    echo $_S_FORM_TOKEN_;
                    echo "
\t\t\t</fieldset>

\t\t\t</form>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['backend'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "
\t";
            }
            // line 156
            echo "
";
        }
        // line 158
        echo "
";
        // line 159
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 159,  500 => 158,  496 => 156,  492 => 154,  480 => 149,  477 => 148,  472 => 146,  469 => 145,  464 => 143,  461 => 142,  458 => 141,  454 => 139,  448 => 135,  438 => 132,  429 => 131,  424 => 130,  418 => 129,  415 => 128,  410 => 127,  403 => 123,  399 => 122,  395 => 121,  391 => 120,  376 => 116,  359 => 113,  353 => 111,  342 => 107,  339 => 106,  336 => 105,  333 => 104,  328 => 103,  323 => 101,  320 => 100,  312 => 96,  308 => 95,  301 => 94,  297 => 93,  291 => 91,  285 => 89,  282 => 88,  277 => 86,  268 => 81,  256 => 71,  247 => 66,  243 => 65,  239 => 64,  235 => 63,  231 => 61,  220 => 57,  215 => 56,  210 => 55,  207 => 54,  202 => 53,  194 => 49,  187 => 48,  182 => 46,  171 => 41,  164 => 40,  157 => 37,  150 => 36,  143 => 33,  136 => 32,  129 => 29,  122 => 28,  113 => 25,  106 => 24,  97 => 21,  90 => 20,  79 => 17,  70 => 16,  63 => 15,  58 => 13,  51 => 10,  46 => 8,  40 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
