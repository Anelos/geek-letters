<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ba14358f309de1706ba694b67c64ad1eb521b6d56619b31394b8f912440b09b8 extends Twig_Template
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
        $__internal_b7bbedf2053ddac99c0a1fc763f8d0cc537c3892dbd5f15e12daa544d46fc842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7bbedf2053ddac99c0a1fc763f8d0cc537c3892dbd5f15e12daa544d46fc842->enter($__internal_b7bbedf2053ddac99c0a1fc763f8d0cc537c3892dbd5f15e12daa544d46fc842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_1bff35cd033c1936829a2d8f127b591632bc7b305a90334825ad3314dbff0605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bff35cd033c1936829a2d8f127b591632bc7b305a90334825ad3314dbff0605->enter($__internal_1bff35cd033c1936829a2d8f127b591632bc7b305a90334825ad3314dbff0605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b7bbedf2053ddac99c0a1fc763f8d0cc537c3892dbd5f15e12daa544d46fc842->leave($__internal_b7bbedf2053ddac99c0a1fc763f8d0cc537c3892dbd5f15e12daa544d46fc842_prof);

        
        $__internal_1bff35cd033c1936829a2d8f127b591632bc7b305a90334825ad3314dbff0605->leave($__internal_1bff35cd033c1936829a2d8f127b591632bc7b305a90334825ad3314dbff0605_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
