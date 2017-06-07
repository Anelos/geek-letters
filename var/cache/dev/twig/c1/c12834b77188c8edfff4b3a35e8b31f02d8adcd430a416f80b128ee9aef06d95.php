<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_1f284969b138760136604ec09548ce3e710cb2fd05c5c697659918e9a8dbe7dc extends Twig_Template
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
        $__internal_635c3de4aacb4e5ff5fb153d1f6c05c15fc48b40e4a7baac093bf501b023c8e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_635c3de4aacb4e5ff5fb153d1f6c05c15fc48b40e4a7baac093bf501b023c8e6->enter($__internal_635c3de4aacb4e5ff5fb153d1f6c05c15fc48b40e4a7baac093bf501b023c8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_d8d6a4b06521aeb790b2e6deb429b013302962e98449f7b296047fc8e749d234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d6a4b06521aeb790b2e6deb429b013302962e98449f7b296047fc8e749d234->enter($__internal_d8d6a4b06521aeb790b2e6deb429b013302962e98449f7b296047fc8e749d234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_635c3de4aacb4e5ff5fb153d1f6c05c15fc48b40e4a7baac093bf501b023c8e6->leave($__internal_635c3de4aacb4e5ff5fb153d1f6c05c15fc48b40e4a7baac093bf501b023c8e6_prof);

        
        $__internal_d8d6a4b06521aeb790b2e6deb429b013302962e98449f7b296047fc8e749d234->leave($__internal_d8d6a4b06521aeb790b2e6deb429b013302962e98449f7b296047fc8e749d234_prof);

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
