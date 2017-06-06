<?php

/* default/index.html.twig */
class __TwigTemplate_c128f3aedd0d96dc8379de497084d9ca058b9dea253f7e496148ae87c0af1ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9156d9de5c3472ed5db250b0ce60e7b8b6fdac12d0e7b80fd1974657c05a20e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9156d9de5c3472ed5db250b0ce60e7b8b6fdac12d0e7b80fd1974657c05a20e2->enter($__internal_9156d9de5c3472ed5db250b0ce60e7b8b6fdac12d0e7b80fd1974657c05a20e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_51f0591fd49878d77dd62b80f485abcee06d22bebb9941979b5b7b07034e009f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f0591fd49878d77dd62b80f485abcee06d22bebb9941979b5b7b07034e009f->enter($__internal_51f0591fd49878d77dd62b80f485abcee06d22bebb9941979b5b7b07034e009f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9156d9de5c3472ed5db250b0ce60e7b8b6fdac12d0e7b80fd1974657c05a20e2->leave($__internal_9156d9de5c3472ed5db250b0ce60e7b8b6fdac12d0e7b80fd1974657c05a20e2_prof);

        
        $__internal_51f0591fd49878d77dd62b80f485abcee06d22bebb9941979b5b7b07034e009f->leave($__internal_51f0591fd49878d77dd62b80f485abcee06d22bebb9941979b5b7b07034e009f_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_6aa5eb66f9c4f143a4fd13e2a6a55b4c7d814b1c5c707966f15cffc19ac5964f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa5eb66f9c4f143a4fd13e2a6a55b4c7d814b1c5c707966f15cffc19ac5964f->enter($__internal_6aa5eb66f9c4f143a4fd13e2a6a55b4c7d814b1c5c707966f15cffc19ac5964f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e437eb43017363c44a54ef03585f47f0b2ec8f1845da17a588987703be6e59ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e437eb43017363c44a54ef03585f47f0b2ec8f1845da17a588987703be6e59ff->enter($__internal_e437eb43017363c44a54ef03585f47f0b2ec8f1845da17a588987703be6e59ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div id=\"wrapper\">
    <div id=\"container\">

        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
                ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 8
            echo "                <form name=\"appbundle_article\" method=\"post\">
                    <div id=\"appbundle_article\">
                        <div>
                            <label for=\"appbundle_article_published\">Published</label><input type=\"checkbox\" id=\"appbundle_article_published\"
                                name=\"appbundle_article[published]\" value=\"1\">
                        </div>
                        <div>
                            <label for=\"appbundle_article_title\" class=\"required\">Title</label>
                            <input type=\"text\" id=\"appbundle_article_title\" name=\"appbundle_article[title]\" required=\"required\" maxlength=\"100\">
                        </div>
                        <div>
                            <label for=\"appbundle_article_content\" class=\"required\">Content</label>
                            <textarea id=\"appbundle_article_content\" name=\"appbundle_article[content]\" required=\"required\" rows=\"5\" cols=\"50\"></textarea>
                        </div>
                        <div>
                            <label for=\"appbundle_article_category\">Category</label>
                            <select id=\"appbundle_article_category\" name=\"appbundle_article[category]\">
                                <option value=\"\"></option>
                                <option value=\"1\">Video Game</option>
                                <option value=\"2\">Music</option>
                                <option value=\"3\">Movie</option>
                                <option value=\"4\">Technlology</option>
                                <option value=\"5\">Comic</option>
                                <option value=\"6\">Manga</option>
                                <option value=\"7\">Science</option>
                            </select>
                        </div>
                        <input type=\"hidden\" id=\"appbundle_article__token\" name=\"appbundle_article[_token]\" value=\"VjzG2S-znG9v3JYR9QumaiMCsku_wz6E6fyB6ZbGKAQ\">
                    </div>
                    <input type=\"submit\" value=\"Create\">
                </form>
                    ";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:index"));
            echo "
                ";
        } else {
            // line 40
            echo " 
                    ";
            // line 41
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:published"));
            echo "
                ";
        }
        // line 42
        echo " 
            </div>
            <div class=\"col-md-3\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_e437eb43017363c44a54ef03585f47f0b2ec8f1845da17a588987703be6e59ff->leave($__internal_e437eb43017363c44a54ef03585f47f0b2ec8f1845da17a588987703be6e59ff_prof);

        
        $__internal_6aa5eb66f9c4f143a4fd13e2a6a55b4c7d814b1c5c707966f15cffc19ac5964f->leave($__internal_6aa5eb66f9c4f143a4fd13e2a6a55b4c7d814b1c5c707966f15cffc19ac5964f_prof);

    }

    // line 49
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd641d1404466d0dbf0c9fa4d1be24b4485041ad38315d34f162d20899f6c363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd641d1404466d0dbf0c9fa4d1be24b4485041ad38315d34f162d20899f6c363->enter($__internal_fd641d1404466d0dbf0c9fa4d1be24b4485041ad38315d34f162d20899f6c363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0f94e679eeb6ef44ee89924aa76c353c5144b9b33880c93f509ac887ddf6ac1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f94e679eeb6ef44ee89924aa76c353c5144b9b33880c93f509ac887ddf6ac1b->enter($__internal_0f94e679eeb6ef44ee89924aa76c353c5144b9b33880c93f509ac887ddf6ac1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 50
        echo "<style>
    body {
        background: #F5F5F5;
        font: 18px/1.5 sans-serif;
    }

    h1,
    h2 {
        line-height: 1.2;
        margin: 0 0 .5em;
    }

    h1 {
        font-size: 36px;
    }

    h2 {
        font-size: 21px;
        margin-bottom: 1em;
    }

    p {
        margin: 0 0 1em 0;
    }

    a {
        color: #0000F0;
    }

    a:hover {
        text-decoration: none;
    }

    code {
        background: #F5F5F5;
        max-width: 100px;
        padding: 2px 6px;
        word-wrap: break-word;
    }

    #wrapper {
        background: #FFF;
        margin: 1em auto;
        max-width: 800px;
        width: 95%;
    }

    #container {
        padding: 2em;
    }

    #welcome,
    #status {
        margin-bottom: 2em;
    }

    #welcome h1 span {
        display: block;
        font-size: 75%;
    }

    #icon-status,
    #icon-book {
        float: left;
        height: 64px;
        margin-right: 1em;
        margin-top: -4px;
        width: 64px;
    }

    #icon-book {
        display: none;
    }

    @media (min-width: 768px) {
        #wrapper {
            width: 80%;
            margin: 2em auto;
        }
        #icon-book {
            display: inline-block;
        }
        #status a,
        #next a {
            display: block;
        }

        @-webkit-keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        .sf-toolbar {
            opacity: 0;
            -webkit-animation: fade-in 1s .2s forwards;
            animation: fade-in 1s .2s forwards;
        }
    }
</style>
";
        
        $__internal_0f94e679eeb6ef44ee89924aa76c353c5144b9b33880c93f509ac887ddf6ac1b->leave($__internal_0f94e679eeb6ef44ee89924aa76c353c5144b9b33880c93f509ac887ddf6ac1b_prof);

        
        $__internal_fd641d1404466d0dbf0c9fa4d1be24b4485041ad38315d34f162d20899f6c363->leave($__internal_fd641d1404466d0dbf0c9fa4d1be24b4485041ad38315d34f162d20899f6c363_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 50,  121 => 49,  104 => 42,  99 => 41,  96 => 40,  91 => 39,  58 => 8,  56 => 7,  49 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %} {% block body %}
<div id=\"wrapper\">
    <div id=\"container\">

        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
                {% if is_granted(\"ROLE_SUPER_ADMIN\") %}
                <form name=\"appbundle_article\" method=\"post\">
                    <div id=\"appbundle_article\">
                        <div>
                            <label for=\"appbundle_article_published\">Published</label><input type=\"checkbox\" id=\"appbundle_article_published\"
                                name=\"appbundle_article[published]\" value=\"1\">
                        </div>
                        <div>
                            <label for=\"appbundle_article_title\" class=\"required\">Title</label>
                            <input type=\"text\" id=\"appbundle_article_title\" name=\"appbundle_article[title]\" required=\"required\" maxlength=\"100\">
                        </div>
                        <div>
                            <label for=\"appbundle_article_content\" class=\"required\">Content</label>
                            <textarea id=\"appbundle_article_content\" name=\"appbundle_article[content]\" required=\"required\" rows=\"5\" cols=\"50\"></textarea>
                        </div>
                        <div>
                            <label for=\"appbundle_article_category\">Category</label>
                            <select id=\"appbundle_article_category\" name=\"appbundle_article[category]\">
                                <option value=\"\"></option>
                                <option value=\"1\">Video Game</option>
                                <option value=\"2\">Music</option>
                                <option value=\"3\">Movie</option>
                                <option value=\"4\">Technlology</option>
                                <option value=\"5\">Comic</option>
                                <option value=\"6\">Manga</option>
                                <option value=\"7\">Science</option>
                            </select>
                        </div>
                        <input type=\"hidden\" id=\"appbundle_article__token\" name=\"appbundle_article[_token]\" value=\"VjzG2S-znG9v3JYR9QumaiMCsku_wz6E6fyB6ZbGKAQ\">
                    </div>
                    <input type=\"submit\" value=\"Create\">
                </form>
                    {{ render(controller( 'AppBundle:Article:index' )) }}
                {% else %} 
                    {{ render(controller( 'AppBundle:Article:published' )) }}
                {% endif %} 
            </div>
            <div class=\"col-md-3\">
            </div>
        </div>
    </div>
</div>
{% endblock %} {% block stylesheets %}
<style>
    body {
        background: #F5F5F5;
        font: 18px/1.5 sans-serif;
    }

    h1,
    h2 {
        line-height: 1.2;
        margin: 0 0 .5em;
    }

    h1 {
        font-size: 36px;
    }

    h2 {
        font-size: 21px;
        margin-bottom: 1em;
    }

    p {
        margin: 0 0 1em 0;
    }

    a {
        color: #0000F0;
    }

    a:hover {
        text-decoration: none;
    }

    code {
        background: #F5F5F5;
        max-width: 100px;
        padding: 2px 6px;
        word-wrap: break-word;
    }

    #wrapper {
        background: #FFF;
        margin: 1em auto;
        max-width: 800px;
        width: 95%;
    }

    #container {
        padding: 2em;
    }

    #welcome,
    #status {
        margin-bottom: 2em;
    }

    #welcome h1 span {
        display: block;
        font-size: 75%;
    }

    #icon-status,
    #icon-book {
        float: left;
        height: 64px;
        margin-right: 1em;
        margin-top: -4px;
        width: 64px;
    }

    #icon-book {
        display: none;
    }

    @media (min-width: 768px) {
        #wrapper {
            width: 80%;
            margin: 2em auto;
        }
        #icon-book {
            display: inline-block;
        }
        #status a,
        #next a {
            display: block;
        }

        @-webkit-keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        @keyframes fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        .sf-toolbar {
            opacity: 0;
            -webkit-animation: fade-in 1s .2s forwards;
            animation: fade-in 1s .2s forwards;
        }
    }
</style>
{% endblock %}", "default/index.html.twig", "/var/www/html/geek-letters/app/Resources/views/default/index.html.twig");
    }
}
