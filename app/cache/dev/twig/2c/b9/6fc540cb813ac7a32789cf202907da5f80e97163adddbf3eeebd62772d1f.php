<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2cb96fc540cb813ac7a32789cf202907da5f80e97163adddbf3eeebd62772d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"page\">
    <div class=\"page-content\">
    <h5>CFA INSTA</h5>
    <div class=\"formulaire\">
        <div id=\"form_wrapper\" class=\"form_wrapper\">
            <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"login active\">
                <h3>Login</h3>
                <div>
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                    <label for=\"username\">Utilisateur :</label>
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                </div>
                <div>
                    <label for=\"password\">Mot de passe :</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    <div class=\"bottom\">
                        <div class=\"remember\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <span for=\"remember_me\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</span>
                        </div>
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Connexion\" />
                        <div class=\"clear\"></div>
                    </div>
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
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  58 => 20,  52 => 17,  46 => 14,  39 => 9,  33 => 7,  31 => 6,  28 => 5,);
    }
}
