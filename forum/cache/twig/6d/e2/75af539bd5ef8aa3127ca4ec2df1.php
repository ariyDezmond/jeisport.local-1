<?php

/* acp_groups.html */
class __TwigTemplate_6de275af539bd5ef8aa3127ca4ec2df1 extends Twig_Template
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
        if (isset($context["S_EDIT"])) { $_S_EDIT_ = $context["S_EDIT"]; } else { $_S_EDIT_ = null; }
        if (isset($context["S_LIST"])) { $_S_LIST_ = $context["S_LIST"]; } else { $_S_LIST_ = null; }
        if ($_S_EDIT_) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("ACP_GROUPS_MANAGE");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("GROUP_EDIT_EXPLAIN");
            echo "</p>

\t";
            // line 13
            if (isset($context["S_ERROR"])) { $_S_ERROR_ = $context["S_ERROR"]; } else { $_S_ERROR_ = null; }
            if ($_S_ERROR_) {
                // line 14
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 15
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 16
                if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
                echo $_ERROR_MSG_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 19
            echo "
\t<form id=\"settings\" method=\"post\" action=\"";
            // line 20
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\" enctype=\"multipart/form-data\">

\t<fieldset>
\t\t<legend>";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("GROUP_DETAILS");
            echo "</legend>
\t<dl>
\t\t<dt><label";
            // line 25
            if (isset($context["S_SPECIAL_GROUP"])) { $_S_SPECIAL_GROUP_ = $context["S_SPECIAL_GROUP"]; } else { $_S_SPECIAL_GROUP_ = null; }
            if ((!$_S_SPECIAL_GROUP_)) {
                echo " for=\"group_name\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("GROUP_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>";
            // line 26
            if (isset($context["S_SPECIAL_GROUP"])) { $_S_SPECIAL_GROUP_ = $context["S_SPECIAL_GROUP"]; } else { $_S_SPECIAL_GROUP_ = null; }
            if ($_S_SPECIAL_GROUP_) {
                echo "<strong>";
                if (isset($context["GROUP_NAME"])) { $_GROUP_NAME_ = $context["GROUP_NAME"]; } else { $_GROUP_NAME_ = null; }
                echo $_GROUP_NAME_;
                echo "</strong>";
            }
            echo "<input name=\"group_name\" type=\"";
            if (isset($context["S_SPECIAL_GROUP"])) { $_S_SPECIAL_GROUP_ = $context["S_SPECIAL_GROUP"]; } else { $_S_SPECIAL_GROUP_ = null; }
            if ($_S_SPECIAL_GROUP_) {
                echo "hidden";
            } else {
                echo "text";
            }
            echo "\" id=\"group_name\" value=\"";
            if (isset($context["GROUP_INTERNAL_NAME"])) { $_GROUP_INTERNAL_NAME_ = $context["GROUP_INTERNAL_NAME"]; } else { $_GROUP_INTERNAL_NAME_ = null; }
            echo $_GROUP_INTERNAL_NAME_;
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_desc\">";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("GROUP_DESC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea id=\"group_desc\" name=\"group_desc\" rows=\"5\" cols=\"45\">";
            // line 30
            if (isset($context["GROUP_DESC"])) { $_GROUP_DESC_ = $context["GROUP_DESC"]; } else { $_GROUP_DESC_ = null; }
            echo $_GROUP_DESC_;
            echo "</textarea></dd>
\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_bbcode\"";
            // line 31
            if (isset($context["S_DESC_BBCODE_CHECKED"])) { $_S_DESC_BBCODE_CHECKED_ = $context["S_DESC_BBCODE_CHECKED"]; } else { $_S_DESC_BBCODE_CHECKED_ = null; }
            if ($_S_DESC_BBCODE_CHECKED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_smilies\"";
            // line 32
            if (isset($context["S_DESC_SMILIES_CHECKED"])) { $_S_DESC_SMILIES_CHECKED_ = $context["S_DESC_SMILIES_CHECKED"]; } else { $_S_DESC_SMILIES_CHECKED_ = null; }
            if ($_S_DESC_SMILIES_CHECKED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_urls\"";
            // line 33
            if (isset($context["S_DESC_URLS_CHECKED"])) { $_S_DESC_URLS_CHECKED_ = $context["S_DESC_URLS_CHECKED"]; } else { $_S_DESC_URLS_CHECKED_ = null; }
            if ($_S_DESC_URLS_CHECKED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_URLS");
            echo "</label></dd>
\t</dl>
\t";
            // line 35
            if (isset($context["S_SPECIAL_GROUP"])) { $_S_SPECIAL_GROUP_ = $context["S_SPECIAL_GROUP"]; } else { $_S_SPECIAL_GROUP_ = null; }
            if ((!$_S_SPECIAL_GROUP_)) {
                // line 36
                echo "\t\t<dl>
\t\t\t<dt><label for=\"group_type\">";
                // line 37
                echo $this->env->getExtension('phpbb')->lang("GROUP_TYPE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("GROUP_TYPE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label><input name=\"group_type\" type=\"radio\" class=\"radio\" id=\"group_type\" value=\"";
                // line 39
                if (isset($context["GROUP_TYPE_FREE"])) { $_GROUP_TYPE_FREE_ = $context["GROUP_TYPE_FREE"]; } else { $_GROUP_TYPE_FREE_ = null; }
                echo $_GROUP_TYPE_FREE_;
                echo "\"";
                if (isset($context["GROUP_FREE"])) { $_GROUP_FREE_ = $context["GROUP_FREE"]; } else { $_GROUP_FREE_ = null; }
                echo $_GROUP_FREE_;
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("GROUP_OPEN");
                echo "</label>
\t\t\t\t<label><input name=\"group_type\" type=\"radio\" class=\"radio\" value=\"";
                // line 40
                if (isset($context["GROUP_TYPE_OPEN"])) { $_GROUP_TYPE_OPEN_ = $context["GROUP_TYPE_OPEN"]; } else { $_GROUP_TYPE_OPEN_ = null; }
                echo $_GROUP_TYPE_OPEN_;
                echo "\"";
                if (isset($context["GROUP_OPEN"])) { $_GROUP_OPEN_ = $context["GROUP_OPEN"]; } else { $_GROUP_OPEN_ = null; }
                echo $_GROUP_OPEN_;
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("GROUP_REQUEST");
                echo "</label>
\t\t\t\t<label><input name=\"group_type\" type=\"radio\" class=\"radio\" value=\"";
                // line 41
                if (isset($context["GROUP_TYPE_CLOSED"])) { $_GROUP_TYPE_CLOSED_ = $context["GROUP_TYPE_CLOSED"]; } else { $_GROUP_TYPE_CLOSED_ = null; }
                echo $_GROUP_TYPE_CLOSED_;
                echo "\"";
                if (isset($context["GROUP_CLOSED"])) { $_GROUP_CLOSED_ = $context["GROUP_CLOSED"]; } else { $_GROUP_CLOSED_ = null; }
                echo $_GROUP_CLOSED_;
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("GROUP_CLOSED");
                echo "</label>
\t\t\t\t<label><input name=\"group_type\" type=\"radio\" class=\"radio\" value=\"";
                // line 42
                if (isset($context["GROUP_TYPE_HIDDEN"])) { $_GROUP_TYPE_HIDDEN_ = $context["GROUP_TYPE_HIDDEN"]; } else { $_GROUP_TYPE_HIDDEN_ = null; }
                echo $_GROUP_TYPE_HIDDEN_;
                echo "\"";
                if (isset($context["GROUP_HIDDEN"])) { $_GROUP_HIDDEN_ = $context["GROUP_HIDDEN"]; } else { $_GROUP_HIDDEN_ = null; }
                echo $_GROUP_HIDDEN_;
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("GROUP_HIDDEN");
                echo "</label>
\t\t\t</dd>
\t\t</dl>
\t";
            } else {
                // line 46
                echo "\t\t<input name=\"group_type\" type=\"hidden\" value=\"";
                if (isset($context["GROUP_TYPE_SPECIAL"])) { $_GROUP_TYPE_SPECIAL_ = $context["GROUP_TYPE_SPECIAL"]; } else { $_GROUP_TYPE_SPECIAL_ = null; }
                echo $_GROUP_TYPE_SPECIAL_;
                echo "\" />
\t";
            }
            // line 48
            echo "
\t";
            // line 49
            if (isset($context["S_ADD_GROUP"])) { $_S_ADD_GROUP_ = $context["S_ADD_GROUP"]; } else { $_S_ADD_GROUP_ = null; }
            if (isset($context["S_GROUP_PERM"])) { $_S_GROUP_PERM_ = $context["S_GROUP_PERM"]; } else { $_S_GROUP_PERM_ = null; }
            if (($_S_ADD_GROUP_ && $_S_GROUP_PERM_)) {
                // line 50
                echo "\t\t<dl>
\t\t\t<dt><label for=\"group_perm_from\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><select id=\"group_perm_from\" name=\"group_perm_from\"><option value=\"0\">";
                // line 52
                echo $this->env->getExtension('phpbb')->lang("NO_PERMISSIONS");
                echo "</option>";
                if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
                echo $_S_GROUP_OPTIONS_;
                echo "</select></dd>
\t\t</dl>
\t";
            }
            // line 55
            echo "\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("GROUP_OPTIONS_SAVE");
            echo "</legend>
\t";
            // line 59
            if (isset($context["acp_group_options_before"])) { $_acp_group_options_before_ = $context["acp_group_options_before"]; } else { $_acp_group_options_before_ = null; }
            // line 60
            echo "\t";
            if (isset($context["S_USER_FOUNDER"])) { $_S_USER_FOUNDER_ = $context["S_USER_FOUNDER"]; } else { $_S_USER_FOUNDER_ = null; }
            if ($_S_USER_FOUNDER_) {
                // line 61
                echo "\t<dl>
\t\t<dt><label for=\"group_founder_manage\">";
                // line 62
                echo $this->env->getExtension('phpbb')->lang("GROUP_FOUNDER_MANAGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("GROUP_FOUNDER_MANAGE_EXPLAIN");
                echo "</span></dt>
\t\t<dd><input name=\"group_founder_manage\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_founder_manage\"";
                // line 63
                if (isset($context["GROUP_FOUNDER_MANAGE"])) { $_GROUP_FOUNDER_MANAGE_ = $context["GROUP_FOUNDER_MANAGE"]; } else { $_GROUP_FOUNDER_MANAGE_ = null; }
                echo $_GROUP_FOUNDER_MANAGE_;
                echo " /></dd>
\t</dl>
\t";
            }
            // line 66
            echo "\t<dl>
\t\t<dt><label for=\"group_skip_auth\">";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("GROUP_SKIP_AUTH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("GROUP_SKIP_AUTH_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"group_skip_auth\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_skip_auth\"";
            // line 68
            if (isset($context["GROUP_SKIP_AUTH"])) { $_GROUP_SKIP_AUTH_ = $context["GROUP_SKIP_AUTH"]; } else { $_GROUP_SKIP_AUTH_ = null; }
            echo $_GROUP_SKIP_AUTH_;
            echo " /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_legend\">";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("GROUP_LEGEND");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"group_legend\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_legend\"";
            // line 72
            if (isset($context["GROUP_LEGEND"])) { $_GROUP_LEGEND_ = $context["GROUP_LEGEND"]; } else { $_GROUP_LEGEND_ = null; }
            echo $_GROUP_LEGEND_;
            echo " /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_teampage\">";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("GROUP_TEAMPAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"group_teampage\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_teampage\"";
            // line 76
            if (isset($context["GROUP_TEAMPAGE"])) { $_GROUP_TEAMPAGE_ = $context["GROUP_TEAMPAGE"]; } else { $_GROUP_TEAMPAGE_ = null; }
            echo $_GROUP_TEAMPAGE_;
            echo " /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_receive_pm\">";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("GROUP_RECEIVE_PM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("GROUP_RECEIVE_PM_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"group_receive_pm\" type=\"checkbox\" value=\"1\" class=\"radio\" id=\"group_receive_pm\"";
            // line 80
            if (isset($context["GROUP_RECEIVE_PM"])) { $_GROUP_RECEIVE_PM_ = $context["GROUP_RECEIVE_PM"]; } else { $_GROUP_RECEIVE_PM_ = null; }
            echo $_GROUP_RECEIVE_PM_;
            echo " /></dd>
\t</dl>
\t";
            // line 82
            if (isset($context["acp_group_options_after"])) { $_acp_group_options_after_ = $context["acp_group_options_after"]; } else { $_acp_group_options_after_ = null; }
            // line 83
            echo "\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("GROUP_SETTINGS_SAVE");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"group_message_limit\">";
            // line 88
            echo $this->env->getExtension('phpbb')->lang("GROUP_MESSAGE_LIMIT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("GROUP_MESSAGE_LIMIT_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"group_message_limit\" type=\"number\" id=\"group_message_limit\" maxlength=\"4\" size=\"4\" min=\"0\" max=\"9999\" value=\"";
            // line 89
            if (isset($context["GROUP_MESSAGE_LIMIT"])) { $_GROUP_MESSAGE_LIMIT_ = $context["GROUP_MESSAGE_LIMIT"]; } else { $_GROUP_MESSAGE_LIMIT_ = null; }
            echo $_GROUP_MESSAGE_LIMIT_;
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_max_recipients\">";
            // line 92
            echo $this->env->getExtension('phpbb')->lang("GROUP_MAX_RECIPIENTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("GROUP_MAX_RECIPIENTS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"group_max_recipients\" type=\"number\" id=\"group_max_recipients\" maxlength=\"10\" size=\"4\" value=\"";
            // line 93
            if (isset($context["GROUP_MAX_RECIPIENTS"])) { $_GROUP_MAX_RECIPIENTS_ = $context["GROUP_MAX_RECIPIENTS"]; } else { $_GROUP_MAX_RECIPIENTS_ = null; }
            echo $_GROUP_MAX_RECIPIENTS_;
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_colour\">";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("GROUP_COLOR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("GROUP_COLOR_EXPLAIN");
            echo "</span></dt>
\t\t<dd>
\t\t\t<input name=\"group_colour\" type=\"text\" id=\"group_colour\" value=\"";
            // line 98
            if (isset($context["GROUP_COLOUR"])) { $_GROUP_COLOUR_ = $context["GROUP_COLOUR"]; } else { $_GROUP_COLOUR_ = null; }
            echo $_GROUP_COLOUR_;
            echo "\" size=\"6\" maxlength=\"6\" />
\t\t\t";
            // line 99
            if (isset($context["GROUP_COLOUR"])) { $_GROUP_COLOUR_ = $context["GROUP_COLOUR"]; } else { $_GROUP_COLOUR_ = null; }
            if ($_GROUP_COLOUR_) {
                echo "&nbsp;<span style=\"background-color: #";
                if (isset($context["GROUP_COLOUR"])) { $_GROUP_COLOUR_ = $context["GROUP_COLOUR"]; } else { $_GROUP_COLOUR_ = null; }
                echo $_GROUP_COLOUR_;
                echo "\">&nbsp; &nbsp;</span>";
            }
            echo "&nbsp;&nbsp;<span>
\t\t\t[ <a href=\"#\" id=\"color_palette_toggle\">";
            // line 100
            echo $this->env->getExtension('phpbb')->lang("COLOUR_SWATCH");
            echo "</a> ]</span>
\t\t\t<div id=\"color_palette_placeholder\" style=\"display: none;\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-target=\"#group_colour\"></div>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_rank\">";
            // line 105
            echo $this->env->getExtension('phpbb')->lang("GROUP_RANK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"group_rank\" id=\"group_rank\">";
            // line 106
            if (isset($context["S_RANK_OPTIONS"])) { $_S_RANK_OPTIONS_ = $context["S_RANK_OPTIONS"]; } else { $_S_RANK_OPTIONS_ = null; }
            echo $_S_RANK_OPTIONS_;
            echo "</select></dd>
\t</dl>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 111
            echo $this->env->getExtension('phpbb')->lang("GROUP_AVATAR");
            echo "</legend>
\t<dl>
\t\t<dt><label>";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("CURRENT_IMAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AVATAR_EXPLAIN");
            echo "</span></dt>
\t\t<dd>";
            // line 114
            if (isset($context["AVATAR"])) { $_AVATAR_ = $context["AVATAR"]; } else { $_AVATAR_ = null; }
            echo $_AVATAR_;
            echo "</dd>
\t\t<dd><label for=\"avatar_delete\"><input type=\"checkbox\" name=\"avatar_delete\" id=\"avatar_delete\" /> ";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("DELETE_AVATAR");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
            // line 118
            echo $this->env->getExtension('phpbb')->lang("AVATAR_TYPE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"avatar_driver\" id=\"avatar_driver\" data-togglable-settings=\"true\">
\t\t\t";
            // line 120
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "avatar_drivers"));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
                // line 121
                echo "\t\t\t<option value=\"";
                if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
                echo $this->getAttribute($_avatar_drivers_, "DRIVER");
                echo "\"";
                if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
                if ($this->getAttribute($_avatar_drivers_, "SELECTED")) {
                    echo " selected=\"selected\"";
                }
                echo " data-toggle-setting=\"#avatar_option_";
                if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
                echo $this->getAttribute($_avatar_drivers_, "DRIVER");
                echo "\">";
                if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
                echo $this->getAttribute($_avatar_drivers_, "L_TITLE");
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t</select></dd>
\t</dl>
\t<div id=\"avatar_options\">
\t";
            // line 126
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "avatar_drivers"));
            foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
                // line 127
                echo "\t<div id=\"avatar_option_";
                if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
                echo $this->getAttribute($_avatar_drivers_, "DRIVER");
                echo "\">
\t\t<p>";
                // line 128
                if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
                echo $this->getAttribute($_avatar_drivers_, "L_EXPLAIN");
                echo "</p>
\t\t";
                // line 129
                if (isset($context["avatar_drivers"])) { $_avatar_drivers_ = $context["avatar_drivers"]; } else { $_avatar_drivers_ = null; }
                echo $this->getAttribute($_avatar_drivers_, "OUTPUT");
                echo "
\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "\t</div>
\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 136
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"update\" value=\"";
            // line 137
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 138
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 139
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } elseif ($_S_LIST_) {
            // line 144
            echo "
\t<a href=\"";
            // line 145
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 147
            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
            echo " :: ";
            if (isset($context["GROUP_NAME"])) { $_GROUP_NAME_ = $context["GROUP_NAME"]; } else { $_GROUP_NAME_ = null; }
            echo $_GROUP_NAME_;
            echo "</h1>

\t<p>";
            // line 149
            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS_EXPLAIN");
            echo "</p>

\t<form id=\"list\" method=\"post\" action=\"";
            // line 151
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset class=\"quick\">
\t\t<a href=\"";
            // line 154
            if (isset($context["U_DEFAULT_ALL"])) { $_U_DEFAULT_ALL_ = $context["U_DEFAULT_ALL"]; } else { $_U_DEFAULT_ALL_ = null; }
            echo $_U_DEFAULT_ALL_;
            echo "\">&raquo; ";
            echo $this->env->getExtension('phpbb')->lang("MAKE_DEFAULT_FOR_ALL");
            echo "</a>
\t</fieldset>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 160
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</th>
\t\t<th>";
            // line 161
            echo $this->env->getExtension('phpbb')->lang("GROUP_DEFAULT");
            echo "</th>
\t\t<th>";
            // line 162
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo "</th>
\t\t<th>";
            // line 163
            echo $this->env->getExtension('phpbb')->lang("POSTS");
            echo "</th>
\t\t<th>";
            // line 164
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td class=\"row3\" colspan=\"5\"><strong>";
            // line 169
            echo $this->env->getExtension('phpbb')->lang("GROUP_LEAD");
            echo "</strong></td>
\t</tr>
\t";
            // line 171
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "leader"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                // line 172
                echo "\t\t<tr>
\t\t\t<td>";
                // line 173
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                if ($this->getAttribute($_leader_, "USERNAME_COLOUR")) {
                    echo "<a href=\"";
                    if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                    echo $this->getAttribute($_leader_, "U_USER_EDIT");
                    echo "\" style=\"color: #";
                    if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                    echo $this->getAttribute($_leader_, "USERNAME_COLOUR");
                    echo ";\" class=\"username-coloured\">";
                    if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                    echo $this->getAttribute($_leader_, "USERNAME");
                    echo "</a>";
                } else {
                    echo "<a href=\"";
                    if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                    echo $this->getAttribute($_leader_, "U_USER_EDIT");
                    echo "\">";
                    if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                    echo $this->getAttribute($_leader_, "USERNAME");
                    echo "</a>";
                }
                echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 174
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                if ($this->getAttribute($_leader_, "S_GROUP_DEFAULT")) {
                    echo $this->env->getExtension('phpbb')->lang("YES");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("NO");
                }
                echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 175
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                echo $this->getAttribute($_leader_, "JOINED");
                echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                // line 176
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                echo $this->getAttribute($_leader_, "USER_POSTS");
                echo "</td>
\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
                // line 177
                if (isset($context["leader"])) { $_leader_ = $context["leader"]; } else { $_leader_ = null; }
                echo $this->getAttribute($_leader_, "USER_ID");
                echo "\" /></td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 180
                echo "\t\t<tr>
\t\t\t<td colspan=\"5\" style=\"text-align: center;\">";
                // line 181
                echo $this->env->getExtension('phpbb')->lang("GROUPS_NO_MODS");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "\t<tr>
\t\t<td class=\"row3\" colspan=\"5\"><strong>";
            // line 185
            echo $this->env->getExtension('phpbb')->lang("GROUP_APPROVED");
            echo "</strong></td>
\t</tr>
\t";
            // line 187
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "member"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 188
                echo "\t\t";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ($this->getAttribute($_member_, "S_PENDING")) {
                    // line 189
                    echo "\t\t<tr>
\t\t\t<td class=\"row3\" colspan=\"5\"><strong>";
                    // line 190
                    echo $this->env->getExtension('phpbb')->lang("GROUP_PENDING");
                    echo "</strong></td>
\t\t</tr>
\t\t";
                } else {
                    // line 193
                    echo "\t\t<tr>
\t\t\t<td>";
                    // line 194
                    if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                    if ($this->getAttribute($_member_, "USERNAME_COLOUR")) {
                        echo "<a href=\"";
                        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                        echo $this->getAttribute($_member_, "U_USER_EDIT");
                        echo "\" style=\"color: #";
                        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                        echo $this->getAttribute($_member_, "USERNAME_COLOUR");
                        echo ";\" class=\"username-coloured\">";
                        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                        echo $this->getAttribute($_member_, "USERNAME");
                        echo "</a>";
                    } else {
                        echo "<a href=\"";
                        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                        echo $this->getAttribute($_member_, "U_USER_EDIT");
                        echo "\">";
                        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                        echo $this->getAttribute($_member_, "USERNAME");
                        echo "</a>";
                    }
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 195
                    if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                    if ($this->getAttribute($_member_, "S_GROUP_DEFAULT")) {
                        echo $this->env->getExtension('phpbb')->lang("YES");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO");
                    }
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 196
                    if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                    echo $this->getAttribute($_member_, "JOINED");
                    echo "</td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 197
                    if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                    echo $this->getAttribute($_member_, "USER_POSTS");
                    echo "</td>
\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
                    // line 198
                    if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                    echo $this->getAttribute($_member_, "USER_ID");
                    echo "\" /></td>
\t\t</tr>
\t\t";
                }
                // line 201
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 202
                echo "\t\t<tr>
\t\t\t<td colspan=\"5\" style=\"text-align: center;\">";
                // line 203
                echo $this->env->getExtension('phpbb')->lang("GROUPS_NO_MEMBERS");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "\t</tbody>
\t</table>
\t<div class=\"pagination\">
\t";
            // line 209
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
                // line 210
                echo "\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->env->loadTemplate("pagination.html")->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 211
                echo "\t";
            }
            // line 212
            echo "\t</div>

\t<fieldset class=\"quick\">
\t\t<select name=\"action\"><option class=\"sep\" value=\"\">";
            // line 215
            echo $this->env->getExtension('phpbb')->lang("SELECT_OPTION");
            echo "</option>";
            if (isset($context["S_ACTION_OPTIONS"])) { $_S_ACTION_OPTIONS_ = $context["S_ACTION_OPTIONS"]; } else { $_S_ACTION_OPTIONS_ = null; }
            echo $_S_ACTION_OPTIONS_;
            echo "</select>
\t\t<input class=\"button2\" type=\"submit\" name=\"update\" value=\"";
            // line 216
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t\t<p class=\"small\"><a href=\"#\" onclick=\"marklist('list', 'mark', true); return false;\">";
            // line 217
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('list', 'mark', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></p>
\t</fieldset>

\t<h1>";
            // line 220
            echo $this->env->getExtension('phpbb')->lang("ADD_USERS");
            echo "</h1>

\t<p>";
            // line 222
            echo $this->env->getExtension('phpbb')->lang("ADD_USERS_EXPLAIN");
            echo "</p>

\t<fieldset>
\t\t<legend>";
            // line 225
            echo $this->env->getExtension('phpbb')->lang("ADD_USERS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"leader\">";
            // line 227
            echo $this->env->getExtension('phpbb')->lang("USER_GROUP_LEADER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input name=\"leader\" type=\"radio\" class=\"radio\" value=\"1\" /> ";
            // line 228
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input name=\"leader\" type=\"radio\" class=\"radio\" id=\"leader\" value=\"0\" checked=\"checked\" /> ";
            // line 229
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"default\">";
            // line 232
            echo $this->env->getExtension('phpbb')->lang("USER_GROUP_DEFAULT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("USER_GROUP_DEFAULT_EXPLAIN");
            echo "</span></dt>
\t\t<dd><label><input name=\"default\" type=\"radio\" class=\"radio\" value=\"1\" /> ";
            // line 233
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input name=\"default\" type=\"radio\" class=\"radio\" id=\"default\" value=\"0\" checked=\"checked\" /> ";
            // line 234
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"usernames\">";
            // line 237
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("USERNAMES_EXPLAIN");
            echo "</span></dt>
\t\t<dd><textarea id=\"usernames\" name=\"usernames\" cols=\"40\" rows=\"5\"></textarea></dd>
\t\t<dd>[ <a href=\"";
            // line 239
            if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
            echo $_U_FIND_USERNAME_;
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
            echo "</a> ]</dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"addusers\" value=\"";
            // line 243
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 245
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 250
            echo "
\t<h1>";
            // line 251
            echo $this->env->getExtension('phpbb')->lang("ACP_GROUPS_MANAGE");
            echo "</h1>

\t<p>";
            // line 253
            echo $this->env->getExtension('phpbb')->lang("ACP_GROUPS_MANAGE_EXPLAIN");
            echo "</p>

\t";
            // line 255
            if (isset($context["S_ERROR"])) { $_S_ERROR_ = $context["S_ERROR"]; } else { $_S_ERROR_ = null; }
            if ($_S_ERROR_) {
                // line 256
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 257
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 258
                if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
                echo $_ERROR_MSG_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 261
            echo "
\t<h1>";
            // line 262
            echo $this->env->getExtension('phpbb')->lang("USER_DEF_GROUPS");
            echo "</h1>

\t<p>";
            // line 264
            echo $this->env->getExtension('phpbb')->lang("USER_DEF_GROUPS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_groups\" method=\"post\" action=\"";
            // line 266
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<table class=\"table1\">
\t\t<col class=\"col1\" /><col class=\"col1\" /><col class=\"col2\" /><col class=\"col2\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th style=\"width: 50%\">";
            // line 272
            echo $this->env->getExtension('phpbb')->lang("GROUP");
            echo "</th>
\t\t<th>";
            // line 273
            echo $this->env->getExtension('phpbb')->lang("TOTAL_MEMBERS");
            echo "</th>
\t\t<th colspan=\"2\">";
            // line 274
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</th>
\t\t<th>";
            // line 275
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 279
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "groups"));
            foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                // line 280
                echo "\t\t";
                if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                if ($this->getAttribute($_groups_, "S_SPECIAL")) {
                    // line 281
                    echo "\t\t";
                    if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                    if ($this->getAttribute($_groups_, "S_FIRST_ROW")) {
                        // line 282
                        echo "\t\t\t<tr>
\t\t\t\t<td colspan=\"5\" class=\"row3\">";
                        // line 283
                        echo $this->env->getExtension('phpbb')->lang("NO_GROUPS_CREATED");
                        echo "</td>
\t\t\t</tr>
\t\t";
                    }
                    // line 286
                    echo "\t</tbody>
\t</table>

\t<fieldset class=\"quick\">
\t\t";
                    // line 290
                    if (isset($context["S_GROUP_ADD"])) { $_S_GROUP_ADD_ = $context["S_GROUP_ADD"]; } else { $_S_GROUP_ADD_ = null; }
                    if ($_S_GROUP_ADD_) {
                        // line 291
                        echo "\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("CREATE_GROUP");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <input type=\"text\" name=\"group_name\" value=\"\" /> <input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                        echo "\" />
\t\t\t<input type=\"hidden\" name=\"add\" value=\"1\" />
\t\t";
                    }
                    // line 294
                    echo "\t\t";
                    if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                    echo $_S_FORM_TOKEN_;
                    echo "
\t</fieldset>
\t</form>

\t<h1>";
                    // line 298
                    echo $this->env->getExtension('phpbb')->lang("SPECIAL_GROUPS");
                    echo "</h1>

\t<p>";
                    // line 300
                    echo $this->env->getExtension('phpbb')->lang("SPECIAL_GROUPS_EXPLAIN");
                    echo "</p>

\t<table class=\"table1\">
\t\t<col class=\"col1\" /><col class=\"col1\" /><col class=\"col2\" /><col class=\"col2\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th style=\"width: 50%\">";
                    // line 306
                    echo $this->env->getExtension('phpbb')->lang("GROUP");
                    echo "</th>
\t\t<th>";
                    // line 307
                    echo $this->env->getExtension('phpbb')->lang("TOTAL_MEMBERS");
                    echo "</th>
\t\t<th colspan=\"2\">";
                    // line 308
                    echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                    echo "</th>
\t\t<th>";
                    // line 309
                    echo $this->env->getExtension('phpbb')->lang("ACTION");
                    echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t\t";
                } else {
                    // line 314
                    echo "\t\t<tr>
\t\t\t<td><strong>";
                    // line 315
                    if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                    echo $this->getAttribute($_groups_, "GROUP_NAME");
                    echo "</strong></td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 316
                    if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                    echo $this->getAttribute($_groups_, "TOTAL_MEMBERS");
                    echo "</td>
\t\t\t<td style=\"text-align: center;\"><a href=\"";
                    // line 317
                    if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                    echo $this->getAttribute($_groups_, "U_EDIT");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("SETTINGS");
                    echo "</a></td>
\t\t\t<td style=\"text-align: center;\"><a href=\"";
                    // line 318
                    if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                    echo $this->getAttribute($_groups_, "U_LIST");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("MEMBERS");
                    echo "</a></td>
\t\t\t<td style=\"text-align: center;\">";
                    // line 319
                    if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                    if (((!$this->getAttribute($_groups_, "S_GROUP_SPECIAL")) && $this->getAttribute($_groups_, "U_DELETE"))) {
                        echo "<a href=\"";
                        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
                        echo $this->getAttribute($_groups_, "U_DELETE");
                        echo "\" data-ajax=\"row_delete\">";
                        echo $this->env->getExtension('phpbb')->lang("DELETE");
                        echo "</a>";
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("DELETE");
                    }
                    echo "</td>
\t\t</tr>
\t\t";
                }
                // line 322
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            echo "\t</tbody>
\t</table>

";
        }
        // line 327
        echo "
";
        // line 328
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
        return "acp_groups.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1127 => 328,  1124 => 327,  1118 => 323,  1112 => 322,  1096 => 319,  1089 => 318,  1082 => 317,  1077 => 316,  1072 => 315,  1069 => 314,  1061 => 309,  1057 => 308,  1053 => 307,  1049 => 306,  1040 => 300,  1035 => 298,  1026 => 294,  1016 => 291,  1013 => 290,  1007 => 286,  1001 => 283,  998 => 282,  994 => 281,  990 => 280,  985 => 279,  978 => 275,  974 => 274,  970 => 273,  966 => 272,  956 => 266,  951 => 264,  946 => 262,  943 => 261,  936 => 258,  932 => 257,  929 => 256,  926 => 255,  921 => 253,  916 => 251,  913 => 250,  904 => 245,  899 => 243,  889 => 239,  881 => 237,  875 => 234,  871 => 233,  864 => 232,  858 => 229,  854 => 228,  849 => 227,  844 => 225,  838 => 222,  833 => 220,  825 => 217,  821 => 216,  814 => 215,  809 => 212,  806 => 211,  793 => 210,  790 => 209,  785 => 206,  776 => 203,  773 => 202,  768 => 201,  761 => 198,  756 => 197,  751 => 196,  742 => 195,  718 => 194,  715 => 193,  709 => 190,  706 => 189,  702 => 188,  696 => 187,  691 => 185,  688 => 184,  679 => 181,  676 => 180,  667 => 177,  662 => 176,  657 => 175,  648 => 174,  624 => 173,  621 => 172,  615 => 171,  610 => 169,  602 => 164,  598 => 163,  594 => 162,  590 => 161,  586 => 160,  574 => 154,  567 => 151,  562 => 149,  554 => 147,  543 => 145,  540 => 144,  531 => 139,  527 => 138,  523 => 137,  519 => 136,  513 => 132,  503 => 129,  498 => 128,  492 => 127,  487 => 126,  482 => 123,  461 => 121,  456 => 120,  450 => 118,  444 => 115,  439 => 114,  432 => 113,  427 => 111,  418 => 106,  413 => 105,  405 => 100,  395 => 99,  390 => 98,  382 => 96,  375 => 93,  368 => 92,  361 => 89,  354 => 88,  349 => 86,  344 => 83,  342 => 82,  336 => 80,  329 => 79,  322 => 76,  317 => 75,  310 => 72,  305 => 71,  298 => 68,  291 => 67,  288 => 66,  281 => 63,  274 => 62,  271 => 61,  267 => 60,  265 => 59,  261 => 58,  256 => 55,  247 => 52,  240 => 51,  237 => 50,  233 => 49,  230 => 48,  223 => 46,  210 => 42,  200 => 41,  190 => 40,  180 => 39,  172 => 37,  169 => 36,  166 => 35,  156 => 33,  147 => 32,  138 => 31,  133 => 30,  128 => 29,  106 => 26,  96 => 25,  91 => 23,  84 => 20,  81 => 19,  74 => 16,  70 => 15,  67 => 14,  64 => 13,  59 => 11,  54 => 9,  43 => 7,  40 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
