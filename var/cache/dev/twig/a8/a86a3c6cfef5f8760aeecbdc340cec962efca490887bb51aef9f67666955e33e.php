<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_db442ddfc7ac11dd72d1eac2cf55ccc2702f4097eb596b7c957d62404f512234 extends Twig_Template
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
        $__internal_1bc3dafd4bf630ca9f885ddf926183b9d27759d2bb96ffae0a22f2bf6f4eba89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc3dafd4bf630ca9f885ddf926183b9d27759d2bb96ffae0a22f2bf6f4eba89->enter($__internal_1bc3dafd4bf630ca9f885ddf926183b9d27759d2bb96ffae0a22f2bf6f4eba89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c63ba6fd962f1820179e17b20f7c08ed730ca3e117da730c7cf1d52f50dda09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63ba6fd962f1820179e17b20f7c08ed730ca3e117da730c7cf1d52f50dda09f->enter($__internal_c63ba6fd962f1820179e17b20f7c08ed730ca3e117da730c7cf1d52f50dda09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1bc3dafd4bf630ca9f885ddf926183b9d27759d2bb96ffae0a22f2bf6f4eba89->leave($__internal_1bc3dafd4bf630ca9f885ddf926183b9d27759d2bb96ffae0a22f2bf6f4eba89_prof);

        
        $__internal_c63ba6fd962f1820179e17b20f7c08ed730ca3e117da730c7cf1d52f50dda09f->leave($__internal_c63ba6fd962f1820179e17b20f7c08ed730ca3e117da730c7cf1d52f50dda09f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
