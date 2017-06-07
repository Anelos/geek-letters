<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_5fcbe08e9f98ddfa4b37c5367deb0494f6e0f7331a7b33c3b9025faa7a1335b4 extends Twig_Template
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
        $__internal_71183235f710a4d57b618ff239b67dc5921a438221d81988e8735954d0720b96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71183235f710a4d57b618ff239b67dc5921a438221d81988e8735954d0720b96->enter($__internal_71183235f710a4d57b618ff239b67dc5921a438221d81988e8735954d0720b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_3c99d8ce10830557a8d80a3450371c3767cc745fef2bfd22c93c8e5e300b6602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c99d8ce10830557a8d80a3450371c3767cc745fef2bfd22c93c8e5e300b6602->enter($__internal_3c99d8ce10830557a8d80a3450371c3767cc745fef2bfd22c93c8e5e300b6602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_71183235f710a4d57b618ff239b67dc5921a438221d81988e8735954d0720b96->leave($__internal_71183235f710a4d57b618ff239b67dc5921a438221d81988e8735954d0720b96_prof);

        
        $__internal_3c99d8ce10830557a8d80a3450371c3767cc745fef2bfd22c93c8e5e300b6602->leave($__internal_3c99d8ce10830557a8d80a3450371c3767cc745fef2bfd22c93c8e5e300b6602_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
