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
        $__internal_9b58587dd28e038ceadb276aadcbad717ec04bbfdc447fa2b221a055f0a3d895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b58587dd28e038ceadb276aadcbad717ec04bbfdc447fa2b221a055f0a3d895->enter($__internal_9b58587dd28e038ceadb276aadcbad717ec04bbfdc447fa2b221a055f0a3d895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_4ef288bc843995745033d9f3c4ed9a70ebd1df9dd31e390deb66cc8e112d988d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef288bc843995745033d9f3c4ed9a70ebd1df9dd31e390deb66cc8e112d988d->enter($__internal_4ef288bc843995745033d9f3c4ed9a70ebd1df9dd31e390deb66cc8e112d988d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9b58587dd28e038ceadb276aadcbad717ec04bbfdc447fa2b221a055f0a3d895->leave($__internal_9b58587dd28e038ceadb276aadcbad717ec04bbfdc447fa2b221a055f0a3d895_prof);

        
        $__internal_4ef288bc843995745033d9f3c4ed9a70ebd1df9dd31e390deb66cc8e112d988d->leave($__internal_4ef288bc843995745033d9f3c4ed9a70ebd1df9dd31e390deb66cc8e112d988d_prof);

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
