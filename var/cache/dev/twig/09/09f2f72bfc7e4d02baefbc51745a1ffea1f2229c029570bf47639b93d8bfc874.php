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
        $__internal_262a8b59204d10fa79dc030218aa3ebaa07493e260137de935aecbe535559fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262a8b59204d10fa79dc030218aa3ebaa07493e260137de935aecbe535559fe8->enter($__internal_262a8b59204d10fa79dc030218aa3ebaa07493e260137de935aecbe535559fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_eb17ee518fdd0df295c9c2700ea25ba0358a553ad564df946db8aefbcac8690b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb17ee518fdd0df295c9c2700ea25ba0358a553ad564df946db8aefbcac8690b->enter($__internal_eb17ee518fdd0df295c9c2700ea25ba0358a553ad564df946db8aefbcac8690b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_262a8b59204d10fa79dc030218aa3ebaa07493e260137de935aecbe535559fe8->leave($__internal_262a8b59204d10fa79dc030218aa3ebaa07493e260137de935aecbe535559fe8_prof);

        
        $__internal_eb17ee518fdd0df295c9c2700ea25ba0358a553ad564df946db8aefbcac8690b->leave($__internal_eb17ee518fdd0df295c9c2700ea25ba0358a553ad564df946db8aefbcac8690b_prof);

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
