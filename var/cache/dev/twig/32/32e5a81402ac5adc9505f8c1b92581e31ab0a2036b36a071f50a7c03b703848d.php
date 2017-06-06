<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_89aef1baac4476b8d628870b9ff52a0c089d968c805e0becc025dd42a07b4eda extends Twig_Template
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
        $__internal_2c10d47e302462244a57861567a979e0f711b7270db378720634b63316b6eec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c10d47e302462244a57861567a979e0f711b7270db378720634b63316b6eec7->enter($__internal_2c10d47e302462244a57861567a979e0f711b7270db378720634b63316b6eec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_46a7bb214a291035de89806e1c134c0204f2d14623389cac5a69795d286936a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a7bb214a291035de89806e1c134c0204f2d14623389cac5a69795d286936a4->enter($__internal_46a7bb214a291035de89806e1c134c0204f2d14623389cac5a69795d286936a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2c10d47e302462244a57861567a979e0f711b7270db378720634b63316b6eec7->leave($__internal_2c10d47e302462244a57861567a979e0f711b7270db378720634b63316b6eec7_prof);

        
        $__internal_46a7bb214a291035de89806e1c134c0204f2d14623389cac5a69795d286936a4->leave($__internal_46a7bb214a291035de89806e1c134c0204f2d14623389cac5a69795d286936a4_prof);

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
