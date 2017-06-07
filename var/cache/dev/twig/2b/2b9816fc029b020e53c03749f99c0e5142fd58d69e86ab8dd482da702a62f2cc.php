<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c8ca80e14c151341c3caa94ba838e4c876083e17c67995a216cd178ee39da218 extends Twig_Template
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
        $__internal_271cb1e92e3630d6fe3f4138ef36f5908ffc4cbfb457f86b9e1769e47f2b5b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271cb1e92e3630d6fe3f4138ef36f5908ffc4cbfb457f86b9e1769e47f2b5b3d->enter($__internal_271cb1e92e3630d6fe3f4138ef36f5908ffc4cbfb457f86b9e1769e47f2b5b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_d19dd7b2365770a03b6ba7cee8569af56a0f0f352c25c8f451604a9a983d8220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19dd7b2365770a03b6ba7cee8569af56a0f0f352c25c8f451604a9a983d8220->enter($__internal_d19dd7b2365770a03b6ba7cee8569af56a0f0f352c25c8f451604a9a983d8220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_271cb1e92e3630d6fe3f4138ef36f5908ffc4cbfb457f86b9e1769e47f2b5b3d->leave($__internal_271cb1e92e3630d6fe3f4138ef36f5908ffc4cbfb457f86b9e1769e47f2b5b3d_prof);

        
        $__internal_d19dd7b2365770a03b6ba7cee8569af56a0f0f352c25c8f451604a9a983d8220->leave($__internal_d19dd7b2365770a03b6ba7cee8569af56a0f0f352c25c8f451604a9a983d8220_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
