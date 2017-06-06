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
        $__internal_8717600a6ff149de910dda5349a797bd35b1f3bba93f3defabedc5eb50edc376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8717600a6ff149de910dda5349a797bd35b1f3bba93f3defabedc5eb50edc376->enter($__internal_8717600a6ff149de910dda5349a797bd35b1f3bba93f3defabedc5eb50edc376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_55480dcfb9b5d858c3135381590e51ae6bbeb94fb11e9557af90781e84d1bd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55480dcfb9b5d858c3135381590e51ae6bbeb94fb11e9557af90781e84d1bd9f->enter($__internal_55480dcfb9b5d858c3135381590e51ae6bbeb94fb11e9557af90781e84d1bd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8717600a6ff149de910dda5349a797bd35b1f3bba93f3defabedc5eb50edc376->leave($__internal_8717600a6ff149de910dda5349a797bd35b1f3bba93f3defabedc5eb50edc376_prof);

        
        $__internal_55480dcfb9b5d858c3135381590e51ae6bbeb94fb11e9557af90781e84d1bd9f->leave($__internal_55480dcfb9b5d858c3135381590e51ae6bbeb94fb11e9557af90781e84d1bd9f_prof);

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
