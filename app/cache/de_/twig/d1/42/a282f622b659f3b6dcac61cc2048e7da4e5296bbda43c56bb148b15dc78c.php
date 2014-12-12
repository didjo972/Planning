<?php

/* PlanningUserBundle:Advert:menu.html.twig */
class __TwigTemplate_d142a282f622b659f3b6dcac61cc2048e7da4e5296bbda43c56bb148b15dc78c extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "            <div class=\"header_logo\"></div>
                <div class=\"menu\">
                    <ul>
                        <li>
                            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">
                                Accueil
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("planning");
        echo "\">
                                Planning
                            </a>
                        </li>
                        <li>
                            <a href=\"/Notes\">
                                Notes
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                                Déconnection
                            </a>
                        </li>
                    </ul>
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
        return array (  58 => 23,  45 => 13,  37 => 8,  31 => 4,  28 => 3,);
    }
}
