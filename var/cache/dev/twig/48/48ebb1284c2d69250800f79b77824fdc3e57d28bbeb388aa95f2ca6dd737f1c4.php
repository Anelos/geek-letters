<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b23da9be24995ba5cac5183e353732dee4ec09081c409c85f8e3b89b58ec6043 extends Twig_Template
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
        $__internal_5a8a0f7d0d2e194cba0c7e2b95327115038ae7299ce3ac73ddd6913fb98d1b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8a0f7d0d2e194cba0c7e2b95327115038ae7299ce3ac73ddd6913fb98d1b2e->enter($__internal_5a8a0f7d0d2e194cba0c7e2b95327115038ae7299ce3ac73ddd6913fb98d1b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_cc479da4f61e113cd7435878976d17b474649c23c6ff9259c2bd35e8d1a0c785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc479da4f61e113cd7435878976d17b474649c23c6ff9259c2bd35e8d1a0c785->enter($__internal_cc479da4f61e113cd7435878976d17b474649c23c6ff9259c2bd35e8d1a0c785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5a8a0f7d0d2e194cba0c7e2b95327115038ae7299ce3ac73ddd6913fb98d1b2e->leave($__internal_5a8a0f7d0d2e194cba0c7e2b95327115038ae7299ce3ac73ddd6913fb98d1b2e_prof);

        
        $__internal_cc479da4f61e113cd7435878976d17b474649c23c6ff9259c2bd35e8d1a0c785->leave($__internal_cc479da4f61e113cd7435878976d17b474649c23c6ff9259c2bd35e8d1a0c785_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
