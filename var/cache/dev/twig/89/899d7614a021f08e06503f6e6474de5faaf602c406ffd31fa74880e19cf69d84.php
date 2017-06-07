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
        $__internal_4c7943f8c57d82ab1fc40656441113d7e6b251b6e3ea277ca693881c116e42ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7943f8c57d82ab1fc40656441113d7e6b251b6e3ea277ca693881c116e42ef->enter($__internal_4c7943f8c57d82ab1fc40656441113d7e6b251b6e3ea277ca693881c116e42ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7ac5ab15f067f441a523710cefde8ed543313bc3ff65c1626d3472513d8354d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac5ab15f067f441a523710cefde8ed543313bc3ff65c1626d3472513d8354d5->enter($__internal_7ac5ab15f067f441a523710cefde8ed543313bc3ff65c1626d3472513d8354d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4c7943f8c57d82ab1fc40656441113d7e6b251b6e3ea277ca693881c116e42ef->leave($__internal_4c7943f8c57d82ab1fc40656441113d7e6b251b6e3ea277ca693881c116e42ef_prof);

        
        $__internal_7ac5ab15f067f441a523710cefde8ed543313bc3ff65c1626d3472513d8354d5->leave($__internal_7ac5ab15f067f441a523710cefde8ed543313bc3ff65c1626d3472513d8354d5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fac65de80fe6eab54a46f3698ae392275979090a0a9fb97a08d7375da2177495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac65de80fe6eab54a46f3698ae392275979090a0a9fb97a08d7375da2177495->enter($__internal_fac65de80fe6eab54a46f3698ae392275979090a0a9fb97a08d7375da2177495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_903592f9415443fca80022b085b9468d2b3be1f140903dd0b785dacf6327a04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903592f9415443fca80022b085b9468d2b3be1f140903dd0b785dacf6327a04d->enter($__internal_903592f9415443fca80022b085b9468d2b3be1f140903dd0b785dacf6327a04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_903592f9415443fca80022b085b9468d2b3be1f140903dd0b785dacf6327a04d->leave($__internal_903592f9415443fca80022b085b9468d2b3be1f140903dd0b785dacf6327a04d_prof);

        
        $__internal_fac65de80fe6eab54a46f3698ae392275979090a0a9fb97a08d7375da2177495->leave($__internal_fac65de80fe6eab54a46f3698ae392275979090a0a9fb97a08d7375da2177495_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_295543e73b9185bb6a15f868497b45d151b40a55df7fd60d35a926eb8b2b3332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295543e73b9185bb6a15f868497b45d151b40a55df7fd60d35a926eb8b2b3332->enter($__internal_295543e73b9185bb6a15f868497b45d151b40a55df7fd60d35a926eb8b2b3332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4522cfd76f1145b852bef386800a3022ac93788a82526559b52dda34cbf88b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4522cfd76f1145b852bef386800a3022ac93788a82526559b52dda34cbf88b8f->enter($__internal_4522cfd76f1145b852bef386800a3022ac93788a82526559b52dda34cbf88b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4522cfd76f1145b852bef386800a3022ac93788a82526559b52dda34cbf88b8f->leave($__internal_4522cfd76f1145b852bef386800a3022ac93788a82526559b52dda34cbf88b8f_prof);

        
        $__internal_295543e73b9185bb6a15f868497b45d151b40a55df7fd60d35a926eb8b2b3332->leave($__internal_295543e73b9185bb6a15f868497b45d151b40a55df7fd60d35a926eb8b2b3332_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e9575aeaac719ac527d4b0fd1b7d202afe582f5ad9277140bb999665bdfcadeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9575aeaac719ac527d4b0fd1b7d202afe582f5ad9277140bb999665bdfcadeb->enter($__internal_e9575aeaac719ac527d4b0fd1b7d202afe582f5ad9277140bb999665bdfcadeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_623bb07827cb075ec70336221a38de886eb5165bd3caf4f3efcf4fa9c64345f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623bb07827cb075ec70336221a38de886eb5165bd3caf4f3efcf4fa9c64345f7->enter($__internal_623bb07827cb075ec70336221a38de886eb5165bd3caf4f3efcf4fa9c64345f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "includes/navbar.html.twig");
        echo "
    ";
        
        $__internal_623bb07827cb075ec70336221a38de886eb5165bd3caf4f3efcf4fa9c64345f7->leave($__internal_623bb07827cb075ec70336221a38de886eb5165bd3caf4f3efcf4fa9c64345f7_prof);

        
        $__internal_e9575aeaac719ac527d4b0fd1b7d202afe582f5ad9277140bb999665bdfcadeb->leave($__internal_e9575aeaac719ac527d4b0fd1b7d202afe582f5ad9277140bb999665bdfcadeb_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_fad228df33d06619bb8857a4c84f4b4bb00d7c61946122924daa1664368f0311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad228df33d06619bb8857a4c84f4b4bb00d7c61946122924daa1664368f0311->enter($__internal_fad228df33d06619bb8857a4c84f4b4bb00d7c61946122924daa1664368f0311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6c8bc784b0d14eb923803b308b457e6b25b30820e56896db581c4952db4d6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c8bc784b0d14eb923803b308b457e6b25b30820e56896db581c4952db4d6f5->enter($__internal_b6c8bc784b0d14eb923803b308b457e6b25b30820e56896db581c4952db4d6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6c8bc784b0d14eb923803b308b457e6b25b30820e56896db581c4952db4d6f5->leave($__internal_b6c8bc784b0d14eb923803b308b457e6b25b30820e56896db581c4952db4d6f5_prof);

        
        $__internal_fad228df33d06619bb8857a4c84f4b4bb00d7c61946122924daa1664368f0311->leave($__internal_fad228df33d06619bb8857a4c84f4b4bb00d7c61946122924daa1664368f0311_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7978b3ef80120921bb35cdae0793aa5a045c45cae048d05b375ce685b03c561b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7978b3ef80120921bb35cdae0793aa5a045c45cae048d05b375ce685b03c561b->enter($__internal_7978b3ef80120921bb35cdae0793aa5a045c45cae048d05b375ce685b03c561b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_2a163dd9caede5e4baa8554d7226483bfbf1d23b75de86501f9130ebf0c73f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a163dd9caede5e4baa8554d7226483bfbf1d23b75de86501f9130ebf0c73f7f->enter($__internal_2a163dd9caede5e4baa8554d7226483bfbf1d23b75de86501f9130ebf0c73f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "includes/footer.html.twig");
        echo "
        ";
        
        $__internal_2a163dd9caede5e4baa8554d7226483bfbf1d23b75de86501f9130ebf0c73f7f->leave($__internal_2a163dd9caede5e4baa8554d7226483bfbf1d23b75de86501f9130ebf0c73f7f_prof);

        
        $__internal_7978b3ef80120921bb35cdae0793aa5a045c45cae048d05b375ce685b03c561b->leave($__internal_7978b3ef80120921bb35cdae0793aa5a045c45cae048d05b375ce685b03c561b_prof);

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
