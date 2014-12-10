<?php

/* PlanningUserBundle:Advert:accueil.html.twig */
class __TwigTemplate_581812be584040fb3e2a80e5edcced2666c4a4982ae0ebcad4124d75d0a4671e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base_accueil.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_accueil.html.twig";
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
        ";
        // line 4
        $this->env->loadTemplate("PlanningUserBundle:Advert:menu.html.twig")->display($context);
        // line 5
        echo "        
    </div>
";
    }

    public function getTemplateName()
    {
        return "PlanningUserBundle:Advert:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
