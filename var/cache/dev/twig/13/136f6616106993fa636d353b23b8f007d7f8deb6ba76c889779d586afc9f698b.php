<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_ae94af7562bfd123f6df49574300c8841d86267814b46e46a281d8116e0dc909 extends Twig_Template
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
        $__internal_417acec3fe8037db1627c301993786a36f64e1ca1c6289e5ef1f124a2ca68a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417acec3fe8037db1627c301993786a36f64e1ca1c6289e5ef1f124a2ca68a62->enter($__internal_417acec3fe8037db1627c301993786a36f64e1ca1c6289e5ef1f124a2ca68a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_6f7f69e8680b7f1ce83344ea54da968710d9d89a63cd119c9110b0ceb478435f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7f69e8680b7f1ce83344ea54da968710d9d89a63cd119c9110b0ceb478435f->enter($__internal_6f7f69e8680b7f1ce83344ea54da968710d9d89a63cd119c9110b0ceb478435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_417acec3fe8037db1627c301993786a36f64e1ca1c6289e5ef1f124a2ca68a62->leave($__internal_417acec3fe8037db1627c301993786a36f64e1ca1c6289e5ef1f124a2ca68a62_prof);

        
        $__internal_6f7f69e8680b7f1ce83344ea54da968710d9d89a63cd119c9110b0ceb478435f->leave($__internal_6f7f69e8680b7f1ce83344ea54da968710d9d89a63cd119c9110b0ceb478435f_prof);

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
", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
