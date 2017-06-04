<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_3ccc0aa371d6cc2aea38ebc23bf93c538629e4a3b4424f61b4036b98cf5866d4 extends Twig_Template
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
        $__internal_95b063b6b6c8ade9d18f581a5cba9d0aff948566f4fef19a58aa0e782653a520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b063b6b6c8ade9d18f581a5cba9d0aff948566f4fef19a58aa0e782653a520->enter($__internal_95b063b6b6c8ade9d18f581a5cba9d0aff948566f4fef19a58aa0e782653a520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_1882769761c3757259a5d2e669d69569c00098c6d0e3e5066129c89a8d1cd3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1882769761c3757259a5d2e669d69569c00098c6d0e3e5066129c89a8d1cd3ee->enter($__internal_1882769761c3757259a5d2e669d69569c00098c6d0e3e5066129c89a8d1cd3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_95b063b6b6c8ade9d18f581a5cba9d0aff948566f4fef19a58aa0e782653a520->leave($__internal_95b063b6b6c8ade9d18f581a5cba9d0aff948566f4fef19a58aa0e782653a520_prof);

        
        $__internal_1882769761c3757259a5d2e669d69569c00098c6d0e3e5066129c89a8d1cd3ee->leave($__internal_1882769761c3757259a5d2e669d69569c00098c6d0e3e5066129c89a8d1cd3ee_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
