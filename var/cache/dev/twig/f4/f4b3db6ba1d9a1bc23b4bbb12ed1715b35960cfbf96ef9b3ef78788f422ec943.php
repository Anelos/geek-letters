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
        $__internal_b94f021257a0c2099f15cabddc123a031f0de9452f346a358354d35b6f1c0d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b94f021257a0c2099f15cabddc123a031f0de9452f346a358354d35b6f1c0d9d->enter($__internal_b94f021257a0c2099f15cabddc123a031f0de9452f346a358354d35b6f1c0d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_cbc3d88fd33349fc5a39e9925505e07f923e96a664895c639c3e83f92b1c9a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc3d88fd33349fc5a39e9925505e07f923e96a664895c639c3e83f92b1c9a41->enter($__internal_cbc3d88fd33349fc5a39e9925505e07f923e96a664895c639c3e83f92b1c9a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b94f021257a0c2099f15cabddc123a031f0de9452f346a358354d35b6f1c0d9d->leave($__internal_b94f021257a0c2099f15cabddc123a031f0de9452f346a358354d35b6f1c0d9d_prof);

        
        $__internal_cbc3d88fd33349fc5a39e9925505e07f923e96a664895c639c3e83f92b1c9a41->leave($__internal_cbc3d88fd33349fc5a39e9925505e07f923e96a664895c639c3e83f92b1c9a41_prof);

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
