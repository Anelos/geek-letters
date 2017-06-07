<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a7356a6d15cbaa321aab232e1659db2ea873757e24b4e2ec0c971632784d9de7 extends Twig_Template
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
        $__internal_77c9f86e05c920c59e03393cb8e1a9dd84a12e9fdf65b19a8d4bf724c1b1dacb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c9f86e05c920c59e03393cb8e1a9dd84a12e9fdf65b19a8d4bf724c1b1dacb->enter($__internal_77c9f86e05c920c59e03393cb8e1a9dd84a12e9fdf65b19a8d4bf724c1b1dacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7555265d55acecfeabdc7c0e605d38facf80942f92654a141c69be8fa663b6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7555265d55acecfeabdc7c0e605d38facf80942f92654a141c69be8fa663b6a7->enter($__internal_7555265d55acecfeabdc7c0e605d38facf80942f92654a141c69be8fa663b6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_77c9f86e05c920c59e03393cb8e1a9dd84a12e9fdf65b19a8d4bf724c1b1dacb->leave($__internal_77c9f86e05c920c59e03393cb8e1a9dd84a12e9fdf65b19a8d4bf724c1b1dacb_prof);

        
        $__internal_7555265d55acecfeabdc7c0e605d38facf80942f92654a141c69be8fa663b6a7->leave($__internal_7555265d55acecfeabdc7c0e605d38facf80942f92654a141c69be8fa663b6a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
