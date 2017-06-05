<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_75f38a066a39bc12a0b0d33bae5c534421edeea50acb0e19c8e4be71695d4cf2 extends Twig_Template
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
        $__internal_d7833ec6d86ffebf4626e1dc4ca560866f6ada36cd53644633d835832c6beff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7833ec6d86ffebf4626e1dc4ca560866f6ada36cd53644633d835832c6beff0->enter($__internal_d7833ec6d86ffebf4626e1dc4ca560866f6ada36cd53644633d835832c6beff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3fa33658911bf6ecdaeded686355ee15d7e8b1366f6874c4a2056f32c5535cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa33658911bf6ecdaeded686355ee15d7e8b1366f6874c4a2056f32c5535cea->enter($__internal_3fa33658911bf6ecdaeded686355ee15d7e8b1366f6874c4a2056f32c5535cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d7833ec6d86ffebf4626e1dc4ca560866f6ada36cd53644633d835832c6beff0->leave($__internal_d7833ec6d86ffebf4626e1dc4ca560866f6ada36cd53644633d835832c6beff0_prof);

        
        $__internal_3fa33658911bf6ecdaeded686355ee15d7e8b1366f6874c4a2056f32c5535cea->leave($__internal_3fa33658911bf6ecdaeded686355ee15d7e8b1366f6874c4a2056f32c5535cea_prof);

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
