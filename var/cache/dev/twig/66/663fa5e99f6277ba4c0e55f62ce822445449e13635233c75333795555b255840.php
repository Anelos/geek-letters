<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b00cc8f60716256871184ea783f84bc8c83f6242093d9568c4761a2a5b440e5b extends Twig_Template
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
        $__internal_2b40089b1a4ed774f984f3bcf6e7e93f1e3bda3667e788e4c8ca5269d02ff9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b40089b1a4ed774f984f3bcf6e7e93f1e3bda3667e788e4c8ca5269d02ff9d2->enter($__internal_2b40089b1a4ed774f984f3bcf6e7e93f1e3bda3667e788e4c8ca5269d02ff9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_7ec5514c6afbd9f98d88c5c4bfd079594ce3583b6d10a1a41aa12b7668531613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec5514c6afbd9f98d88c5c4bfd079594ce3583b6d10a1a41aa12b7668531613->enter($__internal_7ec5514c6afbd9f98d88c5c4bfd079594ce3583b6d10a1a41aa12b7668531613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2b40089b1a4ed774f984f3bcf6e7e93f1e3bda3667e788e4c8ca5269d02ff9d2->leave($__internal_2b40089b1a4ed774f984f3bcf6e7e93f1e3bda3667e788e4c8ca5269d02ff9d2_prof);

        
        $__internal_7ec5514c6afbd9f98d88c5c4bfd079594ce3583b6d10a1a41aa12b7668531613->leave($__internal_7ec5514c6afbd9f98d88c5c4bfd079594ce3583b6d10a1a41aa12b7668531613_prof);

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
