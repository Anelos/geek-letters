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
        $__internal_c17adebd570289a97a1b81a629dd4d66618f6e9b54a6bf32445cb63aff92e51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17adebd570289a97a1b81a629dd4d66618f6e9b54a6bf32445cb63aff92e51a->enter($__internal_c17adebd570289a97a1b81a629dd4d66618f6e9b54a6bf32445cb63aff92e51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_89e6910a9b07fa1b917d1eae6fdb5e2ab0a7a73a21c79cc582a98dfbfc3b6b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e6910a9b07fa1b917d1eae6fdb5e2ab0a7a73a21c79cc582a98dfbfc3b6b65->enter($__internal_89e6910a9b07fa1b917d1eae6fdb5e2ab0a7a73a21c79cc582a98dfbfc3b6b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_c17adebd570289a97a1b81a629dd4d66618f6e9b54a6bf32445cb63aff92e51a->leave($__internal_c17adebd570289a97a1b81a629dd4d66618f6e9b54a6bf32445cb63aff92e51a_prof);

        
        $__internal_89e6910a9b07fa1b917d1eae6fdb5e2ab0a7a73a21c79cc582a98dfbfc3b6b65->leave($__internal_89e6910a9b07fa1b917d1eae6fdb5e2ab0a7a73a21c79cc582a98dfbfc3b6b65_prof);

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
