<?php

/* posting_buttons.html */
class __TwigTemplate_2b11f8c978a36b323d194ff7e859405f extends Twig_Template
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
        echo "
<script type=\"text/javascript\">
// <![CDATA[
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 5
        if (isset($context["definition"])) { $_definition_ = $context["definition"]; } else { $_definition_ = null; }
        if ($this->getAttribute($_definition_, "SIG_EDIT")) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 11
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "custom_tags"));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
            echo $this->getAttribute($_custom_tags_, "BBCODE_NAME");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 16
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_B_HELP"));
        echo "',
\t\ti: '";
        // line 17
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_I_HELP"));
        echo "',
\t\tu: '";
        // line 18
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_U_HELP"));
        echo "',
\t\tq: '";
        // line 19
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP"));
        echo "',
\t\tc: '";
        // line 20
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_C_HELP"));
        echo "',
\t\tl: '";
        // line 21
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_L_HELP"));
        echo "',
\t\to: '";
        // line 22
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_O_HELP"));
        echo "',
\t\tp: '";
        // line 23
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_P_HELP"));
        echo "',
\t\tw: '";
        // line 24
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_W_HELP"));
        echo "',
\t\ta: '";
        // line 25
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_A_HELP"));
        echo "',
\t\ts: '";
        // line 26
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_S_HELP"));
        echo "',
\t\tf: '";
        // line 27
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_F_HELP"));
        echo "',
\t\ty: '";
        // line 28
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_Y_HELP"));
        echo "',
\t\td: '";
        // line 29
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_D_HELP"));
        echo "'
\t\t";
        // line 30
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "custom_tags"));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 31
            echo "\t\t\t,cb_";
            if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
            echo $this->getAttribute($_custom_tags_, "BBCODE_ID");
            echo ": '";
            if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
            echo $this->getAttribute($_custom_tags_, "A_BBCODE_HELPLINE");
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t}

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 42
        echo addslashes($this->env->getExtension('phpbb')->lang("FONT_COLOR_HIDE"));
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 46
        echo addslashes($this->env->getExtension('phpbb')->lang("FONT_COLOR"));
        echo "';
\t\t}
\t}

// ]]>
</script>
";
        // line 52
        if (isset($context["T_ASSETS_PATH"])) { $_T_ASSETS_PATH_ = $context["T_ASSETS_PATH"]; } else { $_T_ASSETS_PATH_ = null; }
        $asset_file = (("" . $_T_ASSETS_PATH_) . "/javascript/editor.js");
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
        // line 53
        echo "
";
        // line 54
        if (isset($context["S_BBCODE_ALLOWED"])) { $_S_BBCODE_ALLOWED_ = $context["S_BBCODE_ALLOWED"]; } else { $_S_BBCODE_ALLOWED_ = null; }
        if ($_S_BBCODE_ALLOWED_) {
            // line 55
            echo "<div id=\"colour_palette\" style=\"display: none;\">
\t<dl style=\"clear: left;\">
\t\t<dt><label>";
            // line 57
            echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd id=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dd>
\t</dl>
</div>

";
            // line 62
            if (isset($context["posting_editor_buttons_before"])) { $_posting_editor_buttons_before_ = $context["posting_editor_buttons_before"]; } else { $_posting_editor_buttons_before_ = null; }
            // line 63
            echo "<div id=\"format-buttons\">
\t<input type=\"button\" class=\"button2 bbcode-b\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" style=\"font-weight:bold; width: 30px\" onclick=\"bbstyle(0)\" title=\"";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-i\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" style=\"font-style:italic; width: 30px\" onclick=\"bbstyle(2)\" title=\"";
            // line 65
            echo $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-u\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" style=\"text-decoration: underline; width: 30px\" onclick=\"bbstyle(4)\" title=\"";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP");
            echo "\" />
\t";
            // line 67
            if (isset($context["S_BBCODE_QUOTE"])) { $_S_BBCODE_QUOTE_ = $context["S_BBCODE_QUOTE"]; } else { $_S_BBCODE_QUOTE_ = null; }
            if ($_S_BBCODE_QUOTE_) {
                // line 68
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-quote\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" style=\"width: 50px\" onclick=\"bbstyle(6)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP");
                echo "\" />
\t";
            }
            // line 70
            echo "\t<input type=\"button\" class=\"button2 bbcode-code\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" style=\"width: 40px\" onclick=\"bbstyle(8)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-list\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" style=\"width: 40px\" onclick=\"bbstyle(10)\" title=\"";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-list-\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" style=\"width: 40px\" onclick=\"bbstyle(12)\" title=\"";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("BBCODE_O_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-asterisk\" accesskey=\"y\" name=\"addlistitem\" value=\"[*]\" style=\"width: 40px\" onclick=\"bbstyle(-1)\" title=\"";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("BBCODE_LISTITEM_HELP");
            echo "\" />
\t";
            // line 74
            if (isset($context["S_BBCODE_IMG"])) { $_S_BBCODE_IMG_ = $context["S_BBCODE_IMG"]; } else { $_S_BBCODE_IMG_ = null; }
            if ($_S_BBCODE_IMG_) {
                // line 75
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-img\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" style=\"width: 40px\" onclick=\"bbstyle(14)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP");
                echo "\" />
\t";
            }
            // line 77
            echo "\t";
            if (isset($context["S_LINKS_ALLOWED"])) { $_S_LINKS_ALLOWED_ = $context["S_LINKS_ALLOWED"]; } else { $_S_LINKS_ALLOWED_ = null; }
            if ($_S_LINKS_ALLOWED_) {
                // line 78
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-url\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" style=\"text-decoration: underline; width: 40px\" onclick=\"bbstyle(16)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP");
                echo "\" />
\t";
            }
            // line 80
            echo "\t";
            if (isset($context["S_BBCODE_FLASH"])) { $_S_BBCODE_FLASH_ = $context["S_BBCODE_FLASH"]; } else { $_S_BBCODE_FLASH_ = null; }
            if ($_S_BBCODE_FLASH_) {
                // line 81
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-flash\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP");
                echo "\" />
\t";
            }
            // line 83
            echo "\t<select name=\"addbbcode20\" class=\"bbcode-size\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP");
            echo "\">
\t\t<option value=\"50\">";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("FONT_TINY");
            echo "</option>
\t\t<option value=\"85\">";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("FONT_SMALL");
            echo "</option>
\t\t<option value=\"100\" selected=\"selected\">";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("FONT_NORMAL");
            echo "</option>
\t\t";
            // line 87
            if (isset($context["MAX_FONT_SIZE"])) { $_MAX_FONT_SIZE_ = $context["MAX_FONT_SIZE"]; } else { $_MAX_FONT_SIZE_ = null; }
            if (((!$_MAX_FONT_SIZE_) || ($_MAX_FONT_SIZE_ >= 150))) {
                // line 88
                echo "\t\t\t<option value=\"150\">";
                echo $this->env->getExtension('phpbb')->lang("FONT_LARGE");
                echo "</option>
\t\t\t";
                // line 89
                if (isset($context["MAX_FONT_SIZE"])) { $_MAX_FONT_SIZE_ = $context["MAX_FONT_SIZE"]; } else { $_MAX_FONT_SIZE_ = null; }
                if (((!$_MAX_FONT_SIZE_) || ($_MAX_FONT_SIZE_ >= 200))) {
                    // line 90
                    echo "\t\t\t\t<option value=\"200\">";
                    echo $this->env->getExtension('phpbb')->lang("FONT_HUGE");
                    echo "</option>
\t\t\t";
                }
                // line 92
                echo "\t\t";
            }
            // line 93
            echo "\t</select>
\t<input type=\"button\" class=\"button2 bbcode-color\" name=\"bbpalette\" id=\"bbpalette\" value=\"";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
            echo "\" onclick=\"change_palette();\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_S_HELP");
            echo "\" />

\t";
            // line 96
            if (isset($context["posting_editor_buttons_custom_tags_before"])) { $_posting_editor_buttons_custom_tags_before_ = $context["posting_editor_buttons_custom_tags_before"]; } else { $_posting_editor_buttons_custom_tags_before_ = null; }
            // line 97
            echo "
\t";
            // line 98
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "custom_tags"));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 99
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-";
                if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
                echo $this->getAttribute($_custom_tags_, "BBCODE_TAG_CLEAN");
                echo "\" name=\"addbbcode";
                if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
                echo $this->getAttribute($_custom_tags_, "BBCODE_ID");
                echo "\" value=\"";
                if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
                echo $this->getAttribute($_custom_tags_, "BBCODE_TAG");
                echo "\" onclick=\"bbstyle(";
                if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
                echo $this->getAttribute($_custom_tags_, "BBCODE_ID");
                echo ")\" title=\"";
                if (isset($context["custom_tags"])) { $_custom_tags_ = $context["custom_tags"]; } else { $_custom_tags_ = null; }
                echo $this->getAttribute($_custom_tags_, "BBCODE_HELPLINE");
                echo "\" />
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "</div>
";
            // line 102
            if (isset($context["posting_editor_buttons_after"])) { $_posting_editor_buttons_after_ = $context["posting_editor_buttons_after"]; } else { $_posting_editor_buttons_after_ = null; }
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 102,  322 => 99,  317 => 98,  314 => 97,  305 => 94,  302 => 93,  290 => 89,  285 => 88,  278 => 86,  274 => 85,  270 => 84,  255 => 80,  249 => 78,  239 => 75,  236 => 74,  232 => 73,  228 => 72,  224 => 71,  219 => 70,  213 => 68,  210 => 67,  206 => 66,  202 => 65,  198 => 64,  195 => 63,  193 => 62,  180 => 55,  177 => 54,  174 => 53,  142 => 42,  131 => 33,  109 => 29,  105 => 28,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  65 => 18,  61 => 17,  57 => 16,  39 => 11,  25 => 5,  762 => 187,  758 => 185,  751 => 182,  746 => 181,  743 => 180,  740 => 179,  737 => 178,  733 => 176,  727 => 174,  723 => 173,  716 => 172,  711 => 171,  707 => 169,  703 => 168,  700 => 167,  694 => 164,  687 => 163,  682 => 162,  679 => 161,  675 => 160,  672 => 159,  643 => 156,  633 => 155,  630 => 154,  627 => 153,  624 => 152,  620 => 150,  615 => 149,  612 => 148,  601 => 146,  597 => 145,  588 => 143,  584 => 142,  575 => 140,  571 => 139,  562 => 137,  558 => 136,  549 => 134,  545 => 133,  536 => 131,  532 => 130,  523 => 128,  519 => 127,  517 => 126,  511 => 122,  507 => 121,  504 => 120,  499 => 117,  493 => 114,  490 => 113,  485 => 112,  478 => 108,  474 => 106,  471 => 105,  467 => 104,  455 => 102,  450 => 101,  447 => 100,  437 => 93,  427 => 92,  419 => 91,  412 => 90,  407 => 89,  402 => 88,  397 => 85,  393 => 84,  390 => 83,  385 => 80,  382 => 79,  379 => 78,  376 => 77,  372 => 75,  370 => 74,  350 => 71,  346 => 69,  344 => 101,  340 => 66,  337 => 65,  329 => 64,  318 => 63,  312 => 96,  307 => 61,  299 => 92,  293 => 90,  288 => 55,  282 => 87,  279 => 53,  273 => 52,  268 => 51,  265 => 83,  262 => 49,  259 => 81,  250 => 46,  245 => 77,  242 => 44,  217 => 42,  212 => 41,  207 => 40,  203 => 39,  199 => 37,  187 => 36,  184 => 57,  182 => 34,  179 => 33,  176 => 32,  173 => 31,  158 => 52,  153 => 29,  149 => 46,  134 => 26,  129 => 25,  126 => 24,  121 => 23,  118 => 31,  116 => 21,  113 => 30,  101 => 27,  98 => 15,  94 => 14,  91 => 13,  86 => 10,  46 => 8,  40 => 6,  37 => 5,  33 => 4,  30 => 3,  22 => 2,  175 => 51,  167 => 47,  163 => 46,  159 => 45,  155 => 44,  150 => 43,  141 => 36,  132 => 34,  128 => 33,  119 => 31,  115 => 30,  106 => 17,  103 => 27,  97 => 26,  84 => 24,  80 => 23,  75 => 21,  69 => 19,  60 => 12,  55 => 9,  51 => 8,  48 => 7,  43 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
