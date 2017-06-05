<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_34e8d1f3a62c797dbbe53d531349fe598da4ee48763031df7c0510b8bf6a9c51 extends Twig_Template
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
        $__internal_7f1cf4c64afbf6b4643cf0eceba3d1a849a65c0f9aacef20173dde31d9b973d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1cf4c64afbf6b4643cf0eceba3d1a849a65c0f9aacef20173dde31d9b973d0->enter($__internal_7f1cf4c64afbf6b4643cf0eceba3d1a849a65c0f9aacef20173dde31d9b973d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9903799f24ffae7f0272a37a1520edbfe73ef5880558d38df39b9c3eebf7d205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9903799f24ffae7f0272a37a1520edbfe73ef5880558d38df39b9c3eebf7d205->enter($__internal_9903799f24ffae7f0272a37a1520edbfe73ef5880558d38df39b9c3eebf7d205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7f1cf4c64afbf6b4643cf0eceba3d1a849a65c0f9aacef20173dde31d9b973d0->leave($__internal_7f1cf4c64afbf6b4643cf0eceba3d1a849a65c0f9aacef20173dde31d9b973d0_prof);

        
        $__internal_9903799f24ffae7f0272a37a1520edbfe73ef5880558d38df39b9c3eebf7d205->leave($__internal_9903799f24ffae7f0272a37a1520edbfe73ef5880558d38df39b9c3eebf7d205_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
