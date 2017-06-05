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
        $__internal_cef17d810e7f9035a6eb6090772ff3dc1c475d26f6040500e038641afa2c4fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef17d810e7f9035a6eb6090772ff3dc1c475d26f6040500e038641afa2c4fca->enter($__internal_cef17d810e7f9035a6eb6090772ff3dc1c475d26f6040500e038641afa2c4fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ac8333263d8d560e35c24d1f16ad0296a5351f0b732afbec54b414bfa61f363e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8333263d8d560e35c24d1f16ad0296a5351f0b732afbec54b414bfa61f363e->enter($__internal_ac8333263d8d560e35c24d1f16ad0296a5351f0b732afbec54b414bfa61f363e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cef17d810e7f9035a6eb6090772ff3dc1c475d26f6040500e038641afa2c4fca->leave($__internal_cef17d810e7f9035a6eb6090772ff3dc1c475d26f6040500e038641afa2c4fca_prof);

        
        $__internal_ac8333263d8d560e35c24d1f16ad0296a5351f0b732afbec54b414bfa61f363e->leave($__internal_ac8333263d8d560e35c24d1f16ad0296a5351f0b732afbec54b414bfa61f363e_prof);

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
