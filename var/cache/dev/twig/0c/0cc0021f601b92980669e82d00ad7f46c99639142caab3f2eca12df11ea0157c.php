<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a00247aa2c9fc7db9ef2d7d576addf4fd70f002e56afe268c0e3aaeb737e69bd extends Twig_Template
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
        $__internal_b242ef316f56460de7dfecefd373e039af066f5c3468ae0a3217bc9942ac0d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b242ef316f56460de7dfecefd373e039af066f5c3468ae0a3217bc9942ac0d22->enter($__internal_b242ef316f56460de7dfecefd373e039af066f5c3468ae0a3217bc9942ac0d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_832db6265280595796693ff27873e3bd17c57474781639da01488d0f925be1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832db6265280595796693ff27873e3bd17c57474781639da01488d0f925be1db->enter($__internal_832db6265280595796693ff27873e3bd17c57474781639da01488d0f925be1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b242ef316f56460de7dfecefd373e039af066f5c3468ae0a3217bc9942ac0d22->leave($__internal_b242ef316f56460de7dfecefd373e039af066f5c3468ae0a3217bc9942ac0d22_prof);

        
        $__internal_832db6265280595796693ff27873e3bd17c57474781639da01488d0f925be1db->leave($__internal_832db6265280595796693ff27873e3bd17c57474781639da01488d0f925be1db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
