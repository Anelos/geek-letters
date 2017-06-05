<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1b8d3f36ec637ebba212951611ab79644848711b466689b21f7cb2e72fb0f49e extends Twig_Template
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
        $__internal_9248fd8baafd728f6d23c3232af767c831d73aa395732af77bee97445212d4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9248fd8baafd728f6d23c3232af767c831d73aa395732af77bee97445212d4bf->enter($__internal_9248fd8baafd728f6d23c3232af767c831d73aa395732af77bee97445212d4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_e64b29cc0c7f9895940d6a2b58446f08fa6a9bbc2930118292ee85938e891043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64b29cc0c7f9895940d6a2b58446f08fa6a9bbc2930118292ee85938e891043->enter($__internal_e64b29cc0c7f9895940d6a2b58446f08fa6a9bbc2930118292ee85938e891043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9248fd8baafd728f6d23c3232af767c831d73aa395732af77bee97445212d4bf->leave($__internal_9248fd8baafd728f6d23c3232af767c831d73aa395732af77bee97445212d4bf_prof);

        
        $__internal_e64b29cc0c7f9895940d6a2b58446f08fa6a9bbc2930118292ee85938e891043->leave($__internal_e64b29cc0c7f9895940d6a2b58446f08fa6a9bbc2930118292ee85938e891043_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
