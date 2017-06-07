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
        $__internal_8303410c723bb0fd943b3c74896a459333f1668b4cb759d0fb1f40a8a0bc0772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8303410c723bb0fd943b3c74896a459333f1668b4cb759d0fb1f40a8a0bc0772->enter($__internal_8303410c723bb0fd943b3c74896a459333f1668b4cb759d0fb1f40a8a0bc0772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b37ed3e0abcbe9964dffbe6fd573a0001e90f80dcccfad1d8c1aafa206119adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b37ed3e0abcbe9964dffbe6fd573a0001e90f80dcccfad1d8c1aafa206119adc->enter($__internal_b37ed3e0abcbe9964dffbe6fd573a0001e90f80dcccfad1d8c1aafa206119adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8303410c723bb0fd943b3c74896a459333f1668b4cb759d0fb1f40a8a0bc0772->leave($__internal_8303410c723bb0fd943b3c74896a459333f1668b4cb759d0fb1f40a8a0bc0772_prof);

        
        $__internal_b37ed3e0abcbe9964dffbe6fd573a0001e90f80dcccfad1d8c1aafa206119adc->leave($__internal_b37ed3e0abcbe9964dffbe6fd573a0001e90f80dcccfad1d8c1aafa206119adc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dde612e3958252bd7fb3060319a93e4d994a27051adb226bf0961a1d6aef1b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde612e3958252bd7fb3060319a93e4d994a27051adb226bf0961a1d6aef1b5e->enter($__internal_dde612e3958252bd7fb3060319a93e4d994a27051adb226bf0961a1d6aef1b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b8805f77d7d93d7d7fe6e79dcf9a84ef1737645219030ce4c007c6c986b5fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8805f77d7d93d7d7fe6e79dcf9a84ef1737645219030ce4c007c6c986b5fb0->enter($__internal_2b8805f77d7d93d7d7fe6e79dcf9a84ef1737645219030ce4c007c6c986b5fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2b8805f77d7d93d7d7fe6e79dcf9a84ef1737645219030ce4c007c6c986b5fb0->leave($__internal_2b8805f77d7d93d7d7fe6e79dcf9a84ef1737645219030ce4c007c6c986b5fb0_prof);

        
        $__internal_dde612e3958252bd7fb3060319a93e4d994a27051adb226bf0961a1d6aef1b5e->leave($__internal_dde612e3958252bd7fb3060319a93e4d994a27051adb226bf0961a1d6aef1b5e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_49462aacaeb6d37a330fe46fdd2353d4994f184372189674ee35cad1b85a8cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49462aacaeb6d37a330fe46fdd2353d4994f184372189674ee35cad1b85a8cab->enter($__internal_49462aacaeb6d37a330fe46fdd2353d4994f184372189674ee35cad1b85a8cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_35c1c98f421c4416eb112c2e964933bbf8745775917b2c681f9c931c8710d3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c1c98f421c4416eb112c2e964933bbf8745775917b2c681f9c931c8710d3be->enter($__internal_35c1c98f421c4416eb112c2e964933bbf8745775917b2c681f9c931c8710d3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_35c1c98f421c4416eb112c2e964933bbf8745775917b2c681f9c931c8710d3be->leave($__internal_35c1c98f421c4416eb112c2e964933bbf8745775917b2c681f9c931c8710d3be_prof);

        
        $__internal_49462aacaeb6d37a330fe46fdd2353d4994f184372189674ee35cad1b85a8cab->leave($__internal_49462aacaeb6d37a330fe46fdd2353d4994f184372189674ee35cad1b85a8cab_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_6cff475bbb43bba800f8e36527b6a8f8cf6f6f702f62b99b71c7a63307838c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cff475bbb43bba800f8e36527b6a8f8cf6f6f702f62b99b71c7a63307838c1b->enter($__internal_6cff475bbb43bba800f8e36527b6a8f8cf6f6f702f62b99b71c7a63307838c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_56c5720dc4e1ec7e5e3b1e5fea6a729a120794027edf1544154073952d630832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c5720dc4e1ec7e5e3b1e5fea6a729a120794027edf1544154073952d630832->enter($__internal_56c5720dc4e1ec7e5e3b1e5fea6a729a120794027edf1544154073952d630832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "includes/navbar.html.twig");
        echo "
    ";
        
        $__internal_56c5720dc4e1ec7e5e3b1e5fea6a729a120794027edf1544154073952d630832->leave($__internal_56c5720dc4e1ec7e5e3b1e5fea6a729a120794027edf1544154073952d630832_prof);

        
        $__internal_6cff475bbb43bba800f8e36527b6a8f8cf6f6f702f62b99b71c7a63307838c1b->leave($__internal_6cff475bbb43bba800f8e36527b6a8f8cf6f6f702f62b99b71c7a63307838c1b_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_54b77f0d0ab5ee73f28ddc2658f3c71717c5f6a97642ddbc0f9aa3409ab72a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b77f0d0ab5ee73f28ddc2658f3c71717c5f6a97642ddbc0f9aa3409ab72a61->enter($__internal_54b77f0d0ab5ee73f28ddc2658f3c71717c5f6a97642ddbc0f9aa3409ab72a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa5912bd7b5ec0d438e6599ab7bea853fc08c40aef314e7dacfea12f89aa6735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5912bd7b5ec0d438e6599ab7bea853fc08c40aef314e7dacfea12f89aa6735->enter($__internal_aa5912bd7b5ec0d438e6599ab7bea853fc08c40aef314e7dacfea12f89aa6735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aa5912bd7b5ec0d438e6599ab7bea853fc08c40aef314e7dacfea12f89aa6735->leave($__internal_aa5912bd7b5ec0d438e6599ab7bea853fc08c40aef314e7dacfea12f89aa6735_prof);

        
        $__internal_54b77f0d0ab5ee73f28ddc2658f3c71717c5f6a97642ddbc0f9aa3409ab72a61->leave($__internal_54b77f0d0ab5ee73f28ddc2658f3c71717c5f6a97642ddbc0f9aa3409ab72a61_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_39647de330933f9f116e53b0866bedf8217e08e312166640f135affd27d7f195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39647de330933f9f116e53b0866bedf8217e08e312166640f135affd27d7f195->enter($__internal_39647de330933f9f116e53b0866bedf8217e08e312166640f135affd27d7f195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_d3084696cbf1e70640803a8aca8069facfca1561fe3d417f2f8c4d77c100693d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3084696cbf1e70640803a8aca8069facfca1561fe3d417f2f8c4d77c100693d->enter($__internal_d3084696cbf1e70640803a8aca8069facfca1561fe3d417f2f8c4d77c100693d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "includes/footer.html.twig");
        echo "
        ";
        
        $__internal_d3084696cbf1e70640803a8aca8069facfca1561fe3d417f2f8c4d77c100693d->leave($__internal_d3084696cbf1e70640803a8aca8069facfca1561fe3d417f2f8c4d77c100693d_prof);

        
        $__internal_39647de330933f9f116e53b0866bedf8217e08e312166640f135affd27d7f195->leave($__internal_39647de330933f9f116e53b0866bedf8217e08e312166640f135affd27d7f195_prof);

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
