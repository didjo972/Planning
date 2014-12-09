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
        echo "        <table>
            <div class=\"page\">
                <tr>
                    <th>Nom du professeur</th>
                    <th>Matiere</th>
                    <th>Duré du cours/jour</th>
                    <th>Début des cours</th>
                    <th>Fin des cours</th>
                </tr>
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "                    <tr>
                        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "professeurprofesseur", array()), "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "matierematiere", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dure", array()), "html", null, true);
            echo " h</td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFin", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                <tr>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                </tr>
                ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 31
            echo "                    <tr>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "matierematiere", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "matierematiere", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "matierematiere", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "matierematiere", array()), "libelle", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "matierematiere", array()), "libelle", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "           </div>
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
        return array (  120 => 39,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  92 => 31,  88 => 30,  79 => 23,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  51 => 15,  47 => 14,  36 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
