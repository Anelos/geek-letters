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
        $__internal_a7fab279fa5bb5ffa3bfbe3d0e35bd45d492babbde4686af64872de7c4604721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fab279fa5bb5ffa3bfbe3d0e35bd45d492babbde4686af64872de7c4604721->enter($__internal_a7fab279fa5bb5ffa3bfbe3d0e35bd45d492babbde4686af64872de7c4604721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:index.html.twig"));

        $__internal_dd91e591580742639e9ad6bce4fad15023e62d188202f45b942c1c21e3a50f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd91e591580742639e9ad6bce4fad15023e62d188202f45b942c1c21e3a50f13->enter($__internal_dd91e591580742639e9ad6bce4fad15023e62d188202f45b942c1c21e3a50f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_a7fab279fa5bb5ffa3bfbe3d0e35bd45d492babbde4686af64872de7c4604721->leave($__internal_a7fab279fa5bb5ffa3bfbe3d0e35bd45d492babbde4686af64872de7c4604721_prof);

        
        $__internal_dd91e591580742639e9ad6bce4fad15023e62d188202f45b942c1c21e3a50f13->leave($__internal_dd91e591580742639e9ad6bce4fad15023e62d188202f45b942c1c21e3a50f13_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_b089fbebc610d3f40d420f6f171c4b0ff93a0fc359b8efa5f79aa45aa383d108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b089fbebc610d3f40d420f6f171c4b0ff93a0fc359b8efa5f79aa45aa383d108->enter($__internal_b089fbebc610d3f40d420f6f171c4b0ff93a0fc359b8efa5f79aa45aa383d108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b08dafc0f828e2ef5cc318f187e89ce4cc278361a699d81a1c1c84a0fb6e5f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b08dafc0f828e2ef5cc318f187e89ce4cc278361a699d81a1c1c84a0fb6e5f8b->enter($__internal_b08dafc0f828e2ef5cc318f187e89ce4cc278361a699d81a1c1c84a0fb6e5f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                ";
            // line 6
            if (($this->getAttribute($context["article"], "published", array()) != 1)) {
                // line 7
                echo "                <p><span>Not Published Yet</span></p>
                ";
            }
            // line 9
            echo "                <p>";
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
            echo "</p>
                <p>by : ";
            // line 12
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
        
        $__internal_b08dafc0f828e2ef5cc318f187e89ce4cc278361a699d81a1c1c84a0fb6e5f8b->leave($__internal_b08dafc0f828e2ef5cc318f187e89ce4cc278361a699d81a1c1c84a0fb6e5f8b_prof);

        
        $__internal_b089fbebc610d3f40d420f6f171c4b0ff93a0fc359b8efa5f79aa45aa383d108->leave($__internal_b089fbebc610d3f40d420f6f171c4b0ff93a0fc359b8efa5f79aa45aa383d108_prof);

    }

    public function getTemplateName()
    {
        return ":article:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 58,  172 => 55,  154 => 42,  146 => 40,  139 => 39,  135 => 38,  132 => 37,  129 => 36,  120 => 30,  111 => 23,  109 => 22,  104 => 20,  99 => 18,  95 => 17,  92 => 16,  86 => 14,  84 => 13,  80 => 12,  72 => 11,  68 => 10,  63 => 9,  59 => 7,  57 => 6,  53 => 5,  49 => 3,  44 => 2,  26 => 1,);
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
                {% if article.published !=1 %}
                <p><span>Not Published Yet</span></p>
                {% endif %}
                <p>{{ article.category }}
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
