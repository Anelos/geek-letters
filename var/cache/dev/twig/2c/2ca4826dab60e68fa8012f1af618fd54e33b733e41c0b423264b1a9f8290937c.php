<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_9f1d4598f1479a6955f19aceb2ffbe598f96401c3aec1d06f4e0106c35342345 extends Twig_Template
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
        $__internal_7e2eb8883e0425e37a6190941acd49b67b5508b6ec95d7bf5930156d06cbb37c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2eb8883e0425e37a6190941acd49b67b5508b6ec95d7bf5930156d06cbb37c->enter($__internal_7e2eb8883e0425e37a6190941acd49b67b5508b6ec95d7bf5930156d06cbb37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a9c5652891e786414fa8801ed82950f3295f6c574009b5670aa9cdc708be612e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c5652891e786414fa8801ed82950f3295f6c574009b5670aa9cdc708be612e->enter($__internal_a9c5652891e786414fa8801ed82950f3295f6c574009b5670aa9cdc708be612e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7e2eb8883e0425e37a6190941acd49b67b5508b6ec95d7bf5930156d06cbb37c->leave($__internal_7e2eb8883e0425e37a6190941acd49b67b5508b6ec95d7bf5930156d06cbb37c_prof);

        
        $__internal_a9c5652891e786414fa8801ed82950f3295f6c574009b5670aa9cdc708be612e->leave($__internal_a9c5652891e786414fa8801ed82950f3295f6c574009b5670aa9cdc708be612e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
