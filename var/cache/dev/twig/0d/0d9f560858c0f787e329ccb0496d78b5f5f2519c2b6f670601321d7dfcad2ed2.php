<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1d04a5289420dbd679e70ffcdd236c61635c5d7bad36eeca10eca926ed9c1428 extends Twig_Template
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
        $__internal_26fc6c78049206c129f3ba4d1f4b723977c706f5f839de6ce0b08fa4df630996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26fc6c78049206c129f3ba4d1f4b723977c706f5f839de6ce0b08fa4df630996->enter($__internal_26fc6c78049206c129f3ba4d1f4b723977c706f5f839de6ce0b08fa4df630996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5ff431d39ccd481fe8577591fd464a552013c06d0e5da7feb2a232f0376ad5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff431d39ccd481fe8577591fd464a552013c06d0e5da7feb2a232f0376ad5e4->enter($__internal_5ff431d39ccd481fe8577591fd464a552013c06d0e5da7feb2a232f0376ad5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_26fc6c78049206c129f3ba4d1f4b723977c706f5f839de6ce0b08fa4df630996->leave($__internal_26fc6c78049206c129f3ba4d1f4b723977c706f5f839de6ce0b08fa4df630996_prof);

        
        $__internal_5ff431d39ccd481fe8577591fd464a552013c06d0e5da7feb2a232f0376ad5e4->leave($__internal_5ff431d39ccd481fe8577591fd464a552013c06d0e5da7feb2a232f0376ad5e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
