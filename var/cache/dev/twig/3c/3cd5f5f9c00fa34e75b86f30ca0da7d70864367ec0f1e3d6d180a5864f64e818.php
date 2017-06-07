<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_e7a552982a8af0308f42bceca84bc4c66540040d344cf6910debd84c9c316103 extends Twig_Template
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
        $__internal_9cf79e511fc89e3c73e3431c08474e44f6fab9dedc5915750282bdec500a8d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf79e511fc89e3c73e3431c08474e44f6fab9dedc5915750282bdec500a8d92->enter($__internal_9cf79e511fc89e3c73e3431c08474e44f6fab9dedc5915750282bdec500a8d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_7b794f3df21b6e0eb534eca0882f65c636eb8931974953905d9d03250d36b0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b794f3df21b6e0eb534eca0882f65c636eb8931974953905d9d03250d36b0c9->enter($__internal_7b794f3df21b6e0eb534eca0882f65c636eb8931974953905d9d03250d36b0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9cf79e511fc89e3c73e3431c08474e44f6fab9dedc5915750282bdec500a8d92->leave($__internal_9cf79e511fc89e3c73e3431c08474e44f6fab9dedc5915750282bdec500a8d92_prof);

        
        $__internal_7b794f3df21b6e0eb534eca0882f65c636eb8931974953905d9d03250d36b0c9->leave($__internal_7b794f3df21b6e0eb534eca0882f65c636eb8931974953905d9d03250d36b0c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
