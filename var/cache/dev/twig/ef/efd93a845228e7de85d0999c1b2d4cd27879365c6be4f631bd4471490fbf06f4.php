<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_323ad53bd54fa04de8aa6c91c76b4c60a92d5b38da53befacd2b4ae640cd4600 extends Twig_Template
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
        $__internal_465d13cad74ce29cccb56c2d8e2bf2f14ce082e3b08d762bf666cdc2fd3f25af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_465d13cad74ce29cccb56c2d8e2bf2f14ce082e3b08d762bf666cdc2fd3f25af->enter($__internal_465d13cad74ce29cccb56c2d8e2bf2f14ce082e3b08d762bf666cdc2fd3f25af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_37e3032edce117023694e74d8d8b05abf3ab611de5144e9369c8245ce63683d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e3032edce117023694e74d8d8b05abf3ab611de5144e9369c8245ce63683d0->enter($__internal_37e3032edce117023694e74d8d8b05abf3ab611de5144e9369c8245ce63683d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_465d13cad74ce29cccb56c2d8e2bf2f14ce082e3b08d762bf666cdc2fd3f25af->leave($__internal_465d13cad74ce29cccb56c2d8e2bf2f14ce082e3b08d762bf666cdc2fd3f25af_prof);

        
        $__internal_37e3032edce117023694e74d8d8b05abf3ab611de5144e9369c8245ce63683d0->leave($__internal_37e3032edce117023694e74d8d8b05abf3ab611de5144e9369c8245ce63683d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
