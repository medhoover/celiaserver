<?php

/* MedCeliaBundle:Produit:index.html.twig */
class __TwigTemplate_a31b5832e180379e0d2932cf90dff8130305e384daf4724926e1aba53926029f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MedCeliaBundle:Main:template.html.twig", "MedCeliaBundle:Produit:index.html.twig", 1);
        $this->blocks = array(
            'estproduit' => array($this, 'block_estproduit'),
            'titre' => array($this, 'block_titre'),
            'contenue' => array($this, 'block_contenue'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MedCeliaBundle:Main:template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_estproduit($context, array $blocks = array())
    {
        echo " active ";
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo " Produits ";
    }

    // line 4
    public function block_contenue($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"col-lg-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <div class=\"text-muted bootstrap-admin-box-title\">Table De Produits</div>
            </div>
            <div class=\"bootstrap-admin-panel-content\">
                <table class=\"table bootstrap-admin-table-with-actions\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Marque</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 23
            echo "                            <tr>
                                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "marque", array()), "nomMarque", array()), "html", null, true);
            echo "</td>
                                <td> 
                                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("med_celia_view_produit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">
                                        <button class=\"btn btn-sm btn-primary\">
                                             <i class=\"glyphicon glyphicon-pencil\"></i>
                                             Modifier
                                        </button>
                                    </a>
                                </td>
                                <td> 
                                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("med_celia_delete_produit", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">
                                        <button class=\"btn btn-sm btn-danger\">
                                             <i class=\"glyphicon glyphicon-trash\"></i>
                                             Supprimer
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "MedCeliaBundle:Produit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  95 => 36,  84 => 28,  79 => 26,  75 => 25,  71 => 24,  68 => 23,  64 => 22,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
