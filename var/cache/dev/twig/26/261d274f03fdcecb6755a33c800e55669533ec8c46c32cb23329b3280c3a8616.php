<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d11f366040b06676148b63a40d00974836aa50beb6b05471cb1bc274cbbc60f3 extends Twig_Template
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
        $__internal_71aff65beffe6cabfc3fc476e2dbc8443abe3918d0cdd022c02b877be0a89ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71aff65beffe6cabfc3fc476e2dbc8443abe3918d0cdd022c02b877be0a89ba7->enter($__internal_71aff65beffe6cabfc3fc476e2dbc8443abe3918d0cdd022c02b877be0a89ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e5e69d5f8e8495793e0619709c942b341822a8fec0a485fd490a4b7fac16cdc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e69d5f8e8495793e0619709c942b341822a8fec0a485fd490a4b7fac16cdc9->enter($__internal_e5e69d5f8e8495793e0619709c942b341822a8fec0a485fd490a4b7fac16cdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_71aff65beffe6cabfc3fc476e2dbc8443abe3918d0cdd022c02b877be0a89ba7->leave($__internal_71aff65beffe6cabfc3fc476e2dbc8443abe3918d0cdd022c02b877be0a89ba7_prof);

        
        $__internal_e5e69d5f8e8495793e0619709c942b341822a8fec0a485fd490a4b7fac16cdc9->leave($__internal_e5e69d5f8e8495793e0619709c942b341822a8fec0a485fd490a4b7fac16cdc9_prof);

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
