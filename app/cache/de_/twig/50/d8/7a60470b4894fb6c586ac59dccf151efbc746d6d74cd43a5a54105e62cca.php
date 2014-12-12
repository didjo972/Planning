<?php

/* PlanningUserBundle:Advert:planning.html.twig */
class __TwigTemplate_50d87a60470b4894fb6c586ac59dccf151efbc746d6d74cd43a5a54105e62cca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base_planning.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base_planning.html.twig";
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
        <table>
                <tr>
                    <th>Nom du professeur</th>
                    <th>Matiere</th>
                    <th>Duré du cours/jour</th>
                    <th>Début des cours</th>
                    <th>Fin des cours</th>
                </tr>
                    <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")), "professeurprofesseur", array()), "nom", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")), "matierematiere", array()), "libelle", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")), "dure", array()), "html", null, true);
        echo " h</td>
                    <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")), "dateDebut", array()), "Y-m-d"), "html", null, true);
        echo "</td>
                    <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")), "dateFin", array()), "Y-m-d"), "html", null, true);
        echo "</td>
        </table>
        <table>
                <tr>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                </tr>
                <tr>
                    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")), "matierematiere", array()), "libelle", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")), "matierematiere", array()), "libelle", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")), "matierematiere", array()), "libelle", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")), "matierematiere", array()), "libelle", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")), "matierematiere", array()), "libelle", array()), "html", null, true);
        echo "</td>
                </tr>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PlanningUserBundle:Advert:planning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  89 => 32,  85 => 31,  81 => 30,  77 => 29,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  36 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
