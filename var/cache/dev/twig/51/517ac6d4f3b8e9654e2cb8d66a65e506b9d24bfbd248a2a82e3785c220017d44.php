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
        $__internal_a3c4b5740ac7ea023872fd39567ca100864873f4498a03e18951b8dd64c9809f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c4b5740ac7ea023872fd39567ca100864873f4498a03e18951b8dd64c9809f->enter($__internal_a3c4b5740ac7ea023872fd39567ca100864873f4498a03e18951b8dd64c9809f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_1e6924de425191d143424feec0028acf7a0f605e02c87e0bf226f724b36026d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6924de425191d143424feec0028acf7a0f605e02c87e0bf226f724b36026d4->enter($__internal_1e6924de425191d143424feec0028acf7a0f605e02c87e0bf226f724b36026d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_a3c4b5740ac7ea023872fd39567ca100864873f4498a03e18951b8dd64c9809f->leave($__internal_a3c4b5740ac7ea023872fd39567ca100864873f4498a03e18951b8dd64c9809f_prof);

        
        $__internal_1e6924de425191d143424feec0028acf7a0f605e02c87e0bf226f724b36026d4->leave($__internal_1e6924de425191d143424feec0028acf7a0f605e02c87e0bf226f724b36026d4_prof);

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