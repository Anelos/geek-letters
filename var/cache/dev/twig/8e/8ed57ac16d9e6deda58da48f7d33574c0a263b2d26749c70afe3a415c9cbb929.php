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
        $__internal_e3c6edca085c055dfe695ce20d093832f2c971c5df623062ecc1f14c80b42329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c6edca085c055dfe695ce20d093832f2c971c5df623062ecc1f14c80b42329->enter($__internal_e3c6edca085c055dfe695ce20d093832f2c971c5df623062ecc1f14c80b42329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_18c9bd9ebd1a57b1b878579c1b9f50d63f7bc91ff28292d53ac20a567103973a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c9bd9ebd1a57b1b878579c1b9f50d63f7bc91ff28292d53ac20a567103973a->enter($__internal_18c9bd9ebd1a57b1b878579c1b9f50d63f7bc91ff28292d53ac20a567103973a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e3c6edca085c055dfe695ce20d093832f2c971c5df623062ecc1f14c80b42329->leave($__internal_e3c6edca085c055dfe695ce20d093832f2c971c5df623062ecc1f14c80b42329_prof);

        
        $__internal_18c9bd9ebd1a57b1b878579c1b9f50d63f7bc91ff28292d53ac20a567103973a->leave($__internal_18c9bd9ebd1a57b1b878579c1b9f50d63f7bc91ff28292d53ac20a567103973a_prof);

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
