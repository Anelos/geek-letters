<?php

/* :default:index.html.twig */
class __TwigTemplate_f95fe320d205864b2c43d86b60f282c64112fe2f7e2ba04d12f2d967f0204c70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_a1bfd2b6e0d69977af4566e0c4a6b1ae7007ec71a8dbd477bb146a488e4d84ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1bfd2b6e0d69977af4566e0c4a6b1ae7007ec71a8dbd477bb146a488e4d84ed->enter($__internal_a1bfd2b6e0d69977af4566e0c4a6b1ae7007ec71a8dbd477bb146a488e4d84ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_0340d1f79c66d7b14230acfd1c179be497b679ac64c352b00bbf3dfba4a4786a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0340d1f79c66d7b14230acfd1c179be497b679ac64c352b00bbf3dfba4a4786a->enter($__internal_0340d1f79c66d7b14230acfd1c179be497b679ac64c352b00bbf3dfba4a4786a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1bfd2b6e0d69977af4566e0c4a6b1ae7007ec71a8dbd477bb146a488e4d84ed->leave($__internal_a1bfd2b6e0d69977af4566e0c4a6b1ae7007ec71a8dbd477bb146a488e4d84ed_prof);

        
        $__internal_0340d1f79c66d7b14230acfd1c179be497b679ac64c352b00bbf3dfba4a4786a->leave($__internal_0340d1f79c66d7b14230acfd1c179be497b679ac64c352b00bbf3dfba4a4786a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_953425aaf49d9edd39c7a43e0159bb3a79687165710ca481226d8cb215bb4265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953425aaf49d9edd39c7a43e0159bb3a79687165710ca481226d8cb215bb4265->enter($__internal_953425aaf49d9edd39c7a43e0159bb3a79687165710ca481226d8cb215bb4265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97ff936cb0fa1728efb36f22456a27970f4739a6871d88c33cc7683de1aa98ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ff936cb0fa1728efb36f22456a27970f4739a6871d88c33cc7683de1aa98ae->enter($__internal_97ff936cb0fa1728efb36f22456a27970f4739a6871d88c33cc7683de1aa98ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 6
        echo "<div id=\"wrapper\">
    <div id=\"container\">

        <div class=\"row main\">

            <div class=\"col-md-6 col-md-offset-3\">
              <h1>Articles :</h1>
                ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 14
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
            // line 45
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:index"));
            echo "
                ";
        } else {
            // line 47
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:published"));
            echo "
                ";
        }
        // line 49
        echo "            </div>
            <div class=\"col-md-3\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_97ff936cb0fa1728efb36f22456a27970f4739a6871d88c33cc7683de1aa98ae->leave($__internal_97ff936cb0fa1728efb36f22456a27970f4739a6871d88c33cc7683de1aa98ae_prof);

        
        $__internal_953425aaf49d9edd39c7a43e0159bb3a79687165710ca481226d8cb215bb4265->leave($__internal_953425aaf49d9edd39c7a43e0159bb3a79687165710ca481226d8cb215bb4265_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_3b2e2c513a06fd2c10e2bb923f1636b23ec32c2ddef7dbc101413b57c3fe2737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2e2c513a06fd2c10e2bb923f1636b23ec32c2ddef7dbc101413b57c3fe2737->enter($__internal_3b2e2c513a06fd2c10e2bb923f1636b23ec32c2ddef7dbc101413b57c3fe2737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b2bf4d8808b85a973a980400b98e9fe198341f7cd6c10829402b680adefd631b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2bf4d8808b85a973a980400b98e9fe198341f7cd6c10829402b680adefd631b->enter($__internal_b2bf4d8808b85a973a980400b98e9fe198341f7cd6c10829402b680adefd631b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo twig_include($this->env, $context, "includes/header.html.twig");
        echo "
";
        
        $__internal_b2bf4d8808b85a973a980400b98e9fe198341f7cd6c10829402b680adefd631b->leave($__internal_b2bf4d8808b85a973a980400b98e9fe198341f7cd6c10829402b680adefd631b_prof);

        
        $__internal_3b2e2c513a06fd2c10e2bb923f1636b23ec32c2ddef7dbc101413b57c3fe2737->leave($__internal_3b2e2c513a06fd2c10e2bb923f1636b23ec32c2ddef7dbc101413b57c3fe2737_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 4,  123 => 3,  107 => 49,  101 => 47,  96 => 45,  63 => 14,  61 => 13,  52 => 6,  50 => 3,  41 => 2,  11 => 1,);
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

            <div class=\"col-md-6 col-md-offset-3\">
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
            <div class=\"col-md-3\">
            </div>
        </div>
    </div>
</div>
{% endblock %}
", ":default:index.html.twig", "/var/www/html/geek-letters/app/Resources/views/default/index.html.twig");
    }
}
