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
            'navBar' => array($this, 'block_navBar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f73452f55ace61406a38ac6c7ea90d799c735eb396f4f8f702435a6a3d3a002a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73452f55ace61406a38ac6c7ea90d799c735eb396f4f8f702435a6a3d3a002a->enter($__internal_f73452f55ace61406a38ac6c7ea90d799c735eb396f4f8f702435a6a3d3a002a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d490fc089aa3c052cc896eadcae8dcfa6a0f3f15078a0270f1b5fa05afd3cd5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d490fc089aa3c052cc896eadcae8dcfa6a0f3f15078a0270f1b5fa05afd3cd5c->enter($__internal_d490fc089aa3c052cc896eadcae8dcfa6a0f3f15078a0270f1b5fa05afd3cd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f73452f55ace61406a38ac6c7ea90d799c735eb396f4f8f702435a6a3d3a002a->leave($__internal_f73452f55ace61406a38ac6c7ea90d799c735eb396f4f8f702435a6a3d3a002a_prof);

        
        $__internal_d490fc089aa3c052cc896eadcae8dcfa6a0f3f15078a0270f1b5fa05afd3cd5c->leave($__internal_d490fc089aa3c052cc896eadcae8dcfa6a0f3f15078a0270f1b5fa05afd3cd5c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a92356889ac9d783c78d5580d4d7376d322c0d654c8afa2f31899ef8fdbae18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a92356889ac9d783c78d5580d4d7376d322c0d654c8afa2f31899ef8fdbae18->enter($__internal_6a92356889ac9d783c78d5580d4d7376d322c0d654c8afa2f31899ef8fdbae18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8ad4c397c484532c4036e8f413383ffa88db1e462a1d65cc89162c687f6d866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ad4c397c484532c4036e8f413383ffa88db1e462a1d65cc89162c687f6d866->enter($__internal_e8ad4c397c484532c4036e8f413383ffa88db1e462a1d65cc89162c687f6d866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e8ad4c397c484532c4036e8f413383ffa88db1e462a1d65cc89162c687f6d866->leave($__internal_e8ad4c397c484532c4036e8f413383ffa88db1e462a1d65cc89162c687f6d866_prof);

        
        $__internal_6a92356889ac9d783c78d5580d4d7376d322c0d654c8afa2f31899ef8fdbae18->leave($__internal_6a92356889ac9d783c78d5580d4d7376d322c0d654c8afa2f31899ef8fdbae18_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d39e5dd569aa6f8c4547221595a72453be52474b54603fac708393caff54c850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39e5dd569aa6f8c4547221595a72453be52474b54603fac708393caff54c850->enter($__internal_d39e5dd569aa6f8c4547221595a72453be52474b54603fac708393caff54c850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a1d27e70b1a697b2a6a63c4bc472f0baa880984918a24bb462c48b0ad87e89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1d27e70b1a697b2a6a63c4bc472f0baa880984918a24bb462c48b0ad87e89d->enter($__internal_9a1d27e70b1a697b2a6a63c4bc472f0baa880984918a24bb462c48b0ad87e89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9a1d27e70b1a697b2a6a63c4bc472f0baa880984918a24bb462c48b0ad87e89d->leave($__internal_9a1d27e70b1a697b2a6a63c4bc472f0baa880984918a24bb462c48b0ad87e89d_prof);

        
        $__internal_d39e5dd569aa6f8c4547221595a72453be52474b54603fac708393caff54c850->leave($__internal_d39e5dd569aa6f8c4547221595a72453be52474b54603fac708393caff54c850_prof);

    }

    // line 16
    public function block_navBar($context, array $blocks = array())
    {
        $__internal_3ba76f94d24ec405d7995f68cf5dc84676cc70dadc8b09ba42bca5cc640308f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba76f94d24ec405d7995f68cf5dc84676cc70dadc8b09ba42bca5cc640308f2->enter($__internal_3ba76f94d24ec405d7995f68cf5dc84676cc70dadc8b09ba42bca5cc640308f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBar"));

        $__internal_893505b5c4d50f624024df4ad5335d1a471f56d551a3e6951a5f02644dddc2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893505b5c4d50f624024df4ad5335d1a471f56d551a3e6951a5f02644dddc2c3->enter($__internal_893505b5c4d50f624024df4ad5335d1a471f56d551a3e6951a5f02644dddc2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navBar"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "includes/navbar.html.twig");
        echo "
    ";
        
        $__internal_893505b5c4d50f624024df4ad5335d1a471f56d551a3e6951a5f02644dddc2c3->leave($__internal_893505b5c4d50f624024df4ad5335d1a471f56d551a3e6951a5f02644dddc2c3_prof);

        
        $__internal_3ba76f94d24ec405d7995f68cf5dc84676cc70dadc8b09ba42bca5cc640308f2->leave($__internal_3ba76f94d24ec405d7995f68cf5dc84676cc70dadc8b09ba42bca5cc640308f2_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_9524f1d55c9d9a3f08eb8068f8f5eda196cc30b4a47ab2632925a66fbd2069a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9524f1d55c9d9a3f08eb8068f8f5eda196cc30b4a47ab2632925a66fbd2069a2->enter($__internal_9524f1d55c9d9a3f08eb8068f8f5eda196cc30b4a47ab2632925a66fbd2069a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da2180e8b60545d09c738f398bc53082dd1e760e301c0a098fd9e034104ebc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2180e8b60545d09c738f398bc53082dd1e760e301c0a098fd9e034104ebc67->enter($__internal_da2180e8b60545d09c738f398bc53082dd1e760e301c0a098fd9e034104ebc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da2180e8b60545d09c738f398bc53082dd1e760e301c0a098fd9e034104ebc67->leave($__internal_da2180e8b60545d09c738f398bc53082dd1e760e301c0a098fd9e034104ebc67_prof);

        
        $__internal_9524f1d55c9d9a3f08eb8068f8f5eda196cc30b4a47ab2632925a66fbd2069a2->leave($__internal_9524f1d55c9d9a3f08eb8068f8f5eda196cc30b4a47ab2632925a66fbd2069a2_prof);

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
", "base.html.twig", "/var/www/html/geek-letters/app/Resources/views/base.html.twig");
    }
}
