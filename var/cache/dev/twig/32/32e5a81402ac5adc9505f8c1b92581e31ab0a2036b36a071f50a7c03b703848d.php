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
        $__internal_bf88f7ab78b7fbb8ef0015461217d0c123c6d1a8efcfa42031690652a6b6730c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf88f7ab78b7fbb8ef0015461217d0c123c6d1a8efcfa42031690652a6b6730c->enter($__internal_bf88f7ab78b7fbb8ef0015461217d0c123c6d1a8efcfa42031690652a6b6730c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6ccf0677f937c1f6fe370290190753cca52c74076957e874282664ec973f41e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccf0677f937c1f6fe370290190753cca52c74076957e874282664ec973f41e0->enter($__internal_6ccf0677f937c1f6fe370290190753cca52c74076957e874282664ec973f41e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bf88f7ab78b7fbb8ef0015461217d0c123c6d1a8efcfa42031690652a6b6730c->leave($__internal_bf88f7ab78b7fbb8ef0015461217d0c123c6d1a8efcfa42031690652a6b6730c_prof);

        
        $__internal_6ccf0677f937c1f6fe370290190753cca52c74076957e874282664ec973f41e0->leave($__internal_6ccf0677f937c1f6fe370290190753cca52c74076957e874282664ec973f41e0_prof);

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
