<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_b3271d29682b2ae14e556716415a1d8a2c5b06e73d397cae69ce573a2b3eca05 extends Twig_Template
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
        $__internal_54815e698935f48da539135b8d401140de1561c3a87e6161361b217ccf4bc30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54815e698935f48da539135b8d401140de1561c3a87e6161361b217ccf4bc30d->enter($__internal_54815e698935f48da539135b8d401140de1561c3a87e6161361b217ccf4bc30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9e4d37cd1b04b625c697e2aa57af53649d51a70a187e16eca43c6b8a26e7a146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4d37cd1b04b625c697e2aa57af53649d51a70a187e16eca43c6b8a26e7a146->enter($__internal_9e4d37cd1b04b625c697e2aa57af53649d51a70a187e16eca43c6b8a26e7a146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54815e698935f48da539135b8d401140de1561c3a87e6161361b217ccf4bc30d->leave($__internal_54815e698935f48da539135b8d401140de1561c3a87e6161361b217ccf4bc30d_prof);

        
        $__internal_9e4d37cd1b04b625c697e2aa57af53649d51a70a187e16eca43c6b8a26e7a146->leave($__internal_9e4d37cd1b04b625c697e2aa57af53649d51a70a187e16eca43c6b8a26e7a146_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e390453f193af0c1119b850ce5ff0c7270162c259ccf2cdb3c85fa4298479c47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e390453f193af0c1119b850ce5ff0c7270162c259ccf2cdb3c85fa4298479c47->enter($__internal_e390453f193af0c1119b850ce5ff0c7270162c259ccf2cdb3c85fa4298479c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4490065602ef06bc3b8107b8aa039c0e78f530da69f0833f873f33fa781adeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4490065602ef06bc3b8107b8aa039c0e78f530da69f0833f873f33fa781adeba->enter($__internal_4490065602ef06bc3b8107b8aa039c0e78f530da69f0833f873f33fa781adeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4490065602ef06bc3b8107b8aa039c0e78f530da69f0833f873f33fa781adeba->leave($__internal_4490065602ef06bc3b8107b8aa039c0e78f530da69f0833f873f33fa781adeba_prof);

        
        $__internal_e390453f193af0c1119b850ce5ff0c7270162c259ccf2cdb3c85fa4298479c47->leave($__internal_e390453f193af0c1119b850ce5ff0c7270162c259ccf2cdb3c85fa4298479c47_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_017f0b7c0fddf78b65e65513918617a45c9c736489fd159b04b239bfbd3caafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017f0b7c0fddf78b65e65513918617a45c9c736489fd159b04b239bfbd3caafe->enter($__internal_017f0b7c0fddf78b65e65513918617a45c9c736489fd159b04b239bfbd3caafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac24a387d7320dc3f6d164bbcd872cdfd97b79ab4c2370e290d6c7c8afb5acec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac24a387d7320dc3f6d164bbcd872cdfd97b79ab4c2370e290d6c7c8afb5acec->enter($__internal_ac24a387d7320dc3f6d164bbcd872cdfd97b79ab4c2370e290d6c7c8afb5acec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ac24a387d7320dc3f6d164bbcd872cdfd97b79ab4c2370e290d6c7c8afb5acec->leave($__internal_ac24a387d7320dc3f6d164bbcd872cdfd97b79ab4c2370e290d6c7c8afb5acec_prof);

        
        $__internal_017f0b7c0fddf78b65e65513918617a45c9c736489fd159b04b239bfbd3caafe->leave($__internal_017f0b7c0fddf78b65e65513918617a45c9c736489fd159b04b239bfbd3caafe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_815c70bd4933453251804fddea1be42b54140df378663309ac56f8d53e08e313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815c70bd4933453251804fddea1be42b54140df378663309ac56f8d53e08e313->enter($__internal_815c70bd4933453251804fddea1be42b54140df378663309ac56f8d53e08e313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c53fa33534efc5fc874b5fa9ccaf12660410affe56ca11229fdb267f509006dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53fa33534efc5fc874b5fa9ccaf12660410affe56ca11229fdb267f509006dd->enter($__internal_c53fa33534efc5fc874b5fa9ccaf12660410affe56ca11229fdb267f509006dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c53fa33534efc5fc874b5fa9ccaf12660410affe56ca11229fdb267f509006dd->leave($__internal_c53fa33534efc5fc874b5fa9ccaf12660410affe56ca11229fdb267f509006dd_prof);

        
        $__internal_815c70bd4933453251804fddea1be42b54140df378663309ac56f8d53e08e313->leave($__internal_815c70bd4933453251804fddea1be42b54140df378663309ac56f8d53e08e313_prof);

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
