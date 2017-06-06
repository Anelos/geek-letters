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
        $__internal_354da90b8a5d1d4d152eb3a3fcacbbad4c103969eecdd5de0d0048fb3d45f5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354da90b8a5d1d4d152eb3a3fcacbbad4c103969eecdd5de0d0048fb3d45f5d5->enter($__internal_354da90b8a5d1d4d152eb3a3fcacbbad4c103969eecdd5de0d0048fb3d45f5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_e7e30ef0eaa8407ac0c9a09b76609597e5dec05c4aab9de35a9a52c96a0a856d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e30ef0eaa8407ac0c9a09b76609597e5dec05c4aab9de35a9a52c96a0a856d->enter($__internal_e7e30ef0eaa8407ac0c9a09b76609597e5dec05c4aab9de35a9a52c96a0a856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_354da90b8a5d1d4d152eb3a3fcacbbad4c103969eecdd5de0d0048fb3d45f5d5->leave($__internal_354da90b8a5d1d4d152eb3a3fcacbbad4c103969eecdd5de0d0048fb3d45f5d5_prof);

        
        $__internal_e7e30ef0eaa8407ac0c9a09b76609597e5dec05c4aab9de35a9a52c96a0a856d->leave($__internal_e7e30ef0eaa8407ac0c9a09b76609597e5dec05c4aab9de35a9a52c96a0a856d_prof);

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
