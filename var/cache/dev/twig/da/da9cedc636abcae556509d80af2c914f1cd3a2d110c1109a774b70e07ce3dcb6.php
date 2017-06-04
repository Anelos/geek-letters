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
        $__internal_0a373b9a49ffb07a0382ac16353452133408850689ccb707c4c7ddfb95fb22bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a373b9a49ffb07a0382ac16353452133408850689ccb707c4c7ddfb95fb22bb->enter($__internal_0a373b9a49ffb07a0382ac16353452133408850689ccb707c4c7ddfb95fb22bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_a2c6bc9209812e78457e3d320ec92fa2cceb8b880688845ad3dd0004bdf0ad64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c6bc9209812e78457e3d320ec92fa2cceb8b880688845ad3dd0004bdf0ad64->enter($__internal_a2c6bc9209812e78457e3d320ec92fa2cceb8b880688845ad3dd0004bdf0ad64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a373b9a49ffb07a0382ac16353452133408850689ccb707c4c7ddfb95fb22bb->leave($__internal_0a373b9a49ffb07a0382ac16353452133408850689ccb707c4c7ddfb95fb22bb_prof);

        
        $__internal_a2c6bc9209812e78457e3d320ec92fa2cceb8b880688845ad3dd0004bdf0ad64->leave($__internal_a2c6bc9209812e78457e3d320ec92fa2cceb8b880688845ad3dd0004bdf0ad64_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4268995eef7dd1d31eb16ca1c16b9edeb38579ba447e92a1846cadc3722c26e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4268995eef7dd1d31eb16ca1c16b9edeb38579ba447e92a1846cadc3722c26e8->enter($__internal_4268995eef7dd1d31eb16ca1c16b9edeb38579ba447e92a1846cadc3722c26e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6c0dca1cb303926e3252cec36c5791bbdf6e8d22006c8564caec6a272817fdbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0dca1cb303926e3252cec36c5791bbdf6e8d22006c8564caec6a272817fdbc->enter($__internal_6c0dca1cb303926e3252cec36c5791bbdf6e8d22006c8564caec6a272817fdbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6c0dca1cb303926e3252cec36c5791bbdf6e8d22006c8564caec6a272817fdbc->leave($__internal_6c0dca1cb303926e3252cec36c5791bbdf6e8d22006c8564caec6a272817fdbc_prof);

        
        $__internal_4268995eef7dd1d31eb16ca1c16b9edeb38579ba447e92a1846cadc3722c26e8->leave($__internal_4268995eef7dd1d31eb16ca1c16b9edeb38579ba447e92a1846cadc3722c26e8_prof);

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
