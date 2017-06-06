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
        $__internal_48195e938da1560789872dcd9679eee2dc3e1d00fec01a654372d9d1c1426dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48195e938da1560789872dcd9679eee2dc3e1d00fec01a654372d9d1c1426dbb->enter($__internal_48195e938da1560789872dcd9679eee2dc3e1d00fec01a654372d9d1c1426dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5222a5af8f87ac7b282d6fdde6c17981838cca88907f807583f21fe4cf0f8b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5222a5af8f87ac7b282d6fdde6c17981838cca88907f807583f21fe4cf0f8b8a->enter($__internal_5222a5af8f87ac7b282d6fdde6c17981838cca88907f807583f21fe4cf0f8b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_48195e938da1560789872dcd9679eee2dc3e1d00fec01a654372d9d1c1426dbb->leave($__internal_48195e938da1560789872dcd9679eee2dc3e1d00fec01a654372d9d1c1426dbb_prof);

        
        $__internal_5222a5af8f87ac7b282d6fdde6c17981838cca88907f807583f21fe4cf0f8b8a->leave($__internal_5222a5af8f87ac7b282d6fdde6c17981838cca88907f807583f21fe4cf0f8b8a_prof);

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
