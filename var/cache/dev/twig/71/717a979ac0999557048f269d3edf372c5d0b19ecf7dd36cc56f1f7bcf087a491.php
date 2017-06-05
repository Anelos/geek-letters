<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3afd48f6be7d04a5e5c88ecb25fa9a4dcbec9d867bfe5995fcbaa6f173f147d5 extends Twig_Template
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
        $__internal_c77028c3055220280b97babaad5656de1ec9c853d37f0eb20e765093b2e61b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77028c3055220280b97babaad5656de1ec9c853d37f0eb20e765093b2e61b03->enter($__internal_c77028c3055220280b97babaad5656de1ec9c853d37f0eb20e765093b2e61b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c912282e1e87ba99ddcfd3d632e74c0891f6791fdbe8a28d200a1d40f6a2ff6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c912282e1e87ba99ddcfd3d632e74c0891f6791fdbe8a28d200a1d40f6a2ff6c->enter($__internal_c912282e1e87ba99ddcfd3d632e74c0891f6791fdbe8a28d200a1d40f6a2ff6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c77028c3055220280b97babaad5656de1ec9c853d37f0eb20e765093b2e61b03->leave($__internal_c77028c3055220280b97babaad5656de1ec9c853d37f0eb20e765093b2e61b03_prof);

        
        $__internal_c912282e1e87ba99ddcfd3d632e74c0891f6791fdbe8a28d200a1d40f6a2ff6c->leave($__internal_c912282e1e87ba99ddcfd3d632e74c0891f6791fdbe8a28d200a1d40f6a2ff6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
