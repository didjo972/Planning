<?php

/* PlanningBundle:Default:planning.html.twig */
class __TwigTemplate_7198ff1faacbd2ca730e61705b498db1e62684296fd72268e01fa30d9c9537ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base_planning.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_planning.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"page\">
        <div class=\"header\">
            CFA INSTA PLANNING
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PlanningBundle:Default:planning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
