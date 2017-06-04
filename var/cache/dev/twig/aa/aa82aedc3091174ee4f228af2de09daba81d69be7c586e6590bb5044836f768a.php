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
        $__internal_cdd80ee626af198cb61a66a6b7325cdfc7bdf1fea3cf556942aaf018cf480de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd80ee626af198cb61a66a6b7325cdfc7bdf1fea3cf556942aaf018cf480de3->enter($__internal_cdd80ee626af198cb61a66a6b7325cdfc7bdf1fea3cf556942aaf018cf480de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_dde3678bf8811c606e4d5477e78886d21404dbdb9dc4782699d21d0f1182d215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde3678bf8811c606e4d5477e78886d21404dbdb9dc4782699d21d0f1182d215->enter($__internal_dde3678bf8811c606e4d5477e78886d21404dbdb9dc4782699d21d0f1182d215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cdd80ee626af198cb61a66a6b7325cdfc7bdf1fea3cf556942aaf018cf480de3->leave($__internal_cdd80ee626af198cb61a66a6b7325cdfc7bdf1fea3cf556942aaf018cf480de3_prof);

        
        $__internal_dde3678bf8811c606e4d5477e78886d21404dbdb9dc4782699d21d0f1182d215->leave($__internal_dde3678bf8811c606e4d5477e78886d21404dbdb9dc4782699d21d0f1182d215_prof);

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
