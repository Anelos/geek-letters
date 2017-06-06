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
        $__internal_20eca79bbb9852722e1ad30d332d0622c7d936f90a9ed7e734ed7ce896361ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20eca79bbb9852722e1ad30d332d0622c7d936f90a9ed7e734ed7ce896361ecb->enter($__internal_20eca79bbb9852722e1ad30d332d0622c7d936f90a9ed7e734ed7ce896361ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_752770dd75ae65ca253dc9fb590ecb0e3738cb1b0597efddb278f37b15eef8cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752770dd75ae65ca253dc9fb590ecb0e3738cb1b0597efddb278f37b15eef8cd->enter($__internal_752770dd75ae65ca253dc9fb590ecb0e3738cb1b0597efddb278f37b15eef8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_20eca79bbb9852722e1ad30d332d0622c7d936f90a9ed7e734ed7ce896361ecb->leave($__internal_20eca79bbb9852722e1ad30d332d0622c7d936f90a9ed7e734ed7ce896361ecb_prof);

        
        $__internal_752770dd75ae65ca253dc9fb590ecb0e3738cb1b0597efddb278f37b15eef8cd->leave($__internal_752770dd75ae65ca253dc9fb590ecb0e3738cb1b0597efddb278f37b15eef8cd_prof);

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
