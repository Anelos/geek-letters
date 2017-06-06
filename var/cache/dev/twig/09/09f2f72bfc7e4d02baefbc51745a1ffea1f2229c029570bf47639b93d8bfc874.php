<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8ef22fbfbe6421b5a42d4c50c08789473328c052355c8419af0145adc04405ab extends Twig_Template
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
        $__internal_75af5685525c04ab833b2c6f2f03b67d5cc0b8b57416b60cd94ae29493bb4683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75af5685525c04ab833b2c6f2f03b67d5cc0b8b57416b60cd94ae29493bb4683->enter($__internal_75af5685525c04ab833b2c6f2f03b67d5cc0b8b57416b60cd94ae29493bb4683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8e033ccf0db6cb6ad9cb9c0ec24b88699c6b3afc7ab4418ba8bcc5ff790c80b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e033ccf0db6cb6ad9cb9c0ec24b88699c6b3afc7ab4418ba8bcc5ff790c80b5->enter($__internal_8e033ccf0db6cb6ad9cb9c0ec24b88699c6b3afc7ab4418ba8bcc5ff790c80b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_75af5685525c04ab833b2c6f2f03b67d5cc0b8b57416b60cd94ae29493bb4683->leave($__internal_75af5685525c04ab833b2c6f2f03b67d5cc0b8b57416b60cd94ae29493bb4683_prof);

        
        $__internal_8e033ccf0db6cb6ad9cb9c0ec24b88699c6b3afc7ab4418ba8bcc5ff790c80b5->leave($__internal_8e033ccf0db6cb6ad9cb9c0ec24b88699c6b3afc7ab4418ba8bcc5ff790c80b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
