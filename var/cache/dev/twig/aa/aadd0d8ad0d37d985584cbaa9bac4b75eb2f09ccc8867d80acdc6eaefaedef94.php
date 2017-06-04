<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_e01c3422ae3c0ba560b090ab5cc3c4a6b5a5e9be71c78060ebee1b16ff338a14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc8b944e9fd254c0ca1cea2d4414bfab8744d8c1736149df2cc1bacf9e66bbbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8b944e9fd254c0ca1cea2d4414bfab8744d8c1736149df2cc1bacf9e66bbbf->enter($__internal_cc8b944e9fd254c0ca1cea2d4414bfab8744d8c1736149df2cc1bacf9e66bbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_5e689072f27bad63f51714bd18d47aa04c6a9c1c4a4fabb43720dc039120a09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e689072f27bad63f51714bd18d47aa04c6a9c1c4a4fabb43720dc039120a09c->enter($__internal_5e689072f27bad63f51714bd18d47aa04c6a9c1c4a4fabb43720dc039120a09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_cc8b944e9fd254c0ca1cea2d4414bfab8744d8c1736149df2cc1bacf9e66bbbf->leave($__internal_cc8b944e9fd254c0ca1cea2d4414bfab8744d8c1736149df2cc1bacf9e66bbbf_prof);

        
        $__internal_5e689072f27bad63f51714bd18d47aa04c6a9c1c4a4fabb43720dc039120a09c->leave($__internal_5e689072f27bad63f51714bd18d47aa04c6a9c1c4a4fabb43720dc039120a09c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
