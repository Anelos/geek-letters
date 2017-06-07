<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_25d910e19e17873ec1dc5745a7d604fd6e5d31f476f12bae616aa10f71843cce extends Twig_Template
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
        $__internal_2a2497af2754c2f65d26504df5af4c272169e0416b51411f1d7373f3114d93a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2497af2754c2f65d26504df5af4c272169e0416b51411f1d7373f3114d93a9->enter($__internal_2a2497af2754c2f65d26504df5af4c272169e0416b51411f1d7373f3114d93a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_3f9e8c4c60a771729a59a6a3ed4ec75b0786172bc28904263ebef7e04c9429e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9e8c4c60a771729a59a6a3ed4ec75b0786172bc28904263ebef7e04c9429e7->enter($__internal_3f9e8c4c60a771729a59a6a3ed4ec75b0786172bc28904263ebef7e04c9429e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2a2497af2754c2f65d26504df5af4c272169e0416b51411f1d7373f3114d93a9->leave($__internal_2a2497af2754c2f65d26504df5af4c272169e0416b51411f1d7373f3114d93a9_prof);

        
        $__internal_3f9e8c4c60a771729a59a6a3ed4ec75b0786172bc28904263ebef7e04c9429e7->leave($__internal_3f9e8c4c60a771729a59a6a3ed4ec75b0786172bc28904263ebef7e04c9429e7_prof);

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
