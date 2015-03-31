<?php

/* ucp_main_bookmarks.html */
class __TwigTemplate_5aa0b910a43a3253ee889d2a08cc438f extends Twig_Template
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
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        if (isset($context["S_UCP_ACTION"])) { $_S_UCP_ACTION_ = $context["S_UCP_ACTION"]; } else { $_S_UCP_ACTION_ = null; }
        echo $_S_UCP_ACTION_;
        echo "\"";
        if (isset($context["S_FORM_ENCTYPE"])) { $_S_FORM_ENCTYPE_ = $context["S_FORM_ENCTYPE"]; } else { $_S_FORM_ENCTYPE_ = null; }
        echo $_S_FORM_ENCTYPE_;
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("BOOKMARKS_EXPLAIN");
        echo "</p>

";
        // line 12
        if (isset($context["S_NO_DISPLAY_BOOKMARKS"])) { $_S_NO_DISPLAY_BOOKMARKS_ = $context["S_NO_DISPLAY_BOOKMARKS"]; } else { $_S_NO_DISPLAY_BOOKMARKS_ = null; }
        if ($_S_NO_DISPLAY_BOOKMARKS_) {
            // line 13
            echo "\t<p class=\"error\">";
            echo $this->env->getExtension('phpbb')->lang("BOOKMARKS_DISABLED");
            echo "</p>
";
        } else {
            // line 15
            echo "
";
            // line 16
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "topicrow"))) {
                // line 17
                echo "\t<ul class=\"topiclist missing-column\">
\t\t<li class=\"header\">
\t\t\t<dl class=\"icon\">
\t\t\t\t<dt><div class=\"list-inner\">";
                // line 20
                echo $this->env->getExtension('phpbb')->lang("BOOKMARKS");
                echo "</div></dt>
\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 21
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t<dd class=\"mark\">";
                // line 22
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</dd>
\t\t\t</dl>
\t\t</li>
\t</ul>
\t<ul class=\"topiclist cplist missing-column\">

\t";
                // line 28
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "topicrow"));
                foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                    // line 29
                    echo "\t\t<li class=\"row";
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    if ($this->getAttribute($_topicrow_, "S_TOPIC_REPORTED")) {
                        echo " reported";
                    } elseif (($this->getAttribute($_topicrow_, "S_ROW_COUNT") % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t";
                    // line 30
                    if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                    if ($this->getAttribute($_topicrow_, "S_DELETED_TOPIC")) {
                        // line 31
                        echo "\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\"><strong>";
                        // line 32
                        echo $this->env->getExtension('phpbb')->lang("DELETED_TOPIC");
                        echo "</strong></div></dt>
\t\t\t\t\t<dd class=\"lastpost\"><span>&nbsp;</span></dd>
\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"t[";
                        // line 34
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "TOPIC_ID");
                        echo "]\" id=\"t";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "TOPIC_ID");
                        echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t";
                    } else {
                        // line 37
                        echo "\t\t\t<dl class=\"icon ";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "TOPIC_IMG_STYLE");
                        echo "\">
\t\t\t\t<dt";
                        // line 38
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        if ($this->getAttribute($_topicrow_, "TOPIC_ICON_IMG")) {
                            echo " style=\"background-image: url(";
                            if (isset($context["T_ICONS_PATH"])) { $_T_ICONS_PATH_ = $context["T_ICONS_PATH"]; } else { $_T_ICONS_PATH_ = null; }
                            echo $_T_ICONS_PATH_;
                            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                            echo $this->getAttribute($_topicrow_, "TOPIC_ICON_IMG");
                            echo "); background-repeat: no-repeat;\"";
                        }
                        echo " title=\"";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "TOPIC_FOLDER_IMG_ALT");
                        echo "\">
\t\t\t\t\t";
                        // line 39
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        if ($this->getAttribute($_topicrow_, "S_UNREAD_TOPIC")) {
                            echo "<a href=\"";
                            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                            echo $this->getAttribute($_topicrow_, "U_NEWEST_POST");
                            echo "\" class=\"icon-link\"></a>";
                        }
                        // line 40
                        echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                        // line 41
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        if ($this->getAttribute($_topicrow_, "S_UNREAD_TOPIC")) {
                            echo "<a href=\"";
                            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                            echo $this->getAttribute($_topicrow_, "U_NEWEST_POST");
                            echo "\">";
                            if (isset($context["NEWEST_POST_IMG"])) { $_NEWEST_POST_IMG_ = $context["NEWEST_POST_IMG"]; } else { $_NEWEST_POST_IMG_ = null; }
                            echo $_NEWEST_POST_IMG_;
                            echo "</a> ";
                        }
                        echo "<a href=\"";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "U_VIEW_TOPIC");
                        echo "\" class=\"topictitle\">";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "TOPIC_TITLE");
                        echo "</a>
\t\t\t\t\t\t";
                        // line 42
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        if (($this->getAttribute($_topicrow_, "S_TOPIC_UNAPPROVED") || $this->getAttribute($_topicrow_, "S_POSTS_UNAPPROVED"))) {
                            echo "<a href=\"";
                            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                            echo $this->getAttribute($_topicrow_, "U_MCP_QUEUE");
                            echo "\">";
                            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                            echo $this->getAttribute($_topicrow_, "UNAPPROVED_IMG");
                            echo "</a> ";
                        }
                        // line 43
                        echo "\t\t\t\t\t\t";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        if ($this->getAttribute($_topicrow_, "S_TOPIC_REPORTED")) {
                            echo "<a href=\"";
                            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                            echo $this->getAttribute($_topicrow_, "U_MCP_REPORT");
                            echo "\">";
                            if (isset($context["REPORTED_IMG"])) { $_REPORTED_IMG_ = $context["REPORTED_IMG"]; } else { $_REPORTED_IMG_ = null; }
                            echo $_REPORTED_IMG_;
                            echo "</a>";
                        }
                        echo "<br />
\t\t\t\t\t\t";
                        // line 44
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        if (twig_length_filter($this->env, $this->getAttribute($_topicrow_, "pagination"))) {
                            // line 45
                            echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                            // line 47
                            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_topicrow_, "pagination"));
                            foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                                // line 48
                                echo "\t\t\t\t\t\t\t\t";
                                if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                                if ($this->getAttribute($_pagination_, "S_IS_PREV")) {
                                    // line 49
                                    echo "\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute($_pagination_, "S_IS_CURRENT")) {
                                    echo "<li class=\"active\"><span>";
                                    if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                                    echo $this->getAttribute($_pagination_, "PAGE_NUMBER");
                                    echo "</span></li>
\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute($_pagination_, "S_IS_ELLIPSIS")) {
                                    // line 50
                                    echo "<li class=\"ellipsis\"><span>";
                                    echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                    echo "</span></li>
\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute($_pagination_, "S_IS_NEXT")) {
                                    // line 52
                                    echo "\t\t\t\t\t\t\t\t";
                                } else {
                                    echo "<li><a href=\"";
                                    if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                                    echo $this->getAttribute($_pagination_, "PAGE_URL");
                                    echo "\">";
                                    if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
                                    echo $this->getAttribute($_pagination_, "PAGE_NUMBER");
                                    echo "</a></li>
\t\t\t\t\t\t\t\t";
                                }
                                // line 54
                                echo "\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 55
                            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                        }
                        // line 58
                        echo "\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
                        // line 59
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        if ($this->getAttribute($_topicrow_, "ATTACH_ICON_IMG")) {
                            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                            echo $this->getAttribute($_topicrow_, "ATTACH_ICON_IMG");
                            echo " ";
                        }
                        // line 60
                        echo "\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "TOPIC_AUTHOR_FULL");
                        echo " &raquo; ";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "FIRST_POST_TIME");
                        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                        // line 63
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        if ($this->getAttribute($_topicrow_, "ATTACH_ICON_IMG")) {
                            if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                            echo $this->getAttribute($_topicrow_, "ATTACH_ICON_IMG");
                            echo " ";
                        }
                        // line 64
                        echo "\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "LAST_POST_AUTHOR_FULL");
                        echo " &laquo;
\t\t\t\t\t\t\t<a href=\"";
                        // line 65
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "U_LAST_POST");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\">";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "LAST_POST_TIME");
                        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
                        // line 69
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo " </dfn>";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "LAST_POST_AUTHOR_FULL");
                        echo "
\t\t\t\t\t<a href=\"";
                        // line 70
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "U_LAST_POST");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\">";
                        if (isset($context["LAST_POST_IMG"])) { $_LAST_POST_IMG_ = $context["LAST_POST_IMG"]; } else { $_LAST_POST_IMG_ = null; }
                        echo $_LAST_POST_IMG_;
                        echo "</a> <br />";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "LAST_POST_TIME");
                        echo "</span>
\t\t\t\t</dd>
\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"t[";
                        // line 72
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "TOPIC_ID");
                        echo "]\" id=\"t";
                        if (isset($context["topicrow"])) { $_topicrow_ = $context["topicrow"]; } else { $_topicrow_ = null; }
                        echo $this->getAttribute($_topicrow_, "TOPIC_ID");
                        echo "\" /></dd>
\t\t\t</dl>
\t\t\t";
                    }
                    // line 75
                    echo "\t\t</li>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "\t</ul>

\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
                // line 81
                if (isset($context["TOTAL_TOPICS"])) { $_TOTAL_TOPICS_ = $context["TOTAL_TOPICS"]; } else { $_TOTAL_TOPICS_ = null; }
                echo $_TOTAL_TOPICS_;
                echo "
\t\t\t";
                // line 82
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
                    echo " 
\t\t\t\t";
                    // line 83
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
                    // line 84
                    echo "\t\t\t";
                } else {
                    echo " 
\t\t\t\t &bull; ";
                    // line 85
                    if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                    echo $_PAGE_NUMBER_;
                    echo "
\t\t\t";
                }
                // line 87
                echo "\t\t</div>
\t</div>

";
            } else {
                // line 91
                echo "\t<p><strong>";
                echo $this->env->getExtension('phpbb')->lang("NO_BOOKMARKS");
                echo "</strong></p>
";
            }
            // line 93
            echo "
";
        }
        // line 95
        echo "
\t</div>
</div>

";
        // line 99
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (isset($context["S_NO_DISPLAY_BOOKMARKS"])) { $_S_NO_DISPLAY_BOOKMARKS_ = $context["S_NO_DISPLAY_BOOKMARKS"]; } else { $_S_NO_DISPLAY_BOOKMARKS_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_loops_, "topicrow")) && (!$_S_NO_DISPLAY_BOOKMARKS_))) {
            // line 100
            echo "\t<fieldset class=\"display-actions\">
\t\t<input type=\"submit\" name=\"unbookmark\" value=\"";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("REMOVE_BOOKMARK_MARKED");
            echo "\" class=\"button2\" />
\t\t<div><a href=\"#\" onclick=\"marklist('ucp', '', true); return false;\">";
            // line 102
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('ucp', '', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
\t\t";
            // line 103
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
";
        }
        // line 106
        echo "</form>

";
        // line 108
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
        return "ucp_main_bookmarks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 108,  439 => 106,  432 => 103,  426 => 102,  422 => 101,  419 => 100,  415 => 99,  409 => 95,  405 => 93,  399 => 91,  393 => 87,  387 => 85,  382 => 84,  370 => 83,  365 => 82,  360 => 81,  354 => 77,  347 => 75,  337 => 72,  323 => 70,  314 => 69,  301 => 65,  291 => 64,  284 => 63,  271 => 60,  264 => 59,  261 => 58,  256 => 55,  250 => 54,  238 => 52,  232 => 50,  223 => 49,  219 => 48,  214 => 47,  210 => 45,  207 => 44,  193 => 43,  182 => 42,  163 => 41,  160 => 40,  152 => 39,  137 => 38,  131 => 37,  121 => 34,  116 => 32,  113 => 31,  110 => 30,  98 => 29,  93 => 28,  84 => 22,  80 => 21,  76 => 20,  71 => 17,  68 => 16,  65 => 15,  59 => 13,  56 => 12,  51 => 10,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
