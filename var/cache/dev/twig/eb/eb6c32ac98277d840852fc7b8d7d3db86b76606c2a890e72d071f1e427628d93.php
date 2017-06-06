<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d6ae8f489d2f55c166803d2c3371c88dc2cc731833d0c473431511cfe8398d3c extends Twig_Template
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
        $__internal_b9e8ffc7c91b5273f42dd4d250eafaf3618ecec07216956290319238e0ff6584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e8ffc7c91b5273f42dd4d250eafaf3618ecec07216956290319238e0ff6584->enter($__internal_b9e8ffc7c91b5273f42dd4d250eafaf3618ecec07216956290319238e0ff6584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_a1921c2962cee08483aa9bc97526f8cb2a5464f1593a24c7d93164f7c2f9254d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1921c2962cee08483aa9bc97526f8cb2a5464f1593a24c7d93164f7c2f9254d->enter($__internal_a1921c2962cee08483aa9bc97526f8cb2a5464f1593a24c7d93164f7c2f9254d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_b9e8ffc7c91b5273f42dd4d250eafaf3618ecec07216956290319238e0ff6584->leave($__internal_b9e8ffc7c91b5273f42dd4d250eafaf3618ecec07216956290319238e0ff6584_prof);

        
        $__internal_a1921c2962cee08483aa9bc97526f8cb2a5464f1593a24c7d93164f7c2f9254d->leave($__internal_a1921c2962cee08483aa9bc97526f8cb2a5464f1593a24c7d93164f7c2f9254d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
