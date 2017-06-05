<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_da93dfc1da511ef7906968f28571508a6c3bb9a83bc7b7bf313bc43e9450042f extends Twig_Template
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
        $__internal_eb32107cccc0180fab56625f951c5e72b4bc42c612dca3bf39ae42b0c0a4de3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb32107cccc0180fab56625f951c5e72b4bc42c612dca3bf39ae42b0c0a4de3b->enter($__internal_eb32107cccc0180fab56625f951c5e72b4bc42c612dca3bf39ae42b0c0a4de3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8bda7db62b2850ded561be670be2ee027a6c7339184cde56ada31b6b5efc509c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bda7db62b2850ded561be670be2ee027a6c7339184cde56ada31b6b5efc509c->enter($__internal_8bda7db62b2850ded561be670be2ee027a6c7339184cde56ada31b6b5efc509c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_eb32107cccc0180fab56625f951c5e72b4bc42c612dca3bf39ae42b0c0a4de3b->leave($__internal_eb32107cccc0180fab56625f951c5e72b4bc42c612dca3bf39ae42b0c0a4de3b_prof);

        
        $__internal_8bda7db62b2850ded561be670be2ee027a6c7339184cde56ada31b6b5efc509c->leave($__internal_8bda7db62b2850ded561be670be2ee027a6c7339184cde56ada31b6b5efc509c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
