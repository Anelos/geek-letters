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
        $__internal_c2ac65787a67fc3a45382746287ba05a792b5732a05a805f8be167f343710c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ac65787a67fc3a45382746287ba05a792b5732a05a805f8be167f343710c09->enter($__internal_c2ac65787a67fc3a45382746287ba05a792b5732a05a805f8be167f343710c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_8c2295a8dceab6ad1c180862daa3d98e4ee992782d12bdfa0b2bfdb2761c718b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2295a8dceab6ad1c180862daa3d98e4ee992782d12bdfa0b2bfdb2761c718b->enter($__internal_8c2295a8dceab6ad1c180862daa3d98e4ee992782d12bdfa0b2bfdb2761c718b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_c2ac65787a67fc3a45382746287ba05a792b5732a05a805f8be167f343710c09->leave($__internal_c2ac65787a67fc3a45382746287ba05a792b5732a05a805f8be167f343710c09_prof);

        
        $__internal_8c2295a8dceab6ad1c180862daa3d98e4ee992782d12bdfa0b2bfdb2761c718b->leave($__internal_8c2295a8dceab6ad1c180862daa3d98e4ee992782d12bdfa0b2bfdb2761c718b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_51e1027341bfa9a988b4f6b044cbcfd04aa837f1b79773924d86f03022629fd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e1027341bfa9a988b4f6b044cbcfd04aa837f1b79773924d86f03022629fd9->enter($__internal_51e1027341bfa9a988b4f6b044cbcfd04aa837f1b79773924d86f03022629fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_96ff341091a36fa39b890bfde96ca9333183445f48460241b72f17b06951e9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ff341091a36fa39b890bfde96ca9333183445f48460241b72f17b06951e9ff->enter($__internal_96ff341091a36fa39b890bfde96ca9333183445f48460241b72f17b06951e9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_96ff341091a36fa39b890bfde96ca9333183445f48460241b72f17b06951e9ff->leave($__internal_96ff341091a36fa39b890bfde96ca9333183445f48460241b72f17b06951e9ff_prof);

        
        $__internal_51e1027341bfa9a988b4f6b044cbcfd04aa837f1b79773924d86f03022629fd9->leave($__internal_51e1027341bfa9a988b4f6b044cbcfd04aa837f1b79773924d86f03022629fd9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a24286ad112c931ca46f037938a847a9dda75a6abb3ba5de5322671570448b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a24286ad112c931ca46f037938a847a9dda75a6abb3ba5de5322671570448b3->enter($__internal_5a24286ad112c931ca46f037938a847a9dda75a6abb3ba5de5322671570448b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d952a4d5ab1c800884dd21776d1def2e563e4e20641f11fa6dcede336ddbbef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d952a4d5ab1c800884dd21776d1def2e563e4e20641f11fa6dcede336ddbbef4->enter($__internal_d952a4d5ab1c800884dd21776d1def2e563e4e20641f11fa6dcede336ddbbef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d952a4d5ab1c800884dd21776d1def2e563e4e20641f11fa6dcede336ddbbef4->leave($__internal_d952a4d5ab1c800884dd21776d1def2e563e4e20641f11fa6dcede336ddbbef4_prof);

        
        $__internal_5a24286ad112c931ca46f037938a847a9dda75a6abb3ba5de5322671570448b3->leave($__internal_5a24286ad112c931ca46f037938a847a9dda75a6abb3ba5de5322671570448b3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d42851bebbd3260860bc0f690ef0f2f8db2bfdbd37d7bd5d9add46ee6df3d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d42851bebbd3260860bc0f690ef0f2f8db2bfdbd37d7bd5d9add46ee6df3d36->enter($__internal_7d42851bebbd3260860bc0f690ef0f2f8db2bfdbd37d7bd5d9add46ee6df3d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_445e94cbd7cda3d175f6ff8f7a8c3aebcd922731343393588c3690f33408a1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445e94cbd7cda3d175f6ff8f7a8c3aebcd922731343393588c3690f33408a1e3->enter($__internal_445e94cbd7cda3d175f6ff8f7a8c3aebcd922731343393588c3690f33408a1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_445e94cbd7cda3d175f6ff8f7a8c3aebcd922731343393588c3690f33408a1e3->leave($__internal_445e94cbd7cda3d175f6ff8f7a8c3aebcd922731343393588c3690f33408a1e3_prof);

        
        $__internal_7d42851bebbd3260860bc0f690ef0f2f8db2bfdbd37d7bd5d9add46ee6df3d36->leave($__internal_7d42851bebbd3260860bc0f690ef0f2f8db2bfdbd37d7bd5d9add46ee6df3d36_prof);

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
