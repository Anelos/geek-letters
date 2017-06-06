<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_450de95aff4307f02d7e77eecc50d01d36a852ab60c9116619d7df82ec6fed85 extends Twig_Template
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
        $__internal_4f776543d0c8f6ef2c6f848b6b719bf3d4c70f136b940bee53d5dfc502d8ee42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f776543d0c8f6ef2c6f848b6b719bf3d4c70f136b940bee53d5dfc502d8ee42->enter($__internal_4f776543d0c8f6ef2c6f848b6b719bf3d4c70f136b940bee53d5dfc502d8ee42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_fe3d6cb38c58e571fe7794ccc21ce6a9c9b2a9cb33be7e6d307a795b637aca0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3d6cb38c58e571fe7794ccc21ce6a9c9b2a9cb33be7e6d307a795b637aca0a->enter($__internal_fe3d6cb38c58e571fe7794ccc21ce6a9c9b2a9cb33be7e6d307a795b637aca0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4f776543d0c8f6ef2c6f848b6b719bf3d4c70f136b940bee53d5dfc502d8ee42->leave($__internal_4f776543d0c8f6ef2c6f848b6b719bf3d4c70f136b940bee53d5dfc502d8ee42_prof);

        
        $__internal_fe3d6cb38c58e571fe7794ccc21ce6a9c9b2a9cb33be7e6d307a795b637aca0a->leave($__internal_fe3d6cb38c58e571fe7794ccc21ce6a9c9b2a9cb33be7e6d307a795b637aca0a_prof);

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
