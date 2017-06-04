<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7f8c555c95deed70110feca5509f50db3c292f6c2f0cbdc8c44536125eddd019 extends Twig_Template
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
        $__internal_18650cc465559f4d563200005aefb00351e0ee89e4b639c71b285f6ed84e1430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18650cc465559f4d563200005aefb00351e0ee89e4b639c71b285f6ed84e1430->enter($__internal_18650cc465559f4d563200005aefb00351e0ee89e4b639c71b285f6ed84e1430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5cd3d662730645e12700d5e797a8605b456ac2fdabb3c19189673b3bc63d2aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd3d662730645e12700d5e797a8605b456ac2fdabb3c19189673b3bc63d2aef->enter($__internal_5cd3d662730645e12700d5e797a8605b456ac2fdabb3c19189673b3bc63d2aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_18650cc465559f4d563200005aefb00351e0ee89e4b639c71b285f6ed84e1430->leave($__internal_18650cc465559f4d563200005aefb00351e0ee89e4b639c71b285f6ed84e1430_prof);

        
        $__internal_5cd3d662730645e12700d5e797a8605b456ac2fdabb3c19189673b3bc63d2aef->leave($__internal_5cd3d662730645e12700d5e797a8605b456ac2fdabb3c19189673b3bc63d2aef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
