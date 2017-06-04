<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_dcf4ba281951a7a6ed18dfca31a8a5757c01d74a2c1b24e56f88765f57bfc8fb extends Twig_Template
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
        $__internal_6e449f56dc61e699fd6960239156d206931227b1a9ca1cdce1f4dc8a2d23fddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e449f56dc61e699fd6960239156d206931227b1a9ca1cdce1f4dc8a2d23fddb->enter($__internal_6e449f56dc61e699fd6960239156d206931227b1a9ca1cdce1f4dc8a2d23fddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_65fb7d9e663a84dd3aa4c828949e2302fffae520e83dfed1bc8a59a901e55564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fb7d9e663a84dd3aa4c828949e2302fffae520e83dfed1bc8a59a901e55564->enter($__internal_65fb7d9e663a84dd3aa4c828949e2302fffae520e83dfed1bc8a59a901e55564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6e449f56dc61e699fd6960239156d206931227b1a9ca1cdce1f4dc8a2d23fddb->leave($__internal_6e449f56dc61e699fd6960239156d206931227b1a9ca1cdce1f4dc8a2d23fddb_prof);

        
        $__internal_65fb7d9e663a84dd3aa4c828949e2302fffae520e83dfed1bc8a59a901e55564->leave($__internal_65fb7d9e663a84dd3aa4c828949e2302fffae520e83dfed1bc8a59a901e55564_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
