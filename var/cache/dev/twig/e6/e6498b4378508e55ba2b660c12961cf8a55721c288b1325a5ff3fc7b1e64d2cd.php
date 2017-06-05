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
        $__internal_a1e759728b84517e7e997d67973fc554c2301c4addf7cd95bf3b2f569e9befc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e759728b84517e7e997d67973fc554c2301c4addf7cd95bf3b2f569e9befc9->enter($__internal_a1e759728b84517e7e997d67973fc554c2301c4addf7cd95bf3b2f569e9befc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_af86f2ef81c5c08925c2129495d49f73ceb6c2672edf826f65b77582c8427081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af86f2ef81c5c08925c2129495d49f73ceb6c2672edf826f65b77582c8427081->enter($__internal_af86f2ef81c5c08925c2129495d49f73ceb6c2672edf826f65b77582c8427081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a1e759728b84517e7e997d67973fc554c2301c4addf7cd95bf3b2f569e9befc9->leave($__internal_a1e759728b84517e7e997d67973fc554c2301c4addf7cd95bf3b2f569e9befc9_prof);

        
        $__internal_af86f2ef81c5c08925c2129495d49f73ceb6c2672edf826f65b77582c8427081->leave($__internal_af86f2ef81c5c08925c2129495d49f73ceb6c2672edf826f65b77582c8427081_prof);

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
