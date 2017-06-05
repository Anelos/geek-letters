<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3138da35c99c733a629155725688076bcf13810b7ca23fa36c9b108ea4aa5ab2 extends Twig_Template
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
        $__internal_a72639a65f0d357df9931f018ebcb87e6b3e9a0c67069610aec7bddd16148489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72639a65f0d357df9931f018ebcb87e6b3e9a0c67069610aec7bddd16148489->enter($__internal_a72639a65f0d357df9931f018ebcb87e6b3e9a0c67069610aec7bddd16148489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c7d32e1451bd50264424c7b830f07142e05379f95e7da6767a56d697382fda22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d32e1451bd50264424c7b830f07142e05379f95e7da6767a56d697382fda22->enter($__internal_c7d32e1451bd50264424c7b830f07142e05379f95e7da6767a56d697382fda22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a72639a65f0d357df9931f018ebcb87e6b3e9a0c67069610aec7bddd16148489->leave($__internal_a72639a65f0d357df9931f018ebcb87e6b3e9a0c67069610aec7bddd16148489_prof);

        
        $__internal_c7d32e1451bd50264424c7b830f07142e05379f95e7da6767a56d697382fda22->leave($__internal_c7d32e1451bd50264424c7b830f07142e05379f95e7da6767a56d697382fda22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
