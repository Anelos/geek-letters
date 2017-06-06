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
        $__internal_69626a3e85af7b03948d5a05693d349935128dc811b0d0a9dead8f50fa934bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69626a3e85af7b03948d5a05693d349935128dc811b0d0a9dead8f50fa934bea->enter($__internal_69626a3e85af7b03948d5a05693d349935128dc811b0d0a9dead8f50fa934bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_efbc67c9b81994c1f48f11237c700375d23e9a3edc129f5126dbe7446269b8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbc67c9b81994c1f48f11237c700375d23e9a3edc129f5126dbe7446269b8ad->enter($__internal_efbc67c9b81994c1f48f11237c700375d23e9a3edc129f5126dbe7446269b8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_69626a3e85af7b03948d5a05693d349935128dc811b0d0a9dead8f50fa934bea->leave($__internal_69626a3e85af7b03948d5a05693d349935128dc811b0d0a9dead8f50fa934bea_prof);

        
        $__internal_efbc67c9b81994c1f48f11237c700375d23e9a3edc129f5126dbe7446269b8ad->leave($__internal_efbc67c9b81994c1f48f11237c700375d23e9a3edc129f5126dbe7446269b8ad_prof);

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
