<?php

/* mcp_front.html */
class __TwigTemplate_9350bae35bc2d1ab7d6565ce8e3369c9 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("mcp_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2>";
        // line 3
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        echo "</h2>

";
        // line 5
        if (isset($context["S_SHOW_UNAPPROVED"])) { $_S_SHOW_UNAPPROVED_ = $context["S_SHOW_UNAPPROVED"]; } else { $_S_SHOW_UNAPPROVED_ = null; }
        if ($_S_SHOW_UNAPPROVED_) {
            // line 6
            echo "
\t<form id=\"mcp_queue\" method=\"post\" action=\"";
            // line 7
            if (isset($context["S_MCP_QUEUE_ACTION"])) { $_S_MCP_QUEUE_ACTION_ = $context["S_MCP_QUEUE_ACTION"]; } else { $_S_MCP_QUEUE_ACTION_ = null; }
            echo $_S_MCP_QUEUE_ACTION_;
            echo "\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("LATEST_UNAPPROVED");
            echo "</h3>
\t\t<p>";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("UNAPPROVED_TOTAL");
            echo "</p>

\t\t";
            // line 15
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "unapproved"))) {
                // line 16
                echo "\t\t\t<ul class=\"topiclist missing-column\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 19
                echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " &amp; ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist missing-column responsive-show-all\">

\t\t\t";
                // line 26
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "unapproved"));
                foreach ($context['_seq'] as $context["_key"] => $context["unapproved"]) {
                    // line 27
                    echo "\t\t\t<li class=\"row";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    if (($this->getAttribute($_unapproved_, "S_ROW_COUNT") % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 31
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "U_POST_DETAILS");
                    echo "\" class=\"topictitle\">";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "SUBJECT");
                    echo "</a> ";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "ATTACH_ICON_IMG");
                    echo "<br />
\t\t\t\t\t\t\t";
                    // line 32
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "AUTHOR_FULL");
                    echo " &raquo; ";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "POST_TIME");
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\"><span>
\t\t\t\t\t\t";
                    // line 36
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "U_TOPIC");
                    echo "\">";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "TOPIC_TITLE");
                    echo "</a> [<a href=\"";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "U_MCP_TOPIC");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("MODERATE");
                    echo "</a>]<br />
\t\t\t\t\t\t";
                    // line 37
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    if ($this->getAttribute($_unapproved_, "U_FORUM")) {
                        echo "<a href=\"";
                        if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                        echo $this->getAttribute($_unapproved_, "U_FORUM");
                        echo "\">";
                        if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                        echo $this->getAttribute($_unapproved_, "FORUM_NAME");
                        echo "</a>";
                    } else {
                        if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                        echo $this->getAttribute($_unapproved_, "FORUM_NAME");
                    }
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    if ($this->getAttribute($_unapproved_, "U_MCP_FORUM")) {
                        echo " [<a href=\"";
                        if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                        echo $this->getAttribute($_unapproved_, "U_MCP_FORUM");
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("MODERATE");
                        echo "</a>]";
                    }
                    echo "</span>
\t\t\t\t\t</dd>

\t\t\t \t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"post_id_list[]\" value=\"";
                    // line 40
                    if (isset($context["unapproved"])) { $_unapproved_ = $context["unapproved"]; } else { $_unapproved_ = null; }
                    echo $this->getAttribute($_unapproved_, "POST_ID");
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unapproved'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "\t\t\t</ul>
\t\t";
            }
            // line 46
            echo "
\t\t</div>
\t";
            // line 48
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</div>

\t";
            // line 51
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "unapproved"))) {
                // line 52
                echo "\t<fieldset class=\"display-actions\">
\t\t";
                // line 53
                if (isset($context["S_HIDDEN_FIELDS"])) { $_S_HIDDEN_FIELDS_ = $context["S_HIDDEN_FIELDS"]; } else { $_S_HIDDEN_FIELDS_ = null; }
                echo $_S_HIDDEN_FIELDS_;
                echo "
\t\t<input class=\"button2\" type=\"submit\" name=\"action[disapprove]\" value=\"";
                // line 54
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" />&nbsp;
\t\t<input class=\"button1\" type=\"submit\" name=\"action[approve]\" value=\"";
                // line 55
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" />
\t\t<div><a href=\"#\" onclick=\"marklist('mcp_queue', 'post_id_list', true); return false;\">";
                // line 56
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('mcp_queue', 'post_id_list', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></div>
\t</fieldset>
\t";
            }
            // line 59
            echo "\t\t</form>
";
        }
        // line 61
        echo "
";
        // line 62
        if (isset($context["S_SHOW_REPORTS"])) { $_S_SHOW_REPORTS_ = $context["S_SHOW_REPORTS"]; } else { $_S_SHOW_REPORTS_ = null; }
        if ($_S_SHOW_REPORTS_) {
            // line 63
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("LATEST_REPORTED");
            echo "</h3>
\t\t<p>";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("REPORTS_TOTAL");
            echo "</p>

\t\t";
            // line 69
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "report"))) {
                // line 70
                echo "\t\t\t<ul class=\"topiclist two-long-columns\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 73
                echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 74
                echo $this->env->getExtension('phpbb')->lang("REPORTER");
                echo " &amp; ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist two-long-columns responsive-show-all\">

\t\t\t";
                // line 80
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "report"));
                foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                    // line 81
                    echo "\t\t\t<li class=\"row";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    if (($this->getAttribute($_report_, "S_ROW_COUNT") % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 85
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "U_POST_DETAILS");
                    echo "#reports\" class=\"topictitle\">";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "SUBJECT");
                    echo "</a> ";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "ATTACH_ICON_IMG");
                    echo "<br />
\t\t\t\t\t\t\t<span>";
                    // line 86
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "AUTHOR_FULL");
                    echo " &raquo; ";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "POST_TIME");
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\">
\t\t\t\t\t\t<span>";
                    // line 90
                    echo $this->env->getExtension('phpbb')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "REPORTER_FULL");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("REPORTED_ON_DATE");
                    echo " ";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "REPORT_TIME");
                    echo "<br />
\t\t\t\t\t\t";
                    // line 91
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "U_FORUM");
                    echo "\">";
                    if (isset($context["report"])) { $_report_ = $context["report"]; } else { $_report_ = null; }
                    echo $this->getAttribute($_report_, "FORUM_NAME");
                    echo "</a></span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "\t\t\t</ul>
\t\t";
            }
            // line 98
            echo "
\t\t</div>
\t</div>
";
        }
        // line 102
        echo "
";
        // line 103
        if (isset($context["S_SHOW_PM_REPORTS"])) { $_S_SHOW_PM_REPORTS_ = $context["S_SHOW_PM_REPORTS"]; } else { $_S_SHOW_PM_REPORTS_ = null; }
        if ($_S_SHOW_PM_REPORTS_) {
            // line 104
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 107
            echo $this->env->getExtension('phpbb')->lang("LATEST_REPORTED_PMS");
            echo "</h3>
\t\t<p>";
            // line 108
            echo $this->env->getExtension('phpbb')->lang("PM_REPORTS_TOTAL");
            echo "</p>

\t\t";
            // line 110
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pm_report"))) {
                // line 111
                echo "\t\t\t<ul class=\"topiclist two-long-columns\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 114
                echo $this->env->getExtension('phpbb')->lang("VIEW_DETAILS");
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"moderation\"><span>";
                // line 115
                echo $this->env->getExtension('phpbb')->lang("REPORTER");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<ul class=\"topiclist cplist two-long-columns responsive-show-all\">

\t\t\t";
                // line 121
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "pm_report"));
                foreach ($context['_seq'] as $context["_key"] => $context["pm_report"]) {
                    // line 122
                    echo "\t\t\t<li class=\"row";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    if (($this->getAttribute($_pm_report_, "S_ROW_COUNT") % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl>
\t\t\t\t\t<dt>
\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 126
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "U_PM_DETAILS");
                    echo "\" class=\"topictitle\">";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "PM_SUBJECT");
                    echo "</a> ";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "ATTACH_ICON_IMG");
                    echo "<br />
\t\t\t\t\t\t\t<span>";
                    // line 127
                    echo $this->env->getExtension('phpbb')->lang("MESSAGE_BY_AUTHOR");
                    echo " ";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "PM_AUTHOR_FULL");
                    echo " &raquo; ";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "PM_TIME");
                    echo "</span><br />
\t\t\t\t\t\t\t<span>";
                    // line 128
                    echo $this->env->getExtension('phpbb')->lang("MESSAGE_TO");
                    echo " ";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "RECIPIENTS");
                    echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"moderation\">
\t\t\t\t\t\t<span>";
                    // line 132
                    echo $this->env->getExtension('phpbb')->lang("REPORTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "REPORTER_FULL");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("REPORTED_ON_DATE");
                    echo " ";
                    if (isset($context["pm_report"])) { $_pm_report_ = $context["pm_report"]; } else { $_pm_report_ = null; }
                    echo $this->getAttribute($_pm_report_, "REPORT_TIME");
                    echo "</span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "\t\t\t</ul>
\t\t";
            }
            // line 139
            echo "
\t\t</div>
\t</div>
";
        }
        // line 143
        echo "
";
        // line 144
        if (isset($context["S_SHOW_LOGS"])) { $_S_SHOW_LOGS_ = $context["S_SHOW_LOGS"]; } else { $_S_SHOW_LOGS_ = null; }
        if ($_S_SHOW_LOGS_) {
            // line 145
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 148
            echo $this->env->getExtension('phpbb')->lang("LATEST_LOGS");
            echo "</h3>

\t\t<table class=\"table1\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\">";
            // line 153
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 154
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 155
            echo $this->env->getExtension('phpbb')->lang("IP");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 156
            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 157
            echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOGS");
            echo "</th>
\t\t\t<th class=\"name\">";
            // line 158
            echo $this->env->getExtension('phpbb')->lang("TIME");
            echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
            // line 162
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "log"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 163
                echo "\t\t<tr class=\"";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (($this->getAttribute($_log_, "S_ROW_COUNT") % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t<td>";
                // line 164
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "ACTION");
                echo "</td>
\t\t\t<td><span>";
                // line 165
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "USERNAME");
                echo "</span></td>
\t\t\t<td><span>";
                // line 166
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "IP");
                echo "</span></td>
\t\t\t<td><span>";
                // line 167
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if ($this->getAttribute($_log_, "U_VIEW_TOPIC")) {
                    echo "<a href=\"";
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo $this->getAttribute($_log_, "U_VIEW_TOPIC");
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC");
                    echo "</a>";
                }
                echo "&nbsp;</span></td>
\t\t\t<td><span>";
                // line 168
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if ($this->getAttribute($_log_, "U_VIEWLOGS")) {
                    echo "<a href=\"";
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo $this->getAttribute($_log_, "U_VIEWLOGS");
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_TOPIC_LOGS");
                    echo "</a>";
                }
                echo "&nbsp;</span></td>
\t\t\t<td><span>";
                // line 169
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo $this->getAttribute($_log_, "TIME");
                echo "</span></td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 172
                echo "\t\t<tr>
\t\t\t<td colspan=\"6\">";
                // line 173
                echo $this->env->getExtension('phpbb')->lang("NO_ENTRIES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "\t\t</tbody>
\t\t</table>

\t\t</div>
\t</div>
";
        }
        // line 182
        echo "
";
        // line 183
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("mcp_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_front.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 183,  616 => 182,  608 => 176,  599 => 173,  596 => 172,  587 => 169,  575 => 168,  561 => 167,  556 => 166,  551 => 165,  546 => 164,  536 => 163,  530 => 162,  523 => 158,  519 => 157,  515 => 156,  511 => 155,  507 => 154,  503 => 153,  495 => 148,  490 => 145,  487 => 144,  484 => 143,  478 => 139,  474 => 137,  453 => 132,  443 => 128,  433 => 127,  422 => 126,  409 => 122,  404 => 121,  395 => 115,  391 => 114,  386 => 111,  383 => 110,  378 => 108,  374 => 107,  369 => 104,  366 => 103,  363 => 102,  357 => 98,  353 => 96,  335 => 91,  321 => 90,  306 => 86,  295 => 85,  282 => 81,  277 => 80,  266 => 74,  262 => 73,  257 => 70,  254 => 69,  249 => 67,  245 => 66,  240 => 63,  237 => 62,  234 => 61,  230 => 59,  222 => 56,  218 => 55,  214 => 54,  209 => 53,  206 => 52,  203 => 51,  196 => 48,  192 => 46,  188 => 44,  177 => 40,  147 => 37,  131 => 36,  116 => 32,  105 => 31,  92 => 27,  87 => 26,  76 => 20,  72 => 19,  67 => 16,  64 => 15,  59 => 13,  55 => 12,  46 => 7,  43 => 6,  40 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
