<?php

/* simple_header.html */
class __TwigTemplate_1e8183e8e11055d92da5826f427dc043 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo "\" lang=\"";
        if (isset($context["S_USER_LANG"])) { $_S_USER_LANG_ = $context["S_USER_LANG"]; } else { $_S_USER_LANG_ = null; }
        echo $_S_USER_LANG_;
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width\" />
";
        // line 6
        if (isset($context["META"])) { $_META_ = $context["META"]; } else { $_META_ = null; }
        echo $_META_;
        echo "
<title>";
        // line 7
        if (isset($context["SITENAME"])) { $_SITENAME_ = $context["SITENAME"]; } else { $_SITENAME_ = null; }
        echo $_SITENAME_;
        echo " &bull; ";
        if (isset($context["S_IN_MCP"])) { $_S_IN_MCP_ = $context["S_IN_MCP"]; } else { $_S_IN_MCP_ = null; }
        if (isset($context["S_IN_UCP"])) { $_S_IN_UCP_ = $context["S_IN_UCP"]; } else { $_S_IN_UCP_ = null; }
        if ($_S_IN_MCP_) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " &bull; ";
        } elseif ($_S_IN_UCP_) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " &bull; ";
        }
        if (isset($context["PAGE_TITLE"])) { $_PAGE_TITLE_ = $context["PAGE_TITLE"]; } else { $_PAGE_TITLE_ = null; }
        echo $_PAGE_TITLE_;
        echo "</title>

<link href=\"";
        // line 9
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/print.css?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"print\" title=\"printonly\" />
";
        // line 10
        if (isset($context["S_ALLOW_CDN"])) { $_S_ALLOW_CDN_ = $context["S_ALLOW_CDN"]; } else { $_S_ALLOW_CDN_ = null; }
        if ($_S_ALLOW_CDN_) {
            echo "<link href=\"//fonts.googleapis.com/css?family=Open+Sans:600&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />";
        }
        // line 11
        echo "<link href=\"";
        if (isset($context["T_STYLESHEET_LINK"])) { $_T_STYLESHEET_LINK_ = $context["T_STYLESHEET_LINK"]; } else { $_T_STYLESHEET_LINK_ = null; }
        echo $_T_STYLESHEET_LINK_;
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
<link href=\"";
        // line 12
        if (isset($context["T_STYLESHEET_LANG_LINK"])) { $_T_STYLESHEET_LANG_LINK_ = $context["T_STYLESHEET_LANG_LINK"]; } else { $_T_STYLESHEET_LANG_LINK_ = null; }
        echo $_T_STYLESHEET_LANG_LINK_;
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
<link href=\"";
        // line 13
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/responsive.css?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"only screen and (max-width: 700px), only screen and (max-device-width: 700px)\" />

";
        // line 15
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        if (($_S_CONTENT_DIRECTION_ == "rtl")) {
            // line 16
            echo "\t<link href=\"";
            if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
            echo $_T_THEME_PATH_;
            echo "/bidi.css?assets_version=";
            if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
            echo $_T_ASSETS_VERSION_;
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
";
        }
        // line 18
        echo "
<!--[if lte IE 8]>
\t<link href=\"";
        // line 20
        if (isset($context["T_THEME_PATH"])) { $_T_THEME_PATH_ = $context["T_THEME_PATH"]; } else { $_T_THEME_PATH_ = null; }
        echo $_T_THEME_PATH_;
        echo "/tweaks.css?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />
<![endif]-->

";
        // line 23
        if (isset($context["POPUP"])) { $_POPUP_ = $context["POPUP"]; } else { $_POPUP_ = null; }
        $value = 1;
        $context['definition']->set('POPUP', $value);
        // line 24
        echo "
";
        // line 25
        if (isset($context["simple_header_head_append"])) { $_simple_header_head_append_ = $context["simple_header_head_append"]; } else { $_simple_header_head_append_ = null; }
        // line 26
        echo "
";
        // line 27
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "STYLESHEETS");
        echo "

";
        // line 29
        if (isset($context["simple_header_stylesheets_after"])) { $_simple_header_stylesheets_after_ = $context["simple_header_stylesheets_after"]; } else { $_simple_header_stylesheets_after_ = null; }
        // line 30
        echo "
</head>

<body id=\"phpbb\" class=\"nojs ";
        // line 33
        if (isset($context["S_CONTENT_DIRECTION"])) { $_S_CONTENT_DIRECTION_ = $context["S_CONTENT_DIRECTION"]; } else { $_S_CONTENT_DIRECTION_ = null; }
        echo $_S_CONTENT_DIRECTION_;
        echo " ";
        if (isset($context["BODY_CLASS"])) { $_BODY_CLASS_ = $context["BODY_CLASS"]; } else { $_BODY_CLASS_ = null; }
        echo $_BODY_CLASS_;
        echo "\">

";
        // line 35
        if (isset($context["simple_header_body_before"])) { $_simple_header_body_before_ = $context["simple_header_body_before"]; } else { $_simple_header_body_before_ = null; }
        // line 36
        echo "
<div id=\"wrap\">
\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t<div id=\"page-body\">
";
    }

    public function getTemplateName()
    {
        return "simple_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 36,  150 => 35,  141 => 33,  136 => 30,  128 => 27,  123 => 25,  120 => 24,  116 => 23,  106 => 20,  102 => 18,  92 => 16,  89 => 15,  80 => 13,  69 => 11,  64 => 10,  56 => 9,  38 => 7,  33 => 6,  813 => 159,  800 => 158,  786 => 156,  783 => 155,  778 => 152,  772 => 150,  767 => 149,  755 => 148,  750 => 147,  745 => 146,  738 => 141,  732 => 138,  725 => 137,  717 => 136,  714 => 135,  710 => 134,  707 => 133,  701 => 131,  698 => 130,  695 => 129,  692 => 128,  684 => 125,  680 => 124,  677 => 123,  673 => 122,  665 => 116,  649 => 113,  646 => 112,  640 => 110,  632 => 109,  627 => 108,  607 => 107,  588 => 106,  552 => 105,  543 => 104,  540 => 103,  537 => 102,  534 => 101,  530 => 100,  525 => 97,  522 => 96,  515 => 95,  511 => 94,  493 => 93,  489 => 92,  484 => 91,  481 => 90,  471 => 89,  464 => 88,  446 => 87,  439 => 86,  417 => 85,  413 => 84,  405 => 78,  397 => 72,  394 => 71,  383 => 68,  380 => 67,  375 => 66,  370 => 65,  366 => 64,  359 => 63,  353 => 59,  343 => 58,  336 => 57,  318 => 56,  311 => 55,  283 => 54,  275 => 48,  270 => 47,  267 => 46,  262 => 43,  256 => 41,  251 => 40,  239 => 39,  234 => 38,  229 => 37,  223 => 33,  210 => 31,  205 => 30,  202 => 29,  178 => 28,  158 => 24,  154 => 22,  147 => 21,  140 => 20,  134 => 29,  125 => 26,  111 => 16,  108 => 15,  105 => 14,  98 => 11,  95 => 10,  83 => 9,  75 => 12,  62 => 7,  48 => 4,  35 => 3,  22 => 2,  19 => 1,);
    }
}
