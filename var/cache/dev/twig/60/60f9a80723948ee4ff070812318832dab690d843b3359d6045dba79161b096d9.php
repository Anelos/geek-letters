<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a37913d10c87ee5b9bfae1ce0471ef271dae5b5f07667394dc7f32e2ccf4e291 extends Twig_Template
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
        $__internal_4cbee98bc44de6d86d9f4bcb0e03ac96018285428fbf3cf27e89f604f608883a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cbee98bc44de6d86d9f4bcb0e03ac96018285428fbf3cf27e89f604f608883a->enter($__internal_4cbee98bc44de6d86d9f4bcb0e03ac96018285428fbf3cf27e89f604f608883a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2dd5676e9221fa5247ad80a736492d155113c667b1679e21d813195978355b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd5676e9221fa5247ad80a736492d155113c667b1679e21d813195978355b18->enter($__internal_2dd5676e9221fa5247ad80a736492d155113c667b1679e21d813195978355b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4cbee98bc44de6d86d9f4bcb0e03ac96018285428fbf3cf27e89f604f608883a->leave($__internal_4cbee98bc44de6d86d9f4bcb0e03ac96018285428fbf3cf27e89f604f608883a_prof);

        
        $__internal_2dd5676e9221fa5247ad80a736492d155113c667b1679e21d813195978355b18->leave($__internal_2dd5676e9221fa5247ad80a736492d155113c667b1679e21d813195978355b18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
