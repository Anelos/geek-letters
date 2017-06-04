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
        $__internal_f4721c4b7122ca185845064fd317fa63bd17b3c9bc43f3ecfe963d543f8e6b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4721c4b7122ca185845064fd317fa63bd17b3c9bc43f3ecfe963d543f8e6b86->enter($__internal_f4721c4b7122ca185845064fd317fa63bd17b3c9bc43f3ecfe963d543f8e6b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_3ba177dd6923ced04a397cdf6da1097d1840a1916fff84327228983d54ce71cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba177dd6923ced04a397cdf6da1097d1840a1916fff84327228983d54ce71cd->enter($__internal_3ba177dd6923ced04a397cdf6da1097d1840a1916fff84327228983d54ce71cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f4721c4b7122ca185845064fd317fa63bd17b3c9bc43f3ecfe963d543f8e6b86->leave($__internal_f4721c4b7122ca185845064fd317fa63bd17b3c9bc43f3ecfe963d543f8e6b86_prof);

        
        $__internal_3ba177dd6923ced04a397cdf6da1097d1840a1916fff84327228983d54ce71cd->leave($__internal_3ba177dd6923ced04a397cdf6da1097d1840a1916fff84327228983d54ce71cd_prof);

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
