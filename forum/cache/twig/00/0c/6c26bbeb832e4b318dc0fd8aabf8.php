<?php

/* acp_bots.html */
class __TwigTemplate_000c6c26bbeb832e4b318dc0fd8aabf8 extends Twig_Template
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
        if (isset($context["S_EDIT_BOT"])) { $_S_EDIT_BOT_ = $context["S_EDIT_BOT"]; } else { $_S_EDIT_BOT_ = null; }
        if ($_S_EDIT_BOT_) {
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
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("BOT_EDIT_EXPLAIN");
            echo "</p>

\t";
            // line 13
            if (isset($context["S_ERROR"])) { $_S_ERROR_ = $context["S_ERROR"]; } else { $_S_ERROR_ = null; }
            if ($_S_ERROR_) {
                // line 14
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 15
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 16
                if (isset($context["ERROR_MSG"])) { $_ERROR_MSG_ = $context["ERROR_MSG"]; } else { $_ERROR_MSG_ = null; }
                echo $_ERROR_MSG_;
                echo "</p>
\t\t</div>
\t";
            }
            // line 19
            echo "
\t<form id=\"acp_bots\" method=\"post\" action=\"";
            // line 20
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"bot_name\">";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("BOT_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BOT_NAME_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"bot_name\" type=\"text\" id=\"bot_name\" value=\"";
            // line 26
            if (isset($context["BOT_NAME"])) { $_BOT_NAME_ = $context["BOT_NAME"]; } else { $_BOT_NAME_ = null; }
            echo $_BOT_NAME_;
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"bot_style\">";
            // line 29
            echo $this->env->getExtension('phpbb')->lang("BOT_STYLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BOT_STYLE_EXPLAIN");
            echo "</span></dt>
\t\t<dd><select id=\"bot_style\" name=\"bot_style\">";
            // line 30
            if (isset($context["S_STYLE_OPTIONS"])) { $_S_STYLE_OPTIONS_ = $context["S_STYLE_OPTIONS"]; } else { $_S_STYLE_OPTIONS_ = null; }
            echo $_S_STYLE_OPTIONS_;
            echo "</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"bot_lang\">";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("BOT_LANG");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BOT_LANG_EXPLAIN");
            echo "</span></dt>
\t\t<dd><select id=\"bot_lang\" name=\"bot_lang\">";
            // line 34
            if (isset($context["S_LANG_OPTIONS"])) { $_S_LANG_OPTIONS_ = $context["S_LANG_OPTIONS"]; } else { $_S_LANG_OPTIONS_ = null; }
            echo $_S_LANG_OPTIONS_;
            echo "</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"bot_active\">";
            // line 37
            echo $this->env->getExtension('phpbb')->lang("BOT_ACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"bot_active\" name=\"bot_active\">";
            // line 38
            if (isset($context["S_ACTIVE_OPTIONS"])) { $_S_ACTIVE_OPTIONS_ = $context["S_ACTIVE_OPTIONS"]; } else { $_S_ACTIVE_OPTIONS_ = null; }
            echo $_S_ACTIVE_OPTIONS_;
            echo "</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"bot_agent\">";
            // line 41
            echo $this->env->getExtension('phpbb')->lang("BOT_AGENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BOT_AGENT_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"bot_agent\" type=\"text\" id=\"bot_agent\" value=\"";
            // line 42
            if (isset($context["BOT_AGENT"])) { $_BOT_AGENT_ = $context["BOT_AGENT"]; } else { $_BOT_AGENT_ = null; }
            echo $_BOT_AGENT_;
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"bot_ip\">";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("BOT_IP");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BOT_IP_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input name=\"bot_ip\" type=\"text\" id=\"bot_ip\" value=\"";
            // line 46
            if (isset($context["BOT_IP"])) { $_BOT_IP_ = $context["BOT_IP"]; } else { $_BOT_IP_ = null; }
            echo $_BOT_IP_;
            echo "\" maxlength=\"255\" /></dd>
\t</dl>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 50
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 52
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        } else {
            // line 58
            echo "
\t<h1>";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("BOTS");
            echo "</h1>

\t<p>";
            // line 61
            echo $this->env->getExtension('phpbb')->lang("BOTS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_bots\" method=\"post\" action=\"";
            // line 63
            if (isset($context["U_ACTION"])) { $_U_ACTION_ = $context["U_ACTION"]; } else { $_U_ACTION_ = null; }
            echo $_U_ACTION_;
            echo "\">

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("BOT_NAME");
            echo "</th>
\t\t<th>";
            // line 69
            echo $this->env->getExtension('phpbb')->lang("BOT_LAST_VISIT");
            echo "</th>
\t\t<th colspan=\"3\">";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</th>
\t\t<th>";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 75
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "bots"));
            foreach ($context['_seq'] as $context["_key"] => $context["bots"]) {
                // line 76
                echo "\t\t<tr>
\t\t\t<td style=\"width: 50%;\">";
                // line 77
                if (isset($context["bots"])) { $_bots_ = $context["bots"]; } else { $_bots_ = null; }
                echo $this->getAttribute($_bots_, "BOT_NAME");
                echo "</td>
\t\t\t<td style=\"width: 15%; white-space: nowrap;\" align=\"center\">&nbsp;";
                // line 78
                if (isset($context["bots"])) { $_bots_ = $context["bots"]; } else { $_bots_ = null; }
                echo $this->getAttribute($_bots_, "LAST_VISIT");
                echo "&nbsp;</td>
\t\t\t<td style=\"text-align: center;\">&nbsp;<a href=\"";
                // line 79
                if (isset($context["bots"])) { $_bots_ = $context["bots"]; } else { $_bots_ = null; }
                echo $this->getAttribute($_bots_, "U_ACTIVATE_DEACTIVATE");
                echo "\" data-ajax=\"activate_deactivate\">";
                if (isset($context["bots"])) { $_bots_ = $context["bots"]; } else { $_bots_ = null; }
                echo $this->getAttribute($_bots_, "L_ACTIVATE_DEACTIVATE");
                echo "</a>&nbsp;</td>
\t\t\t<td style=\"text-align: center;\">&nbsp;<a href=\"";
                // line 80
                if (isset($context["bots"])) { $_bots_ = $context["bots"]; } else { $_bots_ = null; }
                echo $this->getAttribute($_bots_, "U_EDIT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EDIT");
                echo "</a>&nbsp;</td>
\t\t\t<td style=\"text-align: center;\">&nbsp;<a href=\"";
                // line 81
                if (isset($context["bots"])) { $_bots_ = $context["bots"]; } else { $_bots_ = null; }
                echo $this->getAttribute($_bots_, "U_DELETE");
                echo "\" data-ajax=\"row_delete\">";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "</a>&nbsp;</td>
\t\t\t<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"";
                // line 82
                if (isset($context["bots"])) { $_bots_ = $context["bots"]; } else { $_bots_ = null; }
                echo $this->getAttribute($_bots_, "BOT_ID");
                echo "\" /></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bots'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t</tbody>
\t</table>

\t<fieldset class=\"quick\" style=\"float: ";
            // line 88
            if (isset($context["S_CONTENT_FLOW_BEGIN"])) { $_S_CONTENT_FLOW_BEGIN_ = $context["S_CONTENT_FLOW_BEGIN"]; } else { $_S_CONTENT_FLOW_BEGIN_ = null; }
            echo $_S_CONTENT_FLOW_BEGIN_;
            echo ";\">
\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("BOT_ADD");
            echo "\" />
\t</fieldset>

\t<fieldset class=\"quick\" style=\"float: ";
            // line 92
            if (isset($context["S_CONTENT_FLOW_END"])) { $_S_CONTENT_FLOW_END_ = $context["S_CONTENT_FLOW_END"]; } else { $_S_CONTENT_FLOW_END_ = null; }
            echo $_S_CONTENT_FLOW_END_;
            echo ";\">
\t\t<select name=\"action\">";
            // line 93
            if (isset($context["S_BOT_OPTIONS"])) { $_S_BOT_OPTIONS_ = $context["S_BOT_OPTIONS"]; } else { $_S_BOT_OPTIONS_ = null; }
            echo $_S_BOT_OPTIONS_;
            echo "</select>
\t\t<input class=\"button2\" name=\"submit\" type=\"submit\" value=\"";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t\t<p class=\"small\"><a href=\"#\" onclick=\"marklist('acp_bots', 'mark', true);\">";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('acp_bots', 'mark', false);\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></p>
\t\t";
            // line 96
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 101
        echo "
";
        // line 102
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
        return "acp_bots.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 102,  332 => 101,  323 => 96,  317 => 95,  313 => 94,  308 => 93,  303 => 92,  297 => 89,  292 => 88,  287 => 85,  277 => 82,  270 => 81,  263 => 80,  255 => 79,  250 => 78,  245 => 77,  242 => 76,  237 => 75,  230 => 71,  226 => 70,  222 => 69,  218 => 68,  209 => 63,  204 => 61,  199 => 59,  196 => 58,  186 => 52,  182 => 51,  178 => 50,  170 => 46,  163 => 45,  156 => 42,  149 => 41,  142 => 38,  137 => 37,  130 => 34,  123 => 33,  116 => 30,  109 => 29,  102 => 26,  95 => 25,  90 => 23,  83 => 20,  80 => 19,  73 => 16,  69 => 15,  66 => 14,  63 => 13,  58 => 11,  53 => 9,  42 => 7,  39 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
