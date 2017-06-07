<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_92b0c3511f5a4cf454ca901ef2be6356c815da6e1b7c1494a1544cb8bc844a6c extends Twig_Template
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
        $__internal_00df6d914f6619c2660b456c505652c28929253a3aef09f00add657808d59546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00df6d914f6619c2660b456c505652c28929253a3aef09f00add657808d59546->enter($__internal_00df6d914f6619c2660b456c505652c28929253a3aef09f00add657808d59546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_cd092b2fced50b84522df2853cf8da66ef1127ff6a77ee7ff98cdb1ff462db92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd092b2fced50b84522df2853cf8da66ef1127ff6a77ee7ff98cdb1ff462db92->enter($__internal_cd092b2fced50b84522df2853cf8da66ef1127ff6a77ee7ff98cdb1ff462db92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_00df6d914f6619c2660b456c505652c28929253a3aef09f00add657808d59546->leave($__internal_00df6d914f6619c2660b456c505652c28929253a3aef09f00add657808d59546_prof);

        
        $__internal_cd092b2fced50b84522df2853cf8da66ef1127ff6a77ee7ff98cdb1ff462db92->leave($__internal_cd092b2fced50b84522df2853cf8da66ef1127ff6a77ee7ff98cdb1ff462db92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
