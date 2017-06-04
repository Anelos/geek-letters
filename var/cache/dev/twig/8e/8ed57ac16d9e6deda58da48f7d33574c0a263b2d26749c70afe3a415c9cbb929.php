<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_70b5ec6805a52a6c6b3f23b799064ed521a09e5633a1d2f01def4cbc65638919 extends Twig_Template
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
        $__internal_639fac0882421c4b3a1d2ba96f024274abf90a4389ca05b2e8c2740df2631d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639fac0882421c4b3a1d2ba96f024274abf90a4389ca05b2e8c2740df2631d93->enter($__internal_639fac0882421c4b3a1d2ba96f024274abf90a4389ca05b2e8c2740df2631d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_145b25648c4b9902ecbdd55873042a58486475ed1698d0c3e39e9cee6153697f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145b25648c4b9902ecbdd55873042a58486475ed1698d0c3e39e9cee6153697f->enter($__internal_145b25648c4b9902ecbdd55873042a58486475ed1698d0c3e39e9cee6153697f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_639fac0882421c4b3a1d2ba96f024274abf90a4389ca05b2e8c2740df2631d93->leave($__internal_639fac0882421c4b3a1d2ba96f024274abf90a4389ca05b2e8c2740df2631d93_prof);

        
        $__internal_145b25648c4b9902ecbdd55873042a58486475ed1698d0c3e39e9cee6153697f->leave($__internal_145b25648c4b9902ecbdd55873042a58486475ed1698d0c3e39e9cee6153697f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
