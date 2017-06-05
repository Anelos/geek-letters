<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6909ce34889d36f5497efa784355797c838047e872b1842c05e1e3c6fbd9addf extends Twig_Template
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
        $__internal_df2e04d4c2e17659b7064adb9e49ffbb4be7f81a09974fa1b4d52d8f74fa3440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2e04d4c2e17659b7064adb9e49ffbb4be7f81a09974fa1b4d52d8f74fa3440->enter($__internal_df2e04d4c2e17659b7064adb9e49ffbb4be7f81a09974fa1b4d52d8f74fa3440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_303789141cc72d2f846d2b361350190e4f74cef9ecca536aead82e0759609e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303789141cc72d2f846d2b361350190e4f74cef9ecca536aead82e0759609e4a->enter($__internal_303789141cc72d2f846d2b361350190e4f74cef9ecca536aead82e0759609e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_df2e04d4c2e17659b7064adb9e49ffbb4be7f81a09974fa1b4d52d8f74fa3440->leave($__internal_df2e04d4c2e17659b7064adb9e49ffbb4be7f81a09974fa1b4d52d8f74fa3440_prof);

        
        $__internal_303789141cc72d2f846d2b361350190e4f74cef9ecca536aead82e0759609e4a->leave($__internal_303789141cc72d2f846d2b361350190e4f74cef9ecca536aead82e0759609e4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
