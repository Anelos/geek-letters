<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_cf3be993d6181d146b075c0ea48039846359725e991ecbded4625b87421a1b43 extends Twig_Template
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
        $__internal_063f47a5aefdc7abc7228fb4c02b2f42e89cd3fa9f235d6134ff261acf556a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063f47a5aefdc7abc7228fb4c02b2f42e89cd3fa9f235d6134ff261acf556a96->enter($__internal_063f47a5aefdc7abc7228fb4c02b2f42e89cd3fa9f235d6134ff261acf556a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        $__internal_92ffe64e976db13c266c568e0d273c12aa6ca28512152b278c14feb329f56f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ffe64e976db13c266c568e0d273c12aa6ca28512152b278c14feb329f56f32->enter($__internal_92ffe64e976db13c266c568e0d273c12aa6ca28512152b278c14feb329f56f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => ($context["group_name"] ?? $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_063f47a5aefdc7abc7228fb4c02b2f42e89cd3fa9f235d6134ff261acf556a96->leave($__internal_063f47a5aefdc7abc7228fb4c02b2f42e89cd3fa9f235d6134ff261acf556a96_prof);

        
        $__internal_92ffe64e976db13c266c568e0d273c12aa6ca28512152b278c14feb329f56f32->leave($__internal_92ffe64e976db13c266c568e0d273c12aa6ca28512152b278c14feb329f56f32_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:edit_content.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit_content.html.twig");
    }
}
