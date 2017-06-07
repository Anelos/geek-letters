<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_a3cfcf7f3fd5094cadb19da2ddc1abc4457df1c5cd3252bc56d047cd5867917f extends Twig_Template
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
        $__internal_5f4a4eb299250a66ef57197d2525a3bb547ff9764314bd6ba4bdb1e348338c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4a4eb299250a66ef57197d2525a3bb547ff9764314bd6ba4bdb1e348338c55->enter($__internal_5f4a4eb299250a66ef57197d2525a3bb547ff9764314bd6ba4bdb1e348338c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_fc98bbafaf344183a0163f753724d3831543442645599bf10340c8c6a9002813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc98bbafaf344183a0163f753724d3831543442645599bf10340c8c6a9002813->enter($__internal_fc98bbafaf344183a0163f753724d3831543442645599bf10340c8c6a9002813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5f4a4eb299250a66ef57197d2525a3bb547ff9764314bd6ba4bdb1e348338c55->leave($__internal_5f4a4eb299250a66ef57197d2525a3bb547ff9764314bd6ba4bdb1e348338c55_prof);

        
        $__internal_fc98bbafaf344183a0163f753724d3831543442645599bf10340c8c6a9002813->leave($__internal_fc98bbafaf344183a0163f753724d3831543442645599bf10340c8c6a9002813_prof);

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
