<?php

/* ucp_pm_viewfolder.html */
class __TwigTemplate_550f0f5a1e442e2d09b528bae019ef64 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("ucp_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (isset($context["PROMPT"])) { $_PROMPT_ = $context["PROMPT"]; } else { $_PROMPT_ = null; }
        if ((!$_PROMPT_)) {
            // line 4
            echo "\t";
            $location = "ucp_pm_message_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("ucp_pm_message_header.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 6
        echo "
";
        // line 7
        if (isset($context["PROMPT"])) { $_PROMPT_ = $context["PROMPT"]; } else { $_PROMPT_ = null; }
        if ($_PROMPT_) {
            // line 8
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_CSV");
            echo "</h2>
\t<form id=\"viewfolder\" method=\"post\" action=\"";
            // line 9
            if (isset($context["S_PM_ACTION"])) { $_S_PM_ACTION_ = $context["S_PM_ACTION"]; } else { $_S_PM_ACTION_ = null; }
            echo $_S_PM_ACTION_;
            echo "\">
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<h3>";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</h3>
\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"delimiter\">";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("DELIMITER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" id=\"delimiter\" name=\"delimiter\" value=\",\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"enclosure\">";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("ENCLOSURE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" id=\"enclosure\" name=\"enclosure\" value=\"&#034;\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t</div>
\t</div>
\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"export_option\" value=\"CSV\" />
\t\t<input class=\"button1\" type=\"submit\" name=\"submit_export\" value=\"";
            // line 27
            echo $this->env->getExtension('phpbb')->lang("EXPORT_FOLDER");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" value=\"Reset\" name=\"reset\" />&nbsp;
\t\t";
            // line 29
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 34
            echo "
\t";
            // line 35
            if (isset($context["NUM_REMOVED"])) { $_NUM_REMOVED_ = $context["NUM_REMOVED"]; } else { $_NUM_REMOVED_ = null; }
            if ($_NUM_REMOVED_) {
                // line 36
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 37
                if (isset($context["RULE_REMOVED_MESSAGES"])) { $_RULE_REMOVED_MESSAGES_ = $context["RULE_REMOVED_MESSAGES"]; } else { $_RULE_REMOVED_MESSAGES_ = null; }
                echo $_RULE_REMOVED_MESSAGES_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 40
            echo "
\t";
            // line 41
            if (isset($context["NUM_NOT_MOVED"])) { $_NUM_NOT_MOVED_ = $context["NUM_NOT_MOVED"]; } else { $_NUM_NOT_MOVED_ = null; }
            if ($_NUM_NOT_MOVED_) {
                // line 42
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 43
                if (isset($context["NOT_MOVED_MESSAGES"])) { $_NOT_MOVED_MESSAGES_ = $context["NOT_MOVED_MESSAGES"]; } else { $_NOT_MOVED_MESSAGES_ = null; }
                echo $_NOT_MOVED_MESSAGES_;
                echo "<br />";
                if (isset($context["RELEASE_MESSAGE_INFO"])) { $_RELEASE_MESSAGE_INFO_ = $context["RELEASE_MESSAGE_INFO"]; } else { $_RELEASE_MESSAGE_INFO_ = null; }
                echo $_RELEASE_MESSAGE_INFO_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 46
            echo "
\t";
            // line 47
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "messagerow"))) {
                // line 48
                echo "\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("MESSAGE");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
                // line 52
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist pmlist responsive-show-all ";
                // line 56
                if (isset($context["S_SHOW_RECIPIENTS"])) { $_S_SHOW_RECIPIENTS_ = $context["S_SHOW_RECIPIENTS"]; } else { $_S_SHOW_RECIPIENTS_ = null; }
                if ($_S_SHOW_RECIPIENTS_) {
                    echo "missing-column";
                } else {
                    echo "two-columns";
                }
                echo "\">

\t\t";
                // line 58
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "messagerow"));
                foreach ($context['_seq'] as $context["_key"] => $context["messagerow"]) {
                    // line 59
                    echo "\t\t\t<li class=\"row";
                    if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                    if (($this->getAttribute($_messagerow_, "S_ROW_COUNT") % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                    if ($this->getAttribute($_messagerow_, "PM_CLASS")) {
                        echo " ";
                        if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                        echo $this->getAttribute($_messagerow_, "PM_CLASS");
                    }
                    echo "\">
\t\t\t\t<dl class=\"icon ";
                    // line 60
                    if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                    echo $this->getAttribute($_messagerow_, "FOLDER_IMG_STYLE");
                    echo "\">
\t\t\t\t\t<dt";
                    // line 61
                    if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                    if (isset($context["S_PM_ICONS"])) { $_S_PM_ICONS_ = $context["S_PM_ICONS"]; } else { $_S_PM_ICONS_ = null; }
                    if (($this->getAttribute($_messagerow_, "PM_ICON_URL") && $_S_PM_ICONS_)) {
                        echo " style=\"background-image: url(";
                        if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                        echo $this->getAttribute($_messagerow_, "PM_ICON_URL");
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo ">
\t\t\t\t\t\t";
                    // line 62
                    if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                    if (($this->getAttribute($_messagerow_, "S_PM_UNREAD") && (!$this->getAttribute($_messagerow_, "S_PM_DELETED")))) {
                        echo "<a href=\"";
                        if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                        echo $this->getAttribute($_messagerow_, "U_VIEW_PM");
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 63
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t";
                    // line 65
                    if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                    if ($this->getAttribute($_messagerow_, "S_PM_DELETED")) {
                        // line 66
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                        echo $this->getAttribute($_messagerow_, "U_REMOVE_PM");
                        echo "\" class=\"topictitle\">";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_MESSAGE");
                        echo "</a><br />
\t\t\t\t\t\t\t<span class=\"error\">";
                        // line 67
                        echo $this->env->getExtension('phpbb')->lang("MESSAGE_REMOVED_FROM_OUTBOX");
                        echo "</span>
\t\t\t\t\t\t";
                    } else {
                        // line 69
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                        echo $this->getAttribute($_messagerow_, "U_VIEW_PM");
                        echo "\" class=\"topictitle\">";
                        if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                        echo $this->getAttribute($_messagerow_, "SUBJECT");
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t";
                    if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                    if ($this->getAttribute($_messagerow_, "S_AUTHOR_DELETED")) {
                        // line 72
                        echo "\t\t\t\t\t\t\t<br /><em class=\"small\">";
                        echo $this->env->getExtension('phpbb')->lang("PM_FROM_REMOVED_AUTHOR");
                        echo "</em>
\t\t\t\t\t\t";
                    }
                    // line 74
                    echo "
\t\t\t\t\t\t";
                    // line 75
                    if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                    if ($this->getAttribute($_messagerow_, "S_PM_REPORTED")) {
                        echo "<a href=\"";
                        if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                        echo $this->getAttribute($_messagerow_, "U_MCP_REPORT");
                        echo "\">";
                        if (isset($context["REPORTED_IMG"])) { $_REPORTED_IMG_ = $context["REPORTED_IMG"]; } else { $_REPORTED_IMG_ = null; }
                        echo $_REPORTED_IMG_;
                        echo "</a>";
                    }
                    echo " ";
                    if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                    echo $this->getAttribute($_messagerow_, "ATTACH_ICON_IMG");
                    echo "<br />
\t\t\t\t\t\t";
                    // line 76
                    if (isset($context["S_SHOW_RECIPIENTS"])) { $_S_SHOW_RECIPIENTS_ = $context["S_SHOW_RECIPIENTS"]; } else { $_S_SHOW_RECIPIENTS_ = null; }
                    if ($_S_SHOW_RECIPIENTS_) {
                        echo $this->env->getExtension('phpbb')->lang("MESSAGE_TO");
                        echo " ";
                        if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                        echo $this->getAttribute($_messagerow_, "RECIPIENTS");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("MESSAGE_BY_AUTHOR");
                        echo " ";
                        if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                        echo $this->getAttribute($_messagerow_, "MESSAGE_AUTHOR_FULL");
                        echo " &raquo; ";
                        if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                        echo $this->getAttribute($_messagerow_, "SENT_TIME");
                    }
                    // line 77
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t";
                    // line 80
                    if (isset($context["S_SHOW_RECIPIENTS"])) { $_S_SHOW_RECIPIENTS_ = $context["S_SHOW_RECIPIENTS"]; } else { $_S_SHOW_RECIPIENTS_ = null; }
                    if ($_S_SHOW_RECIPIENTS_) {
                        echo "<dd class=\"info\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("SENT_AT");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                        echo $this->getAttribute($_messagerow_, "SENT_TIME");
                        echo "</span></dd>";
                    }
                    // line 81
                    echo "\t\t\t\t\t";
                    if (isset($context["S_UNREAD"])) { $_S_UNREAD_ = $context["S_UNREAD"]; } else { $_S_UNREAD_ = null; }
                    if ($_S_UNREAD_) {
                        echo "<dd class=\"info\">";
                        if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                        if ($this->getAttribute($_messagerow_, "FOLDER")) {
                            echo "<a href=\"";
                            if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                            echo $this->getAttribute($_messagerow_, "U_FOLDER");
                            echo "\">";
                            if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                            echo $this->getAttribute($_messagerow_, "FOLDER");
                            echo "</a>";
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("UNKNOWN_FOLDER");
                        }
                        echo "</dd>";
                    }
                    // line 82
                    echo "\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"marked_msg_id[]\" value=\"";
                    if (isset($context["messagerow"])) { $_messagerow_ = $context["messagerow"]; } else { $_messagerow_ = null; }
                    echo $this->getAttribute($_messagerow_, "MESSAGE_ID");
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagerow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "
\t\t</ul>
\t";
            } else {
                // line 89
                echo "\t\t<p><strong>
\t\t\t";
                // line 90
                if (isset($context["S_COMPOSE_PM_VIEW"])) { $_S_COMPOSE_PM_VIEW_ = $context["S_COMPOSE_PM_VIEW"]; } else { $_S_COMPOSE_PM_VIEW_ = null; }
                if (isset($context["S_NO_AUTH_SEND_MESSAGE"])) { $_S_NO_AUTH_SEND_MESSAGE_ = $context["S_NO_AUTH_SEND_MESSAGE"]; } else { $_S_NO_AUTH_SEND_MESSAGE_ = null; }
                if (($_S_COMPOSE_PM_VIEW_ && $_S_NO_AUTH_SEND_MESSAGE_)) {
                    // line 91
                    echo "\t\t\t\t";
                    if (isset($context["S_USER_NEW"])) { $_S_USER_NEW_ = $context["S_USER_NEW"]; } else { $_S_USER_NEW_ = null; }
                    if ($_S_USER_NEW_) {
                        echo $this->env->getExtension('phpbb')->lang("USER_NEW_PERMISSION_DISALLOWED");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_AUTH_SEND_MESSAGE");
                    }
                    // line 92
                    echo "\t\t\t";
                } else {
                    // line 93
                    echo "\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("NO_MESSAGES");
                    echo "
\t\t\t";
                }
                // line 95
                echo "\t\t</strong></p>
\t";
            }
            // line 97
            echo "
\t";
            // line 98
            if (isset($context["FOLDER_CUR_MESSAGES"])) { $_FOLDER_CUR_MESSAGES_ = $context["FOLDER_CUR_MESSAGES"]; } else { $_FOLDER_CUR_MESSAGES_ = null; }
            if (($_FOLDER_CUR_MESSAGES_ != 0)) {
                // line 99
                echo "\t\t<fieldset class=\"display-actions\">
\t\t\t<div class=\"left-box\"><label for=\"export_option\">";
                // line 100
                echo $this->env->getExtension('phpbb')->lang("EXPORT_FOLDER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <select name=\"export_option\" id=\"export_option\"><option value=\"CSV\">";
                echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_CSV");
                echo "</option><option value=\"CSV_EXCEL\">";
                echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_CSV_EXCEL");
                echo "</option><option value=\"XML\">";
                echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_XML");
                echo "</option></select></label> <input class=\"button2\" type=\"submit\" name=\"submit_export\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" /><br /></div>
\t\t\t<select name=\"mark_option\">";
                // line 101
                if (isset($context["S_MARK_OPTIONS"])) { $_S_MARK_OPTIONS_ = $context["S_MARK_OPTIONS"]; } else { $_S_MARK_OPTIONS_ = null; }
                echo $_S_MARK_OPTIONS_;
                if (isset($context["S_MOVE_MARKED_OPTIONS"])) { $_S_MOVE_MARKED_OPTIONS_ = $context["S_MOVE_MARKED_OPTIONS"]; } else { $_S_MOVE_MARKED_OPTIONS_ = null; }
                echo $_S_MOVE_MARKED_OPTIONS_;
                echo "</select> <input class=\"button2\" type=\"submit\" name=\"submit_mark\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" />
\t\t\t<div><a href=\"#\" onclick=\"marklist('viewfolder', 'marked_msg', true); return false;\">";
                // line 102
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> &bull; <a href=\"#\" onclick=\"marklist('viewfolder', 'marked_msg', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></div>
\t\t</fieldset>
\t
\t\t<hr />
\t
\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
                // line 109
                if (isset($context["TOTAL_MESSAGES"])) { $_TOTAL_MESSAGES_ = $context["TOTAL_MESSAGES"]; } else { $_TOTAL_MESSAGES_ = null; }
                echo $_TOTAL_MESSAGES_;
                echo "
\t\t\t\t";
                // line 110
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
                    echo " 
\t\t\t\t\t";
                    // line 111
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
                    // line 112
                    echo "\t\t\t\t";
                } else {
                    echo " 
\t\t\t\t\t &bull; ";
                    // line 113
                    if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                    echo $_PAGE_NUMBER_;
                    echo "
\t\t\t\t";
                }
                // line 115
                echo "\t\t\t</div>
\t\t</div>
\t";
            }
            // line 118
            echo "
\t\t</div>
\t</div>

\t";
            // line 122
            if (isset($context["FOLDER_CUR_MESSAGES"])) { $_FOLDER_CUR_MESSAGES_ = $context["FOLDER_CUR_MESSAGES"]; } else { $_FOLDER_CUR_MESSAGES_ = null; }
            if (($_FOLDER_CUR_MESSAGES_ != 0)) {
                // line 123
                echo "\t<fieldset class=\"display-options\">
\t\t<label>";
                // line 124
                echo $this->env->getExtension('phpbb')->lang("DISPLAY");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
                echo $_S_SELECT_SORT_DAYS_;
                echo "</label>
\t\t<label>";
                // line 125
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo " ";
                if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
                echo $_S_SELECT_SORT_KEY_;
                echo "</label>
\t\t<label>";
                // line 126
                if (isset($context["S_SELECT_SORT_DIR"])) { $_S_SELECT_SORT_DIR_ = $context["S_SELECT_SORT_DIR"]; } else { $_S_SELECT_SORT_DIR_ = null; }
                echo $_S_SELECT_SORT_DIR_;
                echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 127
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
                // line 128
                if (isset($context["CUR_FOLDER_ID"])) { $_CUR_FOLDER_ID_ = $context["CUR_FOLDER_ID"]; } else { $_CUR_FOLDER_ID_ = null; }
                echo $_CUR_FOLDER_ID_;
                echo "\" />
\t</fieldset>
\t";
            }
            // line 131
            echo "
\t";
            // line 132
            $location = "ucp_pm_message_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("ucp_pm_message_footer.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 134
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("ucp_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewfolder.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 134,  503 => 132,  500 => 131,  493 => 128,  489 => 127,  484 => 126,  477 => 125,  469 => 124,  466 => 123,  463 => 122,  457 => 118,  452 => 115,  446 => 113,  441 => 112,  429 => 111,  424 => 110,  419 => 109,  407 => 102,  398 => 101,  385 => 100,  382 => 99,  379 => 98,  376 => 97,  372 => 95,  366 => 93,  363 => 92,  355 => 91,  351 => 90,  348 => 89,  343 => 86,  331 => 82,  312 => 81,  301 => 80,  296 => 77,  280 => 76,  264 => 75,  261 => 74,  255 => 72,  251 => 71,  241 => 69,  236 => 67,  228 => 66,  225 => 65,  221 => 63,  213 => 62,  202 => 61,  197 => 60,  181 => 59,  176 => 58,  166 => 56,  159 => 52,  155 => 51,  150 => 48,  147 => 47,  144 => 46,  134 => 43,  131 => 42,  128 => 41,  125 => 40,  118 => 37,  115 => 36,  112 => 35,  109 => 34,  100 => 29,  95 => 27,  83 => 19,  75 => 15,  69 => 12,  62 => 9,  57 => 8,  54 => 7,  51 => 6,  37 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
