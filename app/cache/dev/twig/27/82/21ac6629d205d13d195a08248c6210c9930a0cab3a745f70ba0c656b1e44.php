<?php

/* PlanningUserBundle:Advert:planning_annuel.html.twig */
class __TwigTemplate_278221ac6629d205d13d195a08248c6210c9930a0cab3a745f70ba0c656b1e44 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"page\">
        ";
        // line 5
        $this->env->loadTemplate("PlanningUserBundle:Advert:menu.html.twig")->display($context);
        // line 6
        echo "        <div class=\"page-content\">
            <table>
                <tr>
                    <th>Janvier</th>
                    <th>Fevrier</th>
                    <th>Mars</th>
                    <th>Avril</th>
                    <th>Mai</th>
                    <th>Juin</th>
                    <th>Juillet</th>
                    <th>Aout</th>
                    <th>Septembre</th>
                    <th>Octobre</th>
                    <th>Novembre</th>
                    <th>Decembre</th>
                </tr>

                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, ((isset($context["jourjanvier"]) ? $context["jourjanvier"] : $this->getContext($context, "jourjanvier")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, ((isset($context["jourfevrier"]) ? $context["jourfevrier"] : $this->getContext($context, "jourfevrier")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, ((isset($context["jourmars"]) ? $context["jourmars"] : $this->getContext($context, "jourmars")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, ((isset($context["jouravril"]) ? $context["jouravril"] : $this->getContext($context, "jouravril")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, ((isset($context["jourmai"]) ? $context["jourmai"] : $this->getContext($context, "jourmai")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, ((isset($context["jourjuin"]) ? $context["jourjuin"] : $this->getContext($context, "jourjuin")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, ((isset($context["jourjuillet"]) ? $context["jourjuillet"] : $this->getContext($context, "jourjuillet")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, ((isset($context["jouraout"]) ? $context["jouraout"] : $this->getContext($context, "jouraout")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, ((isset($context["jourseptembre"]) ? $context["jourseptembre"] : $this->getContext($context, "jourseptembre")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, ((isset($context["jouroctobre"]) ? $context["jouroctobre"] : $this->getContext($context, "jouroctobre")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, ((isset($context["journovembre"]) ? $context["journovembre"] : $this->getContext($context, "journovembre")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, ((isset($context["jourdecembre"]) ? $context["jourdecembre"] : $this->getContext($context, "jourdecembre")) + $context["ligne"]), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </table>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PlanningUserBundle:Advert:planning_annuel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 39,  106 => 36,  102 => 35,  98 => 34,  94 => 33,  90 => 32,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  70 => 27,  66 => 26,  62 => 25,  59 => 24,  55 => 23,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
