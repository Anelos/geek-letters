<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_782970f3543cc37d19def6867e64f436435eb183e99a263524adbc086ad212f1 extends Twig_Template
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
        $__internal_c06891dbd9544fbfa9d55ba55a5144c25367070493fd64eaf0c72b20f8d7665e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06891dbd9544fbfa9d55ba55a5144c25367070493fd64eaf0c72b20f8d7665e->enter($__internal_c06891dbd9544fbfa9d55ba55a5144c25367070493fd64eaf0c72b20f8d7665e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_22cb3d15a6a8f621f13b0cc455240bb5ff9cd263046bc4791e058b61cff9da19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cb3d15a6a8f621f13b0cc455240bb5ff9cd263046bc4791e058b61cff9da19->enter($__internal_22cb3d15a6a8f621f13b0cc455240bb5ff9cd263046bc4791e058b61cff9da19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c06891dbd9544fbfa9d55ba55a5144c25367070493fd64eaf0c72b20f8d7665e->leave($__internal_c06891dbd9544fbfa9d55ba55a5144c25367070493fd64eaf0c72b20f8d7665e_prof);

        
        $__internal_22cb3d15a6a8f621f13b0cc455240bb5ff9cd263046bc4791e058b61cff9da19->leave($__internal_22cb3d15a6a8f621f13b0cc455240bb5ff9cd263046bc4791e058b61cff9da19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
