<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6f979e85f3bf05cee691c9008ffa642042ef93ed749fae06def094633d9abece extends Twig_Template
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
        $__internal_f3f0d29dc2afdcb65ee2952477d5d0437fab2761ca3777f510940d1c7b38fa61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f0d29dc2afdcb65ee2952477d5d0437fab2761ca3777f510940d1c7b38fa61->enter($__internal_f3f0d29dc2afdcb65ee2952477d5d0437fab2761ca3777f510940d1c7b38fa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c8f49d7dfb66984a9330417cbd605f4a32d54488919ca55aa2f20b5e74cb68e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f49d7dfb66984a9330417cbd605f4a32d54488919ca55aa2f20b5e74cb68e9->enter($__internal_c8f49d7dfb66984a9330417cbd605f4a32d54488919ca55aa2f20b5e74cb68e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_f3f0d29dc2afdcb65ee2952477d5d0437fab2761ca3777f510940d1c7b38fa61->leave($__internal_f3f0d29dc2afdcb65ee2952477d5d0437fab2761ca3777f510940d1c7b38fa61_prof);

        
        $__internal_c8f49d7dfb66984a9330417cbd605f4a32d54488919ca55aa2f20b5e74cb68e9->leave($__internal_c8f49d7dfb66984a9330417cbd605f4a32d54488919ca55aa2f20b5e74cb68e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
