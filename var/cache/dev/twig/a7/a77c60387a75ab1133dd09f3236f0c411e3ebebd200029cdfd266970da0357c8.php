<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_705f4ed76cf93218e5fed0e7955cbf81faa31bd26b8de6086bb57ff3bda21b22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_efb70011ee966af12603d87830c7fce30f5851b2aa75d664e20c80e958561759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb70011ee966af12603d87830c7fce30f5851b2aa75d664e20c80e958561759->enter($__internal_efb70011ee966af12603d87830c7fce30f5851b2aa75d664e20c80e958561759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_76bfff822374c5f2ad81babaaa93cf86e1ea1b5d4793b5abe124adb433def144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76bfff822374c5f2ad81babaaa93cf86e1ea1b5d4793b5abe124adb433def144->enter($__internal_76bfff822374c5f2ad81babaaa93cf86e1ea1b5d4793b5abe124adb433def144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efb70011ee966af12603d87830c7fce30f5851b2aa75d664e20c80e958561759->leave($__internal_efb70011ee966af12603d87830c7fce30f5851b2aa75d664e20c80e958561759_prof);

        
        $__internal_76bfff822374c5f2ad81babaaa93cf86e1ea1b5d4793b5abe124adb433def144->leave($__internal_76bfff822374c5f2ad81babaaa93cf86e1ea1b5d4793b5abe124adb433def144_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c9731747bb3da9eff9a2e068c9d6653235e47a77bb01e11fc64c0d1c07af93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9731747bb3da9eff9a2e068c9d6653235e47a77bb01e11fc64c0d1c07af93d->enter($__internal_6c9731747bb3da9eff9a2e068c9d6653235e47a77bb01e11fc64c0d1c07af93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a8a189ac0e14a54ac02b9cf44a2ef895c56c35829dc18d943c271a368d24278b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a189ac0e14a54ac02b9cf44a2ef895c56c35829dc18d943c271a368d24278b->enter($__internal_a8a189ac0e14a54ac02b9cf44a2ef895c56c35829dc18d943c271a368d24278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_a8a189ac0e14a54ac02b9cf44a2ef895c56c35829dc18d943c271a368d24278b->leave($__internal_a8a189ac0e14a54ac02b9cf44a2ef895c56c35829dc18d943c271a368d24278b_prof);

        
        $__internal_6c9731747bb3da9eff9a2e068c9d6653235e47a77bb01e11fc64c0d1c07af93d->leave($__internal_6c9731747bb3da9eff9a2e068c9d6653235e47a77bb01e11fc64c0d1c07af93d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
