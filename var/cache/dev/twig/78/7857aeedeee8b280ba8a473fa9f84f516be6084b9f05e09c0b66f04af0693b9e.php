<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f39df258fd15b7cc74bdd00137d4cf971900f9101d04284c6e6c5bb145106488 extends Twig_Template
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
        $__internal_87188ab9a249ae2b296703aa064a225761121e63750f1405a6bb9a730ec45497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87188ab9a249ae2b296703aa064a225761121e63750f1405a6bb9a730ec45497->enter($__internal_87188ab9a249ae2b296703aa064a225761121e63750f1405a6bb9a730ec45497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_07adf27ff3e6580724da6eb3b6e0c25d193d1cb2ce6fd9f82516a05c88795c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07adf27ff3e6580724da6eb3b6e0c25d193d1cb2ce6fd9f82516a05c88795c3e->enter($__internal_07adf27ff3e6580724da6eb3b6e0c25d193d1cb2ce6fd9f82516a05c88795c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_87188ab9a249ae2b296703aa064a225761121e63750f1405a6bb9a730ec45497->leave($__internal_87188ab9a249ae2b296703aa064a225761121e63750f1405a6bb9a730ec45497_prof);

        
        $__internal_07adf27ff3e6580724da6eb3b6e0c25d193d1cb2ce6fd9f82516a05c88795c3e->leave($__internal_07adf27ff3e6580724da6eb3b6e0c25d193d1cb2ce6fd9f82516a05c88795c3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
