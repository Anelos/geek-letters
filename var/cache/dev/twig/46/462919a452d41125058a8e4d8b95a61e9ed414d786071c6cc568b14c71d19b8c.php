<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_44f56e9b7453b083c08b24d1ba234fc28e31357949abced9eda6a2008bb9c827 extends Twig_Template
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
        $__internal_b562e294abe87754d6688a2ae181760172e238b523c8d4e30197f2bd959945dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b562e294abe87754d6688a2ae181760172e238b523c8d4e30197f2bd959945dd->enter($__internal_b562e294abe87754d6688a2ae181760172e238b523c8d4e30197f2bd959945dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e273438c2ed092b24a6fd0caf2e6d60e1021b300de2ab8c41d1444dc71da615c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e273438c2ed092b24a6fd0caf2e6d60e1021b300de2ab8c41d1444dc71da615c->enter($__internal_e273438c2ed092b24a6fd0caf2e6d60e1021b300de2ab8c41d1444dc71da615c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b562e294abe87754d6688a2ae181760172e238b523c8d4e30197f2bd959945dd->leave($__internal_b562e294abe87754d6688a2ae181760172e238b523c8d4e30197f2bd959945dd_prof);

        
        $__internal_e273438c2ed092b24a6fd0caf2e6d60e1021b300de2ab8c41d1444dc71da615c->leave($__internal_e273438c2ed092b24a6fd0caf2e6d60e1021b300de2ab8c41d1444dc71da615c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
