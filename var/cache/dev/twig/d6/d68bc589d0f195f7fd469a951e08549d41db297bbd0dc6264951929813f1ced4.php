<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d966ca8c0a21ab24f0bdfd08af9fbbbf2f8a7075176123a8370bea2bc2a8cb6e extends Twig_Template
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
        $__internal_d5fa8d3471c678a617310ff58281de407cfa3372a3731f5368e2c45b98bfdb67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5fa8d3471c678a617310ff58281de407cfa3372a3731f5368e2c45b98bfdb67->enter($__internal_d5fa8d3471c678a617310ff58281de407cfa3372a3731f5368e2c45b98bfdb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_ac7d2bfec318bcbf6d872dd51e40243141dccd8bb9446c254a5b468565a1bfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7d2bfec318bcbf6d872dd51e40243141dccd8bb9446c254a5b468565a1bfbf->enter($__internal_ac7d2bfec318bcbf6d872dd51e40243141dccd8bb9446c254a5b468565a1bfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d5fa8d3471c678a617310ff58281de407cfa3372a3731f5368e2c45b98bfdb67->leave($__internal_d5fa8d3471c678a617310ff58281de407cfa3372a3731f5368e2c45b98bfdb67_prof);

        
        $__internal_ac7d2bfec318bcbf6d872dd51e40243141dccd8bb9446c254a5b468565a1bfbf->leave($__internal_ac7d2bfec318bcbf6d872dd51e40243141dccd8bb9446c254a5b468565a1bfbf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
