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
        $__internal_da7e7e5beea705d08b43c0ec7f7b2ef2704cee001dcb6c82f905a8cf2fc0c486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7e7e5beea705d08b43c0ec7f7b2ef2704cee001dcb6c82f905a8cf2fc0c486->enter($__internal_da7e7e5beea705d08b43c0ec7f7b2ef2704cee001dcb6c82f905a8cf2fc0c486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_47e58e25fb632b56d35d2d83e31d8c78df92b5dff8d1bc21d7ad17bdf32d4d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e58e25fb632b56d35d2d83e31d8c78df92b5dff8d1bc21d7ad17bdf32d4d06->enter($__internal_47e58e25fb632b56d35d2d83e31d8c78df92b5dff8d1bc21d7ad17bdf32d4d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_da7e7e5beea705d08b43c0ec7f7b2ef2704cee001dcb6c82f905a8cf2fc0c486->leave($__internal_da7e7e5beea705d08b43c0ec7f7b2ef2704cee001dcb6c82f905a8cf2fc0c486_prof);

        
        $__internal_47e58e25fb632b56d35d2d83e31d8c78df92b5dff8d1bc21d7ad17bdf32d4d06->leave($__internal_47e58e25fb632b56d35d2d83e31d8c78df92b5dff8d1bc21d7ad17bdf32d4d06_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc89c2bd8c67c8927196aa42985f807ea3e5c87b4270e640cd4dbe781f1f74f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc89c2bd8c67c8927196aa42985f807ea3e5c87b4270e640cd4dbe781f1f74f3->enter($__internal_dc89c2bd8c67c8927196aa42985f807ea3e5c87b4270e640cd4dbe781f1f74f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d579450cc0d178bd17d85055b615f55fcef62f418e384e4c11aa6e364d2d2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d579450cc0d178bd17d85055b615f55fcef62f418e384e4c11aa6e364d2d2b7->enter($__internal_1d579450cc0d178bd17d85055b615f55fcef62f418e384e4c11aa6e364d2d2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1d579450cc0d178bd17d85055b615f55fcef62f418e384e4c11aa6e364d2d2b7->leave($__internal_1d579450cc0d178bd17d85055b615f55fcef62f418e384e4c11aa6e364d2d2b7_prof);

        
        $__internal_dc89c2bd8c67c8927196aa42985f807ea3e5c87b4270e640cd4dbe781f1f74f3->leave($__internal_dc89c2bd8c67c8927196aa42985f807ea3e5c87b4270e640cd4dbe781f1f74f3_prof);

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
