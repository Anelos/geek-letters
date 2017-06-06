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
        $__internal_cbed6557c981bb81da4e286ef41da5eebfb8163fd97d99a8a940f2b7d9a9e634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbed6557c981bb81da4e286ef41da5eebfb8163fd97d99a8a940f2b7d9a9e634->enter($__internal_cbed6557c981bb81da4e286ef41da5eebfb8163fd97d99a8a940f2b7d9a9e634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_19f8dd53a2801f34071492011ad80db535cdfeb26c1a620b6bc2aeca9a924af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f8dd53a2801f34071492011ad80db535cdfeb26c1a620b6bc2aeca9a924af2->enter($__internal_19f8dd53a2801f34071492011ad80db535cdfeb26c1a620b6bc2aeca9a924af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_cbed6557c981bb81da4e286ef41da5eebfb8163fd97d99a8a940f2b7d9a9e634->leave($__internal_cbed6557c981bb81da4e286ef41da5eebfb8163fd97d99a8a940f2b7d9a9e634_prof);

        
        $__internal_19f8dd53a2801f34071492011ad80db535cdfeb26c1a620b6bc2aeca9a924af2->leave($__internal_19f8dd53a2801f34071492011ad80db535cdfeb26c1a620b6bc2aeca9a924af2_prof);

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
