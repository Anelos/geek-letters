<?php

/* @Twig/layout.html.twig */
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
        $__internal_38f4ca2e12577196d5f0b2ca0ff554c7363f7914380b22e81b7b7db0a4ad1e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f4ca2e12577196d5f0b2ca0ff554c7363f7914380b22e81b7b7db0a4ad1e39->enter($__internal_38f4ca2e12577196d5f0b2ca0ff554c7363f7914380b22e81b7b7db0a4ad1e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_db89f053fdee198a0bb70e3b758239b8b16fe615342adb86749fa29165111d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db89f053fdee198a0bb70e3b758239b8b16fe615342adb86749fa29165111d6a->enter($__internal_db89f053fdee198a0bb70e3b758239b8b16fe615342adb86749fa29165111d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_38f4ca2e12577196d5f0b2ca0ff554c7363f7914380b22e81b7b7db0a4ad1e39->leave($__internal_38f4ca2e12577196d5f0b2ca0ff554c7363f7914380b22e81b7b7db0a4ad1e39_prof);

        
        $__internal_db89f053fdee198a0bb70e3b758239b8b16fe615342adb86749fa29165111d6a->leave($__internal_db89f053fdee198a0bb70e3b758239b8b16fe615342adb86749fa29165111d6a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_66d8128a7553d5203f5042067d981325c01f480b21bf5a341b7559f8d8cad250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d8128a7553d5203f5042067d981325c01f480b21bf5a341b7559f8d8cad250->enter($__internal_66d8128a7553d5203f5042067d981325c01f480b21bf5a341b7559f8d8cad250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7107a1e3ccb228333b6833247b74abe543b398bc86f18622f571d1c3be0387d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7107a1e3ccb228333b6833247b74abe543b398bc86f18622f571d1c3be0387d->enter($__internal_c7107a1e3ccb228333b6833247b74abe543b398bc86f18622f571d1c3be0387d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c7107a1e3ccb228333b6833247b74abe543b398bc86f18622f571d1c3be0387d->leave($__internal_c7107a1e3ccb228333b6833247b74abe543b398bc86f18622f571d1c3be0387d_prof);

        
        $__internal_66d8128a7553d5203f5042067d981325c01f480b21bf5a341b7559f8d8cad250->leave($__internal_66d8128a7553d5203f5042067d981325c01f480b21bf5a341b7559f8d8cad250_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_98e8b7d4f0cf0af388d3ae76a8a2e483491cc1f328c539598717d6653aae7309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e8b7d4f0cf0af388d3ae76a8a2e483491cc1f328c539598717d6653aae7309->enter($__internal_98e8b7d4f0cf0af388d3ae76a8a2e483491cc1f328c539598717d6653aae7309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_68a767181bd3c999f9f43764fcb8bd90e339f2b5dfc0f46adeb95b3caa5a452e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a767181bd3c999f9f43764fcb8bd90e339f2b5dfc0f46adeb95b3caa5a452e->enter($__internal_68a767181bd3c999f9f43764fcb8bd90e339f2b5dfc0f46adeb95b3caa5a452e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_68a767181bd3c999f9f43764fcb8bd90e339f2b5dfc0f46adeb95b3caa5a452e->leave($__internal_68a767181bd3c999f9f43764fcb8bd90e339f2b5dfc0f46adeb95b3caa5a452e_prof);

        
        $__internal_98e8b7d4f0cf0af388d3ae76a8a2e483491cc1f328c539598717d6653aae7309->leave($__internal_98e8b7d4f0cf0af388d3ae76a8a2e483491cc1f328c539598717d6653aae7309_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_20f512c16a1dbb75ba558ced65bc417a8d284628718722d0ec55380052d331aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f512c16a1dbb75ba558ced65bc417a8d284628718722d0ec55380052d331aa->enter($__internal_20f512c16a1dbb75ba558ced65bc417a8d284628718722d0ec55380052d331aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01cb7962aa1ba7695d5bb678fde6d6b3d81afa0bdff027578549e4babf8f5c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cb7962aa1ba7695d5bb678fde6d6b3d81afa0bdff027578549e4babf8f5c93->enter($__internal_01cb7962aa1ba7695d5bb678fde6d6b3d81afa0bdff027578549e4babf8f5c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01cb7962aa1ba7695d5bb678fde6d6b3d81afa0bdff027578549e4babf8f5c93->leave($__internal_01cb7962aa1ba7695d5bb678fde6d6b3d81afa0bdff027578549e4babf8f5c93_prof);

        
        $__internal_20f512c16a1dbb75ba558ced65bc417a8d284628718722d0ec55380052d331aa->leave($__internal_20f512c16a1dbb75ba558ced65bc417a8d284628718722d0ec55380052d331aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "/var/www/html/geek-letters/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
