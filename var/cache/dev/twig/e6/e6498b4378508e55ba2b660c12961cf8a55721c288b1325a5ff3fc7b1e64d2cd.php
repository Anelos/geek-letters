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
        $__internal_0c57d742280f112d22f7c3ab61a44a6f75b8b183b677c8063b06e4b51c46a3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c57d742280f112d22f7c3ab61a44a6f75b8b183b677c8063b06e4b51c46a3ca->enter($__internal_0c57d742280f112d22f7c3ab61a44a6f75b8b183b677c8063b06e4b51c46a3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_731c56c022557264bfbee63d0cf8ff665a2c84ee7bef20ea32ce577291ac8519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_731c56c022557264bfbee63d0cf8ff665a2c84ee7bef20ea32ce577291ac8519->enter($__internal_731c56c022557264bfbee63d0cf8ff665a2c84ee7bef20ea32ce577291ac8519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0c57d742280f112d22f7c3ab61a44a6f75b8b183b677c8063b06e4b51c46a3ca->leave($__internal_0c57d742280f112d22f7c3ab61a44a6f75b8b183b677c8063b06e4b51c46a3ca_prof);

        
        $__internal_731c56c022557264bfbee63d0cf8ff665a2c84ee7bef20ea32ce577291ac8519->leave($__internal_731c56c022557264bfbee63d0cf8ff665a2c84ee7bef20ea32ce577291ac8519_prof);

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
