<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b4af14ac508032fa5374739cd82b9604feecd3413e63e9fcc418a3beda202bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_f97cdb01872b22d875c022fa3572f3a2107b1c045db9724ca5f3c9a7ba75927f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f97cdb01872b22d875c022fa3572f3a2107b1c045db9724ca5f3c9a7ba75927f->enter($__internal_f97cdb01872b22d875c022fa3572f3a2107b1c045db9724ca5f3c9a7ba75927f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_b91504aadefae3e6ab77d844bfc714de7318bc79c828602da1a138a3540178e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91504aadefae3e6ab77d844bfc714de7318bc79c828602da1a138a3540178e1->enter($__internal_b91504aadefae3e6ab77d844bfc714de7318bc79c828602da1a138a3540178e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f97cdb01872b22d875c022fa3572f3a2107b1c045db9724ca5f3c9a7ba75927f->leave($__internal_f97cdb01872b22d875c022fa3572f3a2107b1c045db9724ca5f3c9a7ba75927f_prof);

        
        $__internal_b91504aadefae3e6ab77d844bfc714de7318bc79c828602da1a138a3540178e1->leave($__internal_b91504aadefae3e6ab77d844bfc714de7318bc79c828602da1a138a3540178e1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01ec9198e06dd7d28198228f742d34a2f008cf96523775b05f024729469503af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ec9198e06dd7d28198228f742d34a2f008cf96523775b05f024729469503af->enter($__internal_01ec9198e06dd7d28198228f742d34a2f008cf96523775b05f024729469503af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5a06770c995d8480f333f32f35cc480be6b68a48bf00204b9fe6ed8be88d0d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a06770c995d8480f333f32f35cc480be6b68a48bf00204b9fe6ed8be88d0d1c->enter($__internal_5a06770c995d8480f333f32f35cc480be6b68a48bf00204b9fe6ed8be88d0d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5a06770c995d8480f333f32f35cc480be6b68a48bf00204b9fe6ed8be88d0d1c->leave($__internal_5a06770c995d8480f333f32f35cc480be6b68a48bf00204b9fe6ed8be88d0d1c_prof);

        
        $__internal_01ec9198e06dd7d28198228f742d34a2f008cf96523775b05f024729469503af->leave($__internal_01ec9198e06dd7d28198228f742d34a2f008cf96523775b05f024729469503af_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
