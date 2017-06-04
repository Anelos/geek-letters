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
        $__internal_ddf70a739bb8786cc6993d06c54873792bd83189b457b523bc580fea72c25e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf70a739bb8786cc6993d06c54873792bd83189b457b523bc580fea72c25e27->enter($__internal_ddf70a739bb8786cc6993d06c54873792bd83189b457b523bc580fea72c25e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_e90cd4e3a5dd70190ab8f84882522ca4e950abb81beecd0cc958c2f5cbaaf12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90cd4e3a5dd70190ab8f84882522ca4e950abb81beecd0cc958c2f5cbaaf12d->enter($__internal_e90cd4e3a5dd70190ab8f84882522ca4e950abb81beecd0cc958c2f5cbaaf12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ddf70a739bb8786cc6993d06c54873792bd83189b457b523bc580fea72c25e27->leave($__internal_ddf70a739bb8786cc6993d06c54873792bd83189b457b523bc580fea72c25e27_prof);

        
        $__internal_e90cd4e3a5dd70190ab8f84882522ca4e950abb81beecd0cc958c2f5cbaaf12d->leave($__internal_e90cd4e3a5dd70190ab8f84882522ca4e950abb81beecd0cc958c2f5cbaaf12d_prof);

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
