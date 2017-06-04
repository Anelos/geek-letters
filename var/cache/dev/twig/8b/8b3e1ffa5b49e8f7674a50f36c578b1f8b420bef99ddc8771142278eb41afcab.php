<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_d312708a49b2231d448ee56f82aad9e3cd1ecc6778af4c59dc6f9febfc4c5be7 extends Twig_Template
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
        $__internal_6df024872aef5f8c9cd55d858b513c74143c27d2f5bd941f5c6bb4b2e0cd0f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df024872aef5f8c9cd55d858b513c74143c27d2f5bd941f5c6bb4b2e0cd0f66->enter($__internal_6df024872aef5f8c9cd55d858b513c74143c27d2f5bd941f5c6bb4b2e0cd0f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_d69cc44a83c5e961e078d3a4dffb5f1125b3e7a215d5aa5678e6eecd388f6b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69cc44a83c5e961e078d3a4dffb5f1125b3e7a215d5aa5678e6eecd388f6b2f->enter($__internal_d69cc44a83c5e961e078d3a4dffb5f1125b3e7a215d5aa5678e6eecd388f6b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6df024872aef5f8c9cd55d858b513c74143c27d2f5bd941f5c6bb4b2e0cd0f66->leave($__internal_6df024872aef5f8c9cd55d858b513c74143c27d2f5bd941f5c6bb4b2e0cd0f66_prof);

        
        $__internal_d69cc44a83c5e961e078d3a4dffb5f1125b3e7a215d5aa5678e6eecd388f6b2f->leave($__internal_d69cc44a83c5e961e078d3a4dffb5f1125b3e7a215d5aa5678e6eecd388f6b2f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Registration:register_content.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
