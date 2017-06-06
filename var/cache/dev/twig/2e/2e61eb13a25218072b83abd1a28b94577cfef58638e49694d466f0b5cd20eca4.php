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
        $__internal_ab179a85e44749aab58ccee4e79ba09b649987bf711917d489a35f9d1713aa22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab179a85e44749aab58ccee4e79ba09b649987bf711917d489a35f9d1713aa22->enter($__internal_ab179a85e44749aab58ccee4e79ba09b649987bf711917d489a35f9d1713aa22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_86b1a9eebcc7462271159e0a10a9db8b02733500a36429fc7493be258d575a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b1a9eebcc7462271159e0a10a9db8b02733500a36429fc7493be258d575a89->enter($__internal_86b1a9eebcc7462271159e0a10a9db8b02733500a36429fc7493be258d575a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab179a85e44749aab58ccee4e79ba09b649987bf711917d489a35f9d1713aa22->leave($__internal_ab179a85e44749aab58ccee4e79ba09b649987bf711917d489a35f9d1713aa22_prof);

        
        $__internal_86b1a9eebcc7462271159e0a10a9db8b02733500a36429fc7493be258d575a89->leave($__internal_86b1a9eebcc7462271159e0a10a9db8b02733500a36429fc7493be258d575a89_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d84bfef4e3e4acca0676b8c07a603b847b38f62d3bca605a2f262a47db2ad075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84bfef4e3e4acca0676b8c07a603b847b38f62d3bca605a2f262a47db2ad075->enter($__internal_d84bfef4e3e4acca0676b8c07a603b847b38f62d3bca605a2f262a47db2ad075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f57d1fb7028665f5a11a5bba124971ea3a9e7f87d0a8b0c547791f8468a6e6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57d1fb7028665f5a11a5bba124971ea3a9e7f87d0a8b0c547791f8468a6e6be->enter($__internal_f57d1fb7028665f5a11a5bba124971ea3a9e7f87d0a8b0c547791f8468a6e6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f57d1fb7028665f5a11a5bba124971ea3a9e7f87d0a8b0c547791f8468a6e6be->leave($__internal_f57d1fb7028665f5a11a5bba124971ea3a9e7f87d0a8b0c547791f8468a6e6be_prof);

        
        $__internal_d84bfef4e3e4acca0676b8c07a603b847b38f62d3bca605a2f262a47db2ad075->leave($__internal_d84bfef4e3e4acca0676b8c07a603b847b38f62d3bca605a2f262a47db2ad075_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_321becc7692b9ea1e66a2cc2c9a7082c97b80f4b29e6e76a33140211ca7f84f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321becc7692b9ea1e66a2cc2c9a7082c97b80f4b29e6e76a33140211ca7f84f7->enter($__internal_321becc7692b9ea1e66a2cc2c9a7082c97b80f4b29e6e76a33140211ca7f84f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28f02f9c2782c7d4b27c63ee822e45419de623fe9c1cd0168e0c921218359b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f02f9c2782c7d4b27c63ee822e45419de623fe9c1cd0168e0c921218359b72->enter($__internal_28f02f9c2782c7d4b27c63ee822e45419de623fe9c1cd0168e0c921218359b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_28f02f9c2782c7d4b27c63ee822e45419de623fe9c1cd0168e0c921218359b72->leave($__internal_28f02f9c2782c7d4b27c63ee822e45419de623fe9c1cd0168e0c921218359b72_prof);

        
        $__internal_321becc7692b9ea1e66a2cc2c9a7082c97b80f4b29e6e76a33140211ca7f84f7->leave($__internal_321becc7692b9ea1e66a2cc2c9a7082c97b80f4b29e6e76a33140211ca7f84f7_prof);

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
