<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6f979e85f3bf05cee691c9008ffa642042ef93ed749fae06def094633d9abece extends Twig_Template
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
        $__internal_6e32e813cc852f4a23e54bd0f0f8ccb0f0b6a6737d58fc29ed5dd8a4adce2c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e32e813cc852f4a23e54bd0f0f8ccb0f0b6a6737d58fc29ed5dd8a4adce2c6f->enter($__internal_6e32e813cc852f4a23e54bd0f0f8ccb0f0b6a6737d58fc29ed5dd8a4adce2c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_88ee4400303c20bcdecae6bccef2720fb014db82fbd1125c86a7f97475dba0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ee4400303c20bcdecae6bccef2720fb014db82fbd1125c86a7f97475dba0f7->enter($__internal_88ee4400303c20bcdecae6bccef2720fb014db82fbd1125c86a7f97475dba0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6e32e813cc852f4a23e54bd0f0f8ccb0f0b6a6737d58fc29ed5dd8a4adce2c6f->leave($__internal_6e32e813cc852f4a23e54bd0f0f8ccb0f0b6a6737d58fc29ed5dd8a4adce2c6f_prof);

        
        $__internal_88ee4400303c20bcdecae6bccef2720fb014db82fbd1125c86a7f97475dba0f7->leave($__internal_88ee4400303c20bcdecae6bccef2720fb014db82fbd1125c86a7f97475dba0f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
