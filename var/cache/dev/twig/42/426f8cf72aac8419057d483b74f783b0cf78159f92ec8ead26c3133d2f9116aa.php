<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_24382559c1f76f59e4a45286b0d11f8da953a160900c8ce209b2690935130a8c extends Twig_Template
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
        $__internal_8b935ea2de7dbfe7d7d10f827155ad2970a1ab064cb6718be47523d3fb3ca51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b935ea2de7dbfe7d7d10f827155ad2970a1ab064cb6718be47523d3fb3ca51b->enter($__internal_8b935ea2de7dbfe7d7d10f827155ad2970a1ab064cb6718be47523d3fb3ca51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_bb0d88f5855390a31d9b3a3bc84822cfab3dc2a3593a2c4bf3b1ceea32b4e1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0d88f5855390a31d9b3a3bc84822cfab3dc2a3593a2c4bf3b1ceea32b4e1b5->enter($__internal_bb0d88f5855390a31d9b3a3bc84822cfab3dc2a3593a2c4bf3b1ceea32b4e1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8b935ea2de7dbfe7d7d10f827155ad2970a1ab064cb6718be47523d3fb3ca51b->leave($__internal_8b935ea2de7dbfe7d7d10f827155ad2970a1ab064cb6718be47523d3fb3ca51b_prof);

        
        $__internal_bb0d88f5855390a31d9b3a3bc84822cfab3dc2a3593a2c4bf3b1ceea32b4e1b5->leave($__internal_bb0d88f5855390a31d9b3a3bc84822cfab3dc2a3593a2c4bf3b1ceea32b4e1b5_prof);

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
