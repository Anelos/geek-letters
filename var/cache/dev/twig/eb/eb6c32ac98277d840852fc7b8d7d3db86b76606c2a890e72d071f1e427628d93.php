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
        $__internal_7d7df7140b6fb26ede06763f2394bb097469c31714187280908b89cb6b773a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7df7140b6fb26ede06763f2394bb097469c31714187280908b89cb6b773a1e->enter($__internal_7d7df7140b6fb26ede06763f2394bb097469c31714187280908b89cb6b773a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_6e78cabbe77362b2e10b3c24520059ed1d7fb7e8d7330066fccee1298fb9a8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e78cabbe77362b2e10b3c24520059ed1d7fb7e8d7330066fccee1298fb9a8ac->enter($__internal_6e78cabbe77362b2e10b3c24520059ed1d7fb7e8d7330066fccee1298fb9a8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_7d7df7140b6fb26ede06763f2394bb097469c31714187280908b89cb6b773a1e->leave($__internal_7d7df7140b6fb26ede06763f2394bb097469c31714187280908b89cb6b773a1e_prof);

        
        $__internal_6e78cabbe77362b2e10b3c24520059ed1d7fb7e8d7330066fccee1298fb9a8ac->leave($__internal_6e78cabbe77362b2e10b3c24520059ed1d7fb7e8d7330066fccee1298fb9a8ac_prof);

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
