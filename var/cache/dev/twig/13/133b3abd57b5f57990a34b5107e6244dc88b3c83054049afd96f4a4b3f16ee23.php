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
        $__internal_872afc1f17f741dea53797658a6f294eadf44ee393baa36c28a07509ce674f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872afc1f17f741dea53797658a6f294eadf44ee393baa36c28a07509ce674f4b->enter($__internal_872afc1f17f741dea53797658a6f294eadf44ee393baa36c28a07509ce674f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b4618d7c4657d694ea63cbcbcce1049f2f8eb1625f5059991fd809529c504766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4618d7c4657d694ea63cbcbcce1049f2f8eb1625f5059991fd809529c504766->enter($__internal_b4618d7c4657d694ea63cbcbcce1049f2f8eb1625f5059991fd809529c504766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_872afc1f17f741dea53797658a6f294eadf44ee393baa36c28a07509ce674f4b->leave($__internal_872afc1f17f741dea53797658a6f294eadf44ee393baa36c28a07509ce674f4b_prof);

        
        $__internal_b4618d7c4657d694ea63cbcbcce1049f2f8eb1625f5059991fd809529c504766->leave($__internal_b4618d7c4657d694ea63cbcbcce1049f2f8eb1625f5059991fd809529c504766_prof);

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
