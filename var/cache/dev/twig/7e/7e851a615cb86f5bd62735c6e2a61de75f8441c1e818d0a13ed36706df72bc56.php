<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_50109a2f0daa45cadde2a61a9d3a752c9d6dbcbf5b1aa185a939126722d69ad5 extends Twig_Template
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
        $__internal_bc14188bfd8eca75f3f0ebf6b23e836ef70703dddf48ff01e1a64eff86a966bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc14188bfd8eca75f3f0ebf6b23e836ef70703dddf48ff01e1a64eff86a966bc->enter($__internal_bc14188bfd8eca75f3f0ebf6b23e836ef70703dddf48ff01e1a64eff86a966bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_62632fcbe47e74ed696d809c91aa23fe00e4a896d79c49034196b93665145800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62632fcbe47e74ed696d809c91aa23fe00e4a896d79c49034196b93665145800->enter($__internal_62632fcbe47e74ed696d809c91aa23fe00e4a896d79c49034196b93665145800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bc14188bfd8eca75f3f0ebf6b23e836ef70703dddf48ff01e1a64eff86a966bc->leave($__internal_bc14188bfd8eca75f3f0ebf6b23e836ef70703dddf48ff01e1a64eff86a966bc_prof);

        
        $__internal_62632fcbe47e74ed696d809c91aa23fe00e4a896d79c49034196b93665145800->leave($__internal_62632fcbe47e74ed696d809c91aa23fe00e4a896d79c49034196b93665145800_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
