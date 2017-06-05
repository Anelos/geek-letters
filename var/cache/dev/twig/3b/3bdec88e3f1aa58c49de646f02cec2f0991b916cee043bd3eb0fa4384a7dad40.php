<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_16e14a11d0f8a84b70becf01d0e3311ff764b036cd8f8cc3c5bdf4aa28db82be extends Twig_Template
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
        $__internal_030cb6c39b809bc379e8f722e94447b24b354eeae1bd9bd921c6824a37571120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030cb6c39b809bc379e8f722e94447b24b354eeae1bd9bd921c6824a37571120->enter($__internal_030cb6c39b809bc379e8f722e94447b24b354eeae1bd9bd921c6824a37571120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c7f7682bce9a718a38085e034f102328790986c845969ff87722e25b12c73b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f7682bce9a718a38085e034f102328790986c845969ff87722e25b12c73b4d->enter($__internal_c7f7682bce9a718a38085e034f102328790986c845969ff87722e25b12c73b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_030cb6c39b809bc379e8f722e94447b24b354eeae1bd9bd921c6824a37571120->leave($__internal_030cb6c39b809bc379e8f722e94447b24b354eeae1bd9bd921c6824a37571120_prof);

        
        $__internal_c7f7682bce9a718a38085e034f102328790986c845969ff87722e25b12c73b4d->leave($__internal_c7f7682bce9a718a38085e034f102328790986c845969ff87722e25b12c73b4d_prof);

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
