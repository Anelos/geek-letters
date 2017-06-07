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
        $__internal_dbab75970b0f64d0d7cf13dd005edb09de858e30f7f9389ea92a945ab6c0eb4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbab75970b0f64d0d7cf13dd005edb09de858e30f7f9389ea92a945ab6c0eb4e->enter($__internal_dbab75970b0f64d0d7cf13dd005edb09de858e30f7f9389ea92a945ab6c0eb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_0ffce986c2a3d605d03a87a6d185d06b1518bec56c419e7a9b26ec3573dad90e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ffce986c2a3d605d03a87a6d185d06b1518bec56c419e7a9b26ec3573dad90e->enter($__internal_0ffce986c2a3d605d03a87a6d185d06b1518bec56c419e7a9b26ec3573dad90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_dbab75970b0f64d0d7cf13dd005edb09de858e30f7f9389ea92a945ab6c0eb4e->leave($__internal_dbab75970b0f64d0d7cf13dd005edb09de858e30f7f9389ea92a945ab6c0eb4e_prof);

        
        $__internal_0ffce986c2a3d605d03a87a6d185d06b1518bec56c419e7a9b26ec3573dad90e->leave($__internal_0ffce986c2a3d605d03a87a6d185d06b1518bec56c419e7a9b26ec3573dad90e_prof);

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
