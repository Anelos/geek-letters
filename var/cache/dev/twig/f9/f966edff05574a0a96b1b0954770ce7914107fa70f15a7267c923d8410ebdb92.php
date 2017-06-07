<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_4c9e9d73b1f6deaffbb6c9dbf5382f61183e74d4e2d1ec7afbfb2417c04331a6 extends Twig_Template
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
        $__internal_b84379eba194695a190b2a9edc5f0ec696b6f59611895714f499ec607e012f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84379eba194695a190b2a9edc5f0ec696b6f59611895714f499ec607e012f50->enter($__internal_b84379eba194695a190b2a9edc5f0ec696b6f59611895714f499ec607e012f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_58525ebb8363350007da88d2e4cd35fbacf7d6ef8b684bcbce279a60b9a06002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58525ebb8363350007da88d2e4cd35fbacf7d6ef8b684bcbce279a60b9a06002->enter($__internal_58525ebb8363350007da88d2e4cd35fbacf7d6ef8b684bcbce279a60b9a06002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b84379eba194695a190b2a9edc5f0ec696b6f59611895714f499ec607e012f50->leave($__internal_b84379eba194695a190b2a9edc5f0ec696b6f59611895714f499ec607e012f50_prof);

        
        $__internal_58525ebb8363350007da88d2e4cd35fbacf7d6ef8b684bcbce279a60b9a06002->leave($__internal_58525ebb8363350007da88d2e4cd35fbacf7d6ef8b684bcbce279a60b9a06002_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
