<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3afd48f6be7d04a5e5c88ecb25fa9a4dcbec9d867bfe5995fcbaa6f173f147d5 extends Twig_Template
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
        $__internal_5d1612714d3b48ae16c6388717c810ebbedd950dfd7053271d8c4b9d050fd0ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1612714d3b48ae16c6388717c810ebbedd950dfd7053271d8c4b9d050fd0ab->enter($__internal_5d1612714d3b48ae16c6388717c810ebbedd950dfd7053271d8c4b9d050fd0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_785f4a8d556d56624c751e57277a2a6f5e0cef504379c30320728871064c3f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785f4a8d556d56624c751e57277a2a6f5e0cef504379c30320728871064c3f35->enter($__internal_785f4a8d556d56624c751e57277a2a6f5e0cef504379c30320728871064c3f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5d1612714d3b48ae16c6388717c810ebbedd950dfd7053271d8c4b9d050fd0ab->leave($__internal_5d1612714d3b48ae16c6388717c810ebbedd950dfd7053271d8c4b9d050fd0ab_prof);

        
        $__internal_785f4a8d556d56624c751e57277a2a6f5e0cef504379c30320728871064c3f35->leave($__internal_785f4a8d556d56624c751e57277a2a6f5e0cef504379c30320728871064c3f35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
