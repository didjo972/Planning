<?php

/* PlanningUserBundle:Security:login.html.twig */
class __TwigTemplate_01e984f874939cace8f368005101c70cfa881b68ed9ea4f8655572a9c6169bdf extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
  ";
        // line 7
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 10
        echo "
  ";
        // line 12
        echo "  <div class=\"page\">
        <div class=\"page-content\">
            <h5>CFA INSTA</h5>
            <div class=\"formulaire\">
                <div id=\"form_wrapper\" class=\"form_wrapper\">
                    <form class=\"login active\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                        <h3>Login</h3>
                        <div>
                            <label>Utilisateur :</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                        </div>
                        <div>
                            <label>Mot de passe:
                                <!--<a href=\"/MonProjetPhp/Planning/web/app_dev.php/mot_de_passe_perdu\" rel=\"forgot_password\" class=\"forgot linkform\">
                                    Mot de passe oublié ?
                                </a>-->
                            </label>
                        <input type=\"password\" id=\"password\" name=\"_password\" />
                        </div>
                        <div class=\"bottom\">
                            <!--<div class=\"remember\"><input type=\"checkbox\" />
                                <span>Sauvegarder mon mot de passe</span>
                            </div>-->
                            <input type=\"submit\" value=\"Connexion\"></input>
                            <div class=\"clear\"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "PlanningUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  53 => 17,  46 => 12,  43 => 10,  37 => 8,  34 => 7,  31 => 5,  28 => 4,);
    }
}
