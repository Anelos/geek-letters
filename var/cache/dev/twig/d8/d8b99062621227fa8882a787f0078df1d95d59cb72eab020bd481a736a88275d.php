<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0e4f0df718eeb5177c0afa753a300770f4ecf7c466261e6ac4df409817b3b7b3 extends Twig_Template
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
        $__internal_0972d38cde3191bc528cfa814f859a91b8b91f32047e3f07fe8a5547c1e16625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0972d38cde3191bc528cfa814f859a91b8b91f32047e3f07fe8a5547c1e16625->enter($__internal_0972d38cde3191bc528cfa814f859a91b8b91f32047e3f07fe8a5547c1e16625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ef4c164ce112df6b04160b54e2d7fd9298b7a96f05a71b4e25ba921c60b87a80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4c164ce112df6b04160b54e2d7fd9298b7a96f05a71b4e25ba921c60b87a80->enter($__internal_ef4c164ce112df6b04160b54e2d7fd9298b7a96f05a71b4e25ba921c60b87a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0972d38cde3191bc528cfa814f859a91b8b91f32047e3f07fe8a5547c1e16625->leave($__internal_0972d38cde3191bc528cfa814f859a91b8b91f32047e3f07fe8a5547c1e16625_prof);

        
        $__internal_ef4c164ce112df6b04160b54e2d7fd9298b7a96f05a71b4e25ba921c60b87a80->leave($__internal_ef4c164ce112df6b04160b54e2d7fd9298b7a96f05a71b4e25ba921c60b87a80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
