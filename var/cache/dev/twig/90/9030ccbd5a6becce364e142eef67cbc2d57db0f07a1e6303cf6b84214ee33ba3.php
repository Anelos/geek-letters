<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_08eacb43a187a341b8a3f7742399701b1d4cad73f38a703e667fc016a2b6ad08 extends Twig_Template
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
        $__internal_67171a4e126c94a91cd55cda605ab4cbe97b8ab026051558a6702b66741aee66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67171a4e126c94a91cd55cda605ab4cbe97b8ab026051558a6702b66741aee66->enter($__internal_67171a4e126c94a91cd55cda605ab4cbe97b8ab026051558a6702b66741aee66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8bccf061ab7412a959b8511d22be81b0073438f8016d13e849c35bed3a9473b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bccf061ab7412a959b8511d22be81b0073438f8016d13e849c35bed3a9473b5->enter($__internal_8bccf061ab7412a959b8511d22be81b0073438f8016d13e849c35bed3a9473b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_67171a4e126c94a91cd55cda605ab4cbe97b8ab026051558a6702b66741aee66->leave($__internal_67171a4e126c94a91cd55cda605ab4cbe97b8ab026051558a6702b66741aee66_prof);

        
        $__internal_8bccf061ab7412a959b8511d22be81b0073438f8016d13e849c35bed3a9473b5->leave($__internal_8bccf061ab7412a959b8511d22be81b0073438f8016d13e849c35bed3a9473b5_prof);

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
