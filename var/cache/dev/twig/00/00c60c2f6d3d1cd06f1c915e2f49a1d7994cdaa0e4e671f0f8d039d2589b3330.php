<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_47c7507aeb2465e37e7d1ee5b3b37dec36d08ac6f22bc0b0c0949683e3959e95 extends Twig_Template
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
        $__internal_ab21f0e61f9a6c522d60a6ecfc2cd99a28616cb17ff1d44073107e4f02491746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab21f0e61f9a6c522d60a6ecfc2cd99a28616cb17ff1d44073107e4f02491746->enter($__internal_ab21f0e61f9a6c522d60a6ecfc2cd99a28616cb17ff1d44073107e4f02491746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_82a1a534df81e2334cb8cdb346f22eb8dd33654a5dd08cd27d02e5583e9fcab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a1a534df81e2334cb8cdb346f22eb8dd33654a5dd08cd27d02e5583e9fcab2->enter($__internal_82a1a534df81e2334cb8cdb346f22eb8dd33654a5dd08cd27d02e5583e9fcab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_ab21f0e61f9a6c522d60a6ecfc2cd99a28616cb17ff1d44073107e4f02491746->leave($__internal_ab21f0e61f9a6c522d60a6ecfc2cd99a28616cb17ff1d44073107e4f02491746_prof);

        
        $__internal_82a1a534df81e2334cb8cdb346f22eb8dd33654a5dd08cd27d02e5583e9fcab2->leave($__internal_82a1a534df81e2334cb8cdb346f22eb8dd33654a5dd08cd27d02e5583e9fcab2_prof);

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
