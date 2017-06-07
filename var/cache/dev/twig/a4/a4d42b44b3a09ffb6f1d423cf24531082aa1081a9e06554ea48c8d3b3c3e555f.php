<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f5cc59e9210b7365b49c0cd386d265e201aa6bb04b55b37c87a1f1a85e70a4ae extends Twig_Template
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
        $__internal_711b37ad5e7390c75c6f990cc38e1d9b1f6db43bb2c83a208003011073c374c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711b37ad5e7390c75c6f990cc38e1d9b1f6db43bb2c83a208003011073c374c5->enter($__internal_711b37ad5e7390c75c6f990cc38e1d9b1f6db43bb2c83a208003011073c374c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ee26bade204ec1a863d8f5771c0dcbe562118c83a0c64bc05d93bcf6e7741d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee26bade204ec1a863d8f5771c0dcbe562118c83a0c64bc05d93bcf6e7741d13->enter($__internal_ee26bade204ec1a863d8f5771c0dcbe562118c83a0c64bc05d93bcf6e7741d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_711b37ad5e7390c75c6f990cc38e1d9b1f6db43bb2c83a208003011073c374c5->leave($__internal_711b37ad5e7390c75c6f990cc38e1d9b1f6db43bb2c83a208003011073c374c5_prof);

        
        $__internal_ee26bade204ec1a863d8f5771c0dcbe562118c83a0c64bc05d93bcf6e7741d13->leave($__internal_ee26bade204ec1a863d8f5771c0dcbe562118c83a0c64bc05d93bcf6e7741d13_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
