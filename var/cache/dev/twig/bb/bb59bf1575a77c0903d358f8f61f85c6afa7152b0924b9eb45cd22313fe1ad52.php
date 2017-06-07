<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_bc125c8b45124bca095f757ffa27ac4400e6b39a92fbcec8d3be400b64897a35 extends Twig_Template
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
        $__internal_e0ffbe82486c22830a072e2ea4eef0a0dabbf66682bf3e1f41616f107de6e2d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ffbe82486c22830a072e2ea4eef0a0dabbf66682bf3e1f41616f107de6e2d9->enter($__internal_e0ffbe82486c22830a072e2ea4eef0a0dabbf66682bf3e1f41616f107de6e2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9f3522fc358f7b8938143a0003a63d87d970ef13a8717203ac4e70301d25cfe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3522fc358f7b8938143a0003a63d87d970ef13a8717203ac4e70301d25cfe1->enter($__internal_9f3522fc358f7b8938143a0003a63d87d970ef13a8717203ac4e70301d25cfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e0ffbe82486c22830a072e2ea4eef0a0dabbf66682bf3e1f41616f107de6e2d9->leave($__internal_e0ffbe82486c22830a072e2ea4eef0a0dabbf66682bf3e1f41616f107de6e2d9_prof);

        
        $__internal_9f3522fc358f7b8938143a0003a63d87d970ef13a8717203ac4e70301d25cfe1->leave($__internal_9f3522fc358f7b8938143a0003a63d87d970ef13a8717203ac4e70301d25cfe1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
