<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9a900afe18a78fde827a3fb9dee3cbf171d0c7e33ec340c5555699543cda5044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cf5e5300d445f214ed0c5273e71fa50906f2649ad1aa8e34ad71c60b555a1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf5e5300d445f214ed0c5273e71fa50906f2649ad1aa8e34ad71c60b555a1ce->enter($__internal_4cf5e5300d445f214ed0c5273e71fa50906f2649ad1aa8e34ad71c60b555a1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f7d5035f4a3229aadf47191ba5f995c74d5eab2d8a34cc01c8478054d0dff711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d5035f4a3229aadf47191ba5f995c74d5eab2d8a34cc01c8478054d0dff711->enter($__internal_f7d5035f4a3229aadf47191ba5f995c74d5eab2d8a34cc01c8478054d0dff711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4cf5e5300d445f214ed0c5273e71fa50906f2649ad1aa8e34ad71c60b555a1ce->leave($__internal_4cf5e5300d445f214ed0c5273e71fa50906f2649ad1aa8e34ad71c60b555a1ce_prof);

        
        $__internal_f7d5035f4a3229aadf47191ba5f995c74d5eab2d8a34cc01c8478054d0dff711->leave($__internal_f7d5035f4a3229aadf47191ba5f995c74d5eab2d8a34cc01c8478054d0dff711_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2e2593f5a32e3e43bdb5a12924da8975a46ef70c7435e9709423d93001f2f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e2593f5a32e3e43bdb5a12924da8975a46ef70c7435e9709423d93001f2f51->enter($__internal_c2e2593f5a32e3e43bdb5a12924da8975a46ef70c7435e9709423d93001f2f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0340e8ac2ede454c3347f7b93920ae20914e21ae8b387e11156c2c38a70e25c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0340e8ac2ede454c3347f7b93920ae20914e21ae8b387e11156c2c38a70e25c4->enter($__internal_0340e8ac2ede454c3347f7b93920ae20914e21ae8b387e11156c2c38a70e25c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0340e8ac2ede454c3347f7b93920ae20914e21ae8b387e11156c2c38a70e25c4->leave($__internal_0340e8ac2ede454c3347f7b93920ae20914e21ae8b387e11156c2c38a70e25c4_prof);

        
        $__internal_c2e2593f5a32e3e43bdb5a12924da8975a46ef70c7435e9709423d93001f2f51->leave($__internal_c2e2593f5a32e3e43bdb5a12924da8975a46ef70c7435e9709423d93001f2f51_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
