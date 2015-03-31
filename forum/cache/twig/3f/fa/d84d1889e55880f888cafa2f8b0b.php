<?php

/* memberlist_body.html */
class __TwigTemplate_3ffad84d1889e55880f888cafa2f8b0b extends Twig_Template
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
        if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
        if ($_S_IN_SEARCH_POPUP_) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("simple_header.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("memberlist_search.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            if (isset($context["S_MODE_ACTION"])) { $_S_MODE_ACTION_ = $context["S_MODE_ACTION"]; } else { $_S_MODE_ACTION_ = null; }
            echo $_S_MODE_ACTION_;
            echo "\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            if (isset($context["S_FORM_NAME"])) { $_S_FORM_NAME_ = $context["S_FORM_NAME"]; } else { $_S_FORM_NAME_ = null; }
            echo $_S_FORM_NAME_;
            echo "\" data-field-name=\"";
            if (isset($context["S_FIELD_NAME"])) { $_S_FIELD_NAME_ = $context["S_FIELD_NAME"]; } else { $_S_FIELD_NAME_ = null; }
            echo $_S_FIELD_NAME_;
            echo "\">

";
        } else {
            // line 7
            echo "\t";
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
            // line 8
            echo "\t<div class=\"panel\" id=\"memberlist_search\"";
            if (isset($context["S_SEARCH_USER"])) { $_S_SEARCH_USER_ = $context["S_SEARCH_USER"]; } else { $_S_SEARCH_USER_ = null; }
            if ((!$_S_SEARCH_USER_)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t";
            // line 9
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("memberlist_search.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 10
            echo "\t</div>
\t<form method=\"post\" action=\"";
            // line 11
            if (isset($context["S_MODE_ACTION"])) { $_S_MODE_ACTION_ = $context["S_MODE_ACTION"]; } else { $_S_MODE_ACTION_ = null; }
            echo $_S_MODE_ACTION_;
            echo "\">

";
        }
        // line 14
        echo "
\t";
        // line 15
        if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
        if ($_S_SHOW_GROUP_) {
            // line 16
            echo "\t\t<h2 class=\"group-title\"";
            if (isset($context["GROUP_COLOR"])) { $_GROUP_COLOR_ = $context["GROUP_COLOR"]; } else { $_GROUP_COLOR_ = null; }
            if ($_GROUP_COLOR_) {
                echo " style=\"color:#";
                if (isset($context["GROUP_COLOR"])) { $_GROUP_COLOR_ = $context["GROUP_COLOR"]; } else { $_GROUP_COLOR_ = null; }
                echo $_GROUP_COLOR_;
                echo ";\"";
            }
            echo ">";
            if (isset($context["GROUP_NAME"])) { $_GROUP_NAME_ = $context["GROUP_NAME"]; } else { $_GROUP_NAME_ = null; }
            echo $_GROUP_NAME_;
            echo "</h2>
\t\t<p>";
            // line 17
            if (isset($context["GROUP_DESC"])) { $_GROUP_DESC_ = $context["GROUP_DESC"]; } else { $_GROUP_DESC_ = null; }
            echo $_GROUP_DESC_;
            echo " ";
            if (isset($context["GROUP_TYPE"])) { $_GROUP_TYPE_ = $context["GROUP_TYPE"]; } else { $_GROUP_TYPE_ = null; }
            echo $_GROUP_TYPE_;
            echo "</p>
\t\t<p>
\t\t\t";
            // line 19
            if (isset($context["AVATAR_IMG"])) { $_AVATAR_IMG_ = $context["AVATAR_IMG"]; } else { $_AVATAR_IMG_ = null; }
            if ($_AVATAR_IMG_) {
                if (isset($context["AVATAR_IMG"])) { $_AVATAR_IMG_ = $context["AVATAR_IMG"]; } else { $_AVATAR_IMG_ = null; }
                echo $_AVATAR_IMG_;
            }
            // line 20
            echo "\t\t\t";
            if (isset($context["RANK_IMG"])) { $_RANK_IMG_ = $context["RANK_IMG"]; } else { $_RANK_IMG_ = null; }
            if ($_RANK_IMG_) {
                if (isset($context["RANK_IMG"])) { $_RANK_IMG_ = $context["RANK_IMG"]; } else { $_RANK_IMG_ = null; }
                echo $_RANK_IMG_;
            }
            // line 21
            echo "\t\t\t";
            if (isset($context["GROUP_RANK"])) { $_GROUP_RANK_ = $context["GROUP_RANK"]; } else { $_GROUP_RANK_ = null; }
            if ($_GROUP_RANK_) {
                if (isset($context["GROUP_RANK"])) { $_GROUP_RANK_ = $context["GROUP_RANK"]; } else { $_GROUP_RANK_ = null; }
                echo $_GROUP_RANK_;
            }
            // line 22
            echo "\t\t</p>
\t";
        } else {
            // line 24
            echo "\t\t<h2 class=\"solo\">";
            if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
            echo $_PAGE_TITLE_;
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

\t\t<div class=\"action-bar top\">
\t\t\t<div class=\"member-search panel\">
\t\t\t\t";
            // line 28
            if (isset($context["U_FIND_MEMBER"])) { $_U_FIND_MEMBER_ = $context["U_FIND_MEMBER"]; } else { $_U_FIND_MEMBER_ = null; }
            if (isset($context["S_SEARCH_USER"])) { $_S_SEARCH_USER_ = $context["S_SEARCH_USER"]; } else { $_S_SEARCH_USER_ = null; }
            if (isset($context["U_HIDE_FIND_MEMBER"])) { $_U_HIDE_FIND_MEMBER_ = $context["U_HIDE_FIND_MEMBER"]; } else { $_U_HIDE_FIND_MEMBER_ = null; }
            if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
            if (($_U_FIND_MEMBER_ && (!$_S_SEARCH_USER_))) {
                echo "<a href=\"";
                if (isset($context["U_FIND_MEMBER"])) { $_U_FIND_MEMBER_ = $context["U_FIND_MEMBER"]; } else { $_U_FIND_MEMBER_ = null; }
                echo $_U_FIND_MEMBER_;
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo addslashes($this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH"));
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a> &bull; ";
            } elseif ((($_S_SEARCH_USER_ && $_U_HIDE_FIND_MEMBER_) && (!$_S_IN_SEARCH_POPUP_))) {
                echo "<a href=\"";
                if (isset($context["U_HIDE_FIND_MEMBER"])) { $_U_HIDE_FIND_MEMBER_ = $context["U_HIDE_FIND_MEMBER"]; } else { $_U_HIDE_FIND_MEMBER_ = null; }
                echo $_U_HIDE_FIND_MEMBER_;
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo addslashes($this->env->getExtension('phpbb')->lang("FIND_USERNAME"));
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH");
                echo "</a> &bull; ";
            }
            // line 29
            echo "\t\t\t\t<strong>
\t\t\t\t";
            // line 30
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "first_char"));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 31
                echo "\t\t\t\t\t<a href=\"";
                if (isset($context["first_char"])) { $_first_char_ = $context["first_char"]; } else { $_first_char_ = null; }
                echo $this->getAttribute($_first_char_, "U_SORT");
                echo "\">";
                if (isset($context["first_char"])) { $_first_char_ = $context["first_char"]; } else { $_first_char_ = null; }
                echo $this->getAttribute($_first_char_, "DESC");
                echo "</a>&nbsp;
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t\t</strong>
\t\t\t</div>
\t\t
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 37
            if (isset($context["TOTAL_USERS"])) { $_TOTAL_USERS_ = $context["TOTAL_USERS"]; } else { $_TOTAL_USERS_ = null; }
            echo $_TOTAL_USERS_;
            echo "
\t\t\t\t";
            // line 38
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
                echo " 
\t\t\t\t\t";
                // line 39
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
                // line 40
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 41
                if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
                echo $_PAGE_NUMBER_;
                echo "
\t\t\t\t";
            }
            // line 43
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 46
        echo "
\t";
        // line 47
        if (isset($context["S_LEADERS_SET"])) { $_S_LEADERS_SET_ = $context["S_LEADERS_SET"]; } else { $_S_LEADERS_SET_ = null; }
        if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if ((($_S_LEADERS_SET_ || (!$_S_SHOW_GROUP_)) || (!twig_length_filter($this->env, $this->getAttribute($_loops_, "memberrow"))))) {
            // line 48
            echo "\t<div class=\"forumbg forumbg-table\">
\t\t<div class=\"inner\">

\t\t<table class=\"table1\" id=\"memberlist\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\" data-dfn=\"";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
            if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (($_S_SHOW_GROUP_ && twig_length_filter($this->env, $this->getAttribute($_loops_, "memberrow")))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "\"><span class=\"rank-img\"><a href=\"";
            if (isset($context["U_SORT_RANK"])) { $_U_SORT_RANK_ = $context["U_SORT_RANK"]; } else { $_U_SORT_RANK_ = null; }
            echo $_U_SORT_RANK_;
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo "</a></span><a href=\"";
            if (isset($context["U_SORT_USERNAME"])) { $_U_SORT_USERNAME_ = $context["U_SORT_USERNAME"]; } else { $_U_SORT_USERNAME_ = null; }
            echo $_U_SORT_USERNAME_;
            echo "\">";
            if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (($_S_SHOW_GROUP_ && twig_length_filter($this->env, $this->getAttribute($_loops_, "memberrow")))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
            // line 55
            if (isset($context["U_SORT_POSTS"])) { $_U_SORT_POSTS_ = $context["U_SORT_POSTS"]; } else { $_U_SORT_POSTS_ = null; }
            echo $_U_SORT_POSTS_;
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS");
            echo "</a></th>
\t\t\t<th class=\"info\">";
            // line 56
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "custom_fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                if ((!$this->getAttribute($_custom_fields_, "S_FIRST_ROW"))) {
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo " ";
                }
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_NAME");
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
            // line 57
            if (isset($context["U_SORT_JOINED"])) { $_U_SORT_JOINED_ = $context["U_SORT_JOINED"]; } else { $_U_SORT_JOINED_ = null; }
            echo $_U_SORT_JOINED_;
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo "</a></th>
\t\t\t";
            // line 58
            if (isset($context["U_SORT_ACTIVE"])) { $_U_SORT_ACTIVE_ = $context["U_SORT_ACTIVE"]; } else { $_U_SORT_ACTIVE_ = null; }
            if ($_U_SORT_ACTIVE_) {
                echo "<th class=\"active\"><a href=\"";
                if (isset($context["U_SORT_ACTIVE"])) { $_U_SORT_ACTIVE_ = $context["U_SORT_ACTIVE"]; } else { $_U_SORT_ACTIVE_ = null; }
                echo $_U_SORT_ACTIVE_;
                echo "#memberlist\">";
                echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                echo "</a></th>";
            }
            // line 59
            echo "\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
        }
        // line 63
        echo "\t\t";
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "memberrow"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 64
            echo "\t\t\t";
            if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
            if ($_S_SHOW_GROUP_) {
                // line 65
                echo "\t\t\t\t";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
                if (((!$this->getAttribute($_memberrow_, "S_GROUP_LEADER")) && (!$this->getAttribute($_definition_, "S_MEMBER_HEADER")))) {
                    // line 66
                    echo "\t\t\t\t";
                    if (isset($context["S_LEADERS_SET"])) { $_S_LEADERS_SET_ = $context["S_LEADERS_SET"]; } else { $_S_LEADERS_SET_ = null; }
                    if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                    if (($_S_LEADERS_SET_ && $this->getAttribute($_memberrow_, "S_FIRST_ROW"))) {
                        // line 67
                        echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"";
                        // line 68
                        if (isset($context["U_SORT_ACTIVE"])) { $_U_SORT_ACTIVE_ = $context["U_SORT_ACTIVE"]; } else { $_U_SORT_ACTIVE_ = null; }
                        if ($_U_SORT_ACTIVE_) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t\t";
                    }
                    // line 71
                    if (isset($context["S_LEADERS_SET"])) { $_S_LEADERS_SET_ = $context["S_LEADERS_SET"]; } else { $_S_LEADERS_SET_ = null; }
                    if ($_S_LEADERS_SET_) {
                        // line 72
                        echo "\t\t</tbody>
\t\t</table>

\t</div>
</div>
";
                    }
                    // line 78
                    echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t";
                    // line 84
                    if (isset($context["S_LEADERS_SET"])) { $_S_LEADERS_SET_ = $context["S_LEADERS_SET"]; } else { $_S_LEADERS_SET_ = null; }
                    if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
                    if ((!$_S_LEADERS_SET_)) {
                        // line 85
                        echo "\t\t<th class=\"name\" data-dfn=\"";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        echo "\"><span class=\"rank-img\"><a href=\"";
                        if (isset($context["U_SORT_RANK"])) { $_U_SORT_RANK_ = $context["U_SORT_RANK"]; } else { $_U_SORT_RANK_ = null; }
                        echo $_U_SORT_RANK_;
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo "</a></span><a href=\"";
                        if (isset($context["U_SORT_USERNAME"])) { $_U_SORT_USERNAME_ = $context["U_SORT_USERNAME"]; } else { $_U_SORT_USERNAME_ = null; }
                        echo $_U_SORT_USERNAME_;
                        echo "\">";
                        if (isset($context["S_SHOW_GROUP"])) { $_S_SHOW_GROUP_ = $context["S_SHOW_GROUP"]; } else { $_S_SHOW_GROUP_ = null; }
                        if ($_S_SHOW_GROUP_) {
                            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        }
                        echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
                        // line 86
                        if (isset($context["U_SORT_POSTS"])) { $_U_SORT_POSTS_ = $context["U_SORT_POSTS"]; } else { $_U_SORT_POSTS_ = null; }
                        echo $_U_SORT_POSTS_;
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</a></th>
\t\t\t<th class=\"info\">";
                        // line 87
                        if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_memberrow_, "custom_fields"));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                            if ((!$this->getAttribute($_custom_fields_, "S_FIRST_ROW"))) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                            echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_NAME");
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
                        // line 88
                        if (isset($context["U_SORT_JOINED"])) { $_U_SORT_JOINED_ = $context["U_SORT_JOINED"]; } else { $_U_SORT_JOINED_ = null; }
                        echo $_U_SORT_JOINED_;
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</a></th>
\t\t\t";
                        // line 89
                        if (isset($context["U_SORT_ACTIVE"])) { $_U_SORT_ACTIVE_ = $context["U_SORT_ACTIVE"]; } else { $_U_SORT_ACTIVE_ = null; }
                        if ($_U_SORT_ACTIVE_) {
                            echo "<th class=\"active\"><a href=\"";
                            if (isset($context["U_SORT_ACTIVE"])) { $_U_SORT_ACTIVE_ = $context["U_SORT_ACTIVE"]; } else { $_U_SORT_ACTIVE_ = null; }
                            echo $_U_SORT_ACTIVE_;
                            echo "#memberlist\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</a></th>";
                        }
                        // line 90
                        echo "\t";
                    } elseif ($_S_SHOW_GROUP_) {
                        // line 91
                        echo "\t\t<th class=\"name\">";
                        echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t<th class=\"posts\">";
                        // line 92
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</th>
\t\t<th class=\"info\">";
                        // line 93
                        if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_memberrow_, "custom_fields"));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                            if ((!$this->getAttribute($_custom_fields_, "S_FIRST_ROW"))) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                            echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_NAME");
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t<th class=\"joined\">";
                        // line 94
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</th>
\t\t";
                        // line 95
                        if (isset($context["U_SORT_ACTIVE"])) { $_U_SORT_ACTIVE_ = $context["U_SORT_ACTIVE"]; } else { $_U_SORT_ACTIVE_ = null; }
                        if ($_U_SORT_ACTIVE_) {
                            echo "<th class=\"active\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</th>";
                        }
                        // line 96
                        echo "\t";
                    }
                    // line 97
                    echo "\t</tr>
\t</thead>
\t<tbody>
\t\t\t\t\t";
                    // line 100
                    if (isset($context["S_MEMBER_HEADER"])) { $_S_MEMBER_HEADER_ = $context["S_MEMBER_HEADER"]; } else { $_S_MEMBER_HEADER_ = null; }
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 101
                    echo "\t\t\t\t";
                }
                // line 102
                echo "\t\t\t";
            }
            // line 103
            echo "
\t<tr class=\"";
            // line 104
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            if (($this->getAttribute($_memberrow_, "S_ROW_COUNT") % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            echo "\">
\t\t<td>";
            // line 105
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            if ($this->getAttribute($_memberrow_, "RANK_IMG")) {
                echo "<span class=\"rank-img\">";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "RANK_IMG");
                echo "</span>";
            } else {
                echo "<span class=\"rank-img\">";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "RANK_TITLE");
                echo "</span>";
            }
            if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
            if (isset($context["S_SELECT_SINGLE"])) { $_S_SELECT_SINGLE_ = $context["S_SELECT_SINGLE"]; } else { $_S_SELECT_SINGLE_ = null; }
            if (($_S_IN_SEARCH_POPUP_ && (!$_S_SELECT_SINGLE_))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "USERNAME");
                echo "\" /> ";
            }
            if (isset($context["memberlist_body_username_prepend"])) { $_memberlist_body_username_prepend_ = $context["memberlist_body_username_prepend"]; } else { $_memberlist_body_username_prepend_ = null; }
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            echo $this->getAttribute($_memberrow_, "USERNAME_FULL");
            if (isset($context["memberlist_body_username_append"])) { $_memberlist_body_username_append_ = $context["memberlist_body_username_append"]; } else { $_memberlist_body_username_append_ = null; }
            if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
            if ($_S_IN_SEARCH_POPUP_) {
                echo "<br />[&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "A_USERNAME");
                echo "'); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("SELECT");
                echo "</a>&nbsp;]";
            }
            echo "</td>
\t\t<td class=\"posts\">";
            // line 106
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            if (isset($context["S_DISPLAY_SEARCH"])) { $_S_DISPLAY_SEARCH_ = $context["S_DISPLAY_SEARCH"]; } else { $_S_DISPLAY_SEARCH_ = null; }
            if (($this->getAttribute($_memberrow_, "POSTS") && $_S_DISPLAY_SEARCH_)) {
                echo "<a href=\"";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "U_SEARCH_USER");
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                echo "\">";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "POSTS");
                echo "</a>";
            } else {
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "POSTS");
            }
            echo "</td>
\t\t<td class=\"info\">";
            // line 107
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_memberrow_, "custom_fields"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                echo "<div>";
                if (isset($context["custom_fields"])) { $_custom_fields_ = $context["custom_fields"]; } else { $_custom_fields_ = null; }
                echo $this->getAttribute($_custom_fields_, "PROFILE_FIELD_VALUE");
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
\t\t<td>";
            // line 108
            if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
            echo $this->getAttribute($_memberrow_, "JOINED");
            echo "</td>
\t\t";
            // line 109
            if (isset($context["S_VIEWONLINE"])) { $_S_VIEWONLINE_ = $context["S_VIEWONLINE"]; } else { $_S_VIEWONLINE_ = null; }
            if ($_S_VIEWONLINE_) {
                echo "<td>";
                if (isset($context["memberrow"])) { $_memberrow_ = $context["memberrow"]; } else { $_memberrow_ = null; }
                echo $this->getAttribute($_memberrow_, "LAST_ACTIVE");
                echo "&nbsp;</td>";
            }
            // line 110
            echo "\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 112
            echo "\t<tr class=\"bg1\">
\t\t<td colspan=\"";
            // line 113
            if (isset($context["S_VIEWONLINE"])) { $_S_VIEWONLINE_ = $context["S_VIEWONLINE"]; } else { $_S_VIEWONLINE_ = null; }
            if ($_S_VIEWONLINE_) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("NO_MEMBERS");
            echo "</td>
\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t</tbody>
\t</table>

\t</div>
</div>

";
        // line 122
        if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
        if (isset($context["S_SELECT_SINGLE"])) { $_S_SELECT_SINGLE_ = $context["S_SELECT_SINGLE"]; } else { $_S_SELECT_SINGLE_ = null; }
        if (($_S_IN_SEARCH_POPUP_ && (!$_S_SELECT_SINGLE_))) {
            // line 123
            echo "<fieldset class=\"display-actions\">
\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 124
            echo $this->env->getExtension('phpbb')->lang("SELECT_MARKED");
            echo "\" class=\"button2\" />
\t<div><a href=\"#\" onclick=\"marklist('results', 'user', true); return false;\">";
            // line 125
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('results', 'user', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
</fieldset>
";
        }
        // line 128
        echo "
";
        // line 129
        if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
        if ($_S_IN_SEARCH_POPUP_) {
            // line 130
            echo "</form>
<form method=\"post\" id=\"sort-results\" action=\"";
            // line 131
            if (isset($context["S_MODE_ACTION"])) { $_S_MODE_ACTION_ = $context["S_MODE_ACTION"]; } else { $_S_MODE_ACTION_ = null; }
            echo $_S_MODE_ACTION_;
            echo "\">
";
        }
        // line 133
        echo "
";
        // line 134
        if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
        if (isset($context["S_SEARCH_USER"])) { $_S_SEARCH_USER_ = $context["S_SEARCH_USER"]; } else { $_S_SEARCH_USER_ = null; }
        if (($_S_IN_SEARCH_POPUP_ && (!$_S_SEARCH_USER_))) {
            // line 135
            echo "<fieldset class=\"display-options\">
\t<label for=\"sk\">";
            // line 136
            echo $this->env->getExtension('phpbb')->lang("SELECT_SORT_METHOD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            if (isset($context["S_MODE_SELECT"])) { $_S_MODE_SELECT_ = $context["S_MODE_SELECT"]; } else { $_S_MODE_SELECT_ = null; }
            echo $_S_MODE_SELECT_;
            echo "</select></label>
\t<label for=\"sd\">";
            // line 137
            echo $this->env->getExtension('phpbb')->lang("ORDER");
            echo " <select name=\"sd\" id=\"sd\">";
            if (isset($context["S_ORDER_SELECT"])) { $_S_ORDER_SELECT_ = $context["S_ORDER_SELECT"]; } else { $_S_ORDER_SELECT_ = null; }
            echo $_S_ORDER_SELECT_;
            echo "</select></label>
\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 138
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button2\" />
</fieldset>
";
        }
        // line 141
        echo "
</form>

<div class=\"action-bar bottom\">
\t<div class=\"pagination\">
\t\t";
        // line 146
        if (isset($context["TOTAL_USERS"])) { $_TOTAL_USERS_ = $context["TOTAL_USERS"]; } else { $_TOTAL_USERS_ = null; }
        echo $_TOTAL_USERS_;
        echo "
\t\t";
        // line 147
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "pagination"))) {
            echo " 
\t\t\t";
            // line 148
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
            // line 149
            echo "\t\t";
        } else {
            echo " 
\t\t\t &bull; ";
            // line 150
            if (isset($context["PAGE_NUMBER"])) { $_PAGE_NUMBER_ = $context["PAGE_NUMBER"]; } else { $_PAGE_NUMBER_ = null; }
            echo $_PAGE_NUMBER_;
            echo "
\t\t";
        }
        // line 152
        echo "\t</div>
</div>

";
        // line 155
        if (isset($context["S_IN_SEARCH_POPUP"])) { $_S_IN_SEARCH_POPUP_ = $context["S_IN_SEARCH_POPUP"]; } else { $_S_IN_SEARCH_POPUP_ = null; }
        if ($_S_IN_SEARCH_POPUP_) {
            // line 156
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("simple_footer.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 158
            echo "\t";
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
            // line 159
            echo "\t";
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
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  813 => 159,  800 => 158,  786 => 156,  783 => 155,  778 => 152,  772 => 150,  767 => 149,  755 => 148,  750 => 147,  745 => 146,  738 => 141,  732 => 138,  725 => 137,  717 => 136,  714 => 135,  710 => 134,  707 => 133,  701 => 131,  698 => 130,  695 => 129,  692 => 128,  684 => 125,  680 => 124,  677 => 123,  673 => 122,  665 => 116,  649 => 113,  646 => 112,  640 => 110,  632 => 109,  627 => 108,  607 => 107,  588 => 106,  552 => 105,  543 => 104,  540 => 103,  537 => 102,  534 => 101,  530 => 100,  525 => 97,  522 => 96,  515 => 95,  511 => 94,  493 => 93,  489 => 92,  484 => 91,  481 => 90,  471 => 89,  464 => 88,  446 => 87,  439 => 86,  417 => 85,  413 => 84,  405 => 78,  397 => 72,  394 => 71,  383 => 68,  380 => 67,  375 => 66,  370 => 65,  366 => 64,  359 => 63,  353 => 59,  343 => 58,  336 => 57,  318 => 56,  311 => 55,  283 => 54,  275 => 48,  270 => 47,  267 => 46,  262 => 43,  256 => 41,  251 => 40,  239 => 39,  234 => 38,  229 => 37,  223 => 33,  210 => 31,  205 => 30,  202 => 29,  178 => 28,  158 => 24,  154 => 22,  147 => 21,  140 => 20,  134 => 19,  125 => 17,  111 => 16,  108 => 15,  105 => 14,  98 => 11,  95 => 10,  83 => 9,  75 => 8,  62 => 7,  48 => 4,  35 => 3,  22 => 2,  19 => 1,);
    }
}
