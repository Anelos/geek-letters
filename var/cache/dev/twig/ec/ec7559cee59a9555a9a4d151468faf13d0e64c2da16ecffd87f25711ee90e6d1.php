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
        $__internal_0903a50198d10dcae20a382ddf18fa8c575bc96a51c2210154f2720e845bc443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0903a50198d10dcae20a382ddf18fa8c575bc96a51c2210154f2720e845bc443->enter($__internal_0903a50198d10dcae20a382ddf18fa8c575bc96a51c2210154f2720e845bc443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_77ee77a343f145a2f257f16e9a9cba8745b2f1fc22fc95d82dc4117883d7373a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ee77a343f145a2f257f16e9a9cba8745b2f1fc22fc95d82dc4117883d7373a->enter($__internal_77ee77a343f145a2f257f16e9a9cba8745b2f1fc22fc95d82dc4117883d7373a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0903a50198d10dcae20a382ddf18fa8c575bc96a51c2210154f2720e845bc443->leave($__internal_0903a50198d10dcae20a382ddf18fa8c575bc96a51c2210154f2720e845bc443_prof);

        
        $__internal_77ee77a343f145a2f257f16e9a9cba8745b2f1fc22fc95d82dc4117883d7373a->leave($__internal_77ee77a343f145a2f257f16e9a9cba8745b2f1fc22fc95d82dc4117883d7373a_prof);

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
