<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_59bb16254a911f7a5e2fc420ba01bd89c83b82e14e6fa1b5b0720c0dc3b21d08 extends Twig_Template
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
        $__internal_3bcaa4eca52bcb85c0451404147f56d2ba19cec1dce99f056e19c2167fe800ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcaa4eca52bcb85c0451404147f56d2ba19cec1dce99f056e19c2167fe800ca->enter($__internal_3bcaa4eca52bcb85c0451404147f56d2ba19cec1dce99f056e19c2167fe800ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_ef471a0718b918af012bf233c44f7baa55e8c4fa522bebb38d27c888be38adf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef471a0718b918af012bf233c44f7baa55e8c4fa522bebb38d27c888be38adf9->enter($__internal_ef471a0718b918af012bf233c44f7baa55e8c4fa522bebb38d27c888be38adf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_3bcaa4eca52bcb85c0451404147f56d2ba19cec1dce99f056e19c2167fe800ca->leave($__internal_3bcaa4eca52bcb85c0451404147f56d2ba19cec1dce99f056e19c2167fe800ca_prof);

        
        $__internal_ef471a0718b918af012bf233c44f7baa55e8c4fa522bebb38d27c888be38adf9->leave($__internal_ef471a0718b918af012bf233c44f7baa55e8c4fa522bebb38d27c888be38adf9_prof);

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
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
