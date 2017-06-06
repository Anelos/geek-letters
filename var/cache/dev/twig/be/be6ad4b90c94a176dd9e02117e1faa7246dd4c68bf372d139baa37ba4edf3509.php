<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_39465feefd9a341a5690bf7b00f627a8069f1333eee80d0db0cb4e0dd36904d1 extends Twig_Template
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
        $__internal_781b230aa30ad614c6a89aa38d36a277dd4462425beeb4125d3819f4e7364e8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781b230aa30ad614c6a89aa38d36a277dd4462425beeb4125d3819f4e7364e8a->enter($__internal_781b230aa30ad614c6a89aa38d36a277dd4462425beeb4125d3819f4e7364e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_cde5a60da9ced2b9f29dd382b830e403451dc5da1aaca292d8ba0f5fe52e4863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde5a60da9ced2b9f29dd382b830e403451dc5da1aaca292d8ba0f5fe52e4863->enter($__internal_cde5a60da9ced2b9f29dd382b830e403451dc5da1aaca292d8ba0f5fe52e4863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_781b230aa30ad614c6a89aa38d36a277dd4462425beeb4125d3819f4e7364e8a->leave($__internal_781b230aa30ad614c6a89aa38d36a277dd4462425beeb4125d3819f4e7364e8a_prof);

        
        $__internal_cde5a60da9ced2b9f29dd382b830e403451dc5da1aaca292d8ba0f5fe52e4863->leave($__internal_cde5a60da9ced2b9f29dd382b830e403451dc5da1aaca292d8ba0f5fe52e4863_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
