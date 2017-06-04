<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b10c8eb9e31110c6b065ad95f6aa153e564717c0224a32315b5c7a6a4ef6bc91 extends Twig_Template
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
        $__internal_8fe56d25ad511c340b706b06757ba2fa41607a7f5beae5e7bb4da6e0bb81c1dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe56d25ad511c340b706b06757ba2fa41607a7f5beae5e7bb4da6e0bb81c1dd->enter($__internal_8fe56d25ad511c340b706b06757ba2fa41607a7f5beae5e7bb4da6e0bb81c1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0be3936a2bfb8168e3b6393195b9c416e4276dd8f4f8e284b093f5f053db8398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be3936a2bfb8168e3b6393195b9c416e4276dd8f4f8e284b093f5f053db8398->enter($__internal_0be3936a2bfb8168e3b6393195b9c416e4276dd8f4f8e284b093f5f053db8398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8fe56d25ad511c340b706b06757ba2fa41607a7f5beae5e7bb4da6e0bb81c1dd->leave($__internal_8fe56d25ad511c340b706b06757ba2fa41607a7f5beae5e7bb4da6e0bb81c1dd_prof);

        
        $__internal_0be3936a2bfb8168e3b6393195b9c416e4276dd8f4f8e284b093f5f053db8398->leave($__internal_0be3936a2bfb8168e3b6393195b9c416e4276dd8f4f8e284b093f5f053db8398_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
