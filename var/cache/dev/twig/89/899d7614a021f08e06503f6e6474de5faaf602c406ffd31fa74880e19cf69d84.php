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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08b097ca573ca39d78e3073a7b9e7b327bf8f95bf1afe817f9e475a488681543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b097ca573ca39d78e3073a7b9e7b327bf8f95bf1afe817f9e475a488681543->enter($__internal_08b097ca573ca39d78e3073a7b9e7b327bf8f95bf1afe817f9e475a488681543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_65f5865c0fbac1bb1f832aa3e717a2f101a0ff468abeed1e43ed74ca9da4aa6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f5865c0fbac1bb1f832aa3e717a2f101a0ff468abeed1e43ed74ca9da4aa6f->enter($__internal_65f5865c0fbac1bb1f832aa3e717a2f101a0ff468abeed1e43ed74ca9da4aa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_08b097ca573ca39d78e3073a7b9e7b327bf8f95bf1afe817f9e475a488681543->leave($__internal_08b097ca573ca39d78e3073a7b9e7b327bf8f95bf1afe817f9e475a488681543_prof);

        
        $__internal_65f5865c0fbac1bb1f832aa3e717a2f101a0ff468abeed1e43ed74ca9da4aa6f->leave($__internal_65f5865c0fbac1bb1f832aa3e717a2f101a0ff468abeed1e43ed74ca9da4aa6f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_84eff466fb36913d082343cb7ccbe8db87c6fc95ced2f12c7c6bab09eff52eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84eff466fb36913d082343cb7ccbe8db87c6fc95ced2f12c7c6bab09eff52eb4->enter($__internal_84eff466fb36913d082343cb7ccbe8db87c6fc95ced2f12c7c6bab09eff52eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a40f5d1e9fccd4fa7675be2b4ba3d6947bbfb816ba9d2f367e0ef55ee08d1db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40f5d1e9fccd4fa7675be2b4ba3d6947bbfb816ba9d2f367e0ef55ee08d1db5->enter($__internal_a40f5d1e9fccd4fa7675be2b4ba3d6947bbfb816ba9d2f367e0ef55ee08d1db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a40f5d1e9fccd4fa7675be2b4ba3d6947bbfb816ba9d2f367e0ef55ee08d1db5->leave($__internal_a40f5d1e9fccd4fa7675be2b4ba3d6947bbfb816ba9d2f367e0ef55ee08d1db5_prof);

        
        $__internal_84eff466fb36913d082343cb7ccbe8db87c6fc95ced2f12c7c6bab09eff52eb4->leave($__internal_84eff466fb36913d082343cb7ccbe8db87c6fc95ced2f12c7c6bab09eff52eb4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2bfdbc3ad2afe0676d74456d28ba715c5fe6cd950bbab9e858ae2c566b9cb5d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfdbc3ad2afe0676d74456d28ba715c5fe6cd950bbab9e858ae2c566b9cb5d8->enter($__internal_2bfdbc3ad2afe0676d74456d28ba715c5fe6cd950bbab9e858ae2c566b9cb5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a2e39d21b2441622b9977bf51e561ada7b3d5b06a367d891a7d06ce78afcd8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e39d21b2441622b9977bf51e561ada7b3d5b06a367d891a7d06ce78afcd8bd->enter($__internal_a2e39d21b2441622b9977bf51e561ada7b3d5b06a367d891a7d06ce78afcd8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a2e39d21b2441622b9977bf51e561ada7b3d5b06a367d891a7d06ce78afcd8bd->leave($__internal_a2e39d21b2441622b9977bf51e561ada7b3d5b06a367d891a7d06ce78afcd8bd_prof);

        
        $__internal_2bfdbc3ad2afe0676d74456d28ba715c5fe6cd950bbab9e858ae2c566b9cb5d8->leave($__internal_2bfdbc3ad2afe0676d74456d28ba715c5fe6cd950bbab9e858ae2c566b9cb5d8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a2aba0e92b1314ae8da6e4e8cb62f0bd286c686821604bd08208136d387d53d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2aba0e92b1314ae8da6e4e8cb62f0bd286c686821604bd08208136d387d53d->enter($__internal_1a2aba0e92b1314ae8da6e4e8cb62f0bd286c686821604bd08208136d387d53d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5330929c916f9428ace7381409f405826608197b82e460c5d5bc8455cea9a5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5330929c916f9428ace7381409f405826608197b82e460c5d5bc8455cea9a5ea->enter($__internal_5330929c916f9428ace7381409f405826608197b82e460c5d5bc8455cea9a5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5330929c916f9428ace7381409f405826608197b82e460c5d5bc8455cea9a5ea->leave($__internal_5330929c916f9428ace7381409f405826608197b82e460c5d5bc8455cea9a5ea_prof);

        
        $__internal_1a2aba0e92b1314ae8da6e4e8cb62f0bd286c686821604bd08208136d387d53d->leave($__internal_1a2aba0e92b1314ae8da6e4e8cb62f0bd286c686821604bd08208136d387d53d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_885952b44e4a56beb8222065c3d657e1c953f7afcf96bdb60cd2b92b4e351713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885952b44e4a56beb8222065c3d657e1c953f7afcf96bdb60cd2b92b4e351713->enter($__internal_885952b44e4a56beb8222065c3d657e1c953f7afcf96bdb60cd2b92b4e351713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_36eac3d5648bd09e7cd00df780f7b3a3c0fb2048bba19a0bba607e3c4373d697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36eac3d5648bd09e7cd00df780f7b3a3c0fb2048bba19a0bba607e3c4373d697->enter($__internal_36eac3d5648bd09e7cd00df780f7b3a3c0fb2048bba19a0bba607e3c4373d697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_36eac3d5648bd09e7cd00df780f7b3a3c0fb2048bba19a0bba607e3c4373d697->leave($__internal_36eac3d5648bd09e7cd00df780f7b3a3c0fb2048bba19a0bba607e3c4373d697_prof);

        
        $__internal_885952b44e4a56beb8222065c3d657e1c953f7afcf96bdb60cd2b92b4e351713->leave($__internal_885952b44e4a56beb8222065c3d657e1c953f7afcf96bdb60cd2b92b4e351713_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/geek-letters/app/Resources/views/base.html.twig");
    }
}
