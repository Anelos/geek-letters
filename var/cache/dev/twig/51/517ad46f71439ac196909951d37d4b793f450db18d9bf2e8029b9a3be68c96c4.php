<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_037ec6684b487935a30ac402a35abd54ec292c6d1a945e8eeae748e503794cb4 extends Twig_Template
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
        $__internal_4e426084a0923287a109badf69bd0f7f437591479c0bc5518b529192d3b7fcf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e426084a0923287a109badf69bd0f7f437591479c0bc5518b529192d3b7fcf9->enter($__internal_4e426084a0923287a109badf69bd0f7f437591479c0bc5518b529192d3b7fcf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_d56256da25e9f68925da4947fbb26e4ab4bcd94b9cf0fb756d4046de2fe097d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56256da25e9f68925da4947fbb26e4ab4bcd94b9cf0fb756d4046de2fe097d9->enter($__internal_d56256da25e9f68925da4947fbb26e4ab4bcd94b9cf0fb756d4046de2fe097d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4e426084a0923287a109badf69bd0f7f437591479c0bc5518b529192d3b7fcf9->leave($__internal_4e426084a0923287a109badf69bd0f7f437591479c0bc5518b529192d3b7fcf9_prof);

        
        $__internal_d56256da25e9f68925da4947fbb26e4ab4bcd94b9cf0fb756d4046de2fe097d9->leave($__internal_d56256da25e9f68925da4947fbb26e4ab4bcd94b9cf0fb756d4046de2fe097d9_prof);

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
