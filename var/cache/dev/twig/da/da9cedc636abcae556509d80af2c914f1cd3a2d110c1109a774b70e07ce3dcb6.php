<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_5105f7cfb12b3952b03faa55cc85d9b7932662c7158f202a4fde715d8057924f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99e25fb9a4101b3c2386aa29767488b27214c18500b7303ec89baf8d21355953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e25fb9a4101b3c2386aa29767488b27214c18500b7303ec89baf8d21355953->enter($__internal_99e25fb9a4101b3c2386aa29767488b27214c18500b7303ec89baf8d21355953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_4eb3fa2fac7c8dbd770379d8dc564a75117ff7048e71c0225db6d48d2015a74b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb3fa2fac7c8dbd770379d8dc564a75117ff7048e71c0225db6d48d2015a74b->enter($__internal_4eb3fa2fac7c8dbd770379d8dc564a75117ff7048e71c0225db6d48d2015a74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99e25fb9a4101b3c2386aa29767488b27214c18500b7303ec89baf8d21355953->leave($__internal_99e25fb9a4101b3c2386aa29767488b27214c18500b7303ec89baf8d21355953_prof);

        
        $__internal_4eb3fa2fac7c8dbd770379d8dc564a75117ff7048e71c0225db6d48d2015a74b->leave($__internal_4eb3fa2fac7c8dbd770379d8dc564a75117ff7048e71c0225db6d48d2015a74b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3b0b896a7bdff27ee899603e9fcd0b4a9026611fab2880838d93f72c805d5a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b0b896a7bdff27ee899603e9fcd0b4a9026611fab2880838d93f72c805d5a0->enter($__internal_e3b0b896a7bdff27ee899603e9fcd0b4a9026611fab2880838d93f72c805d5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_453b49c8030e0e1734211594224e86258d299eb61b80258e7ac403e07fe83d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453b49c8030e0e1734211594224e86258d299eb61b80258e7ac403e07fe83d83->enter($__internal_453b49c8030e0e1734211594224e86258d299eb61b80258e7ac403e07fe83d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_453b49c8030e0e1734211594224e86258d299eb61b80258e7ac403e07fe83d83->leave($__internal_453b49c8030e0e1734211594224e86258d299eb61b80258e7ac403e07fe83d83_prof);

        
        $__internal_e3b0b896a7bdff27ee899603e9fcd0b4a9026611fab2880838d93f72c805d5a0->leave($__internal_e3b0b896a7bdff27ee899603e9fcd0b4a9026611fab2880838d93f72c805d5a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
