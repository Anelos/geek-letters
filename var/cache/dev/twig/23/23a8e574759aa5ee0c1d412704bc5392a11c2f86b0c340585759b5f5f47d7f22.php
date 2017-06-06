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
        $__internal_9135e02138d6b41678f1c5ebbb885e8ef9f541b3afe32f22e3eb8261982fd0bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9135e02138d6b41678f1c5ebbb885e8ef9f541b3afe32f22e3eb8261982fd0bd->enter($__internal_9135e02138d6b41678f1c5ebbb885e8ef9f541b3afe32f22e3eb8261982fd0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1ef3898e8f2ba773989fbffd9cdc4e7ff3ee792bac15f7970b7560844b7b2e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef3898e8f2ba773989fbffd9cdc4e7ff3ee792bac15f7970b7560844b7b2e95->enter($__internal_1ef3898e8f2ba773989fbffd9cdc4e7ff3ee792bac15f7970b7560844b7b2e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_9135e02138d6b41678f1c5ebbb885e8ef9f541b3afe32f22e3eb8261982fd0bd->leave($__internal_9135e02138d6b41678f1c5ebbb885e8ef9f541b3afe32f22e3eb8261982fd0bd_prof);

        
        $__internal_1ef3898e8f2ba773989fbffd9cdc4e7ff3ee792bac15f7970b7560844b7b2e95->leave($__internal_1ef3898e8f2ba773989fbffd9cdc4e7ff3ee792bac15f7970b7560844b7b2e95_prof);

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
