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
        $__internal_4142502656d29ab15f312d95a06405e14698409cc3bba02d1acb71ae1c28d38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4142502656d29ab15f312d95a06405e14698409cc3bba02d1acb71ae1c28d38c->enter($__internal_4142502656d29ab15f312d95a06405e14698409cc3bba02d1acb71ae1c28d38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_27018568f565e69426bc688bfc60d5b1917dcd843b7222ed1d1587a963a1f460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27018568f565e69426bc688bfc60d5b1917dcd843b7222ed1d1587a963a1f460->enter($__internal_27018568f565e69426bc688bfc60d5b1917dcd843b7222ed1d1587a963a1f460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_4142502656d29ab15f312d95a06405e14698409cc3bba02d1acb71ae1c28d38c->leave($__internal_4142502656d29ab15f312d95a06405e14698409cc3bba02d1acb71ae1c28d38c_prof);

        
        $__internal_27018568f565e69426bc688bfc60d5b1917dcd843b7222ed1d1587a963a1f460->leave($__internal_27018568f565e69426bc688bfc60d5b1917dcd843b7222ed1d1587a963a1f460_prof);

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
