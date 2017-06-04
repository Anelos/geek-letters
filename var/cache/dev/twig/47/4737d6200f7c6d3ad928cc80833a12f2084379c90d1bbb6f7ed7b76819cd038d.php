<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_e7f7cf18c67cdbec30756d9bb6856d4da955830b31ea6219939eb6e5ad593e0c extends Twig_Template
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
        $__internal_a0af6c14a3a0097b0f1d489b98ca38ebd12bdbf50f95ef6598bd489a3fdcd92e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0af6c14a3a0097b0f1d489b98ca38ebd12bdbf50f95ef6598bd489a3fdcd92e->enter($__internal_a0af6c14a3a0097b0f1d489b98ca38ebd12bdbf50f95ef6598bd489a3fdcd92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        $__internal_34085b4d44508d1cef2ea60ed141cd2167d1030e3e3143e32e6e2cf8239e74ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34085b4d44508d1cef2ea60ed141cd2167d1030e3e3143e32e6e2cf8239e74ef->enter($__internal_34085b4d44508d1cef2ea60ed141cd2167d1030e3e3143e32e6e2cf8239e74ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => ($context["token"] ?? $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a0af6c14a3a0097b0f1d489b98ca38ebd12bdbf50f95ef6598bd489a3fdcd92e->leave($__internal_a0af6c14a3a0097b0f1d489b98ca38ebd12bdbf50f95ef6598bd489a3fdcd92e_prof);

        
        $__internal_34085b4d44508d1cef2ea60ed141cd2167d1030e3e3143e32e6e2cf8239e74ef->leave($__internal_34085b4d44508d1cef2ea60ed141cd2167d1030e3e3143e32e6e2cf8239e74ef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Resetting:reset_content.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
