<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3ac0214ec46107f0b126f49ffd673659a4e1716f62460a02456f7069b82113dd extends Twig_Template
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
        $__internal_268cc3313ba848a7572c782e28c697f413bd478c49255703639331616ad01ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268cc3313ba848a7572c782e28c697f413bd478c49255703639331616ad01ff0->enter($__internal_268cc3313ba848a7572c782e28c697f413bd478c49255703639331616ad01ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_259403be40cdc7d32cc16ed70bba9528658087fc9a537cfba3e88c61a6b19a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259403be40cdc7d32cc16ed70bba9528658087fc9a537cfba3e88c61a6b19a9e->enter($__internal_259403be40cdc7d32cc16ed70bba9528658087fc9a537cfba3e88c61a6b19a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_268cc3313ba848a7572c782e28c697f413bd478c49255703639331616ad01ff0->leave($__internal_268cc3313ba848a7572c782e28c697f413bd478c49255703639331616ad01ff0_prof);

        
        $__internal_259403be40cdc7d32cc16ed70bba9528658087fc9a537cfba3e88c61a6b19a9e->leave($__internal_259403be40cdc7d32cc16ed70bba9528658087fc9a537cfba3e88c61a6b19a9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
