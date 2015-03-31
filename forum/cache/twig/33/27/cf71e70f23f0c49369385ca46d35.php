<?php

/* acp_users.html */
class __TwigTemplate_3327cf71e70f23f0c49369385ca46d35 extends Twig_Template
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
        if (isset($context["S_SELECT_USER"])) { $_S_SELECT_USER_ = $context["S_SELECT_USER"]; } else { $_S_SELECT_USER_ = null; }
        if (isset($context["S_SELECT_FORUM"])) { $_S_SELECT_FORUM_ = $context["S_SELECT_FORUM"]; } else { $_S_SELECT_FORUM_ = null; }
        if ($_S_SELECT_USER_) {
            // line 6
            echo "
\t<h1>";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN");
            echo "</h1>

\t<p>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN_EXPLAIN");
            echo "</p>

\t<form id=\"select_user\" method=\"post\" action=\"";
            // line 11
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("SELECT_USER");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"username\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("ENTER_USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" id=\"username\" name=\"username\" /></dd>
\t\t<dd>[ <a href=\"";
            // line 18
            if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
            echo $_U_FIND_USERNAME_;
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
            echo "</a> ]</dd>
\t\t<dd class=\"full\" style=\"text-align: left;\"><label><input type=\"checkbox\" class=\"radio\" id=\"anonymous\" name=\"u\" value=\"";
            // line 19
            if (isset($context["ANONYMOUS_USER_ID"])) { $_ANONYMOUS_USER_ID_ = $context["ANONYMOUS_USER_ID"]; } else { $_ANONYMOUS_USER_ID_ = null; }
            echo $_ANONYMOUS_USER_ID_;
            echo "\" /> ";
            echo $this->env->getExtension('phpbb')->lang("SELECT_ANONYMOUS");
            echo "</label></dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input type=\"submit\" name=\"submituser\" value=\"";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t</p>
\t</fieldset>

\t</form>

";
        } elseif ($_S_SELECT_FORUM_) {
            // line 30
            echo "
\t<a href=\"";
            // line 31
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN");
            echo "</h1>

\t<p>";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN_EXPLAIN");
            echo "</p>

\t<form id=\"select_forum\" method=\"post\" action=\"";
            // line 37
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN_MOVE_POSTS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"new_forum\">";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN_MOVE_POSTS");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("MOVE_POSTS_EXPLAIN");
            echo "</span></dt>
\t\t<dd><select id=\"new_forum\" name=\"new_f\">";
            // line 43
            if (isset($context["S_FORUM_OPTIONS"])) { $_S_FORUM_OPTIONS_ = $context["S_FORUM_OPTIONS"]; } else { $_S_FORUM_OPTIONS_ = null; }
            echo $_S_FORUM_OPTIONS_;
            echo "</select></dd>
\t</dl>
\t</fieldset>

\t<fieldset class=\"quick\">
\t\t<input type=\"submit\" name=\"update\" value=\"";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t\t";
            // line 49
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 54
            echo "
\t<a href=\"";
            // line 55
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 57
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN");
            echo " :: ";
            if (isset($context["MANAGED_USERNAME"])) { $_MANAGED_USERNAME_ = $context["MANAGED_USERNAME"]; } else { $_MANAGED_USERNAME_ = null; }
            echo $_MANAGED_USERNAME_;
            echo "</h1>

\t<p>";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN_EXPLAIN");
            echo "</p>

\t";
            // line 61
            if (isset($context["S_ERROR"])) { $_S_ERROR_ = $context["S_ERROR"]; } else { $_S_ERROR_ = null; }
            if ($_S_ERROR_) {
                // line 62
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 63
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 64
                if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
                echo $_ERROR_MSG_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 67
            echo "
\t<form id=\"mode_select\" method=\"post\" action=\"";
            // line 68
            if (isset($context["U_MODE_SELECT"])) { $_U_MODE_SELECT_ = $context["U_MODE_SELECT"]; } else { $_U_MODE_SELECT_ = null; }
            echo $_U_MODE_SELECT_;
            echo "\">

\t<fieldset class=\"quick\">
\t\t";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("SELECT_FORM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"mode\" onchange=\"if (this.options[this.selectedIndex].value != '') this.form.submit();\">";
            if (isset($context["S_FORM_OPTIONS"])) { $_S_FORM_OPTIONS_ = $context["S_FORM_OPTIONS"]; } else { $_S_FORM_OPTIONS_ = null; }
            echo $_S_FORM_OPTIONS_;
            echo "</select> <input class=\"button2\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" />
\t\t";
            // line 72
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 77
        echo "
";
        // line 78
        if (isset($context["S_OVERVIEW"])) { $_S_OVERVIEW_ = $context["S_OVERVIEW"]; } else { $_S_OVERVIEW_ = null; }
        if (isset($context["S_FEEDBACK"])) { $_S_FEEDBACK_ = $context["S_FEEDBACK"]; } else { $_S_FEEDBACK_ = null; }
        if (isset($context["S_WARNINGS"])) { $_S_WARNINGS_ = $context["S_WARNINGS"]; } else { $_S_WARNINGS_ = null; }
        if (isset($context["S_PROFILE"])) { $_S_PROFILE_ = $context["S_PROFILE"]; } else { $_S_PROFILE_ = null; }
        if (isset($context["S_PREFS"])) { $_S_PREFS_ = $context["S_PREFS"]; } else { $_S_PREFS_ = null; }
        if (isset($context["S_AVATAR"])) { $_S_AVATAR_ = $context["S_AVATAR"]; } else { $_S_AVATAR_ = null; }
        if (isset($context["S_RANK"])) { $_S_RANK_ = $context["S_RANK"]; } else { $_S_RANK_ = null; }
        if (isset($context["S_SIGNATURE"])) { $_S_SIGNATURE_ = $context["S_SIGNATURE"]; } else { $_S_SIGNATURE_ = null; }
        if (isset($context["S_GROUPS"])) { $_S_GROUPS_ = $context["S_GROUPS"]; } else { $_S_GROUPS_ = null; }
        if (isset($context["S_ATTACHMENTS"])) { $_S_ATTACHMENTS_ = $context["S_ATTACHMENTS"]; } else { $_S_ATTACHMENTS_ = null; }
        if (isset($context["S_PERMISSIONS"])) { $_S_PERMISSIONS_ = $context["S_PERMISSIONS"]; } else { $_S_PERMISSIONS_ = null; }
        if ($_S_OVERVIEW_) {
            // line 79
            echo "
";
            // line 80
            $location = "acp_users_overview.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("acp_users_overview.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 81
            echo "
";
        } elseif ($_S_FEEDBACK_) {
            // line 83
            echo "
";
            // line 84
            $location = "acp_users_feedback.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("acp_users_feedback.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 85
            echo "
";
        } elseif ($_S_WARNINGS_) {
            // line 87
            echo "
";
            // line 88
            $location = "acp_users_warnings.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("acp_users_warnings.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 89
            echo "
";
        } elseif ($_S_PROFILE_) {
            // line 91
            echo "
";
            // line 92
            $location = "acp_users_profile.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("acp_users_profile.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 93
            echo "
";
        } elseif ($_S_PREFS_) {
            // line 95
            echo "
";
            // line 96
            $location = "acp_users_prefs.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("acp_users_prefs.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 97
            echo "
";
        } elseif ($_S_AVATAR_) {
            // line 99
            echo "
";
            // line 100
            $location = "acp_users_avatar.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("acp_users_avatar.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 101
            echo "
";
        } elseif ($_S_RANK_) {
            // line 103
            echo "
\t<form id=\"user_prefs\" method=\"post\" action=\"";
            // line 104
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 107
            echo $this->env->getExtension('phpbb')->lang("ACP_USER_RANK");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"user_rank\">";
            // line 109
            echo $this->env->getExtension('phpbb')->lang("USER_RANK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"user_rank\" id=\"user_rank\">";
            // line 110
            if (isset($context["S_RANK_OPTIONS"])) { $_S_RANK_OPTIONS_ = $context["S_RANK_OPTIONS"]; } else { $_S_RANK_OPTIONS_ = null; }
            echo $_S_RANK_OPTIONS_;
            echo "</select></dd>
\t</dl>
\t</fieldset>

\t<fieldset class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t\t";
            // line 116
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } elseif ($_S_SIGNATURE_) {
            // line 121
            echo "
";
            // line 122
            $location = "acp_users_signature.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("acp_users_signature.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 123
            echo "
";
        } elseif ($_S_GROUPS_) {
            // line 125
            echo "
\t<form id=\"user_groups\" method=\"post\" action=\"";
            // line 126
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<table class=\"table1 zebra-table\">
\t<tbody>
\t";
            // line 130
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "group"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 131
                echo "\t\t";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                if ($this->getAttribute($_group_, "S_NEW_GROUP_TYPE")) {
                    // line 132
                    echo "\t\t<tr>
\t\t\t<td class=\"row3\" colspan=\"4\"><strong>";
                    // line 133
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo $this->getAttribute($_group_, "GROUP_TYPE");
                    echo "</strong></td>
\t\t</tr>
\t\t";
                } else {
                    // line 136
                    echo "\t\t\t<tr>
\t\t\t\t<td><a href=\"";
                    // line 137
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo $this->getAttribute($_group_, "U_EDIT_GROUP");
                    echo "\">";
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo $this->getAttribute($_group_, "GROUP_NAME");
                    echo "</a></td>
\t\t\t\t<td>";
                    // line 138
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    if ($this->getAttribute($_group_, "S_IS_MEMBER")) {
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        if ($this->getAttribute($_group_, "S_NO_DEFAULT")) {
                            echo "<a href=\"";
                            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                            echo $this->getAttribute($_group_, "U_DEFAULT");
                            echo "\">";
                            echo $this->env->getExtension('phpbb')->lang("GROUP_DEFAULT");
                            echo "</a>";
                        } else {
                            echo "<strong>";
                            echo $this->env->getExtension('phpbb')->lang("GROUP_DEFAULT");
                            echo "</strong>";
                        }
                    } elseif (((!$this->getAttribute($_group_, "S_IS_MEMBER")) && $this->getAttribute($_group_, "U_APPROVE"))) {
                        echo "<a href=\"";
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo $this->getAttribute($_group_, "U_APPROVE");
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("GROUP_APPROVE");
                        echo "</a>";
                    } else {
                        echo "&nbsp;";
                    }
                    echo "</td>
\t\t\t\t<td>";
                    // line 139
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    if (($this->getAttribute($_group_, "S_IS_MEMBER") && (!$this->getAttribute($_group_, "S_SPECIAL_GROUP")))) {
                        echo "<a href=\"";
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo $this->getAttribute($_group_, "U_DEMOTE_PROMOTE");
                        echo "\">";
                        if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                        echo $this->getAttribute($_group_, "L_DEMOTE_PROMOTE");
                        echo "</a>";
                    } else {
                        echo "&nbsp;";
                    }
                    echo "</td>
\t\t\t\t<td><a href=\"";
                    // line 140
                    if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                    echo $this->getAttribute($_group_, "U_DELETE");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("GROUP_DELETE");
                    echo "</a></td>
\t\t\t</tr>
\t\t";
                }
                // line 143
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t</tbody>
\t</table>

\t";
            // line 147
            if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
            if ($_S_GROUP_OPTIONS_) {
                // line 148
                echo "\t\t<fieldset class=\"quick\">
\t\t\t";
                // line 149
                echo $this->env->getExtension('phpbb')->lang("USER_GROUP_ADD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <select name=\"g\">";
                if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
                echo $_S_GROUP_OPTIONS_;
                echo "</select> <input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />
\t\t\t";
                // line 150
                if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
                echo $_S_FORM_TOKEN_;
                echo "
\t\t</fieldset>
\t";
            }
            // line 153
            echo "\t</form>

";
        } elseif ($_S_ATTACHMENTS_) {
            // line 156
            echo "
\t<form id=\"user_attachments\" method=\"post\" action=\"";
            // line 157
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">


\t<div class=\"pagination\">
\t";
            // line 161
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
                // line 162
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
                // line 163
                echo "\t";
            }
            // line 164
            echo "\t</div>

\t";
            // line 166
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "attach"))) {
                // line 167
                echo "\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th>";
                // line 170
                echo $this->env->getExtension('phpbb')->lang("FILENAME");
                echo "</th>
\t\t<th style=\"width: 20%;\">";
                // line 171
                echo $this->env->getExtension('phpbb')->lang("POST_TIME");
                echo "</th>
\t\t<th style=\"width: 20%;\">";
                // line 172
                echo $this->env->getExtension('phpbb')->lang("FILESIZE");
                echo "</th>
\t\t<th style=\"width: 20%;\">";
                // line 173
                echo $this->env->getExtension('phpbb')->lang("DOWNLOADS");
                echo "</th>
\t\t<th style=\"width: 50px;\">";
                // line 174
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 178
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "attach"));
                foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                    // line 179
                    echo "\t<tr>
\t\t<td><a href=\"";
                    // line 180
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo $this->getAttribute($_attach_, "U_DOWNLOAD");
                    echo "\">";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo $this->getAttribute($_attach_, "REAL_FILENAME");
                    echo "</a><br /><span class=\"small\">";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    if ($this->getAttribute($_attach_, "S_IN_MESSAGE")) {
                        echo "<strong>";
                        echo $this->env->getExtension('phpbb')->lang("PM");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " </strong>";
                    } else {
                        echo "<strong>";
                        echo $this->env->getExtension('phpbb')->lang("POST");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " </strong>";
                    }
                    echo "<a href=\"";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo $this->getAttribute($_attach_, "U_VIEW_TOPIC");
                    echo "\">";
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo $this->getAttribute($_attach_, "TOPIC_TITLE");
                    echo "</a></span></td>
\t\t<td style=\"text-align: center\">";
                    // line 181
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo $this->getAttribute($_attach_, "POST_TIME");
                    echo "</td>
\t\t<td style=\"text-align: center\">";
                    // line 182
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo $this->getAttribute($_attach_, "SIZE");
                    echo "</td>
\t\t<td style=\"text-align: center\">";
                    // line 183
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo $this->getAttribute($_attach_, "DOWNLOAD_COUNT");
                    echo "</td>
\t\t<td style=\"text-align: center\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
                    // line 184
                    if (isset($context["attach"])) { $_attach_ = $context["attach"]; } else { $_attach_ = null; }
                    echo $this->getAttribute($_attach_, "ATTACH_ID");
                    echo "\" /></td>
\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "\t</tbody>
\t</table>
\t";
            } else {
                // line 190
                echo "\t<div class=\"errorbox\">
\t\t<p>";
                // line 191
                echo $this->env->getExtension('phpbb')->lang("USER_NO_ATTACHMENTS");
                echo "</p>
\t</div>
\t";
            }
            // line 194
            echo "\t<fieldset class=\"display-options\">
\t\t";
            // line 195
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"sk\">";
            if (isset($context["S_SORT_KEY"])) { $_S_SORT_KEY_ = $context["S_SORT_KEY"]; } else { $_S_SORT_KEY_ = null; }
            echo $_S_SORT_KEY_;
            echo "</select> <select name=\"sd\">";
            if (isset($context["S_SORT_DIR"])) { $_S_SORT_DIR_ = $context["S_SORT_DIR"]; } else { $_S_SORT_DIR_ = null; }
            echo $_S_SORT_DIR_;
            echo "</select>
\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 196
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" name=\"sort\" />
\t</fieldset>
\t<hr />
\t<div class=\"pagination\">
\t";
            // line 200
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
                // line 201
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
                // line 202
                echo "\t";
            }
            // line 203
            echo "\t</div>

\t<fieldset class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"delmarked\" value=\"";
            // line 206
            echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
            echo "\" />
\t\t<p class=\"small\"><a href=\"#\" onclick=\"marklist('user_attachments', 'mark', true);\">";
            // line 207
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('user_attachments', 'mark', false);\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></p>
\t\t";
            // line 208
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } elseif ($_S_PERMISSIONS_) {
            // line 213
            echo "
\t<div style=\"float: ";
            // line 214
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">
\t\t<a href=\"";
            // line 215
            if (isset($context["U_USER_PERMISSIONS"])) { $_U_USER_PERMISSIONS_ = $context["U_USER_PERMISSIONS"]; } else { $_U_USER_PERMISSIONS_ = null; }
            echo $_U_USER_PERMISSIONS_;
            echo "\">&raquo; ";
            echo $this->env->getExtension('phpbb')->lang("SET_USERS_PERMISSIONS");
            echo "</a><br />
\t\t<a href=\"";
            // line 216
            if (isset($context["U_USER_FORUM_PERMISSIONS"])) { $_U_USER_FORUM_PERMISSIONS_ = $context["U_USER_FORUM_PERMISSIONS"]; } else { $_U_USER_FORUM_PERMISSIONS_ = null; }
            echo $_U_USER_FORUM_PERMISSIONS_;
            echo "\">&raquo; ";
            echo $this->env->getExtension('phpbb')->lang("SET_USERS_FORUM_PERMISSIONS");
            echo "</a>
\t</div>

\t<form id=\"select_forum\" method=\"post\" action=\"";
            // line 219
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t\t<fieldset class=\"quick\" style=\"text-align: left;\">
\t\t\t";
            // line 222
            echo $this->env->getExtension('phpbb')->lang("SELECT_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"f\">";
            if (isset($context["S_FORUM_OPTIONS"])) { $_S_FORUM_OPTIONS_ = $context["S_FORUM_OPTIONS"]; } else { $_S_FORUM_OPTIONS_ = null; }
            echo $_S_FORUM_OPTIONS_;
            echo "</select>
\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 223
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" name=\"select\" />
\t\t\t";
            // line 224
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t\t</fieldset>
\t</form>

\t<div class=\"clearfix\">&nbsp;</div>

\t";
            // line 230
            $location = "permission_mask.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("permission_mask.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 231
            echo "
";
        }
        // line 233
        echo "
";
        // line 234
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
        return "acp_users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  833 => 234,  830 => 233,  826 => 231,  814 => 230,  804 => 224,  800 => 223,  792 => 222,  785 => 219,  776 => 216,  769 => 215,  764 => 214,  761 => 213,  752 => 208,  746 => 207,  742 => 206,  737 => 203,  734 => 202,  721 => 201,  718 => 200,  711 => 196,  700 => 195,  697 => 194,  691 => 191,  688 => 190,  683 => 187,  673 => 184,  668 => 183,  663 => 182,  658 => 181,  631 => 180,  628 => 179,  623 => 178,  616 => 174,  612 => 173,  608 => 172,  604 => 171,  600 => 170,  595 => 167,  592 => 166,  588 => 164,  585 => 163,  572 => 162,  569 => 161,  561 => 157,  558 => 156,  553 => 153,  546 => 150,  536 => 149,  533 => 148,  530 => 147,  525 => 144,  519 => 143,  510 => 140,  495 => 139,  467 => 138,  459 => 137,  456 => 136,  449 => 133,  446 => 132,  442 => 131,  437 => 130,  429 => 126,  426 => 125,  422 => 123,  410 => 122,  407 => 121,  398 => 116,  394 => 115,  385 => 110,  380 => 109,  375 => 107,  368 => 104,  365 => 103,  361 => 101,  349 => 100,  346 => 99,  342 => 97,  330 => 96,  327 => 95,  323 => 93,  311 => 92,  308 => 91,  304 => 89,  292 => 88,  289 => 87,  285 => 85,  273 => 84,  270 => 83,  266 => 81,  254 => 80,  251 => 79,  238 => 78,  235 => 77,  226 => 72,  216 => 71,  209 => 68,  206 => 67,  199 => 64,  195 => 63,  192 => 62,  189 => 61,  184 => 59,  176 => 57,  165 => 55,  162 => 54,  153 => 49,  149 => 48,  140 => 43,  134 => 42,  129 => 40,  122 => 37,  117 => 35,  112 => 33,  101 => 31,  98 => 30,  88 => 23,  78 => 19,  71 => 18,  65 => 16,  60 => 14,  53 => 11,  48 => 9,  43 => 7,  40 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
