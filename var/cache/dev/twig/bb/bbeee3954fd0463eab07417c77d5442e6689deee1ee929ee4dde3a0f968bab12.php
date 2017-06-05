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
        $__internal_c256b365e98b298017e7ffb42e5e56f0c8eac67bdfa188ea77f8b2def50cc621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c256b365e98b298017e7ffb42e5e56f0c8eac67bdfa188ea77f8b2def50cc621->enter($__internal_c256b365e98b298017e7ffb42e5e56f0c8eac67bdfa188ea77f8b2def50cc621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_cbe5ee6b2d7263956e884150118f47f16655382992535ff17ae1ff66f4f3ea70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe5ee6b2d7263956e884150118f47f16655382992535ff17ae1ff66f4f3ea70->enter($__internal_cbe5ee6b2d7263956e884150118f47f16655382992535ff17ae1ff66f4f3ea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c256b365e98b298017e7ffb42e5e56f0c8eac67bdfa188ea77f8b2def50cc621->leave($__internal_c256b365e98b298017e7ffb42e5e56f0c8eac67bdfa188ea77f8b2def50cc621_prof);

        
        $__internal_cbe5ee6b2d7263956e884150118f47f16655382992535ff17ae1ff66f4f3ea70->leave($__internal_cbe5ee6b2d7263956e884150118f47f16655382992535ff17ae1ff66f4f3ea70_prof);

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
