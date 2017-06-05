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
        $__internal_9b8f05c51bfaedf11c5c0de97a048d9f18c604f1cd9dbef6402ea34d550103cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8f05c51bfaedf11c5c0de97a048d9f18c604f1cd9dbef6402ea34d550103cf->enter($__internal_9b8f05c51bfaedf11c5c0de97a048d9f18c604f1cd9dbef6402ea34d550103cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1dad7d226e3319a329447194d602a3f6d58ef7ae007f62f729b5a5889dab97fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dad7d226e3319a329447194d602a3f6d58ef7ae007f62f729b5a5889dab97fe->enter($__internal_1dad7d226e3319a329447194d602a3f6d58ef7ae007f62f729b5a5889dab97fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9b8f05c51bfaedf11c5c0de97a048d9f18c604f1cd9dbef6402ea34d550103cf->leave($__internal_9b8f05c51bfaedf11c5c0de97a048d9f18c604f1cd9dbef6402ea34d550103cf_prof);

        
        $__internal_1dad7d226e3319a329447194d602a3f6d58ef7ae007f62f729b5a5889dab97fe->leave($__internal_1dad7d226e3319a329447194d602a3f6d58ef7ae007f62f729b5a5889dab97fe_prof);

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
