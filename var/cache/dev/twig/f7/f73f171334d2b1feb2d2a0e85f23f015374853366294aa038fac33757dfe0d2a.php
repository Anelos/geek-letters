<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_1920a617f81d47a0de2f07971a40a96322fd59ffaac9f70be226910e717044ce extends Twig_Template
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
        $__internal_67c7b1203d540f5c00841f286bf02d95a98ce364891ae155a13760c7f4b67fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c7b1203d540f5c00841f286bf02d95a98ce364891ae155a13760c7f4b67fe6->enter($__internal_67c7b1203d540f5c00841f286bf02d95a98ce364891ae155a13760c7f4b67fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1f31f9e294e8f693c4c6c348dd81f5347cf6e1bfb90aaae3737e329afdc437de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f31f9e294e8f693c4c6c348dd81f5347cf6e1bfb90aaae3737e329afdc437de->enter($__internal_1f31f9e294e8f693c4c6c348dd81f5347cf6e1bfb90aaae3737e329afdc437de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_67c7b1203d540f5c00841f286bf02d95a98ce364891ae155a13760c7f4b67fe6->leave($__internal_67c7b1203d540f5c00841f286bf02d95a98ce364891ae155a13760c7f4b67fe6_prof);

        
        $__internal_1f31f9e294e8f693c4c6c348dd81f5347cf6e1bfb90aaae3737e329afdc437de->leave($__internal_1f31f9e294e8f693c4c6c348dd81f5347cf6e1bfb90aaae3737e329afdc437de_prof);

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
