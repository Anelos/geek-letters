<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_122d2a804084345481e5ea37234c1ce5b4c06f25e264362f8e14db0d96d3822f extends Twig_Template
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
        $__internal_fe9dc49937abba6358509d1d4aa6908837b562ce80a4618d6422aaf4aeb2c36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9dc49937abba6358509d1d4aa6908837b562ce80a4618d6422aaf4aeb2c36b->enter($__internal_fe9dc49937abba6358509d1d4aa6908837b562ce80a4618d6422aaf4aeb2c36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7ba3cc3c1af7b74f9037ceab557d0bd4a74720bb8b4b06b9ec1a96810d8eb30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba3cc3c1af7b74f9037ceab557d0bd4a74720bb8b4b06b9ec1a96810d8eb30f->enter($__internal_7ba3cc3c1af7b74f9037ceab557d0bd4a74720bb8b4b06b9ec1a96810d8eb30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_fe9dc49937abba6358509d1d4aa6908837b562ce80a4618d6422aaf4aeb2c36b->leave($__internal_fe9dc49937abba6358509d1d4aa6908837b562ce80a4618d6422aaf4aeb2c36b_prof);

        
        $__internal_7ba3cc3c1af7b74f9037ceab557d0bd4a74720bb8b4b06b9ec1a96810d8eb30f->leave($__internal_7ba3cc3c1af7b74f9037ceab557d0bd4a74720bb8b4b06b9ec1a96810d8eb30f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_59846a7cdbc45873e82994e953749b3a71d318940c917dd3435ba7ae6846a52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59846a7cdbc45873e82994e953749b3a71d318940c917dd3435ba7ae6846a52d->enter($__internal_59846a7cdbc45873e82994e953749b3a71d318940c917dd3435ba7ae6846a52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1c259f1f59e60fe72720b27be2a185c05e81d4f9f1d79971293cc3d5effaf78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c259f1f59e60fe72720b27be2a185c05e81d4f9f1d79971293cc3d5effaf78->enter($__internal_f1c259f1f59e60fe72720b27be2a185c05e81d4f9f1d79971293cc3d5effaf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f1c259f1f59e60fe72720b27be2a185c05e81d4f9f1d79971293cc3d5effaf78->leave($__internal_f1c259f1f59e60fe72720b27be2a185c05e81d4f9f1d79971293cc3d5effaf78_prof);

        
        $__internal_59846a7cdbc45873e82994e953749b3a71d318940c917dd3435ba7ae6846a52d->leave($__internal_59846a7cdbc45873e82994e953749b3a71d318940c917dd3435ba7ae6846a52d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_84b2197c9923ef93a22f8680436530646e00f08b425f8ccefc650391fbb284ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b2197c9923ef93a22f8680436530646e00f08b425f8ccefc650391fbb284ff->enter($__internal_84b2197c9923ef93a22f8680436530646e00f08b425f8ccefc650391fbb284ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_18478c9960306e7aac176a400479a4514aaa5553c84cfd2df358a58eb06987b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18478c9960306e7aac176a400479a4514aaa5553c84cfd2df358a58eb06987b1->enter($__internal_18478c9960306e7aac176a400479a4514aaa5553c84cfd2df358a58eb06987b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_18478c9960306e7aac176a400479a4514aaa5553c84cfd2df358a58eb06987b1->leave($__internal_18478c9960306e7aac176a400479a4514aaa5553c84cfd2df358a58eb06987b1_prof);

        
        $__internal_84b2197c9923ef93a22f8680436530646e00f08b425f8ccefc650391fbb284ff->leave($__internal_84b2197c9923ef93a22f8680436530646e00f08b425f8ccefc650391fbb284ff_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_44c904fbbef54b732116ed54c7db588cad8f762e9b35d6b6cdd98981abb5c0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c904fbbef54b732116ed54c7db588cad8f762e9b35d6b6cdd98981abb5c0e9->enter($__internal_44c904fbbef54b732116ed54c7db588cad8f762e9b35d6b6cdd98981abb5c0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d14ddf23b705f66bfcd37d5c63e24226ddea8a08f207b258fcae1b516320c867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14ddf23b705f66bfcd37d5c63e24226ddea8a08f207b258fcae1b516320c867->enter($__internal_d14ddf23b705f66bfcd37d5c63e24226ddea8a08f207b258fcae1b516320c867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d14ddf23b705f66bfcd37d5c63e24226ddea8a08f207b258fcae1b516320c867->leave($__internal_d14ddf23b705f66bfcd37d5c63e24226ddea8a08f207b258fcae1b516320c867_prof);

        
        $__internal_44c904fbbef54b732116ed54c7db588cad8f762e9b35d6b6cdd98981abb5c0e9->leave($__internal_44c904fbbef54b732116ed54c7db588cad8f762e9b35d6b6cdd98981abb5c0e9_prof);

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
