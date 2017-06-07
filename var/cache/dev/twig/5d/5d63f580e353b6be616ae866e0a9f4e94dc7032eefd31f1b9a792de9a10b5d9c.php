<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d7d6b9247c00a1314bb259e259b8ce43d26819d42d08cd5c476647f9ccaa787c extends Twig_Template
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
        $__internal_4016ab13c2c01d6067c2c83f67808245d46515e03d81a3fdcaef406bab8e3a30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4016ab13c2c01d6067c2c83f67808245d46515e03d81a3fdcaef406bab8e3a30->enter($__internal_4016ab13c2c01d6067c2c83f67808245d46515e03d81a3fdcaef406bab8e3a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7d5ede3aae14591af952bdfca9d0aa8d20a27281a03cfbdb24e7d26c2b54c611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5ede3aae14591af952bdfca9d0aa8d20a27281a03cfbdb24e7d26c2b54c611->enter($__internal_7d5ede3aae14591af952bdfca9d0aa8d20a27281a03cfbdb24e7d26c2b54c611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4016ab13c2c01d6067c2c83f67808245d46515e03d81a3fdcaef406bab8e3a30->leave($__internal_4016ab13c2c01d6067c2c83f67808245d46515e03d81a3fdcaef406bab8e3a30_prof);

        
        $__internal_7d5ede3aae14591af952bdfca9d0aa8d20a27281a03cfbdb24e7d26c2b54c611->leave($__internal_7d5ede3aae14591af952bdfca9d0aa8d20a27281a03cfbdb24e7d26c2b54c611_prof);

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
