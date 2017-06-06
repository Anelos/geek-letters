<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3f16afcfa359626d5f18bda46640562a8049e8c9c3b624bc4965271e53aff4fe extends Twig_Template
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
        $__internal_166f70dd41a14f9d58c5a6596eccef16531721ce59e892af1867fc6b6db81db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166f70dd41a14f9d58c5a6596eccef16531721ce59e892af1867fc6b6db81db9->enter($__internal_166f70dd41a14f9d58c5a6596eccef16531721ce59e892af1867fc6b6db81db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c3820ea05cdef483415ad7fb7f4c6e8598b5095342e1d6c78aa668af76697edf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3820ea05cdef483415ad7fb7f4c6e8598b5095342e1d6c78aa668af76697edf->enter($__internal_c3820ea05cdef483415ad7fb7f4c6e8598b5095342e1d6c78aa668af76697edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_166f70dd41a14f9d58c5a6596eccef16531721ce59e892af1867fc6b6db81db9->leave($__internal_166f70dd41a14f9d58c5a6596eccef16531721ce59e892af1867fc6b6db81db9_prof);

        
        $__internal_c3820ea05cdef483415ad7fb7f4c6e8598b5095342e1d6c78aa668af76697edf->leave($__internal_c3820ea05cdef483415ad7fb7f4c6e8598b5095342e1d6c78aa668af76697edf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
