<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_949c95ea60ea0d42ea92878e1a7b5cdb707e7141028b166a715ec27a5b7b1d3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_072f6fd3eb0f697be2c53fc7bd813348306780aa7827f397b7633c67dbe25c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072f6fd3eb0f697be2c53fc7bd813348306780aa7827f397b7633c67dbe25c56->enter($__internal_072f6fd3eb0f697be2c53fc7bd813348306780aa7827f397b7633c67dbe25c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_891bb68baeb4b0f34aae68a6479beb5448f8968fd77b8614a44914ed46cc27b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891bb68baeb4b0f34aae68a6479beb5448f8968fd77b8614a44914ed46cc27b8->enter($__internal_891bb68baeb4b0f34aae68a6479beb5448f8968fd77b8614a44914ed46cc27b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_072f6fd3eb0f697be2c53fc7bd813348306780aa7827f397b7633c67dbe25c56->leave($__internal_072f6fd3eb0f697be2c53fc7bd813348306780aa7827f397b7633c67dbe25c56_prof);

        
        $__internal_891bb68baeb4b0f34aae68a6479beb5448f8968fd77b8614a44914ed46cc27b8->leave($__internal_891bb68baeb4b0f34aae68a6479beb5448f8968fd77b8614a44914ed46cc27b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9bf88f39198cf39b2cc1b148a0d86c5eaca405d9e81964907a165d9d9e8a14ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf88f39198cf39b2cc1b148a0d86c5eaca405d9e81964907a165d9d9e8a14ce->enter($__internal_9bf88f39198cf39b2cc1b148a0d86c5eaca405d9e81964907a165d9d9e8a14ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f11dad2952c644374c89d0eb5a5973eee6510eedd91bdac53c1aa49af57782f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11dad2952c644374c89d0eb5a5973eee6510eedd91bdac53c1aa49af57782f2->enter($__internal_f11dad2952c644374c89d0eb5a5973eee6510eedd91bdac53c1aa49af57782f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_f11dad2952c644374c89d0eb5a5973eee6510eedd91bdac53c1aa49af57782f2->leave($__internal_f11dad2952c644374c89d0eb5a5973eee6510eedd91bdac53c1aa49af57782f2_prof);

        
        $__internal_9bf88f39198cf39b2cc1b148a0d86c5eaca405d9e81964907a165d9d9e8a14ce->leave($__internal_9bf88f39198cf39b2cc1b148a0d86c5eaca405d9e81964907a165d9d9e8a14ce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/geek-letters/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
