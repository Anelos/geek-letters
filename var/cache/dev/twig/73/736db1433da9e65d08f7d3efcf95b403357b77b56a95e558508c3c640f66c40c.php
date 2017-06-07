<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_40bd363201377fc8c3f3134164e1b91c86c0e0be8228950cd2ab4c8262090e90 extends Twig_Template
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
        $__internal_1bcddc10add6d8f776b291f43a29d1d51509d28215a0aec77f1ec3ef41d674a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bcddc10add6d8f776b291f43a29d1d51509d28215a0aec77f1ec3ef41d674a0->enter($__internal_1bcddc10add6d8f776b291f43a29d1d51509d28215a0aec77f1ec3ef41d674a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f2bd35e6eca79f09d2b9eea863c49c87e24932bb04a975392643e04257e1c7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bd35e6eca79f09d2b9eea863c49c87e24932bb04a975392643e04257e1c7b6->enter($__internal_f2bd35e6eca79f09d2b9eea863c49c87e24932bb04a975392643e04257e1c7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1bcddc10add6d8f776b291f43a29d1d51509d28215a0aec77f1ec3ef41d674a0->leave($__internal_1bcddc10add6d8f776b291f43a29d1d51509d28215a0aec77f1ec3ef41d674a0_prof);

        
        $__internal_f2bd35e6eca79f09d2b9eea863c49c87e24932bb04a975392643e04257e1c7b6->leave($__internal_f2bd35e6eca79f09d2b9eea863c49c87e24932bb04a975392643e04257e1c7b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
