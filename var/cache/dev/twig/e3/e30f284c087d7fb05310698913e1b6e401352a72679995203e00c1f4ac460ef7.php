<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_aa6e9ee50ad0986a9215dfb7cfcb6dc4068a703401a4a261a62bb7e3558940d7 extends Twig_Template
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
        $__internal_d80eb7d06db4bd106eef42318bd5c50c84516dca53831a1113f97497bef62ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80eb7d06db4bd106eef42318bd5c50c84516dca53831a1113f97497bef62ffa->enter($__internal_d80eb7d06db4bd106eef42318bd5c50c84516dca53831a1113f97497bef62ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c340eccb618076263c21b0aeefd92e2a3382310e5f1bf88609b069c9456bbf27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c340eccb618076263c21b0aeefd92e2a3382310e5f1bf88609b069c9456bbf27->enter($__internal_c340eccb618076263c21b0aeefd92e2a3382310e5f1bf88609b069c9456bbf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d80eb7d06db4bd106eef42318bd5c50c84516dca53831a1113f97497bef62ffa->leave($__internal_d80eb7d06db4bd106eef42318bd5c50c84516dca53831a1113f97497bef62ffa_prof);

        
        $__internal_c340eccb618076263c21b0aeefd92e2a3382310e5f1bf88609b069c9456bbf27->leave($__internal_c340eccb618076263c21b0aeefd92e2a3382310e5f1bf88609b069c9456bbf27_prof);

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
