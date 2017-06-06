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
        $__internal_a2780a720ad3f0c592d92c8471818d66c54c56fcb3ce38a080aa28138375a1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2780a720ad3f0c592d92c8471818d66c54c56fcb3ce38a080aa28138375a1d3->enter($__internal_a2780a720ad3f0c592d92c8471818d66c54c56fcb3ce38a080aa28138375a1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_61ef6f83331d0a530d4be60abd3bf91ac06a649a3f53020196d8473225b868fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ef6f83331d0a530d4be60abd3bf91ac06a649a3f53020196d8473225b868fa->enter($__internal_61ef6f83331d0a530d4be60abd3bf91ac06a649a3f53020196d8473225b868fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a2780a720ad3f0c592d92c8471818d66c54c56fcb3ce38a080aa28138375a1d3->leave($__internal_a2780a720ad3f0c592d92c8471818d66c54c56fcb3ce38a080aa28138375a1d3_prof);

        
        $__internal_61ef6f83331d0a530d4be60abd3bf91ac06a649a3f53020196d8473225b868fa->leave($__internal_61ef6f83331d0a530d4be60abd3bf91ac06a649a3f53020196d8473225b868fa_prof);

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
