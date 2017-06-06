<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_5af92b740e0ec1714a1851a1cffd48181045e459a74620768ea68ab70e946645 extends Twig_Template
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
        $__internal_e37b0c16b2eaf7c55b0648fc355a906876c162088ee9cdf04eeac793f031829d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37b0c16b2eaf7c55b0648fc355a906876c162088ee9cdf04eeac793f031829d->enter($__internal_e37b0c16b2eaf7c55b0648fc355a906876c162088ee9cdf04eeac793f031829d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_06943eda14275bd72a6a64b5469bc23745de2f39a081d6e27889d5209e2b36e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06943eda14275bd72a6a64b5469bc23745de2f39a081d6e27889d5209e2b36e9->enter($__internal_06943eda14275bd72a6a64b5469bc23745de2f39a081d6e27889d5209e2b36e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e37b0c16b2eaf7c55b0648fc355a906876c162088ee9cdf04eeac793f031829d->leave($__internal_e37b0c16b2eaf7c55b0648fc355a906876c162088ee9cdf04eeac793f031829d_prof);

        
        $__internal_06943eda14275bd72a6a64b5469bc23745de2f39a081d6e27889d5209e2b36e9->leave($__internal_06943eda14275bd72a6a64b5469bc23745de2f39a081d6e27889d5209e2b36e9_prof);

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
