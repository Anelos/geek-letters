<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b7724b532efc1c3f7e3f507f28b2cc7cea44499dadf1797d5bb11d5b89d30ab3 extends Twig_Template
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
        $__internal_7fb00e6eb35d8c7ca3f52ed0d75ff626b5b88904018fed8a964f1a46afad8c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb00e6eb35d8c7ca3f52ed0d75ff626b5b88904018fed8a964f1a46afad8c9f->enter($__internal_7fb00e6eb35d8c7ca3f52ed0d75ff626b5b88904018fed8a964f1a46afad8c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e17d2e6a632b93076c61e4366b6b7704bad3d648c4cedb00a36db97c97b727c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17d2e6a632b93076c61e4366b6b7704bad3d648c4cedb00a36db97c97b727c5->enter($__internal_e17d2e6a632b93076c61e4366b6b7704bad3d648c4cedb00a36db97c97b727c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7fb00e6eb35d8c7ca3f52ed0d75ff626b5b88904018fed8a964f1a46afad8c9f->leave($__internal_7fb00e6eb35d8c7ca3f52ed0d75ff626b5b88904018fed8a964f1a46afad8c9f_prof);

        
        $__internal_e17d2e6a632b93076c61e4366b6b7704bad3d648c4cedb00a36db97c97b727c5->leave($__internal_e17d2e6a632b93076c61e4366b6b7704bad3d648c4cedb00a36db97c97b727c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
