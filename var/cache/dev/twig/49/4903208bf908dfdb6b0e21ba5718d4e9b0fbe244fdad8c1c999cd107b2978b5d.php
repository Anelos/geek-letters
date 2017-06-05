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
        $__internal_16529d29c9d2f92ffd184cd366b892eed281e38e71371afb360dc6a0f2423bc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16529d29c9d2f92ffd184cd366b892eed281e38e71371afb360dc6a0f2423bc1->enter($__internal_16529d29c9d2f92ffd184cd366b892eed281e38e71371afb360dc6a0f2423bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b449b5fac66dd38f85dc759516507e83d349ea572d9aa2958377444929243dd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b449b5fac66dd38f85dc759516507e83d349ea572d9aa2958377444929243dd9->enter($__internal_b449b5fac66dd38f85dc759516507e83d349ea572d9aa2958377444929243dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_16529d29c9d2f92ffd184cd366b892eed281e38e71371afb360dc6a0f2423bc1->leave($__internal_16529d29c9d2f92ffd184cd366b892eed281e38e71371afb360dc6a0f2423bc1_prof);

        
        $__internal_b449b5fac66dd38f85dc759516507e83d349ea572d9aa2958377444929243dd9->leave($__internal_b449b5fac66dd38f85dc759516507e83d349ea572d9aa2958377444929243dd9_prof);

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
