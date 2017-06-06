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
        $__internal_b8701ef7e0d36a0da4ea1c041d1a3fc8b13d795706be18743e7a325f97868bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8701ef7e0d36a0da4ea1c041d1a3fc8b13d795706be18743e7a325f97868bf3->enter($__internal_b8701ef7e0d36a0da4ea1c041d1a3fc8b13d795706be18743e7a325f97868bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_cb879a109d9515be0537adebaf7d11276d0cfff78df37fc16578f4c23246a428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb879a109d9515be0537adebaf7d11276d0cfff78df37fc16578f4c23246a428->enter($__internal_cb879a109d9515be0537adebaf7d11276d0cfff78df37fc16578f4c23246a428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b8701ef7e0d36a0da4ea1c041d1a3fc8b13d795706be18743e7a325f97868bf3->leave($__internal_b8701ef7e0d36a0da4ea1c041d1a3fc8b13d795706be18743e7a325f97868bf3_prof);

        
        $__internal_cb879a109d9515be0537adebaf7d11276d0cfff78df37fc16578f4c23246a428->leave($__internal_cb879a109d9515be0537adebaf7d11276d0cfff78df37fc16578f4c23246a428_prof);

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
