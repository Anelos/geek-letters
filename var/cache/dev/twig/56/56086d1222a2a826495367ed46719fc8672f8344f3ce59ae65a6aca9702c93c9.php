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
        $__internal_094032f907854af8a6c904b8d52dbd936c94988dd07057136560ea4fb58ec6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094032f907854af8a6c904b8d52dbd936c94988dd07057136560ea4fb58ec6c2->enter($__internal_094032f907854af8a6c904b8d52dbd936c94988dd07057136560ea4fb58ec6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_94bef77bf4b776e55fd7902bab1e68f8f89862a3d122acfd4214648ffa4539b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bef77bf4b776e55fd7902bab1e68f8f89862a3d122acfd4214648ffa4539b7->enter($__internal_94bef77bf4b776e55fd7902bab1e68f8f89862a3d122acfd4214648ffa4539b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_094032f907854af8a6c904b8d52dbd936c94988dd07057136560ea4fb58ec6c2->leave($__internal_094032f907854af8a6c904b8d52dbd936c94988dd07057136560ea4fb58ec6c2_prof);

        
        $__internal_94bef77bf4b776e55fd7902bab1e68f8f89862a3d122acfd4214648ffa4539b7->leave($__internal_94bef77bf4b776e55fd7902bab1e68f8f89862a3d122acfd4214648ffa4539b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_75c031adcb2143ff58203d69b5bb2002e5c448393105d200913dda60fa46c16a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c031adcb2143ff58203d69b5bb2002e5c448393105d200913dda60fa46c16a->enter($__internal_75c031adcb2143ff58203d69b5bb2002e5c448393105d200913dda60fa46c16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45343956eaa78073a901e12a8e0b2515cbb0c57752bb8bdcac857a1330eb4cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45343956eaa78073a901e12a8e0b2515cbb0c57752bb8bdcac857a1330eb4cfb->enter($__internal_45343956eaa78073a901e12a8e0b2515cbb0c57752bb8bdcac857a1330eb4cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_45343956eaa78073a901e12a8e0b2515cbb0c57752bb8bdcac857a1330eb4cfb->leave($__internal_45343956eaa78073a901e12a8e0b2515cbb0c57752bb8bdcac857a1330eb4cfb_prof);

        
        $__internal_75c031adcb2143ff58203d69b5bb2002e5c448393105d200913dda60fa46c16a->leave($__internal_75c031adcb2143ff58203d69b5bb2002e5c448393105d200913dda60fa46c16a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6174d07cc2d4ec4599a7694b30ab60ffa99f81b6c15a80cb04e372c9b9ddc7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6174d07cc2d4ec4599a7694b30ab60ffa99f81b6c15a80cb04e372c9b9ddc7a5->enter($__internal_6174d07cc2d4ec4599a7694b30ab60ffa99f81b6c15a80cb04e372c9b9ddc7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a87f0562a1952fea93408bfcd61bec9b89a8d6bf178f3ebcf3a30961379bf67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87f0562a1952fea93408bfcd61bec9b89a8d6bf178f3ebcf3a30961379bf67f->enter($__internal_a87f0562a1952fea93408bfcd61bec9b89a8d6bf178f3ebcf3a30961379bf67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a87f0562a1952fea93408bfcd61bec9b89a8d6bf178f3ebcf3a30961379bf67f->leave($__internal_a87f0562a1952fea93408bfcd61bec9b89a8d6bf178f3ebcf3a30961379bf67f_prof);

        
        $__internal_6174d07cc2d4ec4599a7694b30ab60ffa99f81b6c15a80cb04e372c9b9ddc7a5->leave($__internal_6174d07cc2d4ec4599a7694b30ab60ffa99f81b6c15a80cb04e372c9b9ddc7a5_prof);

    }

    // line 16
    public function block_navBar($context, array $blocks = array())
    {
        $__internal_700c765846afb41f5d24084f1f872a7821350d297b8657c4e881f12e4844a39a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_700c765846afb41f5d24084f1f872a7821350d297b8657c4e881f12e4844a39a->enter($__internal_700c765846afb41f5d24084f1f872a7821350d297b8657c4e881f12e4844a39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBar"));

        $__internal_6fb56d976dcd25f2ea48403723fdb349323a63983812c00cf7b7ae184120b7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb56d976dcd25f2ea48403723fdb349323a63983812c00cf7b7ae184120b7af->enter($__internal_6fb56d976dcd25f2ea48403723fdb349323a63983812c00cf7b7ae184120b7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBar"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "includes/navbar.html.twig");
        echo "
    ";
        
        $__internal_6fb56d976dcd25f2ea48403723fdb349323a63983812c00cf7b7ae184120b7af->leave($__internal_6fb56d976dcd25f2ea48403723fdb349323a63983812c00cf7b7ae184120b7af_prof);

        
        $__internal_700c765846afb41f5d24084f1f872a7821350d297b8657c4e881f12e4844a39a->leave($__internal_700c765846afb41f5d24084f1f872a7821350d297b8657c4e881f12e4844a39a_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f1a969225f8872bf4f86506480a8fce591234a9a9b3ee0182dda9e797ff302b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1a969225f8872bf4f86506480a8fce591234a9a9b3ee0182dda9e797ff302b->enter($__internal_8f1a969225f8872bf4f86506480a8fce591234a9a9b3ee0182dda9e797ff302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2073feb91b923e5c94d0935eac0192d54b7fb522e26fff0c3aaa01318e0ff5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2073feb91b923e5c94d0935eac0192d54b7fb522e26fff0c3aaa01318e0ff5ef->enter($__internal_2073feb91b923e5c94d0935eac0192d54b7fb522e26fff0c3aaa01318e0ff5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2073feb91b923e5c94d0935eac0192d54b7fb522e26fff0c3aaa01318e0ff5ef->leave($__internal_2073feb91b923e5c94d0935eac0192d54b7fb522e26fff0c3aaa01318e0ff5ef_prof);

        
        $__internal_8f1a969225f8872bf4f86506480a8fce591234a9a9b3ee0182dda9e797ff302b->leave($__internal_8f1a969225f8872bf4f86506480a8fce591234a9a9b3ee0182dda9e797ff302b_prof);

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
