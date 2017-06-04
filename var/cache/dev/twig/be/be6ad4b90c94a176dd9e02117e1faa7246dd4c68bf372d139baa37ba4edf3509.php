<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_39465feefd9a341a5690bf7b00f627a8069f1333eee80d0db0cb4e0dd36904d1 extends Twig_Template
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
        $__internal_10b78e68236d03967468171454d37e81fb0fe54cc7425e61da6f9e2031f1a978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b78e68236d03967468171454d37e81fb0fe54cc7425e61da6f9e2031f1a978->enter($__internal_10b78e68236d03967468171454d37e81fb0fe54cc7425e61da6f9e2031f1a978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e9a4557b03b8b1c320e2a468dba8f6f107e186851c8e58caedadb62f487feacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a4557b03b8b1c320e2a468dba8f6f107e186851c8e58caedadb62f487feacc->enter($__internal_e9a4557b03b8b1c320e2a468dba8f6f107e186851c8e58caedadb62f487feacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_10b78e68236d03967468171454d37e81fb0fe54cc7425e61da6f9e2031f1a978->leave($__internal_10b78e68236d03967468171454d37e81fb0fe54cc7425e61da6f9e2031f1a978_prof);

        
        $__internal_e9a4557b03b8b1c320e2a468dba8f6f107e186851c8e58caedadb62f487feacc->leave($__internal_e9a4557b03b8b1c320e2a468dba8f6f107e186851c8e58caedadb62f487feacc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
