<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_432c52266143f3714bc10a9d3454f41b3d43042af81c9694c38a9b473de1142f extends Twig_Template
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
        $__internal_42aa5cff87bd2b9bfe26ac6e8de15baa9353bdc5794b9fa3b5158bb55ea9425d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42aa5cff87bd2b9bfe26ac6e8de15baa9353bdc5794b9fa3b5158bb55ea9425d->enter($__internal_42aa5cff87bd2b9bfe26ac6e8de15baa9353bdc5794b9fa3b5158bb55ea9425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_de86c8a2826a4daddcef590b86cd2d688ee480214e3cc42832216430ef45b81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de86c8a2826a4daddcef590b86cd2d688ee480214e3cc42832216430ef45b81a->enter($__internal_de86c8a2826a4daddcef590b86cd2d688ee480214e3cc42832216430ef45b81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_42aa5cff87bd2b9bfe26ac6e8de15baa9353bdc5794b9fa3b5158bb55ea9425d->leave($__internal_42aa5cff87bd2b9bfe26ac6e8de15baa9353bdc5794b9fa3b5158bb55ea9425d_prof);

        
        $__internal_de86c8a2826a4daddcef590b86cd2d688ee480214e3cc42832216430ef45b81a->leave($__internal_de86c8a2826a4daddcef590b86cd2d688ee480214e3cc42832216430ef45b81a_prof);

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
