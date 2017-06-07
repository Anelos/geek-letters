<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9ffc51f0f34b52a91901e9d8e26fc6004dc5528e1385829b076c53ab0cf96703 extends Twig_Template
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
        $__internal_e9cb58e2ef0cd72351f69c3b098f8059ead431edc9647d11a55b396cb06bac11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9cb58e2ef0cd72351f69c3b098f8059ead431edc9647d11a55b396cb06bac11->enter($__internal_e9cb58e2ef0cd72351f69c3b098f8059ead431edc9647d11a55b396cb06bac11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f694df81fea359017a0c8113beeb81b4f41ab2ba2230d6efcb9e2105c5ff4b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f694df81fea359017a0c8113beeb81b4f41ab2ba2230d6efcb9e2105c5ff4b29->enter($__internal_f694df81fea359017a0c8113beeb81b4f41ab2ba2230d6efcb9e2105c5ff4b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e9cb58e2ef0cd72351f69c3b098f8059ead431edc9647d11a55b396cb06bac11->leave($__internal_e9cb58e2ef0cd72351f69c3b098f8059ead431edc9647d11a55b396cb06bac11_prof);

        
        $__internal_f694df81fea359017a0c8113beeb81b4f41ab2ba2230d6efcb9e2105c5ff4b29->leave($__internal_f694df81fea359017a0c8113beeb81b4f41ab2ba2230d6efcb9e2105c5ff4b29_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
