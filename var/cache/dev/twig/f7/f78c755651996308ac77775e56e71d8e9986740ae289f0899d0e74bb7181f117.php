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
        $__internal_89d5d1de7bd3c0735c64ed648c0fb892659f6e0a62d0e61af622b35859a91997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89d5d1de7bd3c0735c64ed648c0fb892659f6e0a62d0e61af622b35859a91997->enter($__internal_89d5d1de7bd3c0735c64ed648c0fb892659f6e0a62d0e61af622b35859a91997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_50ffc469a5653392405c319baa7e679812d48f5b68abe8c1c686ec882ead03e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ffc469a5653392405c319baa7e679812d48f5b68abe8c1c686ec882ead03e6->enter($__internal_50ffc469a5653392405c319baa7e679812d48f5b68abe8c1c686ec882ead03e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_89d5d1de7bd3c0735c64ed648c0fb892659f6e0a62d0e61af622b35859a91997->leave($__internal_89d5d1de7bd3c0735c64ed648c0fb892659f6e0a62d0e61af622b35859a91997_prof);

        
        $__internal_50ffc469a5653392405c319baa7e679812d48f5b68abe8c1c686ec882ead03e6->leave($__internal_50ffc469a5653392405c319baa7e679812d48f5b68abe8c1c686ec882ead03e6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d762a2235f0f59792c6440c54c709a6434b078d6691142928243cf31d0bedbdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d762a2235f0f59792c6440c54c709a6434b078d6691142928243cf31d0bedbdb->enter($__internal_d762a2235f0f59792c6440c54c709a6434b078d6691142928243cf31d0bedbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b33ea0881f191ef83dcb8157e7477a2a376f54bca29ffb7cf60a52ddfe5efec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b33ea0881f191ef83dcb8157e7477a2a376f54bca29ffb7cf60a52ddfe5efec->enter($__internal_6b33ea0881f191ef83dcb8157e7477a2a376f54bca29ffb7cf60a52ddfe5efec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6b33ea0881f191ef83dcb8157e7477a2a376f54bca29ffb7cf60a52ddfe5efec->leave($__internal_6b33ea0881f191ef83dcb8157e7477a2a376f54bca29ffb7cf60a52ddfe5efec_prof);

        
        $__internal_d762a2235f0f59792c6440c54c709a6434b078d6691142928243cf31d0bedbdb->leave($__internal_d762a2235f0f59792c6440c54c709a6434b078d6691142928243cf31d0bedbdb_prof);

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
