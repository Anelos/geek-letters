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
        $__internal_2c648a250437500e155d538081077077dbdac643d2b84d8c83a4647efc5d7460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c648a250437500e155d538081077077dbdac643d2b84d8c83a4647efc5d7460->enter($__internal_2c648a250437500e155d538081077077dbdac643d2b84d8c83a4647efc5d7460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_a8e2146f7e525e39191ba969867eb2466597ac9a51721bb1faa074cdbc803d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e2146f7e525e39191ba969867eb2466597ac9a51721bb1faa074cdbc803d29->enter($__internal_a8e2146f7e525e39191ba969867eb2466597ac9a51721bb1faa074cdbc803d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_2c648a250437500e155d538081077077dbdac643d2b84d8c83a4647efc5d7460->leave($__internal_2c648a250437500e155d538081077077dbdac643d2b84d8c83a4647efc5d7460_prof);

        
        $__internal_a8e2146f7e525e39191ba969867eb2466597ac9a51721bb1faa074cdbc803d29->leave($__internal_a8e2146f7e525e39191ba969867eb2466597ac9a51721bb1faa074cdbc803d29_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_9531419f23c4839cc6e66400522aa29e0ee83bc9db9c924519b506509d4c7d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9531419f23c4839cc6e66400522aa29e0ee83bc9db9c924519b506509d4c7d60->enter($__internal_9531419f23c4839cc6e66400522aa29e0ee83bc9db9c924519b506509d4c7d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a075845f6016d7ad550422b1ebea362df1fee8da3d94943a4333c3287cff348e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a075845f6016d7ad550422b1ebea362df1fee8da3d94943a4333c3287cff348e->enter($__internal_a075845f6016d7ad550422b1ebea362df1fee8da3d94943a4333c3287cff348e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a075845f6016d7ad550422b1ebea362df1fee8da3d94943a4333c3287cff348e->leave($__internal_a075845f6016d7ad550422b1ebea362df1fee8da3d94943a4333c3287cff348e_prof);

        
        $__internal_9531419f23c4839cc6e66400522aa29e0ee83bc9db9c924519b506509d4c7d60->leave($__internal_9531419f23c4839cc6e66400522aa29e0ee83bc9db9c924519b506509d4c7d60_prof);

    }

    // line 22
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e480fe6858355b58b268ed918d442b770fb501d83adafec34ad2c13bc51626db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e480fe6858355b58b268ed918d442b770fb501d83adafec34ad2c13bc51626db->enter($__internal_e480fe6858355b58b268ed918d442b770fb501d83adafec34ad2c13bc51626db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d8e4a397f7e442362574d26103b6d3b5eea591fb8362432b2dad8cd4ebac1997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e4a397f7e442362574d26103b6d3b5eea591fb8362432b2dad8cd4ebac1997->enter($__internal_d8e4a397f7e442362574d26103b6d3b5eea591fb8362432b2dad8cd4ebac1997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 23
        echo "            ";
        
        $__internal_d8e4a397f7e442362574d26103b6d3b5eea591fb8362432b2dad8cd4ebac1997->leave($__internal_d8e4a397f7e442362574d26103b6d3b5eea591fb8362432b2dad8cd4ebac1997_prof);

        
        $__internal_e480fe6858355b58b268ed918d442b770fb501d83adafec34ad2c13bc51626db->leave($__internal_e480fe6858355b58b268ed918d442b770fb501d83adafec34ad2c13bc51626db_prof);

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
