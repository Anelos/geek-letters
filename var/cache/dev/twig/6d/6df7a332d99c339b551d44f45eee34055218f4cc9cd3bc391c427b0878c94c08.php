<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_5d845dac9d03020c9f1fadcb467068bbce131e44d62a45b67fbb260ffeae9ef2 extends Twig_Template
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
        $__internal_23b038e36750cb088812ebf2e327676d07fff8d5d512801f1934523f2e9e38e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b038e36750cb088812ebf2e327676d07fff8d5d512801f1934523f2e9e38e3->enter($__internal_23b038e36750cb088812ebf2e327676d07fff8d5d512801f1934523f2e9e38e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_99f3e7e2c1b3e7802e317b577deb58e0877b99a23d3bb1c2426ef2574b4b96b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f3e7e2c1b3e7802e317b577deb58e0877b99a23d3bb1c2426ef2574b4b96b6->enter($__internal_99f3e7e2c1b3e7802e317b577deb58e0877b99a23d3bb1c2426ef2574b4b96b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_23b038e36750cb088812ebf2e327676d07fff8d5d512801f1934523f2e9e38e3->leave($__internal_23b038e36750cb088812ebf2e327676d07fff8d5d512801f1934523f2e9e38e3_prof);

        
        $__internal_99f3e7e2c1b3e7802e317b577deb58e0877b99a23d3bb1c2426ef2574b4b96b6->leave($__internal_99f3e7e2c1b3e7802e317b577deb58e0877b99a23d3bb1c2426ef2574b4b96b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
