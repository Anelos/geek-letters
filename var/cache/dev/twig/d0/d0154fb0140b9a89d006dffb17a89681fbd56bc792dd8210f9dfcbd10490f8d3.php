<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_15247b897b42379b1e3aa331aad2f031225d862385dfd49831cefb8723db4133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_d1756a5599a84c142d95d0868175f44e0fa428e7b8d68cd55a2ed0ff096f89e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1756a5599a84c142d95d0868175f44e0fa428e7b8d68cd55a2ed0ff096f89e7->enter($__internal_d1756a5599a84c142d95d0868175f44e0fa428e7b8d68cd55a2ed0ff096f89e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f00c4bf264a28c81b2ff102fe12a3de8580bd0d7b97dd7dfeeea82d4c4b48e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00c4bf264a28c81b2ff102fe12a3de8580bd0d7b97dd7dfeeea82d4c4b48e24->enter($__internal_f00c4bf264a28c81b2ff102fe12a3de8580bd0d7b97dd7dfeeea82d4c4b48e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1756a5599a84c142d95d0868175f44e0fa428e7b8d68cd55a2ed0ff096f89e7->leave($__internal_d1756a5599a84c142d95d0868175f44e0fa428e7b8d68cd55a2ed0ff096f89e7_prof);

        
        $__internal_f00c4bf264a28c81b2ff102fe12a3de8580bd0d7b97dd7dfeeea82d4c4b48e24->leave($__internal_f00c4bf264a28c81b2ff102fe12a3de8580bd0d7b97dd7dfeeea82d4c4b48e24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03352576951c803f08661e70b345ea4c11f08f5d21238c13f73a936699e30aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03352576951c803f08661e70b345ea4c11f08f5d21238c13f73a936699e30aa3->enter($__internal_03352576951c803f08661e70b345ea4c11f08f5d21238c13f73a936699e30aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4ecea6acaeec839aa5aecc11696eb66ef5755d6cb07b34378620ea7a7fda8900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecea6acaeec839aa5aecc11696eb66ef5755d6cb07b34378620ea7a7fda8900->enter($__internal_4ecea6acaeec839aa5aecc11696eb66ef5755d6cb07b34378620ea7a7fda8900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ecea6acaeec839aa5aecc11696eb66ef5755d6cb07b34378620ea7a7fda8900->leave($__internal_4ecea6acaeec839aa5aecc11696eb66ef5755d6cb07b34378620ea7a7fda8900_prof);

        
        $__internal_03352576951c803f08661e70b345ea4c11f08f5d21238c13f73a936699e30aa3->leave($__internal_03352576951c803f08661e70b345ea4c11f08f5d21238c13f73a936699e30aa3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1f6b7107e524c7f6e880664c7f469b90cbf7895ac05de7d628147d3b1f73fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f6b7107e524c7f6e880664c7f469b90cbf7895ac05de7d628147d3b1f73fac->enter($__internal_b1f6b7107e524c7f6e880664c7f469b90cbf7895ac05de7d628147d3b1f73fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d1349ea7ae395affc081797dc96555062ef1e5d5aa8ddb796e573106121ff28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1349ea7ae395affc081797dc96555062ef1e5d5aa8ddb796e573106121ff28->enter($__internal_6d1349ea7ae395affc081797dc96555062ef1e5d5aa8ddb796e573106121ff28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d1349ea7ae395affc081797dc96555062ef1e5d5aa8ddb796e573106121ff28->leave($__internal_6d1349ea7ae395affc081797dc96555062ef1e5d5aa8ddb796e573106121ff28_prof);

        
        $__internal_b1f6b7107e524c7f6e880664c7f469b90cbf7895ac05de7d628147d3b1f73fac->leave($__internal_b1f6b7107e524c7f6e880664c7f469b90cbf7895ac05de7d628147d3b1f73fac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3cb23d21b25bb1daf8fc1476199bd1835f5e844690567b89d9ef08b717b64dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb23d21b25bb1daf8fc1476199bd1835f5e844690567b89d9ef08b717b64dcd->enter($__internal_3cb23d21b25bb1daf8fc1476199bd1835f5e844690567b89d9ef08b717b64dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_792210efcf17bf6aba03ebc21255187d84a1fdb49653a2e8a287798eef123445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792210efcf17bf6aba03ebc21255187d84a1fdb49653a2e8a287798eef123445->enter($__internal_792210efcf17bf6aba03ebc21255187d84a1fdb49653a2e8a287798eef123445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_792210efcf17bf6aba03ebc21255187d84a1fdb49653a2e8a287798eef123445->leave($__internal_792210efcf17bf6aba03ebc21255187d84a1fdb49653a2e8a287798eef123445_prof);

        
        $__internal_3cb23d21b25bb1daf8fc1476199bd1835f5e844690567b89d9ef08b717b64dcd->leave($__internal_3cb23d21b25bb1daf8fc1476199bd1835f5e844690567b89d9ef08b717b64dcd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
