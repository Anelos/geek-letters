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
        $__internal_654986cf488f89c17e9218460c0054e6fc91ff584fa53baf2a9605e2475eff2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654986cf488f89c17e9218460c0054e6fc91ff584fa53baf2a9605e2475eff2c->enter($__internal_654986cf488f89c17e9218460c0054e6fc91ff584fa53baf2a9605e2475eff2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_8bc31a6ffb4e711a7f73c3f05dde3e95122052324c46b83b444ab2994eb3f2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc31a6ffb4e711a7f73c3f05dde3e95122052324c46b83b444ab2994eb3f2de->enter($__internal_8bc31a6ffb4e711a7f73c3f05dde3e95122052324c46b83b444ab2994eb3f2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_654986cf488f89c17e9218460c0054e6fc91ff584fa53baf2a9605e2475eff2c->leave($__internal_654986cf488f89c17e9218460c0054e6fc91ff584fa53baf2a9605e2475eff2c_prof);

        
        $__internal_8bc31a6ffb4e711a7f73c3f05dde3e95122052324c46b83b444ab2994eb3f2de->leave($__internal_8bc31a6ffb4e711a7f73c3f05dde3e95122052324c46b83b444ab2994eb3f2de_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_54b3ef55c33e5001319b3a07605834a880c47cafa4029b1267f039cf51d65f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b3ef55c33e5001319b3a07605834a880c47cafa4029b1267f039cf51d65f66->enter($__internal_54b3ef55c33e5001319b3a07605834a880c47cafa4029b1267f039cf51d65f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ea3e86c5cb89281e76f43a770ffd5a99a0e6bfcfa2d4471b9612ba9214041bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3e86c5cb89281e76f43a770ffd5a99a0e6bfcfa2d4471b9612ba9214041bd3->enter($__internal_ea3e86c5cb89281e76f43a770ffd5a99a0e6bfcfa2d4471b9612ba9214041bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ea3e86c5cb89281e76f43a770ffd5a99a0e6bfcfa2d4471b9612ba9214041bd3->leave($__internal_ea3e86c5cb89281e76f43a770ffd5a99a0e6bfcfa2d4471b9612ba9214041bd3_prof);

        
        $__internal_54b3ef55c33e5001319b3a07605834a880c47cafa4029b1267f039cf51d65f66->leave($__internal_54b3ef55c33e5001319b3a07605834a880c47cafa4029b1267f039cf51d65f66_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8faec732538f6e42fba80241efad72ddc0c6cce1dd2c3f526cc20ab2bcbab02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8faec732538f6e42fba80241efad72ddc0c6cce1dd2c3f526cc20ab2bcbab02b->enter($__internal_8faec732538f6e42fba80241efad72ddc0c6cce1dd2c3f526cc20ab2bcbab02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_36a3ac589a0c6ad2052b7001e829f2ef60c762a4200d93d004e078f8b1f2cb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a3ac589a0c6ad2052b7001e829f2ef60c762a4200d93d004e078f8b1f2cb44->enter($__internal_36a3ac589a0c6ad2052b7001e829f2ef60c762a4200d93d004e078f8b1f2cb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_36a3ac589a0c6ad2052b7001e829f2ef60c762a4200d93d004e078f8b1f2cb44->leave($__internal_36a3ac589a0c6ad2052b7001e829f2ef60c762a4200d93d004e078f8b1f2cb44_prof);

        
        $__internal_8faec732538f6e42fba80241efad72ddc0c6cce1dd2c3f526cc20ab2bcbab02b->leave($__internal_8faec732538f6e42fba80241efad72ddc0c6cce1dd2c3f526cc20ab2bcbab02b_prof);

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
