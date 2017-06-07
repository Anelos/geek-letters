<?php

/* :article:index.html.twig */
class __TwigTemplate_4f30739b6e146f5550659ac110bbbd002db4b1dcad7e9f03e3ab974d5aeb0c07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09b4d826dcda8152684dbbeef38db95abfeb8cae17336c7e73ab6fd190c64c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09b4d826dcda8152684dbbeef38db95abfeb8cae17336c7e73ab6fd190c64c59->enter($__internal_09b4d826dcda8152684dbbeef38db95abfeb8cae17336c7e73ab6fd190c64c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:index.html.twig"));

        $__internal_001a14c181eb16a4e1876dfa26f33f6d8cd07702ed0773524babf205d2200261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001a14c181eb16a4e1876dfa26f33f6d8cd07702ed0773524babf205d2200261->enter($__internal_001a14c181eb16a4e1876dfa26f33f6d8cd07702ed0773524babf205d2200261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_09b4d826dcda8152684dbbeef38db95abfeb8cae17336c7e73ab6fd190c64c59->leave($__internal_09b4d826dcda8152684dbbeef38db95abfeb8cae17336c7e73ab6fd190c64c59_prof);

        
        $__internal_001a14c181eb16a4e1876dfa26f33f6d8cd07702ed0773524babf205d2200261->leave($__internal_001a14c181eb16a4e1876dfa26f33f6d8cd07702ed0773524babf205d2200261_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_289e2aaeb4c3a3ac6da4f3f59b9f0a5bb922320402cf092be58190a5f32c6303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289e2aaeb4c3a3ac6da4f3f59b9f0a5bb922320402cf092be58190a5f32c6303->enter($__internal_289e2aaeb4c3a3ac6da4f3f59b9f0a5bb922320402cf092be58190a5f32c6303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12a73853ba1d8cf65897dde90976abffa94802fe5539dde07c919a449ac35cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a73853ba1d8cf65897dde90976abffa94802fe5539dde07c919a449ac35cc7->enter($__internal_12a73853ba1d8cf65897dde90976abffa94802fe5539dde07c919a449ac35cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "        <div class='row article'>
            <div class= \"well\">
                <h3>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h3>
                ";
            // line 6
            if (($this->getAttribute($context["article"], "published", array()) != 1)) {
                // line 7
                echo "                <p><span>Not Published Yet</span></p>
                ";
            }
            // line 9
            echo "                <p>Categorie : ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "category", array()), "html", null, true);
            echo "
                <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "</p>
                <p>created at: ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "d-m-Y"), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["article"], "updatedAt", array()) != $this->getAttribute($context["article"], "createdAt", array()))) {
                echo "Edited ";
            }
            // line 12
            echo "                by : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "user", array()), "username", array()), "html", null, true);
            echo "</p>
                ";
            // line 13
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 14
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                ";
            }
            // line 16
            echo "            </div>
            <button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
            Comment ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "getCommentsCount", array()), "html", null, true);
            echo "
            </button>
            <div class=\"collapse\" id=\"collapse";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">
                <div class=\"well comments\">
                    ";
            // line 22
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 23
                echo "                     <form name=\"appbundle_comment\" method=\"post\" action=\"/comment/new\">
                        <div id=\"appbundle_comment\"><div>
                        <label for=\"appbundle_comment_content\" class=\"required\">Content</label>
                        <textarea id=\"appbundle_comment_content\" name=\"appbundle_comment[content]\" required=\"required\"></textarea>
                        </div>
                        <div>
                        <label for=\"appbundle_comment_article\">Article</label>
                        <input  type=\"hidden\" id=\"appbundle_comment_article\" name=\"appbundle_comment[article]\" value=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\">
                        </div
                        ><input type=\"hidden\" id=\"appbundle_comment__token\" name=\"appbundle_comment[_token]\" value=\"WhvMZqhkkJRvAxR4I9uX1WC4wnPrbLRxrhbks-jU_MY\"></div>
        <input type=\"submit\" value=\"Create\">
    </form>
                    ";
            } else {
                // line 36
                echo "                    ";
            }
            // line 37
            echo "
                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 39
                echo "                        <p>posted by <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", array()), "html", null, true);
                echo "</strong> at  ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createdAt", array()), "d-m-Y"), "html", null, true);
                echo "</p>
                        <p>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                </div>
            </div>
            </div>









        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "\">Create a new article</a>
        </li>
    </ul>
";
        
        $__internal_12a73853ba1d8cf65897dde90976abffa94802fe5539dde07c919a449ac35cc7->leave($__internal_12a73853ba1d8cf65897dde90976abffa94802fe5539dde07c919a449ac35cc7_prof);

        
        $__internal_289e2aaeb4c3a3ac6da4f3f59b9f0a5bb922320402cf092be58190a5f32c6303->leave($__internal_289e2aaeb4c3a3ac6da4f3f59b9f0a5bb922320402cf092be58190a5f32c6303_prof);

    }

    public function getTemplateName()
    {
        return ":article:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  176 => 58,  171 => 55,  153 => 42,  145 => 40,  138 => 39,  134 => 38,  131 => 37,  128 => 36,  119 => 30,  110 => 23,  108 => 22,  103 => 20,  98 => 18,  94 => 17,  91 => 16,  85 => 14,  83 => 13,  78 => 12,  72 => 11,  68 => 10,  63 => 9,  59 => 7,  57 => 6,  53 => 5,  49 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
        {% for article in articles %}
        <div class='row article'>
            <div class= \"well\">
                <h3>{{ article.title }}</h3>
                {% if article.published !=1 %}
                <p><span>Not Published Yet</span></p>
                {% endif %}
                <p>Categorie : {{ article.category }}
                <p>{{ article.content }}</p>
                <p>created at: {{ article.createdAt|date('d-m-Y') }} {% if article.updatedAt != article.createdAt %}Edited {% endif %}
                by : {{ article.user.username }}</p>
                {% if is_granted(\"ROLE_SUPER_ADMIN\") %}
                <a href=\"{{ path('article_edit', { 'id': article.id }) }}\">edit</a>
                {% endif %}
            </div>
            <button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse{{ article.id }}\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
            Comment {{ article.getCommentsCount }}
            </button>
            <div class=\"collapse\" id=\"collapse{{ article.id }}\">
                <div class=\"well comments\">
                    {% if is_granted(\"ROLE_USER\") %}
                     <form name=\"appbundle_comment\" method=\"post\" action=\"/comment/new\">
                        <div id=\"appbundle_comment\"><div>
                        <label for=\"appbundle_comment_content\" class=\"required\">Content</label>
                        <textarea id=\"appbundle_comment_content\" name=\"appbundle_comment[content]\" required=\"required\"></textarea>
                        </div>
                        <div>
                        <label for=\"appbundle_comment_article\">Article</label>
                        <input  type=\"hidden\" id=\"appbundle_comment_article\" name=\"appbundle_comment[article]\" value=\"{{ article.id }}\">
                        </div
                        ><input type=\"hidden\" id=\"appbundle_comment__token\" name=\"appbundle_comment[_token]\" value=\"WhvMZqhkkJRvAxR4I9uX1WC4wnPrbLRxrhbks-jU_MY\"></div>
        <input type=\"submit\" value=\"Create\">
    </form>
                    {% else %}
                    {% endif %}

                    {% for comment in article.comments %}
                        <p>posted by <strong>{{ comment.user }}</strong> at  {{ comment.createdAt|date('d-m-Y') }}</p>
                        <p>{{ comment.content }}
                    {% endfor %}
                </div>
            </div>
            </div>









        {% endfor %}

    <ul>
        <li>
            <a href=\"{{ path('article_new') }}\">Create a new article</a>
        </li>
    </ul>
{% endblock %}
", ":article:index.html.twig", "/var/www/html/geek-letters/app/Resources/views/article/index.html.twig");
    }
}
