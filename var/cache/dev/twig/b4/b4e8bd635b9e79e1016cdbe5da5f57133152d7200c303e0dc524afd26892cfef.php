<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_939703e612d9243b7a81048110895c3d215d25d6d353c92a989c229a0fc6d726 extends Twig_Template
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
        $__internal_dbe8e70a9ede3b574ae49c1e3f86f6366cbcbdef82edb687351975eb2222c238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbe8e70a9ede3b574ae49c1e3f86f6366cbcbdef82edb687351975eb2222c238->enter($__internal_dbe8e70a9ede3b574ae49c1e3f86f6366cbcbdef82edb687351975eb2222c238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_2c76501f9ab28335f5e953dc948fde195a63b5c3cadb7b7f3f090287894a2cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c76501f9ab28335f5e953dc948fde195a63b5c3cadb7b7f3f090287894a2cb8->enter($__internal_2c76501f9ab28335f5e953dc948fde195a63b5c3cadb7b7f3f090287894a2cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_dbe8e70a9ede3b574ae49c1e3f86f6366cbcbdef82edb687351975eb2222c238->leave($__internal_dbe8e70a9ede3b574ae49c1e3f86f6366cbcbdef82edb687351975eb2222c238_prof);

        
        $__internal_2c76501f9ab28335f5e953dc948fde195a63b5c3cadb7b7f3f090287894a2cb8->leave($__internal_2c76501f9ab28335f5e953dc948fde195a63b5c3cadb7b7f3f090287894a2cb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
