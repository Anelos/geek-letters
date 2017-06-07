<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_13183cfe1c197405dc779867916dacdeef0c3b2adea0d92df1b6be4bc7e960d8 extends Twig_Template
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
        $__internal_be9e70032e61118c52fec5492de180d4d484cceaf0f11d5d13ec5c17beb2cd00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9e70032e61118c52fec5492de180d4d484cceaf0f11d5d13ec5c17beb2cd00->enter($__internal_be9e70032e61118c52fec5492de180d4d484cceaf0f11d5d13ec5c17beb2cd00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_0fd6a22411cb4f4419e969042d08c8cb7b271472ab5153199b53611a333f2431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd6a22411cb4f4419e969042d08c8cb7b271472ab5153199b53611a333f2431->enter($__internal_0fd6a22411cb4f4419e969042d08c8cb7b271472ab5153199b53611a333f2431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_be9e70032e61118c52fec5492de180d4d484cceaf0f11d5d13ec5c17beb2cd00->leave($__internal_be9e70032e61118c52fec5492de180d4d484cceaf0f11d5d13ec5c17beb2cd00_prof);

        
        $__internal_0fd6a22411cb4f4419e969042d08c8cb7b271472ab5153199b53611a333f2431->leave($__internal_0fd6a22411cb4f4419e969042d08c8cb7b271472ab5153199b53611a333f2431_prof);

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
