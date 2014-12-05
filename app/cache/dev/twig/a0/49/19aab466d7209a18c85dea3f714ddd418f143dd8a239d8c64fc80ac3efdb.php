<?php

/* PlanningUserBundle:Advert:index.html.twig */
class __TwigTemplate_a04919aab466d7209a18c85dea3f714ddd418f143dd8a239d8c64fc80ac3efdb extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Hello World !</h1>
        <p>
            Le Hello World est un grand classique en programmation.
            Il signifie énormément, car cela veut dire que vous avez
            réussi à exécuter le programme pour accomplir une tâche simple :
            afficher ce hello world !
            <br>
            voici ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["lieu"]) ? $context["lieu"] : $this->getContext($context, "lieu")), "html", null, true);
        echo "
        </p>
";
    }

    public function getTemplateName()
    {
        return "PlanningUserBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  31 => 4,  28 => 3,);
    }
}
