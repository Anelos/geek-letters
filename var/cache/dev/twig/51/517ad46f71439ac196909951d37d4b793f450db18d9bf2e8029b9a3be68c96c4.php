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
        $__internal_68d68f224cd1f42579af77a2b513c8f8e670a1d332ff90a4679c0f7205d85a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d68f224cd1f42579af77a2b513c8f8e670a1d332ff90a4679c0f7205d85a3b->enter($__internal_68d68f224cd1f42579af77a2b513c8f8e670a1d332ff90a4679c0f7205d85a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e11d061abe14651656e4edb058136aa965d03c0ff3170f21ec8a0963888256e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11d061abe14651656e4edb058136aa965d03c0ff3170f21ec8a0963888256e6->enter($__internal_e11d061abe14651656e4edb058136aa965d03c0ff3170f21ec8a0963888256e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_68d68f224cd1f42579af77a2b513c8f8e670a1d332ff90a4679c0f7205d85a3b->leave($__internal_68d68f224cd1f42579af77a2b513c8f8e670a1d332ff90a4679c0f7205d85a3b_prof);

        
        $__internal_e11d061abe14651656e4edb058136aa965d03c0ff3170f21ec8a0963888256e6->leave($__internal_e11d061abe14651656e4edb058136aa965d03c0ff3170f21ec8a0963888256e6_prof);

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
