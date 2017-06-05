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
        $__internal_c35d60b0154a5a0b0fdd8b0d82559ec6a39f9167c091256d68fee9d8b4d3c4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35d60b0154a5a0b0fdd8b0d82559ec6a39f9167c091256d68fee9d8b4d3c4f6->enter($__internal_c35d60b0154a5a0b0fdd8b0d82559ec6a39f9167c091256d68fee9d8b4d3c4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_9c52732f65810208b0402742b0e03c7fe8b2e10ff79209691ea756d7cec222b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c52732f65810208b0402742b0e03c7fe8b2e10ff79209691ea756d7cec222b3->enter($__internal_9c52732f65810208b0402742b0e03c7fe8b2e10ff79209691ea756d7cec222b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_c35d60b0154a5a0b0fdd8b0d82559ec6a39f9167c091256d68fee9d8b4d3c4f6->leave($__internal_c35d60b0154a5a0b0fdd8b0d82559ec6a39f9167c091256d68fee9d8b4d3c4f6_prof);

        
        $__internal_9c52732f65810208b0402742b0e03c7fe8b2e10ff79209691ea756d7cec222b3->leave($__internal_9c52732f65810208b0402742b0e03c7fe8b2e10ff79209691ea756d7cec222b3_prof);

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
