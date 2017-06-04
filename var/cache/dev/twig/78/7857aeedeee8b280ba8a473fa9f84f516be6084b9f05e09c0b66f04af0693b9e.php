<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f39df258fd15b7cc74bdd00137d4cf971900f9101d04284c6e6c5bb145106488 extends Twig_Template
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
        $__internal_8b16ffa85e684e2489df648cdf809c65dcc5be178ceb8bc92a01a971dc927e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b16ffa85e684e2489df648cdf809c65dcc5be178ceb8bc92a01a971dc927e3b->enter($__internal_8b16ffa85e684e2489df648cdf809c65dcc5be178ceb8bc92a01a971dc927e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e414e9cb7248cc17895475a001d978fe5258bb5f8c51cc354611d0694eebbbbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e414e9cb7248cc17895475a001d978fe5258bb5f8c51cc354611d0694eebbbbd->enter($__internal_e414e9cb7248cc17895475a001d978fe5258bb5f8c51cc354611d0694eebbbbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8b16ffa85e684e2489df648cdf809c65dcc5be178ceb8bc92a01a971dc927e3b->leave($__internal_8b16ffa85e684e2489df648cdf809c65dcc5be178ceb8bc92a01a971dc927e3b_prof);

        
        $__internal_e414e9cb7248cc17895475a001d978fe5258bb5f8c51cc354611d0694eebbbbd->leave($__internal_e414e9cb7248cc17895475a001d978fe5258bb5f8c51cc354611d0694eebbbbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
