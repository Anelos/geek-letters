<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_587ebe6ed7c80587ad59d8e9883c0d29d020f350e6799f39b476d2b11dca2767 extends Twig_Template
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
        $__internal_822566e4cd0af2ae80c436ccee4f032e3b3ae68d03da7fe35a931d1eaaad5ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822566e4cd0af2ae80c436ccee4f032e3b3ae68d03da7fe35a931d1eaaad5ec5->enter($__internal_822566e4cd0af2ae80c436ccee4f032e3b3ae68d03da7fe35a931d1eaaad5ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_317f973fc715987fad4e5bd1b24b8ad4a15a74de5107e9489b8debb9805319c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317f973fc715987fad4e5bd1b24b8ad4a15a74de5107e9489b8debb9805319c7->enter($__internal_317f973fc715987fad4e5bd1b24b8ad4a15a74de5107e9489b8debb9805319c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_822566e4cd0af2ae80c436ccee4f032e3b3ae68d03da7fe35a931d1eaaad5ec5->leave($__internal_822566e4cd0af2ae80c436ccee4f032e3b3ae68d03da7fe35a931d1eaaad5ec5_prof);

        
        $__internal_317f973fc715987fad4e5bd1b24b8ad4a15a74de5107e9489b8debb9805319c7->leave($__internal_317f973fc715987fad4e5bd1b24b8ad4a15a74de5107e9489b8debb9805319c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
