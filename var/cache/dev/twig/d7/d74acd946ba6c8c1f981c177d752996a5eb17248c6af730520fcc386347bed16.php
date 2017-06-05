<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e88e954dd7d6516e205ead04a316ae53fbc519014a45cc0b0f4506a0cc59a2aa extends Twig_Template
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
        $__internal_ee3326b26dfdba4ee8cdd09d6cd37f3c39cfbb4c5df4f195c9a84679bd89bc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3326b26dfdba4ee8cdd09d6cd37f3c39cfbb4c5df4f195c9a84679bd89bc75->enter($__internal_ee3326b26dfdba4ee8cdd09d6cd37f3c39cfbb4c5df4f195c9a84679bd89bc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_eb8d6a3b91c4c52044fb99369663c2cf77138205ac129ad6f7422bd900980f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8d6a3b91c4c52044fb99369663c2cf77138205ac129ad6f7422bd900980f8b->enter($__internal_eb8d6a3b91c4c52044fb99369663c2cf77138205ac129ad6f7422bd900980f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ee3326b26dfdba4ee8cdd09d6cd37f3c39cfbb4c5df4f195c9a84679bd89bc75->leave($__internal_ee3326b26dfdba4ee8cdd09d6cd37f3c39cfbb4c5df4f195c9a84679bd89bc75_prof);

        
        $__internal_eb8d6a3b91c4c52044fb99369663c2cf77138205ac129ad6f7422bd900980f8b->leave($__internal_eb8d6a3b91c4c52044fb99369663c2cf77138205ac129ad6f7422bd900980f8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
