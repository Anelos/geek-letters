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
        $__internal_23f8e955f7a81f994fd44df74e4fc12eba47b8fc95541bffa0fc457bfbfe1af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f8e955f7a81f994fd44df74e4fc12eba47b8fc95541bffa0fc457bfbfe1af4->enter($__internal_23f8e955f7a81f994fd44df74e4fc12eba47b8fc95541bffa0fc457bfbfe1af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a0f5f8961ca7c1bb37c226fe4291fa5abd79300773c7126f5d55f231666e2b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f5f8961ca7c1bb37c226fe4291fa5abd79300773c7126f5d55f231666e2b21->enter($__internal_a0f5f8961ca7c1bb37c226fe4291fa5abd79300773c7126f5d55f231666e2b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23f8e955f7a81f994fd44df74e4fc12eba47b8fc95541bffa0fc457bfbfe1af4->leave($__internal_23f8e955f7a81f994fd44df74e4fc12eba47b8fc95541bffa0fc457bfbfe1af4_prof);

        
        $__internal_a0f5f8961ca7c1bb37c226fe4291fa5abd79300773c7126f5d55f231666e2b21->leave($__internal_a0f5f8961ca7c1bb37c226fe4291fa5abd79300773c7126f5d55f231666e2b21_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c260260dbbe842c8481c646861eb7b3b3c5db6a0d1c5400776f55fb38ce1f81a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c260260dbbe842c8481c646861eb7b3b3c5db6a0d1c5400776f55fb38ce1f81a->enter($__internal_c260260dbbe842c8481c646861eb7b3b3c5db6a0d1c5400776f55fb38ce1f81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd75030d688d561966f0d5d5f3315557f51249bea486d743e18bf42848ca040e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd75030d688d561966f0d5d5f3315557f51249bea486d743e18bf42848ca040e->enter($__internal_fd75030d688d561966f0d5d5f3315557f51249bea486d743e18bf42848ca040e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fd75030d688d561966f0d5d5f3315557f51249bea486d743e18bf42848ca040e->leave($__internal_fd75030d688d561966f0d5d5f3315557f51249bea486d743e18bf42848ca040e_prof);

        
        $__internal_c260260dbbe842c8481c646861eb7b3b3c5db6a0d1c5400776f55fb38ce1f81a->leave($__internal_c260260dbbe842c8481c646861eb7b3b3c5db6a0d1c5400776f55fb38ce1f81a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9741ddcb51c7b37215b0dc2ed2162cac773cff4050aeca295f4a8c0758b18d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9741ddcb51c7b37215b0dc2ed2162cac773cff4050aeca295f4a8c0758b18d33->enter($__internal_9741ddcb51c7b37215b0dc2ed2162cac773cff4050aeca295f4a8c0758b18d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_29c5879256f67eaaa346ba5794a2fe4320d412e4f7bc10b82dae373422c70462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c5879256f67eaaa346ba5794a2fe4320d412e4f7bc10b82dae373422c70462->enter($__internal_29c5879256f67eaaa346ba5794a2fe4320d412e4f7bc10b82dae373422c70462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_29c5879256f67eaaa346ba5794a2fe4320d412e4f7bc10b82dae373422c70462->leave($__internal_29c5879256f67eaaa346ba5794a2fe4320d412e4f7bc10b82dae373422c70462_prof);

        
        $__internal_9741ddcb51c7b37215b0dc2ed2162cac773cff4050aeca295f4a8c0758b18d33->leave($__internal_9741ddcb51c7b37215b0dc2ed2162cac773cff4050aeca295f4a8c0758b18d33_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a615e94f1ceffedf255269af8ab507c549572afa99684bbf96a75f105fa21a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a615e94f1ceffedf255269af8ab507c549572afa99684bbf96a75f105fa21a71->enter($__internal_a615e94f1ceffedf255269af8ab507c549572afa99684bbf96a75f105fa21a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a7bbe89b0d6aad85de711df2829e70ed91cc985437a0b1418e9b455ca52242c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7bbe89b0d6aad85de711df2829e70ed91cc985437a0b1418e9b455ca52242c->enter($__internal_4a7bbe89b0d6aad85de711df2829e70ed91cc985437a0b1418e9b455ca52242c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4a7bbe89b0d6aad85de711df2829e70ed91cc985437a0b1418e9b455ca52242c->leave($__internal_4a7bbe89b0d6aad85de711df2829e70ed91cc985437a0b1418e9b455ca52242c_prof);

        
        $__internal_a615e94f1ceffedf255269af8ab507c549572afa99684bbf96a75f105fa21a71->leave($__internal_a615e94f1ceffedf255269af8ab507c549572afa99684bbf96a75f105fa21a71_prof);

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
