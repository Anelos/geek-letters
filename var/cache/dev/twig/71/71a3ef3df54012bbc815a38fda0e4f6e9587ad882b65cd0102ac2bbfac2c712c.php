<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_05ed11b6e42121ef9b0936da99028f8f4bd563f3999c995a7909e67442a35430 extends Twig_Template
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
        $__internal_a79395058bf693979d6945fdec4d36b96f2372ef3c2029c6120e943ca9e82f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79395058bf693979d6945fdec4d36b96f2372ef3c2029c6120e943ca9e82f7d->enter($__internal_a79395058bf693979d6945fdec4d36b96f2372ef3c2029c6120e943ca9e82f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_22f089f7bd81d4fd73f7f36bb50185f5924d766346c613760bda7416155659e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f089f7bd81d4fd73f7f36bb50185f5924d766346c613760bda7416155659e2->enter($__internal_22f089f7bd81d4fd73f7f36bb50185f5924d766346c613760bda7416155659e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a79395058bf693979d6945fdec4d36b96f2372ef3c2029c6120e943ca9e82f7d->leave($__internal_a79395058bf693979d6945fdec4d36b96f2372ef3c2029c6120e943ca9e82f7d_prof);

        
        $__internal_22f089f7bd81d4fd73f7f36bb50185f5924d766346c613760bda7416155659e2->leave($__internal_22f089f7bd81d4fd73f7f36bb50185f5924d766346c613760bda7416155659e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
