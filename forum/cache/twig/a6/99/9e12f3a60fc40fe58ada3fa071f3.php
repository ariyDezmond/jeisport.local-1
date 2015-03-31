<?php

/* ucp_footer.html */
class __TwigTemplate_a6999e12f3a60fc40fe58ada3fa071f3 extends Twig_Template
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
\t\t</div>

\t</div>
\t</div>
</div>
";
        // line 7
        if (isset($context["S_COMPOSE_PM"])) { $_S_COMPOSE_PM_ = $context["S_COMPOSE_PM"]; } else { $_S_COMPOSE_PM_ = null; }
        if ($_S_COMPOSE_PM_) {
            // line 8
            echo "<div>";
            if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
            echo $_S_FORM_TOKEN_;
            echo "</div>
</form>
";
        }
        // line 11
        echo "
";
        // line 12
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("jumpbox.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 13
        echo "
";
        // line 14
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
        return "ucp_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  53 => 13,  38 => 11,  30 => 8,  27 => 7,  406 => 98,  399 => 93,  376 => 91,  371 => 90,  367 => 89,  361 => 85,  358 => 84,  355 => 83,  348 => 78,  326 => 76,  321 => 75,  318 => 74,  291 => 72,  286 => 71,  281 => 69,  275 => 65,  272 => 64,  267 => 61,  261 => 60,  258 => 59,  248 => 57,  238 => 55,  234 => 54,  229 => 53,  220 => 50,  216 => 48,  210 => 47,  204 => 46,  158 => 41,  152 => 40,  147 => 39,  143 => 37,  137 => 36,  133 => 34,  123 => 32,  113 => 30,  110 => 29,  107 => 28,  102 => 27,  96 => 26,  93 => 25,  82 => 16,  69 => 13,  64 => 10,  46 => 8,  41 => 12,  375 => 68,  368 => 63,  353 => 62,  332 => 61,  312 => 60,  282 => 59,  274 => 58,  266 => 57,  260 => 54,  257 => 53,  253 => 51,  233 => 46,  224 => 52,  203 => 41,  196 => 40,  183 => 44,  176 => 36,  173 => 35,  168 => 32,  162 => 42,  150 => 29,  144 => 27,  135 => 26,  131 => 25,  126 => 24,  122 => 22,  119 => 21,  100 => 20,  97 => 19,  89 => 18,  77 => 17,  72 => 14,  62 => 15,  57 => 14,  50 => 11,  47 => 10,  42 => 8,  34 => 3,  31 => 2,  19 => 1,);
    }
}
