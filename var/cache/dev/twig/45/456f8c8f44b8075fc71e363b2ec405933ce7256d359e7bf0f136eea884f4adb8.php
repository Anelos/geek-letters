<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_3ccc0aa371d6cc2aea38ebc23bf93c538629e4a3b4424f61b4036b98cf5866d4 extends Twig_Template
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
        $__internal_f7990a0b39f629164a7c36e598385b28e5465cef2472cdf9912142bda3d7bdbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7990a0b39f629164a7c36e598385b28e5465cef2472cdf9912142bda3d7bdbc->enter($__internal_f7990a0b39f629164a7c36e598385b28e5465cef2472cdf9912142bda3d7bdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_e53c7dba38c849e82796cd2ce57b17035f47d35d6ab57ef867013f60b4358045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53c7dba38c849e82796cd2ce57b17035f47d35d6ab57ef867013f60b4358045->enter($__internal_e53c7dba38c849e82796cd2ce57b17035f47d35d6ab57ef867013f60b4358045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_f7990a0b39f629164a7c36e598385b28e5465cef2472cdf9912142bda3d7bdbc->leave($__internal_f7990a0b39f629164a7c36e598385b28e5465cef2472cdf9912142bda3d7bdbc_prof);

        
        $__internal_e53c7dba38c849e82796cd2ce57b17035f47d35d6ab57ef867013f60b4358045->leave($__internal_e53c7dba38c849e82796cd2ce57b17035f47d35d6ab57ef867013f60b4358045_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
