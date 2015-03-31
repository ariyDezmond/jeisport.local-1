<?php

/* acp_language.html */
class __TwigTemplate_45d9ddac9f025012765b76b6290c4ff0 extends Twig_Template
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

";
        // line 5
        if (isset($context["S_DETAILS"])) { $_S_DETAILS_ = $context["S_DETAILS"]; } else { $_S_DETAILS_ = null; }
        if ($_S_DETAILS_) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("LANGUAGE_PACK_DETAILS");
            echo "</h1>

\t<form id=\"details\" method=\"post\" action=\"";
            // line 11
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 14
            if (isset($context["LANG_LOCAL_NAME"])) { $_LANG_LOCAL_NAME_ = $context["LANG_LOCAL_NAME"]; } else { $_LANG_LOCAL_NAME_ = null; }
            echo $_LANG_LOCAL_NAME_;
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"lang_english_name\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("LANG_ENGLISH_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"lang_english_name\" name=\"lang_english_name\" value=\"";
            // line 17
            if (isset($context["LANG_ENGLISH_NAME"])) { $_LANG_ENGLISH_NAME_ = $context["LANG_ENGLISH_NAME"]; } else { $_LANG_ENGLISH_NAME_ = null; }
            echo $_LANG_ENGLISH_NAME_;
            echo "\" maxlength=\"100\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"lang_local_name\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("LANG_LOCAL_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"lang_local_name\" name=\"lang_local_name\" value=\"";
            // line 21
            if (isset($context["LANG_LOCAL_NAME"])) { $_LANG_LOCAL_NAME_ = $context["LANG_LOCAL_NAME"]; } else { $_LANG_LOCAL_NAME_ = null; }
            echo $_LANG_LOCAL_NAME_;
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("LANG_ISO_CODE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 25
            if (isset($context["LANG_ISO"])) { $_LANG_ISO_ = $context["LANG_ISO"]; } else { $_LANG_ISO_ = null; }
            echo $_LANG_ISO_;
            echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"lang_author\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("LANG_AUTHOR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"lang_author\" name=\"lang_author\" value=\"";
            // line 29
            if (isset($context["LANG_AUTHOR"])) { $_LANG_AUTHOR_ = $context["LANG_AUTHOR"]; } else { $_LANG_AUTHOR_ = null; }
            echo $_LANG_AUTHOR_;
            echo "\" maxlength=\"255\" /></dd>
\t</dl>

\t<p class=\"quick\" style=\"margin-top: -15px;\">
\t\t<input type=\"submit\" name=\"update_details\" class=\"button2\" value=\"";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 35
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

\t";
            // line 39
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "missing_files"))) {
                // line 40
                echo "\t\t<h3 class=\"error\">";
                echo $this->env->getExtension('phpbb')->lang("MISSING_FILES");
                echo "</h3>

\t\t<fieldset>
\t\t\t<legend>";
                // line 43
                echo $this->env->getExtension('phpbb')->lang("MISSING_LANG_FILES");
                echo "</legend>
\t\t\t";
                // line 44
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "missing_files"));
                foreach ($context['_seq'] as $context["_key"] => $context["missing_files"]) {
                    // line 45
                    echo "\t\t\t&raquo; ";
                    if (isset($context["missing_files"])) { $_missing_files_ = $context["missing_files"]; } else { $_missing_files_ = null; }
                    echo $this->getAttribute($_missing_files_, "FILE_NAME");
                    echo "<br />
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missing_files'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t</fieldset>
\t";
            }
            // line 49
            echo "
\t";
            // line 50
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "missing_varfile"))) {
                // line 51
                echo "\t\t<h3 class=\"error\">";
                echo $this->env->getExtension('phpbb')->lang("MISSING_VARS_EXPLAIN");
                echo "</h3>

\t\t<fieldset>
\t\t\t<legend>";
                // line 54
                echo $this->env->getExtension('phpbb')->lang("MISSING_LANG_VARIABLES");
                echo "</legend>
\t\t\t";
                // line 55
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "missing_varfile"));
                foreach ($context['_seq'] as $context["_key"] => $context["missing_varfile"]) {
                    // line 56
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 57
                    if (isset($context["missing_varfile"])) { $_missing_varfile_ = $context["missing_varfile"]; } else { $_missing_varfile_ = null; }
                    echo $this->getAttribute($_missing_varfile_, "FILE_NAME");
                    echo "</label></dt>
\t\t\t\t";
                    // line 58
                    if (isset($context["missing_varfile"])) { $_missing_varfile_ = $context["missing_varfile"]; } else { $_missing_varfile_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_missing_varfile_, "variable"));
                    foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
                        // line 59
                        echo "\t\t\t\t<dd>";
                        if (isset($context["variable"])) { $_variable_ = $context["variable"]; } else { $_variable_ = null; }
                        echo $this->getAttribute($_variable_, "VAR_NAME");
                        echo "</dd>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variable'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "\t\t\t</dl>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missing_varfile'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t</fieldset>
\t";
            }
        } else {
            // line 66
            echo "
\t<h1>";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("ACP_LANGUAGE_PACKS");
            echo "</h1>

\t<p>";
            // line 69
            echo $this->env->getExtension('phpbb')->lang("ACP_LANGUAGE_PACKS_EXPLAIN");
            echo "</p>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 74
            echo $this->env->getExtension('phpbb')->lang("LANGUAGE_PACK_NAME");
            echo "</th>
\t\t<th>";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("LANGUAGE_PACK_LOCALNAME");
            echo "</th>
\t\t<th>";
            // line 76
            echo $this->env->getExtension('phpbb')->lang("LANGUAGE_PACK_ISO");
            echo "</th>
\t\t<th>";
            // line 77
            echo $this->env->getExtension('phpbb')->lang("LANGUAGE_PACK_USED_BY");
            echo "</th>
\t\t<th>";
            // line 78
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td class=\"row3\" colspan=\"5\"><strong>";
            // line 83
            echo $this->env->getExtension('phpbb')->lang("INSTALLED_LANGUAGE_PACKS");
            echo "</strong></td>
\t</tr>
\t";
            // line 85
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "lang"));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 86
                echo "\t<tr>
\t\t<td><a href=\"";
                // line 87
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo $this->getAttribute($_lang_, "U_DETAILS");
                echo "\">";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo $this->getAttribute($_lang_, "ENGLISH_NAME");
                echo "</a> ";
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo $this->getAttribute($_lang_, "TAG");
                echo "</td>
\t\t<td>";
                // line 88
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo $this->getAttribute($_lang_, "LOCAL_NAME");
                echo "</td>
\t\t<td style=\"text-align: center;\"><strong>";
                // line 89
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo $this->getAttribute($_lang_, "ISO");
                echo "</strong></td>
\t\t<td style=\"text-align: center;\">";
                // line 90
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo $this->getAttribute($_lang_, "USED_BY");
                echo "</td>
\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 91
                if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                echo $this->getAttribute($_lang_, "U_DELETE");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "</a></td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "\t";
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "notinst"))) {
                // line 95
                echo "\t<tr>
\t\t<td class=\"row3\" colspan=\"5\"><strong>";
                // line 96
                echo $this->env->getExtension('phpbb')->lang("UNINSTALLED_LANGUAGE_PACKS");
                echo "</strong></td>
\t</tr>
\t";
            }
            // line 99
            echo "\t";
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "notinst"));
            foreach ($context['_seq'] as $context["_key"] => $context["notinst"]) {
                // line 100
                echo "\t<tr>
\t\t<td>";
                // line 101
                if (isset($context["notinst"])) { $_notinst_ = $context["notinst"]; } else { $_notinst_ = null; }
                echo $this->getAttribute($_notinst_, "NAME");
                echo "</td>
\t\t<td>";
                // line 102
                if (isset($context["notinst"])) { $_notinst_ = $context["notinst"]; } else { $_notinst_ = null; }
                echo $this->getAttribute($_notinst_, "LOCAL_NAME");
                echo "</td>
\t\t<td style=\"text-align: center;\"><strong>";
                // line 103
                if (isset($context["notinst"])) { $_notinst_ = $context["notinst"]; } else { $_notinst_ = null; }
                echo $this->getAttribute($_notinst_, "ISO");
                echo "</strong></td>
\t\t<td colspan=\"2\" style=\"text-align: center;\"><a href=\"";
                // line 104
                if (isset($context["notinst"])) { $_notinst_ = $context["notinst"]; } else { $_notinst_ = null; }
                echo $this->getAttribute($_notinst_, "U_INSTALL");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("INSTALL");
                echo "</a></td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notinst'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t</tbody>
\t</table>

";
        }
        // line 111
        echo "
";
        // line 112
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
        return "acp_language.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 112,  369 => 111,  363 => 107,  351 => 104,  346 => 103,  341 => 102,  336 => 101,  333 => 100,  327 => 99,  321 => 96,  318 => 95,  314 => 94,  302 => 91,  297 => 90,  292 => 89,  287 => 88,  276 => 87,  273 => 86,  268 => 85,  263 => 83,  255 => 78,  251 => 77,  247 => 76,  243 => 75,  239 => 74,  231 => 69,  226 => 67,  223 => 66,  218 => 63,  211 => 61,  201 => 59,  196 => 58,  191 => 57,  188 => 56,  183 => 55,  179 => 54,  172 => 51,  169 => 50,  166 => 49,  162 => 47,  152 => 45,  147 => 44,  143 => 43,  136 => 40,  133 => 39,  125 => 35,  120 => 33,  112 => 29,  107 => 28,  100 => 25,  95 => 24,  88 => 21,  83 => 20,  76 => 17,  71 => 16,  65 => 14,  58 => 11,  53 => 9,  42 => 7,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
