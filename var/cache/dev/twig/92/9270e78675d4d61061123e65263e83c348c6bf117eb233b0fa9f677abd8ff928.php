<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7f8c555c95deed70110feca5509f50db3c292f6c2f0cbdc8c44536125eddd019 extends Twig_Template
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
        $__internal_a6aecedfdbb8828f57c92f3264d74088e52d04bedd276a4cd6ac8826badf941b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6aecedfdbb8828f57c92f3264d74088e52d04bedd276a4cd6ac8826badf941b->enter($__internal_a6aecedfdbb8828f57c92f3264d74088e52d04bedd276a4cd6ac8826badf941b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2b41b75f7d574810f7b1235d305eb1ff331a45ea25740e18bca31831237a41b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b41b75f7d574810f7b1235d305eb1ff331a45ea25740e18bca31831237a41b2->enter($__internal_2b41b75f7d574810f7b1235d305eb1ff331a45ea25740e18bca31831237a41b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a6aecedfdbb8828f57c92f3264d74088e52d04bedd276a4cd6ac8826badf941b->leave($__internal_a6aecedfdbb8828f57c92f3264d74088e52d04bedd276a4cd6ac8826badf941b_prof);

        
        $__internal_2b41b75f7d574810f7b1235d305eb1ff331a45ea25740e18bca31831237a41b2->leave($__internal_2b41b75f7d574810f7b1235d305eb1ff331a45ea25740e18bca31831237a41b2_prof);

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
