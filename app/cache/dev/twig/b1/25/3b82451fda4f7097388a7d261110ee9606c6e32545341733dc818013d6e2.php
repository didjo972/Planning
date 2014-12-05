<?php

/* PlanningUserBundle:Advert:accueil.html.twig */
class __TwigTemplate_b1253b82451fda4f7097388a7d261110ee9606c6e32545341733dc818013d6e2 extends Twig_Template
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
        <div class=\"mainheader\">
            <div class=\"header_logo\"></div>
                <div class=\"menu\">
                    <ul>
                        <li>
                            <a href=\"/Accueil\">
                                Accueil
                            </a>
                        </li>
                        <li>
                            <a href=\"/MonProjetPhp/Planning/web/app_dev.php/Planning\">
                                Planning
                            </a>
                        </li>
                        <li>
                            <a href=\"/Notes\">
                                Notes
                            </a>
                        </li>
                        <li>
                            <a href=\"/Absence\">
                                Absence
                            </a>
                        </li>
                    </ul>
                </div>
            <div class=\"header_deco\"></div>
        </div>
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
        return array (  31 => 3,  28 => 2,);
    }
}
