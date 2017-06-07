<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_32466d8bada0239a170353e077980768d31a17883664cb1eb54945470955f392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_415b53c9a6df0d5729c070565200fe4b15daa692a3bfb5b342e5031d5a74f784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415b53c9a6df0d5729c070565200fe4b15daa692a3bfb5b342e5031d5a74f784->enter($__internal_415b53c9a6df0d5729c070565200fe4b15daa692a3bfb5b342e5031d5a74f784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_5bc1d01a7c680bc7cb9ea6d2fa2969ac651d90b9c336640021dc2fe3c10d5948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc1d01a7c680bc7cb9ea6d2fa2969ac651d90b9c336640021dc2fe3c10d5948->enter($__internal_5bc1d01a7c680bc7cb9ea6d2fa2969ac651d90b9c336640021dc2fe3c10d5948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_415b53c9a6df0d5729c070565200fe4b15daa692a3bfb5b342e5031d5a74f784->leave($__internal_415b53c9a6df0d5729c070565200fe4b15daa692a3bfb5b342e5031d5a74f784_prof);

        
        $__internal_5bc1d01a7c680bc7cb9ea6d2fa2969ac651d90b9c336640021dc2fe3c10d5948->leave($__internal_5bc1d01a7c680bc7cb9ea6d2fa2969ac651d90b9c336640021dc2fe3c10d5948_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_46b0201757391c8d0d5c7eda761be371331534de0852a1a74598eb4515d50037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b0201757391c8d0d5c7eda761be371331534de0852a1a74598eb4515d50037->enter($__internal_46b0201757391c8d0d5c7eda761be371331534de0852a1a74598eb4515d50037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15f0e536d1d9739dcf1cd77d03f6c28cabcef5db056fa4ce4ad65d45141454b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f0e536d1d9739dcf1cd77d03f6c28cabcef5db056fa4ce4ad65d45141454b5->enter($__internal_15f0e536d1d9739dcf1cd77d03f6c28cabcef5db056fa4ce4ad65d45141454b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_15f0e536d1d9739dcf1cd77d03f6c28cabcef5db056fa4ce4ad65d45141454b5->leave($__internal_15f0e536d1d9739dcf1cd77d03f6c28cabcef5db056fa4ce4ad65d45141454b5_prof);

        
        $__internal_46b0201757391c8d0d5c7eda761be371331534de0852a1a74598eb4515d50037->leave($__internal_46b0201757391c8d0d5c7eda761be371331534de0852a1a74598eb4515d50037_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_945de7906447066d8f20f563c364a08852e8dfe36cd2cf8e9ae34b96694ceeaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945de7906447066d8f20f563c364a08852e8dfe36cd2cf8e9ae34b96694ceeaf->enter($__internal_945de7906447066d8f20f563c364a08852e8dfe36cd2cf8e9ae34b96694ceeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_67277a59a5ae18205cefb84e0a2e36723a32cd0e181783d128c8dc827605bd77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67277a59a5ae18205cefb84e0a2e36723a32cd0e181783d128c8dc827605bd77->enter($__internal_67277a59a5ae18205cefb84e0a2e36723a32cd0e181783d128c8dc827605bd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_67277a59a5ae18205cefb84e0a2e36723a32cd0e181783d128c8dc827605bd77->leave($__internal_67277a59a5ae18205cefb84e0a2e36723a32cd0e181783d128c8dc827605bd77_prof);

        
        $__internal_945de7906447066d8f20f563c364a08852e8dfe36cd2cf8e9ae34b96694ceeaf->leave($__internal_945de7906447066d8f20f563c364a08852e8dfe36cd2cf8e9ae34b96694ceeaf_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_52a1d80913218665546be3b22020eb00eaa1fac327495d673cb783dd997a7ed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a1d80913218665546be3b22020eb00eaa1fac327495d673cb783dd997a7ed5->enter($__internal_52a1d80913218665546be3b22020eb00eaa1fac327495d673cb783dd997a7ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ff19afba05d6f39ad0239fd5e12afd92ecd5a6dcf79595ddf99a7be105e83af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff19afba05d6f39ad0239fd5e12afd92ecd5a6dcf79595ddf99a7be105e83af->enter($__internal_1ff19afba05d6f39ad0239fd5e12afd92ecd5a6dcf79595ddf99a7be105e83af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ff19afba05d6f39ad0239fd5e12afd92ecd5a6dcf79595ddf99a7be105e83af->leave($__internal_1ff19afba05d6f39ad0239fd5e12afd92ecd5a6dcf79595ddf99a7be105e83af_prof);

        
        $__internal_52a1d80913218665546be3b22020eb00eaa1fac327495d673cb783dd997a7ed5->leave($__internal_52a1d80913218665546be3b22020eb00eaa1fac327495d673cb783dd997a7ed5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
