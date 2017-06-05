<?php

/* :category:new.html.twig */
class __TwigTemplate_5a36e18bf660d8903edacb6724432f5b5750ea1dc6dd613c955f758d5e76f976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":category:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac7be3a1ea119930ad499913cfc4f3bcb7148eeaddc1ce8082e82e0145d512ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7be3a1ea119930ad499913cfc4f3bcb7148eeaddc1ce8082e82e0145d512ad->enter($__internal_ac7be3a1ea119930ad499913cfc4f3bcb7148eeaddc1ce8082e82e0145d512ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $__internal_cae71d2e71e0ac2cba5bf6e659cba2329c84cc76479482bdaad8f7cc251f1c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae71d2e71e0ac2cba5bf6e659cba2329c84cc76479482bdaad8f7cc251f1c38->enter($__internal_cae71d2e71e0ac2cba5bf6e659cba2329c84cc76479482bdaad8f7cc251f1c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac7be3a1ea119930ad499913cfc4f3bcb7148eeaddc1ce8082e82e0145d512ad->leave($__internal_ac7be3a1ea119930ad499913cfc4f3bcb7148eeaddc1ce8082e82e0145d512ad_prof);

        
        $__internal_cae71d2e71e0ac2cba5bf6e659cba2329c84cc76479482bdaad8f7cc251f1c38->leave($__internal_cae71d2e71e0ac2cba5bf6e659cba2329c84cc76479482bdaad8f7cc251f1c38_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17c2a3ec8219ea051b914cd2afed2ef8a0ce2851a0e250ca8fef3ce2e33881cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c2a3ec8219ea051b914cd2afed2ef8a0ce2851a0e250ca8fef3ce2e33881cc->enter($__internal_17c2a3ec8219ea051b914cd2afed2ef8a0ce2851a0e250ca8fef3ce2e33881cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_576f0dfe03ebf762967f461e64f94f5dccc949415639ec089ce143bf6d7d9eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576f0dfe03ebf762967f461e64f94f5dccc949415639ec089ce143bf6d7d9eea->enter($__internal_576f0dfe03ebf762967f461e64f94f5dccc949415639ec089ce143bf6d7d9eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_576f0dfe03ebf762967f461e64f94f5dccc949415639ec089ce143bf6d7d9eea->leave($__internal_576f0dfe03ebf762967f461e64f94f5dccc949415639ec089ce143bf6d7d9eea_prof);

        
        $__internal_17c2a3ec8219ea051b914cd2afed2ef8a0ce2851a0e250ca8fef3ce2e33881cc->leave($__internal_17c2a3ec8219ea051b914cd2afed2ef8a0ce2851a0e250ca8fef3ce2e33881cc_prof);

    }

    public function getTemplateName()
    {
        return ":category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Category creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":category:new.html.twig", "/var/www/html/geek-letters/app/Resources/views/category/new.html.twig");
    }
}
