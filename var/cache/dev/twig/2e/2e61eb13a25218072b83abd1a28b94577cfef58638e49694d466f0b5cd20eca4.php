<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ab15a82d2f41667fe112fcd096c096aff147d0b28598b090b6fef89ccc5aa14c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aad651899473ac1823704ff5c34384ca085bf5fb6d87b06c34bf610688ee6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aad651899473ac1823704ff5c34384ca085bf5fb6d87b06c34bf610688ee6e0->enter($__internal_3aad651899473ac1823704ff5c34384ca085bf5fb6d87b06c34bf610688ee6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_995d7040deafbbd3d2529634ea586a932c4fd9c52089cb90b820ef5f1163b6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995d7040deafbbd3d2529634ea586a932c4fd9c52089cb90b820ef5f1163b6c5->enter($__internal_995d7040deafbbd3d2529634ea586a932c4fd9c52089cb90b820ef5f1163b6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aad651899473ac1823704ff5c34384ca085bf5fb6d87b06c34bf610688ee6e0->leave($__internal_3aad651899473ac1823704ff5c34384ca085bf5fb6d87b06c34bf610688ee6e0_prof);

        
        $__internal_995d7040deafbbd3d2529634ea586a932c4fd9c52089cb90b820ef5f1163b6c5->leave($__internal_995d7040deafbbd3d2529634ea586a932c4fd9c52089cb90b820ef5f1163b6c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebd2146b7135dda0e7042154a8f0abbd3146917b2f32f2363f3edae58c88c186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd2146b7135dda0e7042154a8f0abbd3146917b2f32f2363f3edae58c88c186->enter($__internal_ebd2146b7135dda0e7042154a8f0abbd3146917b2f32f2363f3edae58c88c186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d6fe13e86e1373ba8925cd7f99b0d0e5cee1462b459524f1e3fd9b478bd7d3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6fe13e86e1373ba8925cd7f99b0d0e5cee1462b459524f1e3fd9b478bd7d3f2->enter($__internal_d6fe13e86e1373ba8925cd7f99b0d0e5cee1462b459524f1e3fd9b478bd7d3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d6fe13e86e1373ba8925cd7f99b0d0e5cee1462b459524f1e3fd9b478bd7d3f2->leave($__internal_d6fe13e86e1373ba8925cd7f99b0d0e5cee1462b459524f1e3fd9b478bd7d3f2_prof);

        
        $__internal_ebd2146b7135dda0e7042154a8f0abbd3146917b2f32f2363f3edae58c88c186->leave($__internal_ebd2146b7135dda0e7042154a8f0abbd3146917b2f32f2363f3edae58c88c186_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_99955e6601f9b63be371852a8fbd94784f79898e2891277c997afbc9c2ab46d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99955e6601f9b63be371852a8fbd94784f79898e2891277c997afbc9c2ab46d6->enter($__internal_99955e6601f9b63be371852a8fbd94784f79898e2891277c997afbc9c2ab46d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a05cfecd8d3b3058d1075cf3973c8337b8f147892a278305ce49b1a88f1c0c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05cfecd8d3b3058d1075cf3973c8337b8f147892a278305ce49b1a88f1c0c18->enter($__internal_a05cfecd8d3b3058d1075cf3973c8337b8f147892a278305ce49b1a88f1c0c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a05cfecd8d3b3058d1075cf3973c8337b8f147892a278305ce49b1a88f1c0c18->leave($__internal_a05cfecd8d3b3058d1075cf3973c8337b8f147892a278305ce49b1a88f1c0c18_prof);

        
        $__internal_99955e6601f9b63be371852a8fbd94784f79898e2891277c997afbc9c2ab46d6->leave($__internal_99955e6601f9b63be371852a8fbd94784f79898e2891277c997afbc9c2ab46d6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
