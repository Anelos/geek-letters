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
        $__internal_698e3d089c1b5d1ee25b80a9be7ce1b9859f4a8e6ce4703b3d46c5407b9981d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698e3d089c1b5d1ee25b80a9be7ce1b9859f4a8e6ce4703b3d46c5407b9981d2->enter($__internal_698e3d089c1b5d1ee25b80a9be7ce1b9859f4a8e6ce4703b3d46c5407b9981d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f69a221275bb7bdf3aca7394b7b659c1ef4bcce0ac30793595020a4c0b00d242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69a221275bb7bdf3aca7394b7b659c1ef4bcce0ac30793595020a4c0b00d242->enter($__internal_f69a221275bb7bdf3aca7394b7b659c1ef4bcce0ac30793595020a4c0b00d242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_698e3d089c1b5d1ee25b80a9be7ce1b9859f4a8e6ce4703b3d46c5407b9981d2->leave($__internal_698e3d089c1b5d1ee25b80a9be7ce1b9859f4a8e6ce4703b3d46c5407b9981d2_prof);

        
        $__internal_f69a221275bb7bdf3aca7394b7b659c1ef4bcce0ac30793595020a4c0b00d242->leave($__internal_f69a221275bb7bdf3aca7394b7b659c1ef4bcce0ac30793595020a4c0b00d242_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7bb4e751ca2019bd7fc34f38002615927f011834e2a5e97629531f8fa9b0a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7bb4e751ca2019bd7fc34f38002615927f011834e2a5e97629531f8fa9b0a3e->enter($__internal_c7bb4e751ca2019bd7fc34f38002615927f011834e2a5e97629531f8fa9b0a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17e10e3de63350fa1763b54553db45f0f8c5ee9336f618c81c820d80dc48b41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e10e3de63350fa1763b54553db45f0f8c5ee9336f618c81c820d80dc48b41e->enter($__internal_17e10e3de63350fa1763b54553db45f0f8c5ee9336f618c81c820d80dc48b41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_17e10e3de63350fa1763b54553db45f0f8c5ee9336f618c81c820d80dc48b41e->leave($__internal_17e10e3de63350fa1763b54553db45f0f8c5ee9336f618c81c820d80dc48b41e_prof);

        
        $__internal_c7bb4e751ca2019bd7fc34f38002615927f011834e2a5e97629531f8fa9b0a3e->leave($__internal_c7bb4e751ca2019bd7fc34f38002615927f011834e2a5e97629531f8fa9b0a3e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fcee5109b2bdbf1e781f69d314a4788563b7d3a8835bea3fe994e5a0a7898f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcee5109b2bdbf1e781f69d314a4788563b7d3a8835bea3fe994e5a0a7898f02->enter($__internal_fcee5109b2bdbf1e781f69d314a4788563b7d3a8835bea3fe994e5a0a7898f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_099a8a3800d6a2c3b739f449ec6c479118e06e3aa2aba36911cd6f890928fb12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099a8a3800d6a2c3b739f449ec6c479118e06e3aa2aba36911cd6f890928fb12->enter($__internal_099a8a3800d6a2c3b739f449ec6c479118e06e3aa2aba36911cd6f890928fb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_099a8a3800d6a2c3b739f449ec6c479118e06e3aa2aba36911cd6f890928fb12->leave($__internal_099a8a3800d6a2c3b739f449ec6c479118e06e3aa2aba36911cd6f890928fb12_prof);

        
        $__internal_fcee5109b2bdbf1e781f69d314a4788563b7d3a8835bea3fe994e5a0a7898f02->leave($__internal_fcee5109b2bdbf1e781f69d314a4788563b7d3a8835bea3fe994e5a0a7898f02_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_484c6d4aed1624c09f3e982f593fc2f58fa1fd7097fcefb54c931cb69975c80d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_484c6d4aed1624c09f3e982f593fc2f58fa1fd7097fcefb54c931cb69975c80d->enter($__internal_484c6d4aed1624c09f3e982f593fc2f58fa1fd7097fcefb54c931cb69975c80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac4cfedd961f3b8effc6ae878d0bc29446d2ee84559a8de988b02fbc6762b917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4cfedd961f3b8effc6ae878d0bc29446d2ee84559a8de988b02fbc6762b917->enter($__internal_ac4cfedd961f3b8effc6ae878d0bc29446d2ee84559a8de988b02fbc6762b917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ac4cfedd961f3b8effc6ae878d0bc29446d2ee84559a8de988b02fbc6762b917->leave($__internal_ac4cfedd961f3b8effc6ae878d0bc29446d2ee84559a8de988b02fbc6762b917_prof);

        
        $__internal_484c6d4aed1624c09f3e982f593fc2f58fa1fd7097fcefb54c931cb69975c80d->leave($__internal_484c6d4aed1624c09f3e982f593fc2f58fa1fd7097fcefb54c931cb69975c80d_prof);

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
