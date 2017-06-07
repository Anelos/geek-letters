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
        $__internal_467305ea0590ba10bbee5a139a4aaaaf362b52329bef2d21f506414a4223fffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467305ea0590ba10bbee5a139a4aaaaf362b52329bef2d21f506414a4223fffc->enter($__internal_467305ea0590ba10bbee5a139a4aaaaf362b52329bef2d21f506414a4223fffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e97fd307808c78a2e659853e94e46c267a6ec6350e651f51f53df6fa4a3bd329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97fd307808c78a2e659853e94e46c267a6ec6350e651f51f53df6fa4a3bd329->enter($__internal_e97fd307808c78a2e659853e94e46c267a6ec6350e651f51f53df6fa4a3bd329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 24
        echo "        </div>
        ";
        // line 25
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "52108b8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_52108b8_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/js/compiled/app_jquery.min_1.js");
            // line 29
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "52108b8_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_52108b8_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/js/compiled/app_bootstrap.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "52108b8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_52108b8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/js/compiled/app.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 31
        echo "    </body>
</html>
";
        
        $__internal_467305ea0590ba10bbee5a139a4aaaaf362b52329bef2d21f506414a4223fffc->leave($__internal_467305ea0590ba10bbee5a139a4aaaaf362b52329bef2d21f506414a4223fffc_prof);

        
        $__internal_e97fd307808c78a2e659853e94e46c267a6ec6350e651f51f53df6fa4a3bd329->leave($__internal_e97fd307808c78a2e659853e94e46c267a6ec6350e651f51f53df6fa4a3bd329_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_55654e282f4aaadb4308021cd75cfbe239514f12abb13a1b0cfd74468e419111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55654e282f4aaadb4308021cd75cfbe239514f12abb13a1b0cfd74468e419111->enter($__internal_55654e282f4aaadb4308021cd75cfbe239514f12abb13a1b0cfd74468e419111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97a753ca61f796940386cf1f96ee05942066b2dd6bfb12b9c64daa4edf8ab777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a753ca61f796940386cf1f96ee05942066b2dd6bfb12b9c64daa4edf8ab777->enter($__internal_97a753ca61f796940386cf1f96ee05942066b2dd6bfb12b9c64daa4edf8ab777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_97a753ca61f796940386cf1f96ee05942066b2dd6bfb12b9c64daa4edf8ab777->leave($__internal_97a753ca61f796940386cf1f96ee05942066b2dd6bfb12b9c64daa4edf8ab777_prof);

        
        $__internal_55654e282f4aaadb4308021cd75cfbe239514f12abb13a1b0cfd74468e419111->leave($__internal_55654e282f4aaadb4308021cd75cfbe239514f12abb13a1b0cfd74468e419111_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_89fde67ef3dbb90d57513547a58635a9cccbcdc262c1ab78b0c21d45363398d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fde67ef3dbb90d57513547a58635a9cccbcdc262c1ab78b0c21d45363398d0->enter($__internal_89fde67ef3dbb90d57513547a58635a9cccbcdc262c1ab78b0c21d45363398d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_92cd35e0bbe8b16a6b07d002bb08342f2d6cbeda9871f5ba93dcb1402807d901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cd35e0bbe8b16a6b07d002bb08342f2d6cbeda9871f5ba93dcb1402807d901->enter($__internal_92cd35e0bbe8b16a6b07d002bb08342f2d6cbeda9871f5ba93dcb1402807d901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_92cd35e0bbe8b16a6b07d002bb08342f2d6cbeda9871f5ba93dcb1402807d901->leave($__internal_92cd35e0bbe8b16a6b07d002bb08342f2d6cbeda9871f5ba93dcb1402807d901_prof);

        
        $__internal_89fde67ef3dbb90d57513547a58635a9cccbcdc262c1ab78b0c21d45363398d0->leave($__internal_89fde67ef3dbb90d57513547a58635a9cccbcdc262c1ab78b0c21d45363398d0_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_6215db962d0cb943cdcac71d1b5469f74922860deb17949e2d7a43845aa924da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6215db962d0cb943cdcac71d1b5469f74922860deb17949e2d7a43845aa924da->enter($__internal_6215db962d0cb943cdcac71d1b5469f74922860deb17949e2d7a43845aa924da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_cfb1cdf2cb2415282adad9815ebcb7dd41a0a18858dc28774c424c1b02c56943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb1cdf2cb2415282adad9815ebcb7dd41a0a18858dc28774c424c1b02c56943->enter($__internal_cfb1cdf2cb2415282adad9815ebcb7dd41a0a18858dc28774c424c1b02c56943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "includes/navbar.html.twig");
        echo "
    ";
        
        $__internal_cfb1cdf2cb2415282adad9815ebcb7dd41a0a18858dc28774c424c1b02c56943->leave($__internal_cfb1cdf2cb2415282adad9815ebcb7dd41a0a18858dc28774c424c1b02c56943_prof);

        
        $__internal_6215db962d0cb943cdcac71d1b5469f74922860deb17949e2d7a43845aa924da->leave($__internal_6215db962d0cb943cdcac71d1b5469f74922860deb17949e2d7a43845aa924da_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_d05e5b1c5ca9c319fc6126b09864b24e4a1a207fa7b30dbc913d138f0b0c8ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05e5b1c5ca9c319fc6126b09864b24e4a1a207fa7b30dbc913d138f0b0c8ca6->enter($__internal_d05e5b1c5ca9c319fc6126b09864b24e4a1a207fa7b30dbc913d138f0b0c8ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6a13b2c8424a6475053eb4e0469a9ea81ec5416be2e88a2a9b2c45beb644719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a13b2c8424a6475053eb4e0469a9ea81ec5416be2e88a2a9b2c45beb644719->enter($__internal_b6a13b2c8424a6475053eb4e0469a9ea81ec5416be2e88a2a9b2c45beb644719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6a13b2c8424a6475053eb4e0469a9ea81ec5416be2e88a2a9b2c45beb644719->leave($__internal_b6a13b2c8424a6475053eb4e0469a9ea81ec5416be2e88a2a9b2c45beb644719_prof);

        
        $__internal_d05e5b1c5ca9c319fc6126b09864b24e4a1a207fa7b30dbc913d138f0b0c8ca6->leave($__internal_d05e5b1c5ca9c319fc6126b09864b24e4a1a207fa7b30dbc913d138f0b0c8ca6_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_43928e1e04bda788d2348be7361e8364b887739c1cc5ed207e88764602fc405f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43928e1e04bda788d2348be7361e8364b887739c1cc5ed207e88764602fc405f->enter($__internal_43928e1e04bda788d2348be7361e8364b887739c1cc5ed207e88764602fc405f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_86d145db4715349d1c6599874b299c83d41cbb60bdb047724fa72b1aa8b2e776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d145db4715349d1c6599874b299c83d41cbb60bdb047724fa72b1aa8b2e776->enter($__internal_86d145db4715349d1c6599874b299c83d41cbb60bdb047724fa72b1aa8b2e776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "includes/footer.html.twig");
        echo "
        ";
        
        $__internal_86d145db4715349d1c6599874b299c83d41cbb60bdb047724fa72b1aa8b2e776->leave($__internal_86d145db4715349d1c6599874b299c83d41cbb60bdb047724fa72b1aa8b2e776_prof);

        
        $__internal_43928e1e04bda788d2348be7361e8364b887739c1cc5ed207e88764602fc405f->leave($__internal_43928e1e04bda788d2348be7361e8364b887739c1cc5ed207e88764602fc405f_prof);

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
        return array (  207 => 22,  198 => 21,  181 => 20,  168 => 17,  159 => 16,  142 => 6,  124 => 5,  112 => 31,  92 => 29,  88 => 25,  85 => 24,  82 => 21,  80 => 20,  77 => 19,  75 => 16,  71 => 14,  51 => 12,  47 => 8,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
        {% block footer %}
        {{ include('includes/footer.html.twig') }}
        {% endblock %}
        </div>
        {% javascripts
            'assets/js/jquery.min.js'
            'assets/js/bootstrap.min.js'
            output='assets/js/compiled/app.js' %}
            <script src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
    </body>
</html>
", "base.html.twig", "/var/www/html/geek-letters/app/Resources/views/base.html.twig");
    }
}
