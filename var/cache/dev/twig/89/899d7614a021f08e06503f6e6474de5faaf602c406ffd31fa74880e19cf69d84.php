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
        $__internal_a13e6356487d3fd012ebf2a6dbf2c608cdfa2e9356df33944375f1c51ba7fb68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13e6356487d3fd012ebf2a6dbf2c608cdfa2e9356df33944375f1c51ba7fb68->enter($__internal_a13e6356487d3fd012ebf2a6dbf2c608cdfa2e9356df33944375f1c51ba7fb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_48ce6daed94206f22ca9176b11b6ea5406d9f5b238868b87892854aa064aecd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ce6daed94206f22ca9176b11b6ea5406d9f5b238868b87892854aa064aecd0->enter($__internal_48ce6daed94206f22ca9176b11b6ea5406d9f5b238868b87892854aa064aecd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a13e6356487d3fd012ebf2a6dbf2c608cdfa2e9356df33944375f1c51ba7fb68->leave($__internal_a13e6356487d3fd012ebf2a6dbf2c608cdfa2e9356df33944375f1c51ba7fb68_prof);

        
        $__internal_48ce6daed94206f22ca9176b11b6ea5406d9f5b238868b87892854aa064aecd0->leave($__internal_48ce6daed94206f22ca9176b11b6ea5406d9f5b238868b87892854aa064aecd0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d74ee9ee09f47a2137c0b6ec54ca18d4263874c7258e044a51a381a4ec0de160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74ee9ee09f47a2137c0b6ec54ca18d4263874c7258e044a51a381a4ec0de160->enter($__internal_d74ee9ee09f47a2137c0b6ec54ca18d4263874c7258e044a51a381a4ec0de160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ddd75efdb039563d19c6339b05a590c1942914eb1c68832a86af007cf7ee6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddd75efdb039563d19c6339b05a590c1942914eb1c68832a86af007cf7ee6dc->enter($__internal_1ddd75efdb039563d19c6339b05a590c1942914eb1c68832a86af007cf7ee6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ddd75efdb039563d19c6339b05a590c1942914eb1c68832a86af007cf7ee6dc->leave($__internal_1ddd75efdb039563d19c6339b05a590c1942914eb1c68832a86af007cf7ee6dc_prof);

        
        $__internal_d74ee9ee09f47a2137c0b6ec54ca18d4263874c7258e044a51a381a4ec0de160->leave($__internal_d74ee9ee09f47a2137c0b6ec54ca18d4263874c7258e044a51a381a4ec0de160_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1818e30eadea4d99aa82d52e843ea968b94dbd961c41f70ab5b0d2cd09a5af03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1818e30eadea4d99aa82d52e843ea968b94dbd961c41f70ab5b0d2cd09a5af03->enter($__internal_1818e30eadea4d99aa82d52e843ea968b94dbd961c41f70ab5b0d2cd09a5af03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_389e2e29a11dea80d83c92d6e093a2380d29b0711b1e798b275be96490bb1913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389e2e29a11dea80d83c92d6e093a2380d29b0711b1e798b275be96490bb1913->enter($__internal_389e2e29a11dea80d83c92d6e093a2380d29b0711b1e798b275be96490bb1913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_389e2e29a11dea80d83c92d6e093a2380d29b0711b1e798b275be96490bb1913->leave($__internal_389e2e29a11dea80d83c92d6e093a2380d29b0711b1e798b275be96490bb1913_prof);

        
        $__internal_1818e30eadea4d99aa82d52e843ea968b94dbd961c41f70ab5b0d2cd09a5af03->leave($__internal_1818e30eadea4d99aa82d52e843ea968b94dbd961c41f70ab5b0d2cd09a5af03_prof);

    }

    // line 16
    public function block_nav($context, array $blocks = array())
    {
        $__internal_76770b29e9c557e6d337989e4012658d135661bf363c13c21088c4a133d35025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76770b29e9c557e6d337989e4012658d135661bf363c13c21088c4a133d35025->enter($__internal_76770b29e9c557e6d337989e4012658d135661bf363c13c21088c4a133d35025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_a4c8a0a4dfefd3a1460a0dba62b5051e80e67141c7029771f4decdb03bb4ddb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c8a0a4dfefd3a1460a0dba62b5051e80e67141c7029771f4decdb03bb4ddb5->enter($__internal_a4c8a0a4dfefd3a1460a0dba62b5051e80e67141c7029771f4decdb03bb4ddb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 17
        echo "    ";
        echo twig_include($this->env, $context, "includes/navbar.html.twig");
        echo "
    ";
        
        $__internal_a4c8a0a4dfefd3a1460a0dba62b5051e80e67141c7029771f4decdb03bb4ddb5->leave($__internal_a4c8a0a4dfefd3a1460a0dba62b5051e80e67141c7029771f4decdb03bb4ddb5_prof);

        
        $__internal_76770b29e9c557e6d337989e4012658d135661bf363c13c21088c4a133d35025->leave($__internal_76770b29e9c557e6d337989e4012658d135661bf363c13c21088c4a133d35025_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_b33ae2d7334fc30ae7a673c42f5ab16aa5f6a77a3f555dd0d25f8112ad9730b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b33ae2d7334fc30ae7a673c42f5ab16aa5f6a77a3f555dd0d25f8112ad9730b0->enter($__internal_b33ae2d7334fc30ae7a673c42f5ab16aa5f6a77a3f555dd0d25f8112ad9730b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f6cb87fd62318ce553dd7d476b92f9cb2dcdda1414337c409996bb075c7c0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6cb87fd62318ce553dd7d476b92f9cb2dcdda1414337c409996bb075c7c0f0->enter($__internal_4f6cb87fd62318ce553dd7d476b92f9cb2dcdda1414337c409996bb075c7c0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4f6cb87fd62318ce553dd7d476b92f9cb2dcdda1414337c409996bb075c7c0f0->leave($__internal_4f6cb87fd62318ce553dd7d476b92f9cb2dcdda1414337c409996bb075c7c0f0_prof);

        
        $__internal_b33ae2d7334fc30ae7a673c42f5ab16aa5f6a77a3f555dd0d25f8112ad9730b0->leave($__internal_b33ae2d7334fc30ae7a673c42f5ab16aa5f6a77a3f555dd0d25f8112ad9730b0_prof);

    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        $__internal_57dd5bc9d93a41181d345914dbc1d04e9f1bdeaeb3670cac1de7fcb8bf35b55d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57dd5bc9d93a41181d345914dbc1d04e9f1bdeaeb3670cac1de7fcb8bf35b55d->enter($__internal_57dd5bc9d93a41181d345914dbc1d04e9f1bdeaeb3670cac1de7fcb8bf35b55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c24dbefd435b459262d1f02ba1fea5563c716ebea6cd21d6b592479eebd288cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24dbefd435b459262d1f02ba1fea5563c716ebea6cd21d6b592479eebd288cb->enter($__internal_c24dbefd435b459262d1f02ba1fea5563c716ebea6cd21d6b592479eebd288cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 22
        echo "        ";
        echo twig_include($this->env, $context, "includes/footer.html.twig");
        echo "
        ";
        
        $__internal_c24dbefd435b459262d1f02ba1fea5563c716ebea6cd21d6b592479eebd288cb->leave($__internal_c24dbefd435b459262d1f02ba1fea5563c716ebea6cd21d6b592479eebd288cb_prof);

        
        $__internal_57dd5bc9d93a41181d345914dbc1d04e9f1bdeaeb3670cac1de7fcb8bf35b55d->leave($__internal_57dd5bc9d93a41181d345914dbc1d04e9f1bdeaeb3670cac1de7fcb8bf35b55d_prof);

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
