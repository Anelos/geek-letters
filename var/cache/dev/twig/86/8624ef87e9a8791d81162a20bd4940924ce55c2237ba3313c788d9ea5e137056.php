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
        $__internal_12fab12f8f9ae44aba3b8052d9fd4c926629e61d391038e5e4a870540d221983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12fab12f8f9ae44aba3b8052d9fd4c926629e61d391038e5e4a870540d221983->enter($__internal_12fab12f8f9ae44aba3b8052d9fd4c926629e61d391038e5e4a870540d221983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b1bfff5be20e5ded9f6b024f8732c82bddb2cecc8c744dc31281bbb90dcd6dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bfff5be20e5ded9f6b024f8732c82bddb2cecc8c744dc31281bbb90dcd6dbe->enter($__internal_b1bfff5be20e5ded9f6b024f8732c82bddb2cecc8c744dc31281bbb90dcd6dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_12fab12f8f9ae44aba3b8052d9fd4c926629e61d391038e5e4a870540d221983->leave($__internal_12fab12f8f9ae44aba3b8052d9fd4c926629e61d391038e5e4a870540d221983_prof);

        
        $__internal_b1bfff5be20e5ded9f6b024f8732c82bddb2cecc8c744dc31281bbb90dcd6dbe->leave($__internal_b1bfff5be20e5ded9f6b024f8732c82bddb2cecc8c744dc31281bbb90dcd6dbe_prof);

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
