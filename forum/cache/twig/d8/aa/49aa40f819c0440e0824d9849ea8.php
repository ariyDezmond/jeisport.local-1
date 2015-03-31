<?php

/* posting_preview.html */
class __TwigTemplate_d8aa49aa40f819c0440e0824d9849ea8 extends Twig_Template
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
        echo "<div class=\"post ";
        if (isset($context["S_PRIVMSGS"])) { $_S_PRIVMSGS_ = $context["S_PRIVMSGS"]; } else { $_S_PRIVMSGS_ = null; }
        if ($_S_PRIVMSGS_) {
            echo "pm";
        } else {
            echo "bg2";
        }
        echo "\" id=\"preview\">
\t<div class=\"inner\">

";
        // line 4
        if (isset($context["S_HAS_POLL_OPTIONS"])) { $_S_HAS_POLL_OPTIONS_ = $context["S_HAS_POLL_OPTIONS"]; } else { $_S_HAS_POLL_OPTIONS_ = null; }
        if ($_S_HAS_POLL_OPTIONS_) {
            // line 5
            echo "\t<div class=\"content\">
\t\t<h2>";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("PREVIEW");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            if (isset($context["POLL_QUESTION"])) { $_POLL_QUESTION_ = $context["POLL_QUESTION"]; } else { $_POLL_QUESTION_ = null; }
            echo $_POLL_QUESTION_;
            echo "</h2>
\t\t<p class=\"author\">";
            // line 7
            if (isset($context["L_POLL_LENGTH"])) { $_L_POLL_LENGTH_ = $context["L_POLL_LENGTH"]; } else { $_L_POLL_LENGTH_ = null; }
            if ($_L_POLL_LENGTH_) {
                echo $this->env->getExtension('phpbb')->lang("POLL_LENGTH");
                echo "<br />";
            }
            echo $this->env->getExtension('phpbb')->lang("MAX_VOTES");
            echo "</p>

\t\t<fieldset class=\"polls\">
\t\t";
            // line 10
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "poll_option"));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 11
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"vote_";
                // line 12
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID");
                echo "\">";
                if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                echo $this->getAttribute($_poll_option_, "POLL_OPTION_CAPTION");
                echo "</label></dt>
\t\t\t\t<dd style=\"width: auto;\">";
                // line 13
                if (isset($context["S_IS_MULTI_CHOICE"])) { $_S_IS_MULTI_CHOICE_ = $context["S_IS_MULTI_CHOICE"]; } else { $_S_IS_MULTI_CHOICE_ = null; }
                if ($_S_IS_MULTI_CHOICE_) {
                    echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID");
                    echo "\" value=\"";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID");
                    echo "\"";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    if ($this->getAttribute($_poll_option_, "POLL_OPTION_VOTED")) {
                        echo " checked=\"checked\"";
                    }
                    echo " />";
                } else {
                    echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID");
                    echo "\" value=\"";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    echo $this->getAttribute($_poll_option_, "POLL_OPTION_ID");
                    echo "\"";
                    if (isset($context["poll_option"])) { $_poll_option_ = $context["poll_option"]; } else { $_poll_option_ = null; }
                    if ($this->getAttribute($_poll_option_, "POLL_OPTION_VOTED")) {
                        echo " checked=\"checked\"";
                    }
                    echo " />";
                }
                echo "</dd>
\t\t\t</dl>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t</fieldset>
\t</div>

\t</div>
</div>

<div class=\"post bg2\">
\t<div class=\"inner\">

";
        }
        // line 26
        echo "
\t<div class=\"postbody\">
\t\t<h3>";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        if (isset($context["PREVIEW_SUBJECT"])) { $_PREVIEW_SUBJECT_ = $context["PREVIEW_SUBJECT"]; } else { $_PREVIEW_SUBJECT_ = null; }
        echo $_PREVIEW_SUBJECT_;
        echo "</h3>

\t\t<div class=\"content\">";
        // line 30
        if (isset($context["PREVIEW_MESSAGE"])) { $_PREVIEW_MESSAGE_ = $context["PREVIEW_MESSAGE"]; } else { $_PREVIEW_MESSAGE_ = null; }
        echo $_PREVIEW_MESSAGE_;
        echo "</div>

\t\t";
        // line 32
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_loops_, "attachment"))) {
            // line 33
            echo "\t\t<dl class=\"attachbox\">
\t\t\t<dt>";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
            echo "</dt>
\t\t\t";
            // line 35
            if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "attachment"));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 36
                echo "\t\t\t<dd>";
                if (isset($context["attachment"])) { $_attachment_ = $context["attachment"]; } else { $_attachment_ = null; }
                echo $this->getAttribute($_attachment_, "DISPLAY_ATTACHMENT");
                echo "</dd>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t</dl>
\t\t";
        }
        // line 40
        echo "
\t\t";
        // line 41
        if (isset($context["PREVIEW_SIGNATURE"])) { $_PREVIEW_SIGNATURE_ = $context["PREVIEW_SIGNATURE"]; } else { $_PREVIEW_SIGNATURE_ = null; }
        if ($_PREVIEW_SIGNATURE_) {
            echo "<div class=\"signature\">";
            if (isset($context["PREVIEW_SIGNATURE"])) { $_PREVIEW_SIGNATURE_ = $context["PREVIEW_SIGNATURE"]; } else { $_PREVIEW_SIGNATURE_ = null; }
            echo $_PREVIEW_SIGNATURE_;
            echo "</div>";
        }
        // line 42
        echo "\t</div>

\t</div>
</div>

<hr />
";
    }

    public function getTemplateName()
    {
        return "posting_preview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 42,  171 => 41,  168 => 40,  164 => 38,  154 => 36,  149 => 35,  145 => 34,  142 => 33,  139 => 32,  133 => 30,  124 => 28,  120 => 26,  108 => 16,  72 => 13,  64 => 12,  61 => 11,  56 => 10,  45 => 7,  37 => 6,  34 => 5,  31 => 4,  19 => 1,);
    }
}
