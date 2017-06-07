<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_a527a58017ed6d535800177886d330d5fd454aba00110d857bcced56c20b2be8 extends Twig_Template
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
        $__internal_b2e85a98385e1f74aac62534866cbce142042a4671b7088083b771571d401f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e85a98385e1f74aac62534866cbce142042a4671b7088083b771571d401f6a->enter($__internal_b2e85a98385e1f74aac62534866cbce142042a4671b7088083b771571d401f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_0ed12b889b48e4c3b258a12a4db8debb099051baa0c62ea226e2621b7e238158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed12b889b48e4c3b258a12a4db8debb099051baa0c62ea226e2621b7e238158->enter($__internal_0ed12b889b48e4c3b258a12a4db8debb099051baa0c62ea226e2621b7e238158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_b2e85a98385e1f74aac62534866cbce142042a4671b7088083b771571d401f6a->leave($__internal_b2e85a98385e1f74aac62534866cbce142042a4671b7088083b771571d401f6a_prof);

        
        $__internal_0ed12b889b48e4c3b258a12a4db8debb099051baa0c62ea226e2621b7e238158->leave($__internal_0ed12b889b48e4c3b258a12a4db8debb099051baa0c62ea226e2621b7e238158_prof);

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
