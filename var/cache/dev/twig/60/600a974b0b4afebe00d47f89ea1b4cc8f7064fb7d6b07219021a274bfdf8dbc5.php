<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b45b9cf3945b67c96e70b9aadc2159bb88bfe481603e3fb03368958a910fee84 extends Twig_Template
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
        $__internal_307fffd46211aa45ce37e5d061223c1449001687d1d04f56b6688991e97452f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307fffd46211aa45ce37e5d061223c1449001687d1d04f56b6688991e97452f8->enter($__internal_307fffd46211aa45ce37e5d061223c1449001687d1d04f56b6688991e97452f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6d2f010493c6ff3846bf5565cb2166a7b4354f43b91d880129ba531f0fdcc3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2f010493c6ff3846bf5565cb2166a7b4354f43b91d880129ba531f0fdcc3f2->enter($__internal_6d2f010493c6ff3846bf5565cb2166a7b4354f43b91d880129ba531f0fdcc3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_307fffd46211aa45ce37e5d061223c1449001687d1d04f56b6688991e97452f8->leave($__internal_307fffd46211aa45ce37e5d061223c1449001687d1d04f56b6688991e97452f8_prof);

        
        $__internal_6d2f010493c6ff3846bf5565cb2166a7b4354f43b91d880129ba531f0fdcc3f2->leave($__internal_6d2f010493c6ff3846bf5565cb2166a7b4354f43b91d880129ba531f0fdcc3f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
