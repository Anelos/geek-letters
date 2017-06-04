<?php

/* FOSUserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_30eb4e32ab7dc67583aa28f58577fe3b98e882ba0873607497b9192aefd3db6e extends Twig_Template
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
        $__internal_8e3a5310f672d0e2f04d5635ec0a56a7754c18924a1b73d6f53930b6aaacdfe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3a5310f672d0e2f04d5635ec0a56a7754c18924a1b73d6f53930b6aaacdfe3->enter($__internal_8e3a5310f672d0e2f04d5635ec0a56a7754c18924a1b73d6f53930b6aaacdfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        $__internal_e97c227f258c699120b61083a4c68e17185c645514148ecae0213736bdc1854c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97c227f258c699120b61083a4c68e17185c645514148ecae0213736bdc1854c->enter($__internal_e97c227f258c699120b61083a4c68e17185c645514148ecae0213736bdc1854c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_8e3a5310f672d0e2f04d5635ec0a56a7754c18924a1b73d6f53930b6aaacdfe3->leave($__internal_8e3a5310f672d0e2f04d5635ec0a56a7754c18924a1b73d6f53930b6aaacdfe3_prof);

        
        $__internal_e97c227f258c699120b61083a4c68e17185c645514148ecae0213736bdc1854c->leave($__internal_e97c227f258c699120b61083a4c68e17185c645514148ecae0213736bdc1854c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:ChangePassword:change_password_content.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/ChangePassword/change_password_content.html.twig");
    }
}
