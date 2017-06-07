<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_d01ea52c4908adac7f5a9e0110642ee032681092b659789f10c1968a949dd07b extends Twig_Template
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
        $__internal_1489e9a04de5a1ce0fdfd03ff771e7a259c1408278f63edb75ace4a68c6fcb5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1489e9a04de5a1ce0fdfd03ff771e7a259c1408278f63edb75ace4a68c6fcb5e->enter($__internal_1489e9a04de5a1ce0fdfd03ff771e7a259c1408278f63edb75ace4a68c6fcb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0d24cffa9f039ffd7c8cd335bac13ec770de138bf30cce2a8031a6b97c8451e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d24cffa9f039ffd7c8cd335bac13ec770de138bf30cce2a8031a6b97c8451e6->enter($__internal_0d24cffa9f039ffd7c8cd335bac13ec770de138bf30cce2a8031a6b97c8451e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_1489e9a04de5a1ce0fdfd03ff771e7a259c1408278f63edb75ace4a68c6fcb5e->leave($__internal_1489e9a04de5a1ce0fdfd03ff771e7a259c1408278f63edb75ace4a68c6fcb5e_prof);

        
        $__internal_0d24cffa9f039ffd7c8cd335bac13ec770de138bf30cce2a8031a6b97c8451e6->leave($__internal_0d24cffa9f039ffd7c8cd335bac13ec770de138bf30cce2a8031a6b97c8451e6_prof);

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
