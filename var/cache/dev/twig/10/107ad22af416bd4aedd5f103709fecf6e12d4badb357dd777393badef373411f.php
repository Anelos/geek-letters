<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_4332ede13983e93e5b2d859e7b1ca2e5a10331cf1397ca92c693288b0a6108db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_02a545bafaf9f5703fcf14e0b2c84c1acde1a1ea496e77f53f1d337cd6563916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a545bafaf9f5703fcf14e0b2c84c1acde1a1ea496e77f53f1d337cd6563916->enter($__internal_02a545bafaf9f5703fcf14e0b2c84c1acde1a1ea496e77f53f1d337cd6563916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_13ab1b124987f5d1d43304fb59c1a55853bce67de27c21b3e42f82002ff10a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ab1b124987f5d1d43304fb59c1a55853bce67de27c21b3e42f82002ff10a97->enter($__internal_13ab1b124987f5d1d43304fb59c1a55853bce67de27c21b3e42f82002ff10a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02a545bafaf9f5703fcf14e0b2c84c1acde1a1ea496e77f53f1d337cd6563916->leave($__internal_02a545bafaf9f5703fcf14e0b2c84c1acde1a1ea496e77f53f1d337cd6563916_prof);

        
        $__internal_13ab1b124987f5d1d43304fb59c1a55853bce67de27c21b3e42f82002ff10a97->leave($__internal_13ab1b124987f5d1d43304fb59c1a55853bce67de27c21b3e42f82002ff10a97_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f87ad855ae118359f2a6e8ddbaeea9707b7eb4e4f99e1b4849640c3f002870b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f87ad855ae118359f2a6e8ddbaeea9707b7eb4e4f99e1b4849640c3f002870b->enter($__internal_3f87ad855ae118359f2a6e8ddbaeea9707b7eb4e4f99e1b4849640c3f002870b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_00b49918c547b593d9821e7311e5f7892be825ca6ca2fb19db1ab9f2013c5eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b49918c547b593d9821e7311e5f7892be825ca6ca2fb19db1ab9f2013c5eb4->enter($__internal_00b49918c547b593d9821e7311e5f7892be825ca6ca2fb19db1ab9f2013c5eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_00b49918c547b593d9821e7311e5f7892be825ca6ca2fb19db1ab9f2013c5eb4->leave($__internal_00b49918c547b593d9821e7311e5f7892be825ca6ca2fb19db1ab9f2013c5eb4_prof);

        
        $__internal_3f87ad855ae118359f2a6e8ddbaeea9707b7eb4e4f99e1b4849640c3f002870b->leave($__internal_3f87ad855ae118359f2a6e8ddbaeea9707b7eb4e4f99e1b4849640c3f002870b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
