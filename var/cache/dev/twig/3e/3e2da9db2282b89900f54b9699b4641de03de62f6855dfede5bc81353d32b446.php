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
        $__internal_50d4c25cf94d5a67460128444c79be6a92a9c964d0931b699e5073b5e167e223 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d4c25cf94d5a67460128444c79be6a92a9c964d0931b699e5073b5e167e223->enter($__internal_50d4c25cf94d5a67460128444c79be6a92a9c964d0931b699e5073b5e167e223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_15228763bc163e17811d58471a039426a501cd5c262090f7c153584d024b838f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15228763bc163e17811d58471a039426a501cd5c262090f7c153584d024b838f->enter($__internal_15228763bc163e17811d58471a039426a501cd5c262090f7c153584d024b838f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_50d4c25cf94d5a67460128444c79be6a92a9c964d0931b699e5073b5e167e223->leave($__internal_50d4c25cf94d5a67460128444c79be6a92a9c964d0931b699e5073b5e167e223_prof);

        
        $__internal_15228763bc163e17811d58471a039426a501cd5c262090f7c153584d024b838f->leave($__internal_15228763bc163e17811d58471a039426a501cd5c262090f7c153584d024b838f_prof);

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
