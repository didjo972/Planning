<?php

/* PlanningUserBundle:Advert:planning_annuel.html.twig */
class __TwigTemplate_6e60a0d4c5642e7783ec47b4c54436705f89482646d3d21cea6bd83ccd71f888 extends Twig_Template
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
            <div class=\"titre-content\">
                Promotion N°";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Promotion"]) ? $context["Promotion"] : $this->getContext($context, "Promotion")), "numPromotion", array()), "html", null, true);
        echo "
            </div> 
            <table>
                ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 12
            echo "                    <tr>
                        ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 13));
            foreach ($context['_seq'] as $context["_key"] => $context["colonne"]) {
                // line 14
                echo "                            <th>
                                ";
                // line 15
                if ((($context["ligne"] == 1) && ($context["colonne"] == 2))) {
                    // line 16
                    echo "                                    Janvier
                                ";
                }
                // line 18
                echo "                                ";
                if ((($context["ligne"] == 1) && ($context["colonne"] == 3))) {
                    // line 19
                    echo "                                    Fevrier
                                ";
                }
                // line 21
                echo "                                ";
                if ((($context["ligne"] == 1) && ($context["colonne"] == 4))) {
                    // line 22
                    echo "                                    Mars
                                ";
                }
                // line 24
                echo "                                ";
                if ((($context["ligne"] == 1) && ($context["colonne"] == 5))) {
                    // line 25
                    echo "                                    Avril
                                ";
                }
                // line 27
                echo "                                ";
                if ((($context["ligne"] == 1) && ($context["colonne"] == 6))) {
                    // line 28
                    echo "                                    Mai
                                ";
                }
                // line 30
                echo "                                ";
                if ((($context["ligne"] == 1) && ($context["colonne"] == 7))) {
                    // line 31
                    echo "                                    Juin
                                ";
                }
                // line 33
                echo "                                ";
                if ((($context["ligne"] == 1) && ($context["colonne"] == 8))) {
                    // line 34
                    echo "                                    Juillet
                                ";
                }
                // line 36
                echo "                                ";
                if ((($context["ligne"] == 1) && ($context["colonne"] == 9))) {
                    // line 37
                    echo "                                    Aout
                                ";
                }
                // line 39
                echo "                                ";
                if ((($context["ligne"] == 1) && ($context["colonne"] == 10))) {
                    // line 40
                    echo "                                    Septembre
                                ";
                }
                // line 42
                echo "                                ";
                if ((($context["ligne"] == 1) && ($context["colonne"] == 11))) {
                    // line 43
                    echo "                                    Ocotbre
                                ";
                }
                // line 45
                echo "                                ";
                if ((($context["ligne"] == 1) && ($context["colonne"] == 12))) {
                    // line 46
                    echo "                                    Novembre
                                ";
                }
                // line 48
                echo "                                ";
                if ((($context["ligne"] == 1) && ($context["colonne"] == 13))) {
                    // line 49
                    echo "                                    Decembre
                                ";
                }
                // line 51
                echo "                                
                                ";
                // line 52
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["Cours"]) ? $context["Cours"] : $this->getContext($context, "Cours")));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    // line 53
                    echo "                                    ";
                    if ((((twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "m") == ($context["colonne"] - 1)) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateFin", array()), "d") >= ($context["ligne"] - 1))) && (twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "d") <= ($context["ligne"] - 1)))) {
                        // line 54
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "matierematiere", array()), "libelle", array()), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 56
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(2, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 58
                    echo "                                    ";
                    if ((($context["ligne"] == $context["i"]) && ($context["colonne"] == 1))) {
                        // line 59
                        echo "                                        ";
                        echo twig_escape_filter($this->env, ($context["ligne"] - 1), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 61
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                            </th>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colonne'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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
        return array (  199 => 66,  192 => 64,  185 => 62,  179 => 61,  173 => 59,  170 => 58,  165 => 57,  159 => 56,  153 => 54,  150 => 53,  146 => 52,  143 => 51,  139 => 49,  136 => 48,  132 => 46,  129 => 45,  125 => 43,  122 => 42,  118 => 40,  115 => 39,  111 => 37,  108 => 36,  104 => 34,  101 => 33,  97 => 31,  94 => 30,  90 => 28,  87 => 27,  83 => 25,  80 => 24,  76 => 22,  73 => 21,  69 => 19,  66 => 18,  62 => 16,  60 => 15,  57 => 14,  53 => 13,  50 => 12,  46 => 11,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
