<?php

/* viewtopic_topic_tools.html */
class __TwigTemplate_7239859d608c5a6d00a7ea60b492fd23 extends Twig_Template
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
        if (isset($context["S_IS_BOT"])) { $_S_IS_BOT_ = $context["S_IS_BOT"]; } else { $_S_IS_BOT_ = null; }
        if (isset($context["U_WATCH_TOPIC"])) { $_U_WATCH_TOPIC_ = $context["U_WATCH_TOPIC"]; } else { $_U_WATCH_TOPIC_ = null; }
        if (isset($context["U_BOOKMARK_TOPIC"])) { $_U_BOOKMARK_TOPIC_ = $context["U_BOOKMARK_TOPIC"]; } else { $_U_BOOKMARK_TOPIC_ = null; }
        if (isset($context["U_BUMP_TOPIC"])) { $_U_BUMP_TOPIC_ = $context["U_BUMP_TOPIC"]; } else { $_U_BUMP_TOPIC_ = null; }
        if (isset($context["U_EMAIL_TOPIC"])) { $_U_EMAIL_TOPIC_ = $context["U_EMAIL_TOPIC"]; } else { $_U_EMAIL_TOPIC_ = null; }
        if (isset($context["U_PRINT_TOPIC"])) { $_U_PRINT_TOPIC_ = $context["U_PRINT_TOPIC"]; } else { $_U_PRINT_TOPIC_ = null; }
        if (isset($context["S_DISPLAY_TOPIC_TOOLS"])) { $_S_DISPLAY_TOPIC_TOOLS_ = $context["S_DISPLAY_TOPIC_TOOLS"]; } else { $_S_DISPLAY_TOPIC_TOOLS_ = null; }
        if (((!$_S_IS_BOT_) && ((((($_U_WATCH_TOPIC_ || $_U_BOOKMARK_TOPIC_) || $_U_BUMP_TOPIC_) || $_U_EMAIL_TOPIC_) || $_U_PRINT_TOPIC_) || $_S_DISPLAY_TOPIC_TOOLS_))) {
            // line 2
            echo "\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t<span title=\"";
            // line 3
            echo $this->env->getExtension('phpbb')->lang("TOPIC_TOOLS");
            echo "\" class=\"button icon-button tools-icon dropdown-trigger dropdown-select\"></span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 7
            if (isset($context["viewtopic_topic_tools_before"])) { $_viewtopic_topic_tools_before_ = $context["viewtopic_topic_tools_before"]; } else { $_viewtopic_topic_tools_before_ = null; }
            // line 8
            echo "\t\t\t\t";
            if (isset($context["U_WATCH_TOPIC"])) { $_U_WATCH_TOPIC_ = $context["U_WATCH_TOPIC"]; } else { $_U_WATCH_TOPIC_ = null; }
            if ($_U_WATCH_TOPIC_) {
                // line 9
                echo "\t\t\t\t\t<li class=\"small-icon icon-";
                if (isset($context["S_WATCHING_TOPIC"])) { $_S_WATCHING_TOPIC_ = $context["S_WATCHING_TOPIC"]; } else { $_S_WATCHING_TOPIC_ = null; }
                if ($_S_WATCHING_TOPIC_) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 10
                if (isset($context["U_WATCH_TOPIC"])) { $_U_WATCH_TOPIC_ = $context["U_WATCH_TOPIC"]; } else { $_U_WATCH_TOPIC_ = null; }
                echo $_U_WATCH_TOPIC_;
                echo "\" class=\"watch-topic-link\" title=\"";
                if (isset($context["S_WATCH_TOPIC_TITLE"])) { $_S_WATCH_TOPIC_TITLE_ = $context["S_WATCH_TOPIC_TITLE"]; } else { $_S_WATCH_TOPIC_TITLE_ = null; }
                echo $_S_WATCH_TOPIC_TITLE_;
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if (isset($context["S_WATCHING_TOPIC"])) { $_S_WATCHING_TOPIC_ = $context["S_WATCHING_TOPIC"]; } else { $_S_WATCHING_TOPIC_ = null; }
                if ((!$_S_WATCHING_TOPIC_)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                if (isset($context["S_WATCH_TOPIC_TOGGLE"])) { $_S_WATCH_TOPIC_TOGGLE_ = $context["S_WATCH_TOPIC_TOGGLE"]; } else { $_S_WATCH_TOPIC_TOGGLE_ = null; }
                echo $_S_WATCH_TOPIC_TOGGLE_;
                echo "\" data-toggle-url=\"";
                if (isset($context["U_WATCH_TOPIC_TOGGLE"])) { $_U_WATCH_TOPIC_TOGGLE_ = $context["U_WATCH_TOPIC_TOGGLE"]; } else { $_U_WATCH_TOPIC_TOGGLE_ = null; }
                echo $_U_WATCH_TOPIC_TOGGLE_;
                echo "\" data-update-all=\".watch-topic-link\">";
                if (isset($context["S_WATCH_TOPIC_TITLE"])) { $_S_WATCH_TOPIC_TITLE_ = $context["S_WATCH_TOPIC_TITLE"]; } else { $_S_WATCH_TOPIC_TITLE_ = null; }
                echo $_S_WATCH_TOPIC_TITLE_;
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t";
            if (isset($context["U_BOOKMARK_TOPIC"])) { $_U_BOOKMARK_TOPIC_ = $context["U_BOOKMARK_TOPIC"]; } else { $_U_BOOKMARK_TOPIC_ = null; }
            if ($_U_BOOKMARK_TOPIC_) {
                // line 14
                echo "\t\t\t\t\t<li class=\"small-icon icon-bookmark\">
\t\t\t\t\t\t<a href=\"";
                // line 15
                if (isset($context["U_BOOKMARK_TOPIC"])) { $_U_BOOKMARK_TOPIC_ = $context["U_BOOKMARK_TOPIC"]; } else { $_U_BOOKMARK_TOPIC_ = null; }
                echo $_U_BOOKMARK_TOPIC_;
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                if (isset($context["S_BOOKMARK_TOGGLE"])) { $_S_BOOKMARK_TOGGLE_ = $context["S_BOOKMARK_TOGGLE"]; } else { $_S_BOOKMARK_TOGGLE_ = null; }
                echo $_S_BOOKMARK_TOGGLE_;
                echo "\" data-update-all=\".bookmark-link\">";
                if (isset($context["S_BOOKMARK_TOPIC"])) { $_S_BOOKMARK_TOPIC_ = $context["S_BOOKMARK_TOPIC"]; } else { $_S_BOOKMARK_TOPIC_ = null; }
                echo $_S_BOOKMARK_TOPIC_;
                echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t";
            if (isset($context["U_BUMP_TOPIC"])) { $_U_BUMP_TOPIC_ = $context["U_BUMP_TOPIC"]; } else { $_U_BUMP_TOPIC_ = null; }
            if ($_U_BUMP_TOPIC_) {
                echo "<li class=\"small-icon icon-bump\"><a href=\"";
                if (isset($context["U_BUMP_TOPIC"])) { $_U_BUMP_TOPIC_ = $context["U_BUMP_TOPIC"]; } else { $_U_BUMP_TOPIC_ = null; }
                echo $_U_BUMP_TOPIC_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\">";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t\t";
            if (isset($context["U_EMAIL_TOPIC"])) { $_U_EMAIL_TOPIC_ = $context["U_EMAIL_TOPIC"]; } else { $_U_EMAIL_TOPIC_ = null; }
            if ($_U_EMAIL_TOPIC_) {
                echo "<li class=\"small-icon icon-sendemail\"><a href=\"";
                if (isset($context["U_EMAIL_TOPIC"])) { $_U_EMAIL_TOPIC_ = $context["U_EMAIL_TOPIC"]; } else { $_U_EMAIL_TOPIC_ = null; }
                echo $_U_EMAIL_TOPIC_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t\t";
            if (isset($context["U_PRINT_TOPIC"])) { $_U_PRINT_TOPIC_ = $context["U_PRINT_TOPIC"]; } else { $_U_PRINT_TOPIC_ = null; }
            if ($_U_PRINT_TOPIC_) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                if (isset($context["U_PRINT_TOPIC"])) { $_U_PRINT_TOPIC_ = $context["U_PRINT_TOPIC"]; } else { $_U_PRINT_TOPIC_ = null; }
                echo $_U_PRINT_TOPIC_;
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\">";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t\t";
            if (isset($context["viewtopic_topic_tools_after"])) { $_viewtopic_topic_tools_after_ = $context["viewtopic_topic_tools_after"]; } else { $_viewtopic_topic_tools_after_ = null; }
            // line 22
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 22,  141 => 21,  128 => 20,  115 => 19,  102 => 18,  87 => 15,  84 => 14,  80 => 13,  54 => 10,  44 => 9,  40 => 8,  38 => 7,  28 => 2,  1695 => 396,  1692 => 395,  1685 => 392,  1671 => 391,  1668 => 390,  1665 => 389,  1662 => 388,  1650 => 387,  1648 => 386,  1643 => 383,  1639 => 381,  1632 => 379,  1629 => 378,  1616 => 377,  1613 => 376,  1608 => 375,  1605 => 374,  1601 => 373,  1598 => 372,  1592 => 368,  1574 => 366,  1568 => 365,  1563 => 364,  1554 => 360,  1545 => 359,  1542 => 358,  1539 => 357,  1527 => 356,  1523 => 354,  1521 => 353,  1518 => 352,  1514 => 350,  1507 => 349,  1487 => 348,  1483 => 347,  1480 => 346,  1478 => 345,  1474 => 343,  1472 => 342,  1469 => 341,  1463 => 337,  1458 => 335,  1448 => 334,  1439 => 333,  1436 => 332,  1429 => 330,  1425 => 329,  1422 => 328,  1408 => 326,  1405 => 325,  1402 => 324,  1396 => 322,  1385 => 316,  1379 => 312,  1377 => 311,  1374 => 310,  1362 => 309,  1359 => 308,  1351 => 307,  1348 => 306,  1344 => 304,  1333 => 303,  1328 => 302,  1325 => 301,  1321 => 299,  1310 => 298,  1305 => 297,  1302 => 296,  1298 => 295,  1290 => 294,  1288 => 293,  1285 => 292,  1281 => 290,  1271 => 288,  1266 => 287,  1261 => 285,  1257 => 283,  1254 => 282,  1248 => 280,  1245 => 279,  1236 => 276,  1233 => 275,  1230 => 274,  1227 => 273,  1219 => 269,  1214 => 268,  1210 => 267,  1206 => 266,  1202 => 265,  1195 => 263,  1187 => 259,  1182 => 258,  1178 => 257,  1174 => 256,  1170 => 255,  1163 => 253,  1160 => 252,  1135 => 250,  1132 => 249,  1129 => 248,  1125 => 246,  1122 => 245,  1111 => 242,  1108 => 241,  1104 => 240,  1093 => 237,  1090 => 236,  1086 => 235,  1075 => 232,  1072 => 231,  1068 => 230,  1057 => 227,  1054 => 226,  1050 => 225,  1039 => 222,  1036 => 221,  1032 => 220,  1021 => 217,  1018 => 216,  1014 => 215,  1012 => 214,  1009 => 213,  1005 => 212,  1002 => 211,  972 => 209,  960 => 207,  957 => 206,  950 => 203,  945 => 202,  939 => 201,  932 => 198,  927 => 197,  921 => 196,  917 => 195,  914 => 194,  908 => 190,  905 => 189,  898 => 184,  892 => 183,  888 => 181,  884 => 180,  875 => 178,  851 => 177,  847 => 175,  843 => 174,  836 => 173,  832 => 172,  827 => 171,  816 => 167,  810 => 165,  807 => 164,  802 => 163,  800 => 162,  797 => 161,  794 => 160,  788 => 159,  774 => 157,  770 => 156,  764 => 155,  762 => 154,  759 => 153,  749 => 151,  746 => 150,  743 => 149,  740 => 148,  728 => 147,  716 => 146,  694 => 145,  691 => 144,  677 => 143,  673 => 141,  662 => 140,  659 => 139,  656 => 138,  653 => 137,  636 => 136,  632 => 135,  630 => 134,  613 => 132,  603 => 131,  568 => 128,  556 => 126,  552 => 125,  549 => 124,  544 => 123,  541 => 122,  531 => 116,  526 => 115,  519 => 111,  516 => 110,  507 => 107,  503 => 105,  500 => 104,  497 => 103,  491 => 100,  487 => 98,  484 => 97,  474 => 94,  466 => 92,  463 => 91,  457 => 90,  455 => 89,  439 => 87,  412 => 86,  378 => 85,  362 => 84,  340 => 83,  337 => 82,  332 => 81,  315 => 78,  308 => 77,  297 => 71,  294 => 70,  289 => 67,  285 => 65,  278 => 63,  275 => 62,  262 => 61,  259 => 60,  244 => 59,  241 => 58,  237 => 57,  234 => 56,  225 => 51,  216 => 50,  210 => 49,  206 => 48,  200 => 46,  197 => 45,  194 => 44,  191 => 43,  179 => 42,  175 => 40,  173 => 39,  170 => 38,  166 => 36,  159 => 35,  139 => 34,  135 => 33,  132 => 32,  130 => 31,  124 => 27,  118 => 23,  112 => 21,  107 => 20,  98 => 18,  95 => 17,  85 => 14,  82 => 13,  79 => 12,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  47 => 5,  34 => 3,  31 => 3,  19 => 1,);
    }
}
