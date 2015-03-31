<?php

/* posting_editor.html */
class __TwigTemplate_d6d0c298d41f363d914474d62ce21694 extends Twig_Template
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
        echo "<fieldset class=\"fields1\">
";
        // line 2
        if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
        if ($_ERROR_) {
            echo "<p class=\"error\">";
            if (isset($context["ERROR"])) { $_ERROR_ = $context["ERROR"]; } else { $_ERROR_ = null; }
            echo $_ERROR_;
            echo "</p>";
        }
        // line 3
        echo "
\t";
        // line 4
        if (isset($context["S_SHOW_TOPIC_ICONS"])) { $_S_SHOW_TOPIC_ICONS_ = $context["S_SHOW_TOPIC_ICONS"]; } else { $_S_SHOW_TOPIC_ICONS_ = null; }
        if (isset($context["S_SHOW_PM_ICONS"])) { $_S_SHOW_PM_ICONS_ = $context["S_SHOW_PM_ICONS"]; } else { $_S_SHOW_PM_ICONS_ = null; }
        if (($_S_SHOW_TOPIC_ICONS_ || $_S_SHOW_PM_ICONS_)) {
            // line 5
            echo "\t<dl>
\t\t<dt><label for=\"icon\">";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("ICON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\" /> ";
            // line 8
            if (isset($context["S_SHOW_TOPIC_ICONS"])) { $_S_SHOW_TOPIC_ICONS_ = $context["S_SHOW_TOPIC_ICONS"]; } else { $_S_SHOW_TOPIC_ICONS_ = null; }
            if ($_S_SHOW_TOPIC_ICONS_) {
                echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_PM_ICON");
            }
            echo "</label>
\t\t\t";
            // line 9
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "topic_icon"));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<label for=\"icon-";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_ID");
                echo "\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_ID");
                echo "\" value=\"";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_ID");
                echo "\" ";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "S_ICON_CHECKED");
                echo " tabindex=\"1\" /><img src=\"";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_IMG");
                echo "\" width=\"";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_WIDTH");
                echo "\" height=\"";
                if (isset($context["topic_icon"])) { $_topic_icon_ = $context["topic_icon"]; } else { $_topic_icon_ = null; }
                echo $this->getAttribute($_topic_icon_, "ICON_HEIGHT");
                echo "\" alt=\"\" title=\"\" /></label> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t</dd>
\t</dl>
\t";
        }
        // line 13
        echo "
\t";
        // line 14
        if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
        if (isset($context["S_DISPLAY_USERNAME"])) { $_S_DISPLAY_USERNAME_ = $context["S_DISPLAY_USERNAME"]; } else { $_S_DISPLAY_USERNAME_ = null; }
        if (((!$_S_PRIVMSGS_) && $_S_DISPLAY_USERNAME_)) {
            // line 15
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"username\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
            // line 17
            if (isset($context["USERNAME"])) { $_USERNAME_ = $context["USERNAME"]; } else { $_USERNAME_ = null; }
            echo $_USERNAME_;
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
        }
        // line 20
        echo "
\t";
        // line 21
        if (isset($context["posting_editor_subject_before"])) { $_posting_editor_subject_before_ = $context["posting_editor_subject_before"]; } else { $_posting_editor_subject_before_ = null; }
        // line 22
        echo "
\t";
        // line 23
        if (isset($context["S_POST_ACTION"])) { $_S_POST_ACTION_ = $context["S_POST_ACTION"]; } else { $_S_POST_ACTION_ = null; }
        if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
        if (isset($context["S_EDIT_DRAFT"])) { $_S_EDIT_DRAFT_ = $context["S_EDIT_DRAFT"]; } else { $_S_EDIT_DRAFT_ = null; }
        if ((($_S_POST_ACTION_ || $_S_PRIVMSGS_) || $_S_EDIT_DRAFT_)) {
            // line 24
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"subject\">";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"";
            // line 26
            if (isset($context["S_NEW_MESSAGE"])) { $_S_NEW_MESSAGE_ = $context["S_NEW_MESSAGE"]; } else { $_S_NEW_MESSAGE_ = null; }
            if ($_S_NEW_MESSAGE_) {
                echo "120";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            if (isset($context["SUBJECT"])) { $_SUBJECT_ = $context["SUBJECT"]; } else { $_SUBJECT_ = null; }
            echo $_SUBJECT_;
            if (isset($context["DRAFT_SUBJECT"])) { $_DRAFT_SUBJECT_ = $context["DRAFT_SUBJECT"]; } else { $_DRAFT_SUBJECT_ = null; }
            echo $_DRAFT_SUBJECT_;
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
            // line 28
            if (isset($context["CAPTCHA_TEMPLATE"])) { $_CAPTCHA_TEMPLATE_ = $context["CAPTCHA_TEMPLATE"]; } else { $_CAPTCHA_TEMPLATE_ = null; }
            if (isset($context["S_CONFIRM_CODE"])) { $_S_CONFIRM_CODE_ = $context["S_CONFIRM_CODE"]; } else { $_S_CONFIRM_CODE_ = null; }
            if (($_CAPTCHA_TEMPLATE_ && $_S_CONFIRM_CODE_)) {
                // line 29
                echo "\t\t";
                if (isset($context["CAPTCHA_TAB_INDEX"])) { $_CAPTCHA_TAB_INDEX_ = $context["CAPTCHA_TAB_INDEX"]; } else { $_CAPTCHA_TAB_INDEX_ = null; }
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 30
                echo "\t\t";
                if (isset($context["CAPTCHA_TEMPLATE"])) { $_CAPTCHA_TEMPLATE_ = $context["CAPTCHA_TEMPLATE"]; } else { $_CAPTCHA_TEMPLATE_ = null; }
                $location = (("" . $_CAPTCHA_TEMPLATE_) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $template = $this->env->resolveTemplate((("" . $_CAPTCHA_TEMPLATE_) . ""));
                $template->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 31
                echo "\t";
            }
            // line 32
            echo "\t";
        }
        // line 33
        echo "
\t";
        // line 34
        if (isset($context["posting_editor_subject_after"])) { $_posting_editor_subject_after_ = $context["posting_editor_subject_after"]; } else { $_posting_editor_subject_after_ = null; }
        // line 35
        echo "
\t";
        // line 36
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("posting_buttons.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 37
        echo "
\t<div id=\"smiley-box\">
\t\t";
        // line 39
        if (isset($context["S_SMILIES_ALLOWED"])) { $_S_SMILIES_ALLOWED_ = $context["S_SMILIES_ALLOWED"]; } else { $_S_SMILIES_ALLOWED_ = null; }
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (($_S_SMILIES_ALLOWED_ && twig_length_filter($this->env, $this->getAttribute($_loops_, "smiley")))) {
            // line 40
            echo "\t\t\t<strong>";
            echo $this->env->getExtension('phpbb')->lang("SMILIES");
            echo "</strong><br />
\t\t\t";
            // line 41
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "smiley"));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 42
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                if (isset($context["smiley"])) { $_smiley_ = $context["smiley"]; } else { $_smiley_ = null; }
                echo $this->getAttribute($_smiley_, "A_SMILEY_CODE");
                echo "', true); return false;\"><img src=\"";
                if (isset($context["smiley"])) { $_smiley_ = $context["smiley"]; } else { $_smiley_ = null; }
                echo $this->getAttribute($_smiley_, "SMILEY_IMG");
                echo "\" width=\"";
                if (isset($context["smiley"])) { $_smiley_ = $context["smiley"]; } else { $_smiley_ = null; }
                echo $this->getAttribute($_smiley_, "SMILEY_WIDTH");
                echo "\" height=\"";
                if (isset($context["smiley"])) { $_smiley_ = $context["smiley"]; } else { $_smiley_ = null; }
                echo $this->getAttribute($_smiley_, "SMILEY_HEIGHT");
                echo "\" alt=\"";
                if (isset($context["smiley"])) { $_smiley_ = $context["smiley"]; } else { $_smiley_ = null; }
                echo $this->getAttribute($_smiley_, "SMILEY_CODE");
                echo "\" title=\"";
                if (isset($context["smiley"])) { $_smiley_ = $context["smiley"]; } else { $_smiley_ = null; }
                echo $this->getAttribute($_smiley_, "SMILEY_DESC");
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t";
        }
        // line 45
        echo "\t\t";
        if (isset($context["S_SHOW_SMILEY_LINK"])) { $_S_SHOW_SMILEY_LINK_ = $context["S_SHOW_SMILEY_LINK"]; } else { $_S_SHOW_SMILEY_LINK_ = null; }
        if (isset($context["S_SMILIES_ALLOWED"])) { $_S_SMILIES_ALLOWED_ = $context["S_SMILIES_ALLOWED"]; } else { $_S_SMILIES_ALLOWED_ = null; }
        if (($_S_SHOW_SMILEY_LINK_ && $_S_SMILIES_ALLOWED_)) {
            // line 46
            echo "\t\t\t<br /><a href=\"";
            if (isset($context["U_MORE_SMILIES"])) { $_U_MORE_SMILIES_ = $context["U_MORE_SMILIES"]; } else { $_U_MORE_SMILIES_ = null; }
            echo $_U_MORE_SMILIES_;
            echo "\" onclick=\"popup(this.href, 750, 350, '_phpbbsmilies'); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("MORE_SMILIES");
            echo "</a>
\t\t";
        }
        // line 48
        echo "
\t\t";
        // line 49
        if (isset($context["BBCODE_STATUS"])) { $_BBCODE_STATUS_ = $context["BBCODE_STATUS"]; } else { $_BBCODE_STATUS_ = null; }
        if ($_BBCODE_STATUS_) {
            // line 50
            echo "\t\t<div class=\"bbcode-status\">
\t\t\t";
            // line 51
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "smiley"))) {
                echo "<hr />";
            }
            // line 52
            echo "\t\t\t";
            if (isset($context["BBCODE_STATUS"])) { $_BBCODE_STATUS_ = $context["BBCODE_STATUS"]; } else { $_BBCODE_STATUS_ = null; }
            echo $_BBCODE_STATUS_;
            echo "<br />
\t\t\t";
            // line 53
            if (isset($context["S_BBCODE_ALLOWED"])) { $_S_BBCODE_ALLOWED_ = $context["S_BBCODE_ALLOWED"]; } else { $_S_BBCODE_ALLOWED_ = null; }
            if ($_S_BBCODE_ALLOWED_) {
                // line 54
                echo "\t\t\t\t";
                if (isset($context["IMG_STATUS"])) { $_IMG_STATUS_ = $context["IMG_STATUS"]; } else { $_IMG_STATUS_ = null; }
                echo $_IMG_STATUS_;
                echo "<br />
\t\t\t\t";
                // line 55
                if (isset($context["FLASH_STATUS"])) { $_FLASH_STATUS_ = $context["FLASH_STATUS"]; } else { $_FLASH_STATUS_ = null; }
                echo $_FLASH_STATUS_;
                echo "<br />
\t\t\t\t";
                // line 56
                if (isset($context["URL_STATUS"])) { $_URL_STATUS_ = $context["URL_STATUS"]; } else { $_URL_STATUS_ = null; }
                echo $_URL_STATUS_;
                echo "<br />
\t\t\t";
            }
            // line 58
            echo "\t\t\t";
            if (isset($context["SMILIES_STATUS"])) { $_SMILIES_STATUS_ = $context["SMILIES_STATUS"]; } else { $_SMILIES_STATUS_ = null; }
            echo $_SMILIES_STATUS_;
            echo "
\t\t</div>
\t\t";
        }
        // line 61
        echo "\t\t";
        if (isset($context["S_EDIT_DRAFT"])) { $_S_EDIT_DRAFT_ = $context["S_EDIT_DRAFT"]; } else { $_S_EDIT_DRAFT_ = null; }
        if (isset($context["S_DISPLAY_REVIEW"])) { $_S_DISPLAY_REVIEW_ = $context["S_DISPLAY_REVIEW"]; } else { $_S_DISPLAY_REVIEW_ = null; }
        if (($_S_EDIT_DRAFT_ || $_S_DISPLAY_REVIEW_)) {
            // line 62
            echo "\t\t\t";
            if (isset($context["S_DISPLAY_REVIEW"])) { $_S_DISPLAY_REVIEW_ = $context["S_DISPLAY_REVIEW"]; } else { $_S_DISPLAY_REVIEW_ = null; }
            if ($_S_DISPLAY_REVIEW_) {
                echo "<hr />";
            }
            // line 63
            echo "\t\t\t";
            if (isset($context["S_EDIT_DRAFT"])) { $_S_EDIT_DRAFT_ = $context["S_EDIT_DRAFT"]; } else { $_S_EDIT_DRAFT_ = null; }
            if ($_S_EDIT_DRAFT_) {
                echo "<strong><a href=\"";
                if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
                echo $_S_UCP_ACTION_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 64
            echo "\t\t\t";
            if (isset($context["S_DISPLAY_REVIEW"])) { $_S_DISPLAY_REVIEW_ = $context["S_DISPLAY_REVIEW"]; } else { $_S_DISPLAY_REVIEW_ = null; }
            if ($_S_DISPLAY_REVIEW_) {
                echo "<strong><a href=\"#review\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 65
            echo "\t\t";
        }
        // line 66
        echo "\t</div>

\t";
        // line 68
        if (isset($context["posting_editor_message_before"])) { $_posting_editor_message_before_ = $context["posting_editor_message_before"]; } else { $_posting_editor_message_before_ = null; }
        // line 69
        echo "
\t<div id=\"message-box\">
\t\t<textarea ";
        // line 71
        if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
        if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
        if (isset($context["S_EDIT_DRAFT"])) { $_S_EDIT_DRAFT_ = $context["S_EDIT_DRAFT"]; } else { $_S_EDIT_DRAFT_ = null; }
        if ((($_S_UCP_ACTION_ && (!$_S_PRIVMSGS_)) && (!$_S_EDIT_DRAFT_))) {
            echo "name=\"signature\" id=\"signature\" style=\"height: 9em;\"";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " rows=\"15\" cols=\"76\" tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" class=\"inputbox\">";
        if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
        echo $_MESSAGE_;
        if (isset($context["DRAFT_MESSAGE"])) { $_DRAFT_MESSAGE_ = $context["DRAFT_MESSAGE"]; } else { $_DRAFT_MESSAGE_ = null; }
        echo $_DRAFT_MESSAGE_;
        if (isset($context["SIGNATURE"])) { $_SIGNATURE_ = $context["SIGNATURE"]; } else { $_SIGNATURE_ = null; }
        echo $_SIGNATURE_;
        echo "</textarea>
\t</div>

\t";
        // line 74
        if (isset($context["posting_editor_message_after"])) { $_posting_editor_message_after_ = $context["posting_editor_message_after"]; } else { $_posting_editor_message_after_ = null; }
        // line 75
        echo "\t</fieldset>

";
        // line 77
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if (($this->getAttribute($_definition_, "EXTRA_POSTING_OPTIONS") == 1)) {
            // line 78
            echo "
\t";
            // line 79
            if (isset($context["S_SHOW_DRAFTS"])) { $_S_SHOW_DRAFTS_ = $context["S_SHOW_DRAFTS"]; } else { $_S_SHOW_DRAFTS_ = null; }
            if ((!$_S_SHOW_DRAFTS_)) {
                // line 80
                echo "\t\t</div>
\t</div>
\t";
            }
            // line 83
            echo "
\t";
            // line 84
            if (isset($context["S_SHOW_DRAFTS"])) { $_S_SHOW_DRAFTS_ = $context["S_SHOW_DRAFTS"]; } else { $_S_SHOW_DRAFTS_ = null; }
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            if (((!$_S_SHOW_DRAFTS_) && ((!$this->getAttribute($_definition_, "SIG_EDIT")) == 1))) {
                // line 85
                echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
                // line 88
                if (isset($context["S_HIDDEN_ADDRESS_FIELD"])) { $_S_HIDDEN_ADDRESS_FIELD_ = $context["S_HIDDEN_ADDRESS_FIELD"]; } else { $_S_HIDDEN_ADDRESS_FIELD_ = null; }
                echo $_S_HIDDEN_ADDRESS_FIELD_;
                echo "
\t\t\t";
                // line 89
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t\t";
                // line 90
                if (isset($context["S_HAS_DRAFTS"])) { $_S_HAS_DRAFTS_ = $context["S_HAS_DRAFTS"]; } else { $_S_HAS_DRAFTS_ = null; }
                if ($_S_HAS_DRAFTS_) {
                    echo "<input type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                    echo "\" class=\"button2\" onclick=\"load_draft = true;\" />&nbsp; ";
                }
                // line 91
                echo "\t\t\t";
                if (isset($context["S_SAVE_ALLOWED"])) { $_S_SAVE_ALLOWED_ = $context["S_SAVE_ALLOWED"]; } else { $_S_SAVE_ALLOWED_ = null; }
                if ($_S_SAVE_ALLOWED_) {
                    echo "<input type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DRAFT");
                    echo "\" class=\"button2\" />&nbsp; ";
                }
                // line 92
                echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PREVIEW");
                echo "\" class=\"button1\"";
                if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
                if ((!$_S_PRIVMSGS_)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " />&nbsp;
\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                // line 93
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"button1 default-submit-action\" />&nbsp;

\t\t</fieldset>

\t\t</div>
\t</div>
\t";
            }
            // line 100
            echo "
\t";
            // line 101
            if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
            if (isset($context["S_SHOW_DRAFTS"])) { $_S_SHOW_DRAFTS_ = $context["S_SHOW_DRAFTS"]; } else { $_S_SHOW_DRAFTS_ = null; }
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            if ((((!$_S_PRIVMSGS_) && (!$_S_SHOW_DRAFTS_)) && ((!$this->getAttribute($_definition_, "SIG_EDIT")) == 1))) {
                // line 102
                echo "\t\t<div id=\"tabs\" class=\"sub-panels\" data-show-panel=\"";
                if (isset($context["SHOW_PANEL"])) { $_SHOW_PANEL_ = $context["SHOW_PANEL"]; } else { $_SHOW_PANEL_ = null; }
                if ($_SHOW_PANEL_) {
                    if (isset($context["SHOW_PANEL"])) { $_SHOW_PANEL_ = $context["SHOW_PANEL"]; } else { $_SHOW_PANEL_ = null; }
                    echo $_SHOW_PANEL_;
                } else {
                    echo "options-panel";
                }
                echo "\" role=\"tablist\">
\t\t\t<ul>
\t\t\t\t<li id=\"options-panel-tab\" class=\"tab activetab\"><a href=\"#tabs\" data-subpanel=\"options-panel\" role=\"tab\" aria-controls=\"options-panel\"><span>";
                // line 104
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo "</span></a></li>
\t\t\t\t";
                // line 105
                if (isset($context["S_SHOW_ATTACH_BOX"])) { $_S_SHOW_ATTACH_BOX_ = $context["S_SHOW_ATTACH_BOX"]; } else { $_S_SHOW_ATTACH_BOX_ = null; }
                if ($_S_SHOW_ATTACH_BOX_) {
                    // line 106
                    echo "\t\t\t\t\t<li id=\"attach-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"attach-panel\" role=\"tab\" aria-controls=\"attach-panel\">
\t\t\t\t\t\t\t";
                    // line 108
                    echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                    echo " <strong id=\"file-total-progress\"><strong id=\"file-total-progress-bar\"></strong></strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t";
                if (isset($context["S_SHOW_POLL_BOX"])) { $_S_SHOW_POLL_BOX_ = $context["S_SHOW_POLL_BOX"]; } else { $_S_SHOW_POLL_BOX_ = null; }
                if (isset($context["S_POLL_DELETE"])) { $_S_POLL_DELETE_ = $context["S_POLL_DELETE"]; } else { $_S_POLL_DELETE_ = null; }
                if (($_S_SHOW_POLL_BOX_ || $_S_POLL_DELETE_)) {
                    // line 113
                    echo "\t\t\t\t\t<li id=\"poll-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"poll-panel\" role=\"tab\" aria-controls=\"poll-panel\">";
                    // line 114
                    echo $this->env->getExtension('phpbb')->lang("ADD_POLL");
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 117
                echo "\t\t\t</ul>
\t\t</div>
\t";
            }
            // line 120
            echo "
\t";
            // line 121
            if (isset($context["S_SHOW_DRAFTS"])) { $_S_SHOW_DRAFTS_ = $context["S_SHOW_DRAFTS"]; } else { $_S_SHOW_DRAFTS_ = null; }
            if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
            if (((!$_S_SHOW_DRAFTS_) && ((!$this->getAttribute($_definition_, "SIG_EDIT")) == 1))) {
                // line 122
                echo "\t<div class=\"panel bg3\" id=\"options-panel\">
\t\t<div class=\"inner\">

\t\t<fieldset class=\"fields1\">
\t\t\t";
                // line 126
                if (isset($context["posting_editor_options_prepend"])) { $_posting_editor_options_prepend_ = $context["posting_editor_options_prepend"]; } else { $_posting_editor_options_prepend_ = null; }
                // line 127
                echo "\t\t\t";
                if (isset($context["S_BBCODE_ALLOWED"])) { $_S_BBCODE_ALLOWED_ = $context["S_BBCODE_ALLOWED"]; } else { $_S_BBCODE_ALLOWED_ = null; }
                if ($_S_BBCODE_ALLOWED_) {
                    // line 128
                    echo "\t\t\t\t<div><label for=\"disable_bbcode\"><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    if (isset($context["S_BBCODE_CHECKED"])) { $_S_BBCODE_CHECKED_ = $context["S_BBCODE_CHECKED"]; } else { $_S_BBCODE_CHECKED_ = null; }
                    echo $_S_BBCODE_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
                    echo "</label></div>
\t\t\t";
                }
                // line 130
                echo "\t\t\t";
                if (isset($context["S_SMILIES_ALLOWED"])) { $_S_SMILIES_ALLOWED_ = $context["S_SMILIES_ALLOWED"]; } else { $_S_SMILIES_ALLOWED_ = null; }
                if ($_S_SMILIES_ALLOWED_) {
                    // line 131
                    echo "\t\t\t\t<div><label for=\"disable_smilies\"><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    if (isset($context["S_SMILIES_CHECKED"])) { $_S_SMILIES_CHECKED_ = $context["S_SMILIES_CHECKED"]; } else { $_S_SMILIES_CHECKED_ = null; }
                    echo $_S_SMILIES_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
                    echo "</label></div>
\t\t\t";
                }
                // line 133
                echo "\t\t\t";
                if (isset($context["S_LINKS_ALLOWED"])) { $_S_LINKS_ALLOWED_ = $context["S_LINKS_ALLOWED"]; } else { $_S_LINKS_ALLOWED_ = null; }
                if ($_S_LINKS_ALLOWED_) {
                    // line 134
                    echo "\t\t\t\t<div><label for=\"disable_magic_url\"><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    if (isset($context["S_MAGIC_URL_CHECKED"])) { $_S_MAGIC_URL_CHECKED_ = $context["S_MAGIC_URL_CHECKED"]; } else { $_S_MAGIC_URL_CHECKED_ = null; }
                    echo $_S_MAGIC_URL_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
                    echo "</label></div>
\t\t\t";
                }
                // line 136
                echo "\t\t\t";
                if (isset($context["S_SIG_ALLOWED"])) { $_S_SIG_ALLOWED_ = $context["S_SIG_ALLOWED"]; } else { $_S_SIG_ALLOWED_ = null; }
                if ($_S_SIG_ALLOWED_) {
                    // line 137
                    echo "\t\t\t\t<div><label for=\"attach_sig\"><input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    if (isset($context["S_SIGNATURE_CHECKED"])) { $_S_SIGNATURE_CHECKED_ = $context["S_SIGNATURE_CHECKED"]; } else { $_S_SIGNATURE_CHECKED_ = null; }
                    echo $_S_SIGNATURE_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("ATTACH_SIG");
                    echo "</label></div>
\t\t\t";
                }
                // line 139
                echo "\t\t\t";
                if (isset($context["S_NOTIFY_ALLOWED"])) { $_S_NOTIFY_ALLOWED_ = $context["S_NOTIFY_ALLOWED"]; } else { $_S_NOTIFY_ALLOWED_ = null; }
                if ($_S_NOTIFY_ALLOWED_) {
                    // line 140
                    echo "\t\t\t\t<div><label for=\"notify\"><input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    if (isset($context["S_NOTIFY_CHECKED"])) { $_S_NOTIFY_CHECKED_ = $context["S_NOTIFY_CHECKED"]; } else { $_S_NOTIFY_CHECKED_ = null; }
                    echo $_S_NOTIFY_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_REPLY");
                    echo "</label></div>
\t\t\t";
                }
                // line 142
                echo "\t\t\t";
                if (isset($context["S_LOCK_TOPIC_ALLOWED"])) { $_S_LOCK_TOPIC_ALLOWED_ = $context["S_LOCK_TOPIC_ALLOWED"]; } else { $_S_LOCK_TOPIC_ALLOWED_ = null; }
                if ($_S_LOCK_TOPIC_ALLOWED_) {
                    // line 143
                    echo "\t\t\t\t<div><label for=\"lock_topic\"><input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    if (isset($context["S_LOCK_TOPIC_CHECKED"])) { $_S_LOCK_TOPIC_CHECKED_ = $context["S_LOCK_TOPIC_CHECKED"]; } else { $_S_LOCK_TOPIC_CHECKED_ = null; }
                    echo $_S_LOCK_TOPIC_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
                    echo "</label></div>
\t\t\t";
                }
                // line 145
                echo "\t\t\t";
                if (isset($context["S_LOCK_POST_ALLOWED"])) { $_S_LOCK_POST_ALLOWED_ = $context["S_LOCK_POST_ALLOWED"]; } else { $_S_LOCK_POST_ALLOWED_ = null; }
                if ($_S_LOCK_POST_ALLOWED_) {
                    // line 146
                    echo "\t\t\t\t<div><label for=\"lock_post\"><input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    if (isset($context["S_LOCK_POST_CHECKED"])) { $_S_LOCK_POST_CHECKED_ = $context["S_LOCK_POST_CHECKED"]; } else { $_S_LOCK_POST_CHECKED_ = null; }
                    echo $_S_LOCK_POST_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
                    echo " [";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
                    echo "]</label></div>
\t\t\t";
                }
                // line 148
                echo "
\t\t\t";
                // line 149
                if (isset($context["S_TYPE_TOGGLE"])) { $_S_TYPE_TOGGLE_ = $context["S_TYPE_TOGGLE"]; } else { $_S_TYPE_TOGGLE_ = null; }
                if (isset($context["S_TOPIC_TYPE_ANNOUNCE"])) { $_S_TOPIC_TYPE_ANNOUNCE_ = $context["S_TOPIC_TYPE_ANNOUNCE"]; } else { $_S_TOPIC_TYPE_ANNOUNCE_ = null; }
                if (isset($context["S_TOPIC_TYPE_STICKY"])) { $_S_TOPIC_TYPE_STICKY_ = $context["S_TOPIC_TYPE_STICKY"]; } else { $_S_TOPIC_TYPE_STICKY_ = null; }
                if ((($_S_TYPE_TOGGLE_ || $_S_TOPIC_TYPE_ANNOUNCE_) || $_S_TOPIC_TYPE_STICKY_)) {
                    // line 150
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 152
                echo "
\t\t\t";
                // line 153
                if (isset($context["S_TYPE_TOGGLE"])) { $_S_TYPE_TOGGLE_ = $context["S_TYPE_TOGGLE"]; } else { $_S_TYPE_TOGGLE_ = null; }
                if ($_S_TYPE_TOGGLE_) {
                    // line 154
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_type-0\">";
                    // line 155
                    if (isset($context["S_EDIT_POST"])) { $_S_EDIT_POST_ = $context["S_EDIT_POST"]; } else { $_S_EDIT_POST_ = null; }
                    if ($_S_EDIT_POST_) {
                        echo $this->env->getExtension('phpbb')->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("POST_TOPIC_AS");
                    }
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>";
                    // line 156
                    if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "topic_type"));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        echo "<label for=\"topic_type-";
                        if (isset($context["topic_type"])) { $_topic_type_ = $context["topic_type"]; } else { $_topic_type_ = null; }
                        echo $this->getAttribute($_topic_type_, "VALUE");
                        echo "\"><input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        if (isset($context["topic_type"])) { $_topic_type_ = $context["topic_type"]; } else { $_topic_type_ = null; }
                        echo $this->getAttribute($_topic_type_, "VALUE");
                        echo "\" value=\"";
                        if (isset($context["topic_type"])) { $_topic_type_ = $context["topic_type"]; } else { $_topic_type_ = null; }
                        echo $this->getAttribute($_topic_type_, "VALUE");
                        echo "\"";
                        if (isset($context["topic_type"])) { $_topic_type_ = $context["topic_type"]; } else { $_topic_type_ = null; }
                        echo $this->getAttribute($_topic_type_, "S_CHECKED");
                        echo " />";
                        if (isset($context["topic_type"])) { $_topic_type_ = $context["topic_type"]; } else { $_topic_type_ = null; }
                        echo $this->getAttribute($_topic_type_, "L_TOPIC_TYPE");
                        echo "</label> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 159
                echo "
\t\t\t";
                // line 160
                if (isset($context["S_TOPIC_TYPE_ANNOUNCE"])) { $_S_TOPIC_TYPE_ANNOUNCE_ = $context["S_TOPIC_TYPE_ANNOUNCE"]; } else { $_S_TOPIC_TYPE_ANNOUNCE_ = null; }
                if (isset($context["S_TOPIC_TYPE_STICKY"])) { $_S_TOPIC_TYPE_STICKY_ = $context["S_TOPIC_TYPE_STICKY"]; } else { $_S_TOPIC_TYPE_STICKY_ = null; }
                if (($_S_TOPIC_TYPE_ANNOUNCE_ || $_S_TOPIC_TYPE_STICKY_)) {
                    // line 161
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_time_limit\">";
                    // line 162
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><label for=\"topic_time_limit\"><input type=\"number\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" size=\"3\" maxlength=\"3\" value=\"";
                    // line 163
                    if (isset($context["TOPIC_TIME_LIMIT"])) { $_TOPIC_TIME_LIMIT_ = $context["TOPIC_TIME_LIMIT"]; } else { $_TOPIC_TIME_LIMIT_ = null; }
                    echo $_TOPIC_TIME_LIMIT_;
                    echo "\" class=\"inputbox autowidth\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("DAYS");
                    echo "</label></dd>
\t\t\t\t<dd>";
                    // line 164
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 167
                echo "
\t\t\t";
                // line 168
                if (isset($context["S_SOFTDELETE_ALLOWED"])) { $_S_SOFTDELETE_ALLOWED_ = $context["S_SOFTDELETE_ALLOWED"]; } else { $_S_SOFTDELETE_ALLOWED_ = null; }
                if (isset($context["S_DELETE_ALLOWED"])) { $_S_DELETE_ALLOWED_ = $context["S_DELETE_ALLOWED"]; } else { $_S_DELETE_ALLOWED_ = null; }
                if (($_S_SOFTDELETE_ALLOWED_ || $_S_DELETE_ALLOWED_)) {
                    // line 169
                    echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete\">";
                    // line 171
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd><label for=\"delete\"><input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    // line 172
                    if (isset($context["S_SOFTDELETE_CHECKED"])) { $_S_SOFTDELETE_CHECKED_ = $context["S_SOFTDELETE_CHECKED"]; } else { $_S_SOFTDELETE_CHECKED_ = null; }
                    echo $_S_SOFTDELETE_CHECKED_;
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_WARN");
                    echo "</label></dd>
\t\t\t\t\t";
                    // line 173
                    if (isset($context["S_DELETE_ALLOWED"])) { $_S_DELETE_ALLOWED_ = $context["S_DELETE_ALLOWED"]; } else { $_S_DELETE_ALLOWED_ = null; }
                    if (isset($context["S_SOFTDELETE_ALLOWED"])) { $_S_SOFTDELETE_ALLOWED_ = $context["S_SOFTDELETE_ALLOWED"]; } else { $_S_SOFTDELETE_ALLOWED_ = null; }
                    if (($_S_DELETE_ALLOWED_ && $_S_SOFTDELETE_ALLOWED_)) {
                        // line 174
                        echo "\t\t\t\t\t\t<dd><label for=\"delete_permanent\"><input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                        echo "</label></dd>
\t\t\t\t\t";
                    }
                    // line 176
                    echo "\t\t\t\t</dl>
\t\t\t";
                }
                // line 178
                echo "
\t\t\t";
                // line 179
                if (isset($context["S_EDIT_REASON"])) { $_S_EDIT_REASON_ = $context["S_EDIT_REASON"]; } else { $_S_EDIT_REASON_ = null; }
                if ($_S_EDIT_REASON_) {
                    // line 180
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"edit_reason\">";
                    // line 181
                    echo $this->env->getExtension('phpbb')->lang("EDIT_REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    // line 182
                    if (isset($context["EDIT_REASON"])) { $_EDIT_REASON_ = $context["EDIT_REASON"]; } else { $_EDIT_REASON_ = null; }
                    echo $_EDIT_REASON_;
                    echo "\" class=\"inputbox\" /></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 185
                echo "\t\t</fieldset>
\t\t";
            }
            // line 187
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  762 => 187,  758 => 185,  751 => 182,  746 => 181,  743 => 180,  740 => 179,  737 => 178,  733 => 176,  727 => 174,  723 => 173,  716 => 172,  711 => 171,  707 => 169,  703 => 168,  700 => 167,  694 => 164,  687 => 163,  682 => 162,  679 => 161,  675 => 160,  672 => 159,  643 => 156,  633 => 155,  630 => 154,  627 => 153,  624 => 152,  620 => 150,  615 => 149,  612 => 148,  601 => 146,  597 => 145,  588 => 143,  584 => 142,  575 => 140,  571 => 139,  562 => 137,  558 => 136,  549 => 134,  545 => 133,  536 => 131,  532 => 130,  523 => 128,  519 => 127,  517 => 126,  511 => 122,  507 => 121,  504 => 120,  499 => 117,  493 => 114,  490 => 113,  485 => 112,  478 => 108,  474 => 106,  471 => 105,  467 => 104,  455 => 102,  450 => 101,  447 => 100,  437 => 93,  427 => 92,  419 => 91,  412 => 90,  407 => 89,  402 => 88,  397 => 85,  393 => 84,  390 => 83,  385 => 80,  382 => 79,  379 => 78,  376 => 77,  372 => 75,  370 => 74,  350 => 71,  346 => 69,  344 => 68,  340 => 66,  337 => 65,  329 => 64,  318 => 63,  312 => 62,  307 => 61,  299 => 58,  293 => 56,  288 => 55,  282 => 54,  279 => 53,  273 => 52,  268 => 51,  265 => 50,  262 => 49,  259 => 48,  250 => 46,  245 => 45,  242 => 44,  217 => 42,  212 => 41,  207 => 40,  203 => 39,  199 => 37,  187 => 36,  184 => 35,  182 => 34,  179 => 33,  176 => 32,  173 => 31,  158 => 30,  153 => 29,  149 => 28,  134 => 26,  129 => 25,  126 => 24,  121 => 23,  118 => 22,  116 => 21,  113 => 20,  101 => 16,  98 => 15,  94 => 14,  91 => 13,  86 => 10,  46 => 8,  40 => 6,  37 => 5,  33 => 4,  30 => 3,  22 => 2,  175 => 51,  167 => 47,  163 => 46,  159 => 45,  155 => 44,  150 => 43,  141 => 36,  132 => 34,  128 => 33,  119 => 31,  115 => 30,  106 => 17,  103 => 27,  97 => 25,  84 => 24,  80 => 23,  75 => 21,  69 => 17,  60 => 12,  55 => 9,  51 => 8,  48 => 7,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
