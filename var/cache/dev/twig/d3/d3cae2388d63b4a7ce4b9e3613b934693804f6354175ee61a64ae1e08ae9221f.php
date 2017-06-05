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
        $__internal_93b1aff65d9346d6e76b48ed12c523c7503164602280c9d48aff179e47d5cd07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b1aff65d9346d6e76b48ed12c523c7503164602280c9d48aff179e47d5cd07->enter($__internal_93b1aff65d9346d6e76b48ed12c523c7503164602280c9d48aff179e47d5cd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_76d526277b405d0eb9e1bb7ac516de29f91c509da197d29679f07da243672883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d526277b405d0eb9e1bb7ac516de29f91c509da197d29679f07da243672883->enter($__internal_76d526277b405d0eb9e1bb7ac516de29f91c509da197d29679f07da243672883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_93b1aff65d9346d6e76b48ed12c523c7503164602280c9d48aff179e47d5cd07->leave($__internal_93b1aff65d9346d6e76b48ed12c523c7503164602280c9d48aff179e47d5cd07_prof);

        
        $__internal_76d526277b405d0eb9e1bb7ac516de29f91c509da197d29679f07da243672883->leave($__internal_76d526277b405d0eb9e1bb7ac516de29f91c509da197d29679f07da243672883_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c43ab32d0e91865e40da073e0d447e4ad4174020e8d8de72e00131378a298245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43ab32d0e91865e40da073e0d447e4ad4174020e8d8de72e00131378a298245->enter($__internal_c43ab32d0e91865e40da073e0d447e4ad4174020e8d8de72e00131378a298245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_28af6792bd7e712af3cba03877f442ab9310fa67df24b19e94f8a6c68c9905d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28af6792bd7e712af3cba03877f442ab9310fa67df24b19e94f8a6c68c9905d7->enter($__internal_28af6792bd7e712af3cba03877f442ab9310fa67df24b19e94f8a6c68c9905d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_28af6792bd7e712af3cba03877f442ab9310fa67df24b19e94f8a6c68c9905d7->leave($__internal_28af6792bd7e712af3cba03877f442ab9310fa67df24b19e94f8a6c68c9905d7_prof);

        
        $__internal_c43ab32d0e91865e40da073e0d447e4ad4174020e8d8de72e00131378a298245->leave($__internal_c43ab32d0e91865e40da073e0d447e4ad4174020e8d8de72e00131378a298245_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8327f9c258610fcf664501d195ebd64bb4653914a2d40f4ea6789a488aba59ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8327f9c258610fcf664501d195ebd64bb4653914a2d40f4ea6789a488aba59ae->enter($__internal_8327f9c258610fcf664501d195ebd64bb4653914a2d40f4ea6789a488aba59ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8f26e81d0c65ed829bde4ded8b4a7dc6cfe5b4e26d6aea5bcf8398366163db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f26e81d0c65ed829bde4ded8b4a7dc6cfe5b4e26d6aea5bcf8398366163db8->enter($__internal_a8f26e81d0c65ed829bde4ded8b4a7dc6cfe5b4e26d6aea5bcf8398366163db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a8f26e81d0c65ed829bde4ded8b4a7dc6cfe5b4e26d6aea5bcf8398366163db8->leave($__internal_a8f26e81d0c65ed829bde4ded8b4a7dc6cfe5b4e26d6aea5bcf8398366163db8_prof);

        
        $__internal_8327f9c258610fcf664501d195ebd64bb4653914a2d40f4ea6789a488aba59ae->leave($__internal_8327f9c258610fcf664501d195ebd64bb4653914a2d40f4ea6789a488aba59ae_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7444436b22f35ef12f3a96d8570069344ccec25143149ed3ad6e37ec79040c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7444436b22f35ef12f3a96d8570069344ccec25143149ed3ad6e37ec79040c2->enter($__internal_b7444436b22f35ef12f3a96d8570069344ccec25143149ed3ad6e37ec79040c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f70b97672d26d3a309bb48856dce4b767f9be60f7ea846ed1eccc783bbd87c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f70b97672d26d3a309bb48856dce4b767f9be60f7ea846ed1eccc783bbd87c7->enter($__internal_0f70b97672d26d3a309bb48856dce4b767f9be60f7ea846ed1eccc783bbd87c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0f70b97672d26d3a309bb48856dce4b767f9be60f7ea846ed1eccc783bbd87c7->leave($__internal_0f70b97672d26d3a309bb48856dce4b767f9be60f7ea846ed1eccc783bbd87c7_prof);

        
        $__internal_b7444436b22f35ef12f3a96d8570069344ccec25143149ed3ad6e37ec79040c2->leave($__internal_b7444436b22f35ef12f3a96d8570069344ccec25143149ed3ad6e37ec79040c2_prof);

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
