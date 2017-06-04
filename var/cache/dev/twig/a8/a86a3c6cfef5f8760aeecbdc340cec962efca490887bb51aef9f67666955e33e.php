<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_db442ddfc7ac11dd72d1eac2cf55ccc2702f4097eb596b7c957d62404f512234 extends Twig_Template
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
        $__internal_02ee446403300942cd1af458abff2ba4dbf0006da88549b6e1e1f2f0b4c4f7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ee446403300942cd1af458abff2ba4dbf0006da88549b6e1e1f2f0b4c4f7e5->enter($__internal_02ee446403300942cd1af458abff2ba4dbf0006da88549b6e1e1f2f0b4c4f7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_0937f9c153db8b947e0641a7bf44340fd8b37a0c131fd7a6f0f7e2500764b2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0937f9c153db8b947e0641a7bf44340fd8b37a0c131fd7a6f0f7e2500764b2ef->enter($__internal_0937f9c153db8b947e0641a7bf44340fd8b37a0c131fd7a6f0f7e2500764b2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_02ee446403300942cd1af458abff2ba4dbf0006da88549b6e1e1f2f0b4c4f7e5->leave($__internal_02ee446403300942cd1af458abff2ba4dbf0006da88549b6e1e1f2f0b4c4f7e5_prof);

        
        $__internal_0937f9c153db8b947e0641a7bf44340fd8b37a0c131fd7a6f0f7e2500764b2ef->leave($__internal_0937f9c153db8b947e0641a7bf44340fd8b37a0c131fd7a6f0f7e2500764b2ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
