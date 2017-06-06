<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_fdac6a49a9e4e7e9a851f5e8ebbcb3853bfb9510572dad910fcf767e03b3744e extends Twig_Template
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
        $__internal_f02c58bce712e4cd18a0b4c8b97d046e02b9a1fb6c24b2cd312c7816d6aab6d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02c58bce712e4cd18a0b4c8b97d046e02b9a1fb6c24b2cd312c7816d6aab6d7->enter($__internal_f02c58bce712e4cd18a0b4c8b97d046e02b9a1fb6c24b2cd312c7816d6aab6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_73da040714c5868c43fd7bf13955a4556c15c52b9f02e9bc70d8e091e0a99932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73da040714c5868c43fd7bf13955a4556c15c52b9f02e9bc70d8e091e0a99932->enter($__internal_73da040714c5868c43fd7bf13955a4556c15c52b9f02e9bc70d8e091e0a99932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f02c58bce712e4cd18a0b4c8b97d046e02b9a1fb6c24b2cd312c7816d6aab6d7->leave($__internal_f02c58bce712e4cd18a0b4c8b97d046e02b9a1fb6c24b2cd312c7816d6aab6d7_prof);

        
        $__internal_73da040714c5868c43fd7bf13955a4556c15c52b9f02e9bc70d8e091e0a99932->leave($__internal_73da040714c5868c43fd7bf13955a4556c15c52b9f02e9bc70d8e091e0a99932_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
