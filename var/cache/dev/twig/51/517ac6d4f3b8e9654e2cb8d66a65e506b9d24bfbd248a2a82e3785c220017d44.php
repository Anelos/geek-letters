<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_c6e645ca3ccf20da40ff7abdf89b5766638d27972f23fe7cd836fe8c71b5a76d extends Twig_Template
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
        $__internal_2fcc3165454b6bc72763402549c70921409ec923338c759018e51fabcd5eb5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fcc3165454b6bc72763402549c70921409ec923338c759018e51fabcd5eb5c4->enter($__internal_2fcc3165454b6bc72763402549c70921409ec923338c759018e51fabcd5eb5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_9ab282ca7862ef2aaa7a87efbad8f404de29cdc78dde26345caf7d38181e23eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab282ca7862ef2aaa7a87efbad8f404de29cdc78dde26345caf7d38181e23eb->enter($__internal_9ab282ca7862ef2aaa7a87efbad8f404de29cdc78dde26345caf7d38181e23eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2fcc3165454b6bc72763402549c70921409ec923338c759018e51fabcd5eb5c4->leave($__internal_2fcc3165454b6bc72763402549c70921409ec923338c759018e51fabcd5eb5c4_prof);

        
        $__internal_9ab282ca7862ef2aaa7a87efbad8f404de29cdc78dde26345caf7d38181e23eb->leave($__internal_9ab282ca7862ef2aaa7a87efbad8f404de29cdc78dde26345caf7d38181e23eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
