<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d42a885753eef68fac70a1c18904c318638e2ff97c1053200fb11523384fc1da extends Twig_Template
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
        $__internal_1b6207c1d7836ad03fbdb9e0f8cde724a855467a7a119ceea82d439b709f1e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6207c1d7836ad03fbdb9e0f8cde724a855467a7a119ceea82d439b709f1e3e->enter($__internal_1b6207c1d7836ad03fbdb9e0f8cde724a855467a7a119ceea82d439b709f1e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3640758e514ea6b59dcf74707549bdf9c430e83a519de9f992c95912fe14eabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3640758e514ea6b59dcf74707549bdf9c430e83a519de9f992c95912fe14eabb->enter($__internal_3640758e514ea6b59dcf74707549bdf9c430e83a519de9f992c95912fe14eabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1b6207c1d7836ad03fbdb9e0f8cde724a855467a7a119ceea82d439b709f1e3e->leave($__internal_1b6207c1d7836ad03fbdb9e0f8cde724a855467a7a119ceea82d439b709f1e3e_prof);

        
        $__internal_3640758e514ea6b59dcf74707549bdf9c430e83a519de9f992c95912fe14eabb->leave($__internal_3640758e514ea6b59dcf74707549bdf9c430e83a519de9f992c95912fe14eabb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4c10388fbdbb23322f3a6ed5423080c12c771458596cc335af7875f4fba0aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c10388fbdbb23322f3a6ed5423080c12c771458596cc335af7875f4fba0aac->enter($__internal_d4c10388fbdbb23322f3a6ed5423080c12c771458596cc335af7875f4fba0aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83a83cd6b8c205c6ec12db34a94f129823f4ddf932db818e3abe3405d9855279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a83cd6b8c205c6ec12db34a94f129823f4ddf932db818e3abe3405d9855279->enter($__internal_83a83cd6b8c205c6ec12db34a94f129823f4ddf932db818e3abe3405d9855279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_83a83cd6b8c205c6ec12db34a94f129823f4ddf932db818e3abe3405d9855279->leave($__internal_83a83cd6b8c205c6ec12db34a94f129823f4ddf932db818e3abe3405d9855279_prof);

        
        $__internal_d4c10388fbdbb23322f3a6ed5423080c12c771458596cc335af7875f4fba0aac->leave($__internal_d4c10388fbdbb23322f3a6ed5423080c12c771458596cc335af7875f4fba0aac_prof);

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
