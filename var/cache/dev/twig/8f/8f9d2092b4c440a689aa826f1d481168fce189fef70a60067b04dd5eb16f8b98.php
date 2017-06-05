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
        $__internal_5f8a41ade90e1cf2054e5bb0cc105608665758b86a2d6add82af24929a1c00e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8a41ade90e1cf2054e5bb0cc105608665758b86a2d6add82af24929a1c00e0->enter($__internal_5f8a41ade90e1cf2054e5bb0cc105608665758b86a2d6add82af24929a1c00e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f65429bde77751403bb8a452c2e673e4a91756fdad746af3450e4f2c9a396ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65429bde77751403bb8a452c2e673e4a91756fdad746af3450e4f2c9a396ca9->enter($__internal_f65429bde77751403bb8a452c2e673e4a91756fdad746af3450e4f2c9a396ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5f8a41ade90e1cf2054e5bb0cc105608665758b86a2d6add82af24929a1c00e0->leave($__internal_5f8a41ade90e1cf2054e5bb0cc105608665758b86a2d6add82af24929a1c00e0_prof);

        
        $__internal_f65429bde77751403bb8a452c2e673e4a91756fdad746af3450e4f2c9a396ca9->leave($__internal_f65429bde77751403bb8a452c2e673e4a91756fdad746af3450e4f2c9a396ca9_prof);

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
