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
        $__internal_704b16d924942dfb776b871578fd786ab9114f0448577fad76e67d16ab00cef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704b16d924942dfb776b871578fd786ab9114f0448577fad76e67d16ab00cef6->enter($__internal_704b16d924942dfb776b871578fd786ab9114f0448577fad76e67d16ab00cef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_3832a7ed1e527fac07b68537f648470626d58dae237ab27da2b408b255ad0cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3832a7ed1e527fac07b68537f648470626d58dae237ab27da2b408b255ad0cf0->enter($__internal_3832a7ed1e527fac07b68537f648470626d58dae237ab27da2b408b255ad0cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_704b16d924942dfb776b871578fd786ab9114f0448577fad76e67d16ab00cef6->leave($__internal_704b16d924942dfb776b871578fd786ab9114f0448577fad76e67d16ab00cef6_prof);

        
        $__internal_3832a7ed1e527fac07b68537f648470626d58dae237ab27da2b408b255ad0cf0->leave($__internal_3832a7ed1e527fac07b68537f648470626d58dae237ab27da2b408b255ad0cf0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2df2040f83c5156e41b8cc4271578e226e312ab497b2dd4d6d034153c4fb17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2df2040f83c5156e41b8cc4271578e226e312ab497b2dd4d6d034153c4fb17a->enter($__internal_f2df2040f83c5156e41b8cc4271578e226e312ab497b2dd4d6d034153c4fb17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65d2fe9a6365c3605dd498c3ee3423f8c9b238aa95e188468f0087eb0e8d58c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d2fe9a6365c3605dd498c3ee3423f8c9b238aa95e188468f0087eb0e8d58c5->enter($__internal_65d2fe9a6365c3605dd498c3ee3423f8c9b238aa95e188468f0087eb0e8d58c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_65d2fe9a6365c3605dd498c3ee3423f8c9b238aa95e188468f0087eb0e8d58c5->leave($__internal_65d2fe9a6365c3605dd498c3ee3423f8c9b238aa95e188468f0087eb0e8d58c5_prof);

        
        $__internal_f2df2040f83c5156e41b8cc4271578e226e312ab497b2dd4d6d034153c4fb17a->leave($__internal_f2df2040f83c5156e41b8cc4271578e226e312ab497b2dd4d6d034153c4fb17a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e67975e128ada45cdf549c7091a9f8160b41da2d8c452a6f85fdbf2df42cc541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67975e128ada45cdf549c7091a9f8160b41da2d8c452a6f85fdbf2df42cc541->enter($__internal_e67975e128ada45cdf549c7091a9f8160b41da2d8c452a6f85fdbf2df42cc541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4269f448bf9329aea9263c75d97421d96be9da681a5f0f298fafd7956b466fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4269f448bf9329aea9263c75d97421d96be9da681a5f0f298fafd7956b466fbb->enter($__internal_4269f448bf9329aea9263c75d97421d96be9da681a5f0f298fafd7956b466fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4269f448bf9329aea9263c75d97421d96be9da681a5f0f298fafd7956b466fbb->leave($__internal_4269f448bf9329aea9263c75d97421d96be9da681a5f0f298fafd7956b466fbb_prof);

        
        $__internal_e67975e128ada45cdf549c7091a9f8160b41da2d8c452a6f85fdbf2df42cc541->leave($__internal_e67975e128ada45cdf549c7091a9f8160b41da2d8c452a6f85fdbf2df42cc541_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5d81b6a5d34c2761b7b4f8ce9e0638ea9018848fcc91a5febb672f00e3aad9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d81b6a5d34c2761b7b4f8ce9e0638ea9018848fcc91a5febb672f00e3aad9c->enter($__internal_a5d81b6a5d34c2761b7b4f8ce9e0638ea9018848fcc91a5febb672f00e3aad9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6d66803f6813d9150259019f484d78c636c8f52158c6159a7e0885defec981e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d66803f6813d9150259019f484d78c636c8f52158c6159a7e0885defec981e->enter($__internal_f6d66803f6813d9150259019f484d78c636c8f52158c6159a7e0885defec981e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f6d66803f6813d9150259019f484d78c636c8f52158c6159a7e0885defec981e->leave($__internal_f6d66803f6813d9150259019f484d78c636c8f52158c6159a7e0885defec981e_prof);

        
        $__internal_a5d81b6a5d34c2761b7b4f8ce9e0638ea9018848fcc91a5febb672f00e3aad9c->leave($__internal_a5d81b6a5d34c2761b7b4f8ce9e0638ea9018848fcc91a5febb672f00e3aad9c_prof);

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
