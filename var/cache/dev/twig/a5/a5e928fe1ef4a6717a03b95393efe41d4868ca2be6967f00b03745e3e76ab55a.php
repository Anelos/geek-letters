<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5e3110d354846dc19d79cd73eb22c60e824a690458ec2d085a84bd804c7bf7de extends Twig_Template
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
        $__internal_9c5ea800f240264adb2a05f8a0519ccd052cf947712e8641426f59a62371e97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5ea800f240264adb2a05f8a0519ccd052cf947712e8641426f59a62371e97a->enter($__internal_9c5ea800f240264adb2a05f8a0519ccd052cf947712e8641426f59a62371e97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_eb416ff175792e892dfb8cde752ec412a84c8ffbfa9fb0dad2ad90e2c0266b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb416ff175792e892dfb8cde752ec412a84c8ffbfa9fb0dad2ad90e2c0266b28->enter($__internal_eb416ff175792e892dfb8cde752ec412a84c8ffbfa9fb0dad2ad90e2c0266b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_9c5ea800f240264adb2a05f8a0519ccd052cf947712e8641426f59a62371e97a->leave($__internal_9c5ea800f240264adb2a05f8a0519ccd052cf947712e8641426f59a62371e97a_prof);

        
        $__internal_eb416ff175792e892dfb8cde752ec412a84c8ffbfa9fb0dad2ad90e2c0266b28->leave($__internal_eb416ff175792e892dfb8cde752ec412a84c8ffbfa9fb0dad2ad90e2c0266b28_prof);

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
