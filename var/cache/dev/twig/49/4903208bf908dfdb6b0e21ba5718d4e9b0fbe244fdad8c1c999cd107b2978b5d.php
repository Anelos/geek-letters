<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4b1a6bed0885fa0b896b2f84d4358676ed2f902c07d8e87e2bab486e77f6bf41 extends Twig_Template
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
        $__internal_a3ddcebc1c1331058954502ded8468ccc35b3f83c830ddc2b63d8427a359497a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ddcebc1c1331058954502ded8468ccc35b3f83c830ddc2b63d8427a359497a->enter($__internal_a3ddcebc1c1331058954502ded8468ccc35b3f83c830ddc2b63d8427a359497a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2a662326c4870153955c22073952f74de88c9c1383d85d979f21e5ed500a3a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a662326c4870153955c22073952f74de88c9c1383d85d979f21e5ed500a3a18->enter($__internal_2a662326c4870153955c22073952f74de88c9c1383d85d979f21e5ed500a3a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a3ddcebc1c1331058954502ded8468ccc35b3f83c830ddc2b63d8427a359497a->leave($__internal_a3ddcebc1c1331058954502ded8468ccc35b3f83c830ddc2b63d8427a359497a_prof);

        
        $__internal_2a662326c4870153955c22073952f74de88c9c1383d85d979f21e5ed500a3a18->leave($__internal_2a662326c4870153955c22073952f74de88c9c1383d85d979f21e5ed500a3a18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
