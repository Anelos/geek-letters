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
        $__internal_12e8476fa6285088c00431211743141b86b797815a0477d7413734f3355bf8d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12e8476fa6285088c00431211743141b86b797815a0477d7413734f3355bf8d6->enter($__internal_12e8476fa6285088c00431211743141b86b797815a0477d7413734f3355bf8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3ba882c6f5f28fbde0e767510f5709e0d2a5fa2656d2295a24280d0e3da31422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba882c6f5f28fbde0e767510f5709e0d2a5fa2656d2295a24280d0e3da31422->enter($__internal_3ba882c6f5f28fbde0e767510f5709e0d2a5fa2656d2295a24280d0e3da31422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_12e8476fa6285088c00431211743141b86b797815a0477d7413734f3355bf8d6->leave($__internal_12e8476fa6285088c00431211743141b86b797815a0477d7413734f3355bf8d6_prof);

        
        $__internal_3ba882c6f5f28fbde0e767510f5709e0d2a5fa2656d2295a24280d0e3da31422->leave($__internal_3ba882c6f5f28fbde0e767510f5709e0d2a5fa2656d2295a24280d0e3da31422_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_005a54f1b3fc7d4dbe36c5722f4f7fee097434a07a8c074efea14f6b8aa53a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005a54f1b3fc7d4dbe36c5722f4f7fee097434a07a8c074efea14f6b8aa53a84->enter($__internal_005a54f1b3fc7d4dbe36c5722f4f7fee097434a07a8c074efea14f6b8aa53a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d315a1bb0f0ce0aa69696f1949f90a69750d3c7d164e745f1bdb88d352694d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d315a1bb0f0ce0aa69696f1949f90a69750d3c7d164e745f1bdb88d352694d5->enter($__internal_3d315a1bb0f0ce0aa69696f1949f90a69750d3c7d164e745f1bdb88d352694d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3d315a1bb0f0ce0aa69696f1949f90a69750d3c7d164e745f1bdb88d352694d5->leave($__internal_3d315a1bb0f0ce0aa69696f1949f90a69750d3c7d164e745f1bdb88d352694d5_prof);

        
        $__internal_005a54f1b3fc7d4dbe36c5722f4f7fee097434a07a8c074efea14f6b8aa53a84->leave($__internal_005a54f1b3fc7d4dbe36c5722f4f7fee097434a07a8c074efea14f6b8aa53a84_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2fe1b703995cdba0a4272f9d21622fea1f921e2fa913d94e9da2629c01eaee11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe1b703995cdba0a4272f9d21622fea1f921e2fa913d94e9da2629c01eaee11->enter($__internal_2fe1b703995cdba0a4272f9d21622fea1f921e2fa913d94e9da2629c01eaee11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d8ecf297564941eb43cf84730396d46859f0a64a3db5319167051b9358203bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ecf297564941eb43cf84730396d46859f0a64a3db5319167051b9358203bdc->enter($__internal_d8ecf297564941eb43cf84730396d46859f0a64a3db5319167051b9358203bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d8ecf297564941eb43cf84730396d46859f0a64a3db5319167051b9358203bdc->leave($__internal_d8ecf297564941eb43cf84730396d46859f0a64a3db5319167051b9358203bdc_prof);

        
        $__internal_2fe1b703995cdba0a4272f9d21622fea1f921e2fa913d94e9da2629c01eaee11->leave($__internal_2fe1b703995cdba0a4272f9d21622fea1f921e2fa913d94e9da2629c01eaee11_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_edabb62b32ea9767d04fd2cfda6804bb9874dc6710fb6fc1af83f4e2ba7174d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edabb62b32ea9767d04fd2cfda6804bb9874dc6710fb6fc1af83f4e2ba7174d9->enter($__internal_edabb62b32ea9767d04fd2cfda6804bb9874dc6710fb6fc1af83f4e2ba7174d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_8868af1cec0f1b35c7d1c4599cba27c502eb931994ca3af1547465353b1b003b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8868af1cec0f1b35c7d1c4599cba27c502eb931994ca3af1547465353b1b003b->enter($__internal_8868af1cec0f1b35c7d1c4599cba27c502eb931994ca3af1547465353b1b003b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "includes/navbar.html.twig");
        echo "
    ";
        
        $__internal_8868af1cec0f1b35c7d1c4599cba27c502eb931994ca3af1547465353b1b003b->leave($__internal_8868af1cec0f1b35c7d1c4599cba27c502eb931994ca3af1547465353b1b003b_prof);

        
        $__internal_edabb62b32ea9767d04fd2cfda6804bb9874dc6710fb6fc1af83f4e2ba7174d9->leave($__internal_edabb62b32ea9767d04fd2cfda6804bb9874dc6710fb6fc1af83f4e2ba7174d9_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_10a05768ff6f8861415782a01365bf16d785abf0a3dd17161f41e677a8460b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a05768ff6f8861415782a01365bf16d785abf0a3dd17161f41e677a8460b6a->enter($__internal_10a05768ff6f8861415782a01365bf16d785abf0a3dd17161f41e677a8460b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20462841fab254d0d1befa68af78c8a5cba6277dd97b73db5fb53621ebb16b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20462841fab254d0d1befa68af78c8a5cba6277dd97b73db5fb53621ebb16b8f->enter($__internal_20462841fab254d0d1befa68af78c8a5cba6277dd97b73db5fb53621ebb16b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20462841fab254d0d1befa68af78c8a5cba6277dd97b73db5fb53621ebb16b8f->leave($__internal_20462841fab254d0d1befa68af78c8a5cba6277dd97b73db5fb53621ebb16b8f_prof);

        
        $__internal_10a05768ff6f8861415782a01365bf16d785abf0a3dd17161f41e677a8460b6a->leave($__internal_10a05768ff6f8861415782a01365bf16d785abf0a3dd17161f41e677a8460b6a_prof);

    }

    // line 22
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d105c5049636a818a865515c2b178e0e18ee31f398a812f6b9adc0448fa2c281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d105c5049636a818a865515c2b178e0e18ee31f398a812f6b9adc0448fa2c281->enter($__internal_d105c5049636a818a865515c2b178e0e18ee31f398a812f6b9adc0448fa2c281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_4255c6cdbf92d405a1d72a9fd2f9738e3a64db18e6e8368224c8da5211d24096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4255c6cdbf92d405a1d72a9fd2f9738e3a64db18e6e8368224c8da5211d24096->enter($__internal_4255c6cdbf92d405a1d72a9fd2f9738e3a64db18e6e8368224c8da5211d24096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 23
        echo "        ";
        echo twig_include($this->env, $context, "includes/footer.html.twig");
        echo "
        ";
        
        $__internal_4255c6cdbf92d405a1d72a9fd2f9738e3a64db18e6e8368224c8da5211d24096->leave($__internal_4255c6cdbf92d405a1d72a9fd2f9738e3a64db18e6e8368224c8da5211d24096_prof);

        
        $__internal_d105c5049636a818a865515c2b178e0e18ee31f398a812f6b9adc0448fa2c281->leave($__internal_d105c5049636a818a865515c2b178e0e18ee31f398a812f6b9adc0448fa2c281_prof);

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
