<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5c52509401c0f029767f30a550e78739beb2229638ae27d1cdb53eda2889d5c2 extends Twig_Template
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
        $__internal_b77bc5ba20540ee7448e86831ec46e6882afaca551e9e5000e2ed27d1865bb57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b77bc5ba20540ee7448e86831ec46e6882afaca551e9e5000e2ed27d1865bb57->enter($__internal_b77bc5ba20540ee7448e86831ec46e6882afaca551e9e5000e2ed27d1865bb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_ea57437e49dc9614ac8fc2127133b04d3669d1ab9ed0402d29c0aa38c05dc5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea57437e49dc9614ac8fc2127133b04d3669d1ab9ed0402d29c0aa38c05dc5c2->enter($__internal_ea57437e49dc9614ac8fc2127133b04d3669d1ab9ed0402d29c0aa38c05dc5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_b77bc5ba20540ee7448e86831ec46e6882afaca551e9e5000e2ed27d1865bb57->leave($__internal_b77bc5ba20540ee7448e86831ec46e6882afaca551e9e5000e2ed27d1865bb57_prof);

        
        $__internal_ea57437e49dc9614ac8fc2127133b04d3669d1ab9ed0402d29c0aa38c05dc5c2->leave($__internal_ea57437e49dc9614ac8fc2127133b04d3669d1ab9ed0402d29c0aa38c05dc5c2_prof);

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
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
