<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_6059c97eb104b81cfd71dcd2e7a40e97654155a165a7f7c56625f0e0c8b0c90e extends Twig_Template
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
        $__internal_672dde5cd6a46786f41466809a4831f681a43942c7ffbad5c955f365a130000c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_672dde5cd6a46786f41466809a4831f681a43942c7ffbad5c955f365a130000c->enter($__internal_672dde5cd6a46786f41466809a4831f681a43942c7ffbad5c955f365a130000c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_4e1eeb73a2a25f140edd8ca8c125c07f4264cd5a9341fd05099bf4c4a8301f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1eeb73a2a25f140edd8ca8c125c07f4264cd5a9341fd05099bf4c4a8301f64->enter($__internal_4e1eeb73a2a25f140edd8ca8c125c07f4264cd5a9341fd05099bf4c4a8301f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_672dde5cd6a46786f41466809a4831f681a43942c7ffbad5c955f365a130000c->leave($__internal_672dde5cd6a46786f41466809a4831f681a43942c7ffbad5c955f365a130000c_prof);

        
        $__internal_4e1eeb73a2a25f140edd8ca8c125c07f4264cd5a9341fd05099bf4c4a8301f64->leave($__internal_4e1eeb73a2a25f140edd8ca8c125c07f4264cd5a9341fd05099bf4c4a8301f64_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
