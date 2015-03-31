<?php

/* auth_provider_oauth.html */
class __TwigTemplate_9df1fdbacf1a65e73595bfbe0eaeccac extends Twig_Template
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
<div id=\"auth_oauth_settings\">
\t<p>";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("AUTH_PROVIDER_OAUTH_EXPLAIN");
        echo "</p>

\t";
        // line 5
        if (isset($context["loops"])) { $_loops_ = $context["loops"]; } else { $_loops_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_loops_, "oauth_services"));
        foreach ($context['_seq'] as $context["_key"] => $context["oauth_services"]) {
            // line 6
            echo "\t<fieldset>
\t\t<legend>";
            // line 7
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "ACTUAL_NAME");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"oauth_service_";
            // line 9
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "NAME");
            echo "_key\">";
            echo $this->env->getExtension('phpbb')->lang("AUTH_PROVIDER_OAUTH_KEY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"text\" id=\"oauth_service_";
            // line 10
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "NAME");
            echo "_key\" size=\"40\" name=\"config[auth_oauth_";
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "NAME");
            echo "_key]\" value=\"";
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "KEY");
            echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"oauth_service_";
            // line 13
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "NAME");
            echo "_secret\">";
            echo $this->env->getExtension('phpbb')->lang("AUTH_PROVIDER_OAUTH_SECRET");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"text\" id=\"oauth_service_";
            // line 14
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "NAME");
            echo "_secret\" size=\"40\" name=\"config[auth_oauth_";
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "NAME");
            echo "_secret]\" value=\"";
            if (isset($context["oauth_services"])) { $_oauth_services_ = $context["oauth_services"]; } else { $_oauth_services_ = null; }
            echo $this->getAttribute($_oauth_services_, "SECRET");
            echo "\" /></dd>
\t\t</dl>
\t</fieldset>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oauth_services'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "auth_provider_oauth.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  71 => 14,  63 => 13,  50 => 10,  42 => 9,  36 => 7,  33 => 6,  28 => 5,  23 => 3,  132 => 33,  125 => 32,  118 => 29,  111 => 28,  104 => 25,  97 => 24,  90 => 21,  83 => 20,  76 => 17,  69 => 16,  62 => 13,  55 => 12,  48 => 9,  41 => 8,  34 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
