<?php

/* auth_provider_ldap.html */
class __TwigTemplate_360cad66716099679e1facb5ec429f2a extends Twig_Template
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
        echo "<fieldset id=\"auth_ldap_settings\">
\t<legend>";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("LDAP");
        echo "</legend>
\t<dl>
\t\t<dt><label for=\"ldap_server\">";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("LDAP_SERVER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_SERVER_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_server\" size=\"40\" name=\"config[ldap_server]\" value=\"";
        // line 5
        if (isset($context["AUTH_LDAP_SERVER"])) { $_AUTH_LDAP_SERVER_ = $context["AUTH_LDAP_SERVER"]; } else { $_AUTH_LDAP_SERVER_ = null; }
        echo $_AUTH_LDAP_SERVER_;
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_port\">";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("LDAP_PORT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_PORT_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_port\" size=\"40\" name=\"config[ldap_port]\" value=\"";
        // line 9
        if (isset($context["AUTH_LDAP_PORT"])) { $_AUTH_LDAP_PORT_ = $context["AUTH_LDAP_PORT"]; } else { $_AUTH_LDAP_PORT_ = null; }
        echo $_AUTH_LDAP_PORT_;
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_dn\">";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("LDAP_DN");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_DN_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_dn\" size=\"40\" name=\"config[ldap_base_dn]\" value=\"";
        // line 13
        if (isset($context["AUTH_LDAP_BASE_DN"])) { $_AUTH_LDAP_BASE_DN_ = $context["AUTH_LDAP_BASE_DN"]; } else { $_AUTH_LDAP_BASE_DN_ = null; }
        echo $_AUTH_LDAP_BASE_DN_;
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_uid\">";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("LDAP_UID");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_UID_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_uid\" size=\"40\" name=\"config[ldap_uid]\" value=\"";
        // line 17
        if (isset($context["AUTH_LDAP_UID"])) { $_AUTH_LDAP_UID_ = $context["AUTH_LDAP_UID"]; } else { $_AUTH_LDAP_UID_ = null; }
        echo $_AUTH_LDAP_UID_;
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_user_filter\">";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("LDAP_USER_FILTER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_USER_FILTER_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_user_filter\" size=\"40\" name=\"config[ldap_user_filter]\" value=\"";
        // line 21
        if (isset($context["AUTH_LDAP_USER_FILTER"])) { $_AUTH_LDAP_USER_FILTER_ = $context["AUTH_LDAP_USER_FILTER"]; } else { $_AUTH_LDAP_USER_FILTER_ = null; }
        echo $_AUTH_LDAP_USER_FILTER_;
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_email\">";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("LDAP_EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_EMAIL_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_email\" size=\"40\" name=\"config[ldap_email]\" value=\"";
        // line 25
        if (isset($context["AUTH_LDAP_EMAIL"])) { $_AUTH_LDAP_EMAIL_ = $context["AUTH_LDAP_EMAIL"]; } else { $_AUTH_LDAP_EMAIL_ = null; }
        echo $_AUTH_LDAP_EMAIL_;
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_user\">";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("LDAP_USER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_USER_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"text\" id=\"ldap_user\" size=\"40\" name=\"config[ldap_user]\" value=\"";
        // line 29
        if (isset($context["AUTH_LDAP_USER"])) { $_AUTH_LDAP_USER_ = $context["AUTH_LDAP_USER"]; } else { $_AUTH_LDAP_USER_ = null; }
        echo $_AUTH_LDAP_USER_;
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"ldap_password\">";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("LDAP_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("LDAP_PASSWORD_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"password\" id=\"ldap_password\" size=\"40\" name=\"config[ldap_password]\" value=\"";
        // line 33
        if (isset($context["AUTH_LDAP_PASSWORD"])) { $_AUTH_LDAP_PASSWORD_ = $context["AUTH_LDAP_PASSWORD"]; } else { $_AUTH_LDAP_PASSWORD_ = null; }
        echo $_AUTH_LDAP_PASSWORD_;
        echo "\" autocomplete=\"off\" /></dd>
\t</dl>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "auth_provider_ldap.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  125 => 32,  118 => 29,  111 => 28,  104 => 25,  97 => 24,  90 => 21,  83 => 20,  76 => 17,  69 => 16,  62 => 13,  55 => 12,  48 => 9,  41 => 8,  34 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
