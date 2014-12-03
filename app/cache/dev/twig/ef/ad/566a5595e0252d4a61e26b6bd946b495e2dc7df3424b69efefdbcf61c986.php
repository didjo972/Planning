<?php

/* PlanningBundle:Default:index.html.twig */
class __TwigTemplate_efad566a5595e0252d4a61e26b6bd946b495e2dc7df3424b69efefdbcf61c986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class='page'>
        Hello ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
        <table>
            <tr>
                <td colspan=\"9\">M2 STL INSTA - EDT S3 - 2014-2015 (Du 15/09 au 07/11/2014)</td>
            </tr>
            <tr>
                <td>8h30</td>
                <td>9h</td>
                <td>9h30</td>
                <td>9h</td>
                <td>10h30</td>
                <td>11h</td>
                <td>11h30</td>
                <td>12h</td>
                <td>12h30</td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PlanningBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  28 => 2,);
    }
}
