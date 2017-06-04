<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_253f9a47f8b5936884c27b0180560287517e466df72d74ee35a21466de024d75 extends Twig_Template
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
        $__internal_bfeb1b09ee943212fc4c3ff411939331ccd27aa62ffd18df69d98f8e5abf2583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfeb1b09ee943212fc4c3ff411939331ccd27aa62ffd18df69d98f8e5abf2583->enter($__internal_bfeb1b09ee943212fc4c3ff411939331ccd27aa62ffd18df69d98f8e5abf2583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b54affa01fe30b6392d1e16876fc22688c2049dd2843ea4ca6b57e25dd29433c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54affa01fe30b6392d1e16876fc22688c2049dd2843ea4ca6b57e25dd29433c->enter($__internal_b54affa01fe30b6392d1e16876fc22688c2049dd2843ea4ca6b57e25dd29433c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bfeb1b09ee943212fc4c3ff411939331ccd27aa62ffd18df69d98f8e5abf2583->leave($__internal_bfeb1b09ee943212fc4c3ff411939331ccd27aa62ffd18df69d98f8e5abf2583_prof);

        
        $__internal_b54affa01fe30b6392d1e16876fc22688c2049dd2843ea4ca6b57e25dd29433c->leave($__internal_b54affa01fe30b6392d1e16876fc22688c2049dd2843ea4ca6b57e25dd29433c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
