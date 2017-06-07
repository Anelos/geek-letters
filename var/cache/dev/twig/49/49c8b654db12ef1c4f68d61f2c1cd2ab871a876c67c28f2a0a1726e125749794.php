<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_374083df685048e15c6678db05dca372beeeae832e8c23b83ab3f4848fa9de15 extends Twig_Template
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
        $__internal_c2c1f2101c714949246031459feb86391d4b06eeda96f76c5ec6254a75a4facf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c1f2101c714949246031459feb86391d4b06eeda96f76c5ec6254a75a4facf->enter($__internal_c2c1f2101c714949246031459feb86391d4b06eeda96f76c5ec6254a75a4facf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6572da47f9ea832e8675db1aa70983686d1d953d9356b946da81cf39147a7900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6572da47f9ea832e8675db1aa70983686d1d953d9356b946da81cf39147a7900->enter($__internal_6572da47f9ea832e8675db1aa70983686d1d953d9356b946da81cf39147a7900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c2c1f2101c714949246031459feb86391d4b06eeda96f76c5ec6254a75a4facf->leave($__internal_c2c1f2101c714949246031459feb86391d4b06eeda96f76c5ec6254a75a4facf_prof);

        
        $__internal_6572da47f9ea832e8675db1aa70983686d1d953d9356b946da81cf39147a7900->leave($__internal_6572da47f9ea832e8675db1aa70983686d1d953d9356b946da81cf39147a7900_prof);

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
