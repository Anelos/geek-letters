<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_66293331936a2aa7c4b74f80ac8d4eff92c085b87023b1b53c2be37c49bcd410 extends Twig_Template
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
        $__internal_a37ca98fcae249781f54ee7cea3f3ca4eea566fa4f79e14eacf53fc2d2e4ad5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37ca98fcae249781f54ee7cea3f3ca4eea566fa4f79e14eacf53fc2d2e4ad5e->enter($__internal_a37ca98fcae249781f54ee7cea3f3ca4eea566fa4f79e14eacf53fc2d2e4ad5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_9f226e9c85128e9a8470a3de0fc2a1cece28b2c09911337ca92535f6713bc182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f226e9c85128e9a8470a3de0fc2a1cece28b2c09911337ca92535f6713bc182->enter($__internal_9f226e9c85128e9a8470a3de0fc2a1cece28b2c09911337ca92535f6713bc182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a37ca98fcae249781f54ee7cea3f3ca4eea566fa4f79e14eacf53fc2d2e4ad5e->leave($__internal_a37ca98fcae249781f54ee7cea3f3ca4eea566fa4f79e14eacf53fc2d2e4ad5e_prof);

        
        $__internal_9f226e9c85128e9a8470a3de0fc2a1cece28b2c09911337ca92535f6713bc182->leave($__internal_9f226e9c85128e9a8470a3de0fc2a1cece28b2c09911337ca92535f6713bc182_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Group/new_content.html.twig");
    }
}
