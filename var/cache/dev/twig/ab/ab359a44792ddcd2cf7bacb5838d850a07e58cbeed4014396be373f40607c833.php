<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e3a49f4f7600cc896ac4dd7b88fc60fda4c4b5dc46a19f73e086544122bde811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af6018e796f0160329db00dfb17ad63c74f40dfe6040c48518b601782c22f6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6018e796f0160329db00dfb17ad63c74f40dfe6040c48518b601782c22f6bd->enter($__internal_af6018e796f0160329db00dfb17ad63c74f40dfe6040c48518b601782c22f6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_5cea256286e7d818278612459d56385c7f6dad1112138f464239e2df58a1dd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cea256286e7d818278612459d56385c7f6dad1112138f464239e2df58a1dd55->enter($__internal_5cea256286e7d818278612459d56385c7f6dad1112138f464239e2df58a1dd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af6018e796f0160329db00dfb17ad63c74f40dfe6040c48518b601782c22f6bd->leave($__internal_af6018e796f0160329db00dfb17ad63c74f40dfe6040c48518b601782c22f6bd_prof);

        
        $__internal_5cea256286e7d818278612459d56385c7f6dad1112138f464239e2df58a1dd55->leave($__internal_5cea256286e7d818278612459d56385c7f6dad1112138f464239e2df58a1dd55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b966956f51ea12ec2c2a3a943689d064492c9fcfed90ffff751e04e782bba3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b966956f51ea12ec2c2a3a943689d064492c9fcfed90ffff751e04e782bba3c8->enter($__internal_b966956f51ea12ec2c2a3a943689d064492c9fcfed90ffff751e04e782bba3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_247f6faa6b1306614d641852326937464573111862638eafe8f7f184238c8c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247f6faa6b1306614d641852326937464573111862638eafe8f7f184238c8c52->enter($__internal_247f6faa6b1306614d641852326937464573111862638eafe8f7f184238c8c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_247f6faa6b1306614d641852326937464573111862638eafe8f7f184238c8c52->leave($__internal_247f6faa6b1306614d641852326937464573111862638eafe8f7f184238c8c52_prof);

        
        $__internal_b966956f51ea12ec2c2a3a943689d064492c9fcfed90ffff751e04e782bba3c8->leave($__internal_b966956f51ea12ec2c2a3a943689d064492c9fcfed90ffff751e04e782bba3c8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_53450cc3d2381c4c6db323af393671009d0dd68ce36483fa6a22ef95703abcaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53450cc3d2381c4c6db323af393671009d0dd68ce36483fa6a22ef95703abcaf->enter($__internal_53450cc3d2381c4c6db323af393671009d0dd68ce36483fa6a22ef95703abcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1163858b84b81369a69397ecd2c87357395b67d56bb0cc0105901c124965732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1163858b84b81369a69397ecd2c87357395b67d56bb0cc0105901c124965732->enter($__internal_e1163858b84b81369a69397ecd2c87357395b67d56bb0cc0105901c124965732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e1163858b84b81369a69397ecd2c87357395b67d56bb0cc0105901c124965732->leave($__internal_e1163858b84b81369a69397ecd2c87357395b67d56bb0cc0105901c124965732_prof);

        
        $__internal_53450cc3d2381c4c6db323af393671009d0dd68ce36483fa6a22ef95703abcaf->leave($__internal_53450cc3d2381c4c6db323af393671009d0dd68ce36483fa6a22ef95703abcaf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
