<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_482eb11824ea61c3ddff2de8166d0cf0e087d9d1959c7f5e740c9fa096a07a84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_98c7ef7219464db596b836f50db50b8473d2ada6c11a6f99345c21ff19732245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c7ef7219464db596b836f50db50b8473d2ada6c11a6f99345c21ff19732245->enter($__internal_98c7ef7219464db596b836f50db50b8473d2ada6c11a6f99345c21ff19732245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_fbb72efe099d8d9eee01b013a66f490d569e03aed780733b524fcb13ab182406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb72efe099d8d9eee01b013a66f490d569e03aed780733b524fcb13ab182406->enter($__internal_fbb72efe099d8d9eee01b013a66f490d569e03aed780733b524fcb13ab182406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98c7ef7219464db596b836f50db50b8473d2ada6c11a6f99345c21ff19732245->leave($__internal_98c7ef7219464db596b836f50db50b8473d2ada6c11a6f99345c21ff19732245_prof);

        
        $__internal_fbb72efe099d8d9eee01b013a66f490d569e03aed780733b524fcb13ab182406->leave($__internal_fbb72efe099d8d9eee01b013a66f490d569e03aed780733b524fcb13ab182406_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79f58362930d77e3a348c830b5889421aabe06813395666b20faa70df899053b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f58362930d77e3a348c830b5889421aabe06813395666b20faa70df899053b->enter($__internal_79f58362930d77e3a348c830b5889421aabe06813395666b20faa70df899053b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4b947347324c2e6afd0b39f462007a17fb0009491f28dc8c1987d72fbf7622ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b947347324c2e6afd0b39f462007a17fb0009491f28dc8c1987d72fbf7622ef->enter($__internal_4b947347324c2e6afd0b39f462007a17fb0009491f28dc8c1987d72fbf7622ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4b947347324c2e6afd0b39f462007a17fb0009491f28dc8c1987d72fbf7622ef->leave($__internal_4b947347324c2e6afd0b39f462007a17fb0009491f28dc8c1987d72fbf7622ef_prof);

        
        $__internal_79f58362930d77e3a348c830b5889421aabe06813395666b20faa70df899053b->leave($__internal_79f58362930d77e3a348c830b5889421aabe06813395666b20faa70df899053b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de12ae458032e2c0063079fed7d54c52de023437fb562c541a7d008c1a8a282c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de12ae458032e2c0063079fed7d54c52de023437fb562c541a7d008c1a8a282c->enter($__internal_de12ae458032e2c0063079fed7d54c52de023437fb562c541a7d008c1a8a282c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a08bffe3c1f75b05892ee4b01c032b551ef7c1950a3ce9d1afdd83ad4845c20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08bffe3c1f75b05892ee4b01c032b551ef7c1950a3ce9d1afdd83ad4845c20f->enter($__internal_a08bffe3c1f75b05892ee4b01c032b551ef7c1950a3ce9d1afdd83ad4845c20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a08bffe3c1f75b05892ee4b01c032b551ef7c1950a3ce9d1afdd83ad4845c20f->leave($__internal_a08bffe3c1f75b05892ee4b01c032b551ef7c1950a3ce9d1afdd83ad4845c20f_prof);

        
        $__internal_de12ae458032e2c0063079fed7d54c52de023437fb562c541a7d008c1a8a282c->leave($__internal_de12ae458032e2c0063079fed7d54c52de023437fb562c541a7d008c1a8a282c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01d7771504711873c0d91d4c2aa1d0a3b5c2ae2b254b1063afff06b392a6ee77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d7771504711873c0d91d4c2aa1d0a3b5c2ae2b254b1063afff06b392a6ee77->enter($__internal_01d7771504711873c0d91d4c2aa1d0a3b5c2ae2b254b1063afff06b392a6ee77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3bb99818cf934f392791e293572aefbd2a12ed6932467775e1e8e542d2fdc14e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb99818cf934f392791e293572aefbd2a12ed6932467775e1e8e542d2fdc14e->enter($__internal_3bb99818cf934f392791e293572aefbd2a12ed6932467775e1e8e542d2fdc14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3bb99818cf934f392791e293572aefbd2a12ed6932467775e1e8e542d2fdc14e->leave($__internal_3bb99818cf934f392791e293572aefbd2a12ed6932467775e1e8e542d2fdc14e_prof);

        
        $__internal_01d7771504711873c0d91d4c2aa1d0a3b5c2ae2b254b1063afff06b392a6ee77->leave($__internal_01d7771504711873c0d91d4c2aa1d0a3b5c2ae2b254b1063afff06b392a6ee77_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
