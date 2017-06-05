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
        $__internal_da8825164f7ff61e0452d64542d8c0916b519ce8cc3e629ef23f41cc155bfe27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8825164f7ff61e0452d64542d8c0916b519ce8cc3e629ef23f41cc155bfe27->enter($__internal_da8825164f7ff61e0452d64542d8c0916b519ce8cc3e629ef23f41cc155bfe27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_ef57536646a14c45db334934e5fe2898deba9eccbdebf5f0534b9e01d68727d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef57536646a14c45db334934e5fe2898deba9eccbdebf5f0534b9e01d68727d5->enter($__internal_ef57536646a14c45db334934e5fe2898deba9eccbdebf5f0534b9e01d68727d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_da8825164f7ff61e0452d64542d8c0916b519ce8cc3e629ef23f41cc155bfe27->leave($__internal_da8825164f7ff61e0452d64542d8c0916b519ce8cc3e629ef23f41cc155bfe27_prof);

        
        $__internal_ef57536646a14c45db334934e5fe2898deba9eccbdebf5f0534b9e01d68727d5->leave($__internal_ef57536646a14c45db334934e5fe2898deba9eccbdebf5f0534b9e01d68727d5_prof);

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
