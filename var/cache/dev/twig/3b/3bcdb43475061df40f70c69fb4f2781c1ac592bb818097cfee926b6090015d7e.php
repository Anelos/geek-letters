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
        $__internal_2fd3767fc3f153fd29b20790d5cae5e25d6eaafceb125b5f0d5bc4dd8e54eafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd3767fc3f153fd29b20790d5cae5e25d6eaafceb125b5f0d5bc4dd8e54eafe->enter($__internal_2fd3767fc3f153fd29b20790d5cae5e25d6eaafceb125b5f0d5bc4dd8e54eafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c203780bf184725023a68f4129a0967c650a01a6d43e7a9dfb71a7573aecd64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c203780bf184725023a68f4129a0967c650a01a6d43e7a9dfb71a7573aecd64a->enter($__internal_c203780bf184725023a68f4129a0967c650a01a6d43e7a9dfb71a7573aecd64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_2fd3767fc3f153fd29b20790d5cae5e25d6eaafceb125b5f0d5bc4dd8e54eafe->leave($__internal_2fd3767fc3f153fd29b20790d5cae5e25d6eaafceb125b5f0d5bc4dd8e54eafe_prof);

        
        $__internal_c203780bf184725023a68f4129a0967c650a01a6d43e7a9dfb71a7573aecd64a->leave($__internal_c203780bf184725023a68f4129a0967c650a01a6d43e7a9dfb71a7573aecd64a_prof);

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
