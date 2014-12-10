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
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 23
            echo "                    <tr>
                        <td>";
            // line 24
            echo twig_escape_filter($this->env, ((isset($context["jourjanvier"]) ? $context["jourjanvier"] : $this->getContext($context, "jourjanvier")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        ";
            // line 25
            if (($context["ligne"] <= 28)) {
                // line 26
                echo "                            <td>";
                echo twig_escape_filter($this->env, ((isset($context["jourfevrier"]) ? $context["jourfevrier"] : $this->getContext($context, "jourfevrier")) + $context["ligne"]), "html", null, true);
                echo "</td>
                        ";
            } else {
                // line 28
                echo "                            <td> </td>
                        ";
            }
            // line 30
            echo "                        <td>";
            echo twig_escape_filter($this->env, ((isset($context["jourmars"]) ? $context["jourmars"] : $this->getContext($context, "jourmars")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        ";
            // line 31
            if (($context["ligne"] <= 30)) {
                // line 32
                echo "                            <td>";
                echo twig_escape_filter($this->env, ((isset($context["jouravril"]) ? $context["jouravril"] : $this->getContext($context, "jouravril")) + $context["ligne"]), "html", null, true);
                echo "</td>
                        ";
            } else {
                // line 34
                echo "                            <td> </td>
                        ";
            }
            // line 36
            echo "                        <td>";
            echo twig_escape_filter($this->env, ((isset($context["jourmai"]) ? $context["jourmai"] : $this->getContext($context, "jourmai")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        ";
            // line 37
            if (($context["ligne"] <= 30)) {
                // line 38
                echo "                            <td>";
                echo twig_escape_filter($this->env, ((isset($context["jourjuin"]) ? $context["jourjuin"] : $this->getContext($context, "jourjuin")) + $context["ligne"]), "html", null, true);
                echo "</td>
                        ";
            } else {
                // line 40
                echo "                            <td> </td>
                        ";
            }
            // line 42
            echo "                        <td>";
            echo twig_escape_filter($this->env, ((isset($context["jourjuillet"]) ? $context["jourjuillet"] : $this->getContext($context, "jourjuillet")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, ((isset($context["jouraout"]) ? $context["jouraout"] : $this->getContext($context, "jouraout")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        ";
            // line 44
            if (($context["ligne"] <= 30)) {
                // line 45
                echo "                            <td>";
                echo twig_escape_filter($this->env, ((isset($context["jourseptembre"]) ? $context["jourseptembre"] : $this->getContext($context, "jourseptembre")) + $context["ligne"]), "html", null, true);
                echo "</td>
                        ";
            } else {
                // line 47
                echo "                            <td> </td>
                        ";
            }
            // line 49
            echo "                        <td>";
            echo twig_escape_filter($this->env, ((isset($context["jouroctobre"]) ? $context["jouroctobre"] : $this->getContext($context, "jouroctobre")) + $context["ligne"]), "html", null, true);
            echo "</td>
                        ";
            // line 50
            if (($context["ligne"] <= 30)) {
                // line 51
                echo "                            <td>";
                echo twig_escape_filter($this->env, ((isset($context["journovembre"]) ? $context["journovembre"] : $this->getContext($context, "journovembre")) + $context["ligne"]), "html", null, true);
                echo "</td>
                        ";
            } else {
                // line 53
                echo "                            <td> </td>
                        ";
            }
            // line 55
            echo "                        <td>";
            echo twig_escape_filter($this->env, ((isset($context["jourdecembre"]) ? $context["jourdecembre"] : $this->getContext($context, "jourdecembre")) + $context["ligne"]), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        return array (  159 => 58,  149 => 55,  145 => 53,  139 => 51,  137 => 50,  132 => 49,  128 => 47,  122 => 45,  120 => 44,  116 => 43,  111 => 42,  107 => 40,  101 => 38,  99 => 37,  94 => 36,  90 => 34,  84 => 32,  82 => 31,  77 => 30,  73 => 28,  67 => 26,  65 => 25,  61 => 24,  58 => 23,  54 => 22,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
