<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ab15a82d2f41667fe112fcd096c096aff147d0b28598b090b6fef89ccc5aa14c extends Twig_Template
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
        $__internal_8c6710b3a81f9d61561e75f4fca800596e979454662fec0ac73711b351193691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6710b3a81f9d61561e75f4fca800596e979454662fec0ac73711b351193691->enter($__internal_8c6710b3a81f9d61561e75f4fca800596e979454662fec0ac73711b351193691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6139772b70be94fb7e51ce7e7d7d6093fb197b59173a53233a7ecf337d6b15ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6139772b70be94fb7e51ce7e7d7d6093fb197b59173a53233a7ecf337d6b15ce->enter($__internal_6139772b70be94fb7e51ce7e7d7d6093fb197b59173a53233a7ecf337d6b15ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c6710b3a81f9d61561e75f4fca800596e979454662fec0ac73711b351193691->leave($__internal_8c6710b3a81f9d61561e75f4fca800596e979454662fec0ac73711b351193691_prof);

        
        $__internal_6139772b70be94fb7e51ce7e7d7d6093fb197b59173a53233a7ecf337d6b15ce->leave($__internal_6139772b70be94fb7e51ce7e7d7d6093fb197b59173a53233a7ecf337d6b15ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4643839bac3a473f3f53e713be258c01a338c073cebf6608cd3407e9b269670c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4643839bac3a473f3f53e713be258c01a338c073cebf6608cd3407e9b269670c->enter($__internal_4643839bac3a473f3f53e713be258c01a338c073cebf6608cd3407e9b269670c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d7f7d33bca263569b4eda1bf002e279bcc86798b3dd83f5c868619a2e91c5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7f7d33bca263569b4eda1bf002e279bcc86798b3dd83f5c868619a2e91c5e6->enter($__internal_3d7f7d33bca263569b4eda1bf002e279bcc86798b3dd83f5c868619a2e91c5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3d7f7d33bca263569b4eda1bf002e279bcc86798b3dd83f5c868619a2e91c5e6->leave($__internal_3d7f7d33bca263569b4eda1bf002e279bcc86798b3dd83f5c868619a2e91c5e6_prof);

        
        $__internal_4643839bac3a473f3f53e713be258c01a338c073cebf6608cd3407e9b269670c->leave($__internal_4643839bac3a473f3f53e713be258c01a338c073cebf6608cd3407e9b269670c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e1703cee0eb3dce0b46c92b353cc16a11ec980224d19af89d3d5803dbd22842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1703cee0eb3dce0b46c92b353cc16a11ec980224d19af89d3d5803dbd22842->enter($__internal_8e1703cee0eb3dce0b46c92b353cc16a11ec980224d19af89d3d5803dbd22842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d128cdb6cfb069363004f18b168eb31d30750cdcdde1caa6c1e9ab17e2ed57a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d128cdb6cfb069363004f18b168eb31d30750cdcdde1caa6c1e9ab17e2ed57a4->enter($__internal_d128cdb6cfb069363004f18b168eb31d30750cdcdde1caa6c1e9ab17e2ed57a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d128cdb6cfb069363004f18b168eb31d30750cdcdde1caa6c1e9ab17e2ed57a4->leave($__internal_d128cdb6cfb069363004f18b168eb31d30750cdcdde1caa6c1e9ab17e2ed57a4_prof);

        
        $__internal_8e1703cee0eb3dce0b46c92b353cc16a11ec980224d19af89d3d5803dbd22842->leave($__internal_8e1703cee0eb3dce0b46c92b353cc16a11ec980224d19af89d3d5803dbd22842_prof);

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
