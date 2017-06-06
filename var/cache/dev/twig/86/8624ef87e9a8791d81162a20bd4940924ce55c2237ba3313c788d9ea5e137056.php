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
        $__internal_4caac1a08f4035f740fa78d1b35f24895193a67d530d484fee3d441654f708bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4caac1a08f4035f740fa78d1b35f24895193a67d530d484fee3d441654f708bf->enter($__internal_4caac1a08f4035f740fa78d1b35f24895193a67d530d484fee3d441654f708bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c0611addfdc50d5cd78020dfa8c57dfe7631339382301689fd1bcae4dd50bb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0611addfdc50d5cd78020dfa8c57dfe7631339382301689fd1bcae4dd50bb9a->enter($__internal_c0611addfdc50d5cd78020dfa8c57dfe7631339382301689fd1bcae4dd50bb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4caac1a08f4035f740fa78d1b35f24895193a67d530d484fee3d441654f708bf->leave($__internal_4caac1a08f4035f740fa78d1b35f24895193a67d530d484fee3d441654f708bf_prof);

        
        $__internal_c0611addfdc50d5cd78020dfa8c57dfe7631339382301689fd1bcae4dd50bb9a->leave($__internal_c0611addfdc50d5cd78020dfa8c57dfe7631339382301689fd1bcae4dd50bb9a_prof);

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
