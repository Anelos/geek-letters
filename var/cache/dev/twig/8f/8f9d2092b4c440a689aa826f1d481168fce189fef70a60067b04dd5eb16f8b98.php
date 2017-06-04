<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_93f46ccfb2116b54b4dfca50d86e003cd52ee219aaf36d1bd8ba13feb003a165 extends Twig_Template
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
        $__internal_a8c11ed72c8627788d8b7e61e2281ffebd499bb6ad399509232ab38deb5e75ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c11ed72c8627788d8b7e61e2281ffebd499bb6ad399509232ab38deb5e75ef->enter($__internal_a8c11ed72c8627788d8b7e61e2281ffebd499bb6ad399509232ab38deb5e75ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_67982edf68269a99eb6d8fdadb250d1203dc9aa1764db08b56345089a1aa3f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67982edf68269a99eb6d8fdadb250d1203dc9aa1764db08b56345089a1aa3f99->enter($__internal_67982edf68269a99eb6d8fdadb250d1203dc9aa1764db08b56345089a1aa3f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a8c11ed72c8627788d8b7e61e2281ffebd499bb6ad399509232ab38deb5e75ef->leave($__internal_a8c11ed72c8627788d8b7e61e2281ffebd499bb6ad399509232ab38deb5e75ef_prof);

        
        $__internal_67982edf68269a99eb6d8fdadb250d1203dc9aa1764db08b56345089a1aa3f99->leave($__internal_67982edf68269a99eb6d8fdadb250d1203dc9aa1764db08b56345089a1aa3f99_prof);

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
