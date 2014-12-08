<?php

/* PlanningUserBundle:Advert:menu.html.twig */
class __TwigTemplate_d142a282f622b659f3b6dcac61cc2048e7da4e5296bbda43c56bb148b15dc78c extends Twig_Template
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
        echo "    <div class=\"mainheader\">
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
";
    }

    public function getTemplateName()
    {
        return "PlanningUserBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
