<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_e1c827b1c684978614784c44a6a6b56e19dfd3c96fd61264a58558f69f93a5ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46c3604c5b4dad419341e3f9021676190db6273efc263278687772af33efa29c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c3604c5b4dad419341e3f9021676190db6273efc263278687772af33efa29c->enter($__internal_46c3604c5b4dad419341e3f9021676190db6273efc263278687772af33efa29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_f8835d209ec929612ef00a8d961d82eca12c2a9706d6423fddb4fd585e36bd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8835d209ec929612ef00a8d961d82eca12c2a9706d6423fddb4fd585e36bd61->enter($__internal_f8835d209ec929612ef00a8d961d82eca12c2a9706d6423fddb4fd585e36bd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_46c3604c5b4dad419341e3f9021676190db6273efc263278687772af33efa29c->leave($__internal_46c3604c5b4dad419341e3f9021676190db6273efc263278687772af33efa29c_prof);

        
        $__internal_f8835d209ec929612ef00a8d961d82eca12c2a9706d6423fddb4fd585e36bd61->leave($__internal_f8835d209ec929612ef00a8d961d82eca12c2a9706d6423fddb4fd585e36bd61_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_b59c7c71b83c18615b26f7820c341712cd7f2c148c47d761d1b2268b5bd18a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59c7c71b83c18615b26f7820c341712cd7f2c148c47d761d1b2268b5bd18a87->enter($__internal_b59c7c71b83c18615b26f7820c341712cd7f2c148c47d761d1b2268b5bd18a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0d58eac47aaffc914b3288fbfe1fba80b37e4fab60f38c9010b9bf3bbe2cd286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d58eac47aaffc914b3288fbfe1fba80b37e4fab60f38c9010b9bf3bbe2cd286->enter($__internal_0d58eac47aaffc914b3288fbfe1fba80b37e4fab60f38c9010b9bf3bbe2cd286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "        <div>
            ";
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " |
                <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 9
        echo "        </div>

        ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 13
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 14
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 15
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        ";
        }
        // line 20
        echo "
        <div>
            ";
        // line 22
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 24
        echo "        </div>
";
        
        $__internal_0d58eac47aaffc914b3288fbfe1fba80b37e4fab60f38c9010b9bf3bbe2cd286->leave($__internal_0d58eac47aaffc914b3288fbfe1fba80b37e4fab60f38c9010b9bf3bbe2cd286_prof);

        
        $__internal_b59c7c71b83c18615b26f7820c341712cd7f2c148c47d761d1b2268b5bd18a87->leave($__internal_b59c7c71b83c18615b26f7820c341712cd7f2c148c47d761d1b2268b5bd18a87_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc80bb5b8648d194bba71e63f938a7adee496a08dc078f43ecf5ad82da8a8adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc80bb5b8648d194bba71e63f938a7adee496a08dc078f43ecf5ad82da8a8adc->enter($__internal_bc80bb5b8648d194bba71e63f938a7adee496a08dc078f43ecf5ad82da8a8adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a9e3114e763308253e5109c39cffcfd3552d47c4c98ba2fe0d152deb38750081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e3114e763308253e5109c39cffcfd3552d47c4c98ba2fe0d152deb38750081->enter($__internal_a9e3114e763308253e5109c39cffcfd3552d47c4c98ba2fe0d152deb38750081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_a9e3114e763308253e5109c39cffcfd3552d47c4c98ba2fe0d152deb38750081->leave($__internal_a9e3114e763308253e5109c39cffcfd3552d47c4c98ba2fe0d152deb38750081_prof);

        
        $__internal_bc80bb5b8648d194bba71e63f938a7adee496a08dc078f43ecf5ad82da8a8adc->leave($__internal_bc80bb5b8648d194bba71e63f938a7adee496a08dc078f43ecf5ad82da8a8adc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 23,  121 => 22,  110 => 24,  108 => 22,  104 => 20,  101 => 19,  95 => 18,  86 => 15,  81 => 14,  76 => 13,  71 => 12,  69 => 11,  65 => 9,  59 => 6,  55 => 5,  50 => 4,  48 => 3,  45 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block content %}
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ app.user.username }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
{% endblock %}", "@FOSUser/layout.html.twig", "/var/www/html/geek-letters/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
