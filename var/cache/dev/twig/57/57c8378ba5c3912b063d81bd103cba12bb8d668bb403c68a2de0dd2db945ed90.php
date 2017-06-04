<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_fdac6a49a9e4e7e9a851f5e8ebbcb3853bfb9510572dad910fcf767e03b3744e extends Twig_Template
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
        $__internal_15df579eca194013dfb1b4f8719208ca91b95e77e2e3770df84f06e3fd497027 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15df579eca194013dfb1b4f8719208ca91b95e77e2e3770df84f06e3fd497027->enter($__internal_15df579eca194013dfb1b4f8719208ca91b95e77e2e3770df84f06e3fd497027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2d8ae79dba9de0b113112d19b853c740e78de2294129f10e322550052e04ff22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8ae79dba9de0b113112d19b853c740e78de2294129f10e322550052e04ff22->enter($__internal_2d8ae79dba9de0b113112d19b853c740e78de2294129f10e322550052e04ff22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_15df579eca194013dfb1b4f8719208ca91b95e77e2e3770df84f06e3fd497027->leave($__internal_15df579eca194013dfb1b4f8719208ca91b95e77e2e3770df84f06e3fd497027_prof);

        
        $__internal_2d8ae79dba9de0b113112d19b853c740e78de2294129f10e322550052e04ff22->leave($__internal_2d8ae79dba9de0b113112d19b853c740e78de2294129f10e322550052e04ff22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
