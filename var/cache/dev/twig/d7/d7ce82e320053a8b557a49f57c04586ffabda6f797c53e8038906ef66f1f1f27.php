<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d683859c7560b442e8aea54cdb9a03dd71fa25e8b2d3454234ca7d8b599d0358 extends Twig_Template
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
        $__internal_224a07051b131d41970359354b37a65fd6f12e864f07eef1adbd30a0137acc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224a07051b131d41970359354b37a65fd6f12e864f07eef1adbd30a0137acc86->enter($__internal_224a07051b131d41970359354b37a65fd6f12e864f07eef1adbd30a0137acc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_bb0010cc9c9ff81b892f1be53c160d7c34c9277e9d69ff38eda47d9e89e3a4ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0010cc9c9ff81b892f1be53c160d7c34c9277e9d69ff38eda47d9e89e3a4ce->enter($__internal_bb0010cc9c9ff81b892f1be53c160d7c34c9277e9d69ff38eda47d9e89e3a4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_224a07051b131d41970359354b37a65fd6f12e864f07eef1adbd30a0137acc86->leave($__internal_224a07051b131d41970359354b37a65fd6f12e864f07eef1adbd30a0137acc86_prof);

        
        $__internal_bb0010cc9c9ff81b892f1be53c160d7c34c9277e9d69ff38eda47d9e89e3a4ce->leave($__internal_bb0010cc9c9ff81b892f1be53c160d7c34c9277e9d69ff38eda47d9e89e3a4ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
