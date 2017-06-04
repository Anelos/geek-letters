<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_c83d66063a7da54b36bbe0cb3c6b1e6f4834e66bd488f103f4589658acfc7301 extends Twig_Template
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
        $__internal_ef52cbba03be1bc230b359e9fed4e0b4e781e9412fcd6f4b23474f7a46201c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef52cbba03be1bc230b359e9fed4e0b4e781e9412fcd6f4b23474f7a46201c67->enter($__internal_ef52cbba03be1bc230b359e9fed4e0b4e781e9412fcd6f4b23474f7a46201c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_7a64954d39a32c9b44902348e8ca6db9ed197ac1da239f0b9f78a9e8a85466dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a64954d39a32c9b44902348e8ca6db9ed197ac1da239f0b9f78a9e8a85466dc->enter($__internal_7a64954d39a32c9b44902348e8ca6db9ed197ac1da239f0b9f78a9e8a85466dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef52cbba03be1bc230b359e9fed4e0b4e781e9412fcd6f4b23474f7a46201c67->leave($__internal_ef52cbba03be1bc230b359e9fed4e0b4e781e9412fcd6f4b23474f7a46201c67_prof);

        
        $__internal_7a64954d39a32c9b44902348e8ca6db9ed197ac1da239f0b9f78a9e8a85466dc->leave($__internal_7a64954d39a32c9b44902348e8ca6db9ed197ac1da239f0b9f78a9e8a85466dc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d072de2fc307e3464921f13085b00901ca08e149f5c40e1444795445a14df3a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d072de2fc307e3464921f13085b00901ca08e149f5c40e1444795445a14df3a0->enter($__internal_d072de2fc307e3464921f13085b00901ca08e149f5c40e1444795445a14df3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d94321ae54c914d4224f543ac2d170882a82fe2f79200399992202e16654e98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94321ae54c914d4224f543ac2d170882a82fe2f79200399992202e16654e98c->enter($__internal_d94321ae54c914d4224f543ac2d170882a82fe2f79200399992202e16654e98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d94321ae54c914d4224f543ac2d170882a82fe2f79200399992202e16654e98c->leave($__internal_d94321ae54c914d4224f543ac2d170882a82fe2f79200399992202e16654e98c_prof);

        
        $__internal_d072de2fc307e3464921f13085b00901ca08e149f5c40e1444795445a14df3a0->leave($__internal_d072de2fc307e3464921f13085b00901ca08e149f5c40e1444795445a14df3a0_prof);

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
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
