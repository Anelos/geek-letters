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
        $__internal_df5c202704c42628a4aaf9ecafd0b205674c58990ff05da0d7bcb3d912bddcf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5c202704c42628a4aaf9ecafd0b205674c58990ff05da0d7bcb3d912bddcf8->enter($__internal_df5c202704c42628a4aaf9ecafd0b205674c58990ff05da0d7bcb3d912bddcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_678096686fd776e685368b972aeb9fbca66d8c246d8ea0b19a326cee132b4f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678096686fd776e685368b972aeb9fbca66d8c246d8ea0b19a326cee132b4f6f->enter($__internal_678096686fd776e685368b972aeb9fbca66d8c246d8ea0b19a326cee132b4f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_df5c202704c42628a4aaf9ecafd0b205674c58990ff05da0d7bcb3d912bddcf8->leave($__internal_df5c202704c42628a4aaf9ecafd0b205674c58990ff05da0d7bcb3d912bddcf8_prof);

        
        $__internal_678096686fd776e685368b972aeb9fbca66d8c246d8ea0b19a326cee132b4f6f->leave($__internal_678096686fd776e685368b972aeb9fbca66d8c246d8ea0b19a326cee132b4f6f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c645007047df9bc74ba1b1d6fa158b4ab385ab36a2bd2899556b38e66f5b06ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c645007047df9bc74ba1b1d6fa158b4ab385ab36a2bd2899556b38e66f5b06ec->enter($__internal_c645007047df9bc74ba1b1d6fa158b4ab385ab36a2bd2899556b38e66f5b06ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ce61cede6b38fbdc2efd21cd49e006f736acf0894d4bf04b534cae07fcbf1d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce61cede6b38fbdc2efd21cd49e006f736acf0894d4bf04b534cae07fcbf1d38->enter($__internal_ce61cede6b38fbdc2efd21cd49e006f736acf0894d4bf04b534cae07fcbf1d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ce61cede6b38fbdc2efd21cd49e006f736acf0894d4bf04b534cae07fcbf1d38->leave($__internal_ce61cede6b38fbdc2efd21cd49e006f736acf0894d4bf04b534cae07fcbf1d38_prof);

        
        $__internal_c645007047df9bc74ba1b1d6fa158b4ab385ab36a2bd2899556b38e66f5b06ec->leave($__internal_c645007047df9bc74ba1b1d6fa158b4ab385ab36a2bd2899556b38e66f5b06ec_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1d3e564859b38a2be89d783d4b6167da32a187e70c8d1c455d5782ab6df87553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3e564859b38a2be89d783d4b6167da32a187e70c8d1c455d5782ab6df87553->enter($__internal_1d3e564859b38a2be89d783d4b6167da32a187e70c8d1c455d5782ab6df87553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c564bab0da23898524dbf1959d0e35185072af00c8234796b719cbadb24a70e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c564bab0da23898524dbf1959d0e35185072af00c8234796b719cbadb24a70e6->enter($__internal_c564bab0da23898524dbf1959d0e35185072af00c8234796b719cbadb24a70e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c564bab0da23898524dbf1959d0e35185072af00c8234796b719cbadb24a70e6->leave($__internal_c564bab0da23898524dbf1959d0e35185072af00c8234796b719cbadb24a70e6_prof);

        
        $__internal_1d3e564859b38a2be89d783d4b6167da32a187e70c8d1c455d5782ab6df87553->leave($__internal_1d3e564859b38a2be89d783d4b6167da32a187e70c8d1c455d5782ab6df87553_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e01bdc327d4aa63ac370b4f322fc727890a6ede24041ff69ff72a05f0988f627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01bdc327d4aa63ac370b4f322fc727890a6ede24041ff69ff72a05f0988f627->enter($__internal_e01bdc327d4aa63ac370b4f322fc727890a6ede24041ff69ff72a05f0988f627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a930d2dd996d7d26d3687a91eafe37e0b9216f28e0d33fbf2894830be8f13b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a930d2dd996d7d26d3687a91eafe37e0b9216f28e0d33fbf2894830be8f13b8->enter($__internal_6a930d2dd996d7d26d3687a91eafe37e0b9216f28e0d33fbf2894830be8f13b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6a930d2dd996d7d26d3687a91eafe37e0b9216f28e0d33fbf2894830be8f13b8->leave($__internal_6a930d2dd996d7d26d3687a91eafe37e0b9216f28e0d33fbf2894830be8f13b8_prof);

        
        $__internal_e01bdc327d4aa63ac370b4f322fc727890a6ede24041ff69ff72a05f0988f627->leave($__internal_e01bdc327d4aa63ac370b4f322fc727890a6ede24041ff69ff72a05f0988f627_prof);

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
