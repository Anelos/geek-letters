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
        $__internal_db70ae26faa69f2ea2b414f849d40c9f2209b4e90f8c0e5562f9635b79a79c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db70ae26faa69f2ea2b414f849d40c9f2209b4e90f8c0e5562f9635b79a79c2e->enter($__internal_db70ae26faa69f2ea2b414f849d40c9f2209b4e90f8c0e5562f9635b79a79c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_203471ec3ba128ca2eea90f1267ce5c985c5402cdd8a51ee1684078b2320c556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203471ec3ba128ca2eea90f1267ce5c985c5402cdd8a51ee1684078b2320c556->enter($__internal_203471ec3ba128ca2eea90f1267ce5c985c5402cdd8a51ee1684078b2320c556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db70ae26faa69f2ea2b414f849d40c9f2209b4e90f8c0e5562f9635b79a79c2e->leave($__internal_db70ae26faa69f2ea2b414f849d40c9f2209b4e90f8c0e5562f9635b79a79c2e_prof);

        
        $__internal_203471ec3ba128ca2eea90f1267ce5c985c5402cdd8a51ee1684078b2320c556->leave($__internal_203471ec3ba128ca2eea90f1267ce5c985c5402cdd8a51ee1684078b2320c556_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_07d85a854c5749151b632789d2faa18629754f2583af142c25305edfafe580cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07d85a854c5749151b632789d2faa18629754f2583af142c25305edfafe580cc->enter($__internal_07d85a854c5749151b632789d2faa18629754f2583af142c25305edfafe580cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63e9476b2bd5d6cc3e222b132db5e8856168748685ce323ed4c2b360d34329a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e9476b2bd5d6cc3e222b132db5e8856168748685ce323ed4c2b360d34329a8->enter($__internal_63e9476b2bd5d6cc3e222b132db5e8856168748685ce323ed4c2b360d34329a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_63e9476b2bd5d6cc3e222b132db5e8856168748685ce323ed4c2b360d34329a8->leave($__internal_63e9476b2bd5d6cc3e222b132db5e8856168748685ce323ed4c2b360d34329a8_prof);

        
        $__internal_07d85a854c5749151b632789d2faa18629754f2583af142c25305edfafe580cc->leave($__internal_07d85a854c5749151b632789d2faa18629754f2583af142c25305edfafe580cc_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_c62064040fec89e918d50ea9885609767ae913a2b6a55fe79b157e00376b9cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62064040fec89e918d50ea9885609767ae913a2b6a55fe79b157e00376b9cfa->enter($__internal_c62064040fec89e918d50ea9885609767ae913a2b6a55fe79b157e00376b9cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_dfc35adfb31555a7753c376aabfdfbd642014e7cbcf58733c1c68a4561c1a288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc35adfb31555a7753c376aabfdfbd642014e7cbcf58733c1c68a4561c1a288->enter($__internal_dfc35adfb31555a7753c376aabfdfbd642014e7cbcf58733c1c68a4561c1a288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo twig_include($this->env, $context, "includes/header.html.twig");
        echo "
";
        
        $__internal_dfc35adfb31555a7753c376aabfdfbd642014e7cbcf58733c1c68a4561c1a288->leave($__internal_dfc35adfb31555a7753c376aabfdfbd642014e7cbcf58733c1c68a4561c1a288_prof);

        
        $__internal_c62064040fec89e918d50ea9885609767ae913a2b6a55fe79b157e00376b9cfa->leave($__internal_c62064040fec89e918d50ea9885609767ae913a2b6a55fe79b157e00376b9cfa_prof);

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
