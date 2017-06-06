<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_27a6d164cc73db9f6874a7f4278e6473aec093928ff94a6edb29a8b51e87bdf4 extends Twig_Template
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
        $__internal_aca8a0ac8c3d18f225bd1cf7e6016a32f419ca4b17fae045f5d38e7e5e8154d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca8a0ac8c3d18f225bd1cf7e6016a32f419ca4b17fae045f5d38e7e5e8154d7->enter($__internal_aca8a0ac8c3d18f225bd1cf7e6016a32f419ca4b17fae045f5d38e7e5e8154d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_61764e4eb6fbc163a058d20424747854d20708201116284d03b9578a209a8b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61764e4eb6fbc163a058d20424747854d20708201116284d03b9578a209a8b74->enter($__internal_61764e4eb6fbc163a058d20424747854d20708201116284d03b9578a209a8b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_aca8a0ac8c3d18f225bd1cf7e6016a32f419ca4b17fae045f5d38e7e5e8154d7->leave($__internal_aca8a0ac8c3d18f225bd1cf7e6016a32f419ca4b17fae045f5d38e7e5e8154d7_prof);

        
        $__internal_61764e4eb6fbc163a058d20424747854d20708201116284d03b9578a209a8b74->leave($__internal_61764e4eb6fbc163a058d20424747854d20708201116284d03b9578a209a8b74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
