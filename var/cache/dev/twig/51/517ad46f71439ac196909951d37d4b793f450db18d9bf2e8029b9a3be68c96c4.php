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
        $__internal_210dca5e73ab3270bbe505fa062c9e0d15c7f4b1916f1f870121ab64d03bf56b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210dca5e73ab3270bbe505fa062c9e0d15c7f4b1916f1f870121ab64d03bf56b->enter($__internal_210dca5e73ab3270bbe505fa062c9e0d15c7f4b1916f1f870121ab64d03bf56b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_9b3ca514888d6f2abcdda12d895b362a714a8651e6c392dc86410d242032ed69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3ca514888d6f2abcdda12d895b362a714a8651e6c392dc86410d242032ed69->enter($__internal_9b3ca514888d6f2abcdda12d895b362a714a8651e6c392dc86410d242032ed69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_210dca5e73ab3270bbe505fa062c9e0d15c7f4b1916f1f870121ab64d03bf56b->leave($__internal_210dca5e73ab3270bbe505fa062c9e0d15c7f4b1916f1f870121ab64d03bf56b_prof);

        
        $__internal_9b3ca514888d6f2abcdda12d895b362a714a8651e6c392dc86410d242032ed69->leave($__internal_9b3ca514888d6f2abcdda12d895b362a714a8651e6c392dc86410d242032ed69_prof);

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
