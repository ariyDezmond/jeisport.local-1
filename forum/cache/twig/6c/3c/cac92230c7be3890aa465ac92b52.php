<?php

/* acp_styles.html */
class __TwigTemplate_6c3ccac92230c7be3890aa465ac92b52 extends Twig_Template
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
        if (isset($context["S_STYLE_DETAILS"])) { $_S_STYLE_DETAILS_ = $context["S_STYLE_DETAILS"]; } else { $_S_STYLE_DETAILS_ = null; }
        if ($_S_STYLE_DETAILS_) {
            // line 6
            echo "\t<a href=\"";
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>
";
        }
        // line 8
        echo "
";
        // line 9
        if (isset($context["S_CONFIRM_ACTION"])) { $_S_CONFIRM_ACTION_ = $context["S_CONFIRM_ACTION"]; } else { $_S_CONFIRM_ACTION_ = null; }
        if ($_S_CONFIRM_ACTION_) {
            // line 10
            echo "<form id=\"confirm\" method=\"post\" action=\"";
            if (isset($context["S_CONFIRM_ACTION"])) { $_S_CONFIRM_ACTION_ = $context["S_CONFIRM_ACTION"]; } else { $_S_CONFIRM_ACTION_ = null; }
            echo $_S_CONFIRM_ACTION_;
            echo "\">

<fieldset>
\t<h1>";
            // line 13
            if (isset($context["MESSAGE_TITLE"])) { $_MESSAGE_TITLE_ = $context["MESSAGE_TITLE"]; } else { $_MESSAGE_TITLE_ = null; }
            echo $_MESSAGE_TITLE_;
            echo "</h1>
\t<p>";
            // line 14
            if (isset($context["MESSAGE_TEXT"])) { $_MESSAGE_TEXT_ = $context["MESSAGE_TEXT"]; } else { $_MESSAGE_TEXT_ = null; }
            echo $_MESSAGE_TEXT_;
            echo "</p>
\t";
            // line 15
            if (isset($context["S_CONFIRM_DELETE"])) { $_S_CONFIRM_DELETE_ = $context["S_CONFIRM_DELETE"]; } else { $_S_CONFIRM_DELETE_ = null; }
            if ($_S_CONFIRM_DELETE_) {
                // line 16
                echo "\t<label><input type=\"checkbox\" class=\"checkbox\" name=\"confirm_delete_files\" /> ";
                echo $this->env->getExtension('phpbb')->lang("DELETE_FROM_FS");
                echo "</label>
\t";
            }
            // line 18
            echo "
\t";
            // line 19
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "

\t<div style=\"text-align: center;\">
\t\t<input type=\"submit\" name=\"confirm\" value=\"";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"button2\" />&nbsp; 
\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"button2\" />
\t</div>

</fieldset>

</form>
";
        } else {
            // line 30
            echo "
";
            // line 31
            if (isset($context["L_TITLE"])) { $_L_TITLE_ = $context["L_TITLE"]; } else { $_L_TITLE_ = null; }
            if ($_L_TITLE_) {
                echo "<h1>";
                echo $this->env->getExtension('phpbb')->lang("TITLE");
                echo "</h1>";
            }
            // line 32
            echo "
";
            // line 33
            if (isset($context["L_EXPLAIN"])) { $_L_EXPLAIN_ = $context["L_EXPLAIN"]; } else { $_L_EXPLAIN_ = null; }
            if ($_L_EXPLAIN_) {
                echo "<p>";
                echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
                echo "</p>";
            }
            // line 34
            echo "
<form id=\"acp_styles\" method=\"post\" action=\"";
            // line 35
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">
";
            // line 36
            if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
            echo $_S_HIDDEN_FIELDS_;
            echo "
";
            // line 37
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "

";
            // line 39
            if (isset($context["S_STYLE_DETAILS"])) { $_S_STYLE_DETAILS_ = $context["S_STYLE_DETAILS"]; } else { $_S_STYLE_DETAILS_ = null; }
            if ($_S_STYLE_DETAILS_) {
                // line 40
                echo "\t<input type=\"hidden\" name=\"id\" value=\"";
                if (isset($context["STYLE_ID"])) { $_STYLE_ID_ = $context["STYLE_ID"]; } else { $_STYLE_ID_ = null; }
                echo $_STYLE_ID_;
                echo "\" />
\t<fieldset>
\t<dl>
\t\t<dt><label for=\"name\">";
                // line 43
                echo $this->env->getExtension('phpbb')->lang("STYLE_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"name\" name=\"style_name\" value=\"";
                // line 44
                if (isset($context["STYLE_NAME"])) { $_STYLE_NAME_ = $context["STYLE_NAME"]; } else { $_STYLE_NAME_ = null; }
                echo $_STYLE_NAME_;
                echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
                // line 47
                echo $this->env->getExtension('phpbb')->lang("STYLE_PATH");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><strong>";
                // line 48
                if (isset($context["STYLE_PATH"])) { $_STYLE_PATH_ = $context["STYLE_PATH"]; } else { $_STYLE_PATH_ = null; }
                echo $_STYLE_PATH_;
                echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"name\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("COPYRIGHT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><strong>";
                // line 52
                if (isset($context["STYLE_COPYRIGHT"])) { $_STYLE_COPYRIGHT_ = $context["STYLE_COPYRIGHT"]; } else { $_STYLE_COPYRIGHT_ = null; }
                echo $_STYLE_COPYRIGHT_;
                echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"style_parent\">";
                // line 55
                echo $this->env->getExtension('phpbb')->lang("INHERITING_FROM");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><select id=\"style_parent\" name=\"style_parent\">
\t\t\t<option value=\"\"";
                // line 57
                if (isset($context["STYLE_PARENT"])) { $_STYLE_PARENT_ = $context["STYLE_PARENT"]; } else { $_STYLE_PARENT_ = null; }
                if (($_STYLE_PARENT_ == 0)) {
                    echo " selected=\"selected\"";
                }
                echo "> - </option>
\t\t\t";
                // line 58
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "parent_styles"));
                foreach ($context['_seq'] as $context["_key"] => $context["parent_styles"]) {
                    // line 59
                    echo "\t\t\t\t<option value=\"";
                    if (isset($context["parent_styles"])) { $_parent_styles_ = $context["parent_styles"]; } else { $_parent_styles_ = null; }
                    echo $this->getAttribute($_parent_styles_, "STYLE_ID");
                    echo "\"";
                    if (isset($context["parent_styles"])) { $_parent_styles_ = $context["parent_styles"]; } else { $_parent_styles_ = null; }
                    if (isset($context["STYLE_PARENT"])) { $_STYLE_PARENT_ = $context["STYLE_PARENT"]; } else { $_STYLE_PARENT_ = null; }
                    if (($this->getAttribute($_parent_styles_, "STYLE_ID") == $_STYLE_PARENT_)) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    if (isset($context["parent_styles"])) { $_parent_styles_ = $context["parent_styles"]; } else { $_parent_styles_ = null; }
                    echo $this->getAttribute($_parent_styles_, "SPACER");
                    if (isset($context["parent_styles"])) { $_parent_styles_ = $context["parent_styles"]; } else { $_parent_styles_ = null; }
                    echo $this->getAttribute($_parent_styles_, "STYLE_NAME");
                    echo "</option>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parent_styles'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "\t\t</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"style_active\">";
                // line 64
                echo $this->env->getExtension('phpbb')->lang("STYLE_ACTIVE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"style_active\" value=\"1\"";
                // line 65
                if (isset($context["S_STYLE_ACTIVE"])) { $_S_STYLE_ACTIVE_ = $context["S_STYLE_ACTIVE"]; } else { $_S_STYLE_ACTIVE_ = null; }
                if ($_S_STYLE_ACTIVE_) {
                    echo " id=\"style_active\" checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("YES");
                echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"style_active\" value=\"0\"";
                // line 66
                if (isset($context["S_STYLE_ACTIVE"])) { $_S_STYLE_ACTIVE_ = $context["S_STYLE_ACTIVE"]; } else { $_S_STYLE_ACTIVE_ = null; }
                if ((!$_S_STYLE_ACTIVE_)) {
                    echo " id=\"style_active\" checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("NO");
                echo "</label></dd>
\t</dl>
\t";
                // line 68
                if (isset($context["S_STYLE_DEFAULT"])) { $_S_STYLE_DEFAULT_ = $context["S_STYLE_DEFAULT"]; } else { $_S_STYLE_DEFAULT_ = null; }
                if ((!$_S_STYLE_DEFAULT_)) {
                    // line 69
                    echo "\t\t<dl>
\t\t\t<dt><label for=\"style_default\">";
                    // line 70
                    echo $this->env->getExtension('phpbb')->lang("STYLE_DEFAULT");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"style_default\" value=\"1\" /> ";
                    // line 71
                    echo $this->env->getExtension('phpbb')->lang("YES");
                    echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" id=\"style_default\" name=\"style_default\" value=\"0\" checked=\"checked\" /> ";
                    // line 72
                    echo $this->env->getExtension('phpbb')->lang("NO");
                    echo "</label></dd>
\t\t</dl>
\t";
                }
                // line 75
                echo "\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
                // line 78
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
                // line 79
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 80
                echo $this->env->getExtension('phpbb')->lang("RESET");
                echo "\" />
\t\t";
                // line 81
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t</fieldset>
";
            }
            // line 84
            echo "
";
            // line 85
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "styles_list"))) {
                // line 86
                echo "\t<table class=\"table1 styles\">
\t<thead>
\t<tr>
\t\t<th>";
                // line 89
                echo $this->env->getExtension('phpbb')->lang("STYLE_NAME");
                echo "</th>
\t\t";
                // line 90
                if (isset($context["STYLES_LIST_HIDE_COUNT"])) { $_STYLES_LIST_HIDE_COUNT_ = $context["STYLES_LIST_HIDE_COUNT"]; } else { $_STYLES_LIST_HIDE_COUNT_ = null; }
                if ((!$_STYLES_LIST_HIDE_COUNT_)) {
                    echo "<th width=\"10%\" style=\"white-space: nowrap; text-align: center;\">";
                    echo $this->env->getExtension('phpbb')->lang("STYLE_USED_BY");
                    echo "</th>";
                }
                // line 91
                echo "\t\t<th width=\"25%\" style=\"white-space: nowrap; text-align: center;\">";
                echo $this->env->getExtension('phpbb')->lang("ACTIONS");
                echo "</th>
\t\t";
                // line 92
                if (isset($context["STYLES_LIST_EXTRA"])) { $_STYLES_LIST_EXTRA_ = $context["STYLES_LIST_EXTRA"]; } else { $_STYLES_LIST_EXTRA_ = null; }
                echo $_STYLES_LIST_EXTRA_;
                echo "
\t\t<th>&nbsp;</th>
\t</tr>
\t</thead>
\t";
                // line 96
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "styles_list"));
                foreach ($context['_seq'] as $context["_key"] => $context["styles_list"]) {
                    // line 97
                    echo "\t<tbody id=\"styles-list-";
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    echo $this->getAttribute($_styles_list_, "S_ROW_COUNT");
                    echo "\">
\t<tr";
                    // line 98
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if (($this->getAttribute($_styles_list_, "STYLE_ID") && (!$this->getAttribute($_styles_list_, "STYLE_ACTIVE")))) {
                        echo " class=\"row-inactive\"";
                    }
                    echo ">
\t\t";
                    // line 99
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if (($this->getAttribute($_styles_list_, "LEVEL") % 2 == 1)) {
                        // line 100
                        echo "\t\t\t";
                        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                        if (($this->getAttribute($_definition_, "ROW_CLASS") == "row1a")) {
                            if (isset($context["ROW_CLASS"])) { $_ROW_CLASS_ = $context["ROW_CLASS"]; } else { $_ROW_CLASS_ = null; }
                            $value = "row1b";
                            $context['definition']->set('ROW_CLASS', $value);
                        } else {
                            if (isset($context["ROW_CLASS"])) { $_ROW_CLASS_ = $context["ROW_CLASS"]; } else { $_ROW_CLASS_ = null; }
                            $value = "row1a";
                            $context['definition']->set('ROW_CLASS', $value);
                        }
                        // line 101
                        echo "\t\t";
                    } else {
                        // line 102
                        echo "\t\t\t";
                        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                        if (($this->getAttribute($_definition_, "ROW_CLASS") == "row2a")) {
                            if (isset($context["ROW_CLASS"])) { $_ROW_CLASS_ = $context["ROW_CLASS"]; } else { $_ROW_CLASS_ = null; }
                            $value = "row2b";
                            $context['definition']->set('ROW_CLASS', $value);
                        } else {
                            if (isset($context["ROW_CLASS"])) { $_ROW_CLASS_ = $context["ROW_CLASS"]; } else { $_ROW_CLASS_ = null; }
                            $value = "row2a";
                            $context['definition']->set('ROW_CLASS', $value);
                        }
                        // line 103
                        echo "\t\t";
                    }
                    // line 104
                    echo "\t\t<td class=\"";
                    if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                    echo $this->getAttribute($_definition_, "ROW_CLASS");
                    echo "\" style=\"padding-";
                    if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
                    echo $_S_CONTENT_FLOW_BEGIN_;
                    echo ": ";
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    echo $this->getAttribute($_styles_list_, "PADDING");
                    echo "px;\">
\t\t\t";
                    // line 105
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if ((($this->getAttribute($_styles_list_, "STYLE_ID") && ($this->getAttribute($_styles_list_, "COMMENT") == "")) && $this->getAttribute($_styles_list_, "STYLE_ACTIVE"))) {
                        // line 106
                        echo "\t\t\t\t<div class=\"default-style\" style=\"display: none; float: ";
                        if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                        echo $_S_CONTENT_FLOW_END_;
                        echo ";\">
\t\t\t\t\t<input class=\"radio\" type=\"radio\" name=\"default\" value=\"";
                        // line 107
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "STYLE_ID");
                        echo "\"";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        if ($this->getAttribute($_styles_list_, "DEFAULT")) {
                            echo " checked=\"checked\"";
                        } else {
                            if (isset($context["S_DEFAULT"])) { $_S_DEFAULT_ = $context["S_DEFAULT"]; } else { $_S_DEFAULT_ = null; }
                            $value = 1;
                            $context['definition']->set('S_DEFAULT', $value);
                        }
                        echo " title=\"";
                        echo $this->env->getExtension('phpbb')->lang("STYLE_DEFAULT");
                        echo "\" />
\t\t\t\t</div>
\t\t\t";
                    }
                    // line 110
                    echo "\t\t\t";
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if (($this->getAttribute($_styles_list_, "DEFAULT") || $this->getAttribute($_styles_list_, "SHOW_COPYRIGHT"))) {
                        // line 111
                        echo "\t\t\t\t<strong>";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "STYLE_NAME");
                        echo "</strong>
\t\t\t\t";
                        // line 112
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        if (($this->getAttribute($_styles_list_, "SHOW_COPYRIGHT") && ($this->getAttribute($_styles_list_, "COMMENT") == ""))) {
                            echo "<span><br />";
                            if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                            echo $this->getAttribute($_styles_list_, "STYLE_COPYRIGHT");
                            echo "</span>";
                        }
                        // line 113
                        echo "\t\t\t";
                    } else {
                        // line 114
                        echo "\t\t\t\t<span>";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "STYLE_NAME");
                        echo "</span>
\t\t\t";
                    }
                    // line 116
                    echo "\t\t\t";
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if (($this->getAttribute($_styles_list_, "COMMENT") != "")) {
                        // line 117
                        echo "\t\t\t\t<span class=\"error\"><br />";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "COMMENT");
                        echo "</span>
\t\t\t";
                    }
                    // line 119
                    echo "\t\t\t";
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if (((!$this->getAttribute($_styles_list_, "STYLE_ID")) && ($this->getAttribute($_styles_list_, "COMMENT") == ""))) {
                        // line 120
                        echo "\t\t\t\t<span class=\"style-path\"><br />";
                        echo $this->env->getExtension('phpbb')->lang("STYLE_PATH");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "STYLE_PATH_FULL");
                        echo "</span>
\t\t\t";
                    }
                    // line 122
                    echo "\t\t</td>
\t\t";
                    // line 123
                    if (isset($context["STYLES_LIST_HIDE_COUNT"])) { $_STYLES_LIST_HIDE_COUNT_ = $context["STYLES_LIST_HIDE_COUNT"]; } else { $_STYLES_LIST_HIDE_COUNT_ = null; }
                    if ((!$_STYLES_LIST_HIDE_COUNT_)) {
                        // line 124
                        echo "\t\t\t<td class=\"";
                        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                        echo $this->getAttribute($_definition_, "ROW_CLASS");
                        echo " users\">";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "USERS");
                        echo "</td>
\t\t";
                    }
                    // line 126
                    echo "\t\t<td class=\"";
                    if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                    echo $this->getAttribute($_definition_, "ROW_CLASS");
                    echo " actions\">
\t\t\t";
                    // line 127
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_styles_list_, "actions"));
                    foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
                        // line 128
                        echo "\t\t\t\t";
                        if (isset($context["actions"])) { $_actions_ = $context["actions"]; } else { $_actions_ = null; }
                        if (($this->getAttribute($_actions_, "S_ROW_COUNT") > 0)) {
                            echo " | ";
                        }
                        // line 129
                        echo "\t\t\t\t";
                        if (isset($context["actions"])) { $_actions_ = $context["actions"]; } else { $_actions_ = null; }
                        if ($this->getAttribute($_actions_, "U_ACTION")) {
                            // line 130
                            echo "\t\t\t\t\t<a href=\"";
                            if (isset($context["actions"])) { $_actions_ = $context["actions"]; } else { $_actions_ = null; }
                            echo $this->getAttribute($_actions_, "U_ACTION");
                            echo "\"";
                            if (isset($context["actions"])) { $_actions_ = $context["actions"]; } else { $_actions_ = null; }
                            echo $this->getAttribute($_actions_, "U_ACTION_ATTR");
                            echo ">";
                            if (isset($context["actions"])) { $_actions_ = $context["actions"]; } else { $_actions_ = null; }
                            echo $this->getAttribute($_actions_, "L_ACTION");
                            echo "</a>
\t\t\t\t";
                        }
                        // line 132
                        echo "\t\t\t\t";
                        if (isset($context["actions"])) { $_actions_ = $context["actions"]; } else { $_actions_ = null; }
                        echo $this->getAttribute($_actions_, "HTML");
                        echo "
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 134
                    echo "\t\t</td>
\t\t";
                    // line 135
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    echo $this->getAttribute($_styles_list_, "EXTRA");
                    echo "
\t\t<td class=\"";
                    // line 136
                    if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                    echo $this->getAttribute($_definition_, "ROW_CLASS");
                    echo " mark\" width=\"20\">
\t\t\t";
                    // line 137
                    if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                    if ($this->getAttribute($_styles_list_, "STYLE_ID")) {
                        // line 138
                        echo "\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" name=\"ids[]\" value=\"";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        echo $this->getAttribute($_styles_list_, "STYLE_ID");
                        echo "\" />
\t\t\t";
                    } else {
                        // line 140
                        echo "\t\t\t\t";
                        if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                        if (($this->getAttribute($_styles_list_, "COMMENT") != "")) {
                            // line 141
                            echo "\t\t\t\t\t&nbsp;
\t\t\t\t";
                        } else {
                            // line 143
                            echo "\t\t\t\t\t<input class=\"checkbox\" type=\"checkbox\" name=\"dirs[]\" value=\"";
                            if (isset($context["styles_list"])) { $_styles_list_ = $context["styles_list"]; } else { $_styles_list_ = null; }
                            echo $this->getAttribute($_styles_list_, "STYLE_PATH");
                            echo "\" />
\t\t\t\t";
                        }
                        // line 145
                        echo "\t\t\t";
                    }
                    // line 146
                    echo "\t\t</td>
\t</tr>
\t</tbody>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['styles_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "\t</table>
";
            }
            // line 152
            echo "
";
            // line 153
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "extra_actions"))) {
                // line 154
                echo "\t<fieldset class=\"quick\">
\t\t";
                // line 155
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "extra_actions"));
                foreach ($context['_seq'] as $context["_key"] => $context["extra_actions"]) {
                    // line 156
                    echo "\t\t\t<input type=\"submit\" name=\"";
                    if (isset($context["extra_actions"])) { $_extra_actions_ = $context["extra_actions"]; } else { $_extra_actions_ = null; }
                    echo $this->getAttribute($_extra_actions_, "ACTION_NAME");
                    echo "\" class=\"button2\" value=\"";
                    if (isset($context["extra_actions"])) { $_extra_actions_ = $context["extra_actions"]; } else { $_extra_actions_ = null; }
                    echo $this->getAttribute($_extra_actions_, "L_ACTION");
                    echo "\" />
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extra_actions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "\t</fieldset>
";
            }
            // line 160
            echo "
</form>

";
        }
        // line 164
        echo "
";
        // line 165
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
        return "acp_styles.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  639 => 165,  636 => 164,  630 => 160,  626 => 158,  613 => 156,  608 => 155,  605 => 154,  602 => 153,  599 => 152,  595 => 150,  586 => 146,  583 => 145,  576 => 143,  572 => 141,  568 => 140,  561 => 138,  558 => 137,  553 => 136,  548 => 135,  545 => 134,  535 => 132,  522 => 130,  518 => 129,  512 => 128,  507 => 127,  501 => 126,  491 => 124,  488 => 123,  485 => 122,  475 => 120,  471 => 119,  464 => 117,  460 => 116,  453 => 114,  450 => 113,  442 => 112,  436 => 111,  432 => 110,  414 => 107,  408 => 106,  405 => 105,  393 => 104,  390 => 103,  378 => 102,  375 => 101,  363 => 100,  360 => 99,  353 => 98,  347 => 97,  342 => 96,  334 => 92,  329 => 91,  322 => 90,  318 => 89,  313 => 86,  310 => 85,  307 => 84,  300 => 81,  296 => 80,  292 => 79,  288 => 78,  283 => 75,  277 => 72,  273 => 71,  268 => 70,  265 => 69,  262 => 68,  252 => 66,  243 => 65,  238 => 64,  233 => 61,  212 => 59,  207 => 58,  200 => 57,  194 => 55,  187 => 52,  182 => 51,  175 => 48,  170 => 47,  163 => 44,  158 => 43,  150 => 40,  147 => 39,  141 => 37,  136 => 36,  131 => 35,  128 => 34,  121 => 33,  118 => 32,  111 => 31,  108 => 30,  98 => 23,  94 => 22,  87 => 19,  84 => 18,  78 => 16,  75 => 15,  70 => 14,  65 => 13,  57 => 10,  54 => 9,  51 => 8,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
