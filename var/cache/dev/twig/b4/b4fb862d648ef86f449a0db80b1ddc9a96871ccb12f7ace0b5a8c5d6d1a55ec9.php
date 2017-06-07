<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ce3d28e251e59ffe0ba9c65e8ed01b5994c3128ed7488d8642dbbd81360c4fa5 extends Twig_Template
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
        $__internal_7f3ceaaf4e39509577345d53883516a54851dcf2cd24c3bbeadba88b3c7ef5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3ceaaf4e39509577345d53883516a54851dcf2cd24c3bbeadba88b3c7ef5a1->enter($__internal_7f3ceaaf4e39509577345d53883516a54851dcf2cd24c3bbeadba88b3c7ef5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_065b2301fbdf169aee8fd3bfc26143643dab2e36761b12a93bc3647686e50f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065b2301fbdf169aee8fd3bfc26143643dab2e36761b12a93bc3647686e50f15->enter($__internal_065b2301fbdf169aee8fd3bfc26143643dab2e36761b12a93bc3647686e50f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7f3ceaaf4e39509577345d53883516a54851dcf2cd24c3bbeadba88b3c7ef5a1->leave($__internal_7f3ceaaf4e39509577345d53883516a54851dcf2cd24c3bbeadba88b3c7ef5a1_prof);

        
        $__internal_065b2301fbdf169aee8fd3bfc26143643dab2e36761b12a93bc3647686e50f15->leave($__internal_065b2301fbdf169aee8fd3bfc26143643dab2e36761b12a93bc3647686e50f15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
