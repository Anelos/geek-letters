<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_ba14358f309de1706ba694b67c64ad1eb521b6d56619b31394b8f912440b09b8 extends Twig_Template
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
        $__internal_8e68676702fe95b89d70fbb1c663b9e413e6dec70ffeeaa927976aa5aa5e6048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e68676702fe95b89d70fbb1c663b9e413e6dec70ffeeaa927976aa5aa5e6048->enter($__internal_8e68676702fe95b89d70fbb1c663b9e413e6dec70ffeeaa927976aa5aa5e6048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_5b6d65416c56867999c3a26b0bc9c1b6dee57e62775f4e46b80bd9b6d9c90f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6d65416c56867999c3a26b0bc9c1b6dee57e62775f4e46b80bd9b6d9c90f5e->enter($__internal_5b6d65416c56867999c3a26b0bc9c1b6dee57e62775f4e46b80bd9b6d9c90f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_8e68676702fe95b89d70fbb1c663b9e413e6dec70ffeeaa927976aa5aa5e6048->leave($__internal_8e68676702fe95b89d70fbb1c663b9e413e6dec70ffeeaa927976aa5aa5e6048_prof);

        
        $__internal_5b6d65416c56867999c3a26b0bc9c1b6dee57e62775f4e46b80bd9b6d9c90f5e->leave($__internal_5b6d65416c56867999c3a26b0bc9c1b6dee57e62775f4e46b80bd9b6d9c90f5e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
