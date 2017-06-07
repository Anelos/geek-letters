<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3ae09cb2fe41a683321b92bf10d743e3e13fdba3f379e4d810161f579ced290c extends Twig_Template
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
        $__internal_b303e33227aba75127cb328a0791392eb01253f6bde625c56c237a2794a0d0b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b303e33227aba75127cb328a0791392eb01253f6bde625c56c237a2794a0d0b3->enter($__internal_b303e33227aba75127cb328a0791392eb01253f6bde625c56c237a2794a0d0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_b53bf7e929b948dae7799089d9902069a124482a49e3df7377caf7430d16ba4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53bf7e929b948dae7799089d9902069a124482a49e3df7377caf7430d16ba4e->enter($__internal_b53bf7e929b948dae7799089d9902069a124482a49e3df7377caf7430d16ba4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b303e33227aba75127cb328a0791392eb01253f6bde625c56c237a2794a0d0b3->leave($__internal_b303e33227aba75127cb328a0791392eb01253f6bde625c56c237a2794a0d0b3_prof);

        
        $__internal_b53bf7e929b948dae7799089d9902069a124482a49e3df7377caf7430d16ba4e->leave($__internal_b53bf7e929b948dae7799089d9902069a124482a49e3df7377caf7430d16ba4e_prof);

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
