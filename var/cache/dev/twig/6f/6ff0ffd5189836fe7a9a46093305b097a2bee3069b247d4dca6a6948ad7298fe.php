<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_587ebe6ed7c80587ad59d8e9883c0d29d020f350e6799f39b476d2b11dca2767 extends Twig_Template
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
        $__internal_82d9c17c2df5934f8f6b835e2667824e33fd6a8aa749fc40290889cf7eb86e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d9c17c2df5934f8f6b835e2667824e33fd6a8aa749fc40290889cf7eb86e49->enter($__internal_82d9c17c2df5934f8f6b835e2667824e33fd6a8aa749fc40290889cf7eb86e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_0135590a0197f6a490373b75958b424f0331d3d52fe7816a2f3ed74feb9d3f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0135590a0197f6a490373b75958b424f0331d3d52fe7816a2f3ed74feb9d3f70->enter($__internal_0135590a0197f6a490373b75958b424f0331d3d52fe7816a2f3ed74feb9d3f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_82d9c17c2df5934f8f6b835e2667824e33fd6a8aa749fc40290889cf7eb86e49->leave($__internal_82d9c17c2df5934f8f6b835e2667824e33fd6a8aa749fc40290889cf7eb86e49_prof);

        
        $__internal_0135590a0197f6a490373b75958b424f0331d3d52fe7816a2f3ed74feb9d3f70->leave($__internal_0135590a0197f6a490373b75958b424f0331d3d52fe7816a2f3ed74feb9d3f70_prof);

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