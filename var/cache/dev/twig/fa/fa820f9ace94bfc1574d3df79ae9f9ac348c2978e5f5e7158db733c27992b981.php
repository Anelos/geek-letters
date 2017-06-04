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
        $__internal_589ffb0e6d72e02b9d5c57a22c61348afc99a324e22ff9bcfe32d43abd3eb20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589ffb0e6d72e02b9d5c57a22c61348afc99a324e22ff9bcfe32d43abd3eb20b->enter($__internal_589ffb0e6d72e02b9d5c57a22c61348afc99a324e22ff9bcfe32d43abd3eb20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2408171a0d2e2af1a62fea3144087fe0ce1229869a578a42a7a32353adaf9207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2408171a0d2e2af1a62fea3144087fe0ce1229869a578a42a7a32353adaf9207->enter($__internal_2408171a0d2e2af1a62fea3144087fe0ce1229869a578a42a7a32353adaf9207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_589ffb0e6d72e02b9d5c57a22c61348afc99a324e22ff9bcfe32d43abd3eb20b->leave($__internal_589ffb0e6d72e02b9d5c57a22c61348afc99a324e22ff9bcfe32d43abd3eb20b_prof);

        
        $__internal_2408171a0d2e2af1a62fea3144087fe0ce1229869a578a42a7a32353adaf9207->leave($__internal_2408171a0d2e2af1a62fea3144087fe0ce1229869a578a42a7a32353adaf9207_prof);

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
