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
        $__internal_6636d22eca84d049b118bf12d8781ff78ff118fc6b36be3a5d74b5b5279c6101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6636d22eca84d049b118bf12d8781ff78ff118fc6b36be3a5d74b5b5279c6101->enter($__internal_6636d22eca84d049b118bf12d8781ff78ff118fc6b36be3a5d74b5b5279c6101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6f393c1349d69c328bc2213397f194bb8730dc2bb509a9dd36c28318797950f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f393c1349d69c328bc2213397f194bb8730dc2bb509a9dd36c28318797950f2->enter($__internal_6f393c1349d69c328bc2213397f194bb8730dc2bb509a9dd36c28318797950f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6636d22eca84d049b118bf12d8781ff78ff118fc6b36be3a5d74b5b5279c6101->leave($__internal_6636d22eca84d049b118bf12d8781ff78ff118fc6b36be3a5d74b5b5279c6101_prof);

        
        $__internal_6f393c1349d69c328bc2213397f194bb8730dc2bb509a9dd36c28318797950f2->leave($__internal_6f393c1349d69c328bc2213397f194bb8730dc2bb509a9dd36c28318797950f2_prof);

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
