<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_eb8cf05cf1b4f78eab2e169285895761c54e5ff73984086492236e7811b3e1c6 extends Twig_Template
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
        $__internal_29d034da282f5caa68b12f5e79953a2761701f9dad59a1d10b9b69989e2b990c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d034da282f5caa68b12f5e79953a2761701f9dad59a1d10b9b69989e2b990c->enter($__internal_29d034da282f5caa68b12f5e79953a2761701f9dad59a1d10b9b69989e2b990c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a41090b2835d85d3a7e0113723c4581e81e1b4826c40aed52d8dc1fb5f2968de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41090b2835d85d3a7e0113723c4581e81e1b4826c40aed52d8dc1fb5f2968de->enter($__internal_a41090b2835d85d3a7e0113723c4581e81e1b4826c40aed52d8dc1fb5f2968de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_29d034da282f5caa68b12f5e79953a2761701f9dad59a1d10b9b69989e2b990c->leave($__internal_29d034da282f5caa68b12f5e79953a2761701f9dad59a1d10b9b69989e2b990c_prof);

        
        $__internal_a41090b2835d85d3a7e0113723c4581e81e1b4826c40aed52d8dc1fb5f2968de->leave($__internal_a41090b2835d85d3a7e0113723c4581e81e1b4826c40aed52d8dc1fb5f2968de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
