<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_7283b652d7b0442a5345d625cdb536bfb20d3b1f0da274990ac84fa944ed41af extends Twig_Template
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
        $__internal_37daa169cff860d676dccda7a19764c50d6ff4b6f14804db7dce05d552d62bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37daa169cff860d676dccda7a19764c50d6ff4b6f14804db7dce05d552d62bb7->enter($__internal_37daa169cff860d676dccda7a19764c50d6ff4b6f14804db7dce05d552d62bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_bc3e8d095bfae6bb5bce62eb14ed1cc36b458eb8d865e2dd5bd170b53a08e684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3e8d095bfae6bb5bce62eb14ed1cc36b458eb8d865e2dd5bd170b53a08e684->enter($__internal_bc3e8d095bfae6bb5bce62eb14ed1cc36b458eb8d865e2dd5bd170b53a08e684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_37daa169cff860d676dccda7a19764c50d6ff4b6f14804db7dce05d552d62bb7->leave($__internal_37daa169cff860d676dccda7a19764c50d6ff4b6f14804db7dce05d552d62bb7_prof);

        
        $__internal_bc3e8d095bfae6bb5bce62eb14ed1cc36b458eb8d865e2dd5bd170b53a08e684->leave($__internal_bc3e8d095bfae6bb5bce62eb14ed1cc36b458eb8d865e2dd5bd170b53a08e684_prof);

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
