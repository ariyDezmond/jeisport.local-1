<?php

/* ucp_pm_message_footer.html */
class __TwigTemplate_a86a9395769b46ba7dc6801462b70d3b extends Twig_Template
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
        echo "<div>";
        if (isset($context["S_FORM_TOKEN"])) { $_S_FORM_TOKEN_ = $context["S_FORM_TOKEN"]; } else { $_S_FORM_TOKEN_ = null; }
        echo $_S_FORM_TOKEN_;
        echo "</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "ucp_pm_message_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 61,  238 => 58,  231 => 56,  215 => 54,  212 => 53,  206 => 52,  195 => 51,  183 => 49,  179 => 48,  172 => 46,  169 => 45,  163 => 41,  151 => 40,  141 => 35,  137 => 34,  130 => 31,  124 => 28,  116 => 27,  111 => 26,  105 => 23,  97 => 22,  93 => 21,  87 => 18,  79 => 17,  73 => 14,  65 => 13,  61 => 12,  58 => 11,  53 => 10,  49 => 8,  40 => 7,  32 => 3,  516 => 134,  503 => 132,  500 => 131,  493 => 128,  489 => 127,  484 => 126,  477 => 125,  469 => 124,  466 => 123,  463 => 122,  457 => 118,  452 => 115,  446 => 113,  441 => 112,  429 => 111,  424 => 110,  419 => 109,  407 => 102,  398 => 101,  385 => 100,  382 => 99,  379 => 98,  376 => 97,  372 => 95,  366 => 93,  363 => 92,  355 => 91,  351 => 90,  348 => 89,  343 => 86,  331 => 82,  312 => 81,  301 => 80,  296 => 77,  280 => 76,  264 => 75,  261 => 74,  255 => 72,  251 => 71,  241 => 59,  236 => 67,  228 => 55,  225 => 65,  221 => 63,  213 => 62,  202 => 61,  197 => 60,  181 => 59,  176 => 47,  166 => 56,  159 => 52,  155 => 51,  150 => 48,  147 => 47,  144 => 36,  134 => 33,  131 => 42,  128 => 41,  125 => 40,  118 => 37,  115 => 36,  112 => 35,  109 => 34,  100 => 29,  95 => 27,  83 => 19,  75 => 15,  69 => 12,  62 => 9,  57 => 8,  54 => 7,  51 => 6,  37 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
