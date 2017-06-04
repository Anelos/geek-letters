<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5d543250eacc2b53cfffb1b18d5f76bfeac77ddb03c8bf0446b6c4dfc718819e extends Twig_Template
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
        $__internal_f1422fe83324d0ce68da5c5a6384d254affd13fc91e8765b67cdbfb96c177f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1422fe83324d0ce68da5c5a6384d254affd13fc91e8765b67cdbfb96c177f7c->enter($__internal_f1422fe83324d0ce68da5c5a6384d254affd13fc91e8765b67cdbfb96c177f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1cc8c8a50fe4a9383d27e0369b4cb2977d29b22674f529ee834432679c476ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc8c8a50fe4a9383d27e0369b4cb2977d29b22674f529ee834432679c476ba6->enter($__internal_1cc8c8a50fe4a9383d27e0369b4cb2977d29b22674f529ee834432679c476ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f1422fe83324d0ce68da5c5a6384d254affd13fc91e8765b67cdbfb96c177f7c->leave($__internal_f1422fe83324d0ce68da5c5a6384d254affd13fc91e8765b67cdbfb96c177f7c_prof);

        
        $__internal_1cc8c8a50fe4a9383d27e0369b4cb2977d29b22674f529ee834432679c476ba6->leave($__internal_1cc8c8a50fe4a9383d27e0369b4cb2977d29b22674f529ee834432679c476ba6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
