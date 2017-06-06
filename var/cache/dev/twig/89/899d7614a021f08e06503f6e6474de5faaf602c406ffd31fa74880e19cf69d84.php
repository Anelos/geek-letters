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
        $__internal_cdc95a9fb8ceb29e6b8792f2f4a70907cd3027ef404fe80aa13203284aa5d7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc95a9fb8ceb29e6b8792f2f4a70907cd3027ef404fe80aa13203284aa5d7f0->enter($__internal_cdc95a9fb8ceb29e6b8792f2f4a70907cd3027ef404fe80aa13203284aa5d7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_dd9a61cc723b61574f1bbec4d11302b87e24f3d12e40b2733f732b3d0dd2e423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd9a61cc723b61574f1bbec4d11302b87e24f3d12e40b2733f732b3d0dd2e423->enter($__internal_dd9a61cc723b61574f1bbec4d11302b87e24f3d12e40b2733f732b3d0dd2e423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_cdc95a9fb8ceb29e6b8792f2f4a70907cd3027ef404fe80aa13203284aa5d7f0->leave($__internal_cdc95a9fb8ceb29e6b8792f2f4a70907cd3027ef404fe80aa13203284aa5d7f0_prof);

        
        $__internal_dd9a61cc723b61574f1bbec4d11302b87e24f3d12e40b2733f732b3d0dd2e423->leave($__internal_dd9a61cc723b61574f1bbec4d11302b87e24f3d12e40b2733f732b3d0dd2e423_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af50fc18cac70f50ad9fae90ff1a7200ad3fb44f4a550b4345f591d49db95a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af50fc18cac70f50ad9fae90ff1a7200ad3fb44f4a550b4345f591d49db95a40->enter($__internal_af50fc18cac70f50ad9fae90ff1a7200ad3fb44f4a550b4345f591d49db95a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d21f5edeee6db98a7bb86633af1c3e487957b3cf4c135a0d91895eb28bb2df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d21f5edeee6db98a7bb86633af1c3e487957b3cf4c135a0d91895eb28bb2df7->enter($__internal_2d21f5edeee6db98a7bb86633af1c3e487957b3cf4c135a0d91895eb28bb2df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2d21f5edeee6db98a7bb86633af1c3e487957b3cf4c135a0d91895eb28bb2df7->leave($__internal_2d21f5edeee6db98a7bb86633af1c3e487957b3cf4c135a0d91895eb28bb2df7_prof);

        
        $__internal_af50fc18cac70f50ad9fae90ff1a7200ad3fb44f4a550b4345f591d49db95a40->leave($__internal_af50fc18cac70f50ad9fae90ff1a7200ad3fb44f4a550b4345f591d49db95a40_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0720c97d7f7bdec194315f99513a937bce5fd073b71c1ad17d5aeaff7b7bcd98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0720c97d7f7bdec194315f99513a937bce5fd073b71c1ad17d5aeaff7b7bcd98->enter($__internal_0720c97d7f7bdec194315f99513a937bce5fd073b71c1ad17d5aeaff7b7bcd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ae8ce6e0ae4f57d869a3170fc5bdadc30d883463edf92539142233a9ba5a43df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8ce6e0ae4f57d869a3170fc5bdadc30d883463edf92539142233a9ba5a43df->enter($__internal_ae8ce6e0ae4f57d869a3170fc5bdadc30d883463edf92539142233a9ba5a43df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ae8ce6e0ae4f57d869a3170fc5bdadc30d883463edf92539142233a9ba5a43df->leave($__internal_ae8ce6e0ae4f57d869a3170fc5bdadc30d883463edf92539142233a9ba5a43df_prof);

        
        $__internal_0720c97d7f7bdec194315f99513a937bce5fd073b71c1ad17d5aeaff7b7bcd98->leave($__internal_0720c97d7f7bdec194315f99513a937bce5fd073b71c1ad17d5aeaff7b7bcd98_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b24c91e15f4212bb012d6b7c74022b911c516bba58b647ad9ba900a5e79a87e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24c91e15f4212bb012d6b7c74022b911c516bba58b647ad9ba900a5e79a87e1->enter($__internal_b24c91e15f4212bb012d6b7c74022b911c516bba58b647ad9ba900a5e79a87e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_67d0fbd7f39c79d50dc38751fee62ebedefe1ee268c0e170556afcff6dacac9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d0fbd7f39c79d50dc38751fee62ebedefe1ee268c0e170556afcff6dacac9a->enter($__internal_67d0fbd7f39c79d50dc38751fee62ebedefe1ee268c0e170556afcff6dacac9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "includes/navbar.html.twig");
        echo "
    ";
        
        $__internal_67d0fbd7f39c79d50dc38751fee62ebedefe1ee268c0e170556afcff6dacac9a->leave($__internal_67d0fbd7f39c79d50dc38751fee62ebedefe1ee268c0e170556afcff6dacac9a_prof);

        
        $__internal_b24c91e15f4212bb012d6b7c74022b911c516bba58b647ad9ba900a5e79a87e1->leave($__internal_b24c91e15f4212bb012d6b7c74022b911c516bba58b647ad9ba900a5e79a87e1_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_de083c850dcffe6ad70068dbb6c63286839031e11460474743762bfae46dd054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de083c850dcffe6ad70068dbb6c63286839031e11460474743762bfae46dd054->enter($__internal_de083c850dcffe6ad70068dbb6c63286839031e11460474743762bfae46dd054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50b18afc960b19f650ef1919924042ea91a447d8bdb6c254a602bf798a57f5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b18afc960b19f650ef1919924042ea91a447d8bdb6c254a602bf798a57f5dc->enter($__internal_50b18afc960b19f650ef1919924042ea91a447d8bdb6c254a602bf798a57f5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50b18afc960b19f650ef1919924042ea91a447d8bdb6c254a602bf798a57f5dc->leave($__internal_50b18afc960b19f650ef1919924042ea91a447d8bdb6c254a602bf798a57f5dc_prof);

        
        $__internal_de083c850dcffe6ad70068dbb6c63286839031e11460474743762bfae46dd054->leave($__internal_de083c850dcffe6ad70068dbb6c63286839031e11460474743762bfae46dd054_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7d17eb5c1e34c338056178a9c0942aadcf00f218498a58752cf11cf3493386e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d17eb5c1e34c338056178a9c0942aadcf00f218498a58752cf11cf3493386e9->enter($__internal_7d17eb5c1e34c338056178a9c0942aadcf00f218498a58752cf11cf3493386e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_dcb524277240a41585746d5cc142573f3e8ff1f192228d1c60164a3af2a4570b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb524277240a41585746d5cc142573f3e8ff1f192228d1c60164a3af2a4570b->enter($__internal_dcb524277240a41585746d5cc142573f3e8ff1f192228d1c60164a3af2a4570b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "includes/footer.html.twig");
        echo "
        ";
        
        $__internal_dcb524277240a41585746d5cc142573f3e8ff1f192228d1c60164a3af2a4570b->leave($__internal_dcb524277240a41585746d5cc142573f3e8ff1f192228d1c60164a3af2a4570b_prof);

        
        $__internal_7d17eb5c1e34c338056178a9c0942aadcf00f218498a58752cf11cf3493386e9->leave($__internal_7d17eb5c1e34c338056178a9c0942aadcf00f218498a58752cf11cf3493386e9_prof);

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
        return array (  207 => 23,  198 => 22,  181 => 20,  168 => 17,  159 => 16,  142 => 6,  124 => 5,  112 => 31,  92 => 29,  87 => 25,  85 => 22,  82 => 21,  80 => 20,  77 => 19,  75 => 16,  71 => 14,  51 => 12,  47 => 8,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
            output='assets/js/compiled/app.js' %}
            <script src=\"{{ asset_url }}\"></script>
        {% endjavascripts %}
    </body>
</html>
", "base.html.twig", "/var/www/html/geek-letters/app/Resources/views/base.html.twig");
    }
}
