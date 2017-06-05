<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1d04a5289420dbd679e70ffcdd236c61635c5d7bad36eeca10eca926ed9c1428 extends Twig_Template
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
        $__internal_daf66a86b0d1818ab8963f532bb6cc10b8d8a7ec135ed360f9e5e738ce877eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf66a86b0d1818ab8963f532bb6cc10b8d8a7ec135ed360f9e5e738ce877eb9->enter($__internal_daf66a86b0d1818ab8963f532bb6cc10b8d8a7ec135ed360f9e5e738ce877eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_e66c0f921396d70cd95a265364b1d65e5be97a3c1978cfbfe39eeee46aef4a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66c0f921396d70cd95a265364b1d65e5be97a3c1978cfbfe39eeee46aef4a87->enter($__internal_e66c0f921396d70cd95a265364b1d65e5be97a3c1978cfbfe39eeee46aef4a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_daf66a86b0d1818ab8963f532bb6cc10b8d8a7ec135ed360f9e5e738ce877eb9->leave($__internal_daf66a86b0d1818ab8963f532bb6cc10b8d8a7ec135ed360f9e5e738ce877eb9_prof);

        
        $__internal_e66c0f921396d70cd95a265364b1d65e5be97a3c1978cfbfe39eeee46aef4a87->leave($__internal_e66c0f921396d70cd95a265364b1d65e5be97a3c1978cfbfe39eeee46aef4a87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
