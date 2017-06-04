<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8ef22fbfbe6421b5a42d4c50c08789473328c052355c8419af0145adc04405ab extends Twig_Template
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
        $__internal_3201d5f621e40121c82cb7ad86f69cb40472718051608ba621f16a49f190e0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3201d5f621e40121c82cb7ad86f69cb40472718051608ba621f16a49f190e0c4->enter($__internal_3201d5f621e40121c82cb7ad86f69cb40472718051608ba621f16a49f190e0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_6b0216d13e96d7b2484979bb3f6941248dfebb8d82340b7da53285251849aa32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0216d13e96d7b2484979bb3f6941248dfebb8d82340b7da53285251849aa32->enter($__internal_6b0216d13e96d7b2484979bb3f6941248dfebb8d82340b7da53285251849aa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3201d5f621e40121c82cb7ad86f69cb40472718051608ba621f16a49f190e0c4->leave($__internal_3201d5f621e40121c82cb7ad86f69cb40472718051608ba621f16a49f190e0c4_prof);

        
        $__internal_6b0216d13e96d7b2484979bb3f6941248dfebb8d82340b7da53285251849aa32->leave($__internal_6b0216d13e96d7b2484979bb3f6941248dfebb8d82340b7da53285251849aa32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
