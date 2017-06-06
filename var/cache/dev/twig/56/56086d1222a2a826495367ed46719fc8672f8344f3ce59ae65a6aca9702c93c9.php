<?php

/* ::base.html.twig */
class __TwigTemplate_40ad1942fb4911a2620b82a460e1232cdf7b984f50883a1557b6246004198991 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navBar' => array($this, 'block_navBar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2c36ef806845e21b59e37ce91323dcff416885cd9e9b9f76ad328e329dba05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c36ef806845e21b59e37ce91323dcff416885cd9e9b9f76ad328e329dba05a->enter($__internal_b2c36ef806845e21b59e37ce91323dcff416885cd9e9b9f76ad328e329dba05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6c724a83281187404400aca81753257b1b5c7f7adcf0bf4b12310c7eabe06204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c724a83281187404400aca81753257b1b5c7f7adcf0bf4b12310c7eabe06204->enter($__internal_6c724a83281187404400aca81753257b1b5c7f7adcf0bf4b12310c7eabe06204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            // asset "02a283d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02a283d_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/css/compiled/app_bootstrap.min_1.css");
            // line 12
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "02a283d_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02a283d_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/css/compiled/app_main_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "02a283d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_02a283d") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/css/compiled/app.css");
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
        $this->displayBlock('navBar', $context, $blocks);
        // line 19
        echo "        <div class=\"container-fluid\">
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        </div>
        ";
        // line 22
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "52108b8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_52108b8_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/assets/js/compiled/app_jquery.min_1.js");
            // line 26
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
        // line 28
        echo "    </body>
</html>
";
        
        $__internal_b2c36ef806845e21b59e37ce91323dcff416885cd9e9b9f76ad328e329dba05a->leave($__internal_b2c36ef806845e21b59e37ce91323dcff416885cd9e9b9f76ad328e329dba05a_prof);

        
        $__internal_6c724a83281187404400aca81753257b1b5c7f7adcf0bf4b12310c7eabe06204->leave($__internal_6c724a83281187404400aca81753257b1b5c7f7adcf0bf4b12310c7eabe06204_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e9ec075f40b37705f3c9d16aadc57294b7ba04dea087305e9a1171d2fa88cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9ec075f40b37705f3c9d16aadc57294b7ba04dea087305e9a1171d2fa88cfc->enter($__internal_5e9ec075f40b37705f3c9d16aadc57294b7ba04dea087305e9a1171d2fa88cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95d2412f3cde0c902891f23277d3c6c27b4e4fd20e714b3ed3d52e30ccdf7618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d2412f3cde0c902891f23277d3c6c27b4e4fd20e714b3ed3d52e30ccdf7618->enter($__internal_95d2412f3cde0c902891f23277d3c6c27b4e4fd20e714b3ed3d52e30ccdf7618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_95d2412f3cde0c902891f23277d3c6c27b4e4fd20e714b3ed3d52e30ccdf7618->leave($__internal_95d2412f3cde0c902891f23277d3c6c27b4e4fd20e714b3ed3d52e30ccdf7618_prof);

        
        $__internal_5e9ec075f40b37705f3c9d16aadc57294b7ba04dea087305e9a1171d2fa88cfc->leave($__internal_5e9ec075f40b37705f3c9d16aadc57294b7ba04dea087305e9a1171d2fa88cfc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_946ac446bcf457a3458e396809f21e2a993864adaf5a9fdd829978e14e0a60b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946ac446bcf457a3458e396809f21e2a993864adaf5a9fdd829978e14e0a60b1->enter($__internal_946ac446bcf457a3458e396809f21e2a993864adaf5a9fdd829978e14e0a60b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b79f2537f40344e7f61e8b2f83c3a4ba055d064adcdc3228999546df6dc8e54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79f2537f40344e7f61e8b2f83c3a4ba055d064adcdc3228999546df6dc8e54a->enter($__internal_b79f2537f40344e7f61e8b2f83c3a4ba055d064adcdc3228999546df6dc8e54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b79f2537f40344e7f61e8b2f83c3a4ba055d064adcdc3228999546df6dc8e54a->leave($__internal_b79f2537f40344e7f61e8b2f83c3a4ba055d064adcdc3228999546df6dc8e54a_prof);

        
        $__internal_946ac446bcf457a3458e396809f21e2a993864adaf5a9fdd829978e14e0a60b1->leave($__internal_946ac446bcf457a3458e396809f21e2a993864adaf5a9fdd829978e14e0a60b1_prof);

    }

    // line 16
    public function block_navBar($context, array $blocks = array())
    {
        $__internal_7cacccb67af95886503d062e616e69d06e3f2b27f2d3b557b69de0485f25ec74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cacccb67af95886503d062e616e69d06e3f2b27f2d3b557b69de0485f25ec74->enter($__internal_7cacccb67af95886503d062e616e69d06e3f2b27f2d3b557b69de0485f25ec74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBar"));

        $__internal_940ac0553536838107b54077004f4d487ab060003bad01a0697126f03948c15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940ac0553536838107b54077004f4d487ab060003bad01a0697126f03948c15b->enter($__internal_940ac0553536838107b54077004f4d487ab060003bad01a0697126f03948c15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBar"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "includes/navbar.html.twig");
        echo "
    ";
        
        $__internal_940ac0553536838107b54077004f4d487ab060003bad01a0697126f03948c15b->leave($__internal_940ac0553536838107b54077004f4d487ab060003bad01a0697126f03948c15b_prof);

        
        $__internal_7cacccb67af95886503d062e616e69d06e3f2b27f2d3b557b69de0485f25ec74->leave($__internal_7cacccb67af95886503d062e616e69d06e3f2b27f2d3b557b69de0485f25ec74_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_d60bb9b9286750ebe5a96464249b05855cc89016deec15e690ba9d16d4c61e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60bb9b9286750ebe5a96464249b05855cc89016deec15e690ba9d16d4c61e5e->enter($__internal_d60bb9b9286750ebe5a96464249b05855cc89016deec15e690ba9d16d4c61e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd1f7be2f524e62719e4d48de6149e4a268c8fdf1ec2a893b788330eba8ebde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1f7be2f524e62719e4d48de6149e4a268c8fdf1ec2a893b788330eba8ebde4->enter($__internal_cd1f7be2f524e62719e4d48de6149e4a268c8fdf1ec2a893b788330eba8ebde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd1f7be2f524e62719e4d48de6149e4a268c8fdf1ec2a893b788330eba8ebde4->leave($__internal_cd1f7be2f524e62719e4d48de6149e4a268c8fdf1ec2a893b788330eba8ebde4_prof);

        
        $__internal_d60bb9b9286750ebe5a96464249b05855cc89016deec15e690ba9d16d4c61e5e->leave($__internal_d60bb9b9286750ebe5a96464249b05855cc89016deec15e690ba9d16d4c61e5e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 20,  164 => 17,  155 => 16,  138 => 6,  120 => 5,  108 => 28,  88 => 26,  84 => 22,  81 => 21,  79 => 20,  76 => 19,  74 => 16,  70 => 14,  50 => 12,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
            'assets/css/main.css'
            filter='cssrewrite' output='assets/css/compiled/app.css' %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
        {% endstylesheets %}
    </head>
    <body>
    {% block navBar %}
    {{ include('includes/navbar.html.twig') }}
    {% endblock %}
        <div class=\"container-fluid\">
        {% block body %}{% endblock %}
        </div>
        {% javascripts
            'assets/js/jquery.min.js'
            'assets/js/bootstrap.min.js'
            output='assets/js/compiled/app.js' %}
            <script src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/geek-letters/app/Resources/views/base.html.twig");
    }
}
