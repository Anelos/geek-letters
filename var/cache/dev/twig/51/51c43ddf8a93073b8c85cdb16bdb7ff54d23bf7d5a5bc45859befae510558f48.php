<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c8fae400aa93098f9763d3f5f3d236effebb44d7b024410b8265e7a126b7263c extends Twig_Template
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
        $__internal_2d3b4948b65247093de0db6a4cc34302a3871fa6379ef6d0c6a1888a9c1746b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3b4948b65247093de0db6a4cc34302a3871fa6379ef6d0c6a1888a9c1746b9->enter($__internal_2d3b4948b65247093de0db6a4cc34302a3871fa6379ef6d0c6a1888a9c1746b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e71d4d5b641f66d9b1138083e0640b634b8a6443f31266efdcb755e467d7fe53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71d4d5b641f66d9b1138083e0640b634b8a6443f31266efdcb755e467d7fe53->enter($__internal_e71d4d5b641f66d9b1138083e0640b634b8a6443f31266efdcb755e467d7fe53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_2d3b4948b65247093de0db6a4cc34302a3871fa6379ef6d0c6a1888a9c1746b9->leave($__internal_2d3b4948b65247093de0db6a4cc34302a3871fa6379ef6d0c6a1888a9c1746b9_prof);

        
        $__internal_e71d4d5b641f66d9b1138083e0640b634b8a6443f31266efdcb755e467d7fe53->leave($__internal_e71d4d5b641f66d9b1138083e0640b634b8a6443f31266efdcb755e467d7fe53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
