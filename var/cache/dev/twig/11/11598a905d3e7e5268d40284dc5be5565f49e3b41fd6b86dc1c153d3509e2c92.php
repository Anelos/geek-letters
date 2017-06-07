<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6810afb0c073e20b26b199c1d13ca7b0660c71595a6a794488a297d89ffd5233 extends Twig_Template
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
        $__internal_05554de6eae4aa0d5a3cc4718520c51ec4e8be46e4a644227febb977b101e131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05554de6eae4aa0d5a3cc4718520c51ec4e8be46e4a644227febb977b101e131->enter($__internal_05554de6eae4aa0d5a3cc4718520c51ec4e8be46e4a644227febb977b101e131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d8b51b48c102384e2f7d0b75dd0631a25140a4ac486bca70f10f32932ea7010e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b51b48c102384e2f7d0b75dd0631a25140a4ac486bca70f10f32932ea7010e->enter($__internal_d8b51b48c102384e2f7d0b75dd0631a25140a4ac486bca70f10f32932ea7010e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_05554de6eae4aa0d5a3cc4718520c51ec4e8be46e4a644227febb977b101e131->leave($__internal_05554de6eae4aa0d5a3cc4718520c51ec4e8be46e4a644227febb977b101e131_prof);

        
        $__internal_d8b51b48c102384e2f7d0b75dd0631a25140a4ac486bca70f10f32932ea7010e->leave($__internal_d8b51b48c102384e2f7d0b75dd0631a25140a4ac486bca70f10f32932ea7010e_prof);

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
