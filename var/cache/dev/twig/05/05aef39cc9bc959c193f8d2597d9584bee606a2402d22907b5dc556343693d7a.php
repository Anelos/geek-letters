<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_c32d944409df6ef3b1e9cfcfd3b01900f82343064f0e6e213af62139fd636b37 extends Twig_Template
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
        $__internal_0c14ce5b1f5a08fccc4acfe3d315bdfbcb7940d14c7c6ec81d544e5edf01c70e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c14ce5b1f5a08fccc4acfe3d315bdfbcb7940d14c7c6ec81d544e5edf01c70e->enter($__internal_0c14ce5b1f5a08fccc4acfe3d315bdfbcb7940d14c7c6ec81d544e5edf01c70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        $__internal_0d263dc968cfaef31f772373ec5ab9f898c5695f8454818b3720adc81f0a0bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d263dc968cfaef31f772373ec5ab9f898c5695f8454818b3720adc81f0a0bbc->enter($__internal_0d263dc968cfaef31f772373ec5ab9f898c5695f8454818b3720adc81f0a0bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

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
        
        $__internal_0c14ce5b1f5a08fccc4acfe3d315bdfbcb7940d14c7c6ec81d544e5edf01c70e->leave($__internal_0c14ce5b1f5a08fccc4acfe3d315bdfbcb7940d14c7c6ec81d544e5edf01c70e_prof);

        
        $__internal_0d263dc968cfaef31f772373ec5ab9f898c5695f8454818b3720adc81f0a0bbc->leave($__internal_0d263dc968cfaef31f772373ec5ab9f898c5695f8454818b3720adc81f0a0bbc_prof);

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
", "FOSUserBundle:Group:edit_content.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Group/edit_content.html.twig");
    }
}
