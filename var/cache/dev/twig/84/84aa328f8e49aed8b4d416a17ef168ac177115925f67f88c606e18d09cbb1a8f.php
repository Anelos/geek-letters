<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6f979e85f3bf05cee691c9008ffa642042ef93ed749fae06def094633d9abece extends Twig_Template
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
        $__internal_cf3232b864d2b8bbbe1d0b2b1dae498a381b7d6e23fbe38dbdd670a621f01038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf3232b864d2b8bbbe1d0b2b1dae498a381b7d6e23fbe38dbdd670a621f01038->enter($__internal_cf3232b864d2b8bbbe1d0b2b1dae498a381b7d6e23fbe38dbdd670a621f01038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_9affee0a1e1e0416f562de0c74dca4080cc64ea1e36f5e9abd00c52e4bb7cfa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9affee0a1e1e0416f562de0c74dca4080cc64ea1e36f5e9abd00c52e4bb7cfa7->enter($__internal_9affee0a1e1e0416f562de0c74dca4080cc64ea1e36f5e9abd00c52e4bb7cfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_cf3232b864d2b8bbbe1d0b2b1dae498a381b7d6e23fbe38dbdd670a621f01038->leave($__internal_cf3232b864d2b8bbbe1d0b2b1dae498a381b7d6e23fbe38dbdd670a621f01038_prof);

        
        $__internal_9affee0a1e1e0416f562de0c74dca4080cc64ea1e36f5e9abd00c52e4bb7cfa7->leave($__internal_9affee0a1e1e0416f562de0c74dca4080cc64ea1e36f5e9abd00c52e4bb7cfa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
