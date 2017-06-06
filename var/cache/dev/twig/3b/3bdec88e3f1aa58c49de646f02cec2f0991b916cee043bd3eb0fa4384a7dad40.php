<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_16e14a11d0f8a84b70becf01d0e3311ff764b036cd8f8cc3c5bdf4aa28db82be extends Twig_Template
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
        $__internal_c04280b2b7b7e0f23c7e4c0a2fdf13691eb8818c0c049e0019a4cbec21dfd6cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04280b2b7b7e0f23c7e4c0a2fdf13691eb8818c0c049e0019a4cbec21dfd6cc->enter($__internal_c04280b2b7b7e0f23c7e4c0a2fdf13691eb8818c0c049e0019a4cbec21dfd6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_daa2ffd650dbb0d3f621ef8991efafb9206f9eee074664ada6dbdd7b91e2282c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa2ffd650dbb0d3f621ef8991efafb9206f9eee074664ada6dbdd7b91e2282c->enter($__internal_daa2ffd650dbb0d3f621ef8991efafb9206f9eee074664ada6dbdd7b91e2282c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c04280b2b7b7e0f23c7e4c0a2fdf13691eb8818c0c049e0019a4cbec21dfd6cc->leave($__internal_c04280b2b7b7e0f23c7e4c0a2fdf13691eb8818c0c049e0019a4cbec21dfd6cc_prof);

        
        $__internal_daa2ffd650dbb0d3f621ef8991efafb9206f9eee074664ada6dbdd7b91e2282c->leave($__internal_daa2ffd650dbb0d3f621ef8991efafb9206f9eee074664ada6dbdd7b91e2282c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
