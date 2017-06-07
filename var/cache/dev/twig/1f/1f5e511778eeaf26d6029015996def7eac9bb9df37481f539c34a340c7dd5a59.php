<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0206da4ac9636aae310e1bd4be489ceb6640f527a88430c0518f159dd7616669 extends Twig_Template
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
        $__internal_c0b7b64761b4cfaa949bbad72bc2de2ceb25eb39b30d7bf462d2a56361ff7f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b7b64761b4cfaa949bbad72bc2de2ceb25eb39b30d7bf462d2a56361ff7f64->enter($__internal_c0b7b64761b4cfaa949bbad72bc2de2ceb25eb39b30d7bf462d2a56361ff7f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_312a7b284a33729119246975457d00adadd43a8a8dbf5c277640af82c7260510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312a7b284a33729119246975457d00adadd43a8a8dbf5c277640af82c7260510->enter($__internal_312a7b284a33729119246975457d00adadd43a8a8dbf5c277640af82c7260510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c0b7b64761b4cfaa949bbad72bc2de2ceb25eb39b30d7bf462d2a56361ff7f64->leave($__internal_c0b7b64761b4cfaa949bbad72bc2de2ceb25eb39b30d7bf462d2a56361ff7f64_prof);

        
        $__internal_312a7b284a33729119246975457d00adadd43a8a8dbf5c277640af82c7260510->leave($__internal_312a7b284a33729119246975457d00adadd43a8a8dbf5c277640af82c7260510_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
