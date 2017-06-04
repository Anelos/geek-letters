<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_782970f3543cc37d19def6867e64f436435eb183e99a263524adbc086ad212f1 extends Twig_Template
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
        $__internal_421d282440af5ee33a834515546aa2bb6468b235e94eda3cb5e9fe79fbaade1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421d282440af5ee33a834515546aa2bb6468b235e94eda3cb5e9fe79fbaade1b->enter($__internal_421d282440af5ee33a834515546aa2bb6468b235e94eda3cb5e9fe79fbaade1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_dc1078c076d7851711168223ff5a73aad9ae0c9fb8c6a4d82340d7c6d6f630b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1078c076d7851711168223ff5a73aad9ae0c9fb8c6a4d82340d7c6d6f630b9->enter($__internal_dc1078c076d7851711168223ff5a73aad9ae0c9fb8c6a4d82340d7c6d6f630b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_421d282440af5ee33a834515546aa2bb6468b235e94eda3cb5e9fe79fbaade1b->leave($__internal_421d282440af5ee33a834515546aa2bb6468b235e94eda3cb5e9fe79fbaade1b_prof);

        
        $__internal_dc1078c076d7851711168223ff5a73aad9ae0c9fb8c6a4d82340d7c6d6f630b9->leave($__internal_dc1078c076d7851711168223ff5a73aad9ae0c9fb8c6a4d82340d7c6d6f630b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
