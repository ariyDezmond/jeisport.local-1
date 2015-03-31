<?php

/* search_results.html */
class __TwigTemplate_2bb5116ef960f4845be7f8b388ae1807 extends Twig_Template
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
<h2 class=\"searchresults-title\">";
        // line 3
        if (isset($context["SEARCH_TITLE"])) { $_SEARCH_TITLE_ = $context["SEARCH_TITLE"]; } else { $_SEARCH_TITLE_ = null; }
        if ($_SEARCH_TITLE_) {
            if (isset($context["SEARCH_TITLE"])) { $_SEARCH_TITLE_ = $context["SEARCH_TITLE"]; } else { $_SEARCH_TITLE_ = null; }
            echo $_SEARCH_TITLE_;
        } else {
            if (isset($context["SEARCH_MATCHES"])) { $_SEARCH_MATCHES_ = $context["SEARCH_MATCHES"]; } else { $_SEARCH_MATCHES_ = null; }
            echo $_SEARCH_MATCHES_;
        }
        if (isset($context["SEARCH_WORDS"])) { $_SEARCH_WORDS_ = $context["SEARCH_WORDS"]; } else { $_SEARCH_WORDS_ = null; }
        if ($_SEARCH_WORDS_) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <a href=\"";
            if (isset($context["U_SEARCH_WORDS"])) { $_U_SEARCH_WORDS_ = $context["U_SEARCH_WORDS"]; } else { $_U_SEARCH_WORDS_ = null; }
            echo $_U_SEARCH_WORDS_;
            echo "\">";
            if (isset($context["SEARCH_WORDS"])) { $_SEARCH_WORDS_ = $context["SEARCH_WORDS"]; } else { $_SEARCH_WORDS_ = null; }
            echo $_SEARCH_WORDS_;
            echo "</a>";
        }
        echo "</h2>
";
        // line 4
        if (isset($context["SEARCHED_QUERY"])) { $_SEARCHED_QUERY_ = $context["SEARCHED_QUERY"]; } else { $_SEARCHED_QUERY_ = null; }
        if ($_SEARCHED_QUERY_) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("SEARCHED_QUERY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            if (isset($context["SEARCHED_QUERY"])) { $_SEARCHED_QUERY_ = $context["SEARCHED_QUERY"]; } else { $_SEARCHED_QUERY_ = null; }
            echo $_SEARCHED_QUERY_;
            echo "</strong></p>";
        }
        // line 5
        if (isset($context["IGNORED_WORDS"])) { $_IGNORED_WORDS_ = $context["IGNORED_WORDS"]; } else { $_IGNORED_WORDS_ = null; }
        if ($_IGNORED_WORDS_) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("IGNORED_TERMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            if (isset($context["IGNORED_WORDS"])) { $_IGNORED_WORDS_ = $context["IGNORED_WORDS"]; } else { $_IGNORED_WORDS_ = null; }
            echo $_IGNORED_WORDS_;
            echo "</strong></p>";
        }
        // line 6
        if (isset($context["PHRASE_SEARCH_DISABLED"])) { $_PHRASE_SEARCH_DISABLED_ = $context["PHRASE_SEARCH_DISABLED"]; } else { $_PHRASE_SEARCH_DISABLED_ = null; }
        if ($_PHRASE_SEARCH_DISABLED_) {
            echo " <p><strong>";
            echo $this->env->getExtension('phpbb')->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 7
        echo "
";
        // line 8
        if (isset($context["SEARCH_TOPIC"])) { $_SEARCH_TOPIC_ = $context["SEARCH_TOPIC"]; } else { $_SEARCH_TOPIC_ = null; }
        if ($_SEARCH_TOPIC_) {
            // line 9
            echo "\t<p><a class=\"arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\" href=\"";
            if (isset($context["U_SEARCH_TOPIC"])) { $_U_SEARCH_TOPIC_ = $context["U_SEARCH_TOPIC"]; } else { $_U_SEARCH_TOPIC_ = null; }
            echo $_U_SEARCH_TOPIC_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } else {
            // line 11
            echo "\t<p><a class=\"arrow-";
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo "\" href=\"";
            if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
            echo $_U_SEARCH_;
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 13
        echo "
";
        // line 14
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["SEARCH_MATCHES"])) { $_SEARCH_MATCHES_ = $context["SEARCH_MATCHES"]; } else { $_SEARCH_MATCHES_ = null; }
        if (isset($context["TOTAL_MATCHES"])) { $_TOTAL_MATCHES_ = $context["TOTAL_MATCHES"]; } else { $_TOTAL_MATCHES_ = null; }
        if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
        if ((((twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination")) || $_SEARCH_MATCHES_) || $_TOTAL_MATCHES_) || $_PAGE_NUMBER_)) {
            // line 15
            echo "\t<div class=\"action-bar top\">

\t";
            // line 17
            if (isset($context["TOTAL_MATCHES"])) { $_TOTAL_MATCHES_ = $context["TOTAL_MATCHES"]; } else { $_TOTAL_MATCHES_ = null; }
            if (($_TOTAL_MATCHES_ > 0)) {
                // line 18
                echo "\t\t<div class=\"search-box\">
\t\t\t<form method=\"post\" action=\"";
                // line 19
                if (isset($context["S_SEARCH_ACTION"])) { $_S_SEARCH_ACTION_ = $context["S_SEARCH_ACTION"]; } else { $_S_SEARCH_ACTION_ = null; }
                echo $_S_SEARCH_ACTION_;
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\" type=\"search\" name=\"add_keywords\" id=\"add_keywords\" value=\"\" placeholder=\"";
                // line 21
                echo $this->env->getExtension('phpbb')->lang("SEARCH_IN_RESULTS");
                echo "\" />
\t\t\t\t<button class=\"button icon-button search-icon\" type=\"submit\" title=\"";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</button>
\t\t\t\t<a href=\"";
                // line 23
                if (isset($context["U_SEARCH"])) { $_U_SEARCH_ = $context["U_SEARCH"]; } else { $_U_SEARCH_ = null; }
                echo $_U_SEARCH_;
                echo "\" class=\"button icon-button search-adv-icon\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                echo "</a>
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
            }
            // line 28
            echo "
\t\t<div class=\"pagination\">
\t\t\t";
            // line 30
            if (isset($context["SEARCH_MATCHES"])) { $_SEARCH_MATCHES_ = $context["SEARCH_MATCHES"]; } else { $_SEARCH_MATCHES_ = null; }
            echo $_SEARCH_MATCHES_;
            echo "
\t\t\t";
            // line 31
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
                // line 32
                echo "\t\t\t\t";
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
                // line 33
                echo "\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t &bull; ";
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t";
            }
            // line 36
            echo "\t\t</div>
\t</div>
";
        }
        // line 39
        echo "
";
        // line 40
        if (isset($context["S_SHOW_TOPICS"])) { $_S_SHOW_TOPICS_ = $context["S_SHOW_TOPICS"]; } else { $_S_SHOW_TOPICS_ = null; }
        if ($_S_SHOW_TOPICS_) {
            // line 41
            echo "
\t";
            // line 42
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "searchresults"))) {
                // line 43
                echo "\t<div class=\"forumbg\">

\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 49
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 50
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 52
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">

\t\t";
                // line 58
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "searchresults"));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 59
                    echo "\t\t\t";
                    if (isset($context["search_results_topic_before"])) { $_search_results_topic_before_ = $context["search_results_topic_before"]; } else { $_search_results_topic_before_ = null; }
                    // line 60
                    echo "\t\t\t<li class=\"row";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if (($this->getAttribute($_searchresults_, "S_ROW_COUNT") % 2 == 0)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl class=\"icon ";
                    // line 61
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_IMG_STYLE");
                    echo "\">
\t\t\t\t\t<dt ";
                    // line 62
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if ($this->getAttribute($_searchresults_, "TOPIC_ICON_IMG")) {
                        echo "style=\"background-image: url(";
                        if (isset($context["T_ICONS_PATH"])) { $_T_ICONS_PATH_ = $context["T_ICONS_PATH"]; } else { $_T_ICONS_PATH_ = null; }
                        echo $_T_ICONS_PATH_;
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "TOPIC_ICON_IMG");
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo " title=\"";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_FOLDER_IMG_ALT");
                    echo "\">
\t\t\t\t\t\t";
                    // line 63
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
                    if (($this->getAttribute($_searchresults_, "S_UNREAD_TOPIC") && (!$_S_IS_BOT_))) {
                        echo "<a href=\"";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "U_NEWEST_POST");
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 64
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t\t";
                    // line 66
                    if (isset($context["topiclist_row_prepend"])) { $_topiclist_row_prepend_ = $context["topiclist_row_prepend"]; } else { $_topiclist_row_prepend_ = null; }
                    // line 67
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
                    if (($this->getAttribute($_searchresults_, "S_UNREAD_TOPIC") && (!$_S_IS_BOT_))) {
                        echo "<a href=\"";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "U_NEWEST_POST");
                        echo "\">";
                        if (isset($context["NEWEST_POST_IMG"])) { $_NEWEST_POST_IMG_ = $context["NEWEST_POST_IMG"]; } else { $_NEWEST_POST_IMG_ = null; }
                        echo $_NEWEST_POST_IMG_;
                        echo "</a> ";
                    }
                    // line 68
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "U_VIEW_TOPIC");
                    echo "\" class=\"topictitle\">";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_TITLE");
                    echo "</a> ";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "ATTACH_ICON_IMG");
                    echo "
\t\t\t\t\t\t\t";
                    // line 69
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if (($this->getAttribute($_searchresults_, "S_TOPIC_UNAPPROVED") || $this->getAttribute($_searchresults_, "S_POSTS_UNAPPROVED"))) {
                        echo "<a href=\"";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "U_MCP_QUEUE");
                        echo "\">";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "UNAPPROVED_IMG");
                        echo "</a> ";
                    }
                    // line 70
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if ($this->getAttribute($_searchresults_, "S_TOPIC_DELETED")) {
                        echo "<a href=\"";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "U_MCP_QUEUE");
                        echo "\">";
                        if (isset($context["DELETED_IMG"])) { $_DELETED_IMG_ = $context["DELETED_IMG"]; } else { $_DELETED_IMG_ = null; }
                        echo $_DELETED_IMG_;
                        echo "</a> ";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if ($this->getAttribute($_searchresults_, "S_TOPIC_REPORTED")) {
                        echo "<a href=\"";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "U_MCP_REPORT");
                        echo "\">";
                        if (isset($context["REPORTED_IMG"])) { $_REPORTED_IMG_ = $context["REPORTED_IMG"]; } else { $_REPORTED_IMG_ = null; }
                        echo $_REPORTED_IMG_;
                        echo "</a>";
                    }
                    echo "<br />
\t\t\t\t\t\t\t";
                    // line 72
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if (twig_length_filter($this->env, $this->getAttribute($_searchresults_, "pagination"))) {
                        // line 73
                        echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                        // line 75
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_searchresults_, "pagination"));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 76
                            echo "\t\t\t\t\t\t\t\t\t";
                            if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                            if ($this->getAttribute($_pagination_, "S_IS_PREV")) {
                                // line 77
                                echo "\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute($_pagination_, "S_IS_CURRENT")) {
                                echo "<li class=\"active\"><span>";
                                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                                echo $this->getAttribute($_pagination_, "PAGE_NUMBER");
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute($_pagination_, "S_IS_ELLIPSIS")) {
                                // line 78
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute($_pagination_, "S_IS_NEXT")) {
                                // line 80
                                echo "\t\t\t\t\t\t\t\t\t";
                            } else {
                                echo "<li><a href=\"";
                                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                                echo $this->getAttribute($_pagination_, "PAGE_URL");
                                echo "\">";
                                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                                echo $this->getAttribute($_pagination_, "PAGE_NUMBER");
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 82
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 83
                        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 86
                    echo "\t\t\t\t\t\t\t";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    if ($this->getAttribute($_searchresults_, "S_HAS_POLL")) {
                        if (isset($context["POLL_IMG"])) { $_POLL_IMG_ = $context["POLL_IMG"]; } else { $_POLL_IMG_ = null; }
                        echo $_POLL_IMG_;
                        echo " ";
                    }
                    // line 87
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_AUTHOR_FULL");
                    echo " &raquo; ";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "FIRST_POST_TIME");
                    echo " &raquo; ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "U_VIEW_FORUM");
                    echo "\">";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "FORUM_TITLE");
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 88
                    if (isset($context["topiclist_row_append"])) { $_topiclist_row_append_ = $context["topiclist_row_append"]; } else { $_topiclist_row_append_ = null; }
                    // line 89
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 92
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_REPLIES");
                    echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                    // line 93
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_VIEWS");
                    echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 95
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "LAST_POST_AUTHOR_FULL");
                    echo "
\t\t\t\t\t\t";
                    // line 96
                    if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
                    if ((!$_S_IS_BOT_)) {
                        echo "<a href=\"";
                        if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                        echo $this->getAttribute($_searchresults_, "U_LAST_POST");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\">";
                        if (isset($context["LAST_POST_IMG"])) { $_LAST_POST_IMG_ = $context["LAST_POST_IMG"]; } else { $_LAST_POST_IMG_ = null; }
                        echo $_LAST_POST_IMG_;
                        echo "</a> ";
                    }
                    echo "<br />";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "LAST_POST_TIME");
                    echo "<br /> </span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t\t";
                    // line 100
                    if (isset($context["search_results_topic_after"])) { $_search_results_topic_after_ = $context["search_results_topic_after"]; } else { $_search_results_topic_after_ = null; }
                    // line 101
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "\t\t</ul>

\t\t</div>
\t</div>
\t";
            } else {
                // line 107
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 109
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 113
            echo "
";
        } else {
            // line 115
            echo "
\t";
            // line 116
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "searchresults"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 117
                echo "\t\t";
                if (isset($context["search_results_post_before"])) { $_search_results_post_before_ = $context["search_results_post_before"]; } else { $_search_results_post_before_ = null; }
                // line 118
                echo "\t\t<div class=\"search post ";
                if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                if (($this->getAttribute($_searchresults_, "S_ROW_COUNT") % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                if ($this->getAttribute($_searchresults_, "S_POST_REPORTED")) {
                    echo " reported";
                }
                echo "\">
\t\t\t<div class=\"inner\">

\t";
                // line 121
                if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                if ($this->getAttribute($_searchresults_, "S_IGNORE_POST")) {
                    // line 122
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 123
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "L_IGNORE_POST");
                    echo "
\t\t</div>
\t";
                } else {
                    // line 126
                    echo "\t\t<dl class=\"postprofile\">
\t\t\t";
                    // line 127
                    if (isset($context["search_results_postprofile_before"])) { $_search_results_postprofile_before_ = $context["search_results_postprofile_before"]; } else { $_search_results_postprofile_before_ = null; }
                    // line 128
                    echo "\t\t\t<dt class=\"author\">";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "POST_AUTHOR_FULL");
                    echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
                    // line 129
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "POST_DATE");
                    echo "</dd>
\t\t\t<dd>";
                    // line 130
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "U_VIEW_FORUM");
                    echo "\">";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "FORUM_TITLE");
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 131
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "U_VIEW_TOPIC");
                    echo "\">";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_TITLE");
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 132
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_REPLIES");
                    echo "</strong></dd>
\t\t\t<dd>";
                    // line 133
                    echo $this->env->getExtension('phpbb')->lang("VIEWS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "TOPIC_VIEWS");
                    echo "</strong></dd>
\t\t\t";
                    // line 134
                    if (isset($context["search_results_postprofile_after"])) { $_search_results_postprofile_after_ = $context["search_results_postprofile_after"]; } else { $_search_results_postprofile_after_ = null; }
                    // line 135
                    echo "\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t<h3><a href=\"";
                    // line 138
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "U_VIEW_POST");
                    echo "\">";
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "POST_SUBJECT");
                    echo "</a></h3>
\t\t\t<div class=\"content\">";
                    // line 139
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "MESSAGE");
                    echo "</div>
\t\t</div>
\t";
                }
                // line 142
                echo "
\t";
                // line 143
                if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                if ((!$this->getAttribute($_searchresults_, "S_IGNORE_POST"))) {
                    // line 144
                    echo "\t\t<ul class=\"searchresults\">
\t\t\t<li ><a href=\"";
                    // line 145
                    if (isset($context["searchresults"])) { $_searchresults_ = $context["searchresults"]; } else { $_searchresults_ = null; }
                    echo $this->getAttribute($_searchresults_, "U_VIEW_POST");
                    echo "\" class=\"arrow-";
                    if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
                    echo $_S_CONTENT_FLOW_END_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_POST");
                    echo "</a></li>
\t\t</ul>
\t";
                }
                // line 148
                echo "
\t\t\t</div>
\t\t</div>
\t\t";
                // line 151
                if (isset($context["search_results_post_after"])) { $_search_results_post_after_ = $context["search_results_post_after"]; } else { $_search_results_post_after_ = null; }
                // line 152
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 153
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 155
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 160
        echo "
";
        // line 161
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
        if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
        if ((((twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination")) || twig_length_filter($this->env, $this->getAttribute($_loops_, "searchresults"))) || $_S_SELECT_SORT_KEY_) || $_S_SELECT_SORT_DAYS_)) {
            // line 162
            echo "\t<form method=\"post\" action=\"";
            if (isset($context["S_SEARCH_ACTION"])) { $_S_SEARCH_ACTION_ = $context["S_SEARCH_ACTION"]; } else { $_S_SEARCH_ACTION_ = null; }
            echo $_S_SEARCH_ACTION_;
            echo "\">

\t<fieldset class=\"display-options\">
\t\t";
            // line 165
            if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
            if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
            if (($_S_SELECT_SORT_DAYS_ || $_S_SELECT_SORT_KEY_)) {
                // line 166
                echo "\t\t\t<label>";
                if (isset($context["S_SHOW_TOPICS"])) { $_S_SHOW_TOPICS_ = $context["S_SHOW_TOPICS"]; } else { $_S_SHOW_TOPICS_ = null; }
                if ($_S_SHOW_TOPICS_) {
                    echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                    echo "</label><label>";
                }
                echo " ";
                if (isset($context["S_SELECT_SORT_DAYS"])) { $_S_SELECT_SORT_DAYS_ = $context["S_SELECT_SORT_DAYS"]; } else { $_S_SELECT_SORT_DAYS_ = null; }
                echo $_S_SELECT_SORT_DAYS_;
                if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
                if ($_S_SELECT_SORT_KEY_) {
                    echo "</label> <label>";
                    if (isset($context["S_SELECT_SORT_KEY"])) { $_S_SELECT_SORT_KEY_ = $context["S_SELECT_SORT_KEY"]; } else { $_S_SELECT_SORT_KEY_ = null; }
                    echo $_S_SELECT_SORT_KEY_;
                    echo "</label>
\t\t\t<label>";
                    // line 167
                    if (isset($context["S_SELECT_SORT_DIR"])) { $_S_SELECT_SORT_DIR_ = $context["S_SELECT_SORT_DIR"]; } else { $_S_SELECT_SORT_DIR_ = null; }
                    echo $_S_SELECT_SORT_DIR_;
                }
                echo "</label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 168
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 170
            echo "\t</fieldset>

\t</form>

\t<hr />
";
        }
        // line 176
        echo "
";
        // line 177
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
        if (((twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination")) || twig_length_filter($this->env, $this->getAttribute($_loops_, "searchresults"))) || $_PAGE_NUMBER_)) {
            // line 178
            echo "<div class=\"action-bar bottom\">
\t<div class=\"pagination\">
\t\t";
            // line 180
            if (isset($context["SEARCH_MATCHES"])) { $_SEARCH_MATCHES_ = $context["SEARCH_MATCHES"]; } else { $_SEARCH_MATCHES_ = null; }
            echo $_SEARCH_MATCHES_;
            echo "
\t\t";
            // line 181
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
                // line 182
                echo "\t\t\t";
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
                // line 183
                echo "\t\t";
            } else {
                // line 184
                echo "\t\t\t &bull; ";
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t";
            }
            // line 186
            echo "\t</div>
</div>
";
        }
        // line 189
        echo "
";
        // line 190
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("jumpbox.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 191
        echo "
";
        // line 192
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
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  808 => 192,  805 => 191,  793 => 190,  790 => 189,  785 => 186,  778 => 184,  775 => 183,  762 => 182,  759 => 181,  754 => 180,  750 => 178,  746 => 177,  743 => 176,  735 => 170,  730 => 168,  724 => 167,  705 => 166,  701 => 165,  693 => 162,  688 => 161,  685 => 160,  674 => 155,  670 => 153,  665 => 152,  663 => 151,  658 => 148,  646 => 145,  643 => 144,  640 => 143,  637 => 142,  630 => 139,  622 => 138,  617 => 135,  615 => 134,  607 => 133,  599 => 132,  588 => 131,  577 => 130,  572 => 129,  564 => 128,  562 => 127,  559 => 126,  552 => 123,  549 => 122,  546 => 121,  530 => 118,  527 => 117,  521 => 116,  518 => 115,  514 => 113,  507 => 109,  503 => 107,  496 => 102,  490 => 101,  488 => 100,  467 => 96,  460 => 95,  454 => 93,  449 => 92,  444 => 89,  442 => 88,  423 => 87,  415 => 86,  410 => 83,  404 => 82,  392 => 80,  386 => 78,  377 => 77,  373 => 76,  368 => 75,  364 => 73,  361 => 72,  347 => 71,  335 => 70,  324 => 69,  312 => 68,  299 => 67,  297 => 66,  293 => 64,  284 => 63,  269 => 62,  264 => 61,  254 => 60,  251 => 59,  246 => 58,  237 => 52,  233 => 51,  229 => 50,  225 => 49,  217 => 43,  214 => 42,  211 => 41,  208 => 40,  205 => 39,  200 => 36,  193 => 34,  190 => 33,  177 => 32,  174 => 31,  169 => 30,  165 => 28,  152 => 23,  146 => 22,  142 => 21,  136 => 19,  133 => 18,  130 => 17,  126 => 15,  120 => 14,  117 => 13,  103 => 11,  91 => 9,  88 => 8,  85 => 7,  78 => 6,  67 => 5,  56 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
