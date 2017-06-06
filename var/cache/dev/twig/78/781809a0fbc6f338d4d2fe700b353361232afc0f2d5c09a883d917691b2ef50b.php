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
        $__internal_0627ffe76693e9f2d3cabefe89165419256f3e62e18da8827c8f6c44c11fd891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0627ffe76693e9f2d3cabefe89165419256f3e62e18da8827c8f6c44c11fd891->enter($__internal_0627ffe76693e9f2d3cabefe89165419256f3e62e18da8827c8f6c44c11fd891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_b43b618352fcc2fb90ec5c7a99eba7f6f03fced6652ea497d145d784f6f467be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43b618352fcc2fb90ec5c7a99eba7f6f03fced6652ea497d145d784f6f467be->enter($__internal_b43b618352fcc2fb90ec5c7a99eba7f6f03fced6652ea497d145d784f6f467be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0627ffe76693e9f2d3cabefe89165419256f3e62e18da8827c8f6c44c11fd891->leave($__internal_0627ffe76693e9f2d3cabefe89165419256f3e62e18da8827c8f6c44c11fd891_prof);

        
        $__internal_b43b618352fcc2fb90ec5c7a99eba7f6f03fced6652ea497d145d784f6f467be->leave($__internal_b43b618352fcc2fb90ec5c7a99eba7f6f03fced6652ea497d145d784f6f467be_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0823e8deeeccf72164c8503d561662b31b47881a2cf059f9a393199265b74826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0823e8deeeccf72164c8503d561662b31b47881a2cf059f9a393199265b74826->enter($__internal_0823e8deeeccf72164c8503d561662b31b47881a2cf059f9a393199265b74826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccbbfb063026a9c206c58e2989fab747ed3a99581c27016b127d5b07188f413a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbbfb063026a9c206c58e2989fab747ed3a99581c27016b127d5b07188f413a->enter($__internal_ccbbfb063026a9c206c58e2989fab747ed3a99581c27016b127d5b07188f413a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 6
        echo "<div id=\"wrapper\">
    <div id=\"container\">

        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
              <h1>Articles</h1>
                ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 13
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
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:index"));
            echo "
                ";
        } else {
            // line 46
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Article:published"));
            echo "
                ";
        }
        // line 48
        echo "            </div>
            <div class=\"col-md-3\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_ccbbfb063026a9c206c58e2989fab747ed3a99581c27016b127d5b07188f413a->leave($__internal_ccbbfb063026a9c206c58e2989fab747ed3a99581c27016b127d5b07188f413a_prof);

        
        $__internal_0823e8deeeccf72164c8503d561662b31b47881a2cf059f9a393199265b74826->leave($__internal_0823e8deeeccf72164c8503d561662b31b47881a2cf059f9a393199265b74826_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_df3b164bc7f02bf693f5f9006aad15bacd418cc74da09055870c2cf69bef772d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df3b164bc7f02bf693f5f9006aad15bacd418cc74da09055870c2cf69bef772d->enter($__internal_df3b164bc7f02bf693f5f9006aad15bacd418cc74da09055870c2cf69bef772d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_45401b9ee477ff3cdafac740773f7b6de5cb3b74e271d3cf8cdc969c8f5f60b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45401b9ee477ff3cdafac740773f7b6de5cb3b74e271d3cf8cdc969c8f5f60b6->enter($__internal_45401b9ee477ff3cdafac740773f7b6de5cb3b74e271d3cf8cdc969c8f5f60b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo twig_include($this->env, $context, "includes/header.html.twig");
        echo "
";
        
        $__internal_45401b9ee477ff3cdafac740773f7b6de5cb3b74e271d3cf8cdc969c8f5f60b6->leave($__internal_45401b9ee477ff3cdafac740773f7b6de5cb3b74e271d3cf8cdc969c8f5f60b6_prof);

        
        $__internal_df3b164bc7f02bf693f5f9006aad15bacd418cc74da09055870c2cf69bef772d->leave($__internal_df3b164bc7f02bf693f5f9006aad15bacd418cc74da09055870c2cf69bef772d_prof);

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
        return array (  131 => 4,  122 => 3,  106 => 48,  100 => 46,  95 => 44,  62 => 13,  60 => 12,  52 => 6,  50 => 3,  41 => 2,  11 => 1,);
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

        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
              <h1>Articles</h1>
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
