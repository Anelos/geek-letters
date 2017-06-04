<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0e4f0df718eeb5177c0afa753a300770f4ecf7c466261e6ac4df409817b3b7b3 extends Twig_Template
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
        $__internal_204914e1c7083161f94ef86936739579da3c8461b7e6e5707f83d74c1ebd9770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204914e1c7083161f94ef86936739579da3c8461b7e6e5707f83d74c1ebd9770->enter($__internal_204914e1c7083161f94ef86936739579da3c8461b7e6e5707f83d74c1ebd9770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9c76862ae12e03bf25397756cfb54087df6c3a00e5d6df7ca79ddb8eca15404c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c76862ae12e03bf25397756cfb54087df6c3a00e5d6df7ca79ddb8eca15404c->enter($__internal_9c76862ae12e03bf25397756cfb54087df6c3a00e5d6df7ca79ddb8eca15404c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_204914e1c7083161f94ef86936739579da3c8461b7e6e5707f83d74c1ebd9770->leave($__internal_204914e1c7083161f94ef86936739579da3c8461b7e6e5707f83d74c1ebd9770_prof);

        
        $__internal_9c76862ae12e03bf25397756cfb54087df6c3a00e5d6df7ca79ddb8eca15404c->leave($__internal_9c76862ae12e03bf25397756cfb54087df6c3a00e5d6df7ca79ddb8eca15404c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
