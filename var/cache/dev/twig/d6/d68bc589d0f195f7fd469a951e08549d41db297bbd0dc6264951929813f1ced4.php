<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d966ca8c0a21ab24f0bdfd08af9fbbbf2f8a7075176123a8370bea2bc2a8cb6e extends Twig_Template
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
        $__internal_614bea799f9055ad4bac4299f58020c84ad4ef863d30a118c1ce11cbc32ef372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614bea799f9055ad4bac4299f58020c84ad4ef863d30a118c1ce11cbc32ef372->enter($__internal_614bea799f9055ad4bac4299f58020c84ad4ef863d30a118c1ce11cbc32ef372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_53e0bca62f4b56ab42ebc610952d5e0725e59770c288061ac2007bb476d17630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53e0bca62f4b56ab42ebc610952d5e0725e59770c288061ac2007bb476d17630->enter($__internal_53e0bca62f4b56ab42ebc610952d5e0725e59770c288061ac2007bb476d17630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_614bea799f9055ad4bac4299f58020c84ad4ef863d30a118c1ce11cbc32ef372->leave($__internal_614bea799f9055ad4bac4299f58020c84ad4ef863d30a118c1ce11cbc32ef372_prof);

        
        $__internal_53e0bca62f4b56ab42ebc610952d5e0725e59770c288061ac2007bb476d17630->leave($__internal_53e0bca62f4b56ab42ebc610952d5e0725e59770c288061ac2007bb476d17630_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}