<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b34e98d48378b542633992a822fd6314fbef03e7e7921cc8e0b20d858fc17e61 extends Twig_Template
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
        $__internal_9546580dc850b357c4fb7d22bbf0cc404b870f169a5ee7992c8aefb3c166d87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9546580dc850b357c4fb7d22bbf0cc404b870f169a5ee7992c8aefb3c166d87d->enter($__internal_9546580dc850b357c4fb7d22bbf0cc404b870f169a5ee7992c8aefb3c166d87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1b0582f8701aae169bfb20448bfc4b364672af972bcc2c38c049416402a09dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0582f8701aae169bfb20448bfc4b364672af972bcc2c38c049416402a09dec->enter($__internal_1b0582f8701aae169bfb20448bfc4b364672af972bcc2c38c049416402a09dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9546580dc850b357c4fb7d22bbf0cc404b870f169a5ee7992c8aefb3c166d87d->leave($__internal_9546580dc850b357c4fb7d22bbf0cc404b870f169a5ee7992c8aefb3c166d87d_prof);

        
        $__internal_1b0582f8701aae169bfb20448bfc4b364672af972bcc2c38c049416402a09dec->leave($__internal_1b0582f8701aae169bfb20448bfc4b364672af972bcc2c38c049416402a09dec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
