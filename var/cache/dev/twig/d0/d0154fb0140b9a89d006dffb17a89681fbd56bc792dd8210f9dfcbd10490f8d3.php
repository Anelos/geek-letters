<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_15247b897b42379b1e3aa331aad2f031225d862385dfd49831cefb8723db4133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32cccee5750f80e62bf7ec43573eae75a71fa1e4a182dfd606161d9c424093a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cccee5750f80e62bf7ec43573eae75a71fa1e4a182dfd606161d9c424093a6->enter($__internal_32cccee5750f80e62bf7ec43573eae75a71fa1e4a182dfd606161d9c424093a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_5a1ad318069b95caf3baf5d8c9de765ac11a18230ba11ec261d81d8bddd460af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1ad318069b95caf3baf5d8c9de765ac11a18230ba11ec261d81d8bddd460af->enter($__internal_5a1ad318069b95caf3baf5d8c9de765ac11a18230ba11ec261d81d8bddd460af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32cccee5750f80e62bf7ec43573eae75a71fa1e4a182dfd606161d9c424093a6->leave($__internal_32cccee5750f80e62bf7ec43573eae75a71fa1e4a182dfd606161d9c424093a6_prof);

        
        $__internal_5a1ad318069b95caf3baf5d8c9de765ac11a18230ba11ec261d81d8bddd460af->leave($__internal_5a1ad318069b95caf3baf5d8c9de765ac11a18230ba11ec261d81d8bddd460af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11a2965445fa03a7ea75db29b3f28930b4645c48ff8fa039d64e703cfed036c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a2965445fa03a7ea75db29b3f28930b4645c48ff8fa039d64e703cfed036c9->enter($__internal_11a2965445fa03a7ea75db29b3f28930b4645c48ff8fa039d64e703cfed036c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3ec8c91508f4a7419b2d60197e70e7f106cefb9b91b318925bfa6975d931c3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec8c91508f4a7419b2d60197e70e7f106cefb9b91b318925bfa6975d931c3cf->enter($__internal_3ec8c91508f4a7419b2d60197e70e7f106cefb9b91b318925bfa6975d931c3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ec8c91508f4a7419b2d60197e70e7f106cefb9b91b318925bfa6975d931c3cf->leave($__internal_3ec8c91508f4a7419b2d60197e70e7f106cefb9b91b318925bfa6975d931c3cf_prof);

        
        $__internal_11a2965445fa03a7ea75db29b3f28930b4645c48ff8fa039d64e703cfed036c9->leave($__internal_11a2965445fa03a7ea75db29b3f28930b4645c48ff8fa039d64e703cfed036c9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfc0f92da7c85ebda0c6599d76b1f7540832bedb263bcc480dc79e5c0ad3c62b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc0f92da7c85ebda0c6599d76b1f7540832bedb263bcc480dc79e5c0ad3c62b->enter($__internal_dfc0f92da7c85ebda0c6599d76b1f7540832bedb263bcc480dc79e5c0ad3c62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b8010068fdcc3c12db529214f0acba826bc31bbed5a02b977f50e22171c9b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8010068fdcc3c12db529214f0acba826bc31bbed5a02b977f50e22171c9b67->enter($__internal_5b8010068fdcc3c12db529214f0acba826bc31bbed5a02b977f50e22171c9b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b8010068fdcc3c12db529214f0acba826bc31bbed5a02b977f50e22171c9b67->leave($__internal_5b8010068fdcc3c12db529214f0acba826bc31bbed5a02b977f50e22171c9b67_prof);

        
        $__internal_dfc0f92da7c85ebda0c6599d76b1f7540832bedb263bcc480dc79e5c0ad3c62b->leave($__internal_dfc0f92da7c85ebda0c6599d76b1f7540832bedb263bcc480dc79e5c0ad3c62b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c9c3acd569c660ec425a18d6f73c49a5cd3bae41d55a92d867aaba51b632bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9c3acd569c660ec425a18d6f73c49a5cd3bae41d55a92d867aaba51b632bb0->enter($__internal_5c9c3acd569c660ec425a18d6f73c49a5cd3bae41d55a92d867aaba51b632bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_196dd4644483cff2dae16abacaa175b89cd77a40b924cc5e279ae32dbb7a5aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196dd4644483cff2dae16abacaa175b89cd77a40b924cc5e279ae32dbb7a5aa0->enter($__internal_196dd4644483cff2dae16abacaa175b89cd77a40b924cc5e279ae32dbb7a5aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_196dd4644483cff2dae16abacaa175b89cd77a40b924cc5e279ae32dbb7a5aa0->leave($__internal_196dd4644483cff2dae16abacaa175b89cd77a40b924cc5e279ae32dbb7a5aa0_prof);

        
        $__internal_5c9c3acd569c660ec425a18d6f73c49a5cd3bae41d55a92d867aaba51b632bb0->leave($__internal_5c9c3acd569c660ec425a18d6f73c49a5cd3bae41d55a92d867aaba51b632bb0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
