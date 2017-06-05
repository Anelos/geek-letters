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
        $__internal_10bd5e89bb7afaead331b4dca2c808bb28a36b93b2dde9a9f89c0290d2c3f79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10bd5e89bb7afaead331b4dca2c808bb28a36b93b2dde9a9f89c0290d2c3f79b->enter($__internal_10bd5e89bb7afaead331b4dca2c808bb28a36b93b2dde9a9f89c0290d2c3f79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5fc85af52ee0535e99049a24c81b0a7e586e1015147355ba8ab51a220cff96a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc85af52ee0535e99049a24c81b0a7e586e1015147355ba8ab51a220cff96a0->enter($__internal_5fc85af52ee0535e99049a24c81b0a7e586e1015147355ba8ab51a220cff96a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_10bd5e89bb7afaead331b4dca2c808bb28a36b93b2dde9a9f89c0290d2c3f79b->leave($__internal_10bd5e89bb7afaead331b4dca2c808bb28a36b93b2dde9a9f89c0290d2c3f79b_prof);

        
        $__internal_5fc85af52ee0535e99049a24c81b0a7e586e1015147355ba8ab51a220cff96a0->leave($__internal_5fc85af52ee0535e99049a24c81b0a7e586e1015147355ba8ab51a220cff96a0_prof);

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
