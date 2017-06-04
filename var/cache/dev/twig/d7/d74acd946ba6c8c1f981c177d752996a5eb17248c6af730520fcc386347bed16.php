<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e88e954dd7d6516e205ead04a316ae53fbc519014a45cc0b0f4506a0cc59a2aa extends Twig_Template
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
        $__internal_52823cb5d1a0720005c0c6fb3e4d01ce2069b934e7466ccb69c3b369a02c444a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52823cb5d1a0720005c0c6fb3e4d01ce2069b934e7466ccb69c3b369a02c444a->enter($__internal_52823cb5d1a0720005c0c6fb3e4d01ce2069b934e7466ccb69c3b369a02c444a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_2b499520eb1833278e0ad1c4958d44e96df47eebbd3f001bb9ab751fb504b814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b499520eb1833278e0ad1c4958d44e96df47eebbd3f001bb9ab751fb504b814->enter($__internal_2b499520eb1833278e0ad1c4958d44e96df47eebbd3f001bb9ab751fb504b814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_52823cb5d1a0720005c0c6fb3e4d01ce2069b934e7466ccb69c3b369a02c444a->leave($__internal_52823cb5d1a0720005c0c6fb3e4d01ce2069b934e7466ccb69c3b369a02c444a_prof);

        
        $__internal_2b499520eb1833278e0ad1c4958d44e96df47eebbd3f001bb9ab751fb504b814->leave($__internal_2b499520eb1833278e0ad1c4958d44e96df47eebbd3f001bb9ab751fb504b814_prof);

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
