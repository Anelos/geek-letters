<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_d423dc57dbd383029ff75ba8326581a263e656d9f7df8e9c60a32f9840cc4539 extends Twig_Template
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
        $__internal_2fa016af5e0fcf5cde88c1d01114cc524c0c969fbb745f44403c58c9434a05fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa016af5e0fcf5cde88c1d01114cc524c0c969fbb745f44403c58c9434a05fc->enter($__internal_2fa016af5e0fcf5cde88c1d01114cc524c0c969fbb745f44403c58c9434a05fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_af012c0a1c20c3b783d47d84b19aaaa905b80bf931be6671ca860d4c46e925bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af012c0a1c20c3b783d47d84b19aaaa905b80bf931be6671ca860d4c46e925bc->enter($__internal_af012c0a1c20c3b783d47d84b19aaaa905b80bf931be6671ca860d4c46e925bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2fa016af5e0fcf5cde88c1d01114cc524c0c969fbb745f44403c58c9434a05fc->leave($__internal_2fa016af5e0fcf5cde88c1d01114cc524c0c969fbb745f44403c58c9434a05fc_prof);

        
        $__internal_af012c0a1c20c3b783d47d84b19aaaa905b80bf931be6671ca860d4c46e925bc->leave($__internal_af012c0a1c20c3b783d47d84b19aaaa905b80bf931be6671ca860d4c46e925bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
