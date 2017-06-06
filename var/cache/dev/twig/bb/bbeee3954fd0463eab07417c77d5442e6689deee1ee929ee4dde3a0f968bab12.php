<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_03789141b5d321e62281b3f5729bdf686ca6ead3448d1369ffcbffd2027caf73 extends Twig_Template
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
        $__internal_43269490e84212a36371fd20618e471704e08beca47f7f86892210394bb31e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43269490e84212a36371fd20618e471704e08beca47f7f86892210394bb31e97->enter($__internal_43269490e84212a36371fd20618e471704e08beca47f7f86892210394bb31e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9e1b6a6191c6e5b3678915b428b46a561601eaebc06f6690cd7a9ea2a97e7e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1b6a6191c6e5b3678915b428b46a561601eaebc06f6690cd7a9ea2a97e7e73->enter($__internal_9e1b6a6191c6e5b3678915b428b46a561601eaebc06f6690cd7a9ea2a97e7e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_43269490e84212a36371fd20618e471704e08beca47f7f86892210394bb31e97->leave($__internal_43269490e84212a36371fd20618e471704e08beca47f7f86892210394bb31e97_prof);

        
        $__internal_9e1b6a6191c6e5b3678915b428b46a561601eaebc06f6690cd7a9ea2a97e7e73->leave($__internal_9e1b6a6191c6e5b3678915b428b46a561601eaebc06f6690cd7a9ea2a97e7e73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
