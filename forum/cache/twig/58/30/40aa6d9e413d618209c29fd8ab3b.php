<?php

/* acp_email.html */
class __TwigTemplate_583040aa6d9e413d618209c29fd8ab3b extends Twig_Template
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

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("ACP_MASS_EMAIL");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("ACP_MASS_EMAIL_EXPLAIN");
        echo "</p>

";
        // line 9
        if (isset($context["S_WARNING"])) { $_S_WARNING_ = $context["S_WARNING"]; } else { $_S_WARNING_ = null; }
        if ($_S_WARNING_) {
            // line 10
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 12
            if (isset($context["WARNING_MSG"])) { $_WARNING_MSG_ = $context["WARNING_MSG"]; } else { $_WARNING_MSG_ = null; }
            echo $_WARNING_MSG_;
            echo "</p>
\t</div>
";
        }
        // line 15
        echo "
<form id=\"acp_email\" method=\"post\" action=\"";
        // line 16
        if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
        echo $_U_ACTION_;
        echo "\">

<fieldset>
\t<legend>";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("COMPOSE");
        echo "</legend>
<dl>
\t<dt><label for=\"group\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("SEND_TO_GROUP");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><select id=\"group\" name=\"g\">";
        // line 22
        if (isset($context["S_GROUP_OPTIONS"])) { $_S_GROUP_OPTIONS_ = $context["S_GROUP_OPTIONS"]; } else { $_S_GROUP_OPTIONS_ = null; }
        echo $_S_GROUP_OPTIONS_;
        echo "</select></dd>
</dl>
<dl>
\t<dt><label for=\"usernames\">";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("SEND_TO_USERS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("SEND_TO_USERS_EXPLAIN");
        echo "</span></dt>
\t<dd><textarea name=\"usernames\" id=\"usernames\" rows=\"5\" cols=\"40\">";
        // line 26
        if (isset($context["USERNAMES"])) { $_USERNAMES_ = $context["USERNAMES"]; } else { $_USERNAMES_ = null; }
        echo $_USERNAMES_;
        echo "</textarea></dd>
\t<dd>[ <a href=\"";
        // line 27
        if (isset($context["U_FIND_USERNAME"])) { $_U_FIND_USERNAME_ = $context["U_FIND_USERNAME"]; } else { $_U_FIND_USERNAME_ = null; }
        echo $_U_FIND_USERNAME_;
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</a> ]</dd>
</dl>
<dl>
\t<dt><label for=\"subject\">";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("SUBJECT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><input name=\"subject\" type=\"text\" id=\"subject\" value=\"";
        // line 31
        if (isset($context["SUBJECT"])) { $_SUBJECT_ = $context["SUBJECT"]; } else { $_SUBJECT_ = null; }
        echo $_SUBJECT_;
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"message\">";
        // line 34
        echo $this->env->getExtension('phpbb')->lang("MASS_MESSAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("MASS_MESSAGE_EXPLAIN");
        echo "</span></dt>
\t<dd><textarea id=\"message\" name=\"message\" rows=\"10\" cols=\"60\">";
        // line 35
        if (isset($context["MESSAGE"])) { $_MESSAGE_ = $context["MESSAGE"]; } else { $_MESSAGE_ = null; }
        echo $_MESSAGE_;
        echo "</textarea></dd>
</dl>
<dl>
\t<dt><label for=\"priority\">";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("MAIL_PRIORITY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><select id=\"priority\" name=\"mail_priority_flag\">";
        // line 39
        if (isset($context["S_PRIORITY_OPTIONS"])) { $_S_PRIORITY_OPTIONS_ = $context["S_PRIORITY_OPTIONS"]; } else { $_S_PRIORITY_OPTIONS_ = null; }
        echo $_S_PRIORITY_OPTIONS_;
        echo "</select></dd>
</dl>
<dl>
\t<dt><label for=\"banned\">";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("MAIL_BANNED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("MAIL_BANNED_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"banned\" name=\"mail_banned_flag\" type=\"checkbox\" class=\"radio\" /></dd>
</dl>
<dl>
\t<dt><label for=\"send\">";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("SEND_IMMEDIATELY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><input id=\"send\" type=\"checkbox\" class=\"radio\" name=\"send_immediately\" checked=\"checked\" /></dd>
</dl>

";
        // line 50
        if (isset($context["acp_email_options_after"])) { $_acp_email_options_after_ = $context["acp_email_options_after"]; } else { $_acp_email_options_after_ = null; }
        // line 51
        echo "
<p class=\"submit-buttons\">
\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 53
        echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL");
        echo "\" />&nbsp;
\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
</p>
";
        // line 56
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "
</fieldset>
</form>

";
        // line 60
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
        return "acp_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 60,  182 => 56,  177 => 54,  173 => 53,  169 => 51,  167 => 50,  159 => 46,  149 => 42,  142 => 39,  137 => 38,  130 => 35,  123 => 34,  116 => 31,  111 => 30,  102 => 27,  97 => 26,  90 => 25,  83 => 22,  78 => 21,  73 => 19,  66 => 16,  63 => 15,  56 => 12,  52 => 11,  49 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
