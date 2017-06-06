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
        $__internal_063e2597dabfcbdf8b8fd059e67d738d9e65c34789d0313ec1b97b8dd6778766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063e2597dabfcbdf8b8fd059e67d738d9e65c34789d0313ec1b97b8dd6778766->enter($__internal_063e2597dabfcbdf8b8fd059e67d738d9e65c34789d0313ec1b97b8dd6778766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_72f1c7422d9ab16d0ca12615fbb4a7d45424e307028598246cf0fc07f72e73a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f1c7422d9ab16d0ca12615fbb4a7d45424e307028598246cf0fc07f72e73a2->enter($__internal_72f1c7422d9ab16d0ca12615fbb4a7d45424e307028598246cf0fc07f72e73a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_063e2597dabfcbdf8b8fd059e67d738d9e65c34789d0313ec1b97b8dd6778766->leave($__internal_063e2597dabfcbdf8b8fd059e67d738d9e65c34789d0313ec1b97b8dd6778766_prof);

        
        $__internal_72f1c7422d9ab16d0ca12615fbb4a7d45424e307028598246cf0fc07f72e73a2->leave($__internal_72f1c7422d9ab16d0ca12615fbb4a7d45424e307028598246cf0fc07f72e73a2_prof);

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
