<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_1c790945196a02375fc1abfb9e0e116e43f43f5ddbe3d29e36c6418fb286dc88 extends Twig_Template
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
        $__internal_6c2db75958010a2520962bbde639d75978e0151cd923ad1b339cd6469e5ed5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2db75958010a2520962bbde639d75978e0151cd923ad1b339cd6469e5ed5fb->enter($__internal_6c2db75958010a2520962bbde639d75978e0151cd923ad1b339cd6469e5ed5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_9e9a556447231fd135bd4aa3c7e1a293fbaf591b75b3415b10920531646a3a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9a556447231fd135bd4aa3c7e1a293fbaf591b75b3415b10920531646a3a0e->enter($__internal_9e9a556447231fd135bd4aa3c7e1a293fbaf591b75b3415b10920531646a3a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6c2db75958010a2520962bbde639d75978e0151cd923ad1b339cd6469e5ed5fb->leave($__internal_6c2db75958010a2520962bbde639d75978e0151cd923ad1b339cd6469e5ed5fb_prof);

        
        $__internal_9e9a556447231fd135bd4aa3c7e1a293fbaf591b75b3415b10920531646a3a0e->leave($__internal_9e9a556447231fd135bd4aa3c7e1a293fbaf591b75b3415b10920531646a3a0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
