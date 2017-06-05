<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f1c3b8d7b4206dc304375842bde4b64494a7c297e849b1d80c23c3769cb20796 extends Twig_Template
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
        $__internal_50e6e3135c623d380b49ac80c6cae819c4ab1f96d7d29a3f3dfbd3dd93bf7ab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e6e3135c623d380b49ac80c6cae819c4ab1f96d7d29a3f3dfbd3dd93bf7ab2->enter($__internal_50e6e3135c623d380b49ac80c6cae819c4ab1f96d7d29a3f3dfbd3dd93bf7ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ce1ff4250a67fa0e80d1b3b9a084f3a26973e62490fbc2fda324c8b889348f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1ff4250a67fa0e80d1b3b9a084f3a26973e62490fbc2fda324c8b889348f5a->enter($__internal_ce1ff4250a67fa0e80d1b3b9a084f3a26973e62490fbc2fda324c8b889348f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_50e6e3135c623d380b49ac80c6cae819c4ab1f96d7d29a3f3dfbd3dd93bf7ab2->leave($__internal_50e6e3135c623d380b49ac80c6cae819c4ab1f96d7d29a3f3dfbd3dd93bf7ab2_prof);

        
        $__internal_ce1ff4250a67fa0e80d1b3b9a084f3a26973e62490fbc2fda324c8b889348f5a->leave($__internal_ce1ff4250a67fa0e80d1b3b9a084f3a26973e62490fbc2fda324c8b889348f5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
