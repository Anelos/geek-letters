<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1a09c654361fae7a2cd997c829a7e215eb56fbe0b2f2f8a79e28e3f16714532e extends Twig_Template
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
        $__internal_6ed5ebaf2171bf0253143f0aea6421992cfeaa0f187c0062b6e2e4f9b8f16fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ed5ebaf2171bf0253143f0aea6421992cfeaa0f187c0062b6e2e4f9b8f16fb1->enter($__internal_6ed5ebaf2171bf0253143f0aea6421992cfeaa0f187c0062b6e2e4f9b8f16fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_30c816ba9d10c7e7a70fea522dffa7d72b06640f5b17af7e5b416b8785ae3c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c816ba9d10c7e7a70fea522dffa7d72b06640f5b17af7e5b416b8785ae3c1c->enter($__internal_30c816ba9d10c7e7a70fea522dffa7d72b06640f5b17af7e5b416b8785ae3c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6ed5ebaf2171bf0253143f0aea6421992cfeaa0f187c0062b6e2e4f9b8f16fb1->leave($__internal_6ed5ebaf2171bf0253143f0aea6421992cfeaa0f187c0062b6e2e4f9b8f16fb1_prof);

        
        $__internal_30c816ba9d10c7e7a70fea522dffa7d72b06640f5b17af7e5b416b8785ae3c1c->leave($__internal_30c816ba9d10c7e7a70fea522dffa7d72b06640f5b17af7e5b416b8785ae3c1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
