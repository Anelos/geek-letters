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
        $__internal_fd6ebe2dc6d0e490d73f79d929ab0357172f909637216cd1e4258d3248d304b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6ebe2dc6d0e490d73f79d929ab0357172f909637216cd1e4258d3248d304b5->enter($__internal_fd6ebe2dc6d0e490d73f79d929ab0357172f909637216cd1e4258d3248d304b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_39564fc74f6f256c08af70f2fedd24e8d5a7f495a83bd43cc0d64ba53942ff34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39564fc74f6f256c08af70f2fedd24e8d5a7f495a83bd43cc0d64ba53942ff34->enter($__internal_39564fc74f6f256c08af70f2fedd24e8d5a7f495a83bd43cc0d64ba53942ff34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_fd6ebe2dc6d0e490d73f79d929ab0357172f909637216cd1e4258d3248d304b5->leave($__internal_fd6ebe2dc6d0e490d73f79d929ab0357172f909637216cd1e4258d3248d304b5_prof);

        
        $__internal_39564fc74f6f256c08af70f2fedd24e8d5a7f495a83bd43cc0d64ba53942ff34->leave($__internal_39564fc74f6f256c08af70f2fedd24e8d5a7f495a83bd43cc0d64ba53942ff34_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9356e54224874811e4aee22190a82feb3614a92fe6aadc39dc43eceb657bde5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9356e54224874811e4aee22190a82feb3614a92fe6aadc39dc43eceb657bde5a->enter($__internal_9356e54224874811e4aee22190a82feb3614a92fe6aadc39dc43eceb657bde5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65950ac5461347a9ef34755f5e5b95f69ccb5b5809a0bc9a15e1e72339244b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65950ac5461347a9ef34755f5e5b95f69ccb5b5809a0bc9a15e1e72339244b2c->enter($__internal_65950ac5461347a9ef34755f5e5b95f69ccb5b5809a0bc9a15e1e72339244b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_65950ac5461347a9ef34755f5e5b95f69ccb5b5809a0bc9a15e1e72339244b2c->leave($__internal_65950ac5461347a9ef34755f5e5b95f69ccb5b5809a0bc9a15e1e72339244b2c_prof);

        
        $__internal_9356e54224874811e4aee22190a82feb3614a92fe6aadc39dc43eceb657bde5a->leave($__internal_9356e54224874811e4aee22190a82feb3614a92fe6aadc39dc43eceb657bde5a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6694f1b5dad23195aab21097eb130592b9ef619615d68382f7f43a43499983a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6694f1b5dad23195aab21097eb130592b9ef619615d68382f7f43a43499983a0->enter($__internal_6694f1b5dad23195aab21097eb130592b9ef619615d68382f7f43a43499983a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eee44471dc50ba653733d262a0c42b3834a8411d13c49bbf90aca00db517ea52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee44471dc50ba653733d262a0c42b3834a8411d13c49bbf90aca00db517ea52->enter($__internal_eee44471dc50ba653733d262a0c42b3834a8411d13c49bbf90aca00db517ea52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_eee44471dc50ba653733d262a0c42b3834a8411d13c49bbf90aca00db517ea52->leave($__internal_eee44471dc50ba653733d262a0c42b3834a8411d13c49bbf90aca00db517ea52_prof);

        
        $__internal_6694f1b5dad23195aab21097eb130592b9ef619615d68382f7f43a43499983a0->leave($__internal_6694f1b5dad23195aab21097eb130592b9ef619615d68382f7f43a43499983a0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d181615175621dbbb5d585023500d2605fe208372e6d9880f66a1227f0f58fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d181615175621dbbb5d585023500d2605fe208372e6d9880f66a1227f0f58fdf->enter($__internal_d181615175621dbbb5d585023500d2605fe208372e6d9880f66a1227f0f58fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55b55a281229653729056150e35c7e99496c4077985c4a2d456ea0c310662e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b55a281229653729056150e35c7e99496c4077985c4a2d456ea0c310662e66->enter($__internal_55b55a281229653729056150e35c7e99496c4077985c4a2d456ea0c310662e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55b55a281229653729056150e35c7e99496c4077985c4a2d456ea0c310662e66->leave($__internal_55b55a281229653729056150e35c7e99496c4077985c4a2d456ea0c310662e66_prof);

        
        $__internal_d181615175621dbbb5d585023500d2605fe208372e6d9880f66a1227f0f58fdf->leave($__internal_d181615175621dbbb5d585023500d2605fe208372e6d9880f66a1227f0f58fdf_prof);

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
