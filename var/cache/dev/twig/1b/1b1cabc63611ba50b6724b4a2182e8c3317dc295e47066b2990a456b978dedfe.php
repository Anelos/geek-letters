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
        $__internal_ec977c3d9bec236fed431a198304f705471df4231ba5a69669b32e1ae14ebaeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec977c3d9bec236fed431a198304f705471df4231ba5a69669b32e1ae14ebaeb->enter($__internal_ec977c3d9bec236fed431a198304f705471df4231ba5a69669b32e1ae14ebaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_782d39986bbb931fbf9459707ecb8ca2b476e1309c9514dbca977df135e9a48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782d39986bbb931fbf9459707ecb8ca2b476e1309c9514dbca977df135e9a48b->enter($__internal_782d39986bbb931fbf9459707ecb8ca2b476e1309c9514dbca977df135e9a48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_ec977c3d9bec236fed431a198304f705471df4231ba5a69669b32e1ae14ebaeb->leave($__internal_ec977c3d9bec236fed431a198304f705471df4231ba5a69669b32e1ae14ebaeb_prof);

        
        $__internal_782d39986bbb931fbf9459707ecb8ca2b476e1309c9514dbca977df135e9a48b->leave($__internal_782d39986bbb931fbf9459707ecb8ca2b476e1309c9514dbca977df135e9a48b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_71c00c059659376f114835e66488645c55db8f4fe1d4d7ce08bb926d0d269fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c00c059659376f114835e66488645c55db8f4fe1d4d7ce08bb926d0d269fb7->enter($__internal_71c00c059659376f114835e66488645c55db8f4fe1d4d7ce08bb926d0d269fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d602837d36fabd81a6afe9e0039f428c1add85472eedb2001e435617222f723b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d602837d36fabd81a6afe9e0039f428c1add85472eedb2001e435617222f723b->enter($__internal_d602837d36fabd81a6afe9e0039f428c1add85472eedb2001e435617222f723b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d602837d36fabd81a6afe9e0039f428c1add85472eedb2001e435617222f723b->leave($__internal_d602837d36fabd81a6afe9e0039f428c1add85472eedb2001e435617222f723b_prof);

        
        $__internal_71c00c059659376f114835e66488645c55db8f4fe1d4d7ce08bb926d0d269fb7->leave($__internal_71c00c059659376f114835e66488645c55db8f4fe1d4d7ce08bb926d0d269fb7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf746051b719353663458104ed319244dd2570ab09bbfec74dd308eef9c68482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf746051b719353663458104ed319244dd2570ab09bbfec74dd308eef9c68482->enter($__internal_cf746051b719353663458104ed319244dd2570ab09bbfec74dd308eef9c68482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_66588df523fb0be951da1a8f72ca6634851c0769b94fd9ec275d76e09a4fe019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66588df523fb0be951da1a8f72ca6634851c0769b94fd9ec275d76e09a4fe019->enter($__internal_66588df523fb0be951da1a8f72ca6634851c0769b94fd9ec275d76e09a4fe019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_66588df523fb0be951da1a8f72ca6634851c0769b94fd9ec275d76e09a4fe019->leave($__internal_66588df523fb0be951da1a8f72ca6634851c0769b94fd9ec275d76e09a4fe019_prof);

        
        $__internal_cf746051b719353663458104ed319244dd2570ab09bbfec74dd308eef9c68482->leave($__internal_cf746051b719353663458104ed319244dd2570ab09bbfec74dd308eef9c68482_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_444264e65f9351efb11676276c6d1337f1266ec7818d510f9a5f7c911ef560e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_444264e65f9351efb11676276c6d1337f1266ec7818d510f9a5f7c911ef560e2->enter($__internal_444264e65f9351efb11676276c6d1337f1266ec7818d510f9a5f7c911ef560e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_34761b901cebd2e0978cd4b87241ff55dd95258e0f709110c1d4ee194d93b597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34761b901cebd2e0978cd4b87241ff55dd95258e0f709110c1d4ee194d93b597->enter($__internal_34761b901cebd2e0978cd4b87241ff55dd95258e0f709110c1d4ee194d93b597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34761b901cebd2e0978cd4b87241ff55dd95258e0f709110c1d4ee194d93b597->leave($__internal_34761b901cebd2e0978cd4b87241ff55dd95258e0f709110c1d4ee194d93b597_prof);

        
        $__internal_444264e65f9351efb11676276c6d1337f1266ec7818d510f9a5f7c911ef560e2->leave($__internal_444264e65f9351efb11676276c6d1337f1266ec7818d510f9a5f7c911ef560e2_prof);

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
