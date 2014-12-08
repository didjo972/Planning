<?php

/* PlanningUserBundle:Security:login.html.twig */
class __TwigTemplate_2cb96fc540cb813ac7a32789cf202907da5f80e97163adddbf3eeebd62772d1f extends Twig_Template
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
      <!--<label for=\"INSTA\">CFA INSTA</label>-->
        <div class=\"page-content\">
            <div class=\"formulaire\">
                Welcome !
                <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                    <table>
                        <tr>
                            <td><label for=\"username\">Utilisateur :</label></td>
                            <td><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" style=\"max-width: 100px\"/></td>
                        </tr>
                        <tr>
                            <td><label for=\"password\">Mot de passe :</label></td>
                            <td><input type=\"password\" id=\"password\" name=\"_password\" style=\"max-width: 100px\" /></td>
                        </tr>
                    </table>
                    <input class=\"bt-valider\" type=\"submit\" value=\"Connexion\" />    
                </form>
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
