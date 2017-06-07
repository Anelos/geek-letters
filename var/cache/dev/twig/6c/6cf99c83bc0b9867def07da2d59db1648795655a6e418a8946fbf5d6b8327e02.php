<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_17c6a317c5e964419b8235b3679cc9b8778819bc0391d50ce7daa2e7005ca838 extends Twig_Template
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
        $__internal_91a684cd854e7100171ab4002db3fb1757a9e9cf83d88a3e793b6f6f337f4280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a684cd854e7100171ab4002db3fb1757a9e9cf83d88a3e793b6f6f337f4280->enter($__internal_91a684cd854e7100171ab4002db3fb1757a9e9cf83d88a3e793b6f6f337f4280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_bda0bf3f35e26346c46027f9523122acdd3874c8852183fed57cd304a5fc2bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda0bf3f35e26346c46027f9523122acdd3874c8852183fed57cd304a5fc2bb3->enter($__internal_bda0bf3f35e26346c46027f9523122acdd3874c8852183fed57cd304a5fc2bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_91a684cd854e7100171ab4002db3fb1757a9e9cf83d88a3e793b6f6f337f4280->leave($__internal_91a684cd854e7100171ab4002db3fb1757a9e9cf83d88a3e793b6f6f337f4280_prof);

        
        $__internal_bda0bf3f35e26346c46027f9523122acdd3874c8852183fed57cd304a5fc2bb3->leave($__internal_bda0bf3f35e26346c46027f9523122acdd3874c8852183fed57cd304a5fc2bb3_prof);

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
