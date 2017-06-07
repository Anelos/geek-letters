<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_81a9d09cf44556e78e162bd8933ea359fbe1ffb61177e1d9dba65186d61dd989 extends Twig_Template
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
        $__internal_08b5eb29bf971d295583e03d548fc73ebdbbac412fa16f4e1f7a8bfb1d998968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b5eb29bf971d295583e03d548fc73ebdbbac412fa16f4e1f7a8bfb1d998968->enter($__internal_08b5eb29bf971d295583e03d548fc73ebdbbac412fa16f4e1f7a8bfb1d998968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3863b75f3379f7f0716d4b6da17c373f5983a6f3f86fb66dd538a3ba10b3ee7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3863b75f3379f7f0716d4b6da17c373f5983a6f3f86fb66dd538a3ba10b3ee7f->enter($__internal_3863b75f3379f7f0716d4b6da17c373f5983a6f3f86fb66dd538a3ba10b3ee7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_08b5eb29bf971d295583e03d548fc73ebdbbac412fa16f4e1f7a8bfb1d998968->leave($__internal_08b5eb29bf971d295583e03d548fc73ebdbbac412fa16f4e1f7a8bfb1d998968_prof);

        
        $__internal_3863b75f3379f7f0716d4b6da17c373f5983a6f3f86fb66dd538a3ba10b3ee7f->leave($__internal_3863b75f3379f7f0716d4b6da17c373f5983a6f3f86fb66dd538a3ba10b3ee7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
