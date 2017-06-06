<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3afd48f6be7d04a5e5c88ecb25fa9a4dcbec9d867bfe5995fcbaa6f173f147d5 extends Twig_Template
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
        $__internal_411b450ca9f162482edd96c6f4a4197c8059936d74d47a05e502f806a6efcab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411b450ca9f162482edd96c6f4a4197c8059936d74d47a05e502f806a6efcab9->enter($__internal_411b450ca9f162482edd96c6f4a4197c8059936d74d47a05e502f806a6efcab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_2d4a77d29b195d7e73c93a1d9ceba6706ec6971010eea96c855f946b6a046f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4a77d29b195d7e73c93a1d9ceba6706ec6971010eea96c855f946b6a046f87->enter($__internal_2d4a77d29b195d7e73c93a1d9ceba6706ec6971010eea96c855f946b6a046f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_411b450ca9f162482edd96c6f4a4197c8059936d74d47a05e502f806a6efcab9->leave($__internal_411b450ca9f162482edd96c6f4a4197c8059936d74d47a05e502f806a6efcab9_prof);

        
        $__internal_2d4a77d29b195d7e73c93a1d9ceba6706ec6971010eea96c855f946b6a046f87->leave($__internal_2d4a77d29b195d7e73c93a1d9ceba6706ec6971010eea96c855f946b6a046f87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
