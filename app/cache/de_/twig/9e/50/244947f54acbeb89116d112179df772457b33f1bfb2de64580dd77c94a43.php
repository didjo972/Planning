<?php

/* PlanningUserBundle:Security:mot_de_passe_perdu.html.twig */
class __TwigTemplate_9e50244947f54acbeb89116d112179df772457b33f1bfb2de64580dd77c94a43 extends Twig_Template
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
        echo "
  ";
        // line 5
        echo "  <div class=\"page\">
      <!--<label for=\"INSTA\">CFA INSTA</label>-->
        <div class=\"page-content\">
            <div class=\"formulaire\">
                <div id=\"form_wrapper\" class=\"form_wrapper\">
                    <form class=\"forgot_password\">
                        <h3>Mot de passe perdu</h3>
                        <div>
                            <label>Username ou Email:</label>
                            <input type=\"text\" />
                        </div>
                        <div class=\"bottom\">
                            <input type=\"submit\" value=\"Send reminder\"></input>
                            <a href=\"index.html\" rel=\"login\" class=\"linkform\">
                                Suddenly remebered? Log in here
                            </a>
                        <div class=\"clear\"></div>
                        </div>
                        </form>
                    </form>
                </div>
            </div>
        </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "PlanningUserBundle:Security:mot_de_passe_perdu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 3,  28 => 2,);
    }
}
