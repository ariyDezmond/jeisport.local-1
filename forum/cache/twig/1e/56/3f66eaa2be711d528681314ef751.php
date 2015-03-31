<?php

/* simple_footer.html */
class __TwigTemplate_1e563f66eaa2be711d528681314ef751 extends Twig_Template
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
        echo "\t</div>

\t<div class=\"copyright\">";
        // line 3
        if (isset($context["CREDIT_LINE"])) { $_CREDIT_LINE_ = $context["CREDIT_LINE"]; } else { $_CREDIT_LINE_ = null; }
        echo $_CREDIT_LINE_;
        echo "
\t\t";
        // line 4
        if (isset($context["TRANSLATION_INFO"])) { $_TRANSLATION_INFO_ = $context["TRANSLATION_INFO"]; } else { $_TRANSLATION_INFO_ = null; }
        if ($_TRANSLATION_INFO_) {
            echo "<br />";
            if (isset($context["TRANSLATION_INFO"])) { $_TRANSLATION_INFO_ = $context["TRANSLATION_INFO"]; } else { $_TRANSLATION_INFO_ = null; }
            echo $_TRANSLATION_INFO_;
        }
        // line 5
        echo "\t\t";
        if (isset($context["DEBUG_OUTPUT"])) { $_DEBUG_OUTPUT_ = $context["DEBUG_OUTPUT"]; } else { $_DEBUG_OUTPUT_ = null; }
        if ($_DEBUG_OUTPUT_) {
            echo "<br />";
            if (isset($context["DEBUG_OUTPUT"])) { $_DEBUG_OUTPUT_ = $context["DEBUG_OUTPUT"]; } else { $_DEBUG_OUTPUT_ = null; }
            echo $_DEBUG_OUTPUT_;
        }
        // line 6
        echo "\t</div>

\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>
\t<div id=\"loading_indicator\"></div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\"></h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

<script type=\"text/javascript\" src=\"";
        // line 23
        if (isset($context["T_JQUERY_LINK"])) { $_T_JQUERY_LINK_ = $context["T_JQUERY_LINK"]; } else { $_T_JQUERY_LINK_ = null; }
        echo $_T_JQUERY_LINK_;
        echo "\"></script>
";
        // line 24
        if (isset($context["S_ALLOW_CDN"])) { $_S_ALLOW_CDN_ = $context["S_ALLOW_CDN"]; } else { $_S_ALLOW_CDN_ = null; }
        if ($_S_ALLOW_CDN_) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write(unescape('%3Cscript src=\"";
            if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
            echo $_T_ASSETS_PATH_;
            echo "/javascript/jquery.min.js?assets_version=";
            if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
            echo $_T_ASSETS_VERSION_;
            echo "\" type=\"text/javascript\"%3E%3C/script%3E'));</script>";
        }
        // line 25
        echo "<script type=\"text/javascript\" src=\"";
        if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
        echo $_T_ASSETS_PATH_;
        echo "/javascript/core.js?assets_version=";
        if (isset($context["T_ASSETS_VERSION"])) { $_T_ASSETS_VERSION_ = $context["T_ASSETS_VERSION"]; } else { $_T_ASSETS_VERSION_ = null; }
        echo $_T_ASSETS_VERSION_;
        echo "\"></script>
";
        // line 26
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 27
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 28
        echo "
";
        // line 29
        if (isset($context["simple_footer_after"])) { $_simple_footer_after_ = $context["simple_footer_after"]; } else { $_simple_footer_after_ = null; }
        // line 30
        echo "
";
        // line 31
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        echo $this->getAttribute($_definition_, "SCRIPTS");
        echo "

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "simple_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 28,  118 => 27,  103 => 26,  94 => 25,  78 => 23,  63 => 13,  47 => 8,  43 => 6,  28 => 4,  23 => 3,  247 => 80,  243 => 79,  231 => 71,  224 => 68,  219 => 67,  216 => 66,  213 => 65,  204 => 63,  199 => 62,  196 => 61,  186 => 58,  181 => 57,  175 => 55,  166 => 53,  161 => 52,  148 => 46,  143 => 45,  138 => 30,  132 => 41,  127 => 40,  124 => 39,  117 => 36,  113 => 35,  110 => 34,  107 => 33,  100 => 30,  85 => 25,  72 => 16,  58 => 15,  50 => 14,  44 => 12,  40 => 10,  25 => 3,  152 => 36,  150 => 35,  141 => 31,  136 => 29,  128 => 27,  123 => 25,  120 => 24,  116 => 23,  106 => 20,  102 => 18,  92 => 28,  89 => 27,  80 => 13,  69 => 11,  64 => 10,  56 => 9,  38 => 9,  33 => 7,  813 => 159,  800 => 158,  786 => 156,  783 => 155,  778 => 152,  772 => 150,  767 => 149,  755 => 148,  750 => 147,  745 => 146,  738 => 141,  732 => 138,  725 => 137,  717 => 136,  714 => 135,  710 => 134,  707 => 133,  701 => 131,  698 => 130,  695 => 129,  692 => 128,  684 => 125,  680 => 124,  677 => 123,  673 => 122,  665 => 116,  649 => 113,  646 => 112,  640 => 110,  632 => 109,  627 => 108,  607 => 107,  588 => 106,  552 => 105,  543 => 104,  540 => 103,  537 => 102,  534 => 101,  530 => 100,  525 => 97,  522 => 96,  515 => 95,  511 => 94,  493 => 93,  489 => 92,  484 => 91,  481 => 90,  471 => 89,  464 => 88,  446 => 87,  439 => 86,  417 => 85,  413 => 84,  405 => 78,  397 => 72,  394 => 71,  383 => 68,  380 => 67,  375 => 66,  370 => 65,  366 => 64,  359 => 63,  353 => 59,  343 => 58,  336 => 57,  318 => 56,  311 => 55,  283 => 54,  275 => 48,  270 => 47,  267 => 46,  262 => 43,  256 => 41,  251 => 81,  239 => 39,  234 => 72,  229 => 37,  223 => 33,  210 => 31,  205 => 30,  202 => 29,  178 => 56,  158 => 24,  154 => 22,  147 => 21,  140 => 44,  134 => 29,  125 => 26,  111 => 16,  108 => 15,  105 => 14,  98 => 11,  95 => 29,  83 => 24,  75 => 17,  62 => 7,  48 => 4,  35 => 5,  22 => 2,  19 => 1,);
    }
}
