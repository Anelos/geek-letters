<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_d423dc57dbd383029ff75ba8326581a263e656d9f7df8e9c60a32f9840cc4539 extends Twig_Template
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
        $__internal_6eab998b184be2934dba81de353a933d3d5833bd4cff6338de567a36491a73b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eab998b184be2934dba81de353a933d3d5833bd4cff6338de567a36491a73b1->enter($__internal_6eab998b184be2934dba81de353a933d3d5833bd4cff6338de567a36491a73b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_0d53b78f8f28d937c9560176637d4435e671376d71ccf9b0ccd9b07e6ddb231c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d53b78f8f28d937c9560176637d4435e671376d71ccf9b0ccd9b07e6ddb231c->enter($__internal_0d53b78f8f28d937c9560176637d4435e671376d71ccf9b0ccd9b07e6ddb231c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6eab998b184be2934dba81de353a933d3d5833bd4cff6338de567a36491a73b1->leave($__internal_6eab998b184be2934dba81de353a933d3d5833bd4cff6338de567a36491a73b1_prof);

        
        $__internal_0d53b78f8f28d937c9560176637d4435e671376d71ccf9b0ccd9b07e6ddb231c->leave($__internal_0d53b78f8f28d937c9560176637d4435e671376d71ccf9b0ccd9b07e6ddb231c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
