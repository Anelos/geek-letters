<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_21543b7a80ee7713c7788db7ff120fe932429e40b835dd7f15bf50aa5f071a7a extends Twig_Template
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
        $__internal_c081e1b75a7713182ba81948b3072645f6e3fb003beb7790e8635ed99a734462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c081e1b75a7713182ba81948b3072645f6e3fb003beb7790e8635ed99a734462->enter($__internal_c081e1b75a7713182ba81948b3072645f6e3fb003beb7790e8635ed99a734462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7592f4ea50d90dc02131c2d8c56710b84dc071e04342e0b9e0f129c7dcae5c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7592f4ea50d90dc02131c2d8c56710b84dc071e04342e0b9e0f129c7dcae5c4b->enter($__internal_7592f4ea50d90dc02131c2d8c56710b84dc071e04342e0b9e0f129c7dcae5c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_c081e1b75a7713182ba81948b3072645f6e3fb003beb7790e8635ed99a734462->leave($__internal_c081e1b75a7713182ba81948b3072645f6e3fb003beb7790e8635ed99a734462_prof);

        
        $__internal_7592f4ea50d90dc02131c2d8c56710b84dc071e04342e0b9e0f129c7dcae5c4b->leave($__internal_7592f4ea50d90dc02131c2d8c56710b84dc071e04342e0b9e0f129c7dcae5c4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
