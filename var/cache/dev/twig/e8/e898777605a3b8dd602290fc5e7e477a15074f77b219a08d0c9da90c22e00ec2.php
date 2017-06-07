<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b8e6d5f781d3b5e3aa61a030a912109e918723bac259eb70a806a204833addd1 extends Twig_Template
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
        $__internal_20c2e27bac7c4e5fbe7b2b2f49c76e581a18cd90d55fbbf9b2f6b6e6c16ce677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c2e27bac7c4e5fbe7b2b2f49c76e581a18cd90d55fbbf9b2f6b6e6c16ce677->enter($__internal_20c2e27bac7c4e5fbe7b2b2f49c76e581a18cd90d55fbbf9b2f6b6e6c16ce677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_08243f67f56f512366b89592a0e3f2e1d47f59b134f0b81932333630b5807fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08243f67f56f512366b89592a0e3f2e1d47f59b134f0b81932333630b5807fdb->enter($__internal_08243f67f56f512366b89592a0e3f2e1d47f59b134f0b81932333630b5807fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_20c2e27bac7c4e5fbe7b2b2f49c76e581a18cd90d55fbbf9b2f6b6e6c16ce677->leave($__internal_20c2e27bac7c4e5fbe7b2b2f49c76e581a18cd90d55fbbf9b2f6b6e6c16ce677_prof);

        
        $__internal_08243f67f56f512366b89592a0e3f2e1d47f59b134f0b81932333630b5807fdb->leave($__internal_08243f67f56f512366b89592a0e3f2e1d47f59b134f0b81932333630b5807fdb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
