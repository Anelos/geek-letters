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
        $__internal_4a0cf2e9e34bafb78b0d373c85af5b293c83df7ca9c62743afb908ab34c64ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0cf2e9e34bafb78b0d373c85af5b293c83df7ca9c62743afb908ab34c64ece->enter($__internal_4a0cf2e9e34bafb78b0d373c85af5b293c83df7ca9c62743afb908ab34c64ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_fd7acc06fa56314fd22becf1663b37f902334fd7ce1b80666d3351ae94814144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7acc06fa56314fd22becf1663b37f902334fd7ce1b80666d3351ae94814144->enter($__internal_fd7acc06fa56314fd22becf1663b37f902334fd7ce1b80666d3351ae94814144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_4a0cf2e9e34bafb78b0d373c85af5b293c83df7ca9c62743afb908ab34c64ece->leave($__internal_4a0cf2e9e34bafb78b0d373c85af5b293c83df7ca9c62743afb908ab34c64ece_prof);

        
        $__internal_fd7acc06fa56314fd22becf1663b37f902334fd7ce1b80666d3351ae94814144->leave($__internal_fd7acc06fa56314fd22becf1663b37f902334fd7ce1b80666d3351ae94814144_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9972822d1e5b77cca94238e2d7e02bf8a9ae208a6f57852a1e9153fdd3be8cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9972822d1e5b77cca94238e2d7e02bf8a9ae208a6f57852a1e9153fdd3be8cbd->enter($__internal_9972822d1e5b77cca94238e2d7e02bf8a9ae208a6f57852a1e9153fdd3be8cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_01dbcee5224e4f5263c7a0b0b3669039b7cfcee3c27a823c073c79bbf2387e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dbcee5224e4f5263c7a0b0b3669039b7cfcee3c27a823c073c79bbf2387e0d->enter($__internal_01dbcee5224e4f5263c7a0b0b3669039b7cfcee3c27a823c073c79bbf2387e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_01dbcee5224e4f5263c7a0b0b3669039b7cfcee3c27a823c073c79bbf2387e0d->leave($__internal_01dbcee5224e4f5263c7a0b0b3669039b7cfcee3c27a823c073c79bbf2387e0d_prof);

        
        $__internal_9972822d1e5b77cca94238e2d7e02bf8a9ae208a6f57852a1e9153fdd3be8cbd->leave($__internal_9972822d1e5b77cca94238e2d7e02bf8a9ae208a6f57852a1e9153fdd3be8cbd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32f5f6805a5b2413ae531e971fa6e845b96e436be43596e376f664bca42c4a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32f5f6805a5b2413ae531e971fa6e845b96e436be43596e376f664bca42c4a85->enter($__internal_32f5f6805a5b2413ae531e971fa6e845b96e436be43596e376f664bca42c4a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_89fd9089ad4d73c99db9740078c64b76edd1aa5db2607384435762fe2a594733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fd9089ad4d73c99db9740078c64b76edd1aa5db2607384435762fe2a594733->enter($__internal_89fd9089ad4d73c99db9740078c64b76edd1aa5db2607384435762fe2a594733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_89fd9089ad4d73c99db9740078c64b76edd1aa5db2607384435762fe2a594733->leave($__internal_89fd9089ad4d73c99db9740078c64b76edd1aa5db2607384435762fe2a594733_prof);

        
        $__internal_32f5f6805a5b2413ae531e971fa6e845b96e436be43596e376f664bca42c4a85->leave($__internal_32f5f6805a5b2413ae531e971fa6e845b96e436be43596e376f664bca42c4a85_prof);

    }

    // line 16
    public function block_navBar($context, array $blocks = array())
    {
        $__internal_f65c57594999eb6fc7df8f961170f20066f42d522df1e16c2314ab2cbe0c2b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65c57594999eb6fc7df8f961170f20066f42d522df1e16c2314ab2cbe0c2b4c->enter($__internal_f65c57594999eb6fc7df8f961170f20066f42d522df1e16c2314ab2cbe0c2b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBar"));

        $__internal_f5ba29bd82dc3a3affcd6f523b1de826fc1a24b180c135630b1a352f63f85b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ba29bd82dc3a3affcd6f523b1de826fc1a24b180c135630b1a352f63f85b27->enter($__internal_f5ba29bd82dc3a3affcd6f523b1de826fc1a24b180c135630b1a352f63f85b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBar"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "includes/navbar.html.twig");
        echo "
    ";
        
        $__internal_f5ba29bd82dc3a3affcd6f523b1de826fc1a24b180c135630b1a352f63f85b27->leave($__internal_f5ba29bd82dc3a3affcd6f523b1de826fc1a24b180c135630b1a352f63f85b27_prof);

        
        $__internal_f65c57594999eb6fc7df8f961170f20066f42d522df1e16c2314ab2cbe0c2b4c->leave($__internal_f65c57594999eb6fc7df8f961170f20066f42d522df1e16c2314ab2cbe0c2b4c_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_a57d3bf5a410705e46f0f330e2d6d5d197a0d5acf9b2f9f434f9a276e1033985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57d3bf5a410705e46f0f330e2d6d5d197a0d5acf9b2f9f434f9a276e1033985->enter($__internal_a57d3bf5a410705e46f0f330e2d6d5d197a0d5acf9b2f9f434f9a276e1033985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dce256a70cf1661d445ba8908046178a0f38df9a929145e68185eccdaabee536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce256a70cf1661d445ba8908046178a0f38df9a929145e68185eccdaabee536->enter($__internal_dce256a70cf1661d445ba8908046178a0f38df9a929145e68185eccdaabee536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dce256a70cf1661d445ba8908046178a0f38df9a929145e68185eccdaabee536->leave($__internal_dce256a70cf1661d445ba8908046178a0f38df9a929145e68185eccdaabee536_prof);

        
        $__internal_a57d3bf5a410705e46f0f330e2d6d5d197a0d5acf9b2f9f434f9a276e1033985->leave($__internal_a57d3bf5a410705e46f0f330e2d6d5d197a0d5acf9b2f9f434f9a276e1033985_prof);

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
