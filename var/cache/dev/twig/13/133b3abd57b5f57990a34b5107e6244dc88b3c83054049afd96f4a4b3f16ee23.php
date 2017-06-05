<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_18597bc028695795cd64017f04b8918933a548f08417975d6bc4c7623ad9ee3a extends Twig_Template
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
        $__internal_b5c482bd669a299ba297dacc7ef4940e7b7883fb0208f3d8b8b37875b1a827d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5c482bd669a299ba297dacc7ef4940e7b7883fb0208f3d8b8b37875b1a827d8->enter($__internal_b5c482bd669a299ba297dacc7ef4940e7b7883fb0208f3d8b8b37875b1a827d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_391be0c0c17b135ff3bfd116c8e91a18a110bfdcbbe81a4560a5718084e452fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391be0c0c17b135ff3bfd116c8e91a18a110bfdcbbe81a4560a5718084e452fa->enter($__internal_391be0c0c17b135ff3bfd116c8e91a18a110bfdcbbe81a4560a5718084e452fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b5c482bd669a299ba297dacc7ef4940e7b7883fb0208f3d8b8b37875b1a827d8->leave($__internal_b5c482bd669a299ba297dacc7ef4940e7b7883fb0208f3d8b8b37875b1a827d8_prof);

        
        $__internal_391be0c0c17b135ff3bfd116c8e91a18a110bfdcbbe81a4560a5718084e452fa->leave($__internal_391be0c0c17b135ff3bfd116c8e91a18a110bfdcbbe81a4560a5718084e452fa_prof);

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
