<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5d543250eacc2b53cfffb1b18d5f76bfeac77ddb03c8bf0446b6c4dfc718819e extends Twig_Template
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
        $__internal_9557daad34e30f579c49ad0576a0ee218ebbf9ba7d50d0873bf8de01c94bbbe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9557daad34e30f579c49ad0576a0ee218ebbf9ba7d50d0873bf8de01c94bbbe2->enter($__internal_9557daad34e30f579c49ad0576a0ee218ebbf9ba7d50d0873bf8de01c94bbbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_36837ad2ce8248fe1102559234dbdfc9bb9bd3f0c56bca208a6f131807bf7bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36837ad2ce8248fe1102559234dbdfc9bb9bd3f0c56bca208a6f131807bf7bf4->enter($__internal_36837ad2ce8248fe1102559234dbdfc9bb9bd3f0c56bca208a6f131807bf7bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9557daad34e30f579c49ad0576a0ee218ebbf9ba7d50d0873bf8de01c94bbbe2->leave($__internal_9557daad34e30f579c49ad0576a0ee218ebbf9ba7d50d0873bf8de01c94bbbe2_prof);

        
        $__internal_36837ad2ce8248fe1102559234dbdfc9bb9bd3f0c56bca208a6f131807bf7bf4->leave($__internal_36837ad2ce8248fe1102559234dbdfc9bb9bd3f0c56bca208a6f131807bf7bf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
