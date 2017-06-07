<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7c71897e4e92567f8d31dff761fb2e93dc1c403eb10436178f8da9be1134d634 extends Twig_Template
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
        $__internal_2d9ee90f1a88a889c9fac9b3054859ff199fe847e91936de464e9e7abddab90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d9ee90f1a88a889c9fac9b3054859ff199fe847e91936de464e9e7abddab90b->enter($__internal_2d9ee90f1a88a889c9fac9b3054859ff199fe847e91936de464e9e7abddab90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b56d9fcae5c283d35e03f8cb9d346eb7297ae72aaa5680d4f4bfe72ea1a2c7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56d9fcae5c283d35e03f8cb9d346eb7297ae72aaa5680d4f4bfe72ea1a2c7d7->enter($__internal_b56d9fcae5c283d35e03f8cb9d346eb7297ae72aaa5680d4f4bfe72ea1a2c7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_2d9ee90f1a88a889c9fac9b3054859ff199fe847e91936de464e9e7abddab90b->leave($__internal_2d9ee90f1a88a889c9fac9b3054859ff199fe847e91936de464e9e7abddab90b_prof);

        
        $__internal_b56d9fcae5c283d35e03f8cb9d346eb7297ae72aaa5680d4f4bfe72ea1a2c7d7->leave($__internal_b56d9fcae5c283d35e03f8cb9d346eb7297ae72aaa5680d4f4bfe72ea1a2c7d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
