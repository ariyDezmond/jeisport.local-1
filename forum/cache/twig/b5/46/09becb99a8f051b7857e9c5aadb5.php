<?php

/* timezone_option.html */
class __TwigTemplate_b54609becb99a8f051b7857e9c5aadb5 extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"timezone\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("BOARD_TIMEZONE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t";
        // line 3
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "timezone_date"))) {
            // line 4
            echo "\t<dd id=\"tz_select_date\" style=\"display: none;\">
\t\t<select name=\"tz_date\" id=\"tz_date\" class=\"autowidth tz_select\">
\t\t\t<option value=\"\">";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("SELECT_CURRENT_TIME");
            echo "</option>
\t\t\t";
            // line 7
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "timezone_date"));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_date"]) {
                // line 8
                echo "\t\t\t\t<option value=\"";
                if (isset($context["timezone_date"])) { $_timezone_date_ = $context["timezone_date"]; } else { $_timezone_date_ = null; }
                echo $this->getAttribute($_timezone_date_, "VALUE");
                echo "\"";
                if (isset($context["timezone_date"])) { $_timezone_date_ = $context["timezone_date"]; } else { $_timezone_date_ = null; }
                if ($this->getAttribute($_timezone_date_, "SELECTED")) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (isset($context["timezone_date"])) { $_timezone_date_ = $context["timezone_date"]; } else { $_timezone_date_ = null; }
                echo $this->getAttribute($_timezone_date_, "TITLE");
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t</select>
\t\t<input type=\"button\" id=\"tz_select_date_suggest\" class=\"button2\" style=\"display: none;\" timezone-preselect=\"";
            // line 11
            if (isset($context["S_TZ_PRESELECT"])) { $_S_TZ_PRESELECT_ = $context["S_TZ_PRESELECT"]; } else { $_S_TZ_PRESELECT_ = null; }
            if ($_S_TZ_PRESELECT_) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" data-l-suggestion=\"";
            echo $this->env->getExtension('phpbb')->lang("TIMEZONE_DATE_SUGGESTION");
            echo "\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("TIMEZONE_DATE_SUGGESTION");
            echo "\" />
\t</dd>
\t";
        }
        // line 14
        echo "\t<dd>
\t\t<select name=\"tz\" id=\"timezone\" class=\"autowidth tz_select\">
\t\t\t<option value=\"\">";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("SELECT_TIMEZONE");
        echo "</option>
\t\t\t";
        // line 17
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "timezone_select"));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone_select"]) {
            // line 18
            echo "\t\t\t<optgroup label=\"";
            if (isset($context["timezone_select"])) { $_timezone_select_ = $context["timezone_select"]; } else { $_timezone_select_ = null; }
            echo $this->getAttribute($_timezone_select_, "LABEL");
            echo "\" data-tz-value=\"";
            if (isset($context["timezone_select"])) { $_timezone_select_ = $context["timezone_select"]; } else { $_timezone_select_ = null; }
            echo $this->getAttribute($_timezone_select_, "VALUE");
            echo "\">
\t\t\t\t";
            // line 19
            if (isset($context["timezone_select"])) { $_timezone_select_ = $context["timezone_select"]; } else { $_timezone_select_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_timezone_select_, "timezone_options"));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_options"]) {
                // line 20
                echo "\t\t\t\t<option title=\"";
                if (isset($context["timezone_options"])) { $_timezone_options_ = $context["timezone_options"]; } else { $_timezone_options_ = null; }
                echo $this->getAttribute($_timezone_options_, "TITLE");
                echo "\" value=\"";
                if (isset($context["timezone_options"])) { $_timezone_options_ = $context["timezone_options"]; } else { $_timezone_options_ = null; }
                echo $this->getAttribute($_timezone_options_, "VALUE");
                echo "\"";
                if (isset($context["timezone_options"])) { $_timezone_options_ = $context["timezone_options"]; } else { $_timezone_options_ = null; }
                if ($this->getAttribute($_timezone_options_, "SELECTED")) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (isset($context["timezone_options"])) { $_timezone_options_ = $context["timezone_options"]; } else { $_timezone_options_ = null; }
                echo $this->getAttribute($_timezone_options_, "LABEL");
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t</optgroup>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_select'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</select>

\t\t";
        // line 26
        $asset_file = "timezone.js";
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
        echo "\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "timezone_option.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 27,  138 => 26,  134 => 24,  127 => 22,  106 => 20,  101 => 19,  92 => 18,  87 => 17,  83 => 16,  79 => 14,  64 => 11,  61 => 10,  38 => 7,  30 => 4,  27 => 3,  22 => 2,  376 => 124,  339 => 91,  334 => 90,  324 => 84,  320 => 83,  313 => 82,  305 => 76,  303 => 75,  297 => 73,  290 => 70,  281 => 67,  278 => 66,  265 => 65,  258 => 62,  253 => 61,  250 => 60,  245 => 59,  238 => 56,  233 => 55,  230 => 54,  226 => 53,  214 => 49,  205 => 48,  196 => 47,  190 => 45,  187 => 44,  183 => 43,  171 => 39,  162 => 38,  154 => 36,  151 => 35,  148 => 34,  137 => 31,  128 => 30,  120 => 28,  108 => 24,  99 => 23,  93 => 21,  81 => 17,  72 => 16,  66 => 14,  63 => 13,  60 => 12,  52 => 11,  43 => 8,  34 => 6,  31 => 2,  19 => 1,);
    }
}
