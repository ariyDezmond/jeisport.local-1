<?php

/* acp_modules.html */
class __TwigTemplate_e5dd20f8b57120e80c1f4f2bb8e93f07 extends Twig_Template
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
        if (isset($context["S_EDIT_MODULE"])) { $_S_EDIT_MODULE_ = $context["S_EDIT_MODULE"]; } else { $_S_EDIT_MODULE_ = null; }
        if ($_S_EDIT_MODULE_) {
            // line 6
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\tfunction display_options(value)
\t\t{
\t\t\tif (value == 'category')
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('modoptions', -1);
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('modoptions', 1);
\t\t\t}
\t\t}

\t\tfunction display_modes(value)
\t\t{
\t\t\t// Find the old select tag
\t\t\tvar item = document.getElementById('module_mode');

\t\t\t// Create the new select tag
\t\t\tvar new_node = document.createElement('select');
\t\t\tnew_node.setAttribute('id', 'module_mode');
\t\t\tnew_node.setAttribute('name', 'module_mode');

\t\t\t// Substitute it for the old one
\t\t\titem.parentNode.replaceChild(new_node, item);

\t\t\t// Reset the variable
\t\t\titem = document.getElementById('module_mode');

\t\t\tvar j = 0;
";
            // line 38
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "m_names"));
            foreach ($context['_seq'] as $context["_key"] => $context["m_names"]) {
                // line 39
                echo "\t\t
\t\t\tif (value == '";
                // line 40
                if (isset($context["m_names"])) { $_m_names_ = $context["m_names"]; } else { $_m_names_ = null; }
                echo $this->getAttribute($_m_names_, "A_NAME");
                echo "')
\t\t\t{
\t";
                // line 42
                if (isset($context["m_names"])) { $_m_names_ = $context["m_names"]; } else { $_m_names_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_m_names_, "modes"));
                foreach ($context['_seq'] as $context["_key"] => $context["modes"]) {
                    // line 43
                    echo "\t\t\t\titem.options[j] = new Option('";
                    if (isset($context["modes"])) { $_modes_ = $context["modes"]; } else { $_modes_ = null; }
                    echo $this->getAttribute($_modes_, "A_VALUE");
                    echo "');
\t\t\t\titem.options[j].value = '";
                    // line 44
                    if (isset($context["modes"])) { $_modes_ = $context["modes"]; } else { $_modes_ = null; }
                    echo $this->getAttribute($_modes_, "A_OPTION");
                    echo "';
\t\t\t\tj++;
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modes'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t}
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m_names'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
\t\t\t// select first item
\t\t\titem.options[0].selected = true;
\t\t}

\t// ]]>
\t</script>

\t<a href=\"";
            // line 57
            if (isset($context["U_BACK"])) { $_U_BACK_ = $context["U_BACK"]; } else { $_U_BACK_ = null; }
            echo $_U_BACK_;
            echo "\" style=\"float: ";
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo " :: ";
            if (isset($context["MODULENAME"])) { $_MODULENAME_ = $context["MODULENAME"]; } else { $_MODULENAME_ = null; }
            echo $_MODULENAME_;
            echo "</h1>

\t<p>";
            // line 61
            echo $this->env->getExtension('phpbb')->lang("EDIT_MODULE_EXPLAIN");
            echo "</p>

\t";
            // line 63
            if (isset($context["S_ERROR"])) { $_S_ERROR_ = $context["S_ERROR"]; } else { $_S_ERROR_ = null; }
            if ($_S_ERROR_) {
                // line 64
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 65
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 66
                if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
                echo $_ERROR_MSG_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 69
            echo "
\t<form id=\"moduleedit\" method=\"post\" action=\"";
            // line 70
            if (isset($context["U_EDIT_ACTION"])) { $_U_EDIT_ACTION_ = $context["U_EDIT_ACTION"]; } else { $_U_EDIT_ACTION_ = null; }
            echo $_U_EDIT_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("GENERAL_OPTIONS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"module_langname\">";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("MODULE_LANGNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t<span>";
            // line 76
            echo $this->env->getExtension('phpbb')->lang("MODULE_LANGNAME_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"module_langname\" type=\"text\" class=\"text medium\" id=\"module_langname\" value=\"";
            // line 77
            if (isset($context["MODULE_LANGNAME"])) { $_MODULE_LANGNAME_ = $context["MODULE_LANGNAME"]; } else { $_MODULE_LANGNAME_ = null; }
            echo $_MODULE_LANGNAME_;
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"module_type\">";
            // line 80
            echo $this->env->getExtension('phpbb')->lang("MODULE_TYPE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"module_type\" id=\"module_type\" onchange=\"display_options(this.value);\"><option value=\"category\"";
            // line 81
            if (isset($context["S_IS_CAT"])) { $_S_IS_CAT_ = $context["S_IS_CAT"]; } else { $_S_IS_CAT_ = null; }
            if ($_S_IS_CAT_) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("CATEGORY");
            echo "</option><option value=\"module\"";
            if (isset($context["S_IS_CAT"])) { $_S_IS_CAT_ = $context["S_IS_CAT"]; } else { $_S_IS_CAT_ = null; }
            if ((!$_S_IS_CAT_)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("MODULE");
            echo "</option></select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"parent_id\">";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("PARENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"module_parent_id\" id=\"parent_id\">";
            // line 85
            if (isset($context["S_CAT_OPTIONS"])) { $_S_CAT_OPTIONS_ = $context["S_CAT_OPTIONS"]; } else { $_S_CAT_OPTIONS_ = null; }
            echo $_S_CAT_OPTIONS_;
            echo "</select></dd>
\t</dl>
\t<hr />
\t<dl>
\t\t<dt><label for=\"module_enabled\">";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("MODULE_ENABLED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"module_enabled\" id=\"module_enabled\" value=\"1\"";
            // line 90
            if (isset($context["MODULE_ENABLED"])) { $_MODULE_ENABLED_ = $context["MODULE_ENABLED"]; } else { $_MODULE_ENABLED_ = null; }
            if ($_MODULE_ENABLED_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"module_enabled\" value=\"0\"";
            // line 91
            if (isset($context["MODULE_ENABLED"])) { $_MODULE_ENABLED_ = $context["MODULE_ENABLED"]; } else { $_MODULE_ENABLED_ = null; }
            if ((!$_MODULE_ENABLED_)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t</dl>
\t<div id=\"modoptions\"";
            // line 93
            if (isset($context["S_IS_CAT"])) { $_S_IS_CAT_ = $context["S_IS_CAT"]; } else { $_S_IS_CAT_ = null; }
            if ($_S_IS_CAT_) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t<dl>
\t\t\t<dt><label for=\"module_display\">";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("MODULE_DISPLAYED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("MODULE_DISPLAYED_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"module_display\" id=\"module_display\" value=\"1\"";
            // line 96
            if (isset($context["MODULE_DISPLAY"])) { $_MODULE_DISPLAY_ = $context["MODULE_DISPLAY"]; } else { $_MODULE_DISPLAY_ = null; }
            if ($_MODULE_DISPLAY_) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"module_display\" value=\"0\"";
            // line 97
            if (isset($context["MODULE_DISPLAY"])) { $_MODULE_DISPLAY_ = $context["MODULE_DISPLAY"]; } else { $_MODULE_DISPLAY_ = null; }
            if ((!$_MODULE_DISPLAY_)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"module_basename\">";
            // line 100
            echo $this->env->getExtension('phpbb')->lang("CHOOSE_MODULE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t<span>";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("CHOOSE_MODULE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><select name=\"module_basename\" id=\"module_basename\" onchange=\"display_modes(this.value);\">";
            // line 102
            if (isset($context["S_MODULE_NAMES"])) { $_S_MODULE_NAMES_ = $context["S_MODULE_NAMES"]; } else { $_S_MODULE_NAMES_ = null; }
            echo $_S_MODULE_NAMES_;
            echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"module_mode\">";
            // line 105
            echo $this->env->getExtension('phpbb')->lang("CHOOSE_MODE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t<span>";
            // line 106
            echo $this->env->getExtension('phpbb')->lang("CHOOSE_MODE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><select name=\"module_mode\" id=\"module_mode\">";
            // line 107
            if (isset($context["S_MODULE_MODES"])) { $_S_MODULE_MODES_ = $context["S_MODULE_MODES"]; } else { $_S_MODULE_MODES_ = null; }
            echo $_S_MODULE_MODES_;
            echo "</select></dd>
\t\t</dl>
\t</div>

\t<p class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"action\" value=\"";
            // line 112
            if (isset($context["ACTION"])) { $_ACTION_ = $context["ACTION"]; } else { $_ACTION_ = null; }
            echo $_ACTION_;
            echo "\" />
\t\t<input type=\"hidden\" name=\"m\" value=\"";
            // line 113
            if (isset($context["MODULE_ID"])) { $_MODULE_ID_ = $context["MODULE_ID"]; } else { $_MODULE_ID_ = null; }
            echo $_MODULE_ID_;
            echo "\" />
\t\t
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 116
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 118
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 123
            echo "
\t<h1>";
            // line 124
            echo $this->env->getExtension('phpbb')->lang("ACP_MODULE_MANAGEMENT");
            echo "</h1>

\t<p>";
            // line 126
            echo $this->env->getExtension('phpbb')->lang("ACP_MODULE_MANAGEMENT_EXPLAIN");
            echo "</p>

\t";
            // line 128
            if (isset($context["S_ERROR"])) { $_S_ERROR_ = $context["S_ERROR"]; } else { $_S_ERROR_ = null; }
            if ($_S_ERROR_) {
                // line 129
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 130
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 131
                if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
                echo $_ERROR_MSG_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 134
            echo "
\t<table class=\"table1\">
\t<tbody>
\t<tr>
\t\t<td class=\"row3\">";
            // line 138
            if (isset($context["NAVIGATION"])) { $_NAVIGATION_ = $context["NAVIGATION"]; } else { $_NAVIGATION_ = null; }
            echo $_NAVIGATION_;
            if (isset($context["S_NO_MODULES"])) { $_S_NO_MODULES_ = $context["S_NO_MODULES"]; } else { $_S_NO_MODULES_ = null; }
            if ($_S_NO_MODULES_) {
                echo " [<a href=\"";
                if (isset($context["U_EDIT"])) { $_U_EDIT_ = $context["U_EDIT"]; } else { $_U_EDIT_ = null; }
                echo $_U_EDIT_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EDIT");
                echo "</a> | <a href=\"";
                if (isset($context["U_DELETE"])) { $_U_DELETE_ = $context["U_DELETE"]; } else { $_U_DELETE_ = null; }
                echo $_U_DELETE_;
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "</a> | ";
                if (isset($context["MODULE_ENABLED"])) { $_MODULE_ENABLED_ = $context["MODULE_ENABLED"]; } else { $_MODULE_ENABLED_ = null; }
                if ($_MODULE_ENABLED_) {
                    echo "<a href=\"";
                    if (isset($context["U_DISABLE"])) { $_U_DISABLE_ = $context["U_DISABLE"]; } else { $_U_DISABLE_ = null; }
                    echo $_U_DISABLE_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE");
                    echo "</a>";
                } else {
                    echo "<a href=\"";
                    if (isset($context["U_ENABLE"])) { $_U_ENABLE_ = $context["U_ENABLE"]; } else { $_U_ENABLE_ = null; }
                    echo $_U_ENABLE_;
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("ENABLE");
                    echo "</a>";
                }
                echo "]";
            }
            echo "</td>
\t</tr>
\t</tbody>
\t</table>

\t";
            // line 143
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_loops_, "modules"))) {
                // line 144
                echo "\t\t<table class=\"table1\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" /><col class=\"row2\" />
\t\t<tbody>
\t\t";
                // line 147
                if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "modules"));
                foreach ($context['_seq'] as $context["_key"] => $context["modules"]) {
                    // line 148
                    echo "\t\t\t<tr>
\t\t\t\t<td style=\"width: 5%; text-align: center;\">";
                    // line 149
                    if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
                    echo $this->getAttribute($_modules_, "MODULE_IMAGE");
                    echo "</td>
\t\t\t\t<td><a href=\"";
                    // line 150
                    if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
                    echo $this->getAttribute($_modules_, "U_MODULE");
                    echo "\">";
                    if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
                    echo $this->getAttribute($_modules_, "MODULE_TITLE");
                    echo "</a>";
                    if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
                    if ((!$this->getAttribute($_modules_, "MODULE_DISPLAYED"))) {
                        echo " <span class=\"small\">[";
                        echo $this->env->getExtension('phpbb')->lang("HIDDEN_MODULE");
                        echo "]</span>";
                    }
                    echo "</td>
\t\t\t\t<td style=\"width: 15%; white-space: nowrap; text-align: center; vertical-align: middle;\">&nbsp;";
                    // line 151
                    if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
                    if ($this->getAttribute($_modules_, "MODULE_ENABLED")) {
                        echo "<a href=\"";
                        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
                        echo $this->getAttribute($_modules_, "U_DISABLE");
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("DISABLE");
                        echo "</a>";
                    } else {
                        echo "<a href=\"";
                        if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
                        echo $this->getAttribute($_modules_, "U_ENABLE");
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("ENABLE");
                        echo "</a>";
                    }
                    echo "&nbsp;</td>
\t\t\t\t<td class=\"actions\">
\t\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                    // line 153
                    if (isset($context["ICON_MOVE_UP_DISABLED"])) { $_ICON_MOVE_UP_DISABLED_ = $context["ICON_MOVE_UP_DISABLED"]; } else { $_ICON_MOVE_UP_DISABLED_ = null; }
                    echo $_ICON_MOVE_UP_DISABLED_;
                    echo "</span>
\t\t\t\t\t<span class=\"up\"><a href=\"";
                    // line 154
                    if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
                    echo $this->getAttribute($_modules_, "U_MOVE_UP");
                    echo "\" data-ajax=\"row_up\">";
                    if (isset($context["ICON_MOVE_UP"])) { $_ICON_MOVE_UP_ = $context["ICON_MOVE_UP"]; } else { $_ICON_MOVE_UP_ = null; }
                    echo $_ICON_MOVE_UP_;
                    echo "</a></span>
\t\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                    // line 155
                    if (isset($context["ICON_MOVE_DOWN_DISABLED"])) { $_ICON_MOVE_DOWN_DISABLED_ = $context["ICON_MOVE_DOWN_DISABLED"]; } else { $_ICON_MOVE_DOWN_DISABLED_ = null; }
                    echo $_ICON_MOVE_DOWN_DISABLED_;
                    echo "</span>
\t\t\t\t\t<span class=\"down\"><a href=\"";
                    // line 156
                    if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
                    echo $this->getAttribute($_modules_, "U_MOVE_DOWN");
                    echo "\" data-ajax=\"row_down\">";
                    if (isset($context["ICON_MOVE_DOWN"])) { $_ICON_MOVE_DOWN_ = $context["ICON_MOVE_DOWN"]; } else { $_ICON_MOVE_DOWN_ = null; }
                    echo $_ICON_MOVE_DOWN_;
                    echo "</a></span>
\t\t\t\t\t<a href=\"";
                    // line 157
                    if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
                    echo $this->getAttribute($_modules_, "U_EDIT");
                    echo "\">";
                    if (isset($context["ICON_EDIT"])) { $_ICON_EDIT_ = $context["ICON_EDIT"]; } else { $_ICON_EDIT_ = null; }
                    echo $_ICON_EDIT_;
                    echo "</a> 
\t\t\t\t\t<a href=\"";
                    // line 158
                    if (isset($context["modules"])) { $_modules_ = $context["modules"]; } else { $_modules_ = null; }
                    echo $this->getAttribute($_modules_, "U_DELETE");
                    echo "\" data-ajax=\"row_delete\">";
                    if (isset($context["ICON_DELETE"])) { $_ICON_DELETE_ = $context["ICON_DELETE"]; } else { $_ICON_DELETE_ = null; }
                    echo $_ICON_DELETE_;
                    echo "</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modules'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 162
                echo "\t\t</tbody>
\t\t</table>
\t";
            }
            // line 165
            echo "
\t<div class=\"clearfix\">&nbsp;</div>

\t<form id=\"quick\" method=\"post\" action=\"";
            // line 168
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset class=\"quick\" style=\"float: ";
            // line 170
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">
\t\t<input type=\"hidden\" name=\"action\" value=\"quickadd\" />

\t\t<select name=\"quick_install\">";
            // line 173
            if (isset($context["S_INSTALL_OPTIONS"])) { $_S_INSTALL_OPTIONS_ = $context["S_INSTALL_OPTIONS"]; } else { $_S_INSTALL_OPTIONS_ = null; }
            echo $_S_INSTALL_OPTIONS_;
            echo "</select>
\t\t<input class=\"button2\" name=\"quickadd\" type=\"submit\" value=\"";
            // line 174
            echo $this->env->getExtension('phpbb')->lang("ADD_MODULE");
            echo "\" />
\t</fieldset>
\t
\t</form>

\t<form id=\"module\" method=\"post\" action=\"";
            // line 179
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset class=\"quick\" style=\"float: ";
            // line 181
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo ";\">
\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />
\t\t<input type=\"hidden\" name=\"module_parent_id\" value=\"";
            // line 183
            if (isset($context["PARENT_ID"])) { $_PARENT_ID_ = $context["PARENT_ID"]; } else { $_PARENT_ID_ = null; }
            echo $_PARENT_ID_;
            echo "\" />

\t\t<input type=\"text\" name=\"module_langname\" maxlength=\"255\" /> 
\t\t<input class=\"button2\" name=\"addmodule\" type=\"submit\" value=\"";
            // line 186
            echo $this->env->getExtension('phpbb')->lang("CREATE_MODULE");
            echo "\" />
\t</fieldset>

\t</form>

\t<div class=\"clearfix\">&nbsp;</div><br style=\"clear: both;\" />
\t
\t<form id=\"mselect\" method=\"post\" action=\"";
            // line 193
            if (isset($context["U_SEL_ACTION"])) { $_U_SEL_ACTION_ = $context["U_SEL_ACTION"]; } else { $_U_SEL_ACTION_ = null; }
            echo $_U_SEL_ACTION_;
            echo "\">
\t<fieldset class=\"quick\">
\t\t";
            // line 195
            echo $this->env->getExtension('phpbb')->lang("SELECT_MODULE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"parent_id\" onchange=\"if(this.options[this.selectedIndex].value != -1){ this.form.submit(); }\">";
            if (isset($context["MODULE_BOX"])) { $_MODULE_BOX_ = $context["MODULE_BOX"]; } else { $_MODULE_BOX_ = null; }
            echo $_MODULE_BOX_;
            echo "</select> 

\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 197
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" />
\t</fieldset>
\t</form>

";
        }
        // line 202
        echo "
";
        // line 203
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
        return "acp_modules.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  626 => 203,  623 => 202,  615 => 197,  606 => 195,  600 => 193,  590 => 186,  583 => 183,  577 => 181,  571 => 179,  563 => 174,  558 => 173,  551 => 170,  545 => 168,  540 => 165,  535 => 162,  521 => 158,  513 => 157,  505 => 156,  500 => 155,  492 => 154,  487 => 153,  467 => 151,  452 => 150,  447 => 149,  444 => 148,  439 => 147,  434 => 144,  431 => 143,  391 => 138,  385 => 134,  378 => 131,  374 => 130,  371 => 129,  368 => 128,  363 => 126,  358 => 124,  355 => 123,  346 => 118,  341 => 116,  337 => 115,  331 => 113,  326 => 112,  317 => 107,  313 => 106,  308 => 105,  301 => 102,  297 => 101,  292 => 100,  281 => 97,  272 => 96,  265 => 95,  257 => 93,  247 => 91,  238 => 90,  233 => 89,  225 => 85,  220 => 84,  202 => 81,  197 => 80,  190 => 77,  186 => 76,  181 => 75,  176 => 73,  169 => 70,  166 => 69,  159 => 66,  155 => 65,  152 => 64,  149 => 63,  144 => 61,  136 => 59,  125 => 57,  115 => 49,  108 => 47,  98 => 44,  92 => 43,  87 => 42,  81 => 40,  78 => 39,  73 => 38,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
