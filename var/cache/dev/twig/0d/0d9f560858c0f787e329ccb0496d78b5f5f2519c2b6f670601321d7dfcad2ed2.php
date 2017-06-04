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
        $__internal_78b4f43ea57a49f65b6e833198c05b738502b29becd57aea5396db00bb82b0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b4f43ea57a49f65b6e833198c05b738502b29becd57aea5396db00bb82b0cc->enter($__internal_78b4f43ea57a49f65b6e833198c05b738502b29becd57aea5396db00bb82b0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_bc022fbb2d49788a7f812a0ab9779f0a194bdfcd2664c3cd5e18ff7768467a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc022fbb2d49788a7f812a0ab9779f0a194bdfcd2664c3cd5e18ff7768467a82->enter($__internal_bc022fbb2d49788a7f812a0ab9779f0a194bdfcd2664c3cd5e18ff7768467a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_78b4f43ea57a49f65b6e833198c05b738502b29becd57aea5396db00bb82b0cc->leave($__internal_78b4f43ea57a49f65b6e833198c05b738502b29becd57aea5396db00bb82b0cc_prof);

        
        $__internal_bc022fbb2d49788a7f812a0ab9779f0a194bdfcd2664c3cd5e18ff7768467a82->leave($__internal_bc022fbb2d49788a7f812a0ab9779f0a194bdfcd2664c3cd5e18ff7768467a82_prof);

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
