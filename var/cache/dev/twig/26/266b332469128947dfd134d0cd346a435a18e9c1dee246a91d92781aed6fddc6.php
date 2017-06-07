<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a75316e6ba5ad96fea7a220117fd23ba53ca9d0edd3dbd1962c94a59f463eddc extends Twig_Template
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
        $__internal_572d9eaa7235abc5883e1d5fbe992698356ae02c9f5c29c48799ea25584d36d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_572d9eaa7235abc5883e1d5fbe992698356ae02c9f5c29c48799ea25584d36d0->enter($__internal_572d9eaa7235abc5883e1d5fbe992698356ae02c9f5c29c48799ea25584d36d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f10a2d5c06ae425763c6596cd6eee3081036d206ca7f23269f0140718138e508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10a2d5c06ae425763c6596cd6eee3081036d206ca7f23269f0140718138e508->enter($__internal_f10a2d5c06ae425763c6596cd6eee3081036d206ca7f23269f0140718138e508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_572d9eaa7235abc5883e1d5fbe992698356ae02c9f5c29c48799ea25584d36d0->leave($__internal_572d9eaa7235abc5883e1d5fbe992698356ae02c9f5c29c48799ea25584d36d0_prof);

        
        $__internal_f10a2d5c06ae425763c6596cd6eee3081036d206ca7f23269f0140718138e508->leave($__internal_f10a2d5c06ae425763c6596cd6eee3081036d206ca7f23269f0140718138e508_prof);

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
