<?php

/* base.html.twig */
class __TwigTemplate_c86fcf353b5512a321f8496c99c417d624f4303e83ec6f21bfce7a08428c4f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc63045eb983a170a9077be61876817fe9366f75f2dfc073052c5bec91e38d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc63045eb983a170a9077be61876817fe9366f75f2dfc073052c5bec91e38d44->enter($__internal_cc63045eb983a170a9077be61876817fe9366f75f2dfc073052c5bec91e38d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3369775bc198104ffd014e75ee26cfe758f3005e2f566ef62c2ba2477ce7fb0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3369775bc198104ffd014e75ee26cfe758f3005e2f566ef62c2ba2477ce7fb0c->enter($__internal_3369775bc198104ffd014e75ee26cfe758f3005e2f566ef62c2ba2477ce7fb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ea7fcf6_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ea7fcf6_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/css/compiled/app_bootstrap.min_1.css");
            // line 12
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "ea7fcf6_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ea7fcf6_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/css/compiled/app_style_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "ea7fcf6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ea7fcf6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/css/compiled/app.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "    </head>
    <body>
    ";
        // line 16
        $this->displayBlock('nav', $context, $blocks);
        // line 19
        echo "        <div class=\"container-fluid\">
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        </div>
        ";
        // line 22
        $this->displayBlock('footer', $context, $blocks);
        // line 25
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ba1bccd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ba1bccd_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/js/compiled/app_jquery.min_1.js");
            // line 31
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "ba1bccd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ba1bccd_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/js/compiled/app_bootstrap.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "ba1bccd_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ba1bccd_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/js/compiled/app_script_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "ba1bccd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_ba1bccd") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/js/compiled/app.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 33
        echo "    </body>
</html>
";
        
        $__internal_cc63045eb983a170a9077be61876817fe9366f75f2dfc073052c5bec91e38d44->leave($__internal_cc63045eb983a170a9077be61876817fe9366f75f2dfc073052c5bec91e38d44_prof);

        
        $__internal_3369775bc198104ffd014e75ee26cfe758f3005e2f566ef62c2ba2477ce7fb0c->leave($__internal_3369775bc198104ffd014e75ee26cfe758f3005e2f566ef62c2ba2477ce7fb0c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b207034aedd65b6469043be2dd27a2a613a1429217b7785bd717a3d5717b0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b207034aedd65b6469043be2dd27a2a613a1429217b7785bd717a3d5717b0db->enter($__internal_2b207034aedd65b6469043be2dd27a2a613a1429217b7785bd717a3d5717b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11259052d3c351021a1730c06b16cf992661a6a6c56f2668cc1a8f44a4c83fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11259052d3c351021a1730c06b16cf992661a6a6c56f2668cc1a8f44a4c83fb1->enter($__internal_11259052d3c351021a1730c06b16cf992661a6a6c56f2668cc1a8f44a4c83fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_11259052d3c351021a1730c06b16cf992661a6a6c56f2668cc1a8f44a4c83fb1->leave($__internal_11259052d3c351021a1730c06b16cf992661a6a6c56f2668cc1a8f44a4c83fb1_prof);

        
        $__internal_2b207034aedd65b6469043be2dd27a2a613a1429217b7785bd717a3d5717b0db->leave($__internal_2b207034aedd65b6469043be2dd27a2a613a1429217b7785bd717a3d5717b0db_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_76c36a3adc9421cce4d7e665b385fe19810f98001cd066e9bf9ecc44fddbc0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c36a3adc9421cce4d7e665b385fe19810f98001cd066e9bf9ecc44fddbc0e8->enter($__internal_76c36a3adc9421cce4d7e665b385fe19810f98001cd066e9bf9ecc44fddbc0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7ce5ae416212ed7b8753ee048d56f24c827998d0a238f9104ee2703c1dee3092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce5ae416212ed7b8753ee048d56f24c827998d0a238f9104ee2703c1dee3092->enter($__internal_7ce5ae416212ed7b8753ee048d56f24c827998d0a238f9104ee2703c1dee3092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7ce5ae416212ed7b8753ee048d56f24c827998d0a238f9104ee2703c1dee3092->leave($__internal_7ce5ae416212ed7b8753ee048d56f24c827998d0a238f9104ee2703c1dee3092_prof);

        
        $__internal_76c36a3adc9421cce4d7e665b385fe19810f98001cd066e9bf9ecc44fddbc0e8->leave($__internal_76c36a3adc9421cce4d7e665b385fe19810f98001cd066e9bf9ecc44fddbc0e8_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_5cffa677d86c950b3b8b372bcd2b1ce0d96cb12ba952703d2b09d912d1e46da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cffa677d86c950b3b8b372bcd2b1ce0d96cb12ba952703d2b09d912d1e46da4->enter($__internal_5cffa677d86c950b3b8b372bcd2b1ce0d96cb12ba952703d2b09d912d1e46da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_feac360ebcb9d3cbda2dd6095ed1af652bf93c75a49f535af91bd680f4e15f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feac360ebcb9d3cbda2dd6095ed1af652bf93c75a49f535af91bd680f4e15f30->enter($__internal_feac360ebcb9d3cbda2dd6095ed1af652bf93c75a49f535af91bd680f4e15f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "includes/navbar.html.twig");
        echo "
    ";
        
        $__internal_feac360ebcb9d3cbda2dd6095ed1af652bf93c75a49f535af91bd680f4e15f30->leave($__internal_feac360ebcb9d3cbda2dd6095ed1af652bf93c75a49f535af91bd680f4e15f30_prof);

        
        $__internal_5cffa677d86c950b3b8b372bcd2b1ce0d96cb12ba952703d2b09d912d1e46da4->leave($__internal_5cffa677d86c950b3b8b372bcd2b1ce0d96cb12ba952703d2b09d912d1e46da4_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8030eb2d9c87ac9a75ce3decbced5cbae73bd6d783ece7186bf20981f91d06b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8030eb2d9c87ac9a75ce3decbced5cbae73bd6d783ece7186bf20981f91d06b->enter($__internal_b8030eb2d9c87ac9a75ce3decbced5cbae73bd6d783ece7186bf20981f91d06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_865ea7415ff8411e5f243cdf6f6c14505e8e6825881d97619ac742e34931250d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865ea7415ff8411e5f243cdf6f6c14505e8e6825881d97619ac742e34931250d->enter($__internal_865ea7415ff8411e5f243cdf6f6c14505e8e6825881d97619ac742e34931250d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_865ea7415ff8411e5f243cdf6f6c14505e8e6825881d97619ac742e34931250d->leave($__internal_865ea7415ff8411e5f243cdf6f6c14505e8e6825881d97619ac742e34931250d_prof);

        
        $__internal_b8030eb2d9c87ac9a75ce3decbced5cbae73bd6d783ece7186bf20981f91d06b->leave($__internal_b8030eb2d9c87ac9a75ce3decbced5cbae73bd6d783ece7186bf20981f91d06b_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_23a7971913c426e10d7c53cf42f3f83d862cc13fc186f59132e2632efb204346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a7971913c426e10d7c53cf42f3f83d862cc13fc186f59132e2632efb204346->enter($__internal_23a7971913c426e10d7c53cf42f3f83d862cc13fc186f59132e2632efb204346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_9b5a36ad149e53919148c4a35cbe35714e8519ac2d3afc908e874f526c64c085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5a36ad149e53919148c4a35cbe35714e8519ac2d3afc908e874f526c64c085->enter($__internal_9b5a36ad149e53919148c4a35cbe35714e8519ac2d3afc908e874f526c64c085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "includes/footer.html.twig");
        echo "
        ";
        
        $__internal_9b5a36ad149e53919148c4a35cbe35714e8519ac2d3afc908e874f526c64c085->leave($__internal_9b5a36ad149e53919148c4a35cbe35714e8519ac2d3afc908e874f526c64c085_prof);

        
        $__internal_23a7971913c426e10d7c53cf42f3f83d862cc13fc186f59132e2632efb204346->leave($__internal_23a7971913c426e10d7c53cf42f3f83d862cc13fc186f59132e2632efb204346_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 23,  204 => 22,  187 => 20,  174 => 17,  165 => 16,  148 => 6,  130 => 5,  118 => 33,  92 => 31,  87 => 25,  85 => 22,  82 => 21,  80 => 20,  77 => 19,  75 => 16,  71 => 14,  51 => 12,  47 => 8,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% stylesheets
            'assets/css/bootstrap.min.css'
            'assets/css/style.css'
            filter='cssrewrite' output='assets/css/compiled/app.css' %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
        {% endstylesheets %}
    </head>
    <body>
    {% block nav %}
    {{ include('includes/navbar.html.twig') }}
    {% endblock %}
        <div class=\"container-fluid\">
        {% block body %}{% endblock %}
        </div>
        {% block footer %}
        {{ include('includes/footer.html.twig') }}
        {% endblock %}
        {% javascripts
            'assets/js/jquery.min.js'
            'assets/js/bootstrap.min.js'
            'assets/js/script.js'

            output='assets/js/compiled/app.js' %}
            <script src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
    </body>
</html>
", "base.html.twig", "/var/www/html/geek-letters/app/Resources/views/base.html.twig");
    }
}
