<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_7212082d9f8683340fc48e1da3009760d91ea1354f0dc15ad77dd9ebb510c499 extends Twig_Template
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
        $__internal_5571c11536ed3801b27cd11d6d3983fa33a49867dfa07ef4476748220d735919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5571c11536ed3801b27cd11d6d3983fa33a49867dfa07ef4476748220d735919->enter($__internal_5571c11536ed3801b27cd11d6d3983fa33a49867dfa07ef4476748220d735919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_ca5d202bf53846070149c53cb4acda4d49b6e5aeb5ac1fdd0b4b56b746ced9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5d202bf53846070149c53cb4acda4d49b6e5aeb5ac1fdd0b4b56b746ced9c4->enter($__internal_ca5d202bf53846070149c53cb4acda4d49b6e5aeb5ac1fdd0b4b56b746ced9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5571c11536ed3801b27cd11d6d3983fa33a49867dfa07ef4476748220d735919->leave($__internal_5571c11536ed3801b27cd11d6d3983fa33a49867dfa07ef4476748220d735919_prof);

        
        $__internal_ca5d202bf53846070149c53cb4acda4d49b6e5aeb5ac1fdd0b4b56b746ced9c4->leave($__internal_ca5d202bf53846070149c53cb4acda4d49b6e5aeb5ac1fdd0b4b56b746ced9c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
