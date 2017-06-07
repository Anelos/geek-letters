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
        $__internal_e190fc97fbe7e508154650b48289de7a5a955a9a8ef2acd9f4fdbf9dc0b357f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e190fc97fbe7e508154650b48289de7a5a955a9a8ef2acd9f4fdbf9dc0b357f0->enter($__internal_e190fc97fbe7e508154650b48289de7a5a955a9a8ef2acd9f4fdbf9dc0b357f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_131f1168b19cac23f5aec63f574e4c207dffa38d283599f4e7348f1386166e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131f1168b19cac23f5aec63f574e4c207dffa38d283599f4e7348f1386166e0e->enter($__internal_131f1168b19cac23f5aec63f574e4c207dffa38d283599f4e7348f1386166e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_e190fc97fbe7e508154650b48289de7a5a955a9a8ef2acd9f4fdbf9dc0b357f0->leave($__internal_e190fc97fbe7e508154650b48289de7a5a955a9a8ef2acd9f4fdbf9dc0b357f0_prof);

        
        $__internal_131f1168b19cac23f5aec63f574e4c207dffa38d283599f4e7348f1386166e0e->leave($__internal_131f1168b19cac23f5aec63f574e4c207dffa38d283599f4e7348f1386166e0e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17b6e1bd6687d9b1ff52fb046ae595149b54ef0a54e9c645a59e82f2b82145be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b6e1bd6687d9b1ff52fb046ae595149b54ef0a54e9c645a59e82f2b82145be->enter($__internal_17b6e1bd6687d9b1ff52fb046ae595149b54ef0a54e9c645a59e82f2b82145be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2794519a2b3910c85041ecc91b01ae6afd24fcbb18851347328b9c8acafab67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2794519a2b3910c85041ecc91b01ae6afd24fcbb18851347328b9c8acafab67d->enter($__internal_2794519a2b3910c85041ecc91b01ae6afd24fcbb18851347328b9c8acafab67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2794519a2b3910c85041ecc91b01ae6afd24fcbb18851347328b9c8acafab67d->leave($__internal_2794519a2b3910c85041ecc91b01ae6afd24fcbb18851347328b9c8acafab67d_prof);

        
        $__internal_17b6e1bd6687d9b1ff52fb046ae595149b54ef0a54e9c645a59e82f2b82145be->leave($__internal_17b6e1bd6687d9b1ff52fb046ae595149b54ef0a54e9c645a59e82f2b82145be_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_194d2a8d00a863f748b6f7c1438f65bde6a8f7da05b3402a918a7d7571f32ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194d2a8d00a863f748b6f7c1438f65bde6a8f7da05b3402a918a7d7571f32ff9->enter($__internal_194d2a8d00a863f748b6f7c1438f65bde6a8f7da05b3402a918a7d7571f32ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da4ebe3c27513936a175d38f9ecebe9ceecfea45cd8269dd9922add8f9a07757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4ebe3c27513936a175d38f9ecebe9ceecfea45cd8269dd9922add8f9a07757->enter($__internal_da4ebe3c27513936a175d38f9ecebe9ceecfea45cd8269dd9922add8f9a07757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_da4ebe3c27513936a175d38f9ecebe9ceecfea45cd8269dd9922add8f9a07757->leave($__internal_da4ebe3c27513936a175d38f9ecebe9ceecfea45cd8269dd9922add8f9a07757_prof);

        
        $__internal_194d2a8d00a863f748b6f7c1438f65bde6a8f7da05b3402a918a7d7571f32ff9->leave($__internal_194d2a8d00a863f748b6f7c1438f65bde6a8f7da05b3402a918a7d7571f32ff9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3283ca42d3e48eb7866b99f13188394c1b1cd7bbfb333a0e123efeed89dcd886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3283ca42d3e48eb7866b99f13188394c1b1cd7bbfb333a0e123efeed89dcd886->enter($__internal_3283ca42d3e48eb7866b99f13188394c1b1cd7bbfb333a0e123efeed89dcd886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14e85461926b316d14a4c11e338e8a414b02cf4a1aed3723ea97c388fe7d48f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e85461926b316d14a4c11e338e8a414b02cf4a1aed3723ea97c388fe7d48f7->enter($__internal_14e85461926b316d14a4c11e338e8a414b02cf4a1aed3723ea97c388fe7d48f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_14e85461926b316d14a4c11e338e8a414b02cf4a1aed3723ea97c388fe7d48f7->leave($__internal_14e85461926b316d14a4c11e338e8a414b02cf4a1aed3723ea97c388fe7d48f7_prof);

        
        $__internal_3283ca42d3e48eb7866b99f13188394c1b1cd7bbfb333a0e123efeed89dcd886->leave($__internal_3283ca42d3e48eb7866b99f13188394c1b1cd7bbfb333a0e123efeed89dcd886_prof);

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
