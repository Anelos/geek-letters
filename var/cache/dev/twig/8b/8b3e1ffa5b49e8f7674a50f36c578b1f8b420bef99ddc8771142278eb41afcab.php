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
        $__internal_0390ad0dfdb6b454908810d96934570cbdb62fe89adb8e6c676a5030ce38583c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0390ad0dfdb6b454908810d96934570cbdb62fe89adb8e6c676a5030ce38583c->enter($__internal_0390ad0dfdb6b454908810d96934570cbdb62fe89adb8e6c676a5030ce38583c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_46fb8f7c2d03bf58831a71ccf62ad303e87f704a40683c6fed79b122bed8a764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fb8f7c2d03bf58831a71ccf62ad303e87f704a40683c6fed79b122bed8a764->enter($__internal_46fb8f7c2d03bf58831a71ccf62ad303e87f704a40683c6fed79b122bed8a764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
        
        $__internal_0390ad0dfdb6b454908810d96934570cbdb62fe89adb8e6c676a5030ce38583c->leave($__internal_0390ad0dfdb6b454908810d96934570cbdb62fe89adb8e6c676a5030ce38583c_prof);

        
        $__internal_46fb8f7c2d03bf58831a71ccf62ad303e87f704a40683c6fed79b122bed8a764->leave($__internal_46fb8f7c2d03bf58831a71ccf62ad303e87f704a40683c6fed79b122bed8a764_prof);

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
