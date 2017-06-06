<?php

/* article/index.html.twig */
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
        $__internal_b936f5e9819cb474407a3910facb1e0cf98444f763289c5b733ecdc9746cf72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b936f5e9819cb474407a3910facb1e0cf98444f763289c5b733ecdc9746cf72e->enter($__internal_b936f5e9819cb474407a3910facb1e0cf98444f763289c5b733ecdc9746cf72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_2868446908f79c4ba59f1f73e84c8057b6da395f6e883e8115f7fee80da98a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2868446908f79c4ba59f1f73e84c8057b6da395f6e883e8115f7fee80da98a52->enter($__internal_2868446908f79c4ba59f1f73e84c8057b6da395f6e883e8115f7fee80da98a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_b936f5e9819cb474407a3910facb1e0cf98444f763289c5b733ecdc9746cf72e->leave($__internal_b936f5e9819cb474407a3910facb1e0cf98444f763289c5b733ecdc9746cf72e_prof);

        
        $__internal_2868446908f79c4ba59f1f73e84c8057b6da395f6e883e8115f7fee80da98a52->leave($__internal_2868446908f79c4ba59f1f73e84c8057b6da395f6e883e8115f7fee80da98a52_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_1c46316c49abe2e59c52db77c85d5ebf6372c1da83ea5c175ae705251a599aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c46316c49abe2e59c52db77c85d5ebf6372c1da83ea5c175ae705251a599aa5->enter($__internal_1c46316c49abe2e59c52db77c85d5ebf6372c1da83ea5c175ae705251a599aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f9d50ee81d87d286bab258028f7575ae1e838519a6ba02f7aff23502e4c08b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d50ee81d87d286bab258028f7575ae1e838519a6ba02f7aff23502e4c08b16->enter($__internal_f9d50ee81d87d286bab258028f7575ae1e838519a6ba02f7aff23502e4c08b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "        <div class='row'>
            <div class= \"well\">
                <h3>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h3>
                <p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "</p>
                <p>created at: ";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "d-m-Y"), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["article"], "updatedAt", array()) != $this->getAttribute($context["article"], "createdAt", array()))) {
                echo "Edited ";
            }
            echo "</p>
                <p>by : ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "user", array()), "username", array()), "html", null, true);
            echo "</p>
                ";
            // line 9
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 10
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">edit</a>
                ";
            }
            // line 12
            echo "            </div>
            <button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapse";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
            Comment ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "getCommentsCount", array()), "html", null, true);
            echo "
            </button>
            <div class=\"collapse\" id=\"collapse";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">
                <div class=\"well comments\">
                    ";
            // line 18
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 19
                echo "                     <form name=\"appbundle_comment\" method=\"post\" action=\"/comment/new\">
                        <div id=\"appbundle_comment\"><div>
                        <label for=\"appbundle_comment_content\" class=\"required\">Content</label>
                        <textarea id=\"appbundle_comment_content\" name=\"appbundle_comment[content]\" required=\"required\"></textarea>
                        </div>
                        <div>
                        <label for=\"appbundle_comment_article\">Article</label>
                        <input  type=\"hidden\" id=\"appbundle_comment_article\" name=\"appbundle_comment[article]\" value=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\">
                        </div
                        ><input type=\"hidden\" id=\"appbundle_comment__token\" name=\"appbundle_comment[_token]\" value=\"WhvMZqhkkJRvAxR4I9uX1WC4wnPrbLRxrhbks-jU_MY\"></div>
        <input type=\"submit\" value=\"Create\">
    </form>
                    ";
            } else {
                // line 32
                echo "                    ";
            }
            // line 33
            echo "
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 35
                echo "                        <p>posted by ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", array()), "html", null, true);
                echo " at  ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "createdAt", array()), "d-m-Y"), "html", null, true);
                echo "</p>
                        <p>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                </div>
            </div>
            </div>









        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_new");
        echo "\">Create a new article</a>
        </li>
    </ul>
";
        
        $__internal_f9d50ee81d87d286bab258028f7575ae1e838519a6ba02f7aff23502e4c08b16->leave($__internal_f9d50ee81d87d286bab258028f7575ae1e838519a6ba02f7aff23502e4c08b16_prof);

        
        $__internal_1c46316c49abe2e59c52db77c85d5ebf6372c1da83ea5c175ae705251a599aa5->leave($__internal_1c46316c49abe2e59c52db77c85d5ebf6372c1da83ea5c175ae705251a599aa5_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 54,  161 => 51,  143 => 38,  135 => 36,  128 => 35,  124 => 34,  121 => 33,  118 => 32,  109 => 26,  100 => 19,  98 => 18,  93 => 16,  88 => 14,  84 => 13,  81 => 12,  75 => 10,  73 => 9,  69 => 8,  61 => 7,  57 => 6,  53 => 5,  49 => 3,  44 => 2,  26 => 1,);
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
        <div class='row'>
            <div class= \"well\">
                <h3>{{ article.title }}</h3>
                <p>{{ article.content }}</p>
                <p>created at: {{ article.createdAt|date('d-m-Y') }} {% if article.updatedAt != article.createdAt %}Edited {% endif %}</p>
                <p>by : {{ article.user.username }}</p>
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
                        <p>posted by {{ comment.user }} at  {{ comment.createdAt|date('d-m-Y') }}</p>
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
", "article/index.html.twig", "/var/www/html/geek-letters/app/Resources/views/article/index.html.twig");
    }
}
