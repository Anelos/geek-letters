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
        $__internal_cc6f25df82f60e414b8b00b656d2a53d6286abc02c2110b80b3ef8efb63309dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6f25df82f60e414b8b00b656d2a53d6286abc02c2110b80b3ef8efb63309dd->enter($__internal_cc6f25df82f60e414b8b00b656d2a53d6286abc02c2110b80b3ef8efb63309dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4adba37d46c16b4d985ed9d287c01bef5032e07b343765db246431b5252f38e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adba37d46c16b4d985ed9d287c01bef5032e07b343765db246431b5252f38e5->enter($__internal_4adba37d46c16b4d985ed9d287c01bef5032e07b343765db246431b5252f38e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cc6f25df82f60e414b8b00b656d2a53d6286abc02c2110b80b3ef8efb63309dd->leave($__internal_cc6f25df82f60e414b8b00b656d2a53d6286abc02c2110b80b3ef8efb63309dd_prof);

        
        $__internal_4adba37d46c16b4d985ed9d287c01bef5032e07b343765db246431b5252f38e5->leave($__internal_4adba37d46c16b4d985ed9d287c01bef5032e07b343765db246431b5252f38e5_prof);

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
