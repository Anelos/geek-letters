<?php

/* default/index.html.twig */
class __TwigTemplate_f95fe320d205864b2c43d86b60f282c64112fe2f7e2ba04d12f2d967f0204c70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66bc1009b04cf16a1d1acd0d67e3d972b04e7becb340ebf0094ad413597cd744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66bc1009b04cf16a1d1acd0d67e3d972b04e7becb340ebf0094ad413597cd744->enter($__internal_66bc1009b04cf16a1d1acd0d67e3d972b04e7becb340ebf0094ad413597cd744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_581cbf411bc5188451d8b2a69c5e3c21c017d5683ab5b6db35ec2e5fa16704db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581cbf411bc5188451d8b2a69c5e3c21c017d5683ab5b6db35ec2e5fa16704db->enter($__internal_581cbf411bc5188451d8b2a69c5e3c21c017d5683ab5b6db35ec2e5fa16704db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66bc1009b04cf16a1d1acd0d67e3d972b04e7becb340ebf0094ad413597cd744->leave($__internal_66bc1009b04cf16a1d1acd0d67e3d972b04e7becb340ebf0094ad413597cd744_prof);

        
        $__internal_581cbf411bc5188451d8b2a69c5e3c21c017d5683ab5b6db35ec2e5fa16704db->leave($__internal_581cbf411bc5188451d8b2a69c5e3c21c017d5683ab5b6db35ec2e5fa16704db_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_622cf97360cc6f90b8ff6bdef760fd3f63d2f4748efee3186664593a9f506b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622cf97360cc6f90b8ff6bdef760fd3f63d2f4748efee3186664593a9f506b07->enter($__internal_622cf97360cc6f90b8ff6bdef760fd3f63d2f4748efee3186664593a9f506b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b65c2e4b7f4a50fc6b0009014c5256c34c8279548be3d74ea99f503706b602a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b65c2e4b7f4a50fc6b0009014c5256c34c8279548be3d74ea99f503706b602a->enter($__internal_3b65c2e4b7f4a50fc6b0009014c5256c34c8279548be3d74ea99f503706b602a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 6
        echo "<div id=\"wrapper\">
    <div id=\"container\">

        <div class=\"row main\">

          <button id=\"scrollTop\">Go Top</button>
            <div class=\"col-md-6\">
              <h1>Articles :</h1>
                ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 15
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
            // line 46
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:index"));
            echo "
                ";
        } else {
            // line 48
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:published"));
            echo "
                ";
        }
        // line 50
        echo "            </div>
            <div class=\"col-md-4\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_3b65c2e4b7f4a50fc6b0009014c5256c34c8279548be3d74ea99f503706b602a->leave($__internal_3b65c2e4b7f4a50fc6b0009014c5256c34c8279548be3d74ea99f503706b602a_prof);

        
        $__internal_622cf97360cc6f90b8ff6bdef760fd3f63d2f4748efee3186664593a9f506b07->leave($__internal_622cf97360cc6f90b8ff6bdef760fd3f63d2f4748efee3186664593a9f506b07_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_1b82b497386299e338a288615d647703bb59fa4d68a1a1f488b3c85d2af6228c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b82b497386299e338a288615d647703bb59fa4d68a1a1f488b3c85d2af6228c->enter($__internal_1b82b497386299e338a288615d647703bb59fa4d68a1a1f488b3c85d2af6228c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a1ac46f0f6a9d4e949a4d3232ad94e3899b029ea672069f1753521fb1b987450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ac46f0f6a9d4e949a4d3232ad94e3899b029ea672069f1753521fb1b987450->enter($__internal_a1ac46f0f6a9d4e949a4d3232ad94e3899b029ea672069f1753521fb1b987450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo twig_include($this->env, $context, "includes/header.html.twig");
        echo "
";
        
        $__internal_a1ac46f0f6a9d4e949a4d3232ad94e3899b029ea672069f1753521fb1b987450->leave($__internal_a1ac46f0f6a9d4e949a4d3232ad94e3899b029ea672069f1753521fb1b987450_prof);

        
        $__internal_1b82b497386299e338a288615d647703bb59fa4d68a1a1f488b3c85d2af6228c->leave($__internal_1b82b497386299e338a288615d647703bb59fa4d68a1a1f488b3c85d2af6228c_prof);

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
        return array (  133 => 4,  124 => 3,  108 => 50,  102 => 48,  97 => 46,  64 => 15,  62 => 14,  52 => 6,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
{% block header %}
{{ include('includes/header.html.twig') }}
{% endblock %}
<div id=\"wrapper\">
    <div id=\"container\">

        <div class=\"row main\">

          <button id=\"scrollTop\">Go Top</button>
            <div class=\"col-md-6\">
              <h1>Articles :</h1>
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
            <div class=\"col-md-4\">
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "default/index.html.twig", "/var/www/html/geek-letters/app/Resources/views/default/index.html.twig");
    }
}
