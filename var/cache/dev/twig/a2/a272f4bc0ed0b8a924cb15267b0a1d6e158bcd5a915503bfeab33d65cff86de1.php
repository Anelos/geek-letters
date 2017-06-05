<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a7e37a7496c77043fcf43c05e94fe5907de3fc290603fd99be2c74a3df89aa9d extends Twig_Template
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
        $__internal_c69f05d093e12002a0adab66547b81f409607140ca89202e83f348e042fbca63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69f05d093e12002a0adab66547b81f409607140ca89202e83f348e042fbca63->enter($__internal_c69f05d093e12002a0adab66547b81f409607140ca89202e83f348e042fbca63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a40404b80e94c1e49c333b802358db042f55d05a321020550bd6d37e754de160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40404b80e94c1e49c333b802358db042f55d05a321020550bd6d37e754de160->enter($__internal_a40404b80e94c1e49c333b802358db042f55d05a321020550bd6d37e754de160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c69f05d093e12002a0adab66547b81f409607140ca89202e83f348e042fbca63->leave($__internal_c69f05d093e12002a0adab66547b81f409607140ca89202e83f348e042fbca63_prof);

        
        $__internal_a40404b80e94c1e49c333b802358db042f55d05a321020550bd6d37e754de160->leave($__internal_a40404b80e94c1e49c333b802358db042f55d05a321020550bd6d37e754de160_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
