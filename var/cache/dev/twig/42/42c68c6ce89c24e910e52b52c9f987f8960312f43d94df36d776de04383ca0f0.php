<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_75e16b93f05bdfc6454fbe6989774dd3cefc1d2703a8240890f17863b2decda4 extends Twig_Template
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
        $__internal_b15a0357d8ebe08d4382400d676bd8f654bd402122baf46edbe677c0de0dae9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b15a0357d8ebe08d4382400d676bd8f654bd402122baf46edbe677c0de0dae9f->enter($__internal_b15a0357d8ebe08d4382400d676bd8f654bd402122baf46edbe677c0de0dae9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_dd6b33cd50b42983ee27eac2f5fceeac863102d7d9c649a702240f7061c2f630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6b33cd50b42983ee27eac2f5fceeac863102d7d9c649a702240f7061c2f630->enter($__internal_dd6b33cd50b42983ee27eac2f5fceeac863102d7d9c649a702240f7061c2f630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b15a0357d8ebe08d4382400d676bd8f654bd402122baf46edbe677c0de0dae9f->leave($__internal_b15a0357d8ebe08d4382400d676bd8f654bd402122baf46edbe677c0de0dae9f_prof);

        
        $__internal_dd6b33cd50b42983ee27eac2f5fceeac863102d7d9c649a702240f7061c2f630->leave($__internal_dd6b33cd50b42983ee27eac2f5fceeac863102d7d9c649a702240f7061c2f630_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
