<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1d4b1298f3fed023081f0bd9fd40f81fab53c0f56f1d10ae0c60a0fb1c53e2b0 extends Twig_Template
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
        $__internal_7e1307c7f111be6516ba1f3f61b8aeb2b74ccea052684b0c42ebae4dc04daf54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e1307c7f111be6516ba1f3f61b8aeb2b74ccea052684b0c42ebae4dc04daf54->enter($__internal_7e1307c7f111be6516ba1f3f61b8aeb2b74ccea052684b0c42ebae4dc04daf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d6c1add64e689af79c951170ff51a3daaa272690b9c924baaed03fc0c2e862ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c1add64e689af79c951170ff51a3daaa272690b9c924baaed03fc0c2e862ca->enter($__internal_d6c1add64e689af79c951170ff51a3daaa272690b9c924baaed03fc0c2e862ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7e1307c7f111be6516ba1f3f61b8aeb2b74ccea052684b0c42ebae4dc04daf54->leave($__internal_7e1307c7f111be6516ba1f3f61b8aeb2b74ccea052684b0c42ebae4dc04daf54_prof);

        
        $__internal_d6c1add64e689af79c951170ff51a3daaa272690b9c924baaed03fc0c2e862ca->leave($__internal_d6c1add64e689af79c951170ff51a3daaa272690b9c924baaed03fc0c2e862ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
