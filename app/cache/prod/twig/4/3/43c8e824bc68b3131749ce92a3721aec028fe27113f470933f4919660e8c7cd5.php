<?php

/* MedCeliaBundle:Main:template.html.twig */
class __TwigTemplate_43c8e824bc68b3131749ce92a3721aec028fe27113f470933f4919660e8c7cd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'estacceuil' => array($this, 'block_estacceuil'),
            'estproduit' => array($this, 'block_estproduit'),
            'estajoutproduit' => array($this, 'block_estajoutproduit'),
            'estrecette' => array($this, 'block_estrecette'),
            'estajoutrecette' => array($this, 'block_estajoutrecette'),
            'titre' => array($this, 'block_titre'),
            'contenue' => array($this, 'block_contenue'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
       
        
        

        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d4f7f96_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4f7f96_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/d4f7f96_bootstrap.min_1.css");
            // line 15
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "d4f7f96_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4f7f96_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/d4f7f96_bootstrap-theme.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "d4f7f96_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4f7f96_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/d4f7f96_bootstrap-admin-theme_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "d4f7f96"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d4f7f96") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/d4f7f96.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0fb93bc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0fb93bc_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_1.woff");
            // asset "0fb93bc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0fb93bc_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/fonts/glyphicons-halflings-regular_glyphicons-halflings-regular_2.woff");
        } else {
            // asset "0fb93bc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0fb93bc") : $this->env->getExtension('asset')->getAssetUrl("_controller/fonts/glyphicons-halflings-regular.woff");
        }
        unset($context["asset_url"]);
        // line 23
        echo "        
    </head>
    <body class=\"bootstrap-admin-with-small-navbar\">
        <!-- small navbar -->
        <nav class=\"navbar navbar-default navbar-fixed-top bootstrap-admin-navbar-sm\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"row\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("user_logout");
        echo "\">Deconnection</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- main / large navbar -->
        
        <div class=\"container\">
            <!-- left, vertical navbar & content -->
            <div class=\"row\">
                <!-- left, vertical navbar -->
                <div class=\"col-md-2 bootstrap-admin-col-left\">
                    <ul class=\"nav navbar-collapse collapse bootstrap-admin-navbar-side\">
                        
                        <li class=\"";
        // line 48
        $this->displayBlock('estacceuil', $context, $blocks);
        echo "\">
                            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("med_celia_main");
        echo "\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Acceuil</a>
                        </li>
                        <li class=\"";
        // line 51
        $this->displayBlock('estproduit', $context, $blocks);
        echo "\">
                            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("med_celia_produit");
        echo "\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Produits</a>
                        </li>
                        <li class=\"";
        // line 54
        $this->displayBlock('estajoutproduit', $context, $blocks);
        echo "\">
                            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("med_celia_add_produit");
        echo "\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Ajouter un Produit</a>
                        </li>
                        <li class=\"";
        // line 57
        $this->displayBlock('estrecette', $context, $blocks);
        echo "\">
                            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("med_celia_recette");
        echo "\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Recettes</a>
                        </li>
                        <li class=\"";
        // line 60
        $this->displayBlock('estajoutrecette', $context, $blocks);
        echo "\">
                            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("med_celia_add_recette");
        echo "\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Ajouter une Recette</a>
                        </li>
                        
                    </ul>
                </div>

                <!-- content -->
                <div class=\"col-md-10\">
                    <div class=\"row\">
                        <div class=\"col-lg-12\">
                            <div class=\"page-header\">
                                <h1>";
        // line 72
        $this->displayBlock('titre', $context, $blocks);
        echo "</h1>
                            </div>
                        </div>
                            
                    </div>
                            

                            <div class=\"bootstrap-admin-panel-content text-muted\" style=\"padding: 60px 0; text-align: center\">
                                ";
        // line 80
        $this->displayBlock('contenue', $context, $blocks);
        // line 81
        echo "                            </div>
                    </ br>
                    
        <!-- footer -->
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        
        ";
        // line 89
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a901966_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a901966_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a901966_jquery-2.1.4.min_1.js");
            // line 92
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
       
        ";
            // asset "a901966_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a901966_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a901966_bootstrap.min_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
       
        ";
        } else {
            // asset "a901966"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a901966") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/a901966.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
       
        ";
        }
        unset($context["asset_url"]);
        // line 95
        echo "         <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-2.0.3.min.js\"></script>

        
       
       
       

       
    </body>
</html>";
    }

    // line 48
    public function block_estacceuil($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 51
    public function block_estproduit($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 54
    public function block_estajoutproduit($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 57
    public function block_estrecette($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 60
    public function block_estajoutrecette($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 72
    public function block_titre($context, array $blocks = array())
    {
    }

    // line 80
    public function block_contenue($context, array $blocks = array())
    {
        echo " Acceuil ";
    }

    public function getTemplateName()
    {
        return "MedCeliaBundle:Main:template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 80,  256 => 72,  250 => 60,  244 => 57,  238 => 54,  232 => 51,  226 => 48,  213 => 95,  190 => 92,  186 => 89,  176 => 81,  174 => 80,  163 => 72,  149 => 61,  145 => 60,  140 => 58,  136 => 57,  131 => 55,  127 => 54,  122 => 52,  118 => 51,  113 => 49,  109 => 48,  89 => 31,  79 => 23,  67 => 17,  41 => 15,  37 => 10,  26 => 1,);
    }
}
