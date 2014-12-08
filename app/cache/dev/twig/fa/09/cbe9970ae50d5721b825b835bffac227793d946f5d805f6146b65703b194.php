<?php

/* PlanningBundle:Default:index.html.twig */
class __TwigTemplate_fa09cbe9970ae50d5721b825b835bffac227793d946f5d805f6146b65703b194 extends Twig_Template
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
        echo "    <div class=\"page\">
        <div class=\"header\">
            CFA INSTA PLANNING
        </div>
        <div class=\"page-content\">
            <div class=\"formulaire\">
                <div class=\"login\">
                Welcome !
                <form action=\"index.php\" method=\"post\">
        
                <table>
                <tr>
                <td><label for=\"login\"><strong>Utilisateur :</strong></label></td>
                <td><input type=\"text\" name=\"login\" id=\"login\"/></td>
                </tr>
                <tr>
                <td><label for=\"pass\"><strong>Mot de passe :</strong></label></td>
                <td><input type=\"password\" name=\"pass\" id=\"pass\"/></td>
                </tr>
                </table>
                <input type=\"submit\" name=\"register\" value=\"Connexion\"/>
                
                </form>
                </div>
            </div>
        </div>
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
        return array (  31 => 3,  28 => 2,);
    }
}
