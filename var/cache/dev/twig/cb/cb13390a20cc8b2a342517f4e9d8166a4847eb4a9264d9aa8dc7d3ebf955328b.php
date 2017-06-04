<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_5411f7c4dc4b95d1641ac1803645f7011debfa2f41475392286399b45439e60f extends Twig_Template
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
        $__internal_07c27f077702b53a2ed9c66dc4f8944d2f979275e699813e5aca15bb4f9e9cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c27f077702b53a2ed9c66dc4f8944d2f979275e699813e5aca15bb4f9e9cf0->enter($__internal_07c27f077702b53a2ed9c66dc4f8944d2f979275e699813e5aca15bb4f9e9cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3ea19ff6cb66107f86b4b929a1ebe5af6d336e53fa2b35bfcdc7b9c70c43480d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea19ff6cb66107f86b4b929a1ebe5af6d336e53fa2b35bfcdc7b9c70c43480d->enter($__internal_3ea19ff6cb66107f86b4b929a1ebe5af6d336e53fa2b35bfcdc7b9c70c43480d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_07c27f077702b53a2ed9c66dc4f8944d2f979275e699813e5aca15bb4f9e9cf0->leave($__internal_07c27f077702b53a2ed9c66dc4f8944d2f979275e699813e5aca15bb4f9e9cf0_prof);

        
        $__internal_3ea19ff6cb66107f86b4b929a1ebe5af6d336e53fa2b35bfcdc7b9c70c43480d->leave($__internal_3ea19ff6cb66107f86b4b929a1ebe5af6d336e53fa2b35bfcdc7b9c70c43480d_prof);

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
