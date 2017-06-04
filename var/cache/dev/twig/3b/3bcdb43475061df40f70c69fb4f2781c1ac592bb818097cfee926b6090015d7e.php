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
        $__internal_60f664df8ad825fa60f739564a8889da4a35aea182a2697db219f99438d7259d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f664df8ad825fa60f739564a8889da4a35aea182a2697db219f99438d7259d->enter($__internal_60f664df8ad825fa60f739564a8889da4a35aea182a2697db219f99438d7259d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_db91da09ef39189884909fc3bbb33febfbf0f9027aeb3066dff1fb561e5cfdf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db91da09ef39189884909fc3bbb33febfbf0f9027aeb3066dff1fb561e5cfdf2->enter($__internal_db91da09ef39189884909fc3bbb33febfbf0f9027aeb3066dff1fb561e5cfdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_60f664df8ad825fa60f739564a8889da4a35aea182a2697db219f99438d7259d->leave($__internal_60f664df8ad825fa60f739564a8889da4a35aea182a2697db219f99438d7259d_prof);

        
        $__internal_db91da09ef39189884909fc3bbb33febfbf0f9027aeb3066dff1fb561e5cfdf2->leave($__internal_db91da09ef39189884909fc3bbb33febfbf0f9027aeb3066dff1fb561e5cfdf2_prof);

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
