<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a6036c4a24a1e3d6f5ccf263557c53b03bbfb7d89b1df5c313ddb180bf2b20a1 extends Twig_Template
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
        $__internal_7770065e587cba2cd18ef5186b7b06f927041c6a9f0a7da8a0e75e98750ada37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7770065e587cba2cd18ef5186b7b06f927041c6a9f0a7da8a0e75e98750ada37->enter($__internal_7770065e587cba2cd18ef5186b7b06f927041c6a9f0a7da8a0e75e98750ada37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_07d109521cae0be91089c12a53361bafcc3c1f7226d3ca578c81381e076806e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d109521cae0be91089c12a53361bafcc3c1f7226d3ca578c81381e076806e5->enter($__internal_07d109521cae0be91089c12a53361bafcc3c1f7226d3ca578c81381e076806e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7770065e587cba2cd18ef5186b7b06f927041c6a9f0a7da8a0e75e98750ada37->leave($__internal_7770065e587cba2cd18ef5186b7b06f927041c6a9f0a7da8a0e75e98750ada37_prof);

        
        $__internal_07d109521cae0be91089c12a53361bafcc3c1f7226d3ca578c81381e076806e5->leave($__internal_07d109521cae0be91089c12a53361bafcc3c1f7226d3ca578c81381e076806e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
