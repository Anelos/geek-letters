<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2d89666f38b1093530a7aa08cc459fa0aa41449ed06b15877ddb0629949ce8ec extends Twig_Template
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
        $__internal_f081ddde048920d19de15e964ca2c8099ed00b6ad8a24403f27124a4e7185d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f081ddde048920d19de15e964ca2c8099ed00b6ad8a24403f27124a4e7185d97->enter($__internal_f081ddde048920d19de15e964ca2c8099ed00b6ad8a24403f27124a4e7185d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4d77f6ac75f395546f7560514de04b60f885f96dbec1b58f3b2f911c74d1d06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d77f6ac75f395546f7560514de04b60f885f96dbec1b58f3b2f911c74d1d06c->enter($__internal_4d77f6ac75f395546f7560514de04b60f885f96dbec1b58f3b2f911c74d1d06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f081ddde048920d19de15e964ca2c8099ed00b6ad8a24403f27124a4e7185d97->leave($__internal_f081ddde048920d19de15e964ca2c8099ed00b6ad8a24403f27124a4e7185d97_prof);

        
        $__internal_4d77f6ac75f395546f7560514de04b60f885f96dbec1b58f3b2f911c74d1d06c->leave($__internal_4d77f6ac75f395546f7560514de04b60f885f96dbec1b58f3b2f911c74d1d06c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
