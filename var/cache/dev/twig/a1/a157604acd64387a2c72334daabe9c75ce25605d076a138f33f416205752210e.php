<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_8b56cdbff3395a1d1cd5bcfbd8e70a90d6ae90b300c331a8534c0c5ca80a604f extends Twig_Template
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
        $__internal_f52cfee3052f2854cd61a47c40a1a08310272c233a419d6eeff7622be898db30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f52cfee3052f2854cd61a47c40a1a08310272c233a419d6eeff7622be898db30->enter($__internal_f52cfee3052f2854cd61a47c40a1a08310272c233a419d6eeff7622be898db30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e08da6964065b6d1f5ef128894854a7744de695c4e9e82599bcfa672b47c608e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08da6964065b6d1f5ef128894854a7744de695c4e9e82599bcfa672b47c608e->enter($__internal_e08da6964065b6d1f5ef128894854a7744de695c4e9e82599bcfa672b47c608e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f52cfee3052f2854cd61a47c40a1a08310272c233a419d6eeff7622be898db30->leave($__internal_f52cfee3052f2854cd61a47c40a1a08310272c233a419d6eeff7622be898db30_prof);

        
        $__internal_e08da6964065b6d1f5ef128894854a7744de695c4e9e82599bcfa672b47c608e->leave($__internal_e08da6964065b6d1f5ef128894854a7744de695c4e9e82599bcfa672b47c608e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
