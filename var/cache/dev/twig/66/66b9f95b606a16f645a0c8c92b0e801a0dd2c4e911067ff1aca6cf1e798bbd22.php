<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9e15a9668c05c50ab5787a85852dc5465a5b03e94edb535056814ebfb8576af5 extends Twig_Template
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
        $__internal_2714e9d843a8a7bce08fdced10a4bf9e3af309b280d9a42afc1885d7991522bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2714e9d843a8a7bce08fdced10a4bf9e3af309b280d9a42afc1885d7991522bb->enter($__internal_2714e9d843a8a7bce08fdced10a4bf9e3af309b280d9a42afc1885d7991522bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_7232e56a7447862528321f039a2eba79d8a884c7b8c911d42459d2f09383bc08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7232e56a7447862528321f039a2eba79d8a884c7b8c911d42459d2f09383bc08->enter($__internal_7232e56a7447862528321f039a2eba79d8a884c7b8c911d42459d2f09383bc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2714e9d843a8a7bce08fdced10a4bf9e3af309b280d9a42afc1885d7991522bb->leave($__internal_2714e9d843a8a7bce08fdced10a4bf9e3af309b280d9a42afc1885d7991522bb_prof);

        
        $__internal_7232e56a7447862528321f039a2eba79d8a884c7b8c911d42459d2f09383bc08->leave($__internal_7232e56a7447862528321f039a2eba79d8a884c7b8c911d42459d2f09383bc08_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
